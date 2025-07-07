<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="/Mishacafe/public/css/style.css">
</head>

<body>
    <h2>Registro de Usuario</h2>
    <form action="/Mishacafe/app/views/registro.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Registrarse</button>
    </form>
    <p>¿Ya tienes cuenta? <a href="/Mishacafe/app/views/login.php">Inicia sesión aquí</a></p>
    <style>

    </style>
</body>

</html>