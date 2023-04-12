<?php

/*
Static properties can be called directly - 'without creating an instance' of a class.

Static properties are declared with the 'static' keyword

To access a static property use the 'class name', double colon (::), and the property name
*/

class pi1 {
    public static $value = 3.14159;
    public function staticValue() {
        return self::$value;
    }
}

// get static property
echo pi1::$value;
echo "<br>";
$pi1 = new pi1();
echo $pi1->staticValue();

echo "<br>";echo "<br>";


/*
To call a static property from a child class, use the parent keyword inside the child class:
*/

class x extends pi1 {
    public function xStatic() {
        return parent::$value;
    }
}

// Get value of static property directly via child class
echo x::$value;

echo "<br>";

// or get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();