<?php

// Insert Multiple Records Into MySQL

/* public PDO::inTransaction(): bool
Checks if a transaction is currently active within the driver. 
This method only works for database drivers that support transactions.
*/


$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
    $connection = new PDO("mysql:host=$serverName; dbname=$dbname", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // begin the transaction
    $connection->beginTransaction();

    // our SQL statements
    $connection->exec("INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('John', 'Doe', 'john@example.com')");
    $connection->exec("INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('Mary', 'Moe', 'mary@example.com')");
    $connection->exec("INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('Julie', 'Dooley', 'julie@example.com')");

    var_dump($connection->inTransaction()); echo "<br>";

    // commit the transaction
    $connection->commit();
    echo "New records created successfully";
    
} catch (PDOException $e) {
    // roll back the transaction if something failed
    $connection->rollBack();
    echo "Error " . $e->getMessage();
}