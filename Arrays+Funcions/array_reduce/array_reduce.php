<?php

$products = [
    ["tittle" => "raton", "price" => "10"],
    ["tittle" => "teclado","price" => "20"],
    ["tittle" => "pantalla", "price" => "300"],
    ["tittle" => "router", "price" => "30"]
];
//Count the total amount of all prices
$summa = array_reduce($products, fn ($carry, $product) => $carry + $product["price"], 0);
echo $summa;

//Find the maximum price
$maxPrice = array_reduce($products, fn ($carry, $product) =>
$carry > $product["price"] ? $carry : $product["price"], 0);
echo "<br>";
echo $maxPrice;

//Create a line from the names of goods separated by commas

$productList = rtrim(array_reduce($products, fn ($carry, $product) => $carry . $product["tittle"] .  ", ", ""), ", ");
echo "<br>";
echo $productList;
