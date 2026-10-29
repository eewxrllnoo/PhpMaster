<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $status = $_POST["status"];

    echo $username . "<br>";
    echo $password . "<br>";
    echo $status . "<br>";
}