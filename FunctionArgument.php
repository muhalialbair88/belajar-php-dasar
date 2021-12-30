<?php

function sayHello($firstName, $lastName)
{
    echo "Hello ${firstName} ${lastName}" . PHP_EOL;
}

sayHello("Muhammad", "Ali");
sayHello("Muhammad", "Akbar");
echo PHP_EOL;
// sayHello("Budi"); error karna argument atau parameter function 2

//default argument value
function sayHi($name = "Anonymous")  // = "Anonymous" default argument atau parameter value
{
    echo "Hello ${name}" . PHP_EOL;
}

sayHi("Ali");
sayHi("Albair");
sayHi(); //default argument value
echo PHP_EOL;

//default argument value yang salah 
//kode dibawah error
// function sayHii($firstName = "Anonymous", $lastName)  // = "Anonymous" default argument atau parameter value
// {
//     echo "Hello ${firstName} ${lastName}" . PHP_EOL;
// }

// sayHii("Ali"); // error karna ini tetap argument atau parameter pertama, 
// sayHii("Albair"); // error karna ini tetap argument atau parameter pertama,
// sayHii(); //default argument value // error karna ini tidak ada argument atau parameter kedua,

// jika tidak mau error disarankan argument atau parameter default dibuat di argument atau parameter terakhir
//contoj

function sayHii($firstName, $lastName = "")  // = "Anonymous" default argument atau parameter value
{
    echo "Hello ${firstName} ${lastName}" . PHP_EOL;
}

sayHii("Ali");
sayHii("Albair");
sayHii("Eko", "Kurniawan");


// function spesifik typedata

// function sum(int $first, int $last)
// {
//     $total =  $first + $last;
//     echo "Total $first + $last = $total " . PHP_EOL;
// }

// sum(100, 100);
// sum("100", "100"); //dikonversi ke int
// // sum("100", "salah"); // error karna parameter ke-2 tidak bisa dikonversikan
// sum(true, false);
// sum([], []); // error tidak bisa konversi array ke integer

//Variable-length Argument List
//list array sebagai parameter 
function sumALL(...$values) // ...pengganti array
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL; //implode mengubah menjadi String
}

$values = [1, 2, 3, 4, 5];
sumAll(1, 2, 3, 4, 5); // tidak perlu ([])
// sumAll([1, 2, 3, 4, 5]); // error harus tambah ...
sumAll(...$values); // cara yang benar
