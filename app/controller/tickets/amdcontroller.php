<?php //if(!isset($_SESSION['logged user'])){header('Location:../pages/login.php');};
require "nokogiri.php";

@$u = $_REQUEST['ticket'];
//$u = 'aapl';
//require 'test.php';



#index
$i = file_get_contents("https://finviz.com/quote.ashx?t=$u&ty=c&ta=1&p=d");
$in = new nokogiri($i);
$index = ($in->get('span.body-table')->toArray());


#company prof
$info = ($in->get('.fullview-title .fullview-links > a.tab-link')->toArray());
@$compprof = $info[0]['#text'][0];

//-----------------------------------------------------------------------

#price
$pr = ($in->get('.snapshot-td2 > b')->toArray());
@$price = $pr[65]['#text'][0];

#change
@$change = $pr[71] ["span"][0]['#text'][0];

#volatility
@$volatility = $pr[53]["small"][0]['#text'][0];

#pe
@$pe = $pr[1]['#text'][0];

#retern on invest
@$roi = $pr[39]['#text'][0];

#recomend
@$recomend = $pr[66]['#text'][0];

#targetprice
@$targetprice = $pr[28]['span'][0]['#text'][0];

#52weak
@$weak = $pr[34]['small'][0]['#text'][0];

#beta
@$beta = $pr[41]['#text'][0];

#sma
@$sma50 = $pr[68]['span'][0]['#text'][0];
@$sma20 = $pr[67]['span'][0]['#text'][0];
@$sma200 = $pr[69]['span'][0]['#text'][0];

#epsyear
@$epsyear = $pr[20]['span'][0]['#text'][0];
if(!@$epsyear){@$epsyear = $pr[20]['#text'][0];};

#investmonth
@$inmonth = $pr[11]['span'][0]['#text'][0];

#investqu
@$inquarter = $pr[17]['span'][0]['#text'][0];

#investyear
@$inyear = $pr[29]['span'][0]['#text'][0];

#marketcap
@$marketcap = $pr[6]['#text'][0];

#earnings
@$earnings = $pr[62]['#text'][0];

#avervolume
@$avervol = $pr[70]['#text'][0];

#debttoeq
@$debt = $pr[55]['span'][0]['#text'][0];

#bps
@$bps = $pr[24]['#text'][0];

#about
$ab = ($in->get('td.fullview-profile')->toArray());
@$about = $ab[0]["#text"][0];


//-------------------------------------------------------------------------

#title
$tit = ($in->get('.fullview-title a > b')->toArray());
@$title = $tit[0]['#text'][0]; 


#ticker
$tic = ($in->get('#ticker')->toArray());
@$ticker=$tic[0]['#text'][0];

//---------------------------------------------------------


#bigmoneyanalis
$bigmoney = ($in->get('.fullview-ratings-inner .body-table-rating-neutral > td')->toArray());

#news
$news = ($in->get('#news-table td')->toArray());

#inside
@$inside = ($in->get('.insider-sale-row-2 > td')->toArray());
if(@$inside[0]['a'][0]['#text'][0]===0){@$inside = ($in->get('tr.insider-option-row')->toArray());};

#inside
@$inside = ($in->get('.insider-sale-row-2 > td')->toArray());

#signal
$si = file_get_contents("https://finviz.com");
$sin = new nokogiri($si);
$signal = ($sin->get('table.t-home-table')->toArray());

#topup
@$topup = ($sin->get('.t-home-table td')->toArray());

#signal2
$siq = file_get_contents("https://finviz.com/screener.ashx?v=110&s=ta_p_tlsupport");
$sinq = new nokogiri($siq);
$signalq = ($sinq->get('#screener-content td')->toArray());

//---------------------------------------------------------


?>