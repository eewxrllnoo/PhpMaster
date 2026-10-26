<?php

$fruits = ["Apple", "Banana", "Orange", "Mango"];
$vegies = ["Carrot", "Plantain", "Lettuce"];

$sliced = array_slice($fruits, offset: 1, length: 2);
print_r($sliced);

// echo count($fruits);

//array_push($fruits, "MANGO");
//array_pop($fruits);
// $merged = array_merge($fruits, $vegies);
// print_r($merged);

// checking to see if value exists
// if(in_array(needle: "Banana", haystack: $fruits)) {
//     echo "Banana is in the array";
// }

// $numbers = [1,3,5,8,0,2,4,6];
// sort(array: $numbers);
// print_r($numbers);

// $person = ["name"=> "Edwin Diaz", "age"=> 18, "city"=> "Santiago"];
// ksort(array: $person);

// print_r($person);
