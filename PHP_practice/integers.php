<?php
$regInt = 123123;
$octNum = 01234;
$hexNum = 0xABC;
$binaryNum = 0b100

var_dump($regInt); // tells the value and datatype of a variable
var_dump($octNum); // output is 668

// PHP can handle
// integers, binaries, octal, hex,


//Floating Points
$float = 1.234;
var_dump($float);

$scientific = 0.1234E4;
var_dump($scientific); //1234
$scientific = 1234E-4;
var_dump($scientific); // 0.1234

// boolean
$bool = false;
var_dump($bool); // bool(false)

$hasValue = 1234;
var_dump((bool)$hasValue); // bool(true) -> since the hasValue has  value

$hasValue = 0;
var_dump((bool)$hasValue); // bool(false)

$hasValue = "";
var_dump((bool)$hasValue); // bool(false)

$hasValue = "1234";
var_dump((bool)$hasValue); // bool(true)











