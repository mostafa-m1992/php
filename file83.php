<?php

// PDOStatement::fetch — Fetches the next row from a result set

/*
public PDOStatement::fetch(int $mode = PDO::FETCH_DEFAULT, 
                            int $cursorOrientation = PDO::FETCH_ORI_NEXT, 
                            int $cursorOffset = 0): mixed
*/

/*   mode:
Controls how the next row will be returned to the caller. 
PDO::FETCH_ASSOC: , PDO::FETCH_BOTH (default): , PDO::FETCH_BOUND: , PDO::FETCH_CLASS: , 
PDO::FETCH_INTO: , PDO::FETCH_LAZY: , PDO::FETCH_NAMED: , PDO::FETCH_NUM: , 
PDO::FETCH_OBJ: , PDO::FETCH_PROPS_LATE: 
*/

// cursorOrientation:  this value determines which row will be returned to the caller.

/*  cursorOffset
cursorOrientation(PDO::FETCH_ORI_ABS): 
this value specifies the absolute number of the row in the result set that shall be fetched.

cursorOrientation(PDO::FETCH_ORI_REL): 
this value specifies the row to fetch relative to the cursor position 
before PDOStatement::fetch() was called.
*/

// https://www.php.net/manual/en/pdostatement.fetch.php



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

/* Exercise PDOStatement::fetch styles */
print("PDO::FETCH_ASSOC: ");
print("Return next row as an array indexed by column name\n");
$result = $sth->fetch(PDO::FETCH_ASSOC);
print_r($result);
print("\n");

print("PDO::FETCH_BOTH: ");
print("Return next row as an array indexed by both column name and number\n");
$result = $sth->fetch(PDO::FETCH_BOTH);
print_r($result);
print("\n");

print("PDO::FETCH_LAZY: ");
print("Return next row as an anonymous object with column names as properties\n");
$result = $sth->fetch(PDO::FETCH_LAZY);
print_r($result);
print("\n");

print("PDO::FETCH_OBJ: ");
print("Return next row as an anonymous object with column names as properties\n");
$result = $sth->fetch(PDO::FETCH_OBJ);
print $result->name;
print("\n");