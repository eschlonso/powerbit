<html>
<head>
<style type="text/css">
<!--
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}


.tablita{
width:800px;
display: none;
}


-->
</style>



 <script type="text/javascript" src="https://www.google.com/jsapi"></script>




<div id='lala'></div>



 <script type="text/javascript">


document.getElementById('lala').style.backgroundColor="red"; 

//alert('seo');

 </script>
<?php 

date_default_timezone_set('America/Argentina/Buenos_Aires'); 
error_reporting(0);


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




//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro=" WHERE op='0' ORDER BY fecha DESC";
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
while ($fila = mysql_fetch_assoc($resultado)) {
	$gastos[$a]["id"]=$fila["id"];
	$gastos[$a]["fecha"]=$fila["fecha"];	
	$gastos[$a]["saldo"]=$fila["saldo"];	
  $gastos[$a]["op"]=$fila["op"];  
	$gastos[$a]["descripcion"]=$fila["descripcion"];		
	$a++;
}

mysql_free_result($resultado);



//print_r($gastos);
//echo "<p>";



//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE op='0' ORDER BY fecha DESC";
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
  $ingresos[$a]["op"]=$fila["op"];  	
		$ingresos[$a]["descripcion"]=$fila["descripcion"];		
	$a++;
}

mysql_free_result($resultado);




//print_r($ingresos);







//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE op='0' ORDER BY fecha DESC ";
$tablename="finanzas_ajustecaja";
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
	$ajustecaja[$a]["id"]=$fila["id"];
	$ajustecaja[$a]["fecha"]=$fila["fecha"];	
	$ajustecaja[$a]["saldo"]=$fila["saldo"];
  $ajustecaja[$a]["op"]=$fila["op"];    	
		$ajustecaja[$a]["descripcion"]=$fila["descripcion"];			
	$a++;
}

mysql_free_result($resultado);




//print_r($ajustecaja);




///////////////////////////////////// CAJA AHORROS


//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE op='1' ORDER BY fecha DESC";
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
while ($fila = mysql_fetch_assoc($resultado)) {
	$gastos_op1[$a]["id"]=$fila["id"];
	$gastos_op1[$a]["fecha"]=$fila["fecha"];	
	$gastos_op1[$a]["saldo"]=$fila["saldo"];	
  $gastos_op1[$a]["op"]=$fila["op"];  
	$gastos_op1[$a]["descripcion"]=$fila["descripcion"];		
	$a++;
}

mysql_free_result($resultado);



//print_r($gastos);
//echo "<p>";



//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE op='1' ORDER BY fecha DESC";
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
	$ingresos_op1[$a]["id"]=$fila["id"];
	$ingresos_op1[$a]["fecha"]=$fila["fecha"];	
	$ingresos_op1[$a]["saldo"]=$fila["saldo"];	
  $ingresos_op1[$a]["op"]=$fila["op"];  	
		$ingresos_op1[$a]["descripcion"]=$fila["descripcion"];		
	$a++;
}

mysql_free_result($resultado);




//print_r($ingresos_op1);







//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE op='1' ORDER BY fecha DESC ";
$tablename="finanzas_ajustecaja";
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
	$ajustecaja_op1[$a]["id"]=$fila["id"];
	$ajustecaja_op1[$a]["fecha"]=$fila["fecha"];	
	$ajustecaja_op1[$a]["saldo"]=$fila["saldo"];
  $ajustecaja_op1[$a]["op"]=$fila["op"];    	
		$ajustecaja_op1[$a]["descripcion"]=$fila["descripcion"];			
	$a++;
}

mysql_free_result($resultado);




//print_r($ajustecaja);

?>








<?php






/*
# Utilizando mktime
 echo "<p>date('Y-m-d', mktime(0, 0, 0, date('m'),date('d')-1,date('Y')))".date('Y-m-d', mktime(0, 0, 0, date('m'),date('d')-1,date('Y')))."</p>";
  # Utilizando el numero de segundos 
  echo "<p>date('Y-m-d',time()-(60*60*24))".date('Y-m-d',time()-(60*60*24))."</p>"; 
  # Utilizando strtotime 
  echo "<p>date('Y-m-d', strtotime('yesterday'))".date('Y-m-d', strtotime('yesterday'))."</p>"; echo "<p>date('Y-m-d', strtotime('-1 day'))".date('Y-m-d', strtotime('-1 day'))."</p>"; 
  # Tambien podemos utilizar strtotime para movernos por varios dias, meses, años, etc... 
  # Mañana
   echo "<p>date('Y-m-d', strtotime('+1 day'))".date('Y-m-d', strtotime('+1 day'))."</p>";
    # Aumentamos una semana la fecha actual 
	echo "<p>date('Y-m-d', strtotime('+1 week'))".date('Y-m-d', strtotime('+1 week'))."</p>"; 
	# Un año atras
	 echo "<p>date('Y-m-d', strtotime('-1 year'))".date('Y-m-d', strtotime('-1 year'))."</p>";
	  # La ultima lune
	   echo "<p>date('Y-m-d', strtotime('last Monday'))".date('Y-m-d', strtotime('last Monday'))."</p>";


echo "<p>///<p>";

	echo "<p>date('Y-m-d', strtotime('+1 week'))".date('Y-m-d', strtotime('-1 week'))."</p>"; 
	
	
	*/
	function getUltimoDiaMes($elAnio,$elMes) {
  return date("d",(mktime(0,0,0,$elMes+1,1,$elAnio)-1));
}



function fecha_esp($fecha){
$a=date("d-m-y",strtotime($fecha));

return $a;
}

 
//Ejemplo de uso
/*
$ultimoDia = getUltimoDiaMes(2013,2);
echo $ultimoDia."<br/>";
echo getUltimoDiaMes(2012,09)."<br/>";
*/

