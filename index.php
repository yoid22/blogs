<?php 
    require "Database.php";
    require "functions.php";
    $config = require "config.php";
    $db = new Database($config["database"]);
    


   
    require "router.php";
    
   
   