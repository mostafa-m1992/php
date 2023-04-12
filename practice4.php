<?php
$fname = $lname = $email = $tel = $password = $date = $datetimeLocal = $month = $time = $week = $selectItem = $datalist = $radio = $file = $number = "";
$fnameErr = $lnameErr = $emailErr = $telErr = $passwordErr = $dateErr = $datetimeLocalErr = $monthErr = $timeErr = $weekErr = $selectItemErr = $datalistErr = $radioErr = $fileErr = $numberErr = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['fname'])) {
        $fnameErr = "the first name is empty";
    } else {
        $fname = test_data($_POST['fname']);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
            $fnameErr = "write down the correct first name";
        }
    }

    if (empty($_POST['lname'])) {
        $lnameErr = "the last name is empty";
    } else {
        $lname = test_data($_POST['lname']);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
            $lnameErr = "write down the correct last name";
        }
    }

    if (empty($_POST['email'])) {
        $emailErr = "the email is empty";
    } else {
        $email = test_data($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "write down the correct email";
        }
    }

    if (empty($_POST['tel'])) {
        $telErr = "the telephone is empty";
    } else {
        $tel = test_data($_POST['tel']);
        if (!preg_match("/^[0-9]*$/", $tel)) {
            $telErr = "write down the correct telephone";
        }
    }

    if (empty($_POST['password'])) {
        $passwordErr = "the password is empty";
    } else {
        $password = test_data($_POST['password']);
    }

    if (empty($_POST['date'])) {
        $dateErr = "set the date";
    } else {
        $date = test_data($_POST['date']);
    }

    if (empty($_POST['datetimeLocal'])) {
        $datetime_localErr = "set the datetime local";
    } else {
        $datetime_local = test_data($_POST['datetimeLocal']);
    }

    if (empty($_POST['month'])) {
        $monthErr = "set the month";
    } else {
        $month = test_data($_POST['month']);
    }

    if (empty($_POST['time'])) {
        $timeErr = "set the time";
    } else {
        $time = test_data($_POST['time']);
    }

    if (empty($_POST['week'])) {
        $weekErr = "set the week";
    } else {
        $week = test_data($_POST['week']);
    }

    if (empty($_POST['selectItem'])) {
        $selectErr = "select one item";
    } else {
        $select = test_data($_POST['selectItem']);
    }

    if (empty($_POST['datalist'])) {
        $datalistErr = "set the datalist";
    } else {
        $datalist = test_data($_POST['datalist']);
    }

    if (empty($_POST['radio'])) {
        $radioErr = "set the radio";
    } else {
        $radio = test_data($_POST['radio']);
    }

    if (empty($_POST['file'])) {
        $fileErr = "choose a file";
    } else {
        $file = test_data($_POST['file']);
    }

    if (empty($_POST['number'])) {
        $numberErr = "set the number";
    } else {
        $number = test_data($_POST['number']);
    }
}

