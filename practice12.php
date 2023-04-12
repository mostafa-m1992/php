<?php

// here I answered some questions to practice php codes
// the source of questions: https://codepaz.com/php-part-25/


echo "1";echo "<br>";

echo "today is " . date("Y/m/d") . "<br>";
echo "today is " . date("Y.m.d") . "<br>";
echo "today is " . date("Y-m-d") . "<br>";
echo "today is " . date("Y,m,d") . "<br>";
echo "today is " . date("l") . "<br>";
echo "the time is " . date("h:i:sa");
echo "<br>";
?>

@ 1998-<?php echo date("Y") ?>

<?php 


echo "<br>"; echo "<br>";
echo "2"; echo "<br>";

/*$file = fopen("file.txt", "r") or die("unable");
echo fread($file, filesize("file.txt"));
fclose($file);*/

echo "<br>"; echo "<br>";
echo "3"; echo "<br>";

function factorial($number){
    if ($number < 2) {
        return 1;
    } else {
        return ($number * factorial($number-1));
    }
}

echo factorial(3);


echo "<br>"; echo "<br>";
echo "4"; echo "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice12</title>
</head>
<body>
    <table width="400px" cellspacing="0px" cellpadding="0px" border="1px">
        <?php
        for ($row=1; $row <= 8; $row++) { 
            echo "<tr>";
            for ($col=1; $col <=8 ; $col++) { 
                $total = $row + $col;
                if ($total % 2 == 0) {
                    echo "<td height=35px width=30px bgcolor=#FFFFFF></td>";
                } else {
                    echo "<td height=35px width=30px bgcolor=#000000></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>


<?php


echo "<br>"; echo "<br>";
echo "5"; echo "<br>";

for ($row=1; $row <=8 ; $row++) { 
    for ($star=1; $star <= $row ; $star++) { 
        $star = "*";
    }
    echo "<br>";
}