<?php

namespace Pit\Multiva\Contables;

class Connection implements ConnectionI{

    protected $bigQuery;

    public function attach($bigQuery){

        $this->bigQuery=$bigQuery;

    }
    
}

?>