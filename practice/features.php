<?php 
include 'header.php';
include 'classes/Features.php';

$features = new Features();

?>



  <form class="features" method="POST">
  <p>Add Features: <input type="text" name="featurename"> </p>
  <!-- <p>Add Features: <input type="text" name="featurename"> </p> -->
  <button type="submit" name="Submit" >Submit</button>
  </form>

