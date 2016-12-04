

	<?php





if( $_SERVER['SERVER_NAME'] == "localhost"){//..
$host="127.0.0.1";
$user="root";
$password="";
$dbname="generathor";
}else{
$host="localhost";
$user="ceramic8_user";
$password="123456abc";
$dbname="ceramic8_generathor";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");






$filtro=" ORDER BY orden DESC";
$tablename="links";
//$filtro=" ORDER BY id LIMIT 20,10";

$query="SELECT * FROM $tablename $filtro LIMIT 1;";
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


	 $ultimaposc=intval($fila["orden"])+1;
	//$ultimaposc=intval($fila["posicion"])+1;		

	
}

mysql_free_result($resultado);
//print_r($tareas);



















$texto=$_POST['pages'];

echo json_encode(array("name"=>$texto,"time"=>$texto));

$minew=explode('!', $texto);

	//TABLA OFERTAS
	$tablename="links";
	//$filtro="WHERE dni='".$dni."'";
	$query="INSERT INTO $tablename (titulo,link,orden,categoria) VALUES ('".$minew[0]."','".$minew[1]."','".$ultimaposc."','".$minew[2]."');";
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


