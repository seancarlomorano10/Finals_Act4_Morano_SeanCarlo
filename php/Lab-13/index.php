<?php
$num1 = (float) readline("Enter first number: ");
$num2 = (float) readline("Enter second number: ");
$operator = readline("Enter operator (+, -, *, /): ");

switch ($operator) {
    case "+":
        echo "Result = " . ($num1 + $num2);
        break;
    case "-":
        echo "Result = " . ($num1 - $num2);
        break;
    case "*":
        echo "Result = " . ($num1 * $num2);
        break;
    case "/":
        if ($num2 != 0) {
            echo "Result = " . ($num1 / $num2);
        } else {
            echo "Cannot divide by zero";
        }
        break;
    default:
        echo "Invalid operator";
}
?>