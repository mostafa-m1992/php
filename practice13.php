<?php


/* Write a simple PHP class which displays the following string */
echo "1"; echo "<br>";

class MyClass {
    public function __construct(){
        echo "MyClass class has initialized ! ";
    }
}

$userclass = new MyClass();


echo "<br>"; echo "<br>";


/* Write a simple PHP class which displays an introductory message like "Hello All, I am Scott", 
where "Scott" is an argument value of the method within the class. */
echo "2-1"; echo "<br>";


class user_message1 {
    public function introduce($name) {
        echo "hello All, I am $name";
    }
}

$mymessage1 = new user_message1();
$mymessage1->introduce('me');

echo "<br>"; 


echo "2-2"; echo "<br>";


class user_message2 {
    public $message = "Hello all, I am ";

    public function introduce($name) {
        return $this->message.$name;
    }
}

$mymessage2 = new user_message2();
echo $mymessage2->introduce('you');


/* Write a PHP class that calculates the factorial of an integer */
echo "<br>";echo "<br>";
echo "3"; echo "<br>";


class factorial_of_a_number {
    protected $_n;

    public function __construct($n){
        if (!is_int($n)) {
            throw new InvalidArgumentException('not a number or missing argument');
        }
        $this->_n = $n;
    }

    public function result(){
        $factorial = 1;
        for ($i=1; $i <= $this->_n ; $i++) { 
            $factorial *=$i;
        }
        return $factorial;
    }
}

$newfactorial = new factorial_of_a_number(5);
echo $newfactorial->result();



/* Write a PHP class that sorts an ordered integer array with the help of sort() function */
echo "<br>";echo "<br>";
echo "4"; echo "<br>";


class array_sort {
    protected $_asort;

    public function __construct(array $asort){
        $this->_asort = $asort;
    }

    public function alhsort() {
        $sorted = $this->_asort;
        sort($sorted);
        return $sorted;
    }
}


$sortarray = new array_sort(array(11, -2, 4, 35, 0, 8, -9));
print_r($sortarray->alhsort())."\n";



/* Calculate the difference between two dates using PHP OOP approach */
echo "<br>";echo "<br>";
echo "5"; echo "<br>";


$sdate = new DateTime("1981-11-03");
$edate = new DateTime("2013-09-04");

$interval = $sdate->diff($edate);
echo "difference : " . $interval->y . " years, " . $interval->m. " months, " . $interval->d. " days ";


/* Write a PHP Calculator class which will accept two values as arguments, 
then add them, subtract them, multiply them together, or divide them on request. */
echo "<br>";echo "<br>";
echo "6"; echo "<br>";


class MyCalculator {
    private $_fval, $_sval;

    public function __construct($fval, $sval){
        $this->_fval = $fval;
        $this->_sval = $sval;
    }

    public function add() {
        return $this->_fval + $this->_sval;
    }

    public function subtract() {
        return $this->_fval - $this->_sval;
    }

    public function multiply() {
        return $this->_fval * $this->_sval;
    }

    public function divide() {
        return $this->_fval / $this->_sval;
    }
}

$mycalc = new MyCalculator(12, 6);
echo $mycalc->add()."\n";
echo $mycalc->subtract()."\n";
echo $mycalc->multiply()."\n";
echo $mycalc->divide()."\n";



/* Write a PHP script to convert a string to Date and DateTime */
echo "<br>";echo "<br>";
echo "7"; echo "<br>";


$dt = DateTime::createFromFormat('m-d-Y', '12-08-2004')->format('Y-m-d');
echo $dt;