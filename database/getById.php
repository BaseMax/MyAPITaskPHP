<?php

require_once "./database/connection.php";

function GetById(int $id)
{
    global $tableName, $connection;
    $query = "SELECT * FROM $tableName WHERE task_id = $id;";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}
