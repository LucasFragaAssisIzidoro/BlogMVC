<?php

    class Post{
        private $db;
        public function __construct(){
            $this->db = new Database();
        }
        public function armazenar($dados){
            $this->db->query("INSERT INTO posts(id_usuario, titulo, texto) VALUES (:id_usuario, :titulo, :texto)");
            $this->db->bind(":id_usuario", $dados['id_usuario']);
            $this->db->bind(":titulo", $dados['titulo']);
            $this->db->bind(":texto", $dados['texto']);
            
            if($this->db->executa()){
                return true;
            }else{
                return false;
            }
        }
    }