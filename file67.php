<?php

// updating in another way

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


// Attempt update query execution
try{
    $sql = "UPDATE persons SET email='peterparker_new@mail.com' WHERE id=1";    
    $pdo->exec($sql);
    echo "Records were updated successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);