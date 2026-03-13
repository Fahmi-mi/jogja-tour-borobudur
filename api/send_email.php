<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

require_once __DIR__ . '/../config/constants.php';

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validateInput($nama, $email, $subjek, $pesan) {
    $errors = [];
    
    if (empty(trim($nama))) {
        $errors[] = 'Full name cannot be empty';
    } elseif (strlen($nama) > 100) {
        $errors[] = 'Full name cannot exceed 100 characters';
    }
    
    if (empty(trim($email))) {
        $errors[] = 'Email cannot be empty';
    } elseif (!validateEmail($email)) {
        $errors[] = 'Invalid email format';
    }
    
    if (empty(trim($subjek))) {
        $errors[] = 'Subject cannot be empty';
    } elseif (strlen($subjek) > 200) {
        $errors[] = 'Subject cannot exceed 200 characters';
    }
    
    if (empty(trim($pesan))) {
        $errors[] = 'Message cannot be empty';
    } elseif (strlen($pesan) > 2000) {
        $errors[] = 'Message cannot exceed 2000 characters';
    }
    
    return $errors;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Method not allowed. Only POST is accepted.'
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
    $email = isset($data['email']) ? filter_var(trim($data['email']), FILTER_SANITIZE_EMAIL) : '';
    $subjek = isset($data['subjek']) ? htmlspecialchars(trim($data['subjek']), ENT_QUOTES, 'UTF-8') : '';
    $pesan = isset($data['pesan']) ? htmlspecialchars(trim($data['pesan']), ENT_QUOTES, 'UTF-8') : '';
    
    $errors = validateInput($nama, $email, $subjek, $pesan);
    if (!empty($errors)) {
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'message' => implode(', ', $errors)
        ]);
        exit;
    }
    
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    $logFile = __DIR__ . '/../logs/email_submissions.log';
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
    
    if ($recentSubmissions >= 5) {
        http_response_code(429);
        echo json_encode([
            'success' => false,
            'message' => 'Too many submissions. Please try again later.'
        ]);
        exit;
    }
    
    $to = COMPANY_EMAIL;
    $from = $email;
    $headers = "From: $nama <$from>\r\n";
    $headers .= "Reply-To: $from\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    $fullSubjek = "[Website Contact Form] $subjek";
    $fullPesan = "Nama: $nama\n";
    $fullPesan .= "Email: $email\n";
    $fullPesan .= "Subjek: $subjek\n\n";
    $fullPesan .= "Pesan:\n$pesan\n\n";
    $fullPesan .= "---\n";
    $fullPesan .= "Dikirim dari: " . ($_SERVER['HTTP_REFERER'] ?? 'Unknown') . "\n";
    $fullPesan .= "IP Address: $ip\n";
    $fullPesan .= "Waktu: " . date('Y-m-d H:i:s');
    
    $sent = mail($to, $fullSubjek, $fullPesan, $headers);
    
    if ($sent) {
        file_put_contents($logFile, "$ip|$currentTime\n", FILE_APPEND);
        
        $emailLog = date('[Y-m-d H:i:s] ') . "Email dari: $nama ($email) - Subjek: $subjek\n";
        file_put_contents(__DIR__ . '/../logs/email_sent.log', $emailLog, FILE_APPEND);
        
        http_response_code(200);
        echo json_encode([
            'success' => true,
            'message' => 'Email successfully sent. We will contact you soon!'
        ]);
    } else {
        $fallbackFile = __DIR__ . '/../logs/email_fallback.log';
        $fallbackData = date('[Y-m-d H:i:s] ') . json_encode([
            'nama' => $nama,
            'email' => $email,
            'subjek' => $subjek,
            'pesan' => $pesan,
            'ip' => $ip
        ], JSON_PRETTY_PRINT) . "\n\n";
        file_put_contents($fallbackFile, $fallbackData, FILE_APPEND);
        
        throw new Exception('Failed to send email');
    }
    
} catch (Exception $e) {
    error_log(date('[Y-m-d H:i:s] ') . 'Error in send_email.php: ' . $e->getMessage() . PHP_EOL, 3, __DIR__ . '/../logs/error.log');
    
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'An error occurred while sending the email. Please try again or contact us via WhatsApp.'
    ]);
}