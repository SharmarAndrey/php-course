<?php

function addItem($title, $price, $quantity = 1)
{
    return [
        "title" => (string)$title,
        "price" => $price,
        "quantity" => $quantity,
    ];
}
echo print_r(addItem("mouse", 10, 5));
echo "<br>";

$items = [
  addItem("Mouse", 15, 2),
  addItem("Keyboard", 40, 5),
  addItem("Monitor", 100, 3)
];

function calculateTotal($items)
{
    return  array_reduce($items, fn ($count, $item) => $count + $item["price"] * $item["quantity"], 0);

}
echo calculateTotal($items);
