<?php

/*
Namespaces are qualifiers that solve two different problems:

1. They allow for better organization by 'grouping classes that work together to perform a task'
2. They 'allow the same name to be used for more than one class'

For example, you may have a 'set of classes' which describe an HTML table, such as Table, Row and Cell 
while also having another set of classes to describe furniture, such as Table, Chair and Bed. 
Namespaces can be used to organize the classes into two different groups 
while also preventing the two classes Table and Table from being mixed up.
*/

/*
    Declaring:
Namespaces are declared at the beginning of a file using the 'namespace' keyword

Constants, classes and functions declared in this file will belong to the Html namespace:
*/

namespace Html;

class Table {
    public $title = "";
    public $numRows = 0;
    public function message() {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
}

$table = new Table();
$table->title = "My table";
$table->numRows = 5;
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
    <?php
    $table->message();
    ?>
</body>
</html>

<?php



