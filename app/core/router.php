<?php

class Router {

    //por default clase, metodo y parametro
    private $controller='test';
    private $method = 'index';
    private $parameters = [];

    public function __construct(){

        $this->readUrl();
        $this->loadController();
        $this->loadMethod();

    }

    // leemos URL y la cortamos el 3
    public function readUrl(){

        if(isset($_GET['url'])){

            $url=rtrim($_GET['url'],'/');
            $url=filter_var($url,FILTER_SANITIZE_URL);
            $url=explode('/',$url);
            $this->controller = $url[0]; unset($url[0]);
            $this->method = $url[1];  unset($url[1]);
            $this->parameters = $url ? array_values($url) : [];

        }

    }

    // cargamos clase del elemento 0 de la URL
    public function loadController(){
    
        $route='../app/controller/'.$this->controller.'.php';
    
        // de existir la clase llevamos a cabo la carga
        if(file_exists($route)){
    
            require_once($route);

            $this->controller = new $this->controller;

        }
    
        else{

            echo('not found');
       
        }
        
    }

    // cargamos metodo (elemento 1)  y parametros (elemento 2)
    public function loadMethod(){

        // de existir el metodo llevamos a cabo la carga
        if(method_exists($this->controller,$this->method)){

            call_user_func_array([$this->controller,$this->method],$this->parameters);

        }

    }



}

?>

