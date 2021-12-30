<?php
require "Lib/MyFunction.php";
// include "Lib/MyFunction.php"; // bisa memakai require or include jika keduanya dipakai maka akan error,
//solusinya pakai untuk memastikan cuman sekali file di load require_once or include_once 
//require_once "Lib/MyFunction.php";
//or
//include_once "Lib/MyFunction.php";
//tapi untuk require jika pathnya salah maka akan error
//jika include tidak, tapi akan diberi warning

echo sayHello("Ali", "Albair");
