<?php
//ARRUMAR!!!!!!!!!
class Usuario {
    private $id;
    private $cpf;
    private $cnpj;
    private $email;
    private $senha_hash;
    private $created_at;

    public function __construct($data = null) {
        if ($data) {
            $this->id = $data['id'] ?? null;
            $this->email = $data['email'] ?? null;
            $this->cpf = $data['cpf'] ?? null;
            $this->cnpj = $data['cnpj'] ?? null;
            $this->senha_hash = $data['senha_hash'] ?? null;
            $this->created_at = $data['created_at'] ?? null;
        }
    }

    // Getters e Setters
    public function getId() { return $this->id; }
    public function getCpf() { return $this->cpf; }
    public function getCnpj() { return $this->cnpj; }
    public function getEmail() { return $this->email; }
    public function getSenhaHash() { return $this->senha_hash; }
    public function getCreatedAt() { return $this->created_at; }

    public function setCpf($cpf) { $this->cpf = $cpf; }
    public function setCnpj($cnpj) { $this->cnpj = $cnpj; }
    public function setEmail($email) { $this->email = $email; }
    public function setSenhaHash($senha_hash) { $this->senha_hash = $senha_hash; }
}

?>