<?php

// Continuation of the previous file:

include("file38.php");
use Html\Table as T;

$table = new T();
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
    <?php $table->message(); ?>
</body>
</html>