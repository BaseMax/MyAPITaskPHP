<?php

require_once "./database/getAll.php";
require_once "./database/search.php";
require_once "./database/getById.php";
require_once "./functions.php";
// echo json_encode(GetAll());

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!isset($_SERVER["QUERY_STRING"])) {
        echo json_encode((array) GetAll());
    } else {
        $arrayOfQueries = querySpliter($_SERVER["QUERY_STRING"]);
        if (isset($arrayOfQueries["q"])) {
            $data = GetMatchedItems($arrayOfQueries["q"]);
            echo json_encode($data);
        } else if (isset($arrayOfQueries["id"])) {
            $data = GetById((int) $arrayOfQueries["id"]);
            echo json_encode($data);
        }
    }
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
}
