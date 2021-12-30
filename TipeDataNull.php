<?php
$name = "Ali";
$name = NULL;

$age = NULL;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

//cek menggunakan is_null
echo "is Name NULL ? ";
echo is_null($name);
echo "\n";

//cek menggunakan var_dump
echo "is Name NULL ? ";
echo var_dump(is_null($name));
echo "\n";

// echo is_null($tidakAda); //error

//cek menggunakan variabel ada atau tidak lebih baik menggunakan isset
$contoh = "Ali";
var_dump(isset($contoh));


//menghapus variabel menggunakan unset
// $contoh = "Ali";
// unset($contoh);

// echo ($contoh); //error
