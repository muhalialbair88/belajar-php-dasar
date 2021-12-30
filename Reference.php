<?php

$name = "Ali";

$otherName = &$name; // & reference berarti dapat mengubah
$otherName = "Albair";

echo $name . PHP_EOL;

//pass by refrence

function increment(&$value)
{
    $value++;
}
$counter = 1;
increment($counter); // hasilnya 1 kalau parameter tanpa &, kalao menggunakan & hasilnya $counter++

echo $counter . PHP_EOL;
