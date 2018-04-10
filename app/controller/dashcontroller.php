<?php //if(!isset($_SESSION['logged user'])){header('Location:../pages/login.php');};
require "../../config/db.php";
require "tickets/amdcontroller.php";
$data = $_POST;
$username = $_SESSION['logged user']->firstname;
$usermail = $_SESSION['logged user']->email;
$userid = $_SESSION['logged user']->id;


@$watchlist = R::findAll('watchlist','userid = ?',array($userid));


if(isset($data['deltic'])){
	$listing = R::findOne('watchlist','ticker = ?',array($data['tic']));
	R::trashAll($watchlist);
    header("Location:../../pages/dash.php?ticket=$ticker");
};

?>