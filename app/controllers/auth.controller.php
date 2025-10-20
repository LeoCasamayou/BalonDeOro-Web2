<?php
require_once __DIR__ . '/../../config.php';

class AuthController {

    public function showLogin() {
        if (!empty($_SESSION['USER'])) {
            header('Location: ' . BASE_URL . 'listar');
            exit;
        }
        require __DIR__ . '/../views/auth/login.php';
    }

    public function login() {
        $user = $_POST['user'] ?? '';
        $pass = $_POST['pass'] ?? '';

        if ($user === ADMIN_USER && $pass === ADMIN_PASS) {
            $_SESSION['USER'] = $user;
            header('Location: ' . BASE_URL . 'listar');
            exit;
        } else {
            $error = 'Usuario o contraseña incorrectos';
            require __DIR__ . '/../views/auth/login.php';
        }
    }

    public function logout() {
        session_destroy();
        header('Location: ' . BASE_URL . 'login');
        exit;
    }
}

