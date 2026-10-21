<?php

// NULL COALESCING OPERATOR

//$username = $_GET['username'] ?? 'GUEST';
//echo $username;
$user = ['name' => "Edwin Diaz"];
$age = $user['age'] ?? 'unknown';

echo "Age: " . $age;