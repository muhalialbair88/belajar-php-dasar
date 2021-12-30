<?php

// Seluruh Syntax dibawah jalan pada php versi terbaru / latest
$sayHello = function (string $name) { // variable function / anonymous
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Ali"); // hasilnya Hello Ali
$sayHello("Albair"); // hasilnya Hello Albair

//anonymous function sebagai argument / parameter

function sayGoodBye(String $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Ali", function (string $name): string {
    return strtoupper($name) // Hasilnya Goodbye ALI
});

// atau simpan variable anonymous ini di variable function 
$filterFunction = function(string $name): string{
    return strtoupper($name);
};
sayGoodBye("Ali", $filterFunction); // Hasilnya Goodbye ALI

// mengakses variable luar pada anonymous function/variable function
$firstName = "Ali";
$lastName = "Albair";

$sayHelloAli = function() use ($firstName, $lastName) { //use digunakan untuk mengakses variable diluar function anonymous
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloAli(); //hasilnya Hello Ali Albair

$firstName = "Budi";
$lastName = "Nugraha";
$sayHelloAli() // tetap sama hasilnya Hello Ali Albair karna berpatok pada deklarasi di atas functionnya