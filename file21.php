<?php

# working with filters. complete functions: https://www.w3schools.com/php/php_ref_filter.asp

/*   filters are used to validate and sanitize data coming from insecure sources, like user input
Validating data = Determine if the data is in proper form
Sanitizing data = Remove any illegal character from the data    */

/*   PHP Filter Functions: filter_has_var(), filter_id(), filter_input(), filter_input_array(), 
filter_list(), filter_var(), filter_var_array()   */

// filter_has_var(): Checks whether a variable of a specified input type exist
$email = "email@test.com";
if (!filter_has_var(INPUT_GET, $email)) {
    echo "email not found";
} else {
    echo "email founded";
}



echo "<br>";
echo "<hr>";
// filter_id(): Returns the filter ID of a specified filter name
echo (filter_id("validate_email"));




echo "<br>";
echo "<hr>";
// filter_input():  Gets an external variable (e.g. from form input) and optionally filters it
if (!filter_input(INPUT_GET, $email, FILTER_VALIDATE_EMAIL)) {
    echo "email is not valid";
} else {
    echo "email is valid";
}




echo "<br>";
echo "<hr>";
// filter_input_array(): Gets external variables (e.g. from form input) and optionally filters them
$filters = array (
    "name" => array ("filter"=>FILTER_CALLBACK,
                               "flags"=>FILTER_FORCE_ARRAY,
                               "options"=>"ucwords"
                              ),
    "age"   => array ( "filter"=>FILTER_VALIDATE_INT,
                                "options"=>array("min_range"=>1,"max_range"=>120)
                              ),
    "email" => FILTER_VALIDATE_EMAIL
    );
print_r(filter_input_array(INPUT_POST, $filters));




echo "<br>";
echo "<hr>";
// filter_list(): Returns a list of all supported filter names
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file21</title>
</head>
<body>
    <table>
        <tr>
            <td>filter name</td>
            <td>filter ID</td>
        </tr>
        <?php
        foreach (filter_list() as $id => $filter) {
            echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
        }
        ?>
    </table>
</body>
</html>

<?php








echo "<br>";
echo "<hr>";
// filter_var(): Filters a variable with a specified filter
//this function has a lot of Predefined 'Filter Constants' and also some of them use 'possible options and FLAGs'

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "$email is a valid email address";
} else {
    echo "$email is not a valid email address";
}


echo "<br>";
// another example:
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "$email is valid";
} else {
    echo "$email isn't valid";
}


echo "<br>";
// remove all HTML tags from a string
$str = "<h1><b>the string test</h1></b>";
$myStr = filter_var($str, FILTER_SANITIZE_STRING);
echo $myStr;


echo "<br>";
// It will both remove all HTML tags, and all characters with ASCII value > 127, from the string:
$str = "<h1>Hello WorldÆØÅ!</h1>";
$newStr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newStr;



echo "<br>";
$myInt = 100;
if (filter_var($myInt) === 0 || !filter_var($myInt, FILTER_VALIDATE_INT) === false) {
    echo 'my Int is valid';
    } else {
    echo 'my Int is not valid';
}


echo "<br>";
// check if a variable is both of type INT, and between 1 and 200:
$int = 122;
$min = 1;
$max = 200;
if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
    echo "Variable value is not within the legal range";
} else {
    echo "Variable value is within the legal range";
}


echo "<br>";
$myIp = '127.0.0.1';
if (!filter_var($myInt, FILTER_VALIDATE_IP) === false) {
    echo "$myIp is a valid IP address";
} else {
    echo "$myIp isn't valid";
}


echo "<br>";
$myIpV6 = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
if (!filter_var($myIpV6, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    echo "$myIpV6 is a valid IP version 6";
} else {
    echo "$myIpV6 isn't valid";
}


echo "<br>";
$myUrl = "https://www.google.com";
$myUrl = filter_var($myUrl, FILTER_SANITIZE_URL);
if (!filter_var($myUrl, FILTER_VALIDATE_URL) === false) {
    echo "my Url is valid";
} else {
    echo "my Url isn't valid";
}



echo "<br>";
// check if the variable $url is a URL with a querystring
if (!filter_var($myUrl, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo "$myUrl is valid with a query string";
} else {
    echo "$myUrl isn't valid";
}






echo "<br>";
echo "<hr>";
// filter_var_array(): Gets multiple variables and filter them
$data = array(
    'fullname' => 'peter griffin',
    'age' => '41',
    'email' => 'email@test.com'
);
$myData = filter_var_array($data);
var_dump($myData);