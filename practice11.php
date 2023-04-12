<?php

// here I answered some questions to practice php codes
// the source of questions: https://codepaz.com/php-part-24/



echo "1-1"; echo "<br>"; 
echo strlen('hello world!');
echo "<br>"; 
echo "1-2"; echo "<br>"; 
echo strrev('hello world!');

echo "<br>"; echo "<br>"; 


echo "2"; echo "<br>"; 

$num = 8;
echo "value is now 8 <br>";
$num += 2;
echo "add 2. value is now $num . <br>";
$num -= 4;
echo "subtract 4. value is now $num . <br>";
$num *= 5;
echo "multiply by 5. value is now $num . <br>";
$num /= 3;
echo "divide by 3. value is now $num . <br>";
$num ++;
echo "increment value by one. value is now $num . <br>";
$num --;
echo "decrement value by one. balue is now $num . <br>";


echo "<br>"; 
echo "3-1"; echo "<br>"; 

$a = 0;
while ($a <= 10) {
    echo $a ++;
}

echo "<br>"; echo "<br>"; 
echo "3-2"; echo "<br>"; 

$b = 0;
do {
    echo $b ++;
} while ($b <= 10);


echo "<br>"; echo "<br>"; 
echo "4"; echo "<br>"; 

function rectangle($length, $width){
    $area = $length * $width;
    return $area;
}
echo rectangle(5, 3);



echo "<br>"; echo "<br>"; 
echo "5"; echo "<br>"; 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice11</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <legend>rectangle</legend>
            length: <input type="text" name="length" placeholder="length"><br>
            width: <input type="text" name="width" placeholder="width"><br>
            <input type="submit" name="submit" value="calculate"><br>
        </fieldset>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $length = $_POST['length'];
        $width = $_POST['width'];
        $error = null;
        $rectangle = null;

        if (isset($_POST['submit'])) {
            if (!is_numeric($length) && !is_numeric($width)) {
                echo $error = " insert the right number";
            } elseif (empty($length) && empty($width)){
                echo $error = " insert the number";
            } else {
                $rectangle = $length * $width;
            }
        }
        echo "<br> the rectangle is: $rectangle";
    }
    ?>
</body>
</html>


<?php

echo "<br>"; echo "<br>"; 
echo "6-1"; echo "<br>"; 

$cities = ['Tokyo', 'Mexico', 'NewYork', 'Mumbai', 'Seoul', 'Shanghai'];
print_r($cities); 
echo "<br>"; 
echo "6-2"; echo "<br>"; 

sort($cities);
var_dump($cities); 
echo "<br>"; 
echo "6-2"; echo "<br>"; 

array_push($cities, 'Lagos', 'Buenos', 'Aires', 'Cairo', 'London');
foreach ($cities as $value) {
    echo $value . "<br>";
}



echo "<br>"; echo "<br>"; 
echo "7"; echo "<br>"; 


$people = ['Peter'=> 35, 'Ben'=> 37, 'Joe'=> 43];
foreach ($people as $key => $value) {
    echo "person is: $key and age is: $value <br>";
}

echo "<br>"; echo "<br>"; 
echo "8"; echo "<br>"; 

function rev_int($number)
{
    $rev = 0;
    while ($number > 0) {
        $rev = $rev * 10;
        $rev = $rev + $number % 10;
        $number = (int)($number / 10);
    }
    return $rev;
}
print_r(rev_int(1234) . "\n");
print_r(rev_int(23) . "\n");