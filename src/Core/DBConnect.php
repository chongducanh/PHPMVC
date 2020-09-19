<?php 

class DbConnect {

    protected $serverName = "192.168.1.12";
    protected $userName = "root";
    protected $passWord = "password";
    protected $dbName = "game";
    protected $conn = null;

    function __construct() {
        $this->conn = mysqli_connect($this->serverName, $this->userName, $this->passWord);
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        mysqli_select_db($this->conn, $this->dbName);
        mysqli_query($this->conn, "SET NAMES 'utf8'");
    }
    
    public function ExecuteQuery($query)
    {
        // $query = "INSERT INTO Games (GameName, GamePrice, GameProducer, GameCatagory, GameQuantity, GameDescription, GameImage) VALUES ('1','12121asd','abc','12','12','ad','12')";
        // print_r(mysqli_query($this->conn, $query));
        return mysqli_query($this->conn, $query);
    }
    
}
?>