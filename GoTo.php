<?php
//goto jarang dipakai, kalau bisa jgn digunakan, sekalinya menggunakan jgn skala banyak
goto a;
echo "Hello World" . PHP_EOL;

a:
echo "Hello A" . PHP_EOL;

$counter = 1;
while (true) {
    echo "ini adalah for loop ke-${counter}" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        goto end;
    }
}
end:
echo "End Loop";
