<?php 

function view($view, $attributes = [])
{
    extract($attributes);
    require dirname(__DIR__)  ."../views/{$view}";
}

function response($data)
{
    echo json_encode($data);
}



?>