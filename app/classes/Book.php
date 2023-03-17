<?php

namespace App\Classes;

class Book extends Product
{
    private float $weight;
    const TYPE_ID = 3;

    public function __construct(string $sku, string $name, float $price, float $weight)
    {
        parent::__construct($sku, $name, $price);
        $this->weight = $weight;
    }

    public function getSize() : string
    {
        return "{$this->weight}";
    }

    public function getTypeId() : int
    {
        return self::TYPE_ID;
    }
}



?>