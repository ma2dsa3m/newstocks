<?php
    require "rb-mysql.php";
    R::setup( 'mysql:host=localhost;dbname=sto',
        'root', '' );
    session_start();
?>