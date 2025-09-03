<?php

$first = [
    "first_name" => "Eko"
];

$last = [
    "first_name" => "Budi",
    "last_name" => "Khannedy"
];

$full = $last + $first;
var_dump($full);

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Eko",
    "last_name" => "Khannedy"
];

$b = [
    "first_name" => "Khannedy",
    "last_name" => "Eko"
];

var_dump($a == $b);
var_dump($a === $b);
