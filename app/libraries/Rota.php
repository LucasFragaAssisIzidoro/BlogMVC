<?php

class Rota{

    private $controlador = 'Paginas';
    private $metodo = 'index';
    private $parametros = [];

    public function __construct() {
        $url = $this->url() ? $this->url() : [0];// se url existe, url recebe url, senao, url recebe um array c indice 0

        if(file_exists('../app/controllers/'.ucwords($url[0].'.php'))){
            $this->controlador = ucwords($url[0]);
            unset($url[0]);
        }
        require_once '../app/controllers/'.$this->controlador.'.php';
        $this->controlador = new $this->controlador;

        if(isset($url[1])){
            if(method_exists($this->controlador, $url[1])){
                $this->metodo = $url[1];
                unset($url[1]);
            }
        }
        $this->parametros = $url ? array_values($url) : [];
        call_user_func_array([$this->controlador, $this->metodo], $this->parametros);

        
    }
    public function url(){
        $url = filter_input(INPUT_GET,'url',FILTER_SANITIZE_URL);
        if(isset($url)){
            $url = trim(rtrim($url,'/'));//impedindo que barras e espacos estejam na url digitada pelo usuario

            $url = explode('/', $url);//quebrando a url para que n seja retornado somente uma string, e sim um array

            return $url;
        }
            
        
    }


}