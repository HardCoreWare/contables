<?php

class conceptos{

    public function __construct(){

        header("Access-Control-Allow-Origin: *");
        header('Content-Type: application/json');

    }

    public function index(){

        $accountModel = new Pit\Multiva\Contables\Concept(BigQuery::getInstance('informe-211921'));
        $account = $accountModel->index();
        echo(json_encode($account));
        
    }

}

?>