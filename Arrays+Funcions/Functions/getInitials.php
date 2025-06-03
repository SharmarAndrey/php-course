<?php


function getInitials($name)
{
    if (!$name) {
        return "N/A";
    }
    $initials = explode(" ", $name);
    $initials = array_map(fn ($word) => mb_substr($word, 0, 1), $initials);
    $initials = implode(".", $initials);
    return  "$initials.";
}
echo getInitials("Елена Петрова");
