<?php 

use App\Database\ProductQueries;

$query = new ProductQueries();

if(isset($_POST['productIds']))
{
    $ids = $_POST['productIds'];
    $query->massDelete($ids);
}

$products = $query->getProducts();
response($products);


?>