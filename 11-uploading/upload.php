<?php

// echo "<pre>";
// var_dump($_FILES);
// echo "</pre>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Check for file uploads
    if ($_FILES["file"]["error"] === 0) {
        $uploaddir = "uploads/";
        $file_name = basename($_FILES["file"]["name"]);
        $target_file = $uploaddir . $file_name;

        $file_size = $_FILES["file"]["size"];
        $file_type = strtolower(pathinfo($file_name, flags: PATHINFO_EXTENSION));

        // Define allowed files types
        $allowed_types = ['jpg', 'gif', 'png', 'jpeg'];

        // Check files size (limit to 4MB)
        if ($file_size > 4 * 1024 * 1024) {
            $fileErr = "Your file is too larger {$file_size}";
        }

        // Check file type
        elseif (!in_array($file_type, $allowed_types)) {
            $fileErr = "Only JPG, JPEG, PNG and GIF files are allowed";

            // If no errors, move the uploaded file to the target directory
        } else {
            if (!move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                $fileErr = "Sorry there was an error uploading your file";
            }
        }
    } else {
        $fileErr = "No file was uploaded";
    }
}
