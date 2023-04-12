<?php

require "practice4.php";

$dbname = "practice";
$host = "localhost";

$dsn = "mysql:dbname=$dbname;host=$host";
$username = "root";
$password = "";
$options = array(PDO::ATTR_PERSISTENT => true);

try {
    $conn = new PDO($dsn, $username, $password, $options);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error to connect: " . $e->getMessage());
}

try {
    $sqlInsert = $conn->prepare("INSERT INTO form
    (fname, lname,	email, tel,	password, time,	date, datetimeLocal, selectItem, datalist,	radio, file, number)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");

    $sqlInsert->bindParam(1, $_REQUEST['fname']);
    $sqlInsert->bindParam(2, $_REQUEST['lname']);
    $sqlInsert->bindParam(3, $_REQUEST['email']);
    $sqlInsert->bindParam(4, $_REQUEST['tel']);
    $sqlInsert->bindParam(5, $_REQUEST['password']);
    $sqlInsert->bindParam(6, $_REQUEST['time']);
    $sqlInsert->bindParam(7, $_REQUEST['date']);
    $sqlInsert->bindParam(8, $_REQUEST['datetimeLocal']);
    $sqlInsert->bindParam(9, $_REQUEST['selectItem']);
    $sqlInsert->bindParam(10, $_REQUEST['datalist']);
    $sqlInsert->bindParam(11, $_REQUEST['radio']);
    $sqlInsert->bindParam(12, $_REQUEST['file']);
    $sqlInsert->bindParam(13, $_REQUEST['number']);

    $sqlInsert->execute();

} catch (PDOException $e) {
    die("Error to insert: " . $e->getMessage());
}

try {
    $sqlSelect = $conn->query("SELECT * FROM form");
    if ($sqlSelect->rowCount() > 0) {
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>fname</th>";
                echo "<th>lname</th>";
                echo "<th>email</th>";
                echo "<th>tel</th>";
                echo "<th>password</th>";
                echo "<th>time</th>";
                echo "<th>date</th>";
                echo "<th>datetimeLocal</th>";
                echo "<th>selectItem</th>";
                echo "<th>datalist</th>";
                echo "<th>radio</th>";
                echo "<th>file</th>";
                echo "<th>number</th>";
                echo "<th>reg_date</th>";
            echo "</tr>";
        while ($row = $sqlSelect->fetch()) {
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['lname'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['tel'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['time'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['datetimeLocal'] . "</td>";
                echo "<td>" . $row['selectItem'] . "</td>";
                echo "<td>" . $row['datalist'] . "</td>";
                echo "<td>" . $row['radio'] . "</td>";
                echo "<td>" . $row['file'] . "</td>";
                echo "<td>" . $row['number'] . "</td>";
                echo "<td>" . $row['reg_date'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        unset($sqlSelect);
    } else {
        echo "No Records matching your query";
    }
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}




unset($conn);