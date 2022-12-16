<?php

class Credentials {
    public const ServerName = "localhost";
    public const Password = "";
    public const UserName = "root";
    public const DatabaseName = "todos";
    public const TableName = "tasks";

    public const credentials = [
        "ServerName" => Credentials::ServerName,
        "Password" => Credentials::Password,
        "UserName" => Credentials::UserName,
        "DatabaseName" => Credentials::DatabaseName,
        "TableName" => Credentials::TableName
    ];
}

enum Suit
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}
