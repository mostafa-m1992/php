<?php

// public PDOStatement::fetchObject(?string $class = "stdClass", array $constructorArgs = []): object|false

/*
Fetches the next row and returns it as an object. 
This function is an alternative to PDOStatement::fetch() with PDO::FETCH_CLASS or PDO::FETCH_OBJ style.

When an object is fetched, its properties are assigned from respective column values, 
and afterwards its constructor is invoked.


Parameters
class
Name of the created class.

constructorArgs
Elements of this array are passed to the constructor.
*/