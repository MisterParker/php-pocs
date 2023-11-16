<?php

// What is convered
// 1. basic string function
// 2. print function
// 3. string function


// difference between single and double quotes
$answer = '42';
$sampleString = 'What is the answer to Universe, Life and Everything? It is $answer'; // single quote
echo $sampleString;
$sampleString = "\nWhat is the answer to Universe, Life and Everything? It is $answer\n"; // double quotes
echo $sampleString;

// single string 
$sampleStringTwo = 'What\'s up'; // if you have to use ' in a words like father's, miguel's then use \ before ' i.e. \'
                                    // so father\'s will give output as father's
echo $sampleStringTwo;
echo "\n>>>>\n";

// when string and variables are used together
$var = 2;
echo "{$var}nd place\n"; // method 1
echo $var."nd place method 2\n";

?>