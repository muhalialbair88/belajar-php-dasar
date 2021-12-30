<?php
// syntax dibawah ini hanya digunakan pada php latest.
//array map merubah data array ke data baru 
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$mapFunction = fn (int $value) => $value * 10;
$dataResult = array_map($mapFunction, $data);
var_dump($dataResult);

//lebih simple
$dataResult = array_map(fn (int $value) => $value * 10, $data);
var_dump($dataResult);

//arraysort mengubah data secara descending
rsort($data);
var_dump($data); // hasilnya descending 10-1
sort($data);
var_dump($data); // hasilnya ascending 1-10

//array_key menampilkan key dan valuenya 
var_dump(array_keys($data)); // hasilnya key 1 value 10

$person = [
    "first_name" => "Ali",
    "last_name" => "Albair"
];
var_dump(array_keys($person)); // hasilnya key dan value

//array_values menampilkan valuenya aja
var_dump(array_values($person)); // hasilnya hanya valuenya aja

// masih banyak lagi function string yang digunakan untuk memanipulasi data array
// buka link berikut : https://www.php.net/manual/en/ref.array.php
