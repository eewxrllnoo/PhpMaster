<?php

$directory = "uploads";

if(is_dir($directory)){
    $files = scandir($directory);
    foreach ($files as $file){
        if($file !== "." && $file !== ".."){
            echo "File: $file\n" . '</br>';
        }
    }
}