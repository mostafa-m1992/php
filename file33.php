<?php

/*
    definition:  
'Interfaces' allow you to specify what methods a class should implement.

Interfaces make it easy to use a variety of different classes in the same way. 
When one or more classes use the same interface, it is referred to as "polymorphism".

Interfaces are declared with the 'interface' keyword:
*/

/*
    Interfaces vs. Abstract Classes:

- Interfaces 'cannot have properties', while abstract classes can
- All interface 'methods must be public', while abstract class methods is public or protected
- All 'methods in an interface are abstract', so they cannot be implemented in code and the 'abstract keyword is not necessary'
- Classes can implement an interface while inheriting from another class at the same time
*/

/*
    using:

To implement an interface, a class must use the 'implements' keyword.
A class that implements an interface must 'implement all of the interface's methods'.
*/


interface Anim {
    public function sound();
}

class c implements Anim {
    public function sound() {
        echo "c sound";
    }
}

$cObject = new c();
$cObject->sound();
echo "<br>";
// this way may cause an error:
//echo $anim->sound();



echo "<br>";echo "<br>";echo "<br>";




// Interface definition
interface Animal {
    public function makeSound();
}

// class definition
class Cat implements Animal {
    public function makeSound(){
        echo " Meow ";
    }
}

class Dog implements Animal {
    public function makeSound() {
        echo " Bark ";
    }
}

class Mouse implements Animal {
    public function makeSound() {
        echo " Squeak ";
    }
}

// create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();

$animals = array($cat, $dog, $mouse);

// tell the animals to make a sound
foreach ($animals as $value) {
    $value->makeSound();
}