<?php 
include 'Database.php';


class Features extends Database{
  public function __construct(){
    parent:: __construct();
    $this->createItem();
    
  }

  public function createItem() {
    if(isset($_POST['featurename'])) {
      $featureName = $_POST['featurename'];
      
      $this->insertData('features', ['featurename'], ["'{$featureName}'"]);
    }

  }

  public function getItems() {

  }
  public function updateItem() {

  }

  public function deleteItem() {

  }
}