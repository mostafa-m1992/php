<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>file2</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

    <?php

    //here I practice 'string functions'. there are a lot of PHP String Functions that we can use: https://www.w3schools.com/php/php_ref_string.asp
    // using double or single coatation for declaring strings is permitted 
    
    /* The escape-sequence replacements are:
        \n is replaced by the 'newline' character
        \r is replaced by the 'carriage-return' character
        \t is replaced by the 'tab' character
        \$ is replaced by the 'dollar sign itself' ($)
        \" is replaced by a 'single double-quote' (")
        \\ is replaced by a 'single backslash' (\)  
        */


    //decleration of variables
    $str1 = "string1";
    $str2 = "string2";
    $str3 = "string3";
    $str4 = "string4";
    $str5 = "string5";
    $str6 = "string6";
    $str7 = "string7";
    $str8 = "string8";
    $str9 = "string9";

    echo "this is the length of str1: ";
    echo strlen($str1);
    
    echo "<br/>";

    echo "this is the counting of <i><b>words</b></i> in str2: ";
    echo str_word_count($str2);

    echo "<br/>";

    echo "reversing of str3 is:";
    echo strrev($str3);

    echo "<br/>";
    
    echo "";

    echo "<br/>";

    echo "for serching the position of a word in a string we use this function. the result for searching 'r' in str5 is: ";
    echo strpos($str5, "r");

    echo "<br/>";

    echo "the str6 is: string6 ,so I replace <b>str</b> instead of <b>string</b> with using str_replace function: ";
    echo str_replace("string", "str", $str6);

    echo "<br/>";
    ?>
</body>
</html>