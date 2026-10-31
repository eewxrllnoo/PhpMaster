<?php

// **** Renaming a file ****
$old_name = "data2.txt";
$new_name = "new_data2.txt";

if(file_exists($old_name)){
    rename($old_name, $new_name);
    echo "File renamed";

} else {
    echo "File not found";
}