<?php

class Database{
  public $servername = 'localhost';
  public $username = 'root';
  public $password = '';
  public $dbName = 'practice';

  public $conn;

  
  public function __construct() {
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbName);
    if($this->conn->connect_error){
      die("Connection Failed" . $this->conn->connect_error);
    }

    $this->createTable();
    $this->createFeatureTable();
    // $this->insertData();
    
  }

  public function createTable(){
    $sql = "CREATE TABLE IF NOT EXISTS Device (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      devicename VARCHAR(255) NOT NULL,
      devicemodel VARCHAR(255) NOT NULL
    )";

      if($this->conn->query($sql)) {

      } else {
        echo "Table Device not created";
      }
  }

  public function createFeatureTable() {
    $sql = "CREATE TABLE IF NOT EXISTS Features (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      featurename VARCHAR(255) NOT NULL
    )";

      if($this->conn->query($sql)) {

      } else {
        echo "Table Device not created";
      }
  }
  
  public function insertData($tableName, $columns, $values) {
    $value =  implode(",", $values);
    $column =  implode(",", $columns);

    $insertSql = "INSERT INTO {$tableName} ({$column})
    VALUES ({$value})";

    if($this->conn->query($insertSql)){
      echo "Data created";
    } else {
      echo "Error:" . $insertSql . "<br>" . $this->conn->error;
    }
  }
  public function updateData($tableName, $value) {
    $value =  implode(",", $values);

    $updateSql = "UPDATE $tableName SET  $value='" . $_POST['devicemodel'] . "', WHERE id='" . $_POST['id'] . "' ";
    $result = $this->conn->query($updateSql);

  }

  public function deleteData($tableName){

    $deleteSql = "DELETE FROM $tableName WHERE id='" . $_POST['id'] . "' ";
    $result = $this->conn->query($deleteSql);

  }


  public function getData($tableName, $columns) {
    $getSql = "SELECT $columns from $tableName";
     return $result = $this->conn->query($getSql);

  }
}