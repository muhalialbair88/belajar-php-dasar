<?php

for ($counter = 1; $counter <= 10; $counter++) {
    echo "ini adalah for loop ke-${counter}" . PHP_EOL;
}
echo PHP_EOL;
for ($counter1 = 10; $counter1 >= 1; $counter1--) {
    echo "ini adalah for loop ke-${counter1}" . PHP_EOL;
}

//syntax alternative forloop
for ($counter = 1; $counter <= 10; $counter++) :
    echo "ini adalah for loop ke-${counter}" . PHP_EOL;
endfor;
echo PHP_EOL;
for ($counter1 = 10; $counter1 >= 1; $counter1--) :
    echo "ini adalah for loop ke-${counter1}" . PHP_EOL;
endfor;
