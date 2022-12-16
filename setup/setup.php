<?php

require_once "../Enum/enum.php";

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

$queries = [
    "createDataBase" => "CREATE DATABASE $databaseName;",
    "createTable" => "CREATE TABLE $tableName (
        task_id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
        created_at datetime NOT NULL DEFAULT ?,
        update_at datetime NOT NULL DEFAULT ?,
        title varchar(64) NOT NULL,
        description varchar(256) NOT NULL
    );",
    "use" => "USE $databaseName;"
];


$connection = new PDO(
    "mysql:host=$serverName;charset=$charset;",
    Credentials::credentials["UserName"],
    Credentials::credentials["Password"]
);
$stmt = $connection->prepare($queries["createDataBase"]);
$stmt->execute();

$stmt = $connection->prepare($queries["use"]);
$stmt->execute();

$stmt = $connection->prepare($queries["createTable"]);
$stmt->execute([date("y-m-d H:i:s", time()), date("y-m-d H:i:s", time())]);
// print_r($connection);

### Result =>

// +-------------+--------------+------+-----+---------+----------------+
// | Field       | Type         | Null | Key | Default | Extra          |
// +-------------+--------------+------+-----+---------+----------------+
// | task_id     | int(11)      | NO   | PRI | NULL    | auto_increment |
// | created_at  | datetime     | NO   |     | NULL    |                |
// | update_at   | datetime     | NO   |     | NULL    |                |
// | title       | varchar(64)  | NO   |     | NULL    |                |
// | description | varchar(256) | NO   |     | NULL    |                |
// +-------------+--------------+------+-----+---------+----------------+
