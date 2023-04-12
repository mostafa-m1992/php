<?php

/*
    Creating Iterables:

Arrays:

All arrays are iterables, so any array can be used as an argument of a function that requires an iterable.

Iterators:

Any object that implements the Iterator interface can be used as an argument of 
a function that requires an iterable.

An iterator contains a list of items and provides methods to loop through them. 
It keeps a pointer to one of the elements in the list. 
Each item in the list should have a key which can be used to find the item.

An iterator must have these methods:

current() - Returns the element that the pointer is currently pointing to. It can be any data type

key() Returns the key associated with the current element in the list. 
It can only be an integer, float, boolean or string

next() Moves the pointer to the next element in the list

rewind() Moves the pointer to the first element in the list

valid() If the internal pointer is not pointing to any element 
(for example, if next() was called at the end of the list), 
this should return false. It returns true in any other case
*/


class MyIterator implements Iterator {
    private $items = [];
    private $pointer = 0;

    public function __construct($items){
        // array_values() makes sure that the keys are numbers
        $this->items = array_values($items);
    }

    public function current() {
        return $this->items[$this->pointer];
    }

    public function key() {
        return $this->pointer;
    }

    public function next() {
        $this->pointer++;
    }

    public function rewind() {
        $this->pointer = 0;
    }

    public function valid() {
        // count() indicates how many items are in the list
        return $this->pointer < count($this->items);
    }
}

// A function that uses iterables
function printIterable(iterable $myIterable) {
    foreach ($myIterable as $value) {
        echo $value;
    }
}

// Use the iterator as an iterable
$iterator = new MyIterator(["g", "h", "f"]);
printIterable($iterator);