<?php


date_default_timezone_set('America/Argentina/Buenos_Aires'); 




error_reporting(0);
require("SimplePie 1.1.1/simplepie.inc");
error_reporting(true);
require("simplepie_yahoo_weather.inc");
$code = "465703";
$path = "http://weather.yahooapis.com/forecastrss?u=c&w=";
$feed = new SimplePie();
$feed->set_feed_url($path.$code);
$feed->set_item_class('SimplePie_Item_YWeather');
$feed->init();
function time2minuts($time) {
$minuts = 0;
$atime = explode(" ", $time);
if (strtolower($atime[1]) == "pm") {
$minuts = 12*60;
}
$ttime = explode(":", $atime[0]);
$minuts = $minuts + (int)$ttime[0]*60 + (int)$ttime[1];
return $minuts;
}
$weather = $feed->get_item(0);
$fore = $weather->get_forecasts();
$unit = $weather->get_units_temp();
$ampm = "n";  // indica noche
$icon = $weather->get_condition_code();
 // Calculamos la hora de Lima en minutos
 
 
 //NEGRO PUTO
 /*
$curday = 2*60 + time2minuts(date("g:i a"));
$iniday = time2minuts($weather->get_sunrise());
$endday = time2minuts($weather->get_sunset());
if ($curday> $iniday && $curday <$endday ) {
$ampm = "d"; // indica dia
}*/


//ISAIAS
/*
$date = '2pm';
echo date('H:i:s', strtotime($date));
*/

$curday = date("H:i:s");
$iniday = date('H:i:s', strtotime($weather->get_sunrise()));
$endday = date('H:i:s', strtotime($weather->get_sunset()));
if (strtotime($curday)> strtotime($iniday) && strtotime($curday) < strtotime($endday) ) {
$ampm = "d"; // indica dia
}

//echo "//".$curday."//".$iniday."//".$curday."//".$endday ;
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yahoo Weather</title>
<style type="text/css">
<!--
body {
	font-family: "Trebuchet MS", Tahoma, Verdana;
	font-size: 12px;
	font-weight:bold; 
	color: #000000;
	text-decoration: none;
	background-color: #FFFFFF;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
#weather {
	width: 240px;
	height: 120px;
}
#current {
	width: 240px;
	height: 120px;
	text-align: right;
	color:#000000;
	font-weight: bold;
}
#current #temp {
	font-size: 24px;
	font-style: normal;


}
#current #fore {

	font-size: 11px;
}
#current #city {

}
-->
</style>
</head>
<body>
<?php //echo date("s");?>

<table width="" border="1" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td valign="top" ><div id="weather" style="background:url('icon<?php echo $ampm; ?>.png');background-size: 100% 100%; width:150px;">
	


	<div id="current" style="position:absolute; margin-top:15px; width:115px; height:95px;background:url('http://l.yimg.com/us.yimg.com/i/us/nws/weather/gr/<?php echo $icon.$ampm.".png"; ?>');background-size: 150px 105px;background-repeat:no-repeat;"></div>



<div style=" position:absolute; margin-top:16px; text-align:right; font-size:12px; color:#000000; width:145px; font-weight:bold;">
	<div id="temp" style="font-weight:bold; font-size:18px;"><?php echo $weather->get_temperature(); ?>&deg;<?php echo $unit; ?></div>
	<div id="fore"><?php echo $fore[0]->get_low()."&deg;".$unit; ?> - <?php echo $fore[0]->get_high()."&deg;".$unit; ?></div>
	<div id="fore">V. <?php echo $weather->get_wind_speed()." ".$weather->get_units_speed(); ?></div>
	<div id="fore">Humedad <?php echo $weather->get_humidity(); ?>%</div>
	<div id="fore"><?php echo $weather->get_sunrise(); ?> - <?php echo $weather->get_sunset(); ?></div>
	<div id="city"><?php //echo $weather->get_city(); //$weather->get_country(); ?></div>
</div>



<div style=" position:absolute;font-weight:bold;">	
ahora</div>


	</div>
	</td>
    <td valign="top" align="center">




<div style=" position:absolute;font-weight:bold;">	
<?php 


$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
//$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 echo $dias[date('w')];

 ?></div>

<div style=" position:absolute; margin-top:90px;font-weight:bold;">	
<?php   echo $fore[0]->get_low(); ?>º - <?php   echo $fore[0]->get_high(); ?>º
</div>	

<?php   //echo $fore[0]->get_code(); ?>
<div  style=" margin-top:15px; width:115px; height:95px;background:url('http://l.yimg.com/us.yimg.com/i/us/nws/weather/gr/<?php   echo $fore[0]->get_code().$ampm.".png"; ?>'); background-size: 150px 105px;background-repeat:no-repeat;"></div>


	</td>
    <td valign="top">
	
	<div style=" position:absolute;font-weight:bold;">	
		<?php
//date_default_timezone_set('America/Argentina/Buenos_Aires');
//setlocale(LC_TIME, 'es_ES.UTF-8');
/*
$config->timezone = 'America/Argentina/Buenos_Aires';
setlocale(LC_ALL, 'es_ES');


echo "<br>".strftime("%A %d de %B del %Y");
*/



echo $dias[date('w', strtotime('+1 day'))];

//echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
//Salida: Viernes 24 de Febrero del 2012



		 //echo date('l'); ?>
</div>

<div style=" position:absolute; margin-top:90px;font-weight:bold;">	
<?php   echo $fore[1]->get_low(); ?>º - <?php   echo $fore[1]->get_high(); ?>º
</div>	

<?php  // echo $fore[1]->get_code(); ?>
<div  style=" margin-top:15px;width:115px; height:95px;background:url('http://l.yimg.com/us.yimg.com/i/us/nws/weather/gr/<?php   echo $fore[1]->get_code().$ampm.".png"; ?>');  background-size: 150px 105px;background-repeat:no-repeat;"></div>




	
	</td>
    <td valign="top">
	
	<div style=" position:absolute;font-weight:bold;">	<?php echo $dias[date('w', strtotime('+2 day'))]; ?></div>
<div style=" position:absolute; margin-top:90px;font-weight:bold;">	
<?php   echo $fore[2]->get_low(); ?>º - <?php   echo $fore[2]->get_high(); ?>º
</div>

<?php  // echo $fore[2]->get_code(); ?>
<div  style=" margin-top:15px;width:115px; height:95px;background:url('http://l.yimg.com/us.yimg.com/i/us/nws/weather/gr/<?php   echo $fore[2]->get_code().$ampm.".png"; ?>');  background-size: 150px 105px;background-repeat:no-repeat;"></div>


</td>
  </tr>
</table>


<!-- 
<script>setTimeout('document.location.reload()',120000); </script>
-->


</body>
</html>
