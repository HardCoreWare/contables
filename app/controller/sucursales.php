<?php

class sucursales{

    public function index(){

        $cecosModel = new Pit\Multiva\Contables\Cecos(BigQuery::getInstance('informe-211921'));
        $cecos = $cecosModel->index();
        echo(json_encode($cecos));
        
    }
    
}


?>