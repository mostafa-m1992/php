<?php

$dsn = "mysql:dbname=practice;host=localhost";
$username = "root";
$password = "";
$options = array(PDO::ATTR_PERSISTENT => true);

try {
    $conn = new PDO($dsn, $username, $password, $options);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error to connect: " . $e->getMessage());
}

try {
    $conn->exec("CREATE TABLE form(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        FIRSTNAME VARCHAR(30) NOT NULL,
        LASTNAME VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )"); 
    echo "table form was created succussfully";
} catch (PDOException $e) {
    die("Error to create table: " . $e->getMessage());
}
//$sqlCreateTable = 
unset($conn);