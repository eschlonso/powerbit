<?php 
require("SimplePie 1.1.1/simplepie.inc");
error_reporting(true);
require("simplepie_yahoo_weather.inc");
$code = "PEXX0011";
$path = "http://weather.yahooapis.com/forecastrss?u=c&p=";
$feed = new SimplePie();
$feed->set_feed_url($path.$code);
$feed->set_item_class('SimplePie_Item_YWeather');
$feed->init();
$weather = $feed->get_item(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>
<body>
<h3>Condiciones para: <?php echo $weather->get_city(); ?></h3>
<img src="<?php echo $weather->get_condition_image(); ?>">
<ul>
<li>Condicion: <?php echo $weather->get_condition(); ?></li>
<li>Temp: <?php echo $weather->get_temperature(); ?>°C</li>
<li>Humedad: <?php echo $weather->get_humidity(); ?>%</li>
<li>Rising: <?php echo $weather->get_rising(); ?>%</li>
<li>Sunrise: <?php echo $weather->get_sunrise(); ?></li>
<li>Sunset: <?php echo $weather->get_sunset(); ?></li>
</ul>



</body>
</html>
