<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $upload_dir = "uploads/";

    // if(!is_dir($upload_dir)){
    //     mkdir($upload_dir, permissions: 0777, recursive: true);
    // }

    foreach ($_FILES['files']['name'] as $key => $file_name) {

        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_error = $_FILES['files']['error'][$key];
        $file_type = strtolower(pathinfo($file_name, flags: PATHINFO_EXTENSION));
        $target_file = $upload_dir . basename($file_name);

        echo "<pre>";
        var_dump($file_tmp);
        echo "</pre>";
    }
}
