<?php

// creating Table 'fruit'


$dsn = "mysql:dbname=test;host=localhost";
$username = "root";
$password = "";
$options = array(PDO::ATTR_PERSISTENT => true);



try {
    $dbh = new PDO($dsn, $username, $password, $options);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

try {
    $sql = "CREATE TABLE fruit(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(30) NOT NULL,
        colour VARCHAR(30) NOT NULL,
        calories INT(30) NOT NULL
    )";    
    $dbh->exec($sql);
    echo "Table created successfully.";
} catch (PDOException $e) {
    die("Error: Could not able to execute $sql. " . $e->getMessage());
}