<?php

// create table registry


$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "test";

try {
    $pdo = new PDO("mysql:host=$serverName;dbname=$dbname", $username, $password, array(PDO::ATTR_PERSISTENT => true));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("Error: Could not connect. " . $e->getMessage());
}


try{
    $sql = "CREATE TABLE registry(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL
    )";    
    $pdo->exec($sql);
    echo "Table created successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}