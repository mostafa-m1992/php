<?php

#In this file I'd like to practice Numbers in PHP

// In 32 bit systems, the Integers are: between -2147483648 and 2147483647
/* In 64 bit systems, the Integers are: between -9223372036854775808 and 9223372036854775807 */

#Integers
$int1 = -1;
$int2 = -23372036854775808;
$int3 = 9223372036854775807;
$int4 = 0;
$int5 = 1;
$int6 = +7;

var_dump($int1);

echo "<br>";

var_dump(is_int($int2));

echo "<br>";

var_dump(is_integer($int3));

echo "<br>";

# 'long' is the alias of integer 
var_dump(is_long($int4));

# Float

$float1 = 1.1;
$float2 = 1.7976931348623E+308;
$float3 = 1.0;
$float4 = 0.1;
$float5 = 1.7976931348623;

echo "<br>";
echo "<br>";

//using variables

var_dump($float1);

echo "<br>";

var_dump(is_float($float2));

#it doesn't show anything
is_double($float3);

echo "<br>";

var_dump(is_double($float3));

echo "<br>";
echo "<br>";

#infinity (larger than float)

$infinity1 = 1.2007976931348623E+308200;

var_dump($infinity1);

echo "<br>";

var_dump(is_infinite($infinity1));

echo "<br>";

var_dump(is_finite($infinity1));

echo "<br>";
echo "<br>";

# Nan stands for not number. NaN is used for impossible mathematical operations. must be float type 

$nan1 = 2.1;

var_dump(is_nan($nan1));

// numerical string. is_numeric function can be used to find whether a variable is numeric

$numeric1 = "a";
$numeric2 = 1;
$numeric3 = 1.1;
$numeric4 = "a 1";
$numeric5 = "b1";
$numeric6 = "1 c";
$numeric7 = "A 1.1";

echo "<br>";echo "<br>";

var_dump(is_numeric($numeric1));

echo "<br>";

var_dump(is_numeric($numeric2));

echo "<br>";

var_dump(is_numeric($numeric3));

echo "<br>";

var_dump(is_numeric($numeric4));

echo "<br>";

var_dump(is_numeric($numeric5));

echo "<br>";

var_dump(is_numeric($numeric6));

echo "<br>";

var_dump(is_numeric($numeric7));

echo "<br>";
echo "<br>";

#casting strings || floats to integers 

//declaring variables:

$cast1 = 4.2;
$cast2 = "k22a2";
$cast3 = 5.3;
$cast4 = "4";
$cast5 = 2.3;
$cast6 = "6";

#casting by 'int' function:
$int_cast1 = (int) $cast1;
$int_cast2 = (int) $cast2;

echo $int_cast1;
echo "<br>";
echo $int_cast2;

echo "<br>";

#casting by 'integer' function:
$int_cast3 = (integer) $cast3;
echo "<br>";
$int_cast4 = (integer) $cast4;

echo $int_cast3;
echo "<br>";
echo $int_cast4;

echo "<br>";echo "<br>";

//casting by 'intval' function:
$int_cast5 = (intval($cast5));
$int_cast6 = (intval($cast6));

echo $int_cast5;
echo "<br>";
echo $int_cast6;

echo "<br>";