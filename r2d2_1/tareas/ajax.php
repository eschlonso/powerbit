


<?php
include("db.php");

//$respuesta->mensaje = "yes";
	//echo json_encode($respuesta);


	mysql_connect($host,$user,$password);
	mysql_select_db($dbname) or die( "Unable to select database");
	
	parse_str($_POST['pages'], $pageOrder);
	$lala=$_POST['pages'];
	$reverse = array_reverse($pageOrder['page']);
echo json_encode(array("name"=>$lala,"time"=>$reverse));

	foreach ($reverse as $key => $value) {
		mysql_query("UPDATE mis_tareas SET `posicion` = '$key' WHERE `id` = '$value'") or die(mysql_error());
	}





	
?>


