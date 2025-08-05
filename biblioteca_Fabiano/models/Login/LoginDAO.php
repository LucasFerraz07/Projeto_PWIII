<?php
require_once 'UsuarioDAO.php';
require_once 'Usuario.php';

class Login {
    private $usuarioDAO;

    public function __construct() {
        $this->usuarioDAO = new UsuarioDAO();
    }

    // Valida o login
    public function validarLogin($email, $senha) {
        $usuario = $this->buscarPorEmail($email);
        if ($usuario && password_verify($senha, $usuario['senha'])) {
            return new Usuario($usuario); // Cria objeto Usuario
        }
        return null;
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
    }
}
