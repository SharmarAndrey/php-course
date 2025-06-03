<?php

function isDiscounted(float $value): bool
{
    return $value < 100;
}
echo isDiscounted(99);
echo "<br>";

function getInitials(?string $name): string
{
    if (!$name) {
        return "N/A";
    }
    $initials = explode(" ", $name);

    $initials = array_map(fn ($name) => substr($name, 0, 1), $initials);
    return implode(". ", $initials). ".";
}
echo getInitials("Andrey Sharmar");
echo "<br>";

function logItems(array $items, callable $formatter)
{
    foreach ($items as $item) {
        echo $formatter($item). "<br>";
    }

}
echo logItems(["mouse", "keyboard", "display"], fn ($item) =>  strtoupper($item));
