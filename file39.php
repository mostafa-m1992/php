<?php

/* When many classes from the same namespace are being used at the same time, 
it is easier to use the namespace keyword: */
// namespace Html;  if we write it, we must drop 'Html\' before class names


include("file38.php");

$table = new Html\Table();
$table->title = "My table";
$table->numRows = 5;

$row = new Html\Row();
$row->numCells = 3;

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
    <?php $table->message(); ?>
    <?php $row->message(); ?>
</body>
</html>