
<?php
require "../controller/dashcontroller.php";

var_dump($signalq);


                                                ?>



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





