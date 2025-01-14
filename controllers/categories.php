<?php 


$select = "SELECT * FROM categories";
$params = [];
if (isset($_GET['search']) && $_GET['search']!=""){
    $search_query="%" . $_GET['search'] . "%";
    $select .= " WHERE category_name LIKE :nosaukums";
    $params= ["nosaukums"=>$search_query];
}

$sigma = $db->query($select, $params)->fetchAll();

$pagetitle = "Categories";
$style = "css/style1.css";
require "views/categories.view.php";

