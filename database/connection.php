<?php

require_once "./enum/enum.php";
// class Credentials
// {
//     public const ServerName = "localhost";
//     public const Password = "";
//     public const UserName = "root";
//     public const DatabaseName = "todos";
//     public const TableName = "tasks";
//     public const Charset = "utf8mb4";

//     public const credentials = [
//         "ServerName" => Credentials::ServerName,
//         "Password" => Credentials::Password,
//         "UserName" => Credentials::UserName,
//         "DatabaseName" => Credentials::DatabaseName,
//         "TableName" => Credentials::TableName,
//         "Charset" => Credentials::Charset
//     ];
// }
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
