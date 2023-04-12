<?php


// The CREATE DATABASE statement is used to create a database in MySQL.


$serverName = "localhost";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$serverName", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE myDBPDO";
    // use exec() because no results are returned
    $connection->exec($sql);
    echo "Database created successfully<br>";
    
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;