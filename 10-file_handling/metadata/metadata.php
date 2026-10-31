<?php

$file_name = "data.txt";


if (file_exists($file_name)) {

    echo "File size: " . filesize($file_name) . " bytes\n";
    // echo "Last modified: " . date(format: "F d Y H:i:s.", filemtime($file_name))."\n";
    echo "Last modified: " . date("F d Y H:i:s.", filemtime($file_name)) . "\n";

    if (is_readable($file_name)) {
        echo "it is readable.\n";
    }

    if (is_writable($file_name)) {
        echo "is writeable.\n";
    }
} else {
    echo "File does not exist.\n";
}
