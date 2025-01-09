<?php 
    $db = new Database($config["database"]);
    


    function dd($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        die();
    }

    require "router.php";
   