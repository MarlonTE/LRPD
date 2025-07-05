<?php
session_start();

// Datos ficticios para validar
$usuario_valido = "admin@cafe.com";
$contrasena_valida = "123456";

// Obtener datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Validar
if ($email === $usuario_valido && $password === $contrasena_valida) {
    $_SESSION['usuario'] = $email;
    header("Location: index.html"); // Redirige a la página principal
    exit();
} else {
    echo "<h2>❌ Credenciales incorrectas.</h2>";
    echo "<p><a href='login.html'>Volver a intentar</a></p>";
}
?>
