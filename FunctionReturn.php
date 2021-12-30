<?php
// semua syntax dibawah hanya support pada php 7.0
function sum(int $first, int $second)
{
    $total = $first + $second;
    return $total;
}

sum(10, 10); // bisa tapi data return tidak di tangkap
$result = sum(11, 11); // harus di tampung pada variable
var_dump($result);

$result = sum(100, 100); // harus di tampung pada variable
var_dump($result);

function getFinalValue(int $value)
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }

    echo "Ups" . PHP_EOL; // tidak akan dieksekusi kalau sudah mengembalikan kata return
}

$score = getFinalValue(90);
var_dump($score); // hasil A
$score = getFinalValue(60);
var_dump($score); // hasil E

//Return Type Declaration sama seperti function spesifik argument typedata

function tambah(int $satu, int $dua): int // int sepsifik bahwa function tambah itu kembaliannya / returnnya int
{
    $total = $satu + $dua;
    return $total;
}

$result = tambah(10, 10);
var_dump($result); // hasil 20

function sayHello(string $name): string // String sepsifik bahwa function tambah itu kembaliannya / returnnya String
{
    $statement = "Hello $name";
    return $statement;
}

$sapa = sayHello();
var_dump($sapa);
