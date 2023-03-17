<?php 

use app\classes\Validation;
use app\database\ProductQueries;

$validation = new Validation();
$validation->checkSKU($_POST['sku']);
$validation->checkEmptyValues($_POST);
$dimensions = isset($_POST['dimensions']) ? $_POST['dimensions'] : null;
$validation->checkNumericalValues($_POST['price'], $dimensions );

if(!empty($validation->getErrors()))
{
    echo json_encode($validation->getErrors());
    die();
}

$sku = $_POST['sku'];
$name = $_POST['name'];
$price = $_POST['price'];
$type = 'App\Classes\\' . ucfirst($_POST['type']);
$dimensions = $_POST['dimensions'];

$product = new $type($sku, $name, $price, $dimensions);
$query = new ProductQueries();
$query->addProduct($product);

return response('saved')
// header("Location:../index.php");


?>