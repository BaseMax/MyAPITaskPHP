<?php

require_once "./database/connection.php";

function getById(int $id)
{
    global $tableName, $connection;
    $query = "SELECT * FROM :tableName WHERE task_id = :id";
    $stmt = $connection->prepare($query);
    $stmt->execute([
        "tableName" => $tableName,
        "id" => $id
    ]);
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}
