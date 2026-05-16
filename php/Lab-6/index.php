<?php
$password = "admin123";

$userInput = readline("Enter password: ");

if ($userInput == $password) {
    echo "Access Granted";
} else {
    echo "Access Denied";
}
?>