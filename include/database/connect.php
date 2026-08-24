<?php
session_start();
$servername = "mysql:host=localhost;dbname=mast_teachline";
$username = "root";
$password = "";

try {
    $connection = new PDO($servername,$username,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo "connected successfully";
}catch (PDOException $e){
    echo "connection failed" . $e->getMessage();
}

?>