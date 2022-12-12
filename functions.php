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

function Query_splitter($queryString){
    $finalArray = [];
    if ($queryString) {
        $arrayOfData = explode("&", $queryString);
        foreach ($arrayOfData as $query) {
            if(!str_contains($query, "=")){
                continue;
            }
            list($key, $value) = explode("=", $query);
            $key = Check($key);
            $value = Check($value);
            if ($value) {
                $finalArray[$key] = $value;
            }
        }
    }
    return $finalArray;
}


/*




*/
?>