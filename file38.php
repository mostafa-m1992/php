<?php

// Continuation of the previous file about Namespaces

// For further organization, it is possible to have 'nested namespaces'

/*
Any code that follows a namespace declaration is operating inside the namespace, 
so classes that belong to the namespace can be instantiated without any qualifiers. 
To access classes 'from outside a namespace', the class needs to have the 'namespace attached to it'.
*/

namespace Html;

class Table {
    public $title = "";
    public $numRows = 0;

    public function message() {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
}


class Row {
    public $numCells = 0;

    public function message() {
        echo "<p>The row has {$this->numCells} cells.</p>";
    }
}