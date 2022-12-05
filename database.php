<?php

require_once "Enum.php";
$SRVName = Credentials::ServerName;
$DBName = Credentials::DatabaseName;
$TBName = Credentials::TableName;
try{
    $Connection = new PDO("mysql:host=$SRVName", Credentials::UserName, Credentials::Password);
    $Connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $Connection->exec("CREATE DATABASE $DBName");
    $Connection->exec("USE $DBName");
    $query = "CREATE TABLE $TBName (
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