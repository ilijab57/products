<?php 

namespace App\Classes;

class Dvd extends Product {

    private int $size;
    const TYPE_ID = 1;

    public function __construct(string $sku, string $name, float $price, int $size)
    {
        parent::__construct($sku, $name, $price);
        $this->size = $size;
    }

    public function getSize() : string
    {
        return "{$this->size}";
    }

    public function getTypeId(): int
    {
        return self::TYPE_ID;
    }

}



?>