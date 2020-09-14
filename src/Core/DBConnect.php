<?php 

class DbConnect {

    protected $serverName = "172.16.14.174";
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
        return mysqli_query($this->conn, $query);
    }
    
}
?>