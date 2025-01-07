<?php

require "functions.php";
require "Database.php";
$config = require "config.php";

$db = new Database($config["database"]);

$select = "SELECT * FROM posts";
$params = [];
if (isset($_GET['search']) && $_GET['search']!=""){
    $search_query="%" . $_GET['search'] . "%";
    $select .= " WHERE content LIKE :nosaukums";
    $params= ["nosaukums"=>$search_query];
}

$posts = $db->query($select, $params)->fetchAll();

 echo "<h1>BLOGS</h1>";
echo "<form>";
echo "<input name='search' />";
echo "<button>Meklēt</button>";
echo "</form>";

if (count($posts) == 0){
    echo "NOT FOUND 🤢😱😰😨🤯😤😡🤬😠🤮💀💀💀💀💀💀💀🐵";
}

echo "<ul>";
foreach($posts as $post){
    echo "<li>". $post["content"]. "</li>";
}
echo "</ul>";