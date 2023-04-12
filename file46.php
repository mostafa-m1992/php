<?php

// The CREATE TABLE statement is used to create a table in MySQL.

/*
We will create a table named "MyGuests", with five columns:
 "id", "firstname", "lastname", "email" and "reg_date":
*/

/* Each table should have a primary key column (in this case: the "id" column). 
Its value must be unique for each record in the table.
*/

$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
    $connection = new PDO("mysql:host=$serverName; dbname=$dbname", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE MyGuests(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $connection->exec($sql);
    echo "Table MyGuests created successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;