<?php

// These arrays use named keys

$person = [
    "name" => "Edwin Diaz",
    "age"=> 24,
    "city" => "Punta Cana"
];

// Add another element to this array
$person['profession'] = "Instructor / Developer";

foreach ($person as $key => $value){
    echo "$key: $value <br>";
}