/*
Resultado:
31
30
*/




//print_r($myarr);



 function dameingresos($dia,$opt){
 
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
 
 $run=explode('-',$dia);

//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE fecha BETWEEN '".$run[0]."-".$run[1]."-01 23:59:59' AND '".$dia." 23:59:59' AND op='$opt' ORDER BY fecha DESC ";
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


 function damegastos($dia,$opt){
 
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
 
 $run=explode('-',$dia);

//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE fecha BETWEEN '".$run[0]."-".$run[1]."-01 23:59:59' AND '".$dia." 23:59:59' AND op='$opt' ORDER BY fecha DESC ";
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



 function damesaldo($dia,$opt){
 
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
 
 
$filtro="WHERE fecha<'".$dia."  23:59:59' and op='$opt' ORDER BY fecha DESC LIMIT 1 ";
//$filtro=" ORDER BY fecha DESC ";
$tablename="finanzas_ajustecaja";
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
	$ajustecaja[$a]["id"]=$fila["id"];
	$ajustecaja[$a]["fecha"]=$fila["fecha"];	
	$ajustecaja[$a]["saldo"]=$fila["saldo"];	
	$ajustecaja[$a]["descripcion"]=$fila["descripcion"];			
	$a++;
}

mysql_free_result($resultado);

//print_r($ajustecaja);
//echo $ajustecaja[1]["saldo"];


//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE fecha BETWEEN '".$ajustecaja[1]["fecha"]."' AND '".$dia." 23:59:59' AND op='$opt' ORDER BY fecha DESC ";
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
$totingreso=0;
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




$total=$ajustecaja[1]["saldo"]+$totingreso-$totgasto;//

 return $total;
 
 
 
 
 }
 
 
 
 $myarr[0]=date('Y-m-d');
$myarr[1]=date('Y-m-d', strtotime('-1 day'));
$myarr[2]=date('Y-m-d', strtotime('-2 day'));
$myarr[3]=date('Y-m-d', strtotime('-3 day'));
$myarr[4]=date('Y-m-d', strtotime('-4 day'));
$myarr[5]=date('Y-m-d', strtotime('-5 day'));
$myarr[6]=date('Y-m-d', strtotime('-6 day'));
$myarr[7]=date('Y-m-d', strtotime('-7 day'));



 for ($i = 0; $i <= count($myarr)-1; $i++) {
  //echo $i;
  $NewMyArr[$i]['fecha']=$myarr[$i];
   $NewMyArr[$i]['saldo']=damesaldo($myarr[$i],0);
    $NewMyArr[$i]['saldo_1']=damesaldo(date($myarr[$i]),1);
 }
 
 
//print_r($NewMyArr);
 
 
 
 
 
 
 
 
 
 
 
 
 
 ////////////////////////////////////////////////////////////////////////////////////
 
 
$myarr2_2[0]=date('Y-m-d', strtotime('-30 day'));
$myarr2_2[1]=date('Y-m-d', strtotime('-29 day'));
$myarr2_2[2]=date('Y-m-d', strtotime('-28 day'));
$myarr2_2[3]=date('Y-m-d', strtotime('-27 day'));
$myarr2_2[4]=date('Y-m-d', strtotime('-26 day'));
$myarr2_2[5]=date('Y-m-d', strtotime('-25 day'));
$myarr2_2[6]=date('Y-m-d', strtotime('-24 day'));
$myarr2_2[7]=date('Y-m-d', strtotime('-23 day'));
$myarr2_2[8]=date('Y-m-d', strtotime('-22 day'));
$myarr2_2[9]=date('Y-m-d', strtotime('-21 day'));
$myarr2_2[10]=date('Y-m-d', strtotime('-20 day'));
$myarr2_2[11]=date('Y-m-d', strtotime('-19 day'));
$myarr2_2[12]=date('Y-m-d', strtotime('-18 day'));
$myarr2_2[13]=date('Y-m-d', strtotime('-17 day'));
$myarr2_2[14]=date('Y-m-d', strtotime('-16 day'));
$myarr2_2[15]=date('Y-m-d', strtotime('-15 day'));
$myarr2_2[16]=date('Y-m-d', strtotime('-14 day'));
$myarr2_2[17]=date('Y-m-d', strtotime('-13 day'));
$myarr2_2[18]=date('Y-m-d', strtotime('-12 day'));
$myarr2_2[19]=date('Y-m-d', strtotime('-11 day'));
$myarr2_2[20]=date('Y-m-d', strtotime('-10 day'));
$myarr2_2[21]=date('Y-m-d', strtotime('-9 day'));
$myarr2_2[22]=date('Y-m-d', strtotime('-8 day'));
$myarr2_2[23]=date('Y-m-d', strtotime('-7 day'));
$myarr2_2[24]=date('Y-m-d', strtotime('-6 day'));
$myarr2_2[25]=date('Y-m-d', strtotime('-5 day'));
$myarr2_2[26]=date('Y-m-d', strtotime('-4 day'));
$myarr2_2[27]=date('Y-m-d', strtotime('-3 day'));
$myarr2_2[28]=date('Y-m-d', strtotime('-2 day'));
$myarr2_2[29]=date('Y-m-d', strtotime('-1 day'));
$myarr2_2[30]=date('Y-m-d');



 
 
  for ($i = 0; $i <= count($myarr2_2)-1; $i++) {
  
  
   $myarr2[$i]['fecha']=$myarr2_2[$i];
  $myarr2[$i]['saldo']=damesaldo($myarr2_2[$i],0);
      $myarr2[$i]['saldo_1']=damesaldo(date($myarr2_2[$i]),1);
  /*
  $a=strtotime(date('Y-m-').$i);
  //echo $a;
  $b=strtotime(date('Y-m-d'));
  if($b>=$a){
  $myarr2[$i]['fecha']=$i;
  $myarr2[$i]['saldo']=damesaldo(date('Y-m-').$i,0);
  }else{
     $myarr2[$i]['fecha']=$i;
  $myarr2[$i]['saldo']=0;


  }
  
  */
}

//var_dump($myarr2);

$plim=date('Y-m-d');
$myarr3_2[12]=$plim;

$plim=date('Y-m-1', strtotime('-1 month'));
$perm=explode("-",$plim);
$myarr3_2[11]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-2 month'));
$perm=explode("-",$plim);
$myarr3_2[10]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-3 month'));
$perm=explode("-",$plim);
$myarr3_2[9]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-4 month'));
$perm=explode("-",$plim);
$myarr3_2[8]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-5 month'));
$perm=explode("-",$plim);
$myarr3_2[7]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-6 month'));
$perm=explode("-",$plim);
$myarr3_2[6]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-7 month'));
$perm=explode("-",$plim);
$myarr3_2[5]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-8 month'));
$perm=explode("-",$plim);
$myarr3_2[4]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-9 month'));
$perm=explode("-",$plim);
$myarr3_2[3]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-10 month'));
$perm=explode("-",$plim);
$myarr3_2[2]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-11 month'));
$perm=explode("-",$plim);
$myarr3_2[1]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);





