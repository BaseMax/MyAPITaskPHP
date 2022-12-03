<?php
/**
 * 
 */

// Please put your user name and password and server name in below
$ServerName = "localhost";
$Password = "";
$UserName = "root";
$DatabaseName = "todos";

try{
    $Connection = new PDO("mysql:host=$ServerName", $UserName, $Password);
    $Connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $Connection->exec("CREATE DATABASE $DatabaseName");
    $Connection->exec("USE $DatabaseName");
    $query = "CREATE TABLE tasks (
        id INT(6) PRIMARY KEY,
        title VARCHAR(30) NOT NULL,
        description VARCHAR(500) NOT NULL,
        status BOOLEAN,
        create_at DATE NOT NULL,
        update_at DATE NOT NULL
        )";
    $Connection->exec($query);
    $Connection = null;
}catch(PDOException $err){
    echo $err->getMessage();
}


?>