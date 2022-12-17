<?php

require_once "../database/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_POST["title"]) &&
        isset($_POST["description"]) &&
        !empty($_POST["title"]) &&
        !empty($_POST["description"])
    ) {
        $result = addTask($_POST["title"], $_POST["description"]);
        echo json_encode($result);
    }
}
