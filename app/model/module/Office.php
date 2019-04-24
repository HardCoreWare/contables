<?php

namespace Pit\Multiva\Contables;

class Office extends Table{

    public function __construct($bigQuery){

        $this->attach($bigQuery);

    }

    public function index(){

        $sql = "SELECT id AS idSucursal, area, sucursal ".
        " FROM `informe-211921.CONTABLES.Sucursales`".
        " ORDER BY id";
        $cuentas = $this->bigQuery->select($sql);
        return $cuentas;

    }

}

?>