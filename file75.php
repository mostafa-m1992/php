<?php


/* 
PDO::getAvailableDrivers() returns an array of PDO driver names. 
If no drivers are available, it returns an empty array.
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
    print_r(PDO::getAvailableDrivers());

} catch (PDOException $e) {
    die("Error to Delete");
}






