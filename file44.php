<?php

/*
PHP use MySQL to connect to and manipulate databases
The data in a MySQL database are stored in tables. A table is a collection of related data, 
and it consists of columns and rows. 
We can query a database for specific information and have a recordset returned. query: a question or a request
for example: SELECT LastName FROM Employees
*/

/*
in php working with MySQL database using:
'MySQLi' extension (the "i" stands for improved)
'PDO' (PHP Data Objects)
PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL databases.
Both are object-oriented, but MySQLi also offers a procedural API.
*/

// about PDO: https://www.php.net/manual/en/book.pdo.php


//first of all I declared a variable for naming my host (server) that here my host is xampp so my host is local
$host = "localhost";
    // I created a database in my host before starting in this address: localhost/phpmyadmin
$dataBase = "php";
// in localhost always username and pass are like this:
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$host; dbname=$dataBase", $username, $password);
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Print host information
    echo "Connected Successfully. Host info: " . 
    $connection->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

/* The connection will be closed automatically when the script ends. 
To close the connection before, use the following:
*/
$connection = null;
// OR: 
// unset($connection);