<?php 

date_default_timezone_set('America/Argentina/Buenos_Aires'); 




if( $_SERVER['SERVER_NAME'] == "localhost"){//..
$host="127.0.0.1";
$user="root";
$password="";
$dbname="generathor";
}else{
$host="localhost";
$user="todohoga_user1";
$password="KOHPpIW=SR5u";
$dbname="todohoga_db";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");




$cut= explode('!', $_POST['pages']);
//$texto3=explode(';', $textoo);
//$texto=$texto3[0];
//$texto1=$texto3[1];
$proyecto=$cut[0];
$proyecto1=$cut[1];






//BUSCAR



//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE proyecto='".$proyecto."' and a='00:00:00' ORDER BY id DESC";
$tablename="mis_relojes2";
//$filtro=" ORDER BY id LIMIT 20,10";

$query="SELECT * FROM $tablename $filtro LIMIT 0,1;";
//echo $query;
echo json_encode($query);
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
$a=1;

while ($fila = mysql_fetch_assoc($resultado)) {
	$mis_relojes[$a]["id"]=$fila["id"];
	$mis_relojes[$a]["fecha"]=$fila["fecha"];	
	$mis_relojes[$a]["d"]=$fila["d"];		
	$mis_relojes[$a]["a"]=$fila["a"];	
	$a++;
}

mysql_free_result($resultado);
//echo json_encode($mis_relojes);
//print_r($gastos);










//echo json_encode(array("name"=>$fecha,"time"=>$descrip));


if(!isset($mis_relojes)){
//insert





	//TABLA OFERTAS
	$tablename="mis_relojes2";
	//$filtro="WHERE dni='".$dni."'";
	$query="INSERT INTO $tablename (d,fecha,proyecto) VALUES ('".date('H:i:s')."','".date('Y-m-d')."','".$proyecto."');";
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

	echo json_encode('insert');

}else{
//update


$query="UPDATE mis_relojes2 SET a='".date('H:i:s')."' WHERE id='".$mis_relojes[1]["id"]."' ;";
//echo $query;
//$result=mysql_db_query ($dbname, $query, $link);




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
    echo "aaaError de BD, no se pudo consultar la base de datos\n";
    echo "Error MySQL: " . mysql_error();
    exit;
}
echo json_encode('update');

}





 ?>