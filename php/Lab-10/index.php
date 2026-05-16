<?php
$username = "admin";
$password = "1234";

$user = readline("Enter username: ");
$pass = readline("Enter password: ");

if ($user == $username && $pass == $password) {
    echo "Login Successful";
} else {
    echo "Invalid Username or Password";
}
?>