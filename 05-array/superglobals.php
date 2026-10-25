<?php

// $app = "PHP CMS";
// function exampleFunction(){
//     echo $GLOBALS['app'];
// }

// exampleFunction();

// http://localhost/PhpMaster/05-array/superglobals.php?name=Erwin&age=30
$name = $_GET["name"];
$age = $_GET["age"];

echo "Name: " . $name . "<br>";
echo "Age: " . $age;