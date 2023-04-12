<?php

// in this file I'm gonna practice callback functions
// A callback function is a function which is passed as an argument into another function


function callbackFunction($item){
    return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("callbackFunction", $strings);
print_r($lengths);
echo "<br>";
print_r($strings);

/* The array_map() function sends each value of an array to a user-made function, 
and returns an array with new values, given by the user-made function
syntax: array_map(myfunction, array1, array2, array3, ...) */

echo "<br>"; echo "<br>";



/* Callbacks in User Defined Functions:
User-defined functions and methods can also take callback functions as arguments. 
To use callback functions inside a user-defined function or method, call it by adding parentheses 
to the variable and pass arguments as with normal functions: */


function exclaim($str) {
    return $str . "!  ";
}

function ask($str) {
    return $str . "?  ";
}

function printFormatted($str, $format) {
    // Calling the $format callback function
    echo $format($str);
}

// Pass "exclaim" and "ask" as callback functions to printFormatted()

printFormatted("hello world", "exclaim");
printFormatted("hello friend", "ask");