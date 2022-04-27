 <?php 
 
//  for($x = 0; $x <= 10; $x++) {
//    echo 'Number' . $x . '<br>' ;
//  }

$x = 1;

// while($x <= 15) {
//   echo 'Number' . $x . '<br>';
//   $x++;
// }

// Do while loop
$x = 1;
// do {
//   echo 'Number' . $x . '<br>';
//   $x++;
// } while($x <= 5) 

// for each
$posts = ['First Post', 'Second Post', 'Third Post'];

// for($x = 0; $x < count($posts); $x++){
//   echo $posts[$x];
// }

// foreach($posts as $index => $post) {
//   echo $index + 1 . ' - ' . $post . '<br>';
// }

// associate array
$people = [
    'first_name' => 'Lele',
    'last_name' => 'Rosario',
    'email' => 'levi@gmail.com'
];

foreach($people as $key => $value){
  echo "$key - $value<br>";
}
 ?>