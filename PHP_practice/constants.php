<?php

define('NEW_CONSTANTS', "Hello! Yo Soy Constant Variable");

echo NEW_CONSTANTS;
// these are global constants and can be accessed from anywhere
define('CHECK', "Hello! Yo Lobo Constant Checker");

echo CHECK;

$intVar = 1234;
$stringVar = "I am a String";
$boolVar = false;
$floatVar = 12.34;

echo is_int($intVar);
echo is_string($stringVar);
echo is_bool($boolVar);
echo is_float($floatVar);

// defined('CHECK');
// To run this PHP program, you need to have PHP installed on your system.
// Open your terminal or command prompt.
// Navigate to the directory where this file is located using the 'cd' command.
// Then type 'php constants.php' and hit enter.
