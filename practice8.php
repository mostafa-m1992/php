<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <fieldset>
        <legend>Simple Calculator</legend>
        First Number:<br>
        <input type="text" name="number1"><br>
        Second Number:<br>
        <input type="text" name="number2"><br>
        Operation Type:<br>
        <input type="radio" name="opration_type" value="+">+<br>
        <input type="radio" name="opration_type" value="-">-<br>
        <input type="radio" name="opration_type" value="*">*<br>
        <input type="radio" name="opration_type" value="/">/<br>
        <input type="submit" name="submit" value="="><br>
        </fieldset>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstNumber = $_REQUEST['number1'];
        $secondNumber = $_REQUEST['number2'];
        $operationType = $_REQUEST['opration_type'];
        $result = null;
        if (is_numeric($firstNumber) && is_numeric($secondNumber)) {
            switch ($operationType) {
                case '+':
                    $result = $firstNumber + $secondNumber;
                    break;
                case '-':
                    $result = $firstNumber - $secondNumber;
                    break;
                case '*':
                    $result = $firstNumber * $secondNumber;
                    break;
                case '/':
                    $result = $firstNumber / $secondNumber;
                    break;
                default:
                    $result = "undefind operation!";
                    break;
            }
            echo "the result is: $result";
        } else {
            echo "please enter a number value";
        }
    }
    ?>
</body>
</html>