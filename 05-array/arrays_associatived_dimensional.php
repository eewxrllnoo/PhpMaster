<?php

$products = [
    ["name"=> "Laptop", "price" => 1000, "stock" => 5],
    ["name"=> "Mouse", "price" => 20, "stock" => 20],
    ["name"=> "keyboard", "price" => 40, "stock" => 30],
];

// Access these elements

// echo $products[0]["name"];

foreach ($products as $product){
    echo $product['name'] . " costs $" . $product['price'] . "<br>";
}