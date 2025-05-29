<?php

function multiply($a, $b = 1)
{
    return $a * $b;
}
echo multiply(4, 5);
echo "<br>";
function formatPrice($price, $currency = "€")
{
    return "Price is: $price $currency";
}
echo formatPrice(100, "$");
echo"<br>";
function greetUser($name = null)
{
    if ($name === null) {
        $name = "Unknown";
    }
    return "Hi,  $name";
}
echo greetUser("Andrey");
