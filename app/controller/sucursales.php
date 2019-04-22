<?php

class sucursales{

    public function index(){

        $cecosModel = new Pit\Multiva\Contables\Cecos(BigQuery::getInstance('informe-211921'));
        
    }
    
}


?>