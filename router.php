<?php 






    $uri = parse_url($_SERVER["REQUEST_URI"])["path"];






    $routs = require ("routs.php");

if (array_key_exists($uri,$routs)){
    require $routs[$uri];

}else{
    http_response_code(404);
    require "controllers/404.php";
    die();
}

