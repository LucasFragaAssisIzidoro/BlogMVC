<?php

class Posts extends Controller{

    public function __construct(){
        if(!Sessao::estaLogado()){
            Url::redirecionar('usuarios/login');
        } 
        $this->postModel = $this->model('Post');
    }
    public function index(){
        $this->view('posts/index');
    }  

    public function cadastrar(){
        
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {
            $dados = [
                'titulo' => trim($formulario['titulo']),
                'texto' => trim($formulario['texto']),
                'id_usuario'=> $_SESSION['usuario_id'],
            ];
            if(in_array("", $formulario)){
                if(empty($dados['titulo'])) {
                    $dados['titulo_erro'] = "Preencha o campo título";
                }
                if (empty($dados['texto'])) {
                    $dados['texto_erro'] = "Preencha o campo texto";
                }
            }else{
                echo "cheguei ate aqui";
                if($this->postModel->armazenar($dados)){
                    Sessao::mensagem('post', 'Post cadastrado com sucesso!');
                    Url::redirecionar('posts');
                    }else{
                        echo ("Erro ao armazenar post no banco de dados");
                    }
            }    
        }else {
            $dados = [
                'titulo' => '',
                'texto' => '',
                'titulo_erro' => '',
                'texto_erro' => '',
            ];
        }
        
        $this->view('posts/cadastrar', $dados);
    }
}