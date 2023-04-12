<?php

/*
The INSERT INTO statement is used to add new records to a MySQL table:
INSERT INTO table_name (column1, column2, column3,...)
VALUES (value1, value2, value3,...)
*/

/*
If a column is AUTO_INCREMENT (like the "id" column) or TIMESTAMP with default update of current_timesamp 
(like the "reg_date" column), it is no need to be specified in the SQL query; 
MySQL will automatically add the value.
*/

/*
If we perform an INSERT or UPDATE on a table with an AUTO_INCREMENT field, 
we can get the ID of the last inserted/updated record immediately.

In the table "MyGuests", the "id" column is an AUTO_INCREMENT field:
*/

$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
    $connection = new PDO("mysql:host=$serverName; dbname=$dbname", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    $connection->exec($sql);

    $last_id = $connection->lastInsertId();
    echo "New record created successfully. Last inserted ID is: " . $last_id;

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;