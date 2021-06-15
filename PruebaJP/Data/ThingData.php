<?php

include_once 'Connection.php';

include '../Domain/Thing.php';

class ThingData extends Connection
{
   

    public function insertObject($obj)
    {
        $conexion = $this->getConexion();
        $resultado = 0;
        if ($conexion != null) {
            $query = "CALL  sp_insert_object(?,?,?,?)";
            $statement = $conexion->prepare($query);
            $datos = [
                $obj->getCode(),
                $obj->getName(),
                $obj->getPriceCost(),
                $obj->getQuantityAvailable()
                
            ];
            $statement->execute($datos);
            $resultado = $statement->fetch()[0];
            $conexion = null;
        }
        return $resultado;
    }
}