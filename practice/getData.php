<?php 
include 'header.php'; 
include 'classes/Device.php';

$device = new Device();

// $device->getItems();


?>

<a href="updatePage.php?=id"><?php $device->getItems(); ?></a>
