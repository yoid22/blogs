<?php

require "functions.php";
require "Database.php";
$config = require ("config.php");

$db = new Database($config["database"]);

$posts = $db->query(); 
$posts=$db->query("SELECT * FROM posts")-> fetchALL();

echo "<ul>";
foreach($posts as $🤣){
    
    echo "<li>" . $🤣 ["content"]."</li>" . "<br>";
    
    
}
echo "</ul>";



