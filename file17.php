<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file17</title>
</head>
<body>
    <p>this is file17 that will include file 16</p>
    <?php 
    # here I included file 16 to show a menue and use two variables 
    require('file16.php'); 
    echo "<br>" . "I have a $color $car.";?>
</body>
</html>