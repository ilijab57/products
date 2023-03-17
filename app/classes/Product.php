<?php 

namespace App\Classes;

abstract class Product {

    protected string $sku;
    protected string $name;
    protected float $price;

    protected function __construct(string $sku, string $name, float $price)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
    }

    public abstract function getSize() : string;
    public abstract function getTypeId() : int;


    /**
     * Get the value of sku
     */ 
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }
}



?>