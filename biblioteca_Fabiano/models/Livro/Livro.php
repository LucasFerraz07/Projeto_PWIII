<?php
    class Livro {
        private $id;
        private $titulo;
        private $isbn;
        private $autor;
        private $ano_publicacao;

        public function __construct($data = null) {
            if ($data) {
                $this->id = $data['id'] ?? null;
                $this->titulo = $data['titulo'] ?? null;
                $this->isbn = $data['isbn'] ?? null;
                $this->autor = $data['autor'] ?? null;
                $this->ano_publicacao = $data['ano_publicacao'] ?? null;
            }
        }

        // Getters
        public function getId() { return $this->id; }
        public function getTitulo() { return $this->titulo; }
        public function getIsbn() { return $this->isbn; }
        public function getAutor() { return $this->autor; }
        public function getAnoPublicacao() { return $this->ano_publicacao; }

        // Setters
        public function setTitulo($titulo) { $this->titulo = $titulo; }
        public function setIsbn($isbn) { $this->isbn = $isbn; }
        public function setAutor($autor) { $this->autor = $autor; }
        public function setAnoPublicacao($ano_publicacao) { $this->ano_publicacao = $ano_publicacao; }
    }
?>