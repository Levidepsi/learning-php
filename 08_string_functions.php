<?php 

  $string = 'Hello World';

  // Get the length of the string
  echo strlen($string);

  // find the postion of the first occurence of a substring in a string
  echo strpos($string, 'o');

  // find the postion of the last occurence of a substring in a string
  echo strrpos($string, "o");

  // reverse a string
  echo strrev($string);

  // convert all charcters into lower string
  echo strtolower($string);

  // convert all charcters into upper string
  echo strtoupper($string);

  // Uppercase the first Character of each Word
  echo ucwords($string);

  // String replace
  echo str_replace('World', 'Everyone', $string);

  // Return portion of a  string specified by the offset and length

  echo substr($string, 0, 5);
  echo substr($string, 5);

  // starts with 

  // if(str_s($string, 'Hello')) {
  //   echo 'YES';
  // }

  $string2 = '<script>alert(1)</script>';
  echo htmlspecialchars($string2);

  printf('%s likes to %s', 'Levi', 'Code');

  printf('1+1=%d', 1+1);
  printf('1+1=%f', 1+1);

?>