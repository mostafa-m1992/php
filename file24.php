<?php

include('file23.php');

$cookie_name = "cookieName";
$cookie_value = "cookieValue";
setcookie($cookie_name, $cookie_value);

session_start();

function testData($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['totalMoney'])) {
        $totalMoney = testData($_POST['totalMoney']);
    }

    if (isset($_POST['price'])) {
        $price = testData($_POST['price']);
    }
}

//$number = $totalMoney / $price;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file24</title>
    <style>
        table {
            border-collapse:  collapse;
            width: 100%;
            height: 100%;
        }
        td, th {
            border: 2px solid yellowgreen ;
            text-align: center;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
        td:hover{
            background-color: blueviolet;
        }
    </style>
</head>
<body>
    <?php
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <fieldset>
            <legend>Calculater</legend>
            Total Money: <input type="text" name="totalMoney"><br><br>
            Price: <input type="text" name="price"><br><br>
            <input type="submit"><br><br>
        </fieldset>
    </form>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <fieldset>
            <legend>Order</legend>
            Number: <input type="text" name="number"><br><br>
            Final Price: <input type="text" name="finalPrice" value="<?php echo $price ?>"><br><br>
            <input type="submit" value="Order"><br><br>
        </fieldset>
    </form>

    <?php
    $orderSide1 = fopen('orderSide1.txt', 'w') or die('unable open orderSide1');
    $txt = 'buy';
    fwrite($orderSide1, $txt);

    $symbol = 'dollor';
    $filterSymbol = filter_var($symbol, FILTER_SANITIZE_STRING);

    $number = 527;
    ?>
    <table>
        <caption>Order Report</caption>
        <tr>
            <th>Order Number</th>
            <th>Data</th>
            <th>Time</th>
            <th>Order Side</th>
            <th>Symbol</th>
            <th>Number</th>
            <th>Price</th>
            <th>Order Status</th>
        </tr>
        <tr>
            <td><?php echo rand(); ?></td>
            <td><?php echo date('y.m.d'); ?></td>
            <td><?php echo date('h/m/s'); ?></td>
            <td><?php echo readfile('orderSide1.txt'); fclose($orderSide1); ?></td>
            <td><?php echo $filterSymbol; ?></td>
            <td>
                <?php
                if (filter_var($number) === 0 || !filter_var($number, FILTER_VALIDATE_INT) === false) {
                    echo $number;
                } else {
                    echo 'number is not valid';
                }
                ?>
            </td>
            <td><?php echo $price = 500000; ?></td>
            <td><?php echo $status = 'done'; ?></td>
        </tr>
    </table>
</body>
</html>