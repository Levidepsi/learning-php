<?php 

$fruits = ['Apple', 'Orange', 'Pear'];

// get length
echo count($fruits);

// search array 
// returns boolean of true or false
// var_dump(in_array('Apple', $fruits));

$fruits[] = "grape";

// add to array
array_push($fruits, 'strrawberry');
array_unshift($fruits, 'mange');

// remove arrau
array_pop($fruits);
array_shift($fruits);
// unset($fruits[2]);

// split into two chunks
// $chunked_array = array_chunk($fruits, 1);

// print_r($chunked_array);

// print_r($fruits);

$arr = [1, 2, 3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr, $arr2);
$arr4 = [...$arr, ...$arr2];

// print_r($arr4);

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);

// print_r($c);

$keys = array_keys($c);

// print_r($keys);

// flip array

$flip = array_flip($c);
// print_r($flip);

$numbers = range(1, 20);

// print_r($numbers);

$newNumbers = array_map(function($number){
  return "Number ${number}";
}, $numbers);

// print_r($newNumbers);


$lestThan10 = array_filter($numbers,fn($number) => $number <= 10);

// print_r($lestThan10);

$sum = array_reduce($numbers, fn($carry, $number)=> $carry + $number );

var_dump($sum);



?>