<?php

// PDOStatement::setFetchMode — Set the default fetch mode for this statement

// https://www.php.net/manual/en/pdostatement.setfetchmode.php


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


$stmt = $dbh->query('SELECT name, colour, calories FROM fruit');
$stmt->setFetchMode(PDO::FETCH_NUM);
foreach ($stmt as $row) {
    print $row[0] . "\t" . $row[1] . "\t" . $row[2] . "\n";
}