<?php

# practicing Date and Time in php. 
// there is a lot of functions to manipulate Date as well as the complete sourse: https://www.w3schools.com/php/php_ref_date.asp
# syntax: date(format, timestamp)

// getting a date:
echo "as year, month and day, today is: " . date('Y/m/d');
// we can use / . -  to seperate the format
echo "<br>";
echo "the day of the week is: " . date('l');
echo "<br>";
?>


&copy; 2010-<?php echo date("Y");?>


<?php
echo "<br>";
// getting time:
echo "the time is " . date("h:i:sa");
echo "<br>";

//getting your time zone:
date_default_timezone_set("America/New_York");
echo "the time zone is: " . date("H:i:sa");
echo "<br>";
// creating a date 
// syntax: mktime(hour, minute, second, month, day, year)

$d1 = mktime(10, 14, 50, 6, 3, 2023);
echo "created date is: " . date("Y-m-d h:i:sa", $d1);
echo "<br>";

// Create a Date From a String
// syntax: strtotime(time, now)
$d2 = strtotime("11:24:30pm June 20 2022");
echo "created date from str is: " . date("Y,m,d h:i:sa", $d2);
echo "<br>";

$d3=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d3) . "<br>";

$d4=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d4) . "<br>";

$d5=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d5) . "<br>";
echo "<br>";


$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}