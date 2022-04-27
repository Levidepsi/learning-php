<?php

$name = "Levi"; // string
$age = 20; //string
$has_kids = false; //boolean
$cash_on_hand = 20.75; //float

// var_dump($cash_on_hand);

echo "My name is $name  my age is $age ";

$x = '5' + '5';
var_dump($x);
echo 10 - 5;
echo 5 * 6;
echo 10 / 2;
echo 10 % 3;

// when you want to use constants

define('HOST', 'localhost');
define('DB_NAME', 'dev_levi');

echo DB_NAME;



?>