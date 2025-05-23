<?php

for ($i = 1;$i <= 10;$i++) {
    $type = ($i % 2 == 0) ? "even" : "odd";

    echo "Step $i is $type<br>";
}
