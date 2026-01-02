<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'jogja-tour-borobudur');

function getDbConnection() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($conn->connect_error) {
        error_log(
            date('[Y-m-d H:i:s] ') . 'Database connection failed: ' . $conn->connect_error . PHP_EOL,
            3,
            __DIR__ . '/../logs/error.log'
        );
        return null;
    }

    $conn->set_charset('utf8mb4');
    return $conn;
}

?>