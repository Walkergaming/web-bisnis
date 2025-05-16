<?php
session_start();
require_once __DIR__ . '/../src/config/config.php';

spl_autoload_register(function ($class) {
    $paths = [
        __DIR__ . '/../src/controllers/' . $class . '.php',
        __DIR__ . '/../src/models/' . $class . '.php',
    ];
    foreach ($paths as $file) {
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

$controller = new HomeController();
$action = $_GET['action'] ?? 'index';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $action === 'sendContact') {
    $controller->sendContact();
} elseif (method_exists($controller, $action)) {
    $controller->$action();
} else {
    http_response_code(404);
    echo "404 Not Found";
}