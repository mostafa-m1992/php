<?php

// PDOStatement::bindColumn — Bind a column to a PHP variable

/*
public PDOStatement::bindColumn(
    string|int $column,
    mixed &$var,
    int $type = PDO::PARAM_STR,
    int $maxLength = 0,
    mixed $driverOptions = null
): bool
*/

/*
PDOStatement::bindColumn() arranges to have a particular variable bound to a given column 
in the result-set from a query. 
Each call to PDOStatement::fetch() or PDOStatement::fetchAll() will update all the variables that are bound 
to columns.
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
    $stmt = $dbh->prepare('SELECT name, colour, calories FROM fruit');
    $stmt->execute();

    /* Bind by column number */
    $stmt->bindColumn(1, $name);
    $stmt->bindColumn(2, $colour);

    /* Bind by column name */
    $stmt->bindColumn('calories', $cals);

    while ($stmt->fetch(PDO::FETCH_BOUND)) {
        print $name . "\t" . $colour . "\t" . $cals . "\n";
    }
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}