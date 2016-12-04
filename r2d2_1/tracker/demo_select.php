 <?php
include("db.php");

global $host,$user,$password,$dbname;

$dbHost = $host; // usually localhost
$dbUsername = $user;
$dbPassword = $password;
$dbDatabase = $dbname;
$db = mysql_connect($dbHost, $dbUsername, $dbPassword) or die ("Unable to connect to Database Server.");
mysql_select_db ($dbDatabase, $db) or die ("Could not select database.");

$sql_check = mysql_query("SELECT * FROM clientes order by id ASC");


//if(isSet($_POST['content'])){
	//$content=$_POST['content'];

	//mysql_query("insert into messages(msg) values ('$content')");

	$sql_in= mysql_query("SELECT * FROM clientes order by nombre ASC");
	$a=0;
	while ($fila = mysql_fetch_assoc($sql_in)) {
	$r[$a]["id"]=$fila["id"];
	$r[$a]["nombre"]=$fila["nombre"];
	$a++;
	}
	//$r=mysql_fetch_array($sql_in);

	//var_dump($r);
	//print_r($r);

//}

//var_dump($sql_check);
?>
<!--
<table cellpadding="0" cellspacing="0" width="100px">-->
 <?php
  for ($i = 0; $i <= count($r)-1; $i++) { ?>
  <div class="clientes"><b><a href="?idc=<?php echo $r[$i]['id']; ?>"><?php echo $r[$i]['nombre']; ?></a></b></div>
<!--<tr class="comment">
<td style="padding:14px;" class="comment_box" align="left"></td>
</tr>-->
 <?php }
 ?>
 <!--
</table>
-->