//var_dump($myarr3_2);
 
 
 
   for ($i = 1; $i <= count($myarr3_2); $i++) {
   
   $myarr3[$i]['fecha']=$myarr3_2[$i];
   $myarr3[$i]['saldo']=damesaldo(date($myarr3_2[$i]),0);
   $myarr3[$i]['saldo_1']=damesaldo(date($myarr3_2[$i]),1);

  
  /*
  $pepe=getUltimoDiaMes(date('Y'),$i);
    $a=strtotime(date('Y-'.$i.'-'.$pepe));
  //echo $a;
  $b=strtotime(date('Y-m-d'));
  //echo $b;


  
  
  if($b>=$a){
  $myarr3[$i]['fecha']=$i;
  $myarr3[$i]['saldo']=damesaldo(date('Y-m-').$i);
  }else{
     $myarr3[$i]['fecha']=$i;
  $myarr3[$i]['saldo']=0;


  }

  if($b>=$a){

$myarr3[$i]['fecha']=date('Y-'.$i.'-'.$pepe);
$myarr3[$i]['saldo']=damesaldo(date('Y-'.$i.'-'.$pepe),0);
  }else{

if($i==date('m')){
$myarr3[$i]['fecha']=date('Y-'.$i.'-d');
$myarr3[$i]['saldo']=damesaldo(date('Y-'.$i.'-d'),0);
}else{
$myarr3[$i]['fecha']=date('Y-'.$i.'-'.$pepe);
$myarr3[$i]['saldo']=0;
}

 }
 
 
 */
 
 
 
}
//var_dump( $myarr3);

//print_r( $myarr3);
/*
echo "////////////////////////////////////////<p>";
echo damesaldo('2014-01-05');
*/
		  ?>







 <script type="text/javascript">


document.getElementById('lala').style.backgroundColor="blue"; 
//document.getElementById('chart_div').style.backgroundColor="blue"; 

//alert('seo');

 </script>



<script>

h=1;

function agregarcat(){
  //alert(h);

  if (h==1){
$( "#agrega_cat" ).show();

$( "#nombre_cat" ).val('');
//$( "#link" ).val('');
$('#grupo_cat option')[0].selected = true;
$( "#boton1" ).val('Cerrar Agregar +');
h=0;
  }else{

$( "#agrega_cat" ).hide();
$( "#boton1" ).val('Agregar +');

$( "#nombre_cat" ).val('');
$('#grupo_cat option')[0].selected = true;
//$( "#link" ).val('');
h=1;
  }
  

}



function guardarcat(){
  //alert('dasdas');
  
//alert('isa');

//tiki = fecha.split('-');



var fruits=$('#nombre_cat').val()+'!'+$('#grupo_cat').val();
$.post( "guardar_cat.php", 

 { func: "getNameAndTime", pages: fruits },


  function( data ) {
console.log( data.name ); // John
console.log( data.time ); // 2pm

//alert('complete');


h=0;
agregarcat();
 // $( "#agrega_cat" ).hide();



a='g_f';
  MIcarga("gastos_fijos.php",a);



}


,


 "json");


//$('#tarea').val('');













}

</script>









   
    <script type="text/javascript">
     

    google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mes', 'Caja comun','Caja ahorros','Ingresos','gastos'],
