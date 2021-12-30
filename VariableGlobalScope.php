<?php
//error karna variable $name == global tidak bisa diakses di dalam function
$name = "Ali"; // ini global scope atau variable global

function sayHello()
{
    global $name; // solusinya global keyword
    //atau bisa mengakses seperti dibawah ini 
    echo $GLOBALS["name"];
    echo "Hello $name"; // global scope error

    var_dump($GLOBALS); // untuk mengecek variable global $name adalah variable GLOBALS(array)
}

sayHello();
