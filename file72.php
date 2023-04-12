<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend>first name</legend>
            insert the first name: <input type="text" name="first_name" id="first_name" placeholder="first name"><br><br>
            <input type="submit" name="submit"><br><br>
        </fieldset>
    </form>
</body>
</html>




<?php

// Fetching data using prepared statements

/*This example fetches data based on a key value supplied by a form. The user input is automatically quoted,
so there is no risk of a SQL injection attack.
*/



$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "test";

try {
    $pdo = new PDO("mysql:host=$serverName;dbname=$dbname", $username, $password, array(PDO::ATTR_PERSISTENT => true));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("Error: Could not connect. " . $e->getMessage());
}

try {
    /*
    here I recieved an error about first_name
    $stmt = $pdo->prepare("SELECT * FROM registry where first_name = ?");
    $stmt->execute([$_GET['first_name']]);
    foreach ($stmt as $row) {
        print_r($row);
    }*/
    // as well as here I recieved an error about first_name
    // Invalid use of placeholder
    $stmt = $pdo->prepare("SELECT * FROM registry where first_name LIKE '%?%'");
    $stmt->execute([$_GET['first_name']]);

    // placeholder must be used in the place of the whole value
    $stmt = $pdo->prepare("SELECT * FROM registry where first_name LIKE ?");
    $stmt->execute(["%$_GET[first_name]%"]);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}