<?php 
				  
				  //sort($myarr3);
				   for ($i = 1; $i <= 12; $i++) {
		  echo " ['".fecha_esp($myarr3[$i]['fecha'])."',  ".$myarr3[$i]['saldo'].",".$myarr3[$i]['saldo_1'].",".dameingresos($myarr3[$i]['fecha'],0).",".damegastos($myarr3[$i]['fecha'],0)."],";
		   }


		  ?>

        ]);



      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2,3,4,{
    calc: "stringify",
    sourceColumn: 4,
    type: "string",
    role: "annotation"
}]);






        var options = {
          title: 'Mi Performance Anual.',
          hAxis: {title: '',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0},
          series: {
            0: { color: 'blue' },
            1: { color: 'orange' },
            2: { color: 'green' },
            3: { color: 'red' },
          },

        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(view, options);






      }
      
    </script>
	
	<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Dia', 'Caja comun','Caja ahorros','ingresos','gastos'],
		  		  <?php 
				  
				  sort($NewMyArr);
				   for ($i = 0; $i <= count($NewMyArr)-1; $i++) {
		  echo " ['".fecha_esp($NewMyArr[$i]['fecha'])."',  ".$NewMyArr[$i]['saldo'].",".$NewMyArr[$i]['saldo_1'].",".dameingresos($NewMyArr[$i]['fecha'],0).",".damegastos($NewMyArr[$i]['fecha'],0)."],";
		   }
		  ?>



        ]);




      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2,3,4,{
    calc: "stringify",
    sourceColumn: 4,
    type: "string",
    role: "annotation"
}]);






        var options = {
          title: 'Mi Performance los ultimos 7 dias.',
          hAxis: {title: '',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0},
          series: {
            0: { color: 'blue' },
            1: { color: 'orange' },
            2: { color: 'green' },
            3: { color: 'red' },
          },
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div2'));
        chart.draw(view, options);
      }
    </script>




   





	
	<script type="text/javascript">
	
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Dia', 'Caja comun','Caja ahorros','ingresos','gastos'],
 <?php 
				  
				  sort($myarr2);
				   for ($i = 0; $i <= count($myarr2)-1; $i++) {
		  echo " ['".fecha_esp($myarr2[$i]['fecha'])."',  ".$myarr2[$i]['saldo'].",".$myarr2[$i]['saldo_1'].",".dameingresos($myarr2[$i]['fecha'],0).",".damegastos($myarr2[$i]['fecha'],0)."],";
		   }
		  ?>

        ]);



      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2,3,4,{
    calc: "stringify",
    sourceColumn: 4,
    type: "string",
    role: "annotation"
}]);




        var options = {
          title: 'Mi Performance mensual.',
          hAxis: {title: '',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0},
                    series: {
            0: { color: 'blue' },
            1: { color: 'orange' },
            2: { color: 'green' },
            3: { color: 'red' },
          },
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div1'));
        chart.draw(view, options);
      }
    </script>






















































































  <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("jquery", "1.6.1");
      google.load('visualization', '1', {packages: ['corechart']});
    </script>




    <script type="text/javascript">


  //google.setOnLoadCallback(makeAjaxCall);
    //google.setOnLoadCallback(makeAjaxCall1);
      //  google.setOnLoadCallback(makeAjaxCall2);


    function drawVisualization(dataFromAjax) {
      var data = google.visualization.arrayToDataTable(dataFromAjax);





      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2,3,4,{
    calc: "stringify",
    sourceColumn: 4,
    type: "string",
    role: "annotation"
}]);




        var options = {
          title: 'Mi Performance mensual.',
          hAxis: {title: '',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0},
                    series: {
            0: { color: 'blue' },
            1: { color: 'orange' },
            2: { color: 'green' },
            3: { color: 'red' },
          },
        };


 var chart = new google.visualization.AreaChart(document.getElementById('table'));
        chart.draw(view, options);

/*
      visualization = new google.visualization.Table(document.getElementById('table'));
      visualization.draw(data);

      */
    }



    function actualizartodo(){


    


 
  
     
  makeAjaxCall1();
       //alert("sadsad"); 
     makeAjaxCall();
        makeAjaxCall2();
    }




    function MIcarga(a,b){


      //alert("sadsad");
       //$("#"+b).cargar(a,b);
        mes_gf=$( "#mes_gf" ).val();
        ano_gf=$( "#ano_gf" ).val();
        $("#"+b).load(a+'?fecha='+mes_gf+'-'+ano_gf);
    }

    function makeAjaxCall() {

mes=$( "#mes" ).val();
ano=$( "#ano" ).val();

//alert(opp);

fecha1=new Date();
fecha2=new Date();

fecha2=new Date(ano,mes-1,1);
fecha1=new Date(fecha1.getFullYear(),fecha1.getMonth(),fecha1.getDate());
f1=new Date(fecha2);
f2=new Date(fecha1); 
//alert("ingresa: "+f1+" es: "+f2);


      if(f1<=f2){



      
      //alert(mes);
      $.ajax({url:'test.php?op=1',
              data: {pages: mes+"-"+ano},
              success: function(responseData) {
                         // eval just for testing - make safer
                         var arrayForGviz = eval("(" + responseData + ")");
                         drawVisualization(arrayForGviz);
                          //alert("aqui");
                       }
        });

      }else{

        alert("No se encontraron resultados para la fecha.")
      }
      

    }





     $.ajax({url:'test.php',
              data: {pages: mes+"-"+ano+"-0"},
              success: function(responseData) {
                         // eval just for testing - make safer
                         var arrayForGviz = eval("(" + responseData + ")");
                         drawVisualization(arrayForGviz);
                         alert("here");
                       }
        });








 function makeAjaxCall1() {



//alert(opp);

fecha1=new Date();

//alert("ingresa: "+f1+" es: "+f2);
mes=fecha1.getMonth();
ano=fecha1.getFullYear();

    



      
      //alert(mes);
      $.ajax({url:'test.php?op=0',
              data: {pages: mes+"-"+ano},
              success: function(responseData) {
                         // eval just for testing - make safer
                         var arrayForGviz = eval("(" + responseData + ")");
                         drawVisualization1(arrayForGviz);
                          //alert("aqui");
                       }
        });

    
      

    }







 function makeAjaxCall2() {



//alert(opp);

fecha1=new Date();

//alert("ingresa: "+f1+" es: "+f2);
mes=fecha1.getMonth();
ano=fecha1.getFullYear();

    



      
      //alert(mes);
      $.ajax({url:'test.php?op=2',
              data: {pages: mes+"-"+ano},
              success: function(responseData) {
                         // eval just for testing - make safer
                         var arrayForGviz = eval("(" + responseData + ")");
                         drawVisualization2(arrayForGviz);
                          //alert("aqui");
                       }
        });

    
      

    }




 function drawVisualization1(dataFromAjax) {

  //alert("sevendays");
      var data = google.visualization.arrayToDataTable(dataFromAjax);





      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2,3,4,{
    calc: "stringify",
    sourceColumn: 4,
    type: "string",
    role: "annotation"
}]);




        var options = {
          title: 'Mi Performance 7 dias.',
          hAxis: {title: '',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0},
                    series: {
            0: { color: 'blue' },
            1: { color: 'orange' },
            2: { color: 'green' },
            3: { color: 'red' },
          },
        };


 var chart = new google.visualization.AreaChart(document.getElementById('7dias'));
        chart.draw(view, options);

