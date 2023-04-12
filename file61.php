<?php


// using 'prepare statement', 'PDO::PARAM_STR' and 'unset statement'


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
    // Prepare an insert statement
    $sql = "INSERT INTO persons (first_name, last_name, email) VALUES (:first_name, :last_name, :email)";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
    $stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    
    /* Set the parameters values and execute
    the statement again to insert another row */
    $first_name = "Hermione";
    $last_name = "Granger";
    $email = "hermionegranger@mail.com";
    $stmt->execute();
    
    /* Set the parameters values and execute
    the statement to insert a row */
    $first_name = "Ron";
    $last_name = "Weasley";
    $email = "ronweasley@mail.com";
    $stmt->execute();
    
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not prepare/execute query: $sql. " . $e->getMessage());
}
 
// Close statement
unset($stmt);
 
// Close connection
unset($pdo);