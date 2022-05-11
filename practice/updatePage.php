<?php 
include 'header.php'; 
include 'classes/Device.php';

$device = new Device();

// print_r($device);

$device->updateItem();

?>

<form action="" method="POST" >
  <input type="hidden" name='id' value="<?php echo $this->device->result['id']; ?>" >
  <p>Device Name: <input type="text" name="devicename"> </p>
  <p>Device Model: <input type="text" name="devicemodel" value="<?php echo $this->$devices->updateItem('devicemodel'); ?>"> </p>
  <button type="submit" name="Submit" >Submit</button>
</form>