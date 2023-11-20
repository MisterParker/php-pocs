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


// HereDoc is used when there is a long chunk of text, it returns the same formatting as the input text
// HereDoc.php
echo <<<EOT
    I found you passing by in cold December
    
    Lost in view, but still your face and your gaze I remember
    
    Looking at the diamonds in your eyes
        Shine in the pale moonlight
    We've come so far
        Looking up above to the sky
    Everything just seems so fine
        This is our time
                - When Chai Met Toast (When we feel young)
EOT;


// Print and echo
print "\nprinting this statement\n";
print ("printing with parenthesis\n");
// most of the places we can interchage echo and print, echo is however a bit faster
// the second benefit is that we can pass multiple parameter in echo but not in print
// Example
echo "Et"," tu",", ","Brute","!","\n";

// Changing Case
echo "\nChanging Case\n";
$quote = "Ask not what your country can do for you, but what you can do for your country.";
echo "Normal : ".$quote."\n";
$quote = strtoupper($quote); //uppercase
echo "Uppercase : ".$quote."\n";
$quote = strtolower($quote);
echo "lowercase : ".$quote."\n";

// String Length
$length = strlen($quote);
echo "length of the above quote is $length\n";

// String Position
$str = "but";
$pos = strpos($quote, $str);
echo "the position of '{$str}' is {$pos}\n";

// words appearing multiple time we can add an offset
$str = "country";
$pos = strpos($quote, $str);
echo "the position of first '{$str}' is {$pos}\n";
$pos = strpos($quote, $str, 19);
echo "the position of second '{$str}' is {$pos}\n";

// when character or word isnt found it returns an empty string
$str = "stevie";
$pos = strpos($quote, $str);
echo "the position of '{$str}' is {$pos} (Empty String)\n";

// STRING REPLACE
// str_replace(mixed $search, mixed $replace, mixed $subject [,$int count])
$quote = "What is the answer to Life, Universe and Evertything? secret is the answer";
echo "Original".$quote."\n";
$replaced = str_replace("secret", "42", $quote);
echo "Replaced: ".$replaced."\n";

// use of count
$replaced = str_replace("secret", "42", $quote, $count); // count is defined inside the function
echo "Count of 'secret replaced is $count\n";


// SUB STR
echo substr($quote, 4);
echo "\n";
echo substr($quote, -6);
echo "\n";
echo substr($quote, 5, 8); // start from pos 5 and take 8 characters
echo "\n";

// STRING SPLIT
$varArray = str_split($quote);
print_r($varArray);
$varArray = str_split($quote, 8); // split in chunk sizes of 8
print_r($varArray);

?>