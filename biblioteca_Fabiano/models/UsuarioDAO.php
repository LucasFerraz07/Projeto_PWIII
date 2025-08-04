<?php
require_once 'Usuario.php';
require_once '../config/Conexao.php';

class UsuarioDAO {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    // Busca um usuário pelo email
    public function buscarPorEmail($email) {
        $query = "SELECT * FROM biblioteca_db.tbl_usuario WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Valida o login
    public function validarLogin($email, $senha) {
        $usuario = $this->buscarPorEmail($email);
        if ($usuario && password_verify($senha, $usuario['senha'])) {
            return new Usuario($usuario); // Cria objeto Usuario
        }
        return null;
    }

    public function cadastrar($email, $senha, $nome, $telefone) {
    // Verifica se já existe um usuário com esse e-mail
    if ($this->buscarPorEmail($email)) {
        return false; // E-mail já cadastrado
    }

    $senha = password_hash($senha, PASSWORD_DEFAULT);

    // Insere o usuário no banco
    $query = "INSERT INTO biblioteca_db.tbl_usuario (email, senha, nome, telefone) VALUES (:email, :senha, :nome, :telefone)";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha_hash);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':telefone', $telefone);

    return $stmt->execute(); // true se cadastrou, false se erro
}

public function buscarPorId($id) {
    $query = "SELECT * FROM biblioteca_db.tbl_usuario WHERE id = :id";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($data) {
        return new Usuario($data);
    }
    return null;
}
}