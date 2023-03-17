<?php 

$router->get('/', "controllers/index.php");
$router->get('/add-product', "controllers/add.php");
$router->post('/add-product', 'controllers/store.php');
$router->post('/product-delete', 'controllers/delete.php');
$router->post('/store-product', 'controllers/store.php');



?>