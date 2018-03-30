<?php //if(!isset($_SESSION['logged user'])){header('Location:../pages/login.php');};
require "nokogiri.php";

function parce($p1,$p2,$p3){
    $num1 = strpos($p1,$p2);
    if($num1 === false)return 0;
    $num2 = substr($p1,$num1);
    return strip_tags(substr($num2,0,strpos($num2,$p3)));

};

@$u = $_REQUEST['ticket'];
//setcookie("ticket",$u);
//@$ui = $_COOKIE["ticket"];
$url = "https://www.marketwatch.com/investing/stock/$u";
@$string = file_get_contents($url);

$url2 = "https://www.marketwatch.com/investing/stock/$u/analystestimates";
@$analis = file_get_contents($url2);


$url3 = "https://finance.yahoo.com/quote/$u/sustainability?p=$u";
@$yahoo = file_get_contents($url3);

$url4 = "https://www.zacks.com/stock/quote/$u?q=$u";
@$tiprank = file_get_contents($url4);

$url5 = "https://www.stockmonitor.com/stock-screener/golden-cross-50ma-cross-up-200ma/";
@$tech = file_get_contents($url5);

#lets go parce

$amdtitle = parce($string,'<h1 class="company__name">','</h1>');
$amdprice = parce($string,'<h3 class="intraday__price ">','</h3>');
$amdchange = parce($string,'<span class="change--percent--q">','</span>');
$amdticket = parce($string,'<span class="company__ticker">','</span>');
$dayopen = parce($string,'<span class="open-value">','</span>');
$dayclose = parce($string,'<span class="last-value">','</span>');

$marketcap = parce($string,'<small class="kv__label">Market Cap</small>','</span>');
$highlow = parce($string,'<small class="kv__label">Day Range</small>','</span>');

#intradayvol
$indayvol = parce($string,'<div class="intraday__volume">','</div>');
$paterns[0]="/Before Hours Volume:/";
$paterns[1]="/After Hours Volume:/";
$paterns[2]="/Average Target Price:/";
$paterns[3]="/Market Cap/";
$paterns[4]="/Average Volume/";
$paterns[5]="/1 Month/";
$paterns[6]="/3 Month/";
$paterns[7]="/1 Year/";
$paterns[8]="/Beta/";
$paterns[9]="/52 Week Range/";
$paterns[10]="/Ex-Dividend Date/";
$paterns[11]="/Dividend/";


$indayvol = preg_replace($paterns, '', $indayvol);

$anrec = parce($analis,'<td class="recommendation">','</td>');

#target price
$target = parce($analis,'<td class="first column2">','</tr>');
$target = preg_replace($paterns, '', $target);

#marketcap
$marketcap = parce($string,'<small class="kv__label">Market Cap</small>','</span>');
$marketcap = preg_replace($paterns, '', $marketcap);

#averagevol
$avervol = parce($string,'<small class="kv__label">Average Volume</small>','</span>');
$avervol = preg_replace($paterns, '', $avervol);

#1month perf
$monper = parce($string,'<td class="table__cell">1 Month</td>','</tr>');
$monper = preg_replace($paterns, '', $monper);

#3month perf
$triper = parce($string,'<td class="table__cell">3 Month</td>','</tr>');
$triper = preg_replace($paterns, '', $triper);

#year perf
$yearper = parce($string,'<td class="table__cell">1 Year</td>','</tr>');
$yearper = preg_replace($paterns, '', $yearper);

#esg
$esg = parce($yahoo,'<div class="Fz(36px) Fw(600) D(ib) Mend(5px)" data-reactid="20">','</div>');
$esg = preg_replace($paterns, '', $esg);

#tech rank
$techrank = parce($tiprank,'<td width="50%">','</strong>');
$techrank = preg_replace($paterns, '', $techrank);

#beta
$beta = parce($string,'<small class="kv__label">Beta</small>','</span>');
$beta = preg_replace($paterns, '', $beta);

#weakrange
$weakrange = parce($string,'<small class="kv__label">52 Week Range</small>','</span>');
$weakrange = preg_replace($paterns, '', $weakrange);

#timestamp
$timestamp = parce($string,'<span class="timestamp__time">','</span>');

#dividate
$dividate = parce($string,'<small class="kv__label">Ex-Dividend Date</small>','</span>');
$dividate = preg_replace($paterns, '', $dividate);

#divident
$divident = parce($string,'<small class="kv__label">Dividend</small>','</span>');
$divident = preg_replace($paterns, '', $divident);

#earnings
$earnings = parce($tiprank,'<sup class="spl_sup_text"></sup>','</td>');
$earnings = preg_replace($paterns, '', $earnings);

#techtable
//$techtable = parce($tech,'<td style="text-align: left;">','</td>');
//$techtable = preg_replace($paterns, '', $techtable);

#techanalisis
$html = $tech;
$saw = new nokogiri($html);
$techtable = ($saw->get('tr td a')->toArray());
$techprice = ($saw->get('td span')->toArray());
//$techtable = preg_replace($paterns, '', $techtable);


$cros = file_get_contents("https://www.stockmonitor.com/stock-screener/death-cross-50ma-cross-down-200ma/");
$descros = new nokogiri($cros);
$downcross = ($descros->get('tr td a')->toArray());
$downprice = ($descros->get('td span')->toArray());


#oversold
$ov = file_get_contents("https://www.stockmonitor.com/stock-screener/oversold-momentum-rising/");
$momov = new nokogiri($ov);
$oversold = ($momov->get('tr td a')->toArray());
$oversprice = ($momov->get('td span')->toArray());


#oversold
$ovb = file_get_contents("https://www.stockmonitor.com/stock-screener/overbought-momentum-falling/");
$momovb = new nokogiri($ovb);
$overboug = ($momovb->get('tr td a')->toArray());
$overbprice = ($momovb->get('td span')->toArray());


#index
$i = file_get_contents("https://finviz.com/quote.ashx?t=$u&ty=c&ta=1&p=d");
$in = new nokogiri($i);
$index = ($in->get('span.body-table')->toArray());

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
$signal = ($sin->get('.t-home-table td')->toArray());

?>