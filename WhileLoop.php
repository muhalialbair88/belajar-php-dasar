<?php
$counter = 1;
while ($counter <= 10) {
    echo "ini adalah for loop ke-${counter}" . PHP_EOL;
    $counter++;
}
echo PHP_EOL;
//syntax alternative whileloop
$counter = 1;
while ($counter <= 10) :
    echo "ini adalah for loop ke-${counter}" . PHP_EOL;
    $counter++;
endwhile;
