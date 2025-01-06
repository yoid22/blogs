<?php

require "functions.php";
require "Database.php";
$config = require ("config.php");

$db = new Database($config["database"]);

if(isset($_GET["search_query"])&& $_GET["search_query"]!=""){
    $posts =$db->query("SELECT * FROM posts WHERE content LIKE `%". $_GET["search_query"]  ."%`")-> fetchALL();;
}

echo "<h1>Blogs</h1>";
echo "<form>";
echo "<input name=`search_query` />";
echo "<button>Meklet</button>";

echo "</form>";

$posts=$db->query("SELECT * FROM posts")-> fetchALL();

echo "<ul>";
foreach($posts as $🤣){
    
    echo "<li>" . $🤣 ["content"]."</li>" . "<br>";
    
    
}
echo "</ul>";

 

