<?php 
include 'header.php'; 
include 'classes/Device.php';

$device = new Device();

$device->createItem();
?>

<form action="" method="POST" >
  <p>Device Name: <input type="text" name="devicename"> </p>
  <p>Device Model: <input type="text" name="devicemodel"> </p>
  <button type="submit" name="Submit" >Submit</button>
</form>