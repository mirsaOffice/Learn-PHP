<?php

$a = 10;
$b = 10;

$result = $a + $b;

$resultNegative = -$result;
var_dump($resultNegative);

$resultNegative = +$result;
var_dump($resultNegative);

$resultModulo = 100 % 3;
var_dump($resultModulo);