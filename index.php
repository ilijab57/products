<?php 

require "utilities/functions.php";

spl_autoload_register(function($class)
{
    $class = str_replace("\\", '/', $class);
    require "{$class}.php";
});

use app\classes\Router;

$router = new Router();
$routes = require("routes.php");


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_SERVER['REQUEST_METHOD'];
$router->route($uri, $method);


?>