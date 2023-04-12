<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice7</title>
</head>
<body>
    <center>
    <form method="post">
        <fieldset>
            <legend>Calorie Calculator</legend>
            <br><br>
            Gender:
            <select name="gender">
                <option>Male</option>
                <option>Female</option>
            </select><br><br>
            
            Age:<input type="text" name="age">years.<br><br>

            Weight: <input type="text" name="weight">kgs.<br><br>

            Height: <input type="text" name="height">cm.<br><br>

            <input type="submit" name="Calculate" value="Calculate"><br><br>
        </fieldset>
    </form>
    </center>

    <?php
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $calories = "0.0215183";

    switch ($gender) {
        case 'Male':
            $gender = 655 + (9.6 * $weight ) + (1.8 * $height) - (4.7 * $age);
            echo "<p>Your estimate daily metabolic rate is $gender</p>";
            echo "<p>This means that you need rouhgly $gender calories a day to maintain your current weight.</p>";
            break;
        
        case 'Female':
            $gender = 66 + (13.7 *$weight) + (5 * $height) - (6.8 * $age);
			echo "<p>Your estimated daily metabolic rate is $gender </p>";
			echo "<p>This means that you need rouhgly $gender calories a day to maintain your current weight.</p>";
            break;
    }
    ?>
</body>
</html>