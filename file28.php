<?php

// Object Oriented Programming (OOP)

/*
'Procedural' programming is about writing procedures or "functions that perform operations on the data", 
while 'object-oriented' programming is about creating objects that "contain both data and functions".
*/

/*
'Classes' and 'objects' are the two main aspects of object-oriented programming.

So, a class is a 'template' for objects, and an object is an 'instance' of a class.

When the individual objects are created, they inherit all the 'properties' and 'behaviors' from the class, 
but each object will have different 'values' for the properties.
*/

/*
Let's assume we have a class named Fruit. A Fruit can have 'properties' like name, color, weight, etc. 
We can define 'variables' like $name, $color, and $weight to hold the values of these properties.

When the individual objects (apple, banana, etc.) are created, they inherit all the properties and behaviors 
from the class, but each object will have different values for the properties.
*/


/*
A class is defined by using the 'class' keyword, followed by the name of the class and a pair of curly braces 
({}). All its properties and methods go inside the braces:

In a class, variables are called 'properties' and functions are called 'methods'!
*/


/*
Classes are nothing without objects! We can create multiple objects from a class. 
Each object has all the properties and methods defined in the class, 
but they will have different property values.

Objects of a class are created using the 'new' keyword.
*/


class Fruit {
    // Properties
    public $name;
    public $color;

    // Methods
    function set_name($name) {
        // The $this keyword refers to the current 'object', and is only available inside methods.
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }

    function set_color($color){
        $this->color = $color;
    }
    function get_color(){
        return $this->color;
    }
}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color("Red");

echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();


echo "<br>"; echo "<br>";



class Fruit2 {
    public $name;
    function set_name($name) {
      $this->name = $name;
    }
  }
  $apple = new Fruit2();
  $apple->set_name("Apple");
  
  echo $apple->name;



  echo "<br>"; echo "<br>";

/* two way for changing the value of the $name:
1. inside the class: as the previous example
2. outside the class: (by directly changing the property value):
*/

class Fruit3 {
    public $name;
}

$apple = new Fruit3();
$apple->name = 'Banana';

echo $apple->name;


echo "<br>"; echo "<br>";


// You can use the 'instanceof' keyword to check if an object belongs to a specific class:

var_dump($apple instanceof Fruit);

echo "<br>"; echo "<br>";

var_dump($apple instanceof Fruit2);

echo "<br>"; echo "<br>";

var_dump($apple instanceof Fruit3);