/*
      visualization = new google.visualization.Table(document.getElementById('table'));
      visualization.draw(data);

      */
    }







    function drawVisualization2(dataFromAjax) {

  //alert("sevendays");
      var data = google.visualization.arrayToDataTable(dataFromAjax);





      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2,3,4,{
    calc: "stringify",
    sourceColumn: 4,
    type: "string",
    role: "annotation"
}]);




        var options = {
          title: 'Mi Performance anual.',
          hAxis: {title: '',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0},
                    series: {
            0: { color: 'blue' },
            1: { color: 'orange' },
            2: { color: 'green' },
            3: { color: 'red' },
          },
        };


 var chart = new google.visualization.AreaChart(document.getElementById('anual'));
        chart.draw(view, options);

/*
      visualization = new google.visualization.Table(document.getElementById('table'));
      visualization.draw(data);

      */
    }



/*
////////////////ULTIMOS 7 DIAS


  google.setOnLoadCallback(makeAjaxCall);


    function drawVisualization(dataFromAjax) {
      var data = google.visualization.arrayToDataTable(dataFromAjax);





      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2,3,4,{
    calc: "stringify",
    sourceColumn: 4,
    type: "string",
    role: "annotation"
}]);




        var options = {
          title: 'Mi Performance mensual.',
          hAxis: {title: '',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0},
                    series: {
            0: { color: 'blue' },
            1: { color: 'orange' },
            2: { color: 'green' },
            3: { color: 'red' },
          },
        };


 var chart = new google.visualization.AreaChart(document.getElementById('7dias'));
        chart.draw(view, options);

    }


*/


    </script>




    <script>
      jQuery.fn.cargar = function(url,mdiv) {
        
            $(document).ready(function(){
             
              mes_gf=$( "#mes" ).val();
              ano_gf=$( "#ano" ).val();
alert(mes_gf+ano_gf);
                  $("#"+mdiv).load(url+'?fecha='+mes_gf+'-'+ano_gf);

});


                  //console.log( data.name ); 
       
      };

      //$("#contenido").cargar("lista.php");




</script>




</head>

<body>




<div aling="center" style="padding-left:280px;">
<table aling="center" width="365" border="3" cellpadding="0" cellspacing="0" bgcolor="#E1E4EC">
  <tr>
    <td width="257"><div align="right" style='font-size:22px;'><b>Actualmente en caja: </b></div></td>
    <td width="100"><div id="total" align="right" style='font-size:22px;'>$0 </div></td>
  </tr>
</table>

<table width="365" border="3" cellpadding="0" cellspacing="0" bgcolor="#E1E4EC">
  <tr>
    <td width="257"><div align="right" style='font-size:22px;'><b>AHORROS: </b></div></td>
    <td width="100"><div id="total_op1" align="right" style='font-size:22px;'>$0 </div></td>
  </tr>
</table>

</div>











<br>


<div id="chart_div2" style="width: 900px; height: 220px;display:none;"></div>


       <?php 
         /* 
          sort($NewMyArr);
           for ($i = 0; $i <= count($NewMyArr)-1; $i++) {
      echo " ['".$NewMyArr[$i]['fecha']."',  ".$NewMyArr[$i]['saldo'].",".$NewMyArr[$i]['saldo_1']."],";
       }*/
      ?>



<div id="chart_div1" style="width: 900px; height: 220px; display:none;"></div>



<div id="7dias" style="width: 900px; height: 220px;display:none;"></div>




<div id="table" style="width: 900px; height: 220px;display:none;"></div>


<div align="center">
<form id="form1" name="form1" method="post" action="">

<?php 

function esmes($v){
  $m=date('m');
  if($v==$m){
    echo "selected";
  }
}

?>

      <select id="mes">
  <option value="01" <?php esmes('01'); ?> >Enero</option>
  <option value="02" <?php esmes('02'); ?> >Febrero</option>
  <option value="03" <?php esmes('03'); ?> >Marzo</option>
  <option value="04" <?php esmes('04'); ?> >Abril</option>
  <option value="05" <?php esmes('05'); ?> >Mayo</option>
  <option value="06" <?php esmes('06'); ?> >Junio</option>
  <option value="07" <?php esmes('07'); ?> >Julio</option>
  <option value="08" <?php esmes('08'); ?> >Agosto</option>
  <option value="09" <?php esmes('09'); ?> >Septiembre</option>
  <option value="10" <?php esmes('10'); ?> >Octubre</option>
  <option value="11" <?php esmes('11'); ?> >Noviembre</option>
  <option value="12" <?php esmes('12'); ?> >Diciembre</option>
  </select>




<?php 

