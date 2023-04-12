<?php

/* a short tag for starting php is: <?=   ?> */

#this project is the first file of practicing php

echo "<br>";

echo "hello";

//here is declaring variables 

/* All variables in PHP start with a $ sign, followed by the name of the variable.
A variable name must start with a letter or the underscore character _.
A variable name cannot start with a number.
A variable name in PHP can only contain alpha-numeric characters and underscores (A-z, 0-9, and _).
A variable name cannot contain spaces. */


#string
$var1 = "variable1";
$var2 = "variable2";
$var3 = "variable3";
$var4 = "variable4";

#integer
$var5 = 5;

#float
$var6 = 10.5;

#boolean
$var7 = true;
$var8 = false;

#array
$var9 = array("unit1", "unit2", "unit3", "unit4");

#null variable
$var10 = null;

/*here I used variables 
that I'd declared*/

echo "<br>";
#by using var_damp function we can show the data type of variable
var_dump($var1);

echo "<br>";
#we can show a context by using 'echo' or 'print'
echo $var2;

echo "<br>";

print $var3;

echo "<br>";

echo "hello $var4";

echo "<br>";

# .  connect two context
echo $var5   .   $var6;

echo "<br>";

#add them as a math process 
echo $var5 + $var6;

echo "<br>";

echo $var7 . $var8;

echo "<br>";

echo $var7 + $var8;

echo "<br>";

echo $var7;

echo "<br>";
#for showing a field in the array we declared 
echo $var9[0];

echo "<br>";

echo $var9[1];

echo "<br>";

echo $var9[2];

echo "<br>";

echo $var9[3];

echo "<br>";

echo $var10;
#printing a text and variable togather in two way: 
echo "this is: " . $var1 . " and this is: " . $var2;

echo "<br>";

echo "this is: $var1 and this is: $var2";

echo "<br/>";
echo "<br/>";

var_dump($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9, $var10);

echo "<br/>";
echo "<br/>";

var_dump($var1, " <br/> ", $var2, " <br/> ", $var3, " <br/> ", $var4, " <br/> ", $var5, " <br/> ", $var6, " <br/> ", $var7, " <br/> ", $var8, " <br/> ", $var9, " <br/> ", $var10, " <br/> ");
