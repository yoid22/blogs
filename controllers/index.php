<?php





$select = "SELECT * FROM posts";
$params = [];
if (isset($_GET['search']) && $_GET['search']!=""){
    $search_query="%" . $_GET['search'] . "%";
    $select .= " WHERE content LIKE :nosaukums";
    $params= ["nosaukums"=>$search_query];
}

$posts = $db->query($select, $params)->fetchAll();

$pagetitle = "Blogs";

require "views/index.view.php";