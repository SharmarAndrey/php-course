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


$users = [
    ["name" => "Andrey", "age" => 42, "is_admin" => true, "gender" => "male"],
    ["name" => "Olga", "age" => 30, "is_admin" => false, "gender" => "female"],
    ["name" => "Ivan", "age" => 17, "is_admin" => false, "gender" => "male"],
    ["name" => "Lena", "age" => 65, "is_admin" => true, "gender" => "female"],
    ["name" => "Oleg", "age" => 50, "is_admin" => false, "gender" => "male"]
];

//General age of all users
$summaAges = array_reduce($users, fn ($carry, $user) => $carry + $user["age"], 0);
echo "<br>";
echo $summaAges;

//How many admins?
$admins = array_reduce($users, fn ($carry, $user) => $carry + $user["is_admin"], 0);
echo "<br>";
echo $admins;

//The average age of men

$men = array_reduce($users, function ($carry, $user) {
    if ($user["gender"] === "male") {
        $carry["sum"] += $user["age"];
        $carry["count"]++;
    }
    return $carry;
}, ["sum" => 0, "count" => 0]);

$averageAgeOfMen = $men["sum"] / $men["count"];
echo "<br>";
echo $averageAgeOfMen;


//List of names only women in a line ("Olga, Lena"), without a comma at the end

$women = rtrim(array_reduce($users, fn ($carry, $user) => $carry . ($user["gender"] == "female" ? $user["name"] . ", " : ""), ""), ", ");
echo "<br>";
echo $womans;
