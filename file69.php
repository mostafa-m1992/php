<?php

/*      Persistent connections:
Many web applications will benefit from making persistent connections to database servers. 
Persistent connections are not closed at the end of the script, but are cached 
and re-used when another script requests a connection using the same credentials. 
The persistent connection cache allows you to avoid the overhead of establishing 
a new connection every time a script needs to talk to a database, resulting in a faster web application.
https://www.php.net/manual/en/pdo.connections.php
*/

// server = host
$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "test";

try {
    $pdo = new PDO("mysql:host=$serverName;dbname=$dbname", $username, $password, array(PDO::ATTR_PERSISTENT => true));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected succussfully";
} catch (PDOException $e) {
    die("Error: Could not connect. " . $e->getMessage());
}