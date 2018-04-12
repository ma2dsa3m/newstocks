<?php //if(!isset($_SESSION['logged user'])){header('Location:../pages/login.php');};
require "../../config/db.php";
require "tickets/amdcontroller.php";
$back_url = $_SERVER['HTTP_REFERER'];
$data = $_POST;
$username = $_SESSION['logged user']->firstname;
$usermail = $_SESSION['logged user']->email;
$userid = $_SESSION['logged user']->id;

@$watchlistname = R::findAll('watchlistname','userid = ?',array($userid));

//@$watchlistnewname = R::findAll('watchlistname','userid = ?',array($userid));







if(isset($data['deltic'])){
	$listing = R::findOne('watchlist','id = ?',array($_REQUEST['tic']));
	R::trash($listing);
    header("Location:$back_url");
};

?>