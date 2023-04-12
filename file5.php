<?php

/* working deeply with Operators:  Arithmetic, assignments, comparison, increment / decrement, 
logical operators, string operators, array operators, conditional assignment operators
*/

/*
// Arithmetic Operators    +  -  /  *  %  **        
    addition, subtraction, multiplication, division, moduls, exponentiation, 
# assignments :   +=   -=  *=  /=   %=
# comparison: for comparing numbers or strings:  ==   ===   != <>   !==   <    >   <=   >=   <=> 
# increment / decrement:    ++    --
# logical operators:     and   or   xor   &&    ||   !
# string operators:   .    .= 
// array operators:  +   ==    ===   != <>   !==  
# conditional assignment operators:    ?:      ?? 
*/



//Arithmetic Operators    +  -  /  *  %  **
echo "<b><h1>arithmetics</h1></b>";
echo "<br>"; echo "<br>"; 

$oper1 = 3;
$oper2 = 5342;
$oper3 = 43;
$oper4 = 0;

# addition
echo "the oper 1 + oper 2 means: $oper1 + $oper2";
echo "<br>";
echo "the oper 1 + oper 2 = " . $oper1 + $oper2;
echo "<br>";
echo "$oper1 + $oper2 = " . $oper1 + $oper2;
echo "<br>";
echo "$oper1 next to the $oper2 will be = " . $oper1 . $oper2;

echo "<br>"; echo "<br>";

# subtraction
echo "$oper3 - $oper4 = " . $oper3 - $oper4;

echo "<br>"; echo "<br>";

// multiplication
echo "$oper1 * $oper3 = " . $oper1 * $oper3;

echo "<br>"; echo "<br>";

# division
echo "$oper2 / $oper3 = " . $oper2 / $oper3;

echo "<br>"; echo "<br>"; 

# moduls
echo "$oper1 % $oper3 = " . $oper1 % $oper3;
echo "<br>";
echo "7 % $oper3 = " . 7 % $oper3;

echo "<br>"; echo "<br>"; 

# exponentiation
echo "$oper1 ** $oper2 = " . $oper1 ** $oper2;
echo "<br>"; 
$expon1 = $oper1 ** $oper3;
var_dump($expon1);
echo "<br>";
echo "is this exponentiation infinite? " . var_dump(is_infinite($expon1));
echo "<br>";
echo var_dump(is_finite($expon1)) . "is this exponentiation finite? ";

echo "<br>";echo "<br>";

echo "$oper1 ** $oper3 = " . $oper1 ** $oper3;

echo "<br>"; 
echo "<br>";
echo "<br>";
echo "<br>";

#assignments :   +=   -=  *=  /=   %=
echo "<b><h1>assignments</b></h1>";
echo "<br>"; echo "<br>"; 

# '=' The left operand gets set to the value of the expression on the right
$x = 10;
echo "this is x: " . $x;

echo "<br>"; echo "<br>"; 

# addition +
$add1 = 20;
$add2 = 30;

$add1 += 100;
echo "this is add1:  ";
echo $add1;
echo "<br>";
$add2 += $add1;
echo "this is add2:  ";
echo $add2;

echo "<br>"; echo "<br>"; 

#substraction
$sub1 = 19;
$sub2 = 4;

$sub1 -= 2;
echo "this is sub1 (19) - 2: " . $sub1;
echo "<br>";

$sub1 -= $sub2;
echo "this is sub1(17) - sub2 (4): " . $sub1;

echo "<br>"; 

$sub3 = $add1 -= $add2;
echo "this is subtraction of add1 and 2: ";
echo $sub3;

echo "<br>"; echo "<br>"; 

#multiplication
$multi1 = 5;
$multi2 = 8;

echo $multi1 *= $multi2;

echo "<br>"; echo "<br>"; 

#division
$div1 = 8;
echo "division1 (8) / 2 is : " . $div1 /= 2;

echo "<br>"; echo "<br>"; 

#moduls
$mod1 = 37;
$mod2 = 49;

echo "modul mod1 & mod2 is: " . $mod1 %= $mod2;
echo "<br>";
echo "mod1 (37) % 2 = ";
echo $mod1 %= 2;

