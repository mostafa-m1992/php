<?php

# repeat code by using loops in PHP
//loop types:   while   do...while      for   foreach

/*
    what is difference between conditional statements and loops in php:
Loops allow you to perform 'repetitive tasks' in your code 
whereas conditional statements can be used 
to run different parts of your code based on if a condition is met or not.
*/

$loop1 = 1;
$loop2 = 1;

# while - loops through a block of code as long as the specified condition is true
echo "<b>while</b>"; 
echo "<br>"; 
echo "loop1"; 
echo "<br>"; 
while ($loop1 <= 5) {

    //this code will repeat as long as the condition is true
    $loop1++;

    // in each iteration, this text will be echoed 
    echo "the number is: $loop1 <br>";
}

echo "<br>"; echo "<br>"; 

echo "loop2"; 
echo "<br>"; 
while ($loop2 <= 5) {
    echo "the number is: $loop2 <br>";
    $loop2++;
}

echo "<br>"; echo "<br>"; echo "<br>"; 

//break in while
echo "break in while";
echo "<br>";

$loop9 = 1;

while ($loop9 < 10) {
    if ($loop9 == 3) {
        break;
    }
    echo "the number is: $loop9 <br>";
    $loop9++;
}


echo "<br>"; echo "<br>"; echo "<br>"; 

//continue in while
echo "continue in while";
echo "<br>";

$loop10 = 1;

while ($loop10 <= 10) {
    if ($loop10 == 5) {
        $loop10++;
        continue;
    }
    echo "the number is: $loop10 <br>";
    $loop10++;
}

echo "<br>"; echo "<br>"; echo "<br>"; 

# do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true

echo "<br>"; 
echo "<b>do...while</b>"; 
echo "<br>"; 
echo "loop1"; 
echo "<br>"; 
do {
    echo "the number is: $loop1 <br>";
    $loop1++;
} while ($loop1 <= 10);

echo "<br>"; 
echo "loop2"; 
echo "<br>"; 

do {
    echo "the number is: $loop2 <br>";
    $loop2++;
    //the loop2 was 5 so it will echo 6 but can't print more than this because the condition is <=4
} while ($loop2 <= 4);

echo "<br>"; echo "<br>"; echo "<br>"; 

# for - loops through a block of code a specified number of times. The for loop is used when you know in advance how many times the script should run.

echo "<b>for</b>"; 
echo "<br>"; 
echo "loop3"; 
echo "<br>"; 

for ($loop3 = 1; $loop3 <= 10; $loop3 ++) {
    /* I initialized the loop counter by declaring the first variable. so I know this variable and know how many times the script should run.
    the second step is the condition about this variable
    and the third step is the code about how many times it will loops*/

    // in this part I echoed a text to show looping and the result of counting the variable
    echo "the number is: $loop3 <br>";
}

echo "<br>"; echo "<br>"; echo "<br>"; 

// using break in for loop
echo "break in for"; 
echo "<br>"; 
echo "loop7"; 
echo "<br>";
for ($loop7=1; $loop7 < 10 ; $loop7++) {
    if ($loop7 == 4) {
        break;
    }
    echo "the number is: $loop7 <br>";
}


echo "<br>"; echo "<br>"; echo "<br>"; 

// using continue in for loop
echo "continue in for"; 
echo "<br>"; 
echo "loop8"; 
echo "<br>";

for ($loop8=1; $loop8 < 10 ; $loop8++) {
    if ($loop8 == 4) {
        continue;
    }
    echo "the number is: $loop8 <br>";
}


echo "<br>"; echo "<br>"; echo "<br>";

# foreach - loops through a block of code for each element in an 'array'

echo "<b>foreach</b>"; 
echo "<br>"; 
echo "loop4"; 
echo "<br>";

$loop4 = array("unit1", "unit2", "unit3", "unit4");

foreach ($loop4 as $value) {
    echo "$value <br>";
}

echo "<br>"; 
echo "loop5"; 
echo "<br>";

$loop5 = array("unit1"=>3, "unit2"=>5, "unit3"=>1, "unit4"=>4);

foreach ($loop5 as $key => $value) {
    echo "$key = $value <br>";
}

echo "<br>"; 
echo "loop6"; 
echo "<br>";

$loop6 = array("unit5"=>32, "unit6"=>15, "unit7"=>10, "unit8"=>4);

foreach ($loop6 as $k => $v) {
    echo "$k = $v <br>";
}