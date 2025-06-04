<?php

$users = ["Andrey", "Olga", "Ivan", "Lena"];

function logItems(array $users, callable$formatter): void
{
    foreach ($users as $user) {
        echo $formatter($user). "<br>";
    }

};
logItems($users, fn ($name) => strtoupper($name));

logItems($users, fn ($name) => strtolower($name. "!"));
