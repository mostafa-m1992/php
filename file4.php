<?php

# practicing 'math functions'. more math functions: https://www.w3schools.com/php/php_ref_math.asp

echo pi();

echo "<br>"; echo "<br>";

//decleration of variables
$array1 = array(0, 1, 4, 52, 52542, -434, +434);
$float1 = -2.5;
$float2 = 3231.132;

echo (min($array1));
echo "<br>";
echo (max($array1));

echo "<br>"; echo "<br>";

echo (min(0, 1, 4, 52, 52542, -434, +434));
echo "<br>";
echo (max(0, 1, 4, 52, 52542, -434, +434));

echo "<br>"; echo "<br>";

echo (abs($float1));
echo "<br>"; 
echo (abs($float2));

echo "<br>"; echo "<br>";

echo (round($float1));
echo "<br>";
echo (round($float2));

echo "<br>"; echo "<br>";

echo (rand());
echo "<br>";
echo (rand($float1, $float2));
echo "<br>";
echo (rand(1, 10));



echo "<br>"; echo "<br>";
echo "<b>converting decimal to binary and vice versa</b>";

echo "<br>";
echo "convert decimal to binary";
echo "<br>";
echo decbin(5);

echo "<br>";
echo "convert binary to decimal";
echo "<br>";
echo bindec(3);


echo "<br>"; echo "<br>"; 


echo "<br>"; echo "<br>";
echo "<b>Convert Decimal Numbers to Hexadecimal and Vice Versa</b>";

echo "<br>";
echo "convert decimal to Hexadecimal";
echo "<br>";
echo dechex(5);

echo "<br>";
echo "convert Hexadecimal to decimal";
echo "<br>";
echo hexdec(3);


echo "<br>"; echo "<br>"; 


echo "<br>"; echo "<br>"; 


echo "<br>"; echo "<br>";
echo "<b>Convert Decimal Numbers to Octal and Vice Versa</b>";

echo "<br>";
echo "convert decimal to Octal";
echo "<br>";
echo decoct(5);

echo "<br>";
echo "convert Octal to decimal";
echo "<br>";
echo octdec(3);


echo "<br>"; echo "<br>"; 

# A short practice of constants: They can not be changed. We use 'define()' function to create one. 
// we can use constans for: database username and password, website's base URL, company name, etc
// Name of constants must follow the same rules as variable names with one exception: the $ prefix is not required for constant names.
//constant names are usually written in uppercase letters. This is for their easy identification and differentiation from variables in the source code.



// 'false' is for non-sensetive caracters that we can drop it 

define("const1", "a", false);
/*both are the same
define("const1", "a");*/

echo const1;

echo "<br>"; echo "<br>";

define("arrayConst", ["a", "b", "c", "d", "3"]);
echo arrayConst[4];

echo "<br>"; echo "<br>";
