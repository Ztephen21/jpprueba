<?php

include '../Data/ThingData.php';

class ThingLogic
{

    private $ThingData;

    public function __construct()
    {
        $this->ObjectData = new ThingData();
    }

    public function insertObject($object)
    {
        return $this->ObjectData->insertObject($object);
    }

}