<?php
require '../../../config/db.php';
require 'amdcontroller.php';
$data = $_POST;
$userid = $_SESSION['logged user']->id;

$qtyshares = $data['qtyshares'];

if(($data['watchlist1'])!=""){$watchlistname = $data['watchlist1'];} else $watchlistname = $data['watchlist2'];
$alllist = R::count('watchlist','watchlistname = ?',array($data['watchlist1']));
$alllistw = R::count('watchlistname','watchlistname = ?',array($data['watchlist1']));

$ticker = $data['ticker'];
$title = $data['title'];
$price = $data['price'];

#create new watch
if(isset($data['addwatch']) && $alllistw<1 && ($data['watchlist1'])!=""){
    $createwatchlistname = R::dispense('watchlistname');
    $createwatchlistname->userid=$userid;
    $createwatchlistname -> watchlistname = $data['watchlist1'];
    R::store($createwatchlistname);
};

#addtickets to watch
if(isset($data['addwatch']) && $alllist<1){

	$createwatchlist = R::dispense('watchlist');
	$createwatchlist -> userid = $userid;
	$createwatchlist -> ticker = $ticker;
	$createwatchlist -> pricestart = $price;
	$createwatchlist -> companyname = $title;
	$createwatchlist -> qtyshares = $qtyshares;
	$createwatchlist -> watchlistname = $watchlistname;
	R::store($createwatchlist);

	header("Location:../../pages/dash.php?ticket=$ticker");
} else header("Location:../../pages/dash.php?ticket=$ticker");
	



?>