function esano($v){
  $m=date('Y');
  if($v==$m){
    return "selected";
  }
}

?>
  <select id="ano">

    <?php   

$pp=date('Y');
    for ($i = 2013; $i <= $pp+2; $i++) {
  echo "<option value='".$i."' ".esano($i)." >$i</option>";

  } ?>
    
  </select>

 

  <input type="button" onclick="makeAjaxCall();return false;" value="Cambiar"></input>

</form>
</div>


<div id="anual" style="width: 900px; height: 220px;display:none;"></div>


<div id="chart_div" style="width: 900px; height: 220px;display:none;"></div>



 <input type="button" onclick="actualizartodo();" value="actualizar graficos"></input>

<br>

<div aling="center" style="padding-left:230px;">
<table border="3" aling="center" style='font-size:20px;'>
  <tr style='background-color:#4297d7;'>
    <td>Mes</td>
    <td>Ingresos</td>
    <td>Gastos</td>
    <td>Caja</td>
    <td>Ahorros</td>
 
  </tr>
  <?php 
          
          //sort($myarr3);
           for ($i = 12; $i >= 1; $i--) { 



if($mimi==1){$micolor="style='background-color:#bebebe;'";$mimi=0;}else{$micolor="style='background-color:white;'";$mimi=1;}



            ?>

  <tr <?php echo $micolor;?> >
    <td><?php echo fecha_esp($myarr3[$i]['fecha']);?></td>
    <td>$<?php echo dameingresos($myarr3[$i]['fecha'],0); ?></td>
    <td>$<?php echo damegastos($myarr3[$i]['fecha'],0); ?></td>
    <td>$<?php echo $myarr3[$i]['saldo']; ?></td>
    <td>$<?php echo damesaldo($myarr3[$i]['fecha'],1); ?></td>

  </tr>
 <?php 
      //echo " ['".$myarr3[$i]['fecha']."',  ".$myarr3[$i]['saldo'].",".$myarr3[$i]['saldo_1']."],";
       }
      ?>
</table>
</div>





      
<br>










 
<table border="1" cellspacing="0" cellpadding="0" class="tablita">
  <tr class="titulotabla">
    <td width="23">id</td>
    <td width="59">Saldo</td>
    <td width="209">fecha</td>
	<td width="499">descripcion</td>
  </tr>

  <?php   
  $ct=1;
   for ($i = 1; $i <= count($ingresos); $i++) {?>
  <tr class="celda<?php echo $ct; ?>tabla">
    <td><?php echo $ingresos[$i]["id"];?></td>
    <td><?php echo $ingresos[$i]["saldo"];?></td>
    <td><?php echo $ingresos[$i]["fecha"];?></td>
		    <td><?php echo $ingresos[$i]["descripcion"];?></td>
  </tr>
<?php 


	
	if($ct==2){
		$ct=1;
	}else{
		$ct++;
	}

} ?>
</table>











  
<table class="tablita" border="1" cellspacing="0" cellpadding="0">
  <tr class="titulotabla">
    <td width="23">id</td>
    <td width="59">Saldo</td>
    <td width="210">fecha</td>
	  <td width="498">descripcion</td>
  </tr>

  <?php  
   $ct=1;
    for ($i = 1; $i <= count($gastos); $i++) {?>
  <tr class="celda<?php echo $ct; ?>tabla">
    <td><?php echo $gastos[$i]["id"];?></td>
    <td><?php echo $gastos[$i]["saldo"];?></td>
    <td><?php echo $gastos[$i]["fecha"];?></td>
	    <td><?php echo $gastos[$i]["descripcion"];?></td>
  </tr>
<?php 


	if($ct==2){
		$ct=1;
	}else{
		$ct++;
	}
	
} ?>
</table>











  









  
<table border="1" cellspacing="0" cellpadding="0" class="tablita">
  <tr class="titulotabla">
    <td width="23">id</td>
    <td width="59">Saldo</td>
    <td width="207">fecha</td>
  <td width="501">descripcion</td>
  
  </tr>

  <?php 
   $ct=1;
     for ($i = 1; $i <= count($ajustecaja); $i++) {?>
  <tr class="celda<?php echo $ct; ?>tabla">
    <td><?php echo $ajustecaja[$i]["id"];?></td>
    <td><?php echo $ajustecaja[$i]["saldo"];?></td>
    <td><?php echo $ajustecaja[$i]["fecha"];?></td>
	  <td><?php echo $ajustecaja[$i]["descripcion"];?></td>
  </tr>
<?php
	if($ct==2){
		$ct=1;
	}else{
		$ct++;
	}

 } ?>
</table>
<p><?php $var= count($ajustecaja); //ultimo ajuste caja
$ultimocajasaldo=$ajustecaja[1]["saldo"];
//echo $ultimocajasaldo;
 ?></p>
 
<?php //fecha ultimo ajuste caja.
 
 $ultimocajafech=$ajustecaja[1]["fecha"];
//  echo  $ultimocajafech; ?>





<?php 

$mivar=explode(" ",$ultimocajafech);
$mivar1=explode("-",$mivar[0]);
$mivar2=explode(":",$mivar[1]);

$acthor=date("h");
$horacaja=$mivar2[0];

$actmin=date("i");
$minutocaja=$mivar2[1];

$actseg=date("s");
$segundocaja=$mivar2[2];

$fechh=$mivar1[2];
$fechw=$mivar1[1];
$fechb=$mivar1[0];
$fechak=date("d");
$fechaj=date("m");
$fechj=date("Y");

