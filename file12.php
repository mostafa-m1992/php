<?php

// reqular expressions: sequence of characters that forms a search pattern
/* syntax:  $exp =/text/i;     /   is delimiter  .  i is a modifier that makes the search case-insensitive
The delimiter can be any character that is not a letter, number, backslash or space 
other modifiers:  m  u   
patterns: [abc]  [^abc]  [0-9] 
Metacharacters: | . ^ $  \d  \s  \b   \uxxxx 
Quantifiers: n+  n*  n?  n{x}  n{x,y}  n{x,} */


/* PHP provides a variety of functions that allow you to use regular expressions. 
The preg_match(), preg_match_all() and preg_replace() functions are some of the most commonly used ones. 
the others: preg_filter()   preg_grep    preg_last_error()   preg_replace_callback()    
preg_replace_callback_array()    preg_split()    preg_quote() */




$string1 = "this is string 1 and this will be a string in this pratice";
$array1 = ["Red", "Pink", "Green", "Blue", "Purple"];
$pattern1 = "/this/i";

# preg_match():	Returns 1 if the pattern was found in the string and 0 if not
echo preg_match($pattern1, $string1);

echo "<br>"; echo "<br>"; 

# preg_match_all():	Returns the number of times the pattern was found in the string, which may also be 0
$pattern2 = "/this/i";
echo preg_match_all($pattern2, $string1);

echo "<br>"; echo "<br>"; 

# preg_replace():	Returns a new string where matched patterns have been replaced with another string
$pattern3 = "/this/i";
echo preg_replace($pattern3, "that", $string1);

echo "<br>"; echo "<br>";

echo $string1;

echo "<br>"; echo "<br>";

# preg_filter():	Returns a string or an array with pattern matches replaced, but only if matches were found
echo preg_filter("/this/", "those", $string1, 2);

echo "<br>"; echo "<br>";

# preg_grep: 	Returns an array consisting only of elements from the input array which matched the pattern
$result1 = preg_grep("/p/i", $array1);
print_r($result1);

echo "<br>"; echo "<br>";

# preg_last_error():  	Returns an error code indicating the reason that the most recent regular expression call failed



# preg_replace_callback():   Given an expression and a callback, returns a string where all matches of the expression are replaced with the substring returned by the callback
function countLetters($matches) {
    return $matches[0] . '(' . strlen($matches[0]) . ')';
  }
  
$input = "Welcome to my file 12!";
$pattern = '/[a-z0-9\.]+/i';
$result = preg_replace_callback($pattern, 'countLetters', $input);
echo $result;

echo "<br>"; echo "<br>";


/* preg_replace_callback_array(): returns a string or an array of strings in which matches of 
a set of regular expressions are replaced with the return value of a callback function. */
function countLetter($match) {
    return $match[0] . '[' . strlen($match[0]) . 'letter]';
  }
  
function countDigit($match) {
    return $match[0] . '[' . strlen($match[0]) . 'digit]';
}
  
$input2 = "There are 365 days in a year.";
$patterns = [
    '/\b[a-z]+\b/i' => 'countLetters',
    '/\b[0-9]+\b/' => 'countDigits'
];
//$result2 = preg_replace_callback_array($patterns, $input2);
//echo $result2;

echo "<br>"; echo "<br>";


# preg_split() : Breaks a string into an array using matches of a regular expression as separators
$date = "1970-01-01";
$pattern3 = "/-/";
$components = preg_split($pattern3, $date, -1, PREG_SPLIT_OFFSET_CAPTURE);
print_r($components);


echo "<br>"; echo "<br>";


# preg_quote(): Escapes characters that have a special meaning in regular expressions by putting a backslash in front of them
$search = preg_quote("://", "/");
$input = 'https://www.w3schools.com/';
$pattern = "/$search/";
if(preg_match($pattern, $input)) {
  echo "The input is a URL.";
} else {
  echo "The input is not a URL.";
}
