<?php 

$ServerName = "localhost";
$Password = "";
$UserName = "root";
$DatabaseName = "todos";

try {
    $Connection = new PDO("mysql:host=$ServerName;dbname=$DatabaseName", $UserName, $Password);
    $Connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err) {
    echo $err->getMessage();
}


// Validation check for user data
function Check($data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}

// Get list of all todos 
function GetAll(){

}

// Search for an specific todo with some key
function GetSearch(){

}

// Get list of all Columns
function GetColumns(){

}

// Create an new todo
function Create(string $title, string $description, bool $status){
    global $Connection;
    $date = time();
    $query = "INSERT INTO tasks(
        title,
        description,
        status,
        create_at,
        update_at
    ) VALUES (
        $title,
        $description,
        $status,
        $date,
        $date
    )";
    try {
        $Connection->exec($query);
    } catch (PDOException $err) {
        echo $err->getMessage();
    }
}


function getLastTodo(){
    
}

?>