$noww=date("Y-m-d h:i:s");
//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
//$filtro="WHERE year(fecha) BETWEEN '$fechb' AND '$fechj' AND month(fecha) BETWEEN '$fechw' AND '$fechaj' AND day(fecha) BETWEEN '$fechh' AND '$fechak' AND hour(fecha) BETWEEN '$horacaja' AND '$acthor' AND minute(fecha) BETWEEN '$minutocaja' AND '$actmin' AND second(fecha) BETWEEN '$segundocaja' AND '$actseg' ORDER BY fecha ASC ";


$filtro="WHERE fecha BETWEEN '$ultimocajafech' AND '$noww' and op='0'  ORDER BY fecha ASC ";
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
while ($fila = mysql_fetch_assoc($resultado)) {
	$gastos_tot[$a]["id"]=$fila["id"];
	$gastos_tot[$a]["fecha"]=$fila["fecha"];	
	$gastos_tot[$a]["saldo"]=$fila["saldo"];		
	$a++;
}

mysql_free_result($resultado);



//print_r($gastos_tot);
//echo "<p>";



//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro=" where op='1' ";
$tablename="finanzas_ingresos";
//$filtro=" ORDER BY id LIMIT 20,10";

$query="SELECT * FROM $tablename $filtro;";
//echo $query; //filtrar ingresos y gastos con minutos al calcular la caja. 

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
	$ingresos_tot[$a]["id"]=$fila["id"];
	$ingresos_tot[$a]["fecha"]=$fila["fecha"];	
	$ingresos_tot[$a]["saldo"]=$fila["saldo"];		
	$a++;
}

mysql_free_result($resultado);




//print_r($ingresos_tot);



?>



  <?php 
  
  $MIINGRETOTAL=0;
  
if(isset($ingresos_tot)){
		for ($i = 1; $i <= count($ingresos_tot); $i++) {
		
		$MIINGRETOTAL=$MIINGRETOTAL+$ingresos_tot[$i]["saldo"];
		
		}
}
//echo $MIINGRETOTAL;
?>

<?php 
  
  $MIGASTOTOTAL=0;
if(isset($gastos_tot)){  
	for ($i = 1; $i <= count($gastos_tot); $i++) {
	
	$MIGASTOTOTAL=$MIGASTOTOTAL+$gastos_tot[$i]["saldo"];
	
	}
}


//echo $MIGASTOTOTAL;
//echo $ultimocajasaldo;

$total_final=$ultimocajasaldo+$MIINGRETOTAL-$MIGASTOTOTAL;



//echo "///////";
//echo $total_final;
//echo "///////";




 echo '
						 <script>
						 document.getElementById("total").innerHTML = "$'.number_format(damesaldo(date('Y-m-d'),0),2).'";
						</script>';
						
						
?>












  
  
<table border="1" cellspacing="0" cellpadding="0" class="tablita">
  <tr class="titulotabla">
    <td width="23">id</td>
    <td width="59">Saldo</td>
    <td width="212">fecha</td>
	<td width="496">descripcion</td>
  </tr>

  <?php  
   $ct=1;
    for ($i = 1; $i <= count($ingresos_op1); $i++) {?>
  <tr class="celda<?php echo $ct; ?>tabla">
    <td><?php echo $ingresos_op1[$i]["id"];?></td>
    <td><?php echo $ingresos_op1[$i]["saldo"];?></td>
    <td><?php echo $ingresos_op1[$i]["fecha"];?></td>
		    <td><?php echo $ingresos_op1[$i]["descripcion"];?></td>
  </tr>
<?php

	if($ct==2){
		$ct=1;
	}else{
		$ct++;
	}
 } ?>
</table>






  
<table border="1" cellspacing="0" cellpadding="0" class="tablita">
  <tr class="titulotabla">
    <td width="23">id</td>
    <td width="59">Saldo</td>
    <td width="212">fecha</td>
	  <td width="496">descripcion</td>
  </tr>

  <?php  
   $ct=1;
    for ($i = 1; $i <= count($gastos_op1); $i++) {?>
  <tr class="celda<?php echo $ct; ?>tabla">
    <td><?php echo $gastos_op1[$i]["id"];?></td>
    <td><?php echo $gastos_op1[$i]["saldo"];?></td>
    <td><?php echo $gastos_op1[$i]["fecha"];?></td>
	    <td><?php echo $gastos_op1[$i]["descripcion"];?></td>
  </tr>
<?php


	if($ct==2){
		$ct=1;
	}else{
		$ct++;
	}
	
	 } ?>
</table>

 
  


<table border="1" cellspacing="0" cellpadding="0" class="tablita">
  <tr class="titulotabla">
    <td width="23">id</td>
    <td width="59">Saldo</td>
    <td width="212">fecha</td>
  <td width="496">descripcion</td>
  
  </tr>

  <?php 
   $ct=1;
     for ($i = 1; $i <= count($ajustecaja_op1); $i++) {?>
  <tr class="celda<?php echo $ct; ?>tabla">
    <td><?php echo $ajustecaja_op1[$i]["id"];?></td>
    <td><?php echo $ajustecaja_op1[$i]["saldo"];?></td>
    <td><?php echo $ajustecaja_op1[$i]["fecha"];?></td>
	  <td><?php echo $ajustecaja_op1[$i]["descripcion"];?></td>
  </tr>
<?php 

	if($ct==2){
		$ct=1;
	}else{
		$ct++;
	}
	
} ?>
</table>
<p><?php $var= count($ajustecaja_op1); //ultimo ajuste caja
$ultimocajasaldo=$ajustecaja_op1[1]["saldo"];
//echo $ultimocajasaldo;
 ?></p>
 
<?php //fecha ultimo ajuste caja.
 
 $ultimocajafech=$ajustecaja_op1[1]["fecha"];
