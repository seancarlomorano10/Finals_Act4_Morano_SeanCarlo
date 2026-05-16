<?php
$age = readline("Enter age: ");
$citizen = readline("Enter citizenship: ");

if ($age >= 18) {
    if (strtolower($citizen) == "filipino") {
        echo "Eligible to vote";
    } else {
        echo "Not eligible to vote";
    }
} else {
    echo "Not eligible to vote";
}
?>