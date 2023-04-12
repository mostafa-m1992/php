<?php

# filehandling. there are lots of functions for this work: https://www.w3schools.com/php/php_ref_filesystem.asp

// readfile()
echo "1";
echo "<br>";
echo readfile('webdictionary.txt');

echo "<hr>";



// fopen()    This function gives you more options than the readfile() function
echo "2";
echo "<br>";
$myfile = fopen('webdictionary.txt', 'r') or die("unable to open file");
echo fread($myfile, filesize('webdictionary.txt'));
fclose($myfile);
echo "<hr>";
echo fopen('webdictionary.txt', 'r') or die("unable to open file");
/* r: Open a file for read only: File pointer starts at the beginning of the file
w: Open a file for write only: overrides the old content of the file   
a: Open a file for write only: appends text to the end of the file   
x: Creates a new file for write only: Returns FALSE and an error if file already exists
r+: Open a file for read/write: File pointer starts at the beginning of the file
w+: Open a file for read/write: Erases the contents of the file or creates a new file if it doesn't exist. 
    File pointer starts at the beginning of the file   
a+: Open a file for read/write: The existing data in file is preserved. 
    File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+: Creates a new file for read/write: Returns FALSE and an error if file already exists  */

// fread() contains: the name of the file and the maximum number of bytes to read
// fclose() close all files after you have finished with them

echo "<hr>";

// because we closed the previous file, here we must declare myfile variable one more time
echo "3";
echo "<br>";
$myfile = fopen('webdictionary.txt', 'r') or die("unable to open file");
echo fgets($myfile);
fclose($myfile);
// fgets() means file get first line

echo "<hr>";

echo "4";
echo "<br>";
$myfile = fopen('webdictionary.txt', 'r') or die("unable to open file");
while (!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}
fclose($myfile);
// feof() means: f end of file : that until end of file, it will loop

echo "<hr>";

echo "5";
echo "<br>";
$myfile = fopen('webdictionary.txt', 'r') or die("unable to open file");
while (!feof($myfile)) {
    echo fgetc($myfile);
}
fclose($myfile);
// this loop is like previous one but here we lopp by caracters instead of lines

echo "<hr>";

echo "6";
echo "<br>";
// The fopen() function is also used to create a file
$myfile = fopen("testfile.txt", "w");
echo readfile('testfile.txt');

echo "<hr>";

echo "7";
echo "<br>";
$myfile = fopen("newfile.txt", 'w') or die('unable to open file');
$txt = "the first line\n";
fwrite($myfile, $txt);
echo readfile('newfile.txt');
fclose($myfile);

echo "<hr>";

echo "8";
echo "<br>";
$myfile = fopen('newfile2.txt', 'w') or die('unable to read the file');
$txt = "the second line";
fwrite($myfile, $txt);
$txt = "the third line";
fwrite($myfile, $txt);
echo readfile('newfile2.txt');
fclose($myfile);

echo "<hr>";

// here the previous context will vanish and w overwrite it
echo "9";
echo "<br>";
$myfile = fopen('newfile2.txt', 'w') or die('unable to read the file');
$txt = "the forth line";
fwrite($myfile, $txt);
$txt = "the fifth line";
fwrite($myfile, $txt);
echo readfile('newfile2.txt');
fclose($myfile);

echo "<hr>";

// if we want the text not to overwrite, we use a . here we have both texts
echo "10";
echo "<br>";
$myfile = fopen('newfile2.txt', 'a') or die('unable to read the file');
$txt = "the sixth line";
fwrite($myfile, $txt);
$txt = "the seventh line";
fwrite($myfile, $txt);
echo readfile('newfile2.txt');
fclose($myfile);

echo "<hr>";