<?php

$age = 42;
if ($age < 18) {
    echo "your age is $age years and you are less than 18";
} elseif ($age >= 18 && $age < 60) {
    echo "your are an adult and your age is $age years";
} else {
    echo "you are senior";
}
echo "<br>";

$role = "Andrey";

switch ($role) {
    case "admin": echo "Hello,Admin";
        break;
    case "user": echo "Welcome, User";
        break;
    default: echo "Acces Denied";
}
