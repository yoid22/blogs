<?php

require "functions.php";
require "Database.php";


$db = new Database();
$posts = $db->query(); 



echo "<ul>";
foreach($posts as $🤣){
    
    echo "<li>" . $🤣 ["content"]."</li>" . "<br>";
    
    
}
echo "</ul>";