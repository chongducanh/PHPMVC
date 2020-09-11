<?php 
    $servername = "172.16.14.174";
    $username = "root";
    $password = "password";
    $dbname = "game";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
?>