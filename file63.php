<?php


// selecting items from table in another way

/* PDOStatement::fetch — Fetches the next row from a result set. all about 'fetch' function:  https://www.php.net/manual/en/pdostatement.fetch.php
fetch_assoc, fetch_both, fetch_bound, fetch_class, fetch_into, fetch_lazy, fetch_named, fetch_num, 
fetch_obj, fetch_props_late
*/

// PDOStatement::rowCount — Returns the number of rows affected by the last SQL statement: https://www.php.net/manual/en/pdostatement.rowcount.php

// The PHP query() function is used to perform an SQL query against MySQL database: https://codescracker.com/php/php-query-and-mysqli-query.htm




$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

try {
    $pdo = new PDO("mysql:host=$serverName;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: Could not connect. " . $e->getMessage());
}


// Attempt select query execution
try{
    $sql = "SELECT * FROM persons";   
    $result = $pdo->query($sql);
    if($result->rowCount() > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>email</th>";
            echo "</tr>";
        while($row = $result->fetch()){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        unset($result);
    } else{
        echo "No records matching your query were found.";
    }
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);