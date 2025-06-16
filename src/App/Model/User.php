<?php

namespace Flore\Oop\App\Model;
use \PDO;
use \PDOException;
use Exception;

class User {
    //properties
    private $conn;

    protected $name;
    protected $age;


    //methods
    public function __construct($conn, $name = null, $age = null)
    {
        $this->conn = $conn;
        $this->name = (string) $name;
        $this->age = (int) $age;
    }

    public function addUser()
    {
        try{
            //query in a variable
            $sql = "INSERT INTO users (name, age) VALUES (:name, :age)";

            //stmt prepare variable for query
            $stmt = $this->conn->prepare($sql);

            //execute with the data aneeded to be inserted
            $stmt->execute([':name' => $this->name, 
                            ':age'  =>  $this->age]);

            return "Data inserted successfully!";
        }
        catch(Exception $e) {
            return "Error inserting data: " . $e->getMessage();
        }
      
    }

    public function viewUser()
    {
        try{
            //variable query
            $sql = "SELECT * FROM users";

            //stmt prepare query
            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(Exception $e) {
            return "Error fetching data: " . $e->getMessage();
        }

    }

    public function updateUser()
    {
        try {
            //variable query
            $sql = "UPDATE users SET name = :name, age = :age WHERE name =";

            //stmt prepare variable for query
            $stmt = $this->conn->prepare($sql);

             //execute with the data aneeded to be inserted
            $stmt->execute([':name' => $this->name, 
                            ':age'  =>  $this->age]);

            return "Data updated successfully!";


        }
        catch(Exception $e) {

        }
    }


}
