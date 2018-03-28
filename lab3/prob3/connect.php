<?php
    $username = "root";
    $password = "";
    $servername = "localhost";
    $db = "labs";
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$db",$username, $password,
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    } catch (PDOException $e){
        echo 'Connection failed: ' . $e->getMessage(); 
    }
?>