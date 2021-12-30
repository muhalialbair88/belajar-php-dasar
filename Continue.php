<?php

for ($counter = 1; $counter <= 10; $counter++) {
    if ($counter % 2 == 0) {
        continue;
    }
    echo "Bilangan Ganjil -> ${counter}" . PHP_EOL;
};
