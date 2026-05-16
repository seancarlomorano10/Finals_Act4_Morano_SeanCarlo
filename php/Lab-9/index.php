<?php
$amount = readline("Enter purchase amount: ");

if ($amount >= 1000) {
    $discount = $amount * 0.20;
    $finalAmount = $amount - $discount;
    echo "20% discount applied\n";
    echo "Final Amount: $finalAmount";
} elseif ($amount >= 500) {
    $discount = $amount * 0.10;
    $finalAmount = $amount - $discount;
    echo "10% discount applied\n";
    echo "Final Amount: $finalAmount";
} else {
    echo "No discount applied\n";
    echo "Final Amount: $amount";
}
?>