<?php
class Database{
    private $host ="localhost";
    private $username ="root";
    private $password = "";
    private $dbname="centralmarket";

    public   $conn = null;

    public function __construct() {
            $this->conn=mysqli_connect($this->host,$this->username,$this->password,$this->dbname);    
            if($this->conn->connect_error){
                echo "erro" . $this->conn->connect_error;
            }else{
                // echo "db connected";
            }    
        
    }
    // public function __destruct()
    // {
    //     $this->closeConnection();
    // }
    public function closeConnection()
    {
        if($this->conn != null){
            $this->conn->close();
            $this->conn=null;
        }
    }



}

  

?>