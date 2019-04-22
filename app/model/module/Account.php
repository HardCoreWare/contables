<?php

namespace Pit\Multiva\Contables;

class Account extends Table{

    public function __construct($bigQuery){

        $this->attach($bigQuery);

    }

    public function index(){

        echo('ok');

    }

}

?>