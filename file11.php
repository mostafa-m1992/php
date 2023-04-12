<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file11</title>
</head>
<body>
    
<?php
# in this file I would like to work with built-in variables: always available in all scopes: Superglobals
//  $GLOBALS   $_SERVER    $_REQUEST    $_POST    $_GET     $_FILES     $_ENV    $_COOKIE    $_SESSION



define("HOST", "localhost");
define("DATABASE", "php");
define("USERNAME", "root");
define("PASSWORD", "");



// declaring $GLOBALS variable inside the function and use it outside
echo "<b><h1>GLOBALS</b></h1>";
echo "<br>"; echo "<br>"; 

$b = 2;
$c = 2; 

function addition(){
    $GLOBALS['a'] = $GLOBALS['b'] + $GLOBALS['c'];
}

addition();
echo $a;

echo "<br>"; echo "<br>";

// declaring $GLOBALS variable without any function and then using that
$d = 5;
$e = 5; 
$GLOBALS['f'] = $GLOBALS['d'] + $GLOBALS['e'];
echo $f;

echo "<br>"; echo "<br>";

// using previous variable inside a function by 'global' keyword
function add(){
    global $f;
    echo $f;
}
add();

echo "<br>"; echo "<br>"; echo "<br>"; echo "<br>";





# $_SERVER  :  holds information about headers, paths, and script locations.

// the most important elements that can go inside $_SERVER:

echo "<b><h1>SERVER</b></h1>";
echo "<br>"; echo "<br>"; 

echo "Returns the filename of the currently executing script";
echo "<br>"; 
echo $_SERVER['PHP_SELF'];
echo "<br>"; echo "<br>";
echo "Returns the version of the Common Gateway Interface (CGI) the server is using";
echo "<br>"; 
echo $_SERVER['GATEWAY_INTERFACE'];
echo "<br>"; echo "<br>";
echo "Returns the IP address of the host server";
echo "<br>"; 
echo $_SERVER['SERVER_ADDR'];
echo "<br>"; echo "<br>";
echo "Returns the name of the host server (such as www.w3schools.com)";
echo "<br>"; 
echo $_SERVER['SERVER_NAME'];
echo "<br>"; echo "<br>";
echo "	Returns the server identification string (such as Apache/2.2.24)";
echo "<br>"; 
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>"; echo "<br>";
echo "Returns the name and revision of the information protocol (such as HTTP/1.1)";
echo "<br>"; 
echo $_SERVER['SERVER_PROTOCOL'];
echo "<br>"; echo "<br>";
echo "Returns the request method used to access the page (such as POST)";
echo "<br>"; 
echo $_SERVER['REQUEST_METHOD'];
echo "<br>"; echo "<br>";
echo "Returns the timestamp of the start of the request (such as 1377687496)";
echo "<br>"; 
echo $_SERVER['REQUEST_TIME'];
echo "<br>"; echo "<br>";
echo "Returns the query string if the page is accessed via a query string";
echo "<br>"; 
echo $_SERVER['QUERY_STRING'];
echo "<br>"; echo "<br>";
echo "Returns the Accept header from the current request";
echo "<br>"; 
echo $_SERVER['HTTP_ACCEPT'];
echo "<br>"; echo "<br>";
echo "Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)";
echo "<br>"; 
echo $_SERVER['HTTP_ACCEPT_CHARSET'];
echo "<br>"; echo "<br>";
echo "Returns the Host header from the current request";
echo "<br>"; 
echo $_SERVER['HTTP_HOST'];
echo "<br>"; echo "<br>";
echo "Returns the complete URL of the current page (not reliable because not all user-agents support it)";
echo "<br>"; 
echo $_SERVER['HTTP_REFERER'];
echo "<br>"; echo "<br>";
echo "	Is the script queried through a secure HTTP protocol";
echo "<br>"; 
echo $_SERVER['HTTPS'];
echo "<br>"; echo "<br>";
echo "Returns the IP address from where the user is viewing the current page";
echo "<br>"; 
echo $_SERVER['REMOTE_ADDR'];
echo "<br>"; echo "<br>";
echo "Returns the Host name from where the user is viewing the current page";
echo "<br>"; 
echo $_SERVER['REMOTE_HOST'];
echo "<br>"; echo "<br>";
echo "Returns the port being used on the user's machine to communicate with the web server";
echo "<br>"; 
echo $_SERVER['REMOTE_PORT'];
echo "<br>"; echo "<br>";
echo "Returns the absolute pathname of the currently executing script";
echo "<br>"; 
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>"; echo "<br>";
echo "	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)";
echo "<br>"; 
echo $_SERVER['SERVER_ADMIN'];
echo "<br>"; echo "<br>";
echo "Returns the port on the server machine being used by the web server for communication (such as 80)";
echo "<br>"; 
echo $_SERVER['SERVER_PORT'];
echo "<br>"; echo "<br>";
echo "Returns the server version and virtual host name which are added to server-generated pages";
echo "<br>"; 
echo $_SERVER['SERVER_SIGNATURE'];
echo "<br>"; echo "<br>";
echo "Returns the file system based path to the current script";
echo "<br>"; 
echo $_SERVER['PATH_TRANSLATED'];
echo "<br>"; echo "<br>";
echo "Returns the path of the current script";
echo "<br>"; 
echo $_SERVER['SCRIPT_NAME'];
echo "<br>"; echo "<br>";
echo "Returns the URI of the current page";
echo "<br>"; 
echo $_SERVER['SCRIPT_URL'];

