<?php

namespace Gavran\MegaHamsterCom\HamsterDomains;


class TheFlat extends Product
{

    private $product;
    private $length;
    private $width;
    private $height;
    private $price;

    function __construct($product, $length, $width, $height, $price)
    {
        parent::__construct($product, $length, $price);

        $this->product = $product;
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
        $this->price = $price;
    }


    function outputProductInfo()
    {
        echo "Our Domain ‘" . $this->product . "’ is the best choice of real estate for a hamster owner. It features a length of $this->length cm, a width of $this->width cm and a height of $this->height cm.\n
        It is available for the high price of EUR $this->price,-.";
    }

    public function getSpecialEquipment()
    {
        return ["Food jars"];
    }

    public function calculateArea()
    {
        return 120 * 80;
    }
}