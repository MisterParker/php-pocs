<?php

// Why we use class?
// code reuse 
// maintaibility
// encapsulation

class Person
{
    public $firstName = "Prakhar";
    public $lastName = "Lohiya";
    public $yearBorn = 1997;
}

$myObject = new Person();
echo $myObject->firstName;

echo "\n";

$myObject->firstName = "Stevie";
echo $myObject->firstName;

?>