<?php

// practicing Exceptions
/* An exception is an object that describes an error or unexpected behaviour of a PHP script. 
is used by functions and classes
exception references: https://www.w3schools.com/php/php_ref_exception.asp
The throw statement allows a user defined function or method to throw an exception. 
When an exception is thrown, the code following it will not be executed.
*/

function divide($dividend, $divisor) {
    if ($divisor == 0) {
        throw new Exception('division by zero');
    }
    return $dividend / $divisor;
}

// If an exception is not caught, a fatal error will occur with an "Uncaught Exception" message:
echo divide(5, 0);
echo "<br>"; 
// but it will work:
echo divide(10, 5);
echo "<br>"; echo "<br>"; 



/* To avoid the error from the example above, we can use the try...catch statement 
to catch exceptions and continue the process.
syntax:
try {
    code that can throw exceptions
} catch (Exception $e) {
    code that runs when an exception is caught
} finally {
    code that always runs regardless of whether an exception was caught
}
*/

try {
    echo divide(5, 0);
} catch (Exception $e) {
    echo "unable to divide.";
}

/* The catch block indicates what type of exception should be caught 
and the name of the variable which can be used to access the exception */

echo "<br>"; echo "<br>"; 


try {
    echo divide(5, 0);
} catch (Exception $e) {
    echo "unable to divide. ";
} finally {
    echo "process completed.";
}


echo "<br>"; echo "<br>"; 


// Output a string even if an exception was not caught:

try {
    echo divide(5, 0);
} finally {
    echo "process completed. ";
}


echo "<br>"; echo "<br>"; 



/* The Exception Object contains information about the error or unexpected behaviour that the function encountered. 
syntax: new Exception(message, code, previous) 
 
message: Optional. A string describing why the exception was thrown
code: Optional. An integer that can be used used to easily distinguish this exception 
from others of the same type
previous: Optional. If this exception was thrown in a catch block of another exception, 
it is recommended to pass that exception into this parameter*/

function divide2($dividend2, $divisor2) {
    if ($dividend2 == 0) {
        throw new Exception("division by zero", 1);
    }
    return $dividend2 / $divisor2;
}

try {
    echo divide2(5, 0);
} catch (Exception $ex) {

    $code = $ex->getCode();
    $message = $ex->getMessage();
    $file = $ex->getFile();
    $line = $ex->getLine();
    
    echo "Exception thrown in $file on line $line: [Code $code] $message";
}

/* some Methods can be used to get information about the exception: 
Exception(), getCode(), getFile(), getMessage(), getLine(), getPrevious(), getTrace(), getTraceAsString() */