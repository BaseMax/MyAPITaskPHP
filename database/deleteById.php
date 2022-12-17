<?php

require_once "../database/connection.php";

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
