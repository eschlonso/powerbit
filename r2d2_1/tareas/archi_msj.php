<?php 
include("db.php");


//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");


$textoo=$_POST['pages'];
$texto3=explode(';', $textoo);
$texto=$texto3[0];
$texto1=$texto3[1];

echo json_encode(array("name"=>$texto,"time"=>$texto1));



$query="UPDATE mis_tareas SET archivado='".$texto."' WHERE id='".$texto1."' ;";
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
    echo "Error de BD, no se pudo consultar la base de datos\n";
    echo "Error MySQL: " . mysql_error();
    exit;
}






 ?>