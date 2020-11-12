<?php
$host = "localhost";
$db ="covid";
$user = "root";
$pass ="";
    try {
        $connect = new PDO("mysql:host=$host;dbname=$db;charset:utf8;",$user,$pass);
        $connect->setAttribute(PDO:: ATTR_ERRMODE,PDO:: ERRMODE_EXCEPTION);
    }catch (PDOException $e){
        echo $e->getMessage();
    }

//    try {
//    $connect = new PDO("mysql:host=$host;dbname = $db;",$user,$pass);
 //   $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//}catch (PDOException $e){
  //  echo $e->getMessage();
?>