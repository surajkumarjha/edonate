<?php

include_once("mysql-shim.php");
session_start();

$user=$_SESSION['loggeduser'];
if (!$user) {
    header('location: login.php');
    }
else{
    header('location: pay.php');
}


?>