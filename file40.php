<?php

/*
    Namespace Alias:
It can be useful to give a namespace or class an alias to make it easier to write. 
This is done with the 'use' keyword:
*/

include("file38.php");

use Html as H;

$table = new H\Table();
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