<?php
$_SESSION[1] = array();

array_push($_SESSION[1], array("name", "quantiru"));
array_push($_SESSION[1], array("123","kkl"));

foreach ($_SESSION[1] as $a){
    print_r($a);
}
?>