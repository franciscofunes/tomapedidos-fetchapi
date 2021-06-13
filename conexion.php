<?php 
    //localhost
    //$servidor = "mysql:dbname=pedidos-lapaz;host=localhost";
    //$user = "root";
    //$pass="";
    //remotehost
    $servidor = "mysql:dbname=8qSPKXXNPP;host=remotemysql.com";
    $user = "8qSPKXXNPP";
    $pass="4wJzwBpTny";

    try {
        $pdo = new PDO($servidor,$user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
    } catch (PDOException $e) {
        echo "Conexión fallida ❌".$e ->getMessage();
    }
?>