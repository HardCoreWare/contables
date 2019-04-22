<?php

namespace Pit\Multiva\Contables;

class Bseg extends Table{

    public function __construct($bigQuery){

        $this->attach($bigQuery);

    }

    public function index(){

        $sql ="SELECT BUKRS AS sociedadSap, CAST(DMBTR AS FLOAT64) AS importe, KOSTL AS ceco, BKTXT AS descripcion, HKONT AS cuenta,".
        " CONCAT(SUBSTR(BUDAT,1,4),'/',SUBSTR(BUDAT,5,2),'/',SUBSTR(BUDAT,7,2)) AS fecha".
        " FROM `informe-211921.CONTABLES.Bsegaio`".
        " WHERE KOSTL IN (SELECT numero FROM `informe-211921.CONTABLES.Cecos`)".
        " ORDER BY CAST(BUDAT AS INT64)";
        $bseg=$this->bigQuery->select($sql);
        return $bseg;

    }

}

?>