echo "<br>"; echo "<br>"; echo "<br>";


# comparison: for comparing numbers or strings:  ==   ===   != <>   !==   <    >   <=   >=   <=>   
echo "<b><h1>comparison</h1></b>";
echo "<br>"; echo "<br>"; 

//equal  '=='  content have to be the same
$equal1 = 1;
$equal2 = 2;
$equal3 = 2;
$equal4 = "a";
$equal5 = "b";
$equal6 = "a";
$equal7 = "a1";
$equal8 = 4;
$equal9 = "4";

var_dump($equal1 == $equal2);

#it doesn't show anything: 
$test1 = $equal1 == $equal2;
echo $test1;
echo "<br>"; 

var_dump($equal2 == $equal2);
echo "<br>"; 
var_dump($equal4 == $equal5);
echo "<br>"; 
var_dump($equal4 == $equal6);
echo "<br>"; 
var_dump($equal7 == $equal2);
echo "<br>";
echo "the 4 and '4' = " ;
var_dump($equal8 == $equal9);
echo "<br>"; echo "<br>"; 

#identical '===' data types and contents have to be the same
var_dump($equal2 === $equal2);
echo "<br>"; 
var_dump($equal3 === $equal6);
echo "<br>"; 
var_dump($equal1 === $equal7);
echo "<br>"; 
var_dump($equal6 === $equal7);
echo "<br>"; echo "<br>"; 

#not equal  !=  <>  the content isn't equal. Returns true if $x is not equal to $y
var_dump($equal1 != $equal2);
echo "<br>"; 
var_dump($equal6 != $equal2);
echo "<br>"; 
var_dump($equal4 != $equal6);
echo "<br>"; echo "<br>"; 

/*
$equal1 = 1;
$equal2 = 2;
$equal3 = 2;
$equal4 = "a";
$equal5 = "b";
$equal6 = "a";
$equal7 = "a1";
$equal8 = 4;
$equal9 = "4";
*/
#the same result just in the context exactly like the previous <>
echo "the same result just in the context exactly like the previous<>";
echo "<br>";
var_dump($equal1 <> $equal2);
echo "<br>"; 
var_dump($equal6 <> $equal2);
echo "<br>"; 
var_dump($equal4 <> $equal6);
echo "<br>"; 
var_dump($equal8 <> $equal9);
echo "<br>"; echo "<br>"; 

#not identical  !==  true in not equal context and type
var_dump($equal1 !== $equal6);
echo "<br>"; 
var_dump($equal2 !== $equal3);
echo "<br>"; echo "<br>"; 

#greater than  x is > greater than y   or < less than
echo "greater or less than ...";
echo "<br>";
var_dump($equal3 > $equal2);
echo "<br>"; 
var_dump($equal3 < $equal2);
echo "<br>"; 
var_dump($equal4 > $equal6);
echo "<br>"; echo "<br>"; 

#greater/less than or equal  greater:  >=   less:  <=
var_dump($equal1 >= $equal2);
echo "<br>"; 
var_dump($equal1 <= $equal2);
echo "<br>"; echo "<br>"; 

#spaceship. returns -1 because $x is less than $y. 0 : equal. +1 : greater in context
var_dump($equal1 <=> $equal2);
echo "<br>"; 
var_dump($equal3 <=> $equal2);
echo "<br>"; 
var_dump($equal1 <=> $equal4);
echo "<br>"; 
var_dump($equal5 <=> $equal6);
echo "<br>";  
var_dump($equal6 <=> $equal7);
echo "<br>"; echo "<br>"; echo "<br>";



# increment / decrement:    ++    --
echo "<b><h1> increment / decrement </h1></b>";
echo "<br>"; echo "<br>";

$inc1 = 10;
$inc2 = 15;
$dec1 = 12;
$dec2 = 13;

echo "++";
echo "<br>";
echo ++$inc1;
echo "<br>";
echo $inc2++;
echo "<br>"; echo "<br>";

echo "--";
echo "<br>";
echo --$dec1;
echo "<br>";
echo $dec2--;
echo "<br>"; echo "<br>"; echo "<br>";

