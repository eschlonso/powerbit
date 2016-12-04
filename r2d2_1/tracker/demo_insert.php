 <?php
$dbHost = 'localhost'; // usually localhost
$dbUsername = 'root';
$dbPassword = '';
$dbDatabase = 'generathor';
$db = mysql_connect($dbHost, $dbUsername, $dbPassword) or die ("Unable to connect to Database Server.");
mysql_select_db ($dbDatabase, $db) or die ("Could not select database.");

$sql_check = mysql_query("SELECT * FROM clientes order by id desc");


if(isSet($_POST['content'])){
	$content=$_POST['content'];

	mysql_query("insert into clientes(nombre) values ('$content')");

	$sql_in= mysql_query("SELECT * FROM clientes order by id desc");
	$r=mysql_fetch_array($sql_in);

	//var_dump($r);
	//print_r($r)

}

//var_dump($sql_check);
?>
  <div class="clientes"><b><a href="?idc=<?php echo $r['id']; ?>"><?php echo $r['nombre']; ?></a></b></div>