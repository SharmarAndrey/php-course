<?php

declare(strict_types=1);
function addItem(string $title, float $price, int $quantity = 1)
{
    return [
        "title" => $title,
        "price" => $price,
        "quantity" => $quantity,
    ];
}
print_r(addItem("mouse", 10, 5));

echo "<br>";

$items = [
  addItem("Mouse", 15.5, 2),
  addItem("Keyboard", 40, 5),
  addItem("Monitor", 100, 3)
];

function calculateTotal(array $items): float
{
    return  array_reduce($items, fn ($count, $item) => $count + $item["price"] * $item["quantity"], 0);

}
echo calculateTotal($items);
echo "<br>";
echo print_r($items, true);
echo "<br>Total: " . calculateTotal($items) . " €";
