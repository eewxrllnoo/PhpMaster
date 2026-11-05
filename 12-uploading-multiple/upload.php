<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $upload_dir = "uploads/";

    if(!is_dir($upload_dir)){
        mkdir($upload_dir, permissions: 0777, recursive: true);
    }

}