<?php
// function block of code that performs a task

// php is a weakly typees language: hence no need to define the type of function
// function createName($parameter1, $parameter2)
// {

// }

// Defining functions
listOfBooks(); // this can be called, before or after defining the function.

function bookAuthor()
{
    echo "Lohiya, Stevie\n";
}

function listOfBooks(){
    bookAuthor();
    echo "If Tomorrow Come\n";
    echo "The Kite Runner\n";
    echo "\n>>>>\n";
}

listOfBooks(); // this can be called, before or after defining the function.

// passing a parameter
function bookByAuthor($authorName){
    echo $authorName;
    echo "\n>>>>\n";
}

function hocruxByBookYear($hocruxName, $orderNo){
    echo $hocruxName;
    echo "\n";
    echo $orderNo;
    echo "\n>>>>\n";
}

bookByAuthor("Nicolas Flamel\n");
$hocrux = "Naaaaginiiiii!\n";
bookByAuthor($hocrux);
$orderNo = 6;
hocruxByBookYear($hocrux, $orderNo);

function getAuthor(){
    return "\nNewt Scamander";
}

echo "\n>>>>\n";
$orderNo = 7;
$author = getAuthor();
hocruxByBookYear($author, $orderNo);

$variableFunctionName = "getAuthor";
$variableFunctionName();


// below example since we are not setting up the function to some variable it wont recognize the new variable assignment.
$authorName = "Yash Malik";
function setAuthorName(){
    $authorName = "Prakhar Lohiya";
}
setAuthorName();
echo "author name 1 is $authorName\n";
echo "\n>>>>\n";

// below example since we are setting up the variable as a global variable
$authorName = "Yash Malik";
function setAuthorName2(){
    global $authorName;
    $authorName = "Prakhar Lohiya";
}
setAuthorName2();
echo "author name 2 is $authorName\n";
echo "\n>>>>\n";



?>