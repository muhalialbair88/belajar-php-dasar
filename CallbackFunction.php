<?php

// Syntax dibawah ini hanya bejalan pada php v latest
//CallbackFunction ditandai dengan callable sebagai tanda
function sayHello(string $name, callable $filter) // anonymous & arrow bisa diterima oleh callable
{
    $finalName = call_user_func($filter, $name); //cara callbackFunction
    // $filter($name); // bisa pakai ini atau yang di atas bari syntax ini
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Ali", "strtoupper"); // hasilnya Hello EKO //variable function
sayHello("Ali", "strtolower"); // hasilnya Hello eko //variable function

//bisa mengirim pakai anonymous function
sayHello("Ali", function (string name) {
    return strtoupper($name); // hasilnya Hello EKO
});

//bisa juga kirim menggunakan arrow function
sayHello("Ali", fn($name) => strtoupper(name)); // hasilnya Hello EKO