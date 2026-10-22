<?php

require_once 'Database/Connection.php';

try {
    $connection = new Connection();
    $pdo = $connection->connect();

    echo "Successfully connected to MySQL!";
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}