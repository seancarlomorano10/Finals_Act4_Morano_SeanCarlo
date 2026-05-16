<?php
$grade = readline("Enter student's grade: ");

if ($grade >= 90 && $grade <= 100) {
    echo "Excellent";
} elseif ($grade >= 80) {
    echo "Good";
} elseif ($grade >= 70) {
    echo "Average";
} else {
    echo "Failed";
}
?>