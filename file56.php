<?php

// creating database in different way


$serverName = "localhost";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$serverName", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: Could not connect. " . $e->getMessage());
}

try {
    $sql = "CREATE DATABASE demo";
    $pdo->exec($sql);
    echo "Database created succussfully";
} catch (PDOException $e) {
    die("Error: Could not able to execute $sql. " . $e->getMessage());
}

unset($pdo);