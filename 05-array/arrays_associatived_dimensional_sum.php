<?php

$products = [
    ["name"=> "Laptop", "price" => 1000, "stock" => 5],
    ["name"=> "Mouse", "price" => 20, "stock" => 20],
    ["name"=> "keyboard", "price" => 40, "stock" => 30],
];

function calculateTotalPrice($products) {
    $total = 0;
    
    foreach ($products as $product){
        $total += $product['price'];
    }

    return $total;

}

$totalPrice = calculateTotalPrice($products);
echo "Total price of all products: $" . $totalPrice;


