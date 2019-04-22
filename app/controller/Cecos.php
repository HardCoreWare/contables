<?php

class Cecos{

    public function index(){

        $sql="SELECT id,numero,area,sucursal FROM `informe-211921.CONTABLES.Cecos` ORDER BY id";
        $cecos=$this->bigQuery->select($sql);
        return $cecos;
    }

}

?>