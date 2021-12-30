<?php

// function sayHello()
// {
//     echo "Hello Function" . PHP_EOL;
// }

// sayHello();
// sayHello();
// sayHello();
// sayHello();
// sayHello();

//lokasi function
//function dibawah jalan karna $buat bernilai true dan function di eksekusi 
$buat = true;
if ($buat) {
    function sayHello()
    {
        echo "Hello Function" . PHP_EOL;
    }
}
sayHello();
sayHello();
sayHello();
sayHello();
sayHello();

//function dibawah tidak jalan karna $buat bernilai false dan function tidak di eksekusi 
//code dibawah error
// $buat = false;
// if ($buat) {
//     function sayHello()
//     {
//         echo "Hello Function" . PHP_EOL;
//     }
// }
// sayHello();
// sayHello();
// sayHello();
// sayHello();
// sayHello();
