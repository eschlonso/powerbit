<?php 



//tabla



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


if (isset($_GET['s'])){
$filtro="WHERE categoria='".$_GET['s']."' order by orden";

}else{
$filtro="order by orden";

}

$tablename="links";
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
  $links[$a]["id"]=$fila["id"];
  $links[$a]["titulo"]=$fila["titulo"]; 
  $links[$a]["link"]=$fila["link"];    
  $a++;
}

mysql_free_result($resultado);


 for ($i = 1; $i <= count($links); $i++) {
	$titulo=$links[$i]['titulo'];
	$link=$links[$i]['link'];
	echo "<input type='button' class='btn' name='Submit3432333' value='$titulo' onClick='window.open(\"http://$link\",\"_blank\")'>";
}
?>