<?php //if(!isset($_SESSION['logged user'])){header('Location:../pages/login.php');};
require "../../config/db.php";
require "tickets/amdcontroller.php";
$username = $_SESSION['logged user']->name;
$usermail = $_SESSION['logged user']->email;



?>