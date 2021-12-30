<?php

$nilai = "A";

switch ($nilai) {
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus";
        break;
    default:
        echo "Mungkin Anda salah jurusan" . PHP_EOL;
}

// Switch Statement dengan colon : (pakaai nya elseif(): bukan else if() :)
switch ($nilai):
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus";
        break;
    default:
        echo "Mungkin Anda salah jurusan" . PHP_EOL;
endswitch;
