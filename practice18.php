<?php

$dbname = "practice";
$host = "localhost";

$dsn = "mysql:dbname=$dbname;host=$host";
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
    $sqlAddColumn = "ALTER TABLE form ADD password INT";
    $conn->exec($sqlAddColumn);
    echo "new column added";
} catch (PDOException $e) {
    die("Error to add column: " . $e->getMessage());
}