<?php

$age = 20;

// if($age >= 18) {
//   echo "You are old enough to vote";
// } else {
//   echo "sorry you are not old enough to vote";
// }

$t = 18;

// if($t < 12) {
//   echo "Good Morning";
// } else if($t < 17) {
// echo "Good Afternoon";
// }else {
//   echo "Good Evening";
// }

$posts = ['First Post'];

// if(!empty($posts) ) {
//   echo $posts[0];
// }



// $firstPost = !empty($posts) ?   $posts[0] : "hi";

// $firstPost = $posts[0] ?? null;;

// echo $firstPost;

$faveColor = 'pink';
switch ($faveColor) {
  case 'red':
    echo "Your Favorite color is red";
    break;
    
  case 'blue':
  echo "Your Favorite color is bluie";
    break;
    case 'green':
    echo "Your Favorite color is green";
      break;
  default:
    echo "Your favorite color is not red, green or blue";
    break;
}
?>