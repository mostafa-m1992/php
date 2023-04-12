<?php

// practice 15-20: sending data from a form to the database

$dsn = "mysql:host=localhost";
$username = "root";
$password = "";
$options = array(PDO::ATTR_PERSISTENT => true);

try {
    $conn = new PDO($dsn, $username, $password, $options);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected to the local server: " . 
    $conn->getAttribute(constant('PDO::ATTR_CONNECTION_STATUS'));
} catch (PDOException $e) {
    die("Error to connection: " . $e->getMessage());
}

echo "<br>"; echo "<br>"; 

try {
    $sqlCreateDataBase = "CREATE DATABASE practice";
    $conn->exec($sqlCreateDataBase);
    echo "database practice was created";
} catch (PDOException $e) {
    die("Error to create database: " . $e->getMessage());
}