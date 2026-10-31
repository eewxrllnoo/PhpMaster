<?php

// *********** Writing*******************

$file_name = "data.txt";

// Ope the file

$file = fopen($file_name, mode: "w");

if($file) {
    fwrite($file, data: "HELLO I am a new paragraph\n");
    fclose($file);
    echo "File written successfully";
} else {
    echo "Unable to write to file";
}

// *********** Appending *******************


$file_name = "data2.txt";

// Ope the file

$file = fopen($file_name, mode: "a");

if($file) {
    fwrite($file, data: "HELLO I am a new paragraph\n");
    fclose($file);
    echo "File written successfully";
} else {
    echo "Unable to write to file";
}