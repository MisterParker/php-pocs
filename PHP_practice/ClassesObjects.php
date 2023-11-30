<?php

// Why we use class?
// code reuse 
// maintaibility
// encapsulation

class Person
{
    const AVG_LIFE_SPAN = 75; 

    public $firstName = "Prakhar";
    public $lastName = "Lohiya";
    public $yearBorn = 1997;
}

$myObject = new Person();
echo $myObject->firstName."\n";

$myObject->firstName = "Stevie";
echo $myObject->firstName."\n";

echo Person::AVG_LIFE_SPAN."\n"; // this is how you access constants

class NewPerson
{
    // Properties
    const AVG_LIFE_SPAN = 85; 

    public $firstName;
    public $lastName;
    public $yearBorn;

    // we can initialize this just by calling the method
    function __construct()
    {
        echo "I am in the constructor \n";
        $this->firstName = "Yash";
        $this->lastName = "Malik";
        $this->yearBorn = 1996;
    }

    // Methods
    // Getters and Setters
    public function getFirstName()
    {
        return $this->firstName."\n";
    }

    public function setFirstName($tempName)
    {
        $this->firstName = $tempName;
    }
}

$myNewObject = new NewPerson();
$myNewObject->setFirstName("Rancho");
echo $myNewObject->getFirstName()."\n";

class NewerPerson
{
    // Properties
    const AVG_LIFE_SPAN = 85; 

    public $firstName;
    public $lastName;
    public $yearBorn;

    // we can initialize this just by calling the method
    function __construct($tempFirst = "", $tempLast = "", $tempBorn = "")
    {
        echo "I am in the constructor \n";
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempBorn;
    }

    // Methods
    // Getters and Setters
    public function getFirstName()
    {
        return $this->firstName."\n";
    }

    public function setFirstName($tempName)
    {
        $this->firstName = $tempName;
    }
}

$myNewerObject = new NewerPerson("Harold", "Kumar", 2000);
echo $myNewerObject->firstName." ".$myNewerObject->lastName."\n";

// INHERITENCE
// Allows one class to inherit the property of another
class AnotherPerson
{
    // Properties
    const AVG_LIFE_SPAN = 85; 

    public $firstName;
    public $lastName;
    public $yearBorn;

    // we can initialize this just by calling the method
    function __construct($tempFirst = "", $tempLast = "", $tempBorn = "")
    {
        echo "People constructor".PHP_EOL;
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempBorn;
    }

    // Methods
    // Getters and Setters
    public function getFirstName()
    {
        return $this->firstName.PHP_EOL;
    }

    public function setFirstName($tempName)
    {
        $this->firstName = $tempName;
    }

    public function getFullName()
    {
        echo "Person->getFullName()".PHP_EOL;
        return $this->firstName." ".$this->lastName.PHP_EOL;

    }
}

class Author extends AnotherPerson 
{
    public $penName = "J.K. Rowling";

    public function getPenName()
    {
        echo $this->penName.PHP_EOL;
    }

    public function getFullName()
    {
        echo "Author->getFullName()".PHP_EOL;
        return $this->firstName." ".$this->lastName.PHP_EOL;

    }
}

$newAuthor = new Author("Douglos", "Adams", 1999);
echo $newAuthor->getFullName().PHP_EOL;

?>