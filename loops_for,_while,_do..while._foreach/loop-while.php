<?php

$i = 1;
while ($i <= 10) {

    $divisible = ($i % 3) == 0 ? "divisible by 3" : "";


    echo "Step  $i   $divisible <br>";
    $i++;
}
