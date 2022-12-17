<?php

require_once "../database/database.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!isset($_SERVER["QUERY_STRING"])) {
        $result = deleteAll();
        echo json_encode($result);
    } else {
        $arrayOfQueries = querySpliter($_SERVER["QUERY_STRING"]);
        if (isset($arrayOfQueries["q"])) {
            echo json_encode(deleteTask($arrayOfQueries["q"]));
        } else if (isset($arrayOfQueries["id"])) {
            echo json_encode(deleteById($arrayOfQueries["id"]));
        }
    }
}
