<?php

$a = 10;
$b = 10;
$result = 10 + 10;
var_dump($result);

$resultNegative = -$result;
var_dump($resultNegative);

$resultPositive = +$result;
var_dump($resultPositive);

$resultModulo = 100 % 3;
var_dump($resultModulo);

$resultAll =  $resultModulo + $resultNegative + $resultPositive + $result;
var_dump($resultAll);
