<?php

$con = mysqli_connect(hostname: "localhost", username: "root", password: "", database: "login_app");

if ($con) {
    echo "Connected";
} else {
    echo "Not connected" . mysqli_connect_error();
}
