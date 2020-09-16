<?php 
    session_start();
    if (!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }
    // $_SESSION['cart'] = array();
    require_once "./Core/BaseController.php"; 
    require_once "./Core/DBConnect.php";
    require_once "./Core/Controller.php";
    $app = new BaseController();
?>