<?php

/* public PDOStatement::debugDumpParams(): ?bool
Dump an SQL prepared command
Dumps the information contained by a prepared statement directly on the output. 
It will provide the SQL query in use, the number of parameters used (Params), 
the list of parameters with their key name or position, 
their name, their position in the query (if this is supported by the PDO driver, otherwise, it will be -1), 
type (param_type) as an integer, and a boolean value is_param.
*/

/*
public PDOStatement::errorCode(): ?string
PDOStatement::errorCode — Fetch the SQLSTATE associated with the last operation on the statement handle
only retrieves error codes for operations performed with PDOStatement objects.
*/

/*
public PDOStatement::errorInfo(): array
PDOStatement::errorInfo — Fetch extended error information associated 
with the last operation on the statement handle
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

/* Execute a prepared statement by binding PHP variables */
$calories = 150;
$colour = 'red';
$name = 'apple';

$sth = $dbh->prepare('SELECT name, colour, calories
    FROM fruit
    WHERE calories < ? AND colour = ?');
$sth->bindParam(1, $calories, PDO::PARAM_INT);
$sth->bindValue(2, $colour, PDO::PARAM_STR);
$sth->execute();

$sth->debugDumpParams();
echo "<br>";
$sth->errorCode();
echo "<br>";
$err = $sth->errorInfo();
print_r($err);