<?php

require "functions.php";

$dsn = "mysql:host=localhost;port=3306;user=root;password=;dbname=skibbidy;charset=utf8mb4";

$pdo = new PDO($dsn);
$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();
$posts=$statement->fetchALL(PDO::FETCH_ASSOC);

echo "<ul>";
foreach($posts as $🤣){
    
    echo "<li>" . $🤣 ["content"]."</li>" . "<br>";
    
    
}
echo "</ul>";