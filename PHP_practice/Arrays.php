<?php

// indexed array
$friends = array("Prakhar", "Veda", "Shri", "Yash","Akshar");
$college = ["VIT", "SNU", "GIT", "BVP", "VIT"];
$random = ["king", 4, True, 9.9, 0];

print_r($friends);
print_r($college);
print_r($random);

// Associate array
$skills = array(
    "King" => "Prakhar",
    "Beautiful" => "Stevie",
    "Loser" => "Akshar",
    "Confused" => "Veda",
    "Small" => "Shri"
);

print_r($skills);

$skills = array(
    "King" => "Prakhar",
    "Beautiful" => "Stevie",
    "Loser" => "Akshar",
    "Confused" => "Veda",
    "Small" => "Shri",
    "Loverboy"
);

print_r($skills);

$skills = array(
    "King" => "Prakhar",
    "Beautiful" => "Stevie",
    "Loser" => "Akshar",
    11 => "Veda",
    "Small" => "Shri",
    "Loverboy"
);

print_r($skills);

$array = array("Prakhar", "Stevie", "Akshar","Veda", "Shri");
$associatedArray = array(
    "King" => "Prakhar",
    "Beautiful" => "Stevie",
    "Loser" => "Akshar",
    11 => "Veda",
    "Small" => "Shri",
    "Loverboy"
);

print_r($array[1]);
echo "\n";
print_r($associatedArray["King"]);
echo "\n";

// to check if a key exists
echo array_key_exists(1, $array);
echo "\n";
echo array_key_exists("Loser", $associatedArray);
echo "\n";

// In Array
$array = array("Prakhar", "Stevie", "Akshar","Veda", "Shri", "12", 14);
echo in_array("Stevie", $array);
echo "\n Checking Int : ";
echo in_array(12, $array); // doesnt match the type
echo "\n Checking Int and Type : ";
echo in_array(14, $array, true);
echo "\n";

// PUSH
$array = array("Prakhar", "Stevie", "Akshar","Veda", "Shri");
array_push($array, "Miguel"); // method 1
$array[] = "Likhith"; // Method 2 - PREFERRED
print_r($array);
echo "\n";

?>