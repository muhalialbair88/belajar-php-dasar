<?php
$firstName = "Muhammad";
$midName = "Ali";
$lastName = "Albair";

$fullName = "${firstName} ${midName} ${lastName}";
echo $fullName;
echo "\n";

echo "Nama Depan :";
echo $firstName;
echo "\n";

echo "Nama Tengah :";
echo $midName;
echo "\n";

echo "Nama Belakang :";
echo $lastName;
echo "\n";

//fitur variable bariables *jangan terlalu menggunakan fitur ini jika tidak diperlukan
$name = "ali";
$$name = "albair";

echo "nama :";
echo $name;
echo "\n";

echo "ali :";
echo $ali;
echo "\n";
