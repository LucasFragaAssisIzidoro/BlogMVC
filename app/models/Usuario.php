<?php

    class Usuario{
        private $db;
        public function __construct(){
            $this->db = new Database();
        }
        public function checarEmail($email){
            $this->db->query("SELECT email_usuario from usuario WHERE email_usuario = :email_usuario");
            $this->db->bind(":email_usuario", $email);

            if($this->db->resultado()){
                return true;
            }else{
                return false;
            }
        }
        public function armazenar($dados){
            $this->db->query("INSERT INTO usuario(nome_usuario, email_usuario, senha_usuario) VALUES (:nome_usuario, :email_usuario, :senha_usuario)");
            $this->db->bind(":nome_usuario", $dados['nome']);
            $this->db->bind(":email_usuario", $dados['email']);
            $this->db->bind(":senha_usuario", $dados['senha']);
            
            if($this->db->executa()){
                return true;
            }else{
                return false;
            }
        }
        public function checarLogin($email, $senha){
            $this->db->query("SELECT * from usuario WHERE email_usuario = :email_usuario");
            $this->db->bind(":email_usuario", $email);

            if($this->db->resultado()){
                $resultado = $this->db->resultado();
                if(password_verify($senha, $resultado->senha_usuario)){
                    return $resultado;
                }else{
                return false;
                }   
            }else{
                return false;
            }
        }
    }