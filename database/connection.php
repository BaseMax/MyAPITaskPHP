<?php

require_once "./enum/enum.php";

list(
    $serverName,
    $charset,
    $databaseName,
    $tableName
) = [
    Credentials::ServerName,
    Credentials::Charset,
    Credentials::DatabaseName,
    Credentials::TableName
];
$connection = new PDO(
    "mysql:host=$serverName;dbname=$databaseName;charset=$charset;",
    Credentials::UserName,
    Credentials::Password
);
