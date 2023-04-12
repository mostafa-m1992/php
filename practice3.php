<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice3</title>
</head>
<body>
<?php

$name = "";
$nameErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
}
?>

<?php

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <fieldset>
            <legend>practice3</legend>
            name: <input type="text" name="name" value="<?php echo $name ?>" placeholder="first name">
            <span style="color: red;">*<?php echo $nameErr; ?></span><br><br>
            <input type="submit" name="submit" value="submit" style="margin-top: 20px;">
        </fieldset>
    </form>
    <?php
        echo "<h2>Your Input:</h2>";
        echo $name;
    ?>
</body>
</html>