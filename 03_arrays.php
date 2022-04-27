<?php
// simple array
$numbers = [1, 44, 55, 22];
$fruits = array('apple', 'orange', 'pear');

// var_dump($numbers);
// echo $fruits[1][0][2];

// Assosciate array
$colors = [
  1 => 'red',
  4 => 'blue',
  6 => 'green'
];

// echo $colors[4];

$hex = [
  'red' => '#f00',
  'blue' => '#0f0',
  'green' => '#00f'
];

// echo $hex['blue']

$person = [
  'first_name' => 'Levi',
  'last_name' => 'Rosario',
  'email' => 'levi@gmail.com'
];

// echo $person['first_name'];

$people = [
  [
    'first_name' => 'Levi',
    'last_name' => 'Rosario',
    'email' => 'levi@gmail.com'
  ],
  [
    'first_name' => 'Lev',
    'last_name' => 'Rosario',
    'email' => 'levi@gmail.com'
  ],
  [
    'first_name' => 'Lele',
    'last_name' => 'Rosario',
    'email' => 'levi@gmail.com'
  ]
];

// echo $people[1]['first_name'];

var_dump(json_encode($people))
?>