<?php 


include("db.php");
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");




$cut= explode('!', $_POST['pages']);
//$texto3=explode(';', $textoo);
//$texto=$texto3[0];
//$texto1=$texto3[1];
$texto=$cut[0];
$valor=$cut[1];
$proyecto=$cut[2];






//BUSCAR



//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE fecha='".$texto."' and proyecto='".$proyecto."'";
$tablename="mis_relojes";
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
$a=1;

while ($fila = mysql_fetch_assoc($resultado)) {
	$mis_relojes[$a]["id"]=$fila["id"];
	$mis_relojes[$a]["fecha"]=$fila["fecha"];	
	$mis_relojes[$a]["estado"]=$fila["estado"];		
	$a++;
}

mysql_free_result($resultado);

//print_r($gastos);










echo json_encode(array("name"=>$texto,"time"=>$texto));


if(!isset($mis_relojes)){
//insert





	//TABLA OFERTAS
	$tablename="mis_relojes";
	//$filtro="WHERE dni='".$dni."'";
	$query="INSERT INTO $tablename (estado,fecha,proyecto) VALUES ('".$valor."','".$texto."','".$proyecto."');";
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

}else{
//update


$query="UPDATE mis_relojes SET estado='".$valor."' WHERE fecha='".$texto."' ;";
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


}





 ?>