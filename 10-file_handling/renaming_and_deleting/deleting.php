<?php

$old_name = "data1.txt";
$new_name = "data1.txt";

if(file_exists($new_name)){
    unlink($new_name);
    echo "File deleted";

} else {
    echo "File not found";
}