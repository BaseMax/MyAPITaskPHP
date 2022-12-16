<?php

function querySpliter(string $query): array
{
    $assocArray = [];
    $arrayOfQueries = explode("&", $query);
    foreach ($arrayOfQueries as $que) {
        list($key, $value) = explode("=", $que);
        $assocArray[strtolower($key)] = $value;
    }
    return $assocArray;
}
