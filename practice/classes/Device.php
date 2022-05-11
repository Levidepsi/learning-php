<?php 
include 'Database.php';


class Device extends Database{
  public function __construct(){
    parent:: __construct();
  }

  public function createItem() {
    $devicename = $_POST['devicename'];
    $devicemodel = $_POST['devicemodel'];
  

    $this->insertData('device', ['devicename', 'devicemodel'], ["'{$devicename}'", "'{$devicemodel}'"]);
  }

  public function getItems() {
    $data = $this->getData('device', 'id, devicename, devicemodel');

    // print_r($data);

    if($data->num_rows > 0) {
      foreach ($data as $key => $myDevices) {
      echo  "id: " . $myDevices["id"]. " Device Name" . $myDevices["devicename"]. " " . $myDevices["devicemodel"]. "<br>";
        
      }
    }
    
  }
  public function updateItem() {
    $devicename = $_POST['devicename'];
    $devicemodel = $_POST['devicemodel'];
  
    
    $data = $this->updateData(['devicename', 'devicemodel'], ["'{$devicename}'", "'{$devicemodel}'"]);


   foreach ($data as $key => $myDevices) {
     echo "New Device Model: ". $myDevices['devicemodel'];
   }
  }

  public function deleteItem() {
    $this->deleteData();
  }
}