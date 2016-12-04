


	<?php





include("db.php");
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");





/////////////////////////////



//echo "///".$_GET['h']."///";
$va=$_GET['h'];

if (isset($_GET['h'])){

if(isset($_GET['id'])){

$id=$_GET['id'];

}else{
$id=0;

}



$pum=" categoria=$va and subcategoria=".$id." ";


$redi="?h=$va";
$redi1="&h=$va";
$subc="id=".$id;
$guardasubc=$id;
$categoria="$va";
}else{
if(isset($_POST['filtro'])){

if($_POST['filtro']=="0"){
$pum=" categoria<>3";
$redi="";
$redi1="";
$subc="";
$guardasubc="";
$categoria="";
}else{
$pum=" categoria<>3 AND categoria=".$_POST['filtro']." ";
$redi="";
$redi1="";
$subc="";
$guardasubc="";
}
}else{


	
$pum=" categoria=1 ";
$redi="";
$redi1="";
$subc="";
$guardasubc="0";
$categoria="1";
}

}


//echo $subc;

$filtro=$pum."";


//echo $filtro;

//echo json_encode(array("name"=>$filtro,"time"=>$filtro));

///////////////////////////////





$filtro=" WHERE $filtro ORDER BY posicion ASC";
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



















$texto=$_POST['pages'];

echo json_encode(array("name"=>$texto,"time"=>$filtro));



	//TABLA OFERTAS
	$tablename="mis_tareas";
	//$filtro="WHERE dni='".$dni."'";
	$query="INSERT INTO $tablename (tarea,finalizado,archivado,categoria,subcategoria,fecha,posicion) VALUES ('".$texto."',0,0,'".$categoria."','".$guardasubc."','".date('Y-m-d H:i:s')."','".$ultimaposc."');";
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


