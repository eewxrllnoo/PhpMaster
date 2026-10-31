<?php

// *********** READING *******************


//*********Way 1********/
// $file_name = "data.txt";

// // Ope the file

// $file = fopen($file_name, mode: "r");

// if($file) {
//     $content = fread($file, filesize($file_name));
//     echo nl2br($content);
//     fclose($file);
// } else {
//     echo "Unable to open file";
// }

// Simple way 2
$content = file_get_contents(filename: "data.txt");
echo nl2br($content);
