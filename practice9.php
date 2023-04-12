<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container" style="margin-top: 50px">
    <?php
    if (isset($_POST['submit'])) {
        if (is_numeric($_POST['number1']) && is_numeric($_POST['number2'])) {
            if ($_POST['operation'] == 'plus') {
                $total = $_POST['number1'] + $_POST['number2'];
            }
            if ($_POST['operation'] == 'nimus') {
                $total = $_POST['number1'] - $_POST['number2'];
            }
            if ($_POST['operation'] == 'times') {
                $total = $_POST['number1'] * $_POST['number2'];
            }
            if ($_POST['operation'] == 'diviced by') {
                $total = $_POST['number1'] / $_POST['number2'];
            }
            echo "<h1> {$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total} </h1>";
        } else {
            echo "Number values are required";
        }
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <legend>Calculator</legend>
            number1:<input type="text" name="number1" class="form-control" style="width: 150px; display: inline">
            <select name="operation">
                <option value="plus">Plus</option>
                <option value="minus">Minus</option>
                <option value="times">Times</option>
                <option value="divided by">Divided By</option>
            </select>
            number2:<input type="text" name="number2" class="form-control" style="width: 150px; display: inline">
            <input type="submit" name="submit" value="Calculate" class="btn btn-primary">
        </fieldset>
    </form>

    </div>
</body>
</html>