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

// ########################
// ####### IN ARRAY #######
$array = array("Prakhar", "Stevie", "Akshar","Veda", "Shri", "12", 14);
echo in_array("Stevie", $array);
echo "\n Checking Int : ";
echo in_array(12, $array); // doesnt match the type
echo "\n Checking Int and Type : ";
echo in_array(14, $array, true);
echo "\n";

// #######################
// ####### PUSH ##########
$array = array("Prakhar", "Stevie", "Akshar","Veda", "Shri");
array_push($array, "Miguel"); // method 1 - only adds indexed values
$array[] = "Likhith"; // Method 2 - PREFERRED 
print_r($array);
echo "\n";

// ######################
// ####### POP ##########
$array = $array;
$lastValue = array_pop($array); // gives the last item of the array

echo "Last Item : ".$lastValue."\n";
print_r($array); // see that last item is removed

// ########################
// ####### UNSET ##########
unset($array[2], $array[5]); // you can remove multiple item by using ","
print_r($array);

$associatedArray = array(
    "King" => "Prakhar",
    "Beautiful" => "Stevie",
    "Loser" => "Akshar",
    11 => "Veda",
    "Small" => "Shri",
    "Loverboy"
);

unset($associatedArray['Loser']);
print_r($associatedArray);

// ########################
// ####### SORTING ########
// SORTING - sort, A sort, K sort
// we dont have to assign sorting to any variable
$array = array("Prakhar", "Yash", "Stevie", "Akshar","Veda", "Shri");
print_r("Unsorted Array \n");
print_r($array);
sort($array);
print_r("Sorted Array \n");
print_r($array);

// Associated array will be sorted but then will be return as Indexed array
sort($associatedArray);
print_r($associatedArray); // returned as Indexed Array

// A sort - sort the associated array and preserves the key->value pairs, this is true even in indexed array
$array = array("Prakhar", "Yash", "Stevie", "Akshar","Veda", "Shri");
asort($array);
print_r($array);

$associatedArray = array(
    "King" => "Prakhar",
    "Beautiful" => "Stevie",
    "Loser" => "Akshar",
    11 => "Veda",
    "Small" => "Shri",
    "Loverboy"
);

asort($associatedArray);
print_r($associatedArray);

// K sort - sorts the array based on the Keys
// Indexed array is already sorted based on key so this is MOST USEFUL for Associated Array
ksort($associatedArray);
print_r($associatedArray);

// ########################
// ####### COUNT ##########
$array = array("Prakhar", "Yash", "Stevie", "Akshar","Veda", "Shri");

$associatedArray = array(
    "King" => "Prakhar",
    "Beautiful" => "Stevie",
    "Loser" => "Akshar",
    11 => "Veda",
    "Small" => "Shri",
    "Loverboy"
);

echo "\n".count($array)."\n";
echo count($associatedArray)."\n";

$arrayTree = [
    "Male" => array(
        "Prakhar" => array("SMRT Systems", "Smarty Pants"),
        "Yash" => array("Kurated.ai", "Hulk")
    ),
    "Female" => array(
        "Shri" => array("Watts Water", "Too Small to handle"),
    ),
    "Dog" => array(
        "Stevie" => array("Billion Dollar Dogs", "Snorter")
    )
];

echo "Parent Count on Tree : ".count($arrayTree)."\n";
echo "Total Count on Tree : ".count($arrayTree, 1)."\n"; // recursive count
echo "Total Count on Tree : ".count($arrayTree, COUNT_RECURSIVE)."\n"; // recursive count

// ########################
// ####### FOREACH ########
foreach($associatedArray as $val)
{
    echo "$val \n";
}

foreach($associatedArray as $key => $val)
{
    echo $val."($key)\n";
}


?>