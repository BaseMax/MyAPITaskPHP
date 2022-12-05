<?php
require_once "Enum.php";


class connect {
    private PDO $connection;
    public function __construct()
    {
       try {
        $this->connection = new PDO("mysql:host=" . Credentials::ServerName, Credentials::UserName, Credentials::Password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       } catch (PDOException $err) {
        $this->connection = null;
       }
    }
    public function get(): PDO{
        return $this->connection;
    }
}

?>