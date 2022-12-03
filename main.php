<?php

    require_once "database.php";
    require_once "functions.php";

    if(!empty($_POST)){
        if(
            $_POST["title"] && 
            $_POST["description"] && 
            $_POST["status"]
        ){
            $title = Check( $_POST["title"]);
            $description = Check( $_POST["description"]);
            $status = Check( $_POST["status"]);

            Create($title, $description, (bool) $status);
        }
    }
    else if(!empty($_GET)){
        echo "wellcome";
    }

?>