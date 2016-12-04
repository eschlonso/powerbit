<?php 


include("db.php");
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");


$texto=$_POST['pages'];


echo json_encode(array("name"=>$texto,"time"=>$texto));








$tablename="mis_tareas";
$filtro=" ";
$query="DELETE FROM $tablename WHERE id='".$texto."';";
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

//mysql_free_result($resultado);


?>