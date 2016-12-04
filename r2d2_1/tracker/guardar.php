

	<?php




include("db.php");
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");





/*
$filtro=" WHERE categoria='1' and subcategoria='0' ORDER BY posicion ASC";
$tablename="mis_tareas";
//$filtro=" ORDER BY id LIMIT 20,10";

$query="SELECT * FROM $tablename $filtro;";
//echo $query;

if (!$enlace = mysql_connect($host, $user, $password)) {
    echo 'No pudo conectarse a mysql';
    exit;
}

if (!mysql_select_db($dbname, $link)) {
    echo 'No pudo seleccionar la base de datos';
    exit;
}

$resultado = mysql_query($query, $enlace);

if (!$resultado) {
    echo "Error de BD, no se pudo consultar la base de datos\n";
    echo "Error MySQL: " . mysql_error();
    exit;
}

while ($fila = mysql_fetch_assoc($resultado)) {


	
	$ultimaposc=intval($fila["posicion"])+1;		

	
}

mysql_free_result($resultado);
//print_r($tareas);


*/
















$texto=$_POST['pages'];

echo json_encode(array("name"=>$texto,"time"=>$texto));

$minew=explode('!', $texto);

	//TABLA OFERTAS
	$tablename="mis_relojes2";
	//$filtro="WHERE dni='".$dni."'";
	$query="INSERT INTO $tablename (fecha,d,a,proyecto) VALUES ('".$minew[2]."','".$minew[0]."','".$minew[1]."','".$minew[3]."');";
	//echo $q
	mysql_select_db($dbname,$link);
	mysql_query($query,$link);
	$my_error = mysql_error($link);
	if(!empty($my_error)) {
	//cartel(3,"Hubo un error al insertar el registro. $my_error"); 
	//echo "Hubo un error al insertar el registro. $my_error";
	} else {
	//echo "GUARDADO.";
	//echo cartel(3,"SSEEEEEEEEE");
	}
?>


