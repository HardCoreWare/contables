<?php

namespace Pit\Multiva\Contables;

class Concept extends Table{

    public function __construct($bigQuery){

        $this->attach($bigQuery);

    }

    public function index(){

        $sql = "SELECT id AS idConcepto, superConcepto, concepto, prorrateable ".
        " FROM".
        " `informe-211921.CONTABLES.Conceptos`".
        " ORDER BY id";

        $cuentas = $this->bigQuery->select($sql);
        return $cuentas;

    }

}

?>