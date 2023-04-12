<?php

/*  working with session: a way to store information (in variables) to be used across multiple pages. 
not stored on the users computer. 'session variables' last until the user closes the browser.
it will 'start' with the session_start() function, Before any HTML tags
and 'set' with the $_SESSION  */

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
    <?php
    //set session variables
    $_SESSION['favColor'] = 'green';
    $_SESSION['favAnimal'] = 'cat';
    echo "session vars are set <br>";
    
    // Get PHP Session Variable Values
    echo 'favColor is: ' . $_SESSION['favColor'] . ".<br>";
    echo 'favAnimal is: ' . $_SESSION['favAnimal'] . ".<br>";
    
    echo "<br>";

    // another way:
    print_r($_SESSION);

    echo "<br>";

    // Modify a PHP Session Variable
    // to change a session variable, just overwrite it
    $_SESSION["favColor"] = "yellow";
    print_r($_SESSION);

    echo "<br>";


    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    ?>
</body>
</html>