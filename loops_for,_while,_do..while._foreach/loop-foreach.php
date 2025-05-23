<?php

$books = [
    "1984" => "George Orwell",
    "The Hobbit" => "J.R.R. Tolkien",
    "Fahrenheit 451" => "Ray Bradbury"
];
foreach ($books as $book => $author) {
    echo "Book: $book — Author: $author <br>";
}
