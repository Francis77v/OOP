<?php




class User {
    //properties
    private $conn;

    protected $name;
    protected $age;


    //methods
    public function __construct($conn, $name, $age)
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

            echo "Data inserted successfully!";
            }
        catch(Exception $e) {
            echo "Error inserting data: " . $e->getMessage();
        }
      
    }


}
