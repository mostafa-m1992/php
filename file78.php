<?php

// insert multiple rows in 'fruit'

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
    // begin the transaction
    $dbh->beginTransaction();

    // our SQL statements
    $dbh->exec("INSERT INTO fruit (name, colour, calories)
        VALUES ('apple', 'red', 150)");
    $dbh->exec("INSERT INTO fruit (name, colour, calories)
        VALUES ('banana', 'yellow', 175)");
    $dbh->exec("INSERT INTO fruit (name, colour, calories)
        VALUES ('kiwi', 'green', 75)");
    $dbh->exec("INSERT INTO fruit (name, colour, calories)
        VALUES ('orange', 'orange', 150)");
    $dbh->exec("INSERT INTO fruit (name, colour, calories)
        VALUES ('mango', 'red', 200)");
    $dbh->exec("INSERT INTO fruit (name, colour, calories)
        VALUES ('strawberry', 'red', 25)");

    var_dump($dbh->inTransaction()); echo "<br>";

    // commit the transaction
    $dbh->commit();
    echo "New records created successfully";
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}