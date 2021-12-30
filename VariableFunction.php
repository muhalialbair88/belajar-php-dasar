<?php

function foo()
{
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$functionYangAkanDipanggil = "foo"; // foo adalah nama function yang disimpan didalam variable
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "bar"; // bar adalah nama function yang disimpan didalam variable
$functionYangAkanDipanggil();

//penggunaan variable function
// Syntax dibawah jalan pada php versi 7.0+
function sayHello(String $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(String $name): String // ini adalah argument ke 2 sayHello
{
    return "Sample $name";
}
sayHello("Ali", "sampleFunction");
sayHello("Ali", "strtoupper"); //uppercase ALI
sayHello("Ali", "strtolower"); //lowercase ali
