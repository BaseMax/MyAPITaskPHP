<?php

require_once "../enum.php";

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


function deleteTask($query)
{
    global $connection, $tableName;
    $sql = "DELETE FROM $tableName WHERE title LIKE ? OR description LIKE ?";
    $stmt = $connection->prepare($sql);
    if ($stmt->execute(["%$query%", "%$query%"])) {
        return ["status" => true];
    } else {
        return ["status" => false];
    }
}

function addTask(string $title, string $decsription)
{
    $date = date("y-m-d H-i-s", time());
    global $connection, $tableName;
    $query = "INSERT INTO $tableName ( created_at, update_at, title, description) VALUES ('$date', '$date', ?, ?)";
    $stmt = $connection->prepare($query);
    if ($stmt->execute([$title, $decsription])) {
        $id = $connection->lastInsertId();
        return ["id" => $id];
    }
}
function deleteAll()
{
    global $connection, $tableName;
    $query = "DELETE FROM $tableName";
    $stmt = $connection->prepare($query);
    if ($stmt->execute()) {
        return ["status" => true];
    } else {
        return ["status" => false];
    }
}
function deleteById(int $id)
{
    global $connection, $tableName;
    $query = "DELETE FROM $tableName WHERE task_id = ?";
    $stmt = $connection->prepare($query);
    if ($stmt->execute([$id])) {
        return ["status" => true];
    } else {
        return ["status" => false];
    }
}
function GetAll()
{
    global $tableName, $connection;
    $query = "SELECT * FROM $tableName";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}
function GetById(int $id)
{
    global $tableName, $connection;
    $query = "SELECT * FROM $tableName WHERE task_id = $id;";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}
function GetMatchedItems($query)
{
    global $connection, $tableName;
    $sqlQuery = "SELECT * FROM $tableName WHERE title LIKE '%$query%' OR description LIKE '%$query%';";
    $stmt = $connection->prepare($sqlQuery);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}
