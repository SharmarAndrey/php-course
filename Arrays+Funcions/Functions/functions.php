<?php

function double($x)
{
    return $x * 2;
}
echo double(5);
echo "<br>";

function formatName($name)
{
    return "name: " . strtoupper($name);
}
echo formatName("andrey");
echo "<br>";

function isExpensive($price)
{
    /*    if ($price > 100) {
           return true;
       } else {
           return false;
       } */
    return $price > 100;
}
echo "<br>";
echo isExpensive(90);
echo isExpensive(0);
echo isExpensive(101);
echo "<br>";
echo isExpensive(105);
