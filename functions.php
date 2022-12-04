<?php 


// Validation check for user data
function Check($data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}

function split($url){
    $Result = explode("/", $url);
    return $Result;
}

?>