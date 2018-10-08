<?php

namespace Gavran\MegaHamsterCom\HamsterDomains;

class ThePit extends Product
{

    private $product;
    private $side_length;
    private $price;

    function __construct($product, $side_length, $price)
    {
        parent::__construct($product, $side_length, $price);

        $this->product = $product;
        $this->side_length = $side_length;
        $this->price = $price;
    }

    function outputProductInfo()
    {
        echo "Our Domain ‘" . $this->product . "’ is the best choice for the next Rocky-hamster.  It features a side-length of $this->side_length cm.\n
        It is available for the low price of EUR $this->price,-.";
    }

    public function getSpecialEquipment()
    {
        return ["Hamster training gloves", "Hamster punching sack"];
    }

    public function calculateArea()
    {
        return pow($this->side_length, 2) * (2 + 2 * sqrt(2));
    }
}