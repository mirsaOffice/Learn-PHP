<?php

$name = "Mirsa";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Isi Name NULL? : ";
var_dump(is_null($name));
echo "\n";

is_null($tidakada);

$contoh = "Mira";
unset($contoh);
var_dump(isset($contoh));

$contoh = "Alif";
// $contoh = null;

var_dump(isset($contoh));