<?php

class cuentas{

    public function __construct(){

        header("Access-Control-Allow-Origin: *");
        header('Content-Type: application/json');

    }

    public function index(){

        $cecosModel = new Pit\Multiva\Contables\Account(BigQuery::getInstance('informe-211921'));
        $cecos = $cecosModel->index();
        echo(json_encode($cecos));
        
    }

}

?>