echo "<b>in another way: </b>";
echo "<br>";
/*
 ++$x	Pre-increment	Increments $x by one, then returns $x
$x++	Post-increment	Returns $x, then increments $x by one
--$x	Pre-decrement	Decrements $x by one, then returns $x
$x--	Post-decrement	Returns $x, then decrements $x by one
*/

$x = 10;
echo ++$x;
echo "<br>";
echo $x;
echo "<hr>";

$x = 10;
echo $x++;
echo "<br>";
echo $x;
echo "<hr>";

$x = 10;
echo --$x;
echo "<br>";
echo $x;
echo "<hr>";

$x = 10;
echo $x--;
echo "<br>";
echo $x;

echo "<br>"; echo "<br>"; echo "<br>";

# logical operators:     and   or   xor   &&    ||   !
echo "<b><h1>logical operators</b></h1>";
echo "<br>"; echo "<br>";

$logic1 = 100;
$logic2 = 50;

//and : true if both are the same in context
echo "and";
echo "<br>"; 
var_dump($logic1 == 100 and $logic2 == 50);
echo "<br>";
var_dump($logic1);
echo "<br>";
var_dump($logic1 == 100);
echo "<br>";
var_dump($logic1 == 100 and $logic2 == 100);
echo "<br>";
#these don't show anything:
echo "if " . $logic1 == 50 and $logic2 == 100 . "here";
echo "<br>"; 
echo $logic1 == 50 and $logic2 == 100;
echo "<br>";
$logic = $logic1 == 50 and $logic2 == 100;
echo "<br>";
echo $logic;
echo "<br>"; echo "<br>"; 

#or : return true if either is the same in context. both can be true
echo "or";
echo "<br>"; 
var_dump($logic1 == 30 or $logic2 == 50);
echo "<br>"; 
var_dump($logic1 == 30 or $logic2 == 520);
echo "<br>"; 
var_dump($logic1 == 100 or $logic2 == 50);
echo "<br>"; echo "<br>"; 

//xor : true if either is the same, but not both
echo "xor";
echo "<br>"; 
var_dump($logic1 == 30 xor $logic2 == 50);
echo "<br>"; 
var_dump($logic1 == 30 xor $logic2 == 520);
echo "<br>"; 
var_dump($logic1 == 100 xor $logic2 == 50);
echo "<br>"; echo "<br>"; 

# && : true if both are true. like 'and'
echo "&&";
echo "<br>"; 
var_dump($logic1 == 30 && $logic2 == 50);
echo "<br>"; 
var_dump($logic1 == 30 && $logic2 == 520);
echo "<br>"; 
var_dump($logic1 == 100 && $logic2 == 50);
echo "<br>"; echo "<br>"; 

# || : return true if either is true in context. both can be true. like 'or'
echo "||";
echo "<br>"; 
var_dump($logic1 == 30 || $logic2 == 50);
echo "<br>"; 
var_dump($logic1 == 30 || $logic2 == 520);
echo "<br>"; 
var_dump($logic1 == 100 || $logic2 == 50);
echo "<br>"; echo "<br>"; 

// !   : true if x is not true. like 'xor'
echo "!";
echo "<br>"; 
var_dump($logic1 !== 30);
echo "<br>"; 
var_dump($logic1 !== 100);
echo "<br>"; echo "<br>"; echo "<br>"; 



# string operators:   .    .= 
echo "<b><h1> string operators </b></h1>";
echo "<br>"; 

#  .  concatenation 
$str1 = "first name ";
$str2 = " and ";
$str3 = "last name ";

$con1 = $str1 . $str2 . $str3;
echo $con1;
echo "<br>"; echo "<br>"; 

//  .=  concatenation assignment
$str1 .= $str2 .= $str3;
echo $str1;
echo "<br>"; echo "<br>"; echo "<br>"; 


// array operators:  +   ==    ===   != <>   !==   
echo "<b><h1> array operators </b></h1>";
echo "<br>"; 

//  +  union of two array
echo "+";
echo "<br>"; 
$arr1 = array("unit1" => "a", "unit2" => "b");
$arr2 = array("unit3" => "c", "unit4" => "d");
$arr3 = array("unit5" => "e", "unit6" => "f", "unit7" => "g");
$arr4 = array("unit5" => "e", "unit6" => "f", "unit7" => "g");
$arr5 = array("unit7" => "g", "unit5" => "e", "unit6" => "f");
$arr6 = array("1" => "one", 2 => 3);

