<?php

$data = [
    "action" => null
];

if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "Nothing";
}
echo $action . PHP_EOL;

//dapat dilakukan dengan nullcoalescingoperator
$data1 = [];
// $action1 = $data1["action"] ?? "Nothing";  // php 5+
// echo $action1 . PHP_EOL; tercetak nothing karnaa data[] == " "
