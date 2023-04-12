<?php

// PDO::__construct — Creates a PDO instance representing a connection to a database

/*
public PDO::__construct(
    string $dsn,
    ?string $username = null,
    ?string $password = null,
    ?array $options = null
)
*/

// DSN: The Data Source Name: contains the information required to connect to the database


$dsn = "mysql:dbname=test;host=localhost";
$username = "root";
$password = "";
$options = array(PDO::ATTR_PERSISTENT => true);



try {
    $dbh = new PDO($dsn, $username, $password, $options);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "connection succussfull. Host info: " . $dbh->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
    
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}