<?php

$host = "localhost";
$db = "schooldb";
$user = "root";
$password = "";


try{
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $sql = "CREATE TABLE users (id INT (6) NOT NULL AUTO_INCREMENT, PRIMARY KEY (id),
    username VARCHAR(30) NOT NULL,
    password VARCHAR(50) NOT NULL)";
    $pdo->exec($sql);

    echo "Table created successfully";



}

catch(Exception $e){
    echo "Error creating table: " . $e->getMessage();
}
