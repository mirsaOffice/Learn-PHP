<?php

$values = array(10, 9, 8, 7.5); //Array integer
var_dump($values);

$name = ["Mirsa", "Alif", "Putra"]; //Array string
var_dump($name);

var_dump($name[0]); //Memanggil nilai index ke-0

$name[0] = "Budi"; //Mengubah nilai index 0
var_dump($name);

unset($name[1]); //Menghilangkan index 1
var_dump($name);

$name[] = "Joko"; //Menambah index baru
var_dump($name);

var_dump(count($name));

$Mirsa = array(
    "id" => "Mirsa",
    "name" => "Alif Putra",
    "age" => 10,
    "address" => array(
        "city" => "Jakarta",
        "country" => "indonesia"
    )
);
var_dump($Mirsa);

var_dump($Mirsa["name"]);
var_dump($Mirsa["address"]["country"]);

$budi = [
    "id" => "Budi",
    "name" => "Budi Nugraha",
    "age" => 33,
    "address" => [
        "city" => "Jakarta",
        "country" => "indonesia"
    ]
];

var_dump($budi);