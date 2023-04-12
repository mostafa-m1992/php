<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice1</title>
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
        th:nth-child(even), td:nth-child(even) {
            background-color: #dddddd;
        }
        tr:hover{
            background-color: blueviolet;
        }
        #three {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }
        #rows, #headers {
            border: 2px solid yellowgreen;
            padding: 10px;
        }
        #rows:hover {background-color: antiquewhite;}
    </style>
</head>



<body>
    <?php 
    #Table One
    //constants/headers
    define("PRICE", "price");
    define("UNITNAME", "Unit Name");
    define("PEOPLE", "the number of people");
    define("DAYS", "days of attendance");
    define("MULTIPLICATION", "multiplication of days and people (X)");
    define("ADDITION", "addition of all previous (A)");
    define("DIVISION", "division of price on previous (B)");
    define("PORTION", "portion of each unit: multiplication of previous to x");
    define("FINALROUND", "final round portion");

    //variables
    $price = 175200;
    $units = array("unit1", "unit2", "unit3", "unit4");
    $people = array(
        array(4),
        array(1),
        array(5),
        array(2)
    );
    $days = array("unit1"=>20, "unit2"=>35, "unit3"=>27, "unit4"=>30);

    $multiplication;
    function multiplication ($people, $days) {
        global $multiplication;
        echo $multiplication = $people * $days;
    }
    
    $addition = 80 + 35 + 135 + 60;
    
    //$division = (round($price / $addition));
    $division = $price / $addition;

    $finalPortion;
    function portion($multiplication, $division){
        global $finalPortion;
        return $finalPortion = $multiplication * $division;
    }

    //echo $add = 60068.571428571 + 17520 + 67577.142857143 + 30034.285714286;

    function finalRound($multiplication, $division){
        return round($multiplication * $division);
    }
    ?>

    <?php




    # Table Two
    $data = array( 
        array ("at the floor 1"),
        array ("at the floor 2"),
        array ("at the floor 3"),
        array ("at the floor 4"),
    );
    $price2 = 175200;
    $units2[0] = "unit1";
    $units2[1] = "unit2";
    $units2[2] = "unit3";
    $units2[3] = "unit4";
    $people2 = array("unit1" => 4, "unit2"=> 1,"unit3" => 5,"unit4" => 2);
    $days2["unit1"] = 20;
    $days2["unit2"] = 35;
    $days2["unit3"] = 27;
    $days2["unit4"] = 30;
    $multiplication2;
    function multiplication2($people2, $days2){
        global $multiplication2;
        echo $multiplication2 = $people2 * $days2;
    }
    $addition2 = 80 + 35 + 135 + 60;
    $division2 = $price2 / $addition2;
    $finalPortion2;
    function portion2($multiplication2, $division2){
        global $finalPortion2;
        return $finalPortion2 = $multiplication2 * $division2;
    }
    function finalRound2($finalPortion2){
        echo round($finalPortion2);
    }



    # Table Three
    ?>




    <h1 style="text-align: center ">Table One</h1>
    <table> <!--Table One-->
        <caption>The First Practice to count charges</caption>
        <colgroup>
            <col span="2" style="background-color: #D6EEEE;">
            <col span="3" style="background-color: pink;">
        </colgroup>
        <tr>
            <th><?php echo PRICE ?></th>
            <th><?php echo UNITNAME; ?></th>
            <th><?php echo PEOPLE ?></th>
            <th><?php echo DAYS ?></th>
            <th><?php echo MULTIPLICATION ?></th>
            <th><?php echo ADDITION ?></th>
            <th><?php echo DIVISION ?></th>
            <th><?php echo PORTION ?></th>
            <th><?php echo FINALROUND ?></th>
        </tr>
        <tr>
            <td rowspan="4"><?php echo $price ?></td>
            <th><?php echo $units[0] ?></th>
            <td><?php echo $people[0][0] ?></td>
            <td><?php echo $days["unit1"] ?></td>
            <td><?php multiplication($people[0][0], $days["unit1"]); ?></td>
            <td rowspan="4"><?php echo $addition ?></td>
            <td rowspan="4"><?php echo $division ?></td>
            <td><?php echo portion($multiplication, $division) ?></td>
            <td><?php echo finalRound($multiplication, $division) ?></td>
        </tr>
        <tr>
            <th><?php echo $units[1] ?></th>
            <td><?php echo $people[1][0] ?></td>
            <td><?php echo $days["unit2"] ?></td>
            <td><?php multiplication($people[1][0], $days["unit2"]); ?></td>
            <td><?php echo portion($multiplication, $division) ?></td>
            <td><?php echo finalRound($multiplication, $division) ?></td>
        </tr>
        <tr>
            <th><?php echo $units[2] ?></th>
            <td><?php echo $people[2][0] ?></td>
            <td><?php echo $days["unit3"] ?></td>
            <td><?php multiplication($people[2][0], $days["unit3"]); ?></td>
            <td><?php echo portion($multiplication, $division) ?></td>
            <td><?php echo finalRound($multiplication, $division) ?></td>
        </tr>
        <tr>
            <th><?php echo $units[3] ?></th>
            <td><?php echo $people[3][0] ?></td>
            <td><?php echo $days["unit4"] ?></td>
            <td><?php multiplication($people[3][0], $days["unit4"]); ?></td>
            <td><?php echo portion($multiplication, $division) ?></td>
            <td><?php echo finalRound($multiplication, $division) ?></td>
        </tr>
    </table>      

    <h1 style="text-align: center">Table Two</h1>
    <table> <!--Table Two-->
        <caption>The Second Practice to count chcarges</caption>
        <colgroup>
            <col span="6" style="background-color: pink;">
        </colgroup>
        <tr>
            <th>Floor</th>
            <th><?php echo PRICE ?></th>
            <th><?php echo UNITNAME; ?></th>
            <th><?php echo PEOPLE ?></th>
            <th><?php echo DAYS ?></th>
            <th><?php echo MULTIPLICATION ?></th>
            <th><?php echo ADDITION ?></th>
            <th><?php echo DIVISION ?></th>
            <th><?php echo PORTION ?></th>
            <th><?php echo FINALROUND ?></th>
        </tr>
        <tr>
            <td rowspan="5">
                <?php
                    for ($row = 0; $row <3; $row++) {
                        for ($col = 0; $col < 1; $col++) {
                            echo $data[$row][$col]."<br>"."<hr>";
                        }
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td rowspan="4">
                <?php if ($price2 === 175200) {
                    echo 175200;
                } ?>
            </td>
            <th>
                <?php
                echo $units2[0];
                ?>
            </th>
            <td>
                <?php
                echo $people2["unit1"];
                ?>
            </td>
            <td>
                <?php
                if (in_array(20, $days2)) {
                    echo 20;
                }
                ?>
            </td>
            <td>
                <?php
                multiplication2($people2["unit1"], $days2["unit1"])
                ?>
            </td>
            <td rowspan="4">
                <?php
                echo $addition2 = (empty($addition2)) ? "empty" : $addition2;
                ?>
            </td>
            <td rowspan="4">
                <?php
                echo $division2 = $_GET[$division2] ?? $division2;
                ?>
            </td>
            <td>
                <?php
                echo portion2($multiplication2, $division2)
                ?>
            </td>
            <td>
                <?php
                finalRound2($finalPortion2)
                ?>
            </td>
        </tr>
        <tr>
            <th>
                <?php
                echo $units2[1];
                ?>
            </th>
            <td>
                <?php
                echo $people2["unit2"];
                ?>
            </td>
            <td>
                <?php
                if (in_array(35, $days2)) {
                    echo 35;
                }
                ?>
            </td>
            <td>
                <?php
                multiplication2($people2["unit2"], $days2["unit2"])
                ?>
            </td>
            <td>
                <?php
                echo portion2($multiplication2, $division2)
                ?>
            </td>
            <td>
                <?php
                finalRound2($finalPortion2)
                ?>
            </td>
        </tr>
        <tr>
            <th>
                <?php
                echo $units2[2];
                ?>
            </th>
            <td>
                <?php
                echo $people2["unit3"];
                ?>
            </td>
            <td>
                <?php
                if (in_array(27, $days2)) {
                    echo 27;
                }
                ?>
            </td>
            <td>
                <?php
                multiplication2($people2["unit3"], $days2["unit3"])
                ?>
            </td>
            <td>
                <?php
                echo portion2($multiplication2, $division2)
                ?>
            </td>
            <td>
                <?php
                finalRound2($finalPortion2)
                ?>
            </td>
        </tr>
        <tr>
            <th>
                <?php
                echo $units2[3];
                ?>
            </th>
            <td>
                <?php
                echo $people2["unit4"];
                ?>
            </td>
            <td>
                <?php
                if (in_array(30, $days2)) {
                    echo 30;
                }
                ?>
            </td>
            <td>
                <?php
                multiplication2($people2["unit4"], $days2["unit4"])
                ?>
            </td>
            <td>
                <?php
                echo portion2($multiplication2, $division2)
                ?>
            </td>
            <td>
                <?php
                finalRound2($finalPortion2)
                ?>
            </td>
        </tr>
    </table>

    <h1 style="text-align: center;">Table Three</h1>
    <table id="three"> <!--Table Three-->
        <caption>The Third Practice to count charges</caption>
        <colgroup>
            <col span="2" style="background-color: pink;">
        </colgroup>
        <tr id="rows">
            <th id="headers">header1</th>
            <th id="headers">header1</th>
            <th id="headers">header1</th>
        </tr>
        <tr id="rows">
            <td id="datum">data1</td>
            <td id="datum">data1</td>
            <td id="datum">data1</td>
        </tr>
        <tr id="rows">
            <td id="datum">data1</td>
            <td id="datum">data1</td>
            <td id="datum">data1</td>
        </tr>
        <tr id="rows">
            <td id="datum">data1</td>
            <td id="datum">data1</td>
            <td id="datum">data1</td>
        </tr>
    </table>

</body>

</html>