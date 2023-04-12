<?php

// Traits

/*
PHP only supports single inheritance: a child class can inherit only from one single parent.
So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.
*/

/*
Traits are used to declare methods that can be used in multiple classes. 
Traits can have methods and abstract methods that can be used in multiple classes, 
and the methods can have any access modifier (public, private, or protected).
*/

/* Traits are declared with the 'trait' keyword:
To use a trait in a class, use the 'use' keyword:
*/


/**
 * 
 */
trait TraitName
{
    public function msg() {
        echo "OOP is fun";
    }
}


class Welcome {
    use TraitName;
}

$obj = new Welcome();
$obj->msg();

echo "<br>"; echo "<br>"; 






trait message1 {
    public function msg1() {
        echo "OOP is fun";
    }
}

trait message2 {
    public function msg2() {
        echo "<br> OOP reduces code duplication";
    }
}

class Welcome1 {
    use message1;
}

class Welcome2 {
    use message1, message2;
}

$obj1 = new Welcome1();
$obj1->msg1();
echo "<br>";


$obj2 = new Welcome2();
$obj1->msg1();
$obj2->msg2();
echo "<br>";