print_r($arr1 + $arr2);
echo "<br>"; echo "<br>"; 

//  ==  equality : return true if both have the same key/value pairs
echo "==";
echo "<br>"; 
print_r($arr1 == $arr2);
echo "<br>";
/* the syntax of this isn't true
print_r($arr1 == $arr2 == $arr3); */
print_r($arr3 == $arr4);
echo "<br>"; 
var_dump($add1 == $add2);
echo "<br>";
var_dump($arr3 == $arr4);
echo "<br>";
var_dump($arr4 == $arr5);
echo "<br>"; echo "<br>"; 

#  ===   true if both have the same key/value pairs: in the same order and of the same types
var_dump($arr4 === $arr5);
echo "<br>";
var_dump($arr6 === $arr5);
echo "<br>";
var_dump($arr1 === $arr2);
echo "<br>";
var_dump($arr3 === $arr4);
echo "<br>"; echo "<br>"; 

// !=  inequality . true if is not equal in context
var_dump($arr1 != $arr2);
echo "<br>"; 
var_dump($arr3 != $arr4);
echo "<br>"; echo "<br>"; 

#  <>  inequality . true if is not equal like previous
var_dump($arr1 <> $arr2);
echo "<br>"; 
var_dump($arr3 <> $arr4);
echo "<br>"; echo "<br>"; 

// !==  non-identity . true if one is not identical to another
var_dump($arr1 !== $arr2);
echo "<br>"; 
var_dump($arr3 !== $arr4);
echo "<br>"; echo "<br>"; echo "<br>"; 


# conditional assignment operators:    ?:      ??
echo "<b><h1> conditional assignment operators  </b></h1>";
echo "<br>"; echo "<br>"; 

#  ?:   ternary :  they are very similar to if condition
/* The ternary operator provides a shorthand way of writing the if...else statements. 
The ternary operator is represented by the question mark (?) symbol and it takes three operands: 
a condition to check, a result for true, and a result for false. */
$cond1;
$cond2;
$cond3;
$cond4 = "username";
$cond5 = "n";
$cond6;


echo $cond1 = (empty($feild1)) ? "is empty" : "isn't empty";
echo "<br>";
echo $cond2 = (empty($cond3)) ? "empty" : "not empty";
echo "<br>";
echo $cond3 = (empty($cond4)) ? "empty" : "not empty";
echo "<br>"; echo "<br>"; 

// another example

$age = 15;

if($age < 18){
    echo 'Child'; // Display Child if age is less than 18
} else{
    echo 'Adult'; // Display Adult if age is greater than or equal to 18
}

echo "<br>"; echo "<br>"; 
// the same
echo ($age < 18) ? 'Child' : 'Adult';

echo "<br>"; echo "<br>"; 

/*  ??  null coalescing  :  it gets a value from here or another input and compare by variable. 
if they were the same, will show the string. */

echo $cond4 = $_GET["username"] ?? "same";
echo "<br>"; 
echo $cond4 = $_GET["PASS"] ?? "different";
echo "<br>"; echo "<br>";

/* the other way: if this string was in the variable, just print the value of variable. 
otherwise this string will take place in the variable and print it.*/

echo $cond1 = $cond1 ?? "name";
echo "<br>";
echo $cond1;
echo "<br>";
echo $cond4 = $cond4 ?? "name";
echo "<br>";
echo $cond4;
echo "<br>";
echo $cond5 = $cond5 ?? "name";
echo "<br>";
echo $cond6 = $cond6 ?? "six";

echo "<br>"; echo "<br>"; 

/* To uderstand this in a better way consider the following line of code. 
It fetches the value of $_GET['name'], if it does not exist or NULL, it returns 'anonymous'. */

$name = isset($_GET['name']) ? $_GET['name'] : 'anonymous';
echo $name;
echo "<br>"; echo "<br>"; 
// the same
$name = $_GET['name'] ?? 'anonymous';
echo $name;