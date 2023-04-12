<?php declare(strict_types=1);  //without using this function we should declare variables without any type. because PHP is a loosly typed language 

/* A function is a block of statements that can be used repeatedly in a program.
A function will not execute automatically when a page loads.
A function will be executed by a call to the function. */

/* functions are two kind: built-in functions (over 1000) , 
and user-defined function (starts with the word 'function') */

function writeMsg()
{
    echo "this is a simple function";
}

//if we don't call the name of function, it won't be execute
writeMsg();

echo "<br>";


/* we can use any variable in parentheses and seperate them by comma: this is argument. 
also when we call them at the time when calling function: 
in parentheses they name parameter (in calling time)*/

/*
An argument is a value that you pass to a function, 
and a parameter is the variable within the function that receives the argument. 
However, in common usage these terms are interchangeable i.e. an argument is a parameter is an argument.
*/

function familyName($fname) {
    echo "$fname me. <br>";
}

familyName("a");

echo "<br>";

function firstName($name, $age) {
    echo "$name is name and age is $age";
}

firstName("me", 30);

echo "<br>"; echo "<br>";


//if I don't set strict mode at the top of this file, this function will cause error

/*function addNumbers(int $a, int $b)
{
    return $a + $b;
}

echo addNumbers(6, "9 days");*/


echo "<br>"; echo "<br>";


function addNumbers(int $a, int $b)
{
    return $a + $b;
}

echo addNumbers(6, 9);

echo "<br>"; echo "<br>";


//function with default argument

function setHeight(int $minheight = 80)
{
    echo "the height is : $minheight <br>";
}

setHeight(40);
//if I don't set parameter, the function will set the defualt value: 80
setHeight();


echo "<br>"; echo "<br>";



//returning values

function sum(int $x , int $y)
{
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "4 + 30 = " . sum(4, 30) . "<br>";
echo "2 + 13 = " . sum(2, 13);


echo "<br>"; echo "<br>";


//in this way we say that type of argument must return in special type

function addNumber(float $a, float $b) : float
{
    return $a + $b;
}

echo addNumber(1.2, 4.5);


echo "<br>"; echo "<br>";


//in this way we say despite the arguments have special type, meanwhile the return value must be in another type

function addNumber2(float $a, float $b) : int
{
    return (int) ($a + $b);
}

echo addNumber2(1.2, 4.5);

echo "<br>"; echo "<br>";



//passing arguments by reference 
/*usually argement that passed in a function can't change. 
so we use a reference (&) so: changes to the argument also change the variable that was passed in*/
#the argument and the number in function will add together
//it mean: the argument 'and' another operator

function add_five(&$value)
{
    $value += 5;
}

$num = 2;
add_five($num);
echo $num;



echo "<br>"; echo "<br>";echo "<br>";
echo "<b><h1>variable scope: local, global & static variables</b></h1>";
echo "<br>"; echo "<br>";

// local variable:
/* a variable that is declared in a function can't use out of that function. 
so we can name another variable by the same name out of that function*/
// a variable out of a function cannot call in function. also about the naming

$var2 = "var2";
function scope() {
    //local variable
    $var1 = 'var1';
    echo $var1;
    //var2 can't use here and cause error
    //echo $var2;
}
scope();
echo "<br>"; 
//local variable can't be used here and cause error
echo $var1;
echo "<br>"; 
//var2 will be shown here because it's global
echo $var2;
echo "<br>"; 

// global variable
/* if we want to use a variable from within the function: 
    we use 'global' keyword before the variable's name
    */

$var3 = "var3";
function scope2(){
    //by using 'global' keyword we change local var3 to global
    global $var3;
    echo $var3;
}

scope2();
echo "<br>"; 
echo $var3;
echo "<br>"; echo "<br>"; 


function scope3(){
    $var4 = "var4";
    echo "var4";
}

scope3();
echo "<br>";

// global keyword can not use out of function and doesn't show anything
echo "this is var4: ";
global $var4;
echo $var4;
echo "<br>"; echo "<br>"; 

/* $GLOBALS[index] : an array that hold the name of the variable: 
all global variables store in this array*/

$a = 4;
$c = 5;

function store4(){
    $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['c'];
    echo $GLOBALS['c'];
}

store4();

echo "<br>"; echo "<br>"; 

// static keyword
/*
Normally, when a function is completed/executed, all of its variables are deleted. 
However, sometimes we want a local variable NOT to be deleted. 
We need it for a further job.

To do this, use the static keyword when you first declare the variable:
*/

function store5(){
    //this variable still is local but won't be deleted
    static $x = 0;
    echo $x;
    $x++;
}

store5();
echo "<br>"; 
store5();
echo "<br>"; 
store5();

/*
Then, each time the function is called, that variable will still have 
the information it contained from the last time the function was called.
*/

echo "<br>"; echo "<br>"; echo "<br>"; 