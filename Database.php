

<?php

class Database
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $conn;

    // Class construction
    public function __construct(
        $servername = "localhost",
        $username = "root",
        $password = "",
        $dbname = "shopping-cart",
        $tablename = "users",
    )
    {
        $this->dbname = $dbname;
        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->conn = mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);

        if(!$this->conn){
            echo "Database connection failed";
        }else{
        }
    }

    // Get product from the database
    public function getData(){  
        $sql = "SELECT * FROM $this->tablename";
        $result = mysqli_query($this->conn,$sql);

        if(mysqli_num_rows($result) > 0){
            
            return $result;
        }
    }
}

?>