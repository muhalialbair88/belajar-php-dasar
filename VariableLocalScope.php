<?php
function createName()
{
    $name = "Ali"; // local scope
}
createName();
echo $name . PHP_EOL; //error karna $name berada di local scope
