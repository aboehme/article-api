<?php


class Connection
{

    public function connect()
    {

        $host = getenv('DB_HOST');
        $dbname = getenv('DB_DATABASE');
        $username = getenv('DB_USERNAME');
        $password = getenv('DB_PASSWORD');

        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

        $pdo = new PDO($dsn, $username, $password);

        return $pdo;
    }
}