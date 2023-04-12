<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Record Form</title>
</head>
<body>
    <h1>Insert Data into a Database from an HTML Form</h1>

    <form>
        <fieldset>
            <legend>Record Form</legend>
                <p>
                    <label for="firstName">First Name:</label>
                    <input type="text" name="first_name" id="firstName">
                </p>
                <p>
                    <label for="lastName">Last Name:</label>
                    <input type="text" name="last_name" id="lastName">
                </p>
                <p>
                    <label for="emailAddress">Email Address:</label>
                    <input type="text" name="email" id="emailAddress">
                </p>
                    <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>


<?php

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


// Attempt insert query execution
try{
    // Create prepared statement
    $sql = "INSERT INTO persons (first_name, last_name, email) VALUES (:first_name, :last_name, :email)";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':first_name', $_REQUEST['first_name']);
    $stmt->bindParam(':last_name', $_REQUEST['last_name']);
    $stmt->bindParam(':email', $_REQUEST['email']);
    
    // Execute the prepared statement
    $stmt->execute();
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);