<?php

namespace App\Database;


require_once __DIR__ ."/config/Connection.php";

use App\Database\config\Connection;
use App\Classes\Product;

class ProductQueries
{
    private $dbConn;

    public function __construct(\PDO $dbConn = new Connection())
    {
        $this->dbConn = $dbConn;
    }

    public function addProduct(Product $product)
    {
        $sql = 'INSERT INTO product (sku, name, price, size, product_type_id) VALUES (?,?,?,?,?)';
        $stmt = $this->dbConn->prepare($sql);
        $stmt->execute([$product->getSku(), $product->getName(), $product->getPrice(), $product->getSize(),$product->getTypeId()]);
    }

    public function getProducts()
    {
        $sql = "SELECT * FROM product";
        $stmt = $this->dbConn->query($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function massDelete(array $ids)
    {
        if(isset($ids))
        {
            foreach($ids as $id)
            {
                $sql = "DELETE FROM product WHERE id=?";
                $stmt = $this->dbConn->prepare($sql);
                $stmt->execute([$id]);
            }
        }

    }

    public function findProduct(string $column, $value)
    {
        $sql = "SELECT * FROM product WHERE $column='$value'";
        $stmt = $this->dbConn->query($sql);
        return $stmt->fetchAll();
    }

}



?>