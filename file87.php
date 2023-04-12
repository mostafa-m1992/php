<?php


/*   PDOStatement::fetchColumn() 
returns a single column from the next row of a result set or false if there are no more rows.
public PDOStatement::fetchColumn(int $column = 0): mixed
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
$sth->execute();

print("Fetch the first column from the first row in the result set:\n");
$result = $sth->fetchColumn();
print("name = $result\n");

print("Fetch the second column from the second row in the result set:\n");
$result = $sth->fetchColumn(1);
print("colour = $result\n");