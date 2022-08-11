<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sici";
    $key = '';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname"
                    , $username
                    , $password
                    , array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);      

    } catch(PDOException $e){
        echo "La conexión falló: " . $e->getMessage();  
        exit;      
    }

?>