<?php
//manipulasi string
//penambahan string dan data menggunakan .
$name = "Muhammad Ali Albair";
echo "Name : " . $name . PHP_EOL; // PHP_EOL == \n enter (mempersingkat)
echo "Value : " . 100 . PHP_EOL;

//konversi tipedata
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

$valueSalah = (int)"salah";
var_dump($valueSalah); //0 karna data konversi salah

//akses karakter
$name = "Ali";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
// echo $name[3] . PHP_EOL; //error karna tidak ada indeks 3


//variable parsing menggunakan heredock / doublequote " "
echo "Hello " . $name . ", Selamat Belajar" . PHP_EOL; //tidak perlu seperti ini
echo "Hello $name, Selamat Belajar. value $valueInt" . PHP_EOL; //bisa seperti ini(kalau hanya ini mngambil data variablenya)

//variable curly brace menggunakan {}
echo "Hello $name s, Selamat Belajar. value $valueInt" . PHP_EOL; //tidak bisa menggabungkan s
echo "Hello ${name}s, Selamat Belajar. value $valueInt" . PHP_EOL; //bisa menggabungkan s
