<?php
//array
$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Muhammad", "Ali", "Albair"];
var_dump($names);

//Operasi array
$names = ["Muhammad", "Ali", "Albair"];
var_dump($names[0]); //mengambil data indeks 0
$names[0] = "Budi";
var_dump($names); //mengubah data array indeks 0
unset($names[1]);
var_dump($names); //menghapus data array
$names[] = "S.T";
var_dump($names); //menambahkan data array pada indeks akhir
var_dump(count($names));

//map di php menggunakan array
//cara pertama
$nama = array(
    0 => "Muhammad",
    1 => "Ali",
    2 => "Albair",
    //key => value
);
var_dump($nama);
var_dump($nama[1]);
// atau 
$mahasiswa = array(
    "npm" => "12345678",
    "nama" => "Muhammad Ali Albair",
    "age" => 22
);
var_dump($mahasiswa);
var_dump($mahasiswa["age"]);

// cara ke dua 
$karyawan = [
    "nik" => "12332131",
    "nama" => "Yatno",
    "age" => 28
];
var_dump($karyawan);
var_dump($karyawan["nik"]);

//array didalam array 
//cara 1
$contoh = array(
    "id" => "123",
    "nama" => "Muhammad Akbar",
    "age" => 20,
    "address" => array(
        "city" => "Jakarta",
        "country" => "Indonesia"
    )
);
var_dump($contoh["address"]);
var_dump($contoh["address"]["country"]);

//cara 2 
$contohh = [
    "id" => "234",
    "nama" => "Muhammad Ridwan",
    "age" => 30,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
];
var_dump($contohh["address"]);
var_dump($contohh["address"]["city"]);
