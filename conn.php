<?php

class dbConnect {
   protected $dbname = "API";
   protected $servername = "localhost";
   protected $username = "root";
   protected $password = "";

   public $conn;

   function connect()
   {
    try {
        $this->conn = null;
        $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
         // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         echo "Connected successfully";
    } catch(PDOException $e) {
         echo "Connection failed: " . $e->getMessage();
    }
        return $this->conn ;
   }

}

// $db = new dbConnect();
// $conn = $db->connect();

// var_dump($conn);
?>