function test_data($d){
    $d = trim($d);
    $d = stripslashes($d);
    $d = htmlspecialchars($d);
    return $d;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice4</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <fieldset>
            <legend>practice4</legend><br>

            <label for="fname">first name</label>
            <input type="text" id="fname" name="fname" value="<?php echo $fname; ?>" placeholder="first name">
            <span style="color: red;">*<?php echo $fnameErr ?></span><br><br>

            <label for="lname">last name</label>
            <input type="text" id="lname" name="lname" value="<?php echo $lname ?>" placeholder="last name">
            <span style="color: red;">*<?php echo $lnameErr ?></span><br><br>

            <label for="email">email</label>
            <input type="text" id="email" name="email" value="<?php echo $email ?>" placeholder="email">
            <span style="color: red;">*<?php echo $emailErr; ?></span><br><br>

            <label for="tel">telephone</label>
            <input type="tel" id="tel" name="tel" placeholder="telephone" value="<?php echo $tel; ?>">
            <span style="color: red;">*<?php echo $telErr; ?></span><br><br>

            <label for="password">password</label>
            <input type="password" id="password" name="password" placeholder="password" value="<?php echo $password; ?>">
            <span style="color: red;">*<?php echo $passwordErr; ?></span><br><br>

            <label for="time">time</label>
            <input type="time" id="time" name="time" value="<?php echo $time; ?>">
            <span style="color: red;">*<?php echo $timeErr; ?></span><br><br>

            <label for="date">date</label>
            <input type="date" id="date" name="date" max="1900-1-1" min="2024-1-1" value="<?php echo $date; ?>">
            <span style="color: red;">*<?php echo $dateErr; ?></span><br><br>

            <label for="datetimeLocal">datetimeLocal</label>
            <input type="datetime-local" id="datetime-local" name="datetimeLocal" value="<?php echo $datetimeLocal; ?>">
            <span style="color: red;">*<?php echo $datetimeLocalErr; ?></span><br><br>

            <label for="month">month</label>
            <input type="month" id="month" name="month" value="<?php echo $month; ?>">
            <span style="color: red;">*<?php echo $monthErr; ?></span><br><br>

            <label for="week">week</label>
            <input type="week" id="week" name="week" value="<?php echo $week; ?>">
            <span style="color: red;">*<?php echo $weekErr; ?></span><br><br>

            <label for="select">selectItem</label>
            <select id="selectItem" name="selectItem">
                <optgroup label="languages">
                    <option value="PHP">PHP</option>
                    <option value="HTML">HTML</option>
                    <option value="CSS">CSS</option>
                </optgroup>
                <optgroup label="majors">
                    <option value="philosophy">philosophy</option>
                    <option value="math">math</option>
                    <option value="art">art</option>
                </optgroup>
            </select><br><br>

            <label for="datalist">datalist</label>
            <input list="datalist" name="datalist">
            <datalist id="datalist">
                <option value="list1">
                <option value="list2">
                <option value="list3">
                <option value="list4">
                <option value="list5">
            </datalist><br><br>

            <input type="radio" id="radioPHP" name="radio" value="PHP" <?php if (isset($radio) && $radio == "PHP")
                echo "checked"; ?>>
            <label for="radioPHP">php</label><br>
            <input type="radio" id="radioHTML" name="radio" value="HTML" <?php if (isset($radio) && $radio == "HTML")
                echo "checked"; ?>>
            <label for="radioHTML">HTML</label><br>
            <input type="radio" id="radioCSS" name="radio" value="CSS" <?php if (isset($radio) && $radio == "CSS")
                echo "checked"; ?>>
            <label for="radioCSS">CSS</label>
            <span style="color: red;">*<?php echo $radioErr; ?></span><br><br>

            <label for="file">select a file:</label>
            <input type="file" id="file" name="file" multiple value="<?php echo $file; ?>">
            <span style="color: red;">*<?php echo $fileErr; ?></span><br><br>

            <label for="number">number</label>
            <input type="number" id="number" name="number" min="10" max="100" step="15" value="<?php echo $number; ?>">
            <span style="color: red;">*<?php echo $numberErr; ?></span><br><br>

            <input type="reset"><br><br>
            <input type="submit" value="submit" name="submit">
            
        </fieldset>
    </form>

    <?php
    /*
    echo "<b>yout input: </b>" . "<br>";
    echo "<br>";
    echo "your first name is: " . $fname;
    echo "<br>"; echo "<br>";
    echo "your last name is: " . $lname;
    echo "<br>"; echo "<br>";
    echo "your email is: " . $email;
    echo "<br>"; echo "<br>";
    echo "your telephone is: " . $tel;
    echo "<br>"; echo "<br>";
    echo "your password is: " . $password;
    echo "<br>"; echo "<br>";
    echo "your date is: " . $date;
    echo "<br>"; echo "<br>";
    echo "your date time local is: " . $datetimeLocal;
    echo "<br>"; echo "<br>";
    echo "your month is: " . $month;
    echo "<br>"; echo "<br>";
    echo "your time is: " . $time;
    echo "<br>"; echo "<br>";
    echo "your week is: " . $week;
    echo "<br>"; echo "<br>";
    echo "your selection is: " . $selectItem;
    echo "<br>"; echo "<br>";
    echo "your data list is: " . $datalist;
    echo "<br>"; echo "<br>";
    echo "your radio is: " . $radio;
    echo "<br>"; echo "<br>";
    echo "your file is: " . $file;
    echo "<br>"; echo "<br>";
    echo "your number is: " . $number;
    echo "<br>"; echo "<br>"; */
    ?>
</body>
</html>