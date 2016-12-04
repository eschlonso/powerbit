<?php
include("db.php");


$mysql_hostname = $host;
$mysql_user = $user;
$mysql_password = $password;
$mysql_database = $dbname;
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>