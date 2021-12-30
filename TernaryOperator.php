<?php

$gender = "PRIA";
$hi = null;

//menggunakan if else
if ($gender == "PRIA") {
    $hi = "Hi bro!";
} else {
    $hi = "Hi nona!";
}
echo $hi . PHP_EOL;

// dipersingkat menggunakan Ternary Operator
$hi = $gender == "PRIA" ? "Hi Bro!" : "Hi Nona!";
echo $hi . PHP_EOL;
