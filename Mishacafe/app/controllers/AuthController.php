<?php

class AuthController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = $_POST['usuario'] ?? '';
            $password = $_POST['password'] ?? '';

            if ($usuario === 'admin@cafe.com' && $password === '12345678') {
                session_start();
                $_SESSION['user_id'] = 1;
                $_SESSION['usuario'] = $usuario;
                header('Location: /Mishacafe/public/index.php');
                exit;
            } else {
                $error = "Credenciales incorrectas";
                include __DIR__ . '/Mishacafe/app/views/login.php';
            }
        } else {
            include __DIR__ . '/Mishacafe/app/views/login.php';
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location: /Mishacafe/public/index.php');
        exit;
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = $_POST['usuario'] ?? '';
            $password = $_POST['password'] ?? '';
            header('Location: /Mishacafe/public/login.php');
            exit;
        } else {
            include __DIR__ . '/../views/registro.php';
        }
    }
}
