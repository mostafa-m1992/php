<?php

// Abstract Classes and Methods

/*
Abstract classes and methods are when the parent class has a named method, 
but need its child class(es) to fill out the tasks.

An abstract class is a class that contains 'at least one' abstract method. 
An abstract method is a method that is declared, but not implemented in the code.

An abstract class or method is defined with the 'abstract' keyword
*/

/*
    about child class: 
The child class 'method' must be defined with 'the same name' and it redeclares the parent abstract method
The child class 'method' must be defined with the same or a less restricted 'access modifier'
The number of 'required arguments' must be the same. 
However, the child class may have optional arguments in addition
*/

// parent class
abstract class Car {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function intro() : string;
}

// child class

class Audi extends Car {
    public function intro() : string {
        return "choose German quality. I'm an $this->name";
    }
}

class Volvo extends car {
    public function intro() : string {
        return "proud to be Swedish. I'm a $this->name";
    }
}

class Citroen extends Car {
    public function intro() : string {
        return "French extravagance. I'm a $this->name";
    }
}

// create objects from the child classes
$audi = new audi('Audi');
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();
echo "<br>"; echo "<br>"; echo "<br>";



// The abstract method with an argument:

abstract class ParentClass {
    abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
    public function prefixName($name) {
        if (($name) == "Ali") {
            $prefix = "Mr.";
        } elseif ($name == "Mina") {
            $prefix = "Mrs.";
        } else {
            $prefix = "";
        }
        return "{$prefix} {$name}";
    }
}

$class = new ChildClass;
echo $class->prefixName("Ali");
echo "<br>";
echo $class->prefixName("Mina");
echo "<br>"; echo "<br>"; echo "<br>";




/*
where the abstract method has an argument, and the child class has two optional arguments 
that are not defined in the parent's abstract method:
*/
abstract class ParentClass2 {
    abstract protected function prefixName($name);
}

class ChildClass2 extends ParentClass2 {
    public function prefixName($name, $separator = "." , $greet = "Dear"){
        if (($name) == "Ali") {
            $prefix = "Mr.";
        } elseif ($name == "Mina") {
            $prefix = "Mrs.";
        } else {
            $prefix = "";
        }
        return "{$greet} {$prefix}{$separator} {$name}";
    }
}

$class2 = new ChildClass2;
echo $class2->prefixName("Ali");
echo "<br>";
echo $class2->prefixName("Mina");

echo "<br>"; echo "<br>"; echo "<br>";