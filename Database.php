<?php 


class Database{
public function query(){

                $dsn = "mysql:host=localhost;port=3306;user=root;password=;dbname=skibbidy;charset=utf8mb4";

                 $pdo = new PDO($dsn);
                $statement = $pdo->prepare("SELECT * FROM posts");
                $statement->execute();
                $data=$statement->fetchALL(PDO::FETCH_ASSOC);
                return $data;
}



}