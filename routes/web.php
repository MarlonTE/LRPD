<?php
require_once __DIR__ . '/../app/controllers/ProductoController.php';

$controller = new ProductoController();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
    case '/index.php':
        $controller->index();
        break;
    // Ejemplo de nueva ruta:
    // case '/login':
    //     $controller->login();
    //     break;
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}
