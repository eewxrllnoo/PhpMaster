<?php

$directory = "uploads";

if(!file_exists($directory)){
    mkdir($directory, 0777, true);
    echo "Directory created";
} else {
    echo "Directory already exists";
}