<?php

// another example for prepare statement
// This example performs an INSERT query by substituting a name and a value for the positional ? placeholders.


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


try {
    $stmt = $pdo->prepare("INSERT INTO registry (first_name, last_name) VALUES (?, ?)");
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $value);

    // insert one row
    $name = 'one';
    $value = 1;
    $stmt->execute();

    // insert another row with different values
    $name = 'two';
    $value = 2;
    $stmt->execute();

    echo "New records created successfully";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}   