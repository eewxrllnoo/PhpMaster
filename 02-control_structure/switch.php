<?php

$day = "Monday";
$message = "Today is ";


switch ($day) {
    case "Monday":
        echo "$message $day";
        break;

    case "Tuesday":
        echo "Today is Tuesday";
        break;

    default:
        echo "Invalid day";
        break;
}
