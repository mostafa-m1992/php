<?php


/*   Construction order
When objects are fetched via PDO::FETCH_CLASS the object properties are assigned first, 
and then the constructor of the class is invoked. 

If PDO::FETCH_PROPS_LATE is also given, this order is reversed, 
i.e. first the constructor is called, and afterwards the properties are assigned.
*/


$dsn = "mysql:dbname=test;host=localhost";
$username = "root";
$password = "";
$options = array(PDO::ATTR_PERSISTENT => true);



try {
    $dbh = new PDO($dsn, $username, $password, $options);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}



class Person
{
    private $name;

    public function __construct()
    {
        $this->tell();
    }

    public function tell()
    {
        if (isset($this->name)) {
            echo "I am {$this->name}.\n";
        } else {
            echo "I don't have a name yet.\n";
        }
    }
}

$sth = $dbh->query("SELECT * FROM fruit");
$sth->setFetchMode(PDO::FETCH_CLASS, 'Person');
$person = $sth->fetch();
$person->tell();
$sth->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Person');
$person = $sth->fetch();
$person->tell();