<?php

namespace Pit\Multiva\Contables;

abstract class Table extends Connection implements TableI{
    
    public abstract function index();

}

?>