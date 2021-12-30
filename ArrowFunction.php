<?php
//Arrow function / Syntax dibawah ini dapat digunakan pada PHP v7.4++
//lebih baik menggunakan arrow function dari pada anonymous kalo hanya untuk mengembalikan data

//ArrowFunction sama seperti AnonymousFunction
//bedanya arrowFunction bisa mengakses variable dari luar closure tanpa menggunakan use
//dan tidak menggunakan return untuk mengembalikan nilai

$firstName = "Ali";
$lastName = "Albair";

// anonymous function
$anonymousFunction = function () use ($firstName, $lastName): string {
    return "Hello $firstName $lastName" . PHP_EOL;
};

//Arrow Function
//tidak perlu menggunakan use
$arrowFunction = fn () => "Hello $firstName $lastName" . PHP_EOL; //arrowfunction menggunakan fn() => nilai return;

echo $anonymousFunction;
echo $arrowFunction;
