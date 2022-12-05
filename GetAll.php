<?php

require_once "Enum.php";
require_once "Connection.php";
$conn = new connect();
$conn = $conn->get();
$query = "SELECT * FROM " . Credentials::TableName;


try{
    $conn->exec("USE " . Credentials::DatabaseName);
    $result = $conn->exec($query);
    echo $result;
}catch(PDOException $err){
    echo $err->getMessage();
}
?>