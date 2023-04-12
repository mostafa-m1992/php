<?php

// An array is a special variable, which can hold more than one value at a time.

# declaring array by this function: array()

# three types of arrays: Indexed arrays.   Associative arrays.   Multidimensional arrays

// getting the length of an array by count() function. the list of array functions are here: https://www.w3schools.com/php/php_ref_array.asp . 


// indexed array: Arrays with a numeric index can declare in two ways: 

// 1
echo "<b><h1>Indexed Array</b></h1>";
echo "<br>"; 
$units1 = array("unit1", "unit2", "unit3", "unit4");

echo "units1 are: " . $units1[0] . ", " . $units1[1] . ", " . $units1[2] . " and " . $units1[3] . ".";

echo "<br>"; echo "<br>";

$u = ["unit1", "unit2", "unit3", "unit4"];
echo $u[2];

echo "<br>"; echo "<br>";

echo "the counting of units1 is: ";
echo count($units1);

echo "<br>"; echo "<br>";

// the second way of declaring indexed array:

$units2[0] = "unit5"; 
$units2[1] = "unit6"; 
$units2[2] = "unit7"; 
$units2[3] = "unit8"; 

echo "units2 are: " . $units2[0] . ", " . $units2[1] . ", " . $units2[2] . " and " . $units2[3] . ".";

echo "<br>"; echo "<br>";

$units2Length = count($units2);

echo "the counting of units2 is: " . $units2Length;

echo "<br>"; echo "<br>"; 

echo "this is looping through units1 by 'foreach' loop: <br>";

foreach ($units1 as $value) {
    echo $value;
    echo "<br>";
}

echo "<br>"; 

echo "this is looping through units2 by 'for' loop: <br>";

for ($i=0; $i < $units2Length; $i++) {
    echo $units2[$i];
    echo "<br>";
}

echo "<br>"; echo "<br>"; 

foreach ($units2 as $value) {
    echo $value;
    echo "<br>";
}

echo "<br>"; echo "<br>"; 
// Associative arrays: Arrays with named keys
echo "<b><h1>Associative Arrays</b></h1>";
echo "<br>"; 

//like indexed arrays, we have two ways for declaring them
// 1
$units3 = array("unit9"=>3, "unit10"=>2, "unit11"=>5, "unit12"=>1);
// 2
$units4["unit13"] = 4;
$units4["unit14"] = 1;
$units4["unit15"] = 6;
$units4["unit16"] = 9;

echo $units3["unit9"];
echo "<br>"; echo "<br>";
echo $units4["unit16"];
echo "<br>"; echo "<br>";
echo "unit9 is: " . $units3['unit9'];
echo "<br>"; echo "<br>";
echo "unit15 is: " . $units4['unit15'];
echo "<br>"; echo "<br>";

// looping through associative array by 'foreach' loop

foreach ($units3 as $key => $value) {
    echo "units3 name: " . $key . ", number of people: " . $value . "<br>";
}

echo "<br>"; echo "<br>";

foreach ($units4 as $key => $value) {
    echo "units4 name: " . $key . ", number of people: " . $value;
    echo "<br>";
}

echo "<br>"; echo "<br>"; echo "<br>";

// Multidimensional arrays: Arrays containing one or more arrays

echo "<b><h1>Multidimensional Arrays</b></h1>";
echo "<br>";

$units5 = array(
    array("unit1", 3, 1),
    array("unit2", 1, 2),
    array("unit3", 7, 3),
    array("unit4", 6, 4)
);

echo "the number of unit: " . $units5[0][0] . ", number of people: " . $units5[0][1] . " ,and floor: " . $units5[0][2];
echo "<br>";
echo "the number of unit: " . $units5[1][0] . ", number of people: " . $units5[1][1] . " ,and floor: " . $units5[1][2];
echo "<br>";
echo "the number of unit: " . $units5[2][0] . ", number of people: " . $units5[2][1] . " ,and floor: " . $units5[2][2];
echo "<br>"; 
echo "the number of unit: " . $units5[3][0] . ", number of people: " . $units5[3][1] . " ,and floor: " . $units5[3][2];
echo "<br>"; echo "<br>"; 

for ($row=0; $row < 4; $row++) {
    echo "<p><b>Row number $row </b></p>";
    for ($col=0; $col < 3; $col++) {
        echo "<li>" . $units5[$row][$col] . "</li>";
    }
    echo "</ul>";
}

echo "<br>"; echo "<br>"; 

// another example

$contacts = array(
    array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),
    array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
    )
);
// Access nested value
echo "Peter Parker's Email-id is: " . $contacts[0]["email"];

echo "<br>"; echo "<br>"; 

# Sort Functions For Arrays: The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.

echo "<b><h1>Sorting Arrays</b></h1>";
echo "<br>";


// sort() : Ascending order
echo "<b>sort() : Ascending order</b>";
echo "<br>"; echo "<br>";

$sorting1 = array("Volvo", "BMW", "Toyota");
sort($sorting1);

$sorting1length = count($sorting1);
// 'i' has the numbers of sorting1length. in number of counting, we show the value of sorting1. 
for ($i=0; $i < $sorting1length; $i++) {
    echo $sorting1[$i];
    echo "<br>";
}

echo "<br>"; 

$sorting2 = array(4, 2, 5, 1, 45);
sort($sorting2);

$sorting2length = count($sorting2);

for ($i=0; $i < $sorting2length; $i++) {
    echo $sorting2[$i];
    echo "<br>";
}

