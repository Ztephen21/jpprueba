<?php


include('../Bussines/ThingLogic.php');
include('../Bussines/ValidationLogic.php');
$Ol = new ThingLogic();
$vl=new ValidationLogic();
if (isset($_POST['insertarObjeto'])) {
    $std = new stdClass();
    $std->key = 0;
    if ($vl->validarCampoCompleto([
        $_POST['code'],
        $_POST['name'],
        $_POST['price'],
        $_POST['quantity'],
       
    ])) {
        if ($vl->validarNumeros([$_POST['price'], $_POST['quantity']])) {
            $obj = new thing();
            $obj->setCode($_POST['code']);
            $obj->setName($_POST['name']);
            $obj->setPriceCost($_POST['price']);
            $obj->setQuantityAvailable($_POST['quantity']);
           
            $result = $Ol->insertObject($obj);
            if ($result) {
                $std->key = 1;
                $std->value = 'Operación exitosa.';
            } else {
                $std->value = 'La operación falló.';
            }
        } else {
            $std->value = 'Valores no numericos.';
        }
    } else {
        $std->value = 'Campos vacíos.';
    }
    echo json_encode($std);


}