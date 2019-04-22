<?php

namespace Pit\Multiva\Contables;

class Account extends Table{

    public function __construct($bigQuery){

        $this->attach($bigQuery);

    }

    public function index(){

        $sql = "SELECT idConcepto, cuenta FROM `informe-211921.CONTABLES.Cuentas` ORDER BY id;";
        $cecos = $this->bigQuery->select($sql);
        return $cecos;

    }
    
}


?>