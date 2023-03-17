<?php 

namespace App\Classes;

class Router 
{
    private $routes = [];

    private function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller
        ];
    }

    public function get($uri, $controller)
    {
        $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller)
    {
        $this->add('POST', $uri, $controller);
    }

    public function delete($uri, $controller)
    {
        $this->add('DELETE', $uri, $controller);
    }


    public function route($uri, $method)
    {
        foreach($this->routes as $route)
        {
            if($route['uri'] == $uri && $route['method'] == strtoupper($method))
            {
                return require $route['controller'];
            } 
        }

        return require dirname(__DIR__) ."../views/404.php";

    }

}



?>