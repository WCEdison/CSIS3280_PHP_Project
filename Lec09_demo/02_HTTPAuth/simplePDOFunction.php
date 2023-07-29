<?php

function simplePDO(){
    $host = "localhost";
    $port = 3306;
    $dbname = "auth_demo";
    $user = "root";
    $pass = "";

    $dsn = "mysql:host={$host};dbname={$dbname};port={$port}";
    $options = array(
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    try{
        $pdo = new PDO($dsn,$user,$pass,$options);
    }
    catch(PDOException $e){
        printf("Connection error: %s",$e->getMessage());
    }

    return $pdo;


}

?>