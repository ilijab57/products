<?php 

require_once dirname(__DIR__) ."../app/database/ProductQueries.php";
use App\Database\ProductQueries;

$query = new ProductQueries();
$products = $query->getProducts();

echo json_encode($products);

?>