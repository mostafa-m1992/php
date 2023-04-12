<?php


/* PDO::exec() executes an SQL statement in a single function call, 
returning the number of rows affected by the statement. If no rows were affected, PDO::exec() returns 0.
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


try {
    $count = $dbh->exec("DELETE FROM registry");

    /* Return number of rows that were deleted */
    print("Deleted $count rows.\n");

} catch (PDOException $e) {
    die("Error to Delete");
}