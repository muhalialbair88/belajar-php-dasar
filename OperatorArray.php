<?php

//operasi union(+)
$first = [
    "first_name" => "Muhammad"
];
$last = [
    "last_name" => "Albair"
];
$full = $first + $last;
var_dump($full);


$firstt = [
    "first_name" => "Muhammad"
];
$lastt = [
    "first_name" => "Ali", // ini tidak tampil karna value $firstt["first_name"] diutamakan
    "last_name" => "Albair"
];
$fulll = $firstt + $lastt;
var_dump($fulll);

// membandingkan (==) data array 
//data sama urutan beda
$a = [
    "first_name" => "Muhammad", // ini tidak tampil karna value $firstt["first_name"] diutamakan
    "last_name" => "Albair"
];
$b = [
    "last_name" => "Albair",
    "first_name" => "Muhammad"
];
var_dump($a == $b); //mengecek tanpa identik
var_dump($a === $b); //mengecek identik
