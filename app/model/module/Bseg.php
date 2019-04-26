<?php

namespace Pit\Multiva\Contables;

class Bseg extends Table{

    public function __construct($bigQuery){

        $this->attach($bigQuery);

    }

    public function index(){

        $sql =
        " SELECT BELNR AS numeroDocumento, BLART AS tipoDocumento, KOSTL AS referencia, PSWSL AS moneda, BUKRS AS sociedadSap, ROUND(CAST(DMBTR AS FLOAT64),2) AS importe, KOSTL AS ceco, BKTXT AS descripcion, HKONT AS cuenta,".
        " CONCAT(SUBSTR(BUDAT,1,4),'-',SUBSTR(BUDAT,5,2),'-',SUBSTR(BUDAT,7,2)) AS fecha".
        " FROM `informe-211921.CONTABLES.Bsegaio`".
        " WHERE KOSTL IN (SELECT DISTINCT(ceco) FROM `informe-211921.CONTABLES.Ceco`)".
        " AND HKONT IN(SELECT DISTINCT(cuenta) FROM `informe-211921.CONTABLES.Cuentas`)".
        " ORDER BY CAST(BUDAT AS INT64)";
        $bseg=$this->bigQuery->select($sql);
        return $bseg;

    }

    public function mes($month){

        $sql =
        " SELECT BELNR AS numeroDocumento, BLART AS tipoDocumento, KOSTL AS referencia, PSWSL AS moneda, BUKRS AS sociedadSap, ROUND(CAST(DMBTR AS FLOAT64),2) AS importe, KOSTL AS ceco, BKTXT AS descripcion, HKONT AS cuenta,".
        " CONCAT(SUBSTR(BUDAT,1,4),'-',SUBSTR(BUDAT,5,2),'-',SUBSTR(BUDAT,7,2)) AS fecha".
        " FROM `informe-211921.CONTABLES.Bsegaio`".
        " WHERE KOSTL IN (SELECT DISTINCT(ceco) FROM `informe-211921.CONTABLES.Ceco`)".
        " AND CAST(SUBSTR(BUDAT,5,2) AS INT64) = ".$month.
        " AND HKONT IN(SELECT DISTINCT(cuenta) FROM `informe-211921.CONTABLES.Cuentas`)".
        " ORDER BY CAST(BUDAT AS INT64)";

    }

}

?>