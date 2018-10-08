<?php

namespace Gavran\MegaHamsterCom\HamsterDomains;

interface ProductMethods
{
    function outputProductInfo();

    function getSpecialEquipment();

    function calculateArea();
}

abstract class Product implements ProductMethods
{
    private $product;
    private $length;
    private $price;

    function __construct($product, $length, $price)
    {
        $this->product = $product;
        $this->length = $length;
        $this->price = $price;

    }

}