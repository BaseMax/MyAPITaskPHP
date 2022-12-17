<?php

// if ($_SERVER["REQUEST_URI"] == "/delete/" || $_SERVER["REQUEST_URI"] == "/delete/index.php") {}

require_once "../database/deleteAll.php";
require_once "../database/delete.php";
require_once "../database/deleteById.php";
require_once "../functions.php";

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
