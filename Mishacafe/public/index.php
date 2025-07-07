<?php
// index.php (ubicado fuera de /public)

// Iniciar sesión si no está iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Incluye el enrutador principal
require_once __DIR__ . '/../../routes/web.php';
