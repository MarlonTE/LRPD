<?php
require_once __DIR__ . '/../Mishacafe/app/controllers/ProductController.php';
require_once __DIR__ . '/../Mishacafe/app/controllers/AuthController.php';
// Make sure the file path above is correct and the AuthController class is defined in that file.

$productController = new ProductController();
$authController = new AuthController();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
    case '/index.php':
    case '/Mishacafe/public/':
    case '/Mishacafe/public/index.php':
        $productController->index();
        break;
    case '/login':
    case '/login.php':
        $authController->login();
        break;
    case '/logout':
    case '/logout.php':
        $authController->logout();
        break;
    case '/registro':
    case '/registro.php':
        $authController->register();
        break;
    // Agrega aquí más rutas según tus necesidades
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}
