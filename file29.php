<?php

// in this file I would like to practice constructors and destructors as well as access modifiers

/*
A 'constructor' allows you to initialize an object's properties upon creation of the object.

If you create a __construct() function, PHP will automatically call this function 
when you create an object from a class.

Notice that the construct function starts with two underscores (__)!
*/

/*
A 'destructor' is called when the object is destructed or the script is stopped or exited.

If you create a __destruct() function, PHP will automatically call this function at the end of the script.

Notice that the destruct function starts with two underscores (__)!
*/

/*
The example below has a __construct() function that is automatically called 'when you create an object' 
from a class, and a __destruct() function that is automatically 'called at the end' of the script:
*/

/*
Properties and methods can have 'access modifiers' which control where they can be accessed: three kind

public - the property or method can be accessed 'from everywhere'. This is default
protected - the property or method can be accessed 'within the class and by classes derived from that class'
private - the property or method can ONLY be accessed 'within the class'
*/

class Fruit4 {
    public $_name;
    public $_color;

    function __construct($name, $color){
        $this->_name = $name;
        $this->_color = $color;
    }

    function __destruct() {
        echo "The fruit is {$this->_name} and the color is {$this->_color}.";
    }

    function get_name() {
        return $this->_name;
    }

    function get_color() {
        return $this->_color;
    }
}

$apple = new Fruit4("Apple", "Red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();

echo "<br>";