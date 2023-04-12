<?php

/*  PDOStatement::execute — Executes a prepared statement
 Execute a prepared statement with an array of positional values
*/


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



/* Execute a prepared statement by passing an array of insert values */
$calories = 150;
$colour = 'red';

$sth = $dbh->prepare('SELECT name, colour, calories
    FROM fruit
    WHERE calories < ? AND colour = ?');

$sth->execute(array($calories, $colour));