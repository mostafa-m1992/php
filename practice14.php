<?php
// Write a division table program in PHP using for loop.
// https://www.etutorialspoint.com/index.php/php-exercises/division-table-in-php


$start  = 1;
$end = 10;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <?php
        print("<tr>");
		print("<th></th>");
		for($count = $start; $count <= $end; $count++) 
		print("<th>".$count."</th>");
		print("</tr>");
		
		for($count = $start; $count <= $end; $count++) 
		{
		  print("<tr><th>".$count."</th>");
		  for($count2 = $start; $count2 <= $end; $count2++) 
		  {
			$result = $count / $count2; 
			printf("<td>%.3f</td>", $result);
		  }
		  print("</tr> \n");
		}
        ?>
    </table>
</body>
</html>

<?php
echo "<br>"; echo "<br>"; 
// Write a program to convert the given string into an array.
// https://www.etutorialspoint.com/index.php/php-exercises/php-convert-string-into-an-array

$csvdata = 'Burch Jr, Philip H., The American establishment, Research in political economy 6(1983), 83-156';
$a = explode(',', $csvdata);
$info = print_r($a, true);
echo "<pre>$info</pre>";

// The PHP function explode() creates an array out of these values, you just have to provide the character(s) at which the string needs to be split.

