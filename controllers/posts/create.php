<?php



if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $params = ["content" => $_POST["content"]];
    $sql = "INSERT INTO posts (content) VALUES (:content)";
    $posts = $db->query($sql, $params)->fetch();
    header("Location: /"); 

}

require "views/posts/create.view.php";