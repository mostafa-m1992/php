<?php

/*
'Inheritance' in OOP = When a class derives from another class.
*/

/*
The child class will inherit all the public and protected properties and methods from the parent class. 
In addition, it can have its own properties and methods.
*/

/*
An inherited class is defined by using the 'extends' keyword.
*/

// The 'final' keyword can be used before the name of class and method to prevent class inheritance or to prevent method overriding.

class Fruit5 {
    public $_name;
    public $_color;

    public function __construct($name, $color){
        $this->_name = $name;
        $this->_color = $color;
    }

    protected function intro(){
        echo "the fruit 5 is {$this->_name} and the color is {$this->_color}.";
    }
}

class Strawberry extends Fruit5 {
    public function message() {
        echo "am I a fruit or a berry?";
        // Call protected method from within derived class
        $this->intro();
    }
}

$strawberry = new Strawberry("Strawberry", "red"); // __construct() is public
$strawberry->message(); // message() is public and it calls intro() (which is protected) from within the derived class
// we could call intro() here, like message(). but because that is protected we should call it inside the class


echo "<br>"; echo "<br>"; 


// Inherited methods can be 'overridden' by redefining the methods (use the same name) in the child class.


class Fruit6 {
    public $_name;
    public $_color;

    public function __construct($name, $color){
        $this->_name = $name;
        $this->_color = $color;
    }

    public function intro() {
        echo "The fruit is {$this->_name} and the color is {$this->_color}.";
    }
}

class Strawberry2 extends Fruit6 {
    public $_weight;
    
    public function __construct($name, $color, $weight){
        $this->_name = $name;
        $this->_color = $color;
        $this->_weight = $weight;
    }


    public function intro() {
        echo "the fruit is {$this->_name}, the color is {$this->_color}, and the weight is {$this->_weight} gram.";
    }
}

$strawberry = new Strawberry2('strawberry', 'yellow', 50);
$strawberry->intro();

echo "<br>"; echo "<br>"; 