echo "<br>"; echo "<br>"; echo "<br>"; echo "<br>";





// $_REQUEST  :  is used to collect data after submitting an HTML form.

echo "<b><h1>REQUEST</b></h1>";
echo "<br>"; echo "<br>"; 
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <fieldset>
        <legend>requesting form</legend>
        <label for="nameId">name:</label><br>
        <input type="text" id="nameId" name="fname" placeholder="name" autofocus><br>
        <input type="submit" style="margin-top: 10px;">
    </fieldset>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "name is empty";
    } else {
        echo $name;
    }
    
}





// $_POST  :  is used to collect data after submitting an HTML form.
echo "<br>"; echo "<br>"; echo "<br>"; echo "<br>"; 
echo "<b><h1>POST</b></h1>";
echo "<br>"; echo "<br>"; echo "<br>"; 


?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <fieldset>
        <legend>posting form</legend>
        name: <input type="text" name="postname"><br>
        <input type="submit" style="margin-top: 15px;">
    </fieldset>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $postname = $_POST['postname'];
    if (empty($postname)) {
        echo "post name is empty";
    } else {
        echo $postname;
    }
}
?>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <fieldset>
        <legend>another posting form</legend>
        name: <input type="text" name="anpostname"><br>
        <input type="submit">
    </fieldset>
</form>


<?php
echo $_POST['anpostname'];






// $_GET  :  is used to collect data after submitting an HTML form.
echo "<br>"; echo "<br>"; echo "<br>"; echo "<br>"; 
echo "<b><h1>GET</b></h1>";
echo "<br>"; echo "<br>"; echo "<br>"; 


?>


<form action="<?php $_SERVER['PHP_SELF']; ?>" method="GET">
    <fieldset>
        <legend>getting form</legend>
        name: <input type="text" name="getname"><br>
        <input type="submit" style="margin-top: 15px;">
    </fieldset>
</form>

<?php
echo $_GET["getname"];

echo "<br>"; echo "<br>"; echo "<br>"; 
?>



<?php
if(isset($_GET["name"])){
    echo "<p>Hi, " . $_GET["name"] . "</p>";
}
?>
<form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="inputName">Name:</label>
    <input type="text" name="name" id="inputName">
    <input type="submit" value="Submit">
</form>



<?php

echo "<br>"; echo "<br>"; echo "<br>"; 



if(isset($_POST["name"])){
    echo "<p>Hi, " . $_POST["name"] . "</p>";
}
?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="inputName">Name:</label>
    <input type="text" name="name" id="inputName">
    <input type="submit" value="Submit">
</form>



<?php


echo "<br>"; echo "<br>"; echo "<br>"; 



if(isset($_REQUEST["name"])){
    echo "<p>Hi, " . $_REQUEST["name"] . "</p>";
}
?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="inputName">Name:</label>
    <input type="text" name="name" id="inputName">
    <input type="submit" value="Submit">
</form>



</body>
</html>