//  echo  $ultimocajafech; ?>





<?php 

$mivar=explode(" ",$ultimocajafech);
$mivar1=explode("-",$mivar[0]);
$mivar2=explode(":",$mivar[1]);

$acthor=date("h");
$horacaja=$mivar2[0];

$actmin=date("i");
$minutocaja=$mivar2[1];

$actseg=date("s");
$segundocaja=$mivar2[2];

$fechh=$mivar1[2];
$fechw=$mivar1[1];
$fechb=$mivar1[0];
$fechak=date("d");
$fechaj=date("m");
$fechj=date("Y");

$noww=date("Y-m-d h:i:s");
//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
//$filtro="WHERE year(fecha) BETWEEN '$fechb' AND '$fechj' AND month(fecha) BETWEEN '$fechw' AND '$fechaj' AND day(fecha) BETWEEN '$fechh' AND '$fechak' AND hour(fecha) BETWEEN '$horacaja' AND '$acthor' AND minute(fecha) BETWEEN '$minutocaja' AND '$actmin' AND second(fecha) BETWEEN '$segundocaja' AND '$actseg' ORDER BY fecha ASC ";


$filtro="WHERE fecha BETWEEN '$ultimocajafech' AND '$noww' and op='1' ORDER BY fecha ASC ";
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
//$gastos_tot[$a]["saldo"]="0";
while ($fila = mysql_fetch_assoc($resultado)) {
	$gastos_tot_op1[$a]["id"]=$fila["id"];
	$gastos_tot_op1[$a]["fecha"]=$fila["fecha"];	
	$gastos_tot_op1[$a]["saldo"]=$fila["saldo"];		
	$a++;
}

mysql_free_result($resultado);



//print_r($gastos_tot);
//var_dump($gastos_tot_op1);
//echo "<p>";



//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro=" where op='1' ";
$tablename="finanzas_ingresos";
//$filtro=" ORDER BY id LIMIT 20,10";

$query="SELECT * FROM $tablename $filtro;";
//echo $query; //filtrar ingresos y gastos con minutos al calcular la caja. 

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
$ingresos_tot="";
while ($fila = mysql_fetch_assoc($resultado)) {
	$ingresos_tot_op1[$a]["id"]=$fila["id"];
	$ingresos_tot_op1[$a]["fecha"]=$fila["fecha"];	
	$ingresos_tot_op1[$a]["saldo"]=$fila["saldo"];		
	$a++;
}

mysql_free_result($resultado);




//print_r($ingresos_tot);



?>



  <?php 
  
  $MIINGRETOTAL=0;
  
if(isset($ingresos_tot_op1)){
		for ($i = 1; $i <= count($ingresos_tot); $i++) {
		
		$MIINGRETOTAL=$MIINGRETOTAL+$ingresos_tot_op1[$i]["saldo"];
		
		}
}
//echo $MIINGRETOTAL;
?>

<?php 
  
  $MIGASTOTOTAL=0;
if(isset($gastos_tot_op1)){  
	for ($i = 1; $i <= count($gastos_tot); $i++) {
	
	$MIGASTOTOTAL=$MIGASTOTOTAL+$gastos_tot_op1[$i]["saldo"];
	
	}
}


//echo $MIGASTOTOTAL;
//echo $ultimocajasaldo;

$total_final=$ultimocajasaldo+$MIINGRETOTAL-$MIGASTOTOTAL;



//echo "///////";
//echo $total_final;
//echo "///////";




 echo '
						 <script>
						 document.getElementById("total_op1").innerHTML = "$'.number_format(damesaldo(date('Y-m-d'),1),2).'";
						</script>';
						
						
?>


<div style="padding-left:230px;" aling="center">

Gastos fijos  

<br>





<select id="mes_gf">
 <option value="01" <?php esmes('01'); ?> >Enero</option>
  <option value="02" <?php esmes('02'); ?> >Febrero</option>
  <option value="03" <?php esmes('03'); ?> >Marzo</option>
  <option value="04" <?php esmes('04'); ?> >Abril</option>
  <option value="05" <?php esmes('05'); ?> >Mayo</option>
  <option value="06" <?php esmes('06'); ?> >Junio</option>
  <option value="07" <?php esmes('07'); ?> >Julio</option>
  <option value="08" <?php esmes('08'); ?> >Agosto</option>
  <option value="09" <?php esmes('09'); ?> >Septiembre</option>
  <option value="10" <?php esmes('10'); ?> >Octubre</option>
  <option value="11" <?php esmes('11'); ?> >Noviembre</option>
  <option value="12" <?php esmes('12'); ?> >Diciembre</option>
</select>



 <select id="ano_gf">

    <?php   

$pp=date('Y');
    for ($i = 2013; $i <= $pp+2; $i++) {
  echo "<option value='".$i."' ".esano($i)." >$i</option>";

  } ?>
    
  </select>

 

  <input type="button" onclick="MIcarga('gastos_fijos.php','g_f');" value="Cambiar"></input>



<br>

</div>


<div id='g_f' >gastos fijos</div>

<script>

a='g_f';
  MIcarga("gastos_fijos.php",a);


</script>
<br>


<div style="padding-left: 230px;">

 <input  type="button" id="boton1"  value="Agregar +" onClick="agregarcat();" >
<br>

<div id="agrega_cat" style="display:none;">
  nombre:<br>
<input id="nombre_cat" type="text">
  <br>


  grupo:<br>
  <select id="grupo_cat">

  <option value="0" >general</option>
    <option value="1" >alamacen</option>
</select>
  <br>
  <br>

<input  type="button"  value="Guardar" onClick="guardarcat();" >


</div>


</div>





</body>
</html>


