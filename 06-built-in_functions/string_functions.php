<?php

$str = "Hello, World";

// echo strlen($str);

//echo strtoupper($str);

// echo strtolower($str);

$pos = strpos($str, needle: "World");

if($pos !== false){
//    echo $pos;
}

$new_str = str_replace(search: "World", replace: "Student", subject: $str);

echo $new_str;