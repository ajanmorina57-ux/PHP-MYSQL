<?php

$host = 'localhost';
$user = 'root';
$pass = "";

try{
    $conn = new PDO("mysql:host=$host", $user, $pass);
    $sql = "CREATE DATABASE testdb";
    $conn->exec($sql);
    echo "Database created successfully";
}

catch(PDOException $e){
    echo "Connection failed: ";
}
?>

