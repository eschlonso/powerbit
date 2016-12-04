<?php 



date_default_timezone_set('America/Argentina/Buenos_Aires'); 
error_reporting(0);


include("db.php");



function getUltimoDiaMes($elAnio,$elMes) {
  return date("d",(mktime(0,0,0,$elMes+1,1,$elAnio)-1));
}




function fecha_esp($fecha){
$a=date("d-m-y",strtotime($fecha));

return $a;
}




 function dameingresos($dia,$opt){
 
global $host,$user,$password,$dbname;
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
 
 $run=explode('-',$dia);

//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE fecha BETWEEN '".$run[0]."-".$run[1]."-01 00:00:00' AND '".$dia." 23:59:59' AND op='$opt' ORDER BY fecha DESC ";
$tablename="finanzas_ingresos";
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
$totgasto=0;
while ($fila = mysql_fetch_assoc($resultado)) {
  $gastos[$a]["id"]=$fila["id"];
  $gastos[$a]["fecha"]=$fila["fecha"];  
  $gastos[$a]["saldo"]=$fila["saldo"];  
  $totgasto=$totgasto+$fila["saldo"];
  $gastos[$a]["descripcion"]=$fila["descripcion"];    
  $a++;
}

mysql_free_result($resultado);

//print_r($gastos);









$total=$totgasto;//

 return $total;
 
 
 
 
 }

 ///////////////////////////////////////////////////////

 function dameganancias($ing,$gast){



$cuenta=$ing-$gast;


  return $cuenta;

 }



///////////////////////////////////////////////////////


 function damegastos($dia,$opt){
 
global $host,$user,$password,$dbname;
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
 
 $run=explode('-',$dia);

//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE fecha BETWEEN '".$run[0]."-".$run[1]."-01 00:00:00' AND '".$dia." 23:59:59' AND op='$opt' ORDER BY fecha DESC ";
$tablename="finanzas_gastos";
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
$totgasto=0;
while ($fila = mysql_fetch_assoc($resultado)) {
  $gastos[$a]["id"]=$fila["id"];
  $gastos[$a]["fecha"]=$fila["fecha"];  
  $gastos[$a]["saldo"]=$fila["saldo"];  
  $totgasto=$totgasto+$fila["saldo"];
  $gastos[$a]["descripcion"]=$fila["descripcion"];    
  $a++;
}

mysql_free_result($resultado);

//print_r($gastos);









$total=$totgasto;//

 return $total;
 
 
 
 
 }

 ///////////////////////////////////////////////////////

 function damecaja($dia){



$date1 = new DateTime("2014-11-21");
$date2 = new DateTime($dia);


  if ($date2>=$date1){

$caja=dameingresos($dia,0)-damegastos($dia,2);

  }else{


$caja=damesaldo(date(($dia)),0);

  }

  return $caja;




 }



 function damesaldo($dia,$opt){

  //echo $dia;
 
global $host,$user,$password,$dbname;
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
 
 
$filtro="WHERE fecha<'".$dia."  23:59:59' and op='$opt' ORDER BY fecha DESC LIMIT 1 ";
//$filtro=" ORDER BY fecha DESC ";
$tablename="finanzas_ajustecaja";
//$filtro=" ORDER BY id LIMIT 20,10";

$query="SELECT * FROM $tablename $filtro;";
//echo $query;



/*
$pr_id = 9;
$pr_id = sprintf("%02d", $pr_id);
echo $pr_id;
*/


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
  $ajustecaja[$a]["id"]=$fila["id"];
  $ajustecaja[$a]["fecha"]=$fila["fecha"];  
  $ajustecaja[$a]["saldo"]=$fila["saldo"];  
  $ajustecaja[$a]["descripcion"]=$fila["descripcion"];      
  $a++;
}

mysql_free_result($resultado);

//var_dump($ajustecaja);
//echo $ajustecaja[1]["saldo"];



//echo $ff;




  $date1 = new DateTime("2014-11-21");
$date2 = new DateTime($dia);


if($date2>=$date1 && $opt<>1){


//echo "asdasdsadsa";
//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE fecha BETWEEN '".$ajustecaja[1]["fecha"]."' AND '".$dia." 23:59:59' AND op='2'  ORDER BY fecha DESC ";
$tablename="finanzas_gastos";
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
$totgasto=0;
while ($fila = mysql_fetch_assoc($resultado)) {





  $gastos[$a]["id"]=$fila["id"];
  $gastos[$a]["fecha"]=$fila["fecha"];  
  $gastos[$a]["saldo"]=$fila["saldo"];  
  $totgasto=$totgasto+$fila["saldo"];
  $gastos[$a]["descripcion"]=$fila["descripcion"];    
  $a++;




}

mysql_free_result($resultado);

//print_r($gastos);

//ECHO $totgasto;


}else{



//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE fecha BETWEEN '".$ajustecaja[1]["fecha"]."' AND '".$dia." 23:59:59' AND op='$opt' ORDER BY fecha DESC ";
$tablename="finanzas_gastos";
//$filtro=" ORDER BY id LIMIT 20,10";

$query="SELECT * FROM $tablename $filtro;";
//echo $query;
//echo "asdasdsadsa";
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
$totgasto=0;
while ($fila = mysql_fetch_assoc($resultado)) {





  $gastos[$a]["id"]=$fila["id"];
  $gastos[$a]["fecha"]=$fila["fecha"];  
  $gastos[$a]["saldo"]=$fila["saldo"];  
  $totgasto=$totgasto+$fila["saldo"];
  $gastos[$a]["descripcion"]=$fila["descripcion"];    
  $a++;




}

mysql_free_result($resultado);

//print_r($gastos);




}


//ECHO $totgasto;

if($date2>=$date1 && $opt<>1){

$totingreso=0;

}else{

//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
//$filtro="WHERE fecha>'".$ajustecaja[1]["fecha"]."' ORDER BY fecha DESC ";
$filtro="WHERE fecha BETWEEN '".$ajustecaja[1]["fecha"]."' AND '".$dia." 23:59:59' and op='$opt' ORDER BY fecha DESC ";
$tablename="finanzas_ingresos";
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
  $ingresos[$a]["id"]=$fila["id"];
  $ingresos[$a]["fecha"]=$fila["fecha"];  
  $ingresos[$a]["saldo"]=$fila["saldo"];  
  $totingreso=$totingreso+$fila["saldo"]; 
  $ingresos[$a]["descripcion"]=$fila["descripcion"];    
  $a++;
}

mysql_free_result($resultado);

//print_r($ingresos);

//echo $ajustecaja[1]["saldo"].",".$totingreso." - ".$totgasto."<br>";
}



$total=$ajustecaja[1]["saldo"]+$totingreso-$totgasto;//

 return $total;
 
 
 
 
 }





?>