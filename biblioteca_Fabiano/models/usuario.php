<?php
class Usuario {
    private $id;
    private $email;
    private $nome;
    private $telefone;
    private $senha;
    public function __construct($data = null) {
        if ($data) {
            $this->id = $data['id'] ?? null;
            $this->email = $data['email'] ?? null;
            $this->senha = $data['senha'] ?? null;
            $this->nome = $data['nome'] ?? null;
            $this->telefone = $data['telefone'] ?? null;
        }
    }

    // Getters e Setters
    public function getId() { return $this->id; }
    public function getEmail() { return $this->email; }
    public function getSenhaHash() { return $this->senha; }
    public function getNome() { return $this->nome; }
    public function getTelefone() { return $this->telefone; }

    public function setEmail($email) { $this->email = $email; }
    public function setSenhaHash($senha) { $this->senha = $senha; }
    public function setNome($nome) { $this->nome = $nome; }
    public function setTelefone($telefone) { $this->telefone = $telefone; }
}

?>