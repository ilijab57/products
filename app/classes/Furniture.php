<?php  

namespace App\Classes;

class Furniture extends Product{

    private float $height;
    private float $width;
    private float $length;
    const TYPE_ID = 2;

    public function __construct(
        string $sku, string $name, float $price, array $dimensions )
    {
        parent::__construct($sku, $name, $price);
        $this->height = $dimensions[0];
        $this->width = $dimensions[1];
        $this->length = $dimensions[2];
    }

    public function getSize() : string
    {
        return "{$this->height}x{$this->width}x{$this->length}";
    }

    public function getTypeId(): int
    {
        return self::TYPE_ID;
    }
}



?>