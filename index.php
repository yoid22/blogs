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



require "views/index.view.php";