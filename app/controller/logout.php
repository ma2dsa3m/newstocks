<?php
require "../../config/db.php";
unset($_SESSION['logged user']);
header('Location: ../../index.php');
?>