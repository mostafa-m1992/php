<?php


/*  public PDOStatement::columnCount(): int
Use PDOStatement::columnCount() to return the number of columns in the result set 
represented by the PDOStatement object.

If the PDOStatement object was returned from PDO::query(), the column count is immediately available.

If the PDOStatement object was returned from PDO::prepare(), 
an accurate column count will not be available until you invoke PDOStatement::execute().
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



$sth = $dbh->prepare("SELECT name, colour FROM fruit");

/* Count the number of columns in the (non-existent) result set */
$colcount = $sth->columnCount();
print("Before execute(), result set has $colcount columns (should be 0)\n");

$sth->execute();

/* Count the number of columns in the result set */
$colcount = $sth->columnCount();
print("After execute(), result set has $colcount columns (should be 2)\n");