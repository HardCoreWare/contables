<?php

namespace Pit\Multiva\Contables;

class Concept extends Table{

    public function __construct($bigQuery){

        $this->attach($bigQuery);

    }

    public function index(){

       $sql = "SELECT id,superConcepto,concepto".
        " FROM `informe-211921.CONTABLES.Conceptos`".
        " WHERE ARRAY_LENGTH(cuenta)>0".
        " ORDER BY id ;";
        $cuentas = $this->bigQuery->select($sql);
        return $cuentas;

    }

}

?>