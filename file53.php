<?php

/*
The DELETE statement is used to delete records from a table:

DELETE FROM table_name 
WHERE some_column = some_value

Notice the WHERE clause in the DELETE syntax: The WHERE clause specifies 
which record or records that should be deleted. If you omit the WHERE clause, all records will be deleted!
*/

$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
    $connection = new PDO("mysql:host=$serverName; dbname=$dbname", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM MyGuests WHERE id=3";
    // use exec() because no results are returned
    $connection->exec($sql);

    echo "deleted the record";

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;