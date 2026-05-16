<?php
$color = strtolower(readline("Enter traffic light color (red, yellow, green): "));

switch ($color) {
    case "red":
        echo "Stop";
        break;
    case "yellow":
        echo "Slow down";
        break;
    case "green":
        echo "Go";
        break;
    default:
        echo "Invalid color";
}
?>