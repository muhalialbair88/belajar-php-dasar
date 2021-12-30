<?php

$names = [
    "Muhammad",
    "Ali",
    "Albair"
];

//mencetak array tanpa foreach 
// for ($i = 0; $i < count($names); $i++) {
//     echo "Data ke - ${i} = $names[$i]" . PHP_EOL;
// }

//mencetak array menggunakan foreach
foreach ($names as $name) {
    echo "Data ${name}" . PHP_EOL;
}
//mencetak array key => value  menggunakan foreach
foreach ($names as $index => $name) { //index == key
    echo "Data ke - ${index} = ${name}" . PHP_EOL;
}
echo PHP_EOL;
$person = [
    "first_name" => "Muhammad",
    "middle_name" => "Ali",
    "last_name" => "Albair"
];

//mencetak array(map) key => value  menggunakan foreach
foreach ($person as $key => $value) {
    echo "${key} : ${value}" . PHP_EOL;
}
