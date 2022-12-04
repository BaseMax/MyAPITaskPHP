<?php

    require_once "functions.php";

    $url = $_SERVER['REQUEST_URI'];
    if($_SERVER["REQUEST_METHOD"] == "POST"){}


    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $route =  split($url);

        if($route[count($route) - 1] == ""){
            echo "main page";
        }else if($route[count($route) - 1] == "about"){
            echo "About";
        }
    }


?>