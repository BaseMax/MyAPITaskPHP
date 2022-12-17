<?php

require_once "../database/database.php";
require_once "../functions/functions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arrayOfQueries = querySpliter($_SERVER["QUERY_STRING"]);
    if (
        isset($_POST["title"]) &&
        isset($_POST["description"]) &&
        !empty($_POST["title"]) &&
        !empty($_POST["description"]) &&
        isset($arrayOfQueries["id"]) &&
        !empty($arrayOfQueries["id"])
    ) {
        $result = updateTask(
            newTitle: $_POST["title"],
            newDescription: $_POST["description"],
            id: $arrayOfQueries["id"]
        );
        echo json_encode($result);
    } else if (
        isset($_POST["title"]) &&
        !empty($_POST["title"]) &&
        isset($arrayOfQueries["id"]) &&
        !empty($arrayOfQueries["id"])
    ) {
        // edit by new title
        $result = updateTask(
            newTitle: $_POST["title"],
            id: $arrayOfQueries["id"],
            newDescription: null
        );
        echo json_encode($result);
    } else if (
        isset($_POST["description"]) &&
        !empty($_POST["description"]) &&
        isset($arrayOfQueries["id"]) &&
        !empty($arrayOfQueries["id"])
    ) {
        // edit by new description
        $result = updateTask(
            newDescription: $_POST["description"],
            id: $arrayOfQueries["id"],
            newTitle: null
        );
        echo json_encode($result);
    }
}
