<?php
var_dump(join(",", [10, 11, 12, 13, 14, 15])); // ada 2 parameter separator + array
var_dump(explode(" ", "Muhammad Ali Albair")); //memecah String menjadi array menggunakan parameter 1 / spasi " "
var_dump(strtolower("MUHAMMAD ALI ALBAIR")); // mengkapitalkan huruf
var_dump(strtoupper("muhammad ali albair")); // mengecilkan huruf
var_dump(trim("          Ali          ")); //menghapus whitespace seblah kiri dan kanan, tapi jika terpecah ada whitespace lagi tidak hilang
// hasilnya "Ali"
var_dump(trim("          Ali        Albair            ")); //menghapus whitespace seblah kiri dan kanan, tapi jika terpecah ada whitespace lagi tidak hilang
// hasilnya "Ali          Albair"
var_dump(substr("Muhammad Ali Albair", 0, 3));
var_dump(substr("Muhammad Ali Albair", 2, 3)); 

`//masih banyak lagi function string yang digunakan untuk memanipulasi data String
// buka link berikut : https://www.php.net/manual/en/ref.strings.php`