echo "<br>"; echo "<br>";

// rsort() : Descending order
echo "<b>rsort() : Descending order</b>";
echo "<br>"; echo "<br>";

$sorting3 = array("Volvo", "BMW", "Toyota");
rsort($sorting3);

$sorting3length = count($sorting3);

for ($i=0; $i < $sorting3length; $i++) {
    echo $sorting3[$i] . "<br>";
}

echo "<br>"; echo "<br>";

rsort($sorting2);

for ($i=0; $i < $sorting2length; $i++) {
    echo $sorting2[$i] . "<br>";
}

echo "<br>";
// asort() : Ascending Order, According to Value
echo "<b>asort() : Ascending Order, According to Value</b>";
echo "<br>"; echo "<br>";

asort($units3);

foreach ($units3 as $key => $value) {
    echo "key: " . $key . ", value: " . $value . "<br>";
}

echo "<br>";
// ksort() : Ascending Order, According to key
echo "<b>ksort() : Ascending Order, According to key</b>";
echo "<br>"; echo "<br>";

ksort($units3);

foreach ($units3 as $key => $value) {
    echo "key: " . $key . "value: " . $value . "<br>";
}

echo "<br>";
// arsort() : Decending Order, According to value
echo "<b>arsort() : Decending Order, According to value</b>";
echo "<br>"; echo "<br>";

arsort($units3);

foreach ($units3 as $key => $value) {
    echo "key: " . $key . "value: " . $value . "<br>";
}

echo "<br>";
// krsort() : Decending Order, According to key
echo "<b>krsort() : Decending Order, According to key</b>";
echo "<br>"; echo "<br>";

krsort($units3);

foreach ($units3 as $key => $value) {
    echo "key: " . $key . "value: " . $value . "<br>";
}


echo "<br>"; echo "<br>"; echo "<br>";
//another way:

print_r($units1);
echo "<br>"; 
print_r($units2);
echo "<br>"; 
print_r($units3);
echo "<br>"; 
print_r($units4);
echo "<br>"; 
print_r($units5);
echo "<br>"; echo "<br>"; 


// show array in table php

          $data = array( 
            array ( "Hartsfield Jackson Atlanta International","Atlanta" , "ATL" ),
            array ( "Chicago O'Hare International", " Chicago", " ORD" ),
            array ("Los Angeles International", " Los Angeles", " LAX" ),
            array ( "Dallas Fort Worth International", " Dallas-Fort Worth", " DFW" ),
            array (" Denver International", " Denver", " DEN" ),
            array ( "John F Kennedy International", " New York", " JFK" ),
            array ( "San Francisco International", " San Francisco", " SFO" ),
            array ("Charlotte Douglas International", " Charlotte"," CLT" ),
            array (" McCarran International", " Las Vegas"," LAS "),
            array ("Phoenix Sky Harbor International", " Phoenix", " PHX" ),
        );
          echo "<table>";
          echo "<tr> <th>Airport</th> <th>City</th> <th>Code</th> </tr>";
          for ($row = 0; $row <10; $row++) {
              echo"<tr>";
                  for ($col = 0; $col < 3; $col++) {
                        echo"<td>".$data[$row][$col]."</td>";
                    }
                echo "</tr>\n";
            }
          echo "</table>";






          echo "<br>"; echo "<br>"; 
echo "another example: ";

          echo "<br>"; echo "<br>"; echo "<br>"; echo "<br>"; 

            $names = array(
              'hamid',
              'ali',
              'morteza',
              'hossein'
          );
          
          echo '<table width="20%" border="5" >';
          echo '<th>NAMES</th>';
          foreach($names as $name) {
              echo '<tr>';
              echo '<td>' . $name . '</td>';
              echo '</tr>';
          }
          echo '</table>';




          
/*

          // another way to get array from database

          <?php while($rows=$x->fetch()){ ?>
            <tr>
            <td><?=$rows['name']?></td>
            <td><?=$rows['people']?></td>
            <td><?=$rows['days']?></td>
            </tr>
            <?php } ?>
        ?>



        // another way: https://stackoverflow.com/questions/43831676/display-dynamic-table-data-in-3-columns
        

        <?php
$result = mysqli_query($con,"SELECT sm_brand_name FROM store_manufacture");
$data = Array();
while ($row = mysqli_fetch_row($result))
    $data[] = $row;

for ($i = 0; $i < count($data) / 3; $i++){ // Line 75
    echo '<table><tr>';
    for ($j = 0; $j < 3; $j++){
        echo  '<td>' . var_dump ($data[ $i + $j * 3])  . '</td>';
    }
    echo '</tr><tr>';
}
echo '</tr></table>';
?>


// alter of previous code is: 

<table>

<?php 
$con    = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$sql    = "SELECT * FROM yourTable";
$result = mysqli_query($con, $sql);

$i = 0;

while ($row = mysqli_fetch_row($result)) {

    if($i == 0) {
        echo '<tr><td>' . $row[1] . '</td>';
        $i++;
    } elseif ($i == 1) {
        echo '<td>' .$row[1] . '</td>';
        $i++;
    } elseif($i == 2) {
        echo '<td>' . $row[1] . '</td></td>';
        $i = 0;
    }

}
?>

</table>

*/


// in_array — Checks if a value exists in an array


$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Got Irix";
}
if (in_array("mac", $os)) {
    echo "Got mac";
}