<?php

# working with JSON

/* JSON stands for JavaScript Object Notation, and is a syntax for storing and exchanging data.

Since the JSON format is a text-based format, it can easily be sent to and from a server, 
and used as a data format by any programming language */

// PHP has some built-in functions to handle JSON: for example: json_encode()  and  json_decode()

$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
//echo json_encode($age);

echo "<br>";

$cars = array("Volvo", "BMW", "Toyota");
//echo json_encode($cars);

echo "<br>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj));

echo "<br>";

/* The json_decode() function returns an object by default. The json_decode() function has a second parameter,
and when set to true, JSON objects are decoded into associative arrays. */

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj, true));

echo "<br>";

//Accessing the Decoded Values

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);
echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;

echo "<br>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($jsonobj, true);
echo $arr->Peter;
echo $arr->Ben;
echo $arr->Joe;

echo "<br>";

//Looping Through the Values

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);
foreach ($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
}

echo "<br>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($jsonobj, true);
foreach ($arr as $key => $value) {
    echo $key . " => " . $value . "<br>";
}