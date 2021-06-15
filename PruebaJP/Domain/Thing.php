<?php

class Thing 
{   public $code;
    public $name;
    public $priceCost;
    public $quantityAvailable;
 
    

    function __construct()
    {
        $params = func_get_args();
        $num_params = func_num_args();
        $funcion_constructor = '__construct' . $num_params;
        if (method_exists($this, $funcion_constructor)) {
            call_user_func_array(array($this, $funcion_constructor), $params);
        }
    }

    function __construct0()
    {
        
    }

    function __construct5($code, $name, $priceCost, $quantityAvailable)
    {
        $this->code = $code;
        $this->name = $name;
        $this->priceCost = $priceCost;
        $this->quantityAvailable = $quantityAvailable;
            
    }

    function setCode($code) {
        $this->code = $code;
    }

    function getCode() {
        return $this->code;
    }
    function setName($name) {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }
    function setPriceCost($priceCost) {
        $this->priceCost = $priceCost;
    }

    function getPriceCost() {
        return $this->priceCost;
    }
    function setQuantityAvailable($quantityAvailable) {
        $this->quantityAvailable = $quantityAvailable;
    }

    function getQuantityAvailable() {
        return $this->quantityAvailable;
    }
}