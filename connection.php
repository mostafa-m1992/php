<?php

//these variables declare data for connecting to the host and server

/*
declaring variables in simple way:

//first of all I declared a variable for naming my host that here my host is xampp so my host is local
$host = "localhost";
// I created a database in my host before starting in this address: localhost/phpmyadmin
$dataBase = "php";
// in localhost always username and pass are like this:
$username = "root";
$password = "";
*/

// declaring variables as constant. this way is better in these kind of values
define("HOST", "localhost");
define("DATABASE", "php");
define("USERNAME", "root");
define("PASSWORD", "");