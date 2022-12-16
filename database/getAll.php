<?php

require_once "connection.php";

function GetAll()
{
    global $tableName, $connection;
    $query = "SELECT * FROM $tableName";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}
