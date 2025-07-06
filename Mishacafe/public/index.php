<?php
// index.php (ubicado fuera de /public)

// Iniciar sesión si no está iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Autoload de clases (puedes usar Composer o un autoloader propio)
require_once __DIR__ . '/../app/controllers/ProductoController.php';
// require otros controladores según necesites

// Enrutamiento simple (puedes mejorarlo luego)
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
    case '/index.php':
        (new ProductoController())->index();
        break;
    // Agrega más rutas aquí
    default:
        http_response_code(404);
        echo "Página no encontrada";
        break;
}
