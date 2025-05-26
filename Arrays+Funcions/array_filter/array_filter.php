<?php

$products = [
    ["title" => "Table", "price" => 120],
    ["title" => "Chair", "price" => 80],
    ["title" => "Lamp", "price" => 45],
    ["title" => "Sofa", "price" => 300]
];

$expensive = array_filter($products, fn ($product) => $product["price"] > 100);
print_r($expensive);
echo "<br>";


$largeNameOfProduct = array_filter($products, fn ($product) => strlen(($product["title"])) > 4);
