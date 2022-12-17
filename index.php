<?php

if (file_exists("./functions.php")) {
    require_once "./functions.php";
}
if (file_exists("../database/addTask.php")) {
    require_once "../database/addTask.php";
}
if (file_exists("../database/connection.php")) {
    require_once "../database/connection.php";
}
if (file_exists("../enum/enum.php")) {
    require_once "../enum/enum.php";
}
if (file_exists("connection.php")) {
    require_once "connection.php";
}
if (file_exists("../database/deleteAll.php")) {
    require_once "../database/deleteAll.php";
}
if (file_exists("../database/delete.php")) {
    require_once "../database/delete.php";
}
if (file_exists("../database/deleteById.php")) {
    require_once "../database/deleteById.php";
}
if (file_exists("./database/getAll.php")) {
    require_once "./database/getAll.php";
}
if (file_exists("./database/search.php")) {
    require_once "./database/search.php";
}
if (file_exists("./database/getById.php")) {
    require_once "./database/getById.php";
}





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
}
