<?php

// . Comparison Operators
// == : Equal to
// != or <> : Not equal to
// === : Identical (equal and of the same type)
// !== : Not identical (either not equal or not of the same type)
// > : Greater than
// < : Less than
// >= : Greater than or equal to
// <= : Less than or equal to
// 2. Logical Operators
// && : Logical AND (both conditions must be true)
// || : Logical OR (at least one condition must be true)
// ! : Logical NOT (negates the condition)
// 3. Ternary Operator
// ? : : A shorthand for an if-else statement.
// 4. Null Coalescing Operator
// ?? : Returns the first operand if it exists and is not null, otherwise returns the second operand.
// These are the most commonly used operators in if statements in PHP

$age = 17;
// $hasID = true;
// $hasPermission = false;
$isMember = true;
$hasDiscountCoupon = false;

// if($age >= 18 && $hasID){
//     echo "You are allowed to enter";
// }

// if($age >= 18 || $hasPermission){
//     echo "You are allowed to enter";
// }else{
//     echo "Access Denied";
// }

// if(!$isMember){
//     echo "You need to signup";
// }else{
//     echo "Welcome back, member!";
// }

if ($age >= 18 && ($isMember || $hasDiscountCoupon )){
    echo "You are elegible for the discount";
} else{
    echo "No discount available";
}

