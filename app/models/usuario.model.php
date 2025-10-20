<?php
require_once './config.php';

class UsuarioModel {
    private $db;

    public function __construct() {
        $this->db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
    }

    public function getByUser($usuario) {
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE usuario = ?");
        $query->execute([$usuario]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function verificar($usuario, $password) {
        $user = $this->getByUser($usuario);
        if ($user && hash('sha256', $password) === $user->password) {
            return $user;
        }
        return false;
    }
}


