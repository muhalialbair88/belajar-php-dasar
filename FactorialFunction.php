<?php
//syntax dibawah ini hanya berjalan pada php versi latest
function factorialLoop(int $value)
{

    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}
var_dump(factorialLoop(5)); // hasilnya 120
var_dump(1 * 2 * 3 * 4 * 5); // hasilnya 120

//recrusive function
//cara lebih praktis menggunakan recrusive function
//recursive function adalah function yang memanggil dirinya sendiri
//ada beberapa kasus disolve lebih gampang menggunakan recursive funciton
function functionRecursive(int $value): int
{
    if($value == 1){
        return 1;
    }else {
        return $value functionRecursive($value);
    }
}
var_dump(factorialLoop(5)); // hasilnya 120
var_dump(1 * 2 * 3 * 4 * 5); // hasilnya 120

//tapi jika recursive terlalu dalam, maka akan kemungkinan terjadi memory overflow,
//yaitu memory yang terlalu banyak digunakan di PHP
//karna menyimpannya dalam bentuk stack
//contoh
var_dump(factorialLoop(5));
functionRecursive(5) * functionRecursive(4) ... * functionRecursive(1) // tumpukan stack ini akan memakan memory besar

// contoh kasus :
function loop(int $value){
    if($value == 0){
        echo "End loop" . PHP_EOL;
    }else {
        echo "Loop-$value" . PHP_EOL;
        loop($value - 1);
    }
}

loop(3000000); // test value 3jt jika tidak kuat error jika kuat tambah lagi biar error
//solusinya menggunakan for/perulangan jangan menggunakan if