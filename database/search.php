<?php

require_once "./database/connection.php";

function GetMatchedItems($query)
{
    global $connection, $tableName;
    $sqlQuery = "SELECT * FROM $tableName WHERE title LIKE '%$query%' OR description LIKE '%$query%';";
    $stmt = $connection->prepare($sqlQuery);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}
