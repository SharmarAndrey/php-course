<?php

$users = [
    ["name" => "Andrey", "age" => 42],
    ["name" => "Sergey", "age" => 35],
    ["name" => "Jose", "age" => 17],
    ["name" => "Elena", "age" => 15]
];
$ages = array_map(fn ($x) => $x["age"] + 1, $users);
print_r($ages);
echo "<br>";
$upperCase = array_map(fn ($x) => strtoupper($x["name"]), $users);
print_r($upperCase);

echo "<br>";
$products = [
    ["title" => "Table", "price" => 120],
    ["title" => "Chair", "price" => 80],
    ["title" => "Lamp", "price" => 45]
];

$newPrice = array_map(fn ($x) => $x["price"] * 1.1, $products);
print_r($newPrice);
echo "<br>";
$upperRegist = array_map(fn ($x) => strtoupper($x["title"]), $products);
print_r($upperRegist);
