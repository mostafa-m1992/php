<?php

/*
The SELECT statement is used to select data from one or more tables:
SELECT column_name(s) FROM table_name

or we can use the * character to select ALL columns from a table:
SELECT * FROM table_name
*/

/*
The following example uses prepared statements.

It selects the id, firstname and lastname columns from the MyGuests table and displays it in an HTML table:
*/

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}


$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
    $connection = new PDO("mysql:host=$serverName; dbname=$dbname", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $connection->prepare("SELECT id, firstname, lastname FROM MyGuests");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $key => $value) {
        echo $value;
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$connection = null;

echo "</table>";