<?php

// conditional statements: different actions for different conditions 
echo "<h1><b>conditional statements</b></h1>";
echo "<br>"; echo "<br>"; echo "<br>"; 

#there are four kinds of conditions in PHP: if , if...else , if...elseif...else , switch

// if : one condition and one action
echo "if";
echo "<br>";

$con1 = 10;

if ($con1 == 10) {
    echo "yes";
}

echo "<br>"; echo "<br>"; 

// if...else : one condition + two action
echo "if...else";
echo "<br>"; 

if ($con1 < 2) {
    echo "con1 is less than 2";
} else {
    echo "con1 is more than 2";
}

echo "<br>"; echo "<br>"; 
 
# if...elseif...else : two condition + more than two action
echo "if...elseif...else";
echo "<br>"; 

if ($con1 == 1) {
    echo "is 1"; 
} elseif ($con1 > 50) {
    echo "is greater than 50"; 
} {
    echo "Neither: con1 is 10"; 
}

echo "<br>"; echo "<br>"; 

//switch : different actions based on different conditions
echo "switch";
echo "<br>"; 

switch ($con1) {
    case 1:
        echo "1"; 
        break;
    case 5:
        echo "<br>";
        break;
    case 9:
        echo "9";
        break;
    default:
        echo "the default message printed: 10"; 
        break;
}


/* 
The switch-case statement differs from the if-elseif-else statement in one important way. 
The switch statement executes line by line (i.e. statement by statement) 
and once PHP finds a case statement that evaluates to true, it's not only executes the code corresponding to that case statement, 
but also executes all the subsequent case statements till the end of the switch block automatically.

To prevent this add a break statement to the end of each case block. 
The break statement tells PHP to break out of the switch-case statement block once it executes the code associated with the first true case.
*/