<?php

class ValidationLogic
{
    public function __construct()
    { }

    public function validarNumeros($array)
    {
        $bandera = true;
        foreach ($array as $item) {
            if (!is_numeric($item)) {
                $bandera = false;
                break;
            }
        }
        return $bandera;
    }
    public function validarTexto($array)
    {
        $bandera = true;
        foreach ($array as $item) {
            if (!is_string($item)) {
                $bandera = false;
                break;
            }
        }
        return $bandera && !$this->validarNumeros($array);
    }
    public function validarCampoCompleto($array)
    {
        $bandera = true;
        foreach ($array as $item) {
            if (strlen($item) == 0) {
                $bandera = false;
                break;
            }
        }
        return $bandera;
    }
}