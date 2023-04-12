<?php


// PDO::quote — Quotes a string for use in a query

// public PDO::quote(string $string, int $type = PDO::PARAM_STR): string|false



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
    $string1 = 'Nice';
    print("Unquoted string: . $string1\n");
    print("Quoted string: " . $dbh->quote($string1) . "\n");
    echo "<br>"; echo "<br>"; 
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}