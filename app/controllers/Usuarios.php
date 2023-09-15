<?php 

class Usuarios extends Controller{

    public function __construct(){
        $this->usuarioModel =$this->model('Usuario');
    }
    public function cadastrar(){
        
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {
            $dados = [
                'nome' => trim($formulario['nome']),
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha']),
                'confirmar_senha' => trim($formulario['confirmar_senha']),
            ];
            if (in_array("", $formulario)) {
                if (empty($formulario['nome'])) {
                    $dados['nome_erro'] = "Preencha o campo nome";
                }
                if (empty($formulario['email'])) {
                    $dados['email_erro'] = "Preencha o campo email";
                }
                if (empty($formulario['senha'])) {
                    $dados['senha_erro'] = "Preencha o campo senha";
                }
                if (empty($formulario['confirmar_senha'])) {
                    $dados['confirmar_senha_erro'] = "Preencha o campo confirmar senha";
                }
            } else {
                if (Valida::validarNome($formulario['nome'])) {
                    $dados['nome_erro'] = 'O nome digitado é inválido';
                } elseif (Valida::validarEmail($formulario['email'])) {
                    $dados['email_erro'] = 'O email digitado é inválido';
                   
                } elseif($this->usuarioModel->checarEmail($formulario['email'])){
                    $dados['email_erro'] = "Email ja cadastrado";
                } elseif (strlen($formulario['senha']) < 6) {
                    $dados['senha_erro'] = "Sua senha precisa ter mais de 6 caracteres";
                } elseif ($formulario['senha'] != $formulario['confirmar_senha']) {
                    $dados['confirmar_senha_erro'] = "As senhas nao coincidem";
                } else {
                    $dados['senha'] = password_hash($formulario['senha'], PASSWORD_DEFAULT);

                    if($this->usuarioModel->armazenar($dados)){
                        echo "Cadastro realizado com sucesso";
                    }else{
                        die("Erro ao armazenar usuario no banco de dados");
                    }
                    
                }
            }
            
        } else {
            $dados = [
                'nome' => '',
                'email' => '',
                'senha' => '',
                'confirmar_senha' => '',
                'nome_erro' => '',
                'email_erro' => '',
                'senha_erro' => '',
                'confirmar_senha_erro' => '',
            ];
        }
        
        $this->view('usuarios/cadastrar', $dados);
    }

}