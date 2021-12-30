<?php

function increment()
{
    static $counter = 1; // static digunakan agar $counter / local variable siklus hidupnya terus menerus
    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}

increment(); // hasilnya 1 jika tidak ada static jika ada static 1
increment(); // hasilnya 1 jika tidak ada static jika ada static 2
increment(); // hasilnya 1 jika tidak ada static jika ada static 3
