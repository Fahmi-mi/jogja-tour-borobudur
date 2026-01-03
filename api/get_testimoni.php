<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');

require_once __DIR__ . '/../config/db.php';

function getFromCache() {
    $cacheFile = __DIR__ . '/../cache/testimoni.json';
    
    if (file_exists($cacheFile)) {
        $content = file_get_contents($cacheFile);
        $data = json_decode($content, true);
        return is_array($data) ? $data : [];
    }
    
    return [];
}

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Method not allowed. Only GET is accepted.'
    ]);
    exit;
}

try {
    $testimoni = [];
    $conn = getDbConnection();
    
    if ($conn) {
        $sql = "SELECT nama, pesan, rating, created_at 
                FROM testimoni 
                ORDER BY created_at DESC 
                LIMIT 10";
        
        $result = $conn->query($sql);
        
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $testimoni[] = [
                    'nama' => htmlspecialchars_decode($row['nama']),
                    'pesan' => htmlspecialchars_decode($row['pesan']),
                    'rating' => intval($row['rating']),
                    'created_at' => $row['created_at']
                ];
            }
            $result->free();
        }
        
        $conn->close();
        
        if (!empty($testimoni)) {
            $cacheFile = __DIR__ . '/../cache/testimoni.json';
            file_put_contents($cacheFile, json_encode($testimoni, JSON_PRETTY_PRINT));
        }
    }
    
    if (empty($testimoni)) {
        $testimoni = getFromCache();
    }
    
    http_response_code(200);
    echo json_encode($testimoni);
    
} catch (Exception $e) {
    error_log(date('[Y-m-d H:i:s] ') . 'Error in get_testimoni.php: ' . $e->getMessage() . PHP_EOL, 3, __DIR__ . '/../logs/error.log');
    
    $testimoni = getFromCache();
    
    http_response_code(200);
    echo json_encode($testimoni);
}