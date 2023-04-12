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
    $sqlRenameColumn = "ALTER TABLE form RENAME COLUMN FIRSTNAME TO fname";
    $conn->exec($sqlRenameColumn);
    echo "the column renamed";
} catch (PDOException $e) {
    die("Error to rename column: " . $e->getMessage());
}