<?php

class Data
{
    private $data;

    function setDate($v)
    {
        $this->data = $v;
    }
    function getData()
    {
        return $this->data;
    }
}

$obj = new Data();
$obj->setDate(5);
echo $obj->getData();
