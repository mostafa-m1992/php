<?php

/* 
An 'iterable' is any value which 'can be looped' through with a foreach() loop.

The iterable 'pseudo-type' was introduced in PHP 7.1, 
and it can be used 'as a data type for function' arguments and function return values.
*/

/*
    Using:
The 'iterable' keyword can be used as a data type of a function argument or as the return type of a function:
*/

function printIterable(iterable $myIterable) {
    foreach ($myIterable as $value) {
        echo $value;
    }
}

$arr = ["a", "b", "c"];
printIterable($arr);

echo "<br>"; echo "<br>"; 



function getIterable():iterable {
    return ["d", "e", "f"];
}

$iterableVar = getIterable();
foreach ($iterableVar as $value) {
    echo $value;
}