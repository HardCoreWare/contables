<?php

namespace Pit\Multiva\Contables;

class Ceco extends Table{

    public function __construct($bigQuery){

        $this->attach($bigQuery);

    }

    public function index(){

        $sql = "SELECT idSucursal AS idDepartamento, ceco ".
        " FROM `informe-211921.CONTABLES.Ceco` ORDER BY idSucursal;";
        $cecos = $this->bigQuery->select($sql);
        return $cecos;

    }
    
}

?>