<?php

$file = fopen('f1.txt', 'w');
echo readfile('f1.txt');
echo "<br>";
$txt = "line1";
fwrite($file, $txt);
echo readfile('f1.txt');
echo "<br>";
$file = fopen('newfile.txt', 'r');
echo readfile('newfile.txt');
fclose($file);
echo "<br>";
$file = fopen('newfile.txt', 'r+');
echo readfile('newfile.txt');
fclose($file);
echo "<br>";
echo "<hr>";
$file = fopen('f2.txt', 'w') or die('unable');
$txt = 'AJAX = Asynchronous JavaScript and XML
CSS = Cascading Style Sheets
HTML = Hyper Text Markup Language
PHP = PHP Hypertext Preprocessor
SQL = Structured Query Language
SVG = Scalable Vector Graphics
XML = EXtensible Markup Language';
fwrite($file, $txt);
echo readfile('f2.txt');
fclose($file);
echo "<br>";
echo "<hr>";
$file = fopen('f2.txt', 'r') or die('unable');
echo fgets($file);
echo "<br>";
echo fgetc($file);
fclose($file);
echo "<hr>";
$file = fopen('f2.txt', 'r');
while (!feof($file)) {
    echo fgetc($file);
}
fclose($file);
echo "<br>";
echo "<hr>";
$file = fopen('f2.txt', 'r');
while (!feof($file)) {
    echo fgets($file);
}
fclose($file);
echo "<br>";
echo "<hr>";

$file = fopen('f3.txt', 'w') or die('unable');
$txt = "first\n";
fwrite($file, $txt);
$txt = "second\n";
fwrite($file, $txt);
$txt = "third\n";
fwrite($file, $txt);
echo readfile('f3.txt');
echo "<br>";
echo "<hr>";