<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

// Log error ke file
$logFile = '/tmp/php-error.log';
ini_set('error_log', $logFile);

try {
    require __DIR__ . '/../public/index.php';
} catch (Exception $e) {
    error_log($e->getMessage());
    echo "Error: " . $e->getMessage();
}
EOF
