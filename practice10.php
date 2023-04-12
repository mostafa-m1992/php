<?php

// here I answered some questions to practice php codes
// the source of questions: https://codepaz.com/php_part_7/


echo "1";
echo "<br>";
echo "this is a test/*8";
echo "<br>";
echo '//congratulations';
echo "<br>"; echo "<br>";


echo "2"; echo "<br>";
for ($i="c00"; $i < "c04"; $i++) { 
    echo $i . "<br>";
}
echo "<br>";

for ($i=0; $i < 3; $i++) { 
    echo "C0" . $i;
    echo "<br>";
}

echo "<br>";

$d = 'C00';
for ($i=0; $i < 3; $i++) { 
    echo $d++;
    echo "<br>";
}

echo "<br>";

echo "3";echo "<br>";
$a = 12;
$b = 6;
$temp = null;

echo "at the first a = " . $a . " and b = " . $b;
$temp = $b;
$b = $a;
$a = $temp;
echo "<br>";
echo "at the end a = " . $a . " and b = " . $b;

echo "<br>";echo "<br>";

echo "4";echo "<br>";
$x = 10;
$y = 7;
echo $x + $y;
echo "<br>";
echo $x / $y;
echo "<br>";
echo $x - $y;
echo "<br>";
echo $x * $y;
echo "<br>";
echo $x % $y;
echo "<br>";echo "<br>";

echo "5";echo "<br>";
$c = 8;
echo $c +=2;
echo "<br>";
echo $c -=4;
echo "<br>";
echo $c *=5;
echo "<br>";
echo $c /=3;
echo "<br>";
echo $c ++;
echo "<br>";
echo $c --;
echo "<br>";echo "<br>";

echo "7";echo "<br>";
$radius = 5;
echo $circumference = $radius * 2 * pi();
echo "<br>";
echo $area = $radius * $radius * pi();
echo "<br>";echo "<br>";

echo "8";echo "<br>";

$grade = null;
if ($grade >= 18 && $grade <= 20) {
    echo "900,000";
} elseif ($grade >= 15 && $grade <= 17){
    echo "600,000";
} elseif ($grade >= 12 && $grade <= 14) {
    echo "300,000";
} else {
    echo "100,000";
}

echo "<br>"; echo "<br>"; 

echo "9"; echo "<br>"; 
$day = 0;
switch ($day) {
    case 0:
        echo "saturday";
        break;
    case 1:
        echo "Sunday";
        break;
        case 2:
            echo "Monday";
            break;
            case 3:
                echo "Tuesday";
                break;
                case 4:
                    echo "Wednesday";
                    break;
                    case 5:
                        echo "Thursday";
                        break;
                        case 6:
                            echo "Friday";
                            break;
    default:
        echo "exit";
        break;
}

echo "<br>"; echo "<br>"; 

echo "10"; echo "<br>"; 

// ((25 + 26 + 27 + …. +35) / 10 )

$sum = null;
for ($i=25; $i <= 35; $i++) { 
    $sum += $i;
}
echo "sum = " . $sum . "<br/>";
echo "avg = " . $sum / 10;

echo "<br>"; echo "<br>"; 

echo "11"; echo "<br>";

for ($i=-5; $i < 5; $i = $i + 0.5) { 
    echo $i . "</br>";
}

echo "<br>"; echo "<br>"; 

echo "12"; echo "<br>";

for ($i=10; $i >= 1; $i--) { 
    echo $i . "</br>";
}


echo "<br>"; echo "<br>"; 

echo "13"; echo "<br>";

echo '<pre>';
for ($row=1; $row <=6 ; $row++) { 
    echo "<br>";
    for ($col=1; $col <=6 ; $col++) { 
        echo $row * $col . "\t";
    }
}
echo '</pre>';

echo "<br>"; echo "<br>"; 

echo "14"; echo "<br>"; echo "<br>";

while ($a < 37) {
    if ($a % 5 == 0) {
        echo $a . "<br>";
    }
    $a ++;
}


echo "<br>"; echo "<br>"; 

echo "15-1"; echo "<br>"; echo "<br>";

for ($i=1; $i <= 10 ; $i++) { 
    $result = $i % 2;
    if ($result == 0) {
        echo $i . "<br>";
    }
}


echo "<br>"; echo "<br>"; 

echo "15-2"; echo "<br>"; echo "<br>";

for ($i=1; $i <= 10; $i++) { 
    if (($i % 2) != 0) {
        continue;
    }
    echo $i . "<br>";
}