<?php

require_once "connection.php";

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
