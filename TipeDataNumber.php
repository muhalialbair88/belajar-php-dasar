<?php

echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(01234);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b111111);

//sintaks dibaawah error pada php5
// echo "Underscore in number";
// var_dump(1_241_345_232);

echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E notation Plus (1.2 x 1000) : ";
var_dump(1.2e3);

echo "Floating Point dengan E notation Plus 7 x 0.001) : ";
var_dump(7e-3);

// echo "Underscore in number";
// var_dump(1_241_345.232);

echo "Integer Overflow :"; // akan dikonversi ke floating point
var_dump(922337203685477580);
var_dump(9223372036854775808);

echo "Benar : ";
var_dump(true);

echo "Salah : ";
var_dump(false);
