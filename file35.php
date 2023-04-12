<?php

/*
'Static methods' can be called directly - 'without creating an instance' of the class first.

Static methods are declared with the 'static' keyword:

To access a static method use the 'class name', double colon (::), and the method name:
*/

/*
A class can have both static and non-static methods. 
A static method can be accessed from a method in the same class using the 'self' keyword and double colon (::):
*/


class greeting1 {
    public static function welcome1() {
        echo "Hello World";
    }

    public function __construct() {
        self::welcome1();
    }
}


new greeting1();
echo "<br>"; 
greeting1::welcome1();

echo "<br>"; echo "<br>"; 


/*
Static methods can also be called from methods 'in other classes'. 
To do this, the static method should be 'public':
*/

class SomeOtherClass {
    public function message() {
        greeting1::welcome1();
    }
}

echo "<br>"; echo "<br>"; 




/*
To call a static method 'from a child class', use the 'parent' keyword inside the child class. 
Here, the static method can be 'public or protected'.
*/

class domain {
    protected static function getWebsiteName() {
        return "www.google.com";
    }
}

class domainName extends domain {
    public $websiteName;
    public function __construct() {
        $this->websiteName = parent::getWebsiteName();
    }
}

$domainName = new domainName;
echo $domainName->websiteName;