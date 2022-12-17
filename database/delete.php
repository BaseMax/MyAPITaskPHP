<?php

require_once "../database/connection.php";

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
