<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

require_once __DIR__ . '/../config/db.php';

function saveToCache($data) {
    $cacheFile = __DIR__ . '/../cache/testimoni.json';
    $existingData = [];

    if (file_exists($cacheFile)) {
        $content = file_get_contents($cacheFile);
        $existingData = json_decode($content, true) ?: [];
    };

    array_unshift($existingData, $data);
    $existingData = array_slice($existingData, 0, 10);

    file_put_contents($cacheFile, json_encode($existingData, JSON_PRETTY_PRINT));
};

function validateInput($nama, $pesan, $rating) {
    $errors = [];

    if (empty(trim($nama))) {
        $errors[] = 'Nama tidak boleh kosong';
    } else if (strlen($nama) > 100) {
        $errors[] = 'Nama tidak boleh lebih dari 100 karakter';
    }

    if (empty(trim($pesan))) {
        $errors[] = 'Pesan tidak boleh kosong';
    } else if (strlen($pesan) > 1000) {
        $errors[] = 'Pesan tidak boleh lebih dari 1000 karakter';
    }

    if (!is_numeric($rating) || $rating < 1 || $rating > 5) {
        $errors[] = 'Rating harus berupa angka antara 1 hingga 5';
    }

    return $errors;
};

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Method Not Allowed'
    ]);
    exit;
}

try {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);
    
    if (!$data) {
        throw new Exception('Invalid JSON format');
    }
    
    $nama = isset($data['nama']) ? htmlspecialchars(trim($data['nama']), ENT_QUOTES, 'UTF-8') : '';
    $pesan = isset($data['pesan']) ? htmlspecialchars(trim($data['pesan']), ENT_QUOTES, 'UTF-8') : '';
    $rating = isset($data['rating']) ? intval($data['rating']) : 0;
    
    $errors = validateInput($nama, $pesan, $rating);
    if (!empty($errors)) {
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'message' => implode(', ', $errors)
        ]);
        exit;
    }
    
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    $logFile = __DIR__ . '/../logs/testimoni_submissions.log';
    $currentTime = time();
    $recentSubmissions = 0;
    
    if (file_exists($logFile)) {
        $logs = file($logFile, FILE_IGNORE_NEW_LINES);
        foreach ($logs as $log) {
            $parts = explode('|', $log);
            if (count($parts) === 2 && $parts[0] === $ip) {
                $timestamp = intval($parts[1]);
                if ($currentTime - $timestamp < 3600) {
                    $recentSubmissions++;
                }
            }
        }
    }
    
    if ($recentSubmissions >= 3) {
        http_response_code(429);
        echo json_encode([
            'success' => false,
            'message' => 'Terlalu banyak submission. Silakan coba lagi nanti.'
        ]);
        exit;
    }
    
    $conn = getDbConnection();
    
    if ($conn) {
        $stmt = $conn->prepare("INSERT INTO testimoni (nama, pesan, rating) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $nama, $pesan, $rating);
        
        if ($stmt->execute()) {
            file_put_contents($logFile, "$ip|$currentTime\n", FILE_APPEND);
            
            saveToCache([
                'nama' => $nama,
                'pesan' => $pesan,
                'rating' => $rating,
                'created_at' => date('Y-m-d H:i:s')
            ]);
            
            http_response_code(201);
            echo json_encode([
                'success' => true,
                'message' => 'Testimoni berhasil disimpan. Terima kasih!'
            ]);
        } else {
            throw new Exception('Gagal menyimpan testimoni ke database');
        }
        
        $stmt->close();
        $conn->close();
    } else {
        saveToCache([
            'nama' => $nama,
            'pesan' => $pesan,
            'rating' => $rating,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        
        file_put_contents($logFile, "$ip|$currentTime\n", FILE_APPEND);
        
        http_response_code(201);
        echo json_encode([
            'success' => true,
            'message' => 'Testimoni berhasil disimpan. Terima kasih!'
        ]);
    }
    
} catch (Exception $e) {
    error_log(date('[Y-m-d H:i:s] ') . 'Error in post_testimoni.php: ' . $e->getMessage() . PHP_EOL, 3, __DIR__ . '/../logs/error.log');
    
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Terjadi kesalahan. Silakan coba lagi.'
    ]);
}