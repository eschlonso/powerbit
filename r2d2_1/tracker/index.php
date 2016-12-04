

<?php
include("db.php");


function relacionar1($id){


global $host,$user,$password,$dbname;
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");



$filtro="WHERE id='$id' ";
//$filtro=" ";
$tablename="clientes";
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
  $reloj[$a]["id"]=$fila["id"];
  $reloj[$a]["nombre"]=$fila["nombre"];       
  $a++;
}

mysql_free_result($resultado);



return $reloj[1]["nombre"];
}


function rela_proy($id){

global $host,$user,$password,$dbname;
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");

















//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE id='".$id."'";
$tablename="tareas";
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
  $tareas["nombre"]=$fila["nombre"];
  $a++;
}

mysql_free_result($resultado);

return $tareas["nombre"];

}










/**
* SumaTiempos.php Clase para sumar tiempos
*
* Esta clase sirve para teniendo un tiempo inicial y un Array con tiempos
* los suma y nos devuelve el tiempo final
*
* PHP Version 5.3
*
* @author Ruben Lacasa Mas <ruben@rubenlacasa.es>
* @copyright 2013 Ruben Lacasa Mas http://rubenlacasa.es
* @license http://creativecommons.org/licenses/by-nc-nd/3.0
* CC-BY-NC-ND-3.0
* @link https://gist.github.com/sbarrat/5642808
*/
class SumaTiempos
{
/**
* Inicializamos el array que almacenara los valores del tiempo
* @var Array
*/
private $tiempo = array();
/**
* Constructor de clase
*
* @param String $tiempo Tiempo que definimos
*/
public function __construct($tiempo = '00:00:00.00')
{
list(
$this->tiempo['horas'],
$this->tiempo['minutos'],
$this->tiempo['segundos']
) = explode(":", $tiempo);
}
/**
* Sumamos el tiempo a otro
*
* @param SumaTiempos $tiempo Tiempo que queremos agregar
*/
public function sumaTiempo(SumaTiempos $tiempo)
{
// Segundos
$this->tiempo['segundos']
= floatval($this->tiempo['segundos'])
+ floatval($tiempo->tiempo['segundos']);
$minutos = intval($this->tiempo['segundos'] / 60);
$this->tiempo['segundos'] -= $minutos * 60;
// Minutos
$this->tiempo['minutos']
= intval($this->tiempo['minutos'])
+ intval($tiempo->tiempo['minutos'] + $minutos);
$horas = intval($this->tiempo['minutos'] / 60);
$this->tiempo['minutos'] -= $horas * 60;
// Horas
$this->tiempo['horas']
= intval($this->tiempo['horas'])
+ intval($tiempo->tiempo['horas'] + $horas);
}
/**
* Formatea y devuelve el tiempo final
*
* @return String Tiempo final formateado
*/
public function verTiempoFinal()
{
return sprintf(
'%02s:%02s:%02s',
$this->tiempo['horas'],
$this->tiempo['minutos'],
$this->tiempo['segundos']
);
}
}











//echo $_GET['f'];



//$fecha=$_GET['f'];
//$proyecto=$_GET['id'];
//$proyecto="52";
 ?>



<?php 



$myarr[0]=date('Y-m-d');
$myarr[1]=date('Y-m-d', strtotime('-1 day'));
$myarr[2]=date('Y-m-d', strtotime('-2 day'));
$myarr[3]=date('Y-m-d', strtotime('-3 day'));
$myarr[4]=date('Y-m-d', strtotime('-4 day'));
$myarr[5]=date('Y-m-d', strtotime('-5 day'));
$myarr[6]=date('Y-m-d', strtotime('-6 day'));
$myarr[7]=date('Y-m-d', strtotime('-7 day'));
$myarr[8]=date('Y-m-d', strtotime('-8 day'));
$myarr[9]=date('Y-m-d', strtotime('-9 day'));
$myarr[10]=date('Y-m-d', strtotime('-10 day'));
$myarr[11]=date('Y-m-d', strtotime('-11 day'));
$myarr[12]=date('Y-m-d', strtotime('-12 day'));
$myarr[13]=date('Y-m-d', strtotime('-13 day'));
$myarr[14]=date('Y-m-d', strtotime('-14 day'));
$myarr[15]=date('Y-m-d', strtotime('-15 day'));
$myarr[16]=date('Y-m-d', strtotime('-16 day'));
$myarr[17]=date('Y-m-d', strtotime('-17 day'));
$myarr[18]=date('Y-m-d', strtotime('-18 day'));
$myarr[19]=date('Y-m-d', strtotime('-19 day'));
$myarr[20]=date('Y-m-d', strtotime('-20 day'));
$myarr[21]=date('Y-m-d', strtotime('-21 day'));
$myarr[22]=date('Y-m-d', strtotime('-22 day'));
$myarr[23]=date('Y-m-d', strtotime('-23 day'));
$myarr[24]=date('Y-m-d', strtotime('-24 day'));
$myarr[25]=date('Y-m-d', strtotime('-25 day'));
$myarr[26]=date('Y-m-d', strtotime('-26 day'));
$myarr[27]=date('Y-m-d', strtotime('-27 day'));
$myarr[28]=date('Y-m-d', strtotime('-28 day'));
$myarr[29]=date('Y-m-d', strtotime('-29 day'));
$myarr[30]=date('Y-m-d', strtotime('-30 day'));



 for ($i = 0; $i <= count($myarr)-1; $i++) {

$miarray[$i]['fecha'] = $myarr[$i];
$miarray[$i]['valor'] = ver($myarr[$i]);
 }





//var_dump($miarray);





 for ($j = 0; $j <= count($miarray)-1; $j++) {
$chiqui="00:00:00";



  for ($i = 0; $i <= count($miarray[$j]['valor'])-1; $i++) {
  $miarrayKK[$j][$i]['fecha'] = $miarray[$j]['fecha'];
 


if ($miarray[$j]['valor']==''){


   $miarrayKK[$j][$i]['d'] = '';
 $miarrayKK[$j][$i]['a'] = '';
}else{





/**
* Ejemplo de uso
*/
 
/**
* Array de tiempos que queremos sumar
* @var Array
*/
$tiempos = array($chiqui, $miarray[$j]['valor'][$i]);
// Inicializamos el tiempo

//var_dump($tiempos);
$tiempoInicial = new SumaTiempos();
// Recorremos los tiempos y los vamos sumando
foreach ($tiempos as $parcial) {
$tiempoInicial->sumaTiempo(new SumaTiempos($parcial));
}
// Mostramos el tiempo final
$lasuma= $tiempoInicial->verTiempoFinal(); // En este ejemplo 32:04:10.40




 $miarrayKK[$j][$i]['d'] = $chiqui;
 $miarrayKK[$j][$i]['a'] = $lasuma;
$chiqui=$lasuma;
}
 

  }
  
 }


//var_dump($miarrayKK);

function ver($mifecha){

global $host,$user,$password,$dbname;
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");

















//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE fecha='".$mifecha."'GROUP BY proyecto ";
$tablename="mis_relojes2";
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
  $mis_relojes3[$a]["id"]=$fila["id"];
  $mis_relojes3[$a]["fecha"]=$fila["fecha"]; 
  $mis_relojes3[$a]["d"]=$fila["d"];   
  $mis_relojes3[$a]["a"]=$fila["a"];  
  $mis_relojes3[$a]["proyecto"]=$fila["proyecto"]; 
  $a++;
}

mysql_free_result($resultado);


//var_dump($mis_relojes2);

 $misumar="";


if (isset($mis_relojes3)){


for ($m = 1; $m <= count($mis_relojes3); $m++) {

  $mis_relojes2="";
//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE proyecto='".$mis_relojes3[$m]["proyecto"]."' and fecha='$mifecha' and a<>'00:00:00' ";
$tablename="mis_relojes2";
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
  $mis_relojes2[$a]["id"]=$fila["id"];
  $mis_relojes2[$a]["fecha"]=$fila["fecha"]; 
  $mis_relojes2[$a]["d"]=$fila["d"];   
  $mis_relojes2[$a]["a"]=$fila["a"];  
   $mis_relojes2[$a]["proyecto"]=$mis_relojes3[$m]["proyecto"];
  


  $a++;
}

mysql_free_result($resultado);
//echo "***********";
//var_dump($mis_relojes2);
// "***********";






$horas="00:00:00";

if(isset($mis_relojes2)){
 $totales="00:00:00";
  $teke="00:00:00";

 for ($i = 1; $i <= count($mis_relojes2); $i++) {


  $date = date_create($mis_relojes2[$i]["d"]);
 $date1 = date_create($mis_relojes2[$i]["a"]);
 //echo  "<div>".date_format($date,'H:i')." - ".date_format($date1,'H:i') ."</div>";

  

$datetime1 = date_create($mis_relojes2[$i]["d"]);//$GLOBALS["r"]
$datetime2 = date_create($mis_relojes2[$i]["a"]);//
  $newfecha = date_diff($datetime1, $datetime2);   


$h1="$newfecha->h:$newfecha->i";
 // echo "<div style='float:left;'><b> $newfecha->h:$newfecha->i h.</b>&nbsp;</div>";    


  // echo "<button onclick='borrar(\"$fecha\",".$mis_relojes2[$i]["id"].")' type='button'>b</button>";   
          
          
            //2014-01-04 03:28:00////// 2014-01-04 03:27:49
            
            /*
              $datetime1 = date_create("2010-07-28 01:15:52");//$GLOBALS["r"]
          $datetime2 = date_create("2012-11-30 02:33:45");
          */
          
          
        
          //echo $interval->format('%R%a días');
          //printf('%d:%d', $fecha->h, $fecha->i, $fecha->s);
          
          //$arraytiempos_hoyP[]=$fecha->h.":".$fecha->i.":".$fecha->s;
  $horas='6:15';
  //$h1='6:15';
 
  $teke=sumar4($h1,$teke);

 
  

$horas=$teke;

 $fecha_inicio=$horas;
$totales= sumar4("20:00","10:00");


//echo $totales."////";
//var_dump($misumar);

  }



  if(count($mis_relojes2)>1){

 $misumar[]=$horas.":00";
 //echo "//////////".$horas."////////////";

  $teke="00:00:00";

// echo "<div style='font-size:16px;'><b>total: $horas h</b></div>";
  }else{


     $misumar[]=$h1.":00";
      //echo "********".$h1."***********";
  }
//echo "???????????????????";
$GLOBALS['misproyectos'][]=rela_proy($mis_relojes3[$m]["proyecto"]);
//rela_proy($mis_relojes3[$m]["proyecto"]);

 }


}

}


return $misumar;
}

//echo "////////";
//var_dump($GLOBALS['misproyectos']);
//echo $totales;
//echo "////////";


function sumar4($h1,$h2)
{
$h2h = date('H', strtotime($h2));
$h2m = date('i', strtotime($h2));
$hora2 =$h2h." hour ". $h2m ." min ";
 
$horas_sumadas= $h1." + ". $hora2;
$text=date('H:i', strtotime($horas_sumadas)) ;
//echo "------".$h1.$horas_sumadas."------";
return $text;
 
}



  ?>










<?php 
date_default_timezone_set('America/Argentina/Buenos_Aires'); 


global $host,$user,$password,$dbname;
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");















function sumar3($h1,$h2)
{
$h2h = date('H', strtotime($h2));
$h2m = date('i', strtotime($h2));
$h2s = date('s', strtotime($h2));
$hora2 =$h2h." hour ". $h2m ." min ".$h2s ." second";
 
$horas_sumadas= $h1." + ". $hora2;
$text=date('H:i:s', strtotime($horas_sumadas)) ;
//echo "------".$text."------";
return $text;
 
}










function cuantashoras($f){



global $host,$user,$password,$dbname,$link;


$fech=explode("-",$f);

//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";

$filtro="WHERE  day(fecha)='".$fech[2]."' and  month(fecha)='".$fech[1]."' and year(fecha)='".$fech[0]."' ORDER BY id DESC ";
//$filtro=" ";
$tablename="relojes";
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


/*
$lf=explode(" ",$fila["fecha"]);
	
$date1 = new DateTime($lf[0]);
$date2 = new DateTime(date("Y-m-d"));
	*/
	
//if($date1==$date2){
	$reloj_hoyT[$a]["id"]=$fila["id"];
	$reloj_hoyT[$a]["fecha"]=$fila["fecha"];	
	$reloj_hoyT[$a]["op"]=$fila["op"];		
	$reloj_hoyT[$a]["idproyecto"]=$fila["idproyecto"];			

//}
/*
	$reloj[$a]["id"]=$fila["id"];
	$reloj[$a]["fecha"]=$fila["fecha"];	
	$reloj[$a]["op"]=$fila["op"];		
	$reloj[$a]["idproyecto"]=$fila["idproyecto"];			
	*/
	
	$a++;
}

mysql_free_result($resultado);




//print_r($reloj);

//var_dump($reloj_hoyT);



 for ($i = 1; $i <= count($reloj_hoyT); $i++) {
 
 if($reloj_hoyT[$i]["op"]==1){
//$GLOBALS["r"]=$reloj[$i]["fecha"];
//echo $GLOBALS["r"];
	
	}else{
	$time1=$reloj_hoyT[$i+1]["fecha"];
	$time2=$reloj_hoyT[$i]["fecha"];


	//echo $time1."<br>";
	
	//echo $time2."<br>";
	
					$datetime1 = date_create($time1);//$GLOBALS["r"]
					$datetime2 = date_create($time2);//
					
					
					
					 	//2014-01-04 03:28:00////// 2014-01-04 03:27:49
						
						/*
							$datetime1 = date_create("2010-07-28 01:15:52");//$GLOBALS["r"]
					$datetime2 = date_create("2012-11-30 02:33:45");
					*/
					
					
					$fecha = date_diff($datetime1, $datetime2);
					//echo $interval->format('%R%a días');
					//printf('%d años, %d meses, %d días, %d horas, %d minutos, %s segundos', $fecha->y, $fecha->m, $fecha->d, $fecha->h, $fecha->i, $fecha->s);
					
					$arraytiempos_hoyT[]=$fecha->h.":".$fecha->i.":".$fecha->s;

}
 }
 
 
 
 
						 $u=0;
				   $totales="00:00:00";
				   $este=0;
				 // print_r($arraytiempos);
				   //echo count($arraytiempos);
				   for ($i = 0; $i <= count($arraytiempos_hoyT)-1; $i++) {
				  
				  
				
						   $fecha_inicio=$arraytiempos_hoyT[$i];

						  
						//  echo $fecha_inicio;
						  
						  //  echo "<br>";
							  $totales= sumar3($totales,$fecha_inicio);
							  
							  //echo "#".$totales;
							 // echo "<br>";
					
						
								
						
						
				
				
							 //$este=sumar($fecha_inicio,$fecha_fin);
								//echo $fecha_inicio."--".$fecha_fin."//";
							 //echo "**".$este;
						
							  
						
						
						} 
						
						 //echo "/////////".$totales;
						 
						 echo '
						 <script>
						 document.getElementById("total2").innerHTML = "'.$totales.'";
						</script>';
		
						
						
 
return $totales;
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TRACKER DE TIEMPO</title>
<style type="text/css">
<!--
.Estilo1 {
	font-size: 21px;
	font-weight: bold;
}
body {
	background-image: url(..//black-background.jpg);
}
-->
</style>

<style type="text/css">
body
{
font-family:Arial, Helvetica, sans-serif;
font-size:14px;
}
.comment_box
{
background-color:#D3E7F5; border-bottom:#ffffff solid 1px; padding-top:3px
}

.clientes{
text-transform:uppercase;
  float:left;
  background-color:#D3E7F5;
  margin-top:10px;
   margin-right:20px; 
   padding-top:10px;
   padding-left:10px;
   padding-right:10px;
   padding-bottom:10px;

}

  
</style>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
 <script type="text/javascript">
$(function() {

$(function mostrar() {
  //alert("se");
var element = $(this);
   
    var test = $("#content").val();
  
    var dataString = 'content='+ test;



  $.ajax({
    type: "POST",
  url: "demo_select.php",
   data: dataString,
  cache: false,
  success: function(html){
  
  
  
    $("#display").before(html);

 document.getElementById('content').value='';
 $("#flash").hide();
  
  }
});

});




$(".comment_button").click(function() {

var element = $(this);
   
    var test = $("#content").val();
  
    var dataString = 'content='+ test;
  
  
  
  if(test=='')
  {
  alert("Please Enter Some Text");
  
  }
  else
  {
  $("#flash").show();
  $("#flash").fadeIn(400).html('<img src="http://tiggin.com/ajax-loader.gif" align="absmiddle">&nbsp;<span class="loading">Loading Comment...</span>');
  
    
    $.ajax({
    type: "POST",
  url: "demo_insert.php",
   data: dataString,
  cache: false,
  success: function(html){
  
  
  
    $("#display").before(html);
    //alert("pli");

 document.getElementById('content').value='';
 $("#flash").hide();
  


  }
  
  
});
  }
    
   //$("#display").mostrar();
    return false;
    // 
  });



});
</script>






	
	<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization',
       'version':'1','packages':['timeline']}]}"></script>
<script type="text/javascript">

google.setOnLoadCallback(drawChart);
function drawChart() {

  var container = document.getElementById('example5.1');
  var chart = new google.visualization.Timeline(container);
  var dataTable = new google.visualization.DataTable();
  dataTable.addColumn({ type: 'string', id: 'Room' });
  dataTable.addColumn({ type: 'string', id: 'Name' });
  dataTable.addColumn({ type: 'date', id: 'Start' });
  dataTable.addColumn({ type: 'date', id: 'End' });
  dataTable.addRows([



    <?php 

$pepe=0;

    for ($t = 0; $t <= count($miarrayKK)-1; $t++) {
      for ($i = 0; $i <= count($miarrayKK[$t])-1; $i++) {

if($miarrayKK[$t][$i]['d']==''){
     $mippD[0]=0;
    $mippD[1]=0;
    $mippD[2]=0;
     
    $mippA[0]=0;
    $mippA[1]=0;
    $mippA[2]=0;
    $mitxt="sin trackear.";
}else{
      $mippD=explode(':', $miarrayKK[$t][$i]['d']);
      $mippA=explode(':', $miarrayKK[$t][$i]['a']);
      $mitxt=$GLOBALS['misproyectos'][$pepe];
       //$mitxt="dasd";
$pepe++;
}
  


echo " [ '".$miarrayKK[$t][$i]['fecha']."', '".$mitxt."',       new Date(0,0,0,".$mippD[0].",".$mippD[1].",".$mippD[2]."),  new Date(0,0,0,".$mippA[0].",".$mippA[1].",".$mippA[2].") ],";
}
}
     ?>
   
	 
/* [ '01-03-2014', '--------------',       new Date(0,0,0,0,0,0),  new Date(0,0,0,3,30,0) ],
   [ '01-03-2014', 'asdasript',       new Date(0,0,0,3,30,0),  new Date(0,0,0,6,30,0) ],
    [ '02-03-2014', 'Intermediate JavaScript',    new Date(0,0,0,0,0,0),  new Date(0,0,0,5,30,0) ],
    [ '03-03-2014', 'Advanced JavaScript',        new Date(0,0,0,0,0,0),  new Date(0,0,0,7,30,0) ],
    [ '04-03-2014',   'Beginning Google Charts',    new Date(0,0,0,0,0,0), new Date(0,0,0,0,0,0) ],
    [ '05-03-2014',   'Intermediate Google Charts', new Date(0,0,0,0,0,0), new Date(0,0,0,6,0,0) ],
    [ '06-03-2014',   'Advanced Google Charts',     new Date(0,0,0,0,0,0), new Date(0,0,0,8,0,0) ],
	    [ '07-03-2014', 'Beginning JavaScript',       new Date(0,0,0,0,0,0),  new Date(0,0,0,3,30,0) ],
	 [ '08-03-2014', 'asdasript',       new Date(0,0,0,3,30,0),  new Date(0,0,0,6,30,0) ],
    [ '09-03-2014', 'Intermediate JavaScript',    new Date(0,0,0,0,0,0),  new Date(0,0,0,5,30,0) ],
    [ '10-03-2014', 'Advanced JavaScript',        new Date(0,0,0,0,0,0),  new Date(0,0,0,7,30,0) ],
    [ '11-03-2014',   'Beginning Google Charts',    new Date(0,0,0,0,0,0), new Date(0,0,0,0,0,0) ],
    [ '12-03-2014',   'Intermediate Google Charts', new Date(0,0,0,0,0,0), new Date(0,0,0,6,0,0) ],
    [ '131-03-2014',   'Advanced Google Charts',     new Date(0,0,0,0,0,0), new Date(0,0,0,8,0,0) ],
	    [ '14-03-2014', 'Beginning JavaScript',       new Date(0,0,0,0,0,0),  new Date(0,0,0,3,30,0) ],
	 [ '15-03-2014', 'asdasript',       new Date(0,0,0,3,30,0),  new Date(0,0,0,6,30,0) ],
    [ '16-03-2014', 'Intermediate JavaScript',    new Date(0,0,0,0,0,0),  new Date(0,0,0,5,30,0) ],
    [ '17-03-2014', 'Advanced JavaScript',        new Date(0,0,0,0,0,0),  new Date(0,0,0,7,30,0) ],
    [ '18-03-2014',   'Beginning Google Charts',    new Date(0,0,0,0,0,0), new Date(0,0,0,0,0,0) ],
    [ '19-03-2014',   'Intermediate Google Charts', new Date(0,0,0,0,0,0), new Date(0,0,0,6,0,0) ],
    [ '20-03-2014',   'Advanced Google Charts',     new Date(0,0,0,0,0,0), new Date(0,0,0,8,0,0) ],
	    [ '21-03-2014', 'Beginning JavaScript',       new Date(0,0,0,0,0,0),  new Date(0,0,0,3,30,0) ],
	 [ '22-03-2014', 'asdasript',       new Date(0,0,0,3,30,0),  new Date(0,0,0,6,30,0) ],
    [ '23-03-2014', 'Intermediate JavaScript',    new Date(0,0,0,0,0,0),  new Date(0,0,0,5,30,0) ],
    [ '24-03-2014', 'Advanced JavaScript',        new Date(0,0,0,0,0,0),  new Date(0,0,0,7,30,0) ],
    [ '25-03-2014',   'Beginning Google Charts',    new Date(0,0,0,0,0,0), new Date(0,0,0,0,0,0) ],
    [ '26-03-2014',   'Intermediate Google Charts', new Date(0,0,0,0,0,0), new Date(0,0,0,6,0,0) ],
    [ '27-03-2014',   'Advanced Google Charts',     new Date(0,0,0,0,0,0), new Date(0,0,0,8,0,0) ],
	    [ '28-03-2014', 'Beginning JavaScript',       new Date(0,0,0,0,0,0),  new Date(0,0,0,3,30,0) ],
	 [ '29-03-2014', 'asdasript',       new Date(0,0,0,3,30,0),  new Date(0,0,0,6,30,0) ],
    [ '30-03-2014', 'Intermediate JavaScript',    new Date(0,0,0,0,0,0),  new Date(0,0,0,5,30,0) ]
	
*/
	
	]);

  var options = {
timeline: { singleColor: '#8d8'},

  };

  chart.draw(dataTable);
}

</script>







  <script>
      jQuery.fn.cargar = function(url,mdiv) {
            //$(document).ready(function(){
                  //alert('sass');
                  $("#"+mdiv).load(url);
            //});
      };

      

function bot_agrega(){

$("#agrega").show();
$("#botagrega").hide();


}


</script>



</head>

<body>
<?php 

$titulo="TRACKER";
$ruta_titulo="index.php";
include("../ruta.php");?>


  <?php

if(isset($_GET['n'])){
$nav=$_GET['n'];
}else{
$nav=0;
}


//echo $nav;

 if($nav==0){ ?>









<?php if(!isset($_GET['idc'])){?>
<div style="background-color:#ffffff; padding-left:20px;padding-top:20px;"> 










 <strong>CLIENTES:  </strong> <p></p>
 <!--
  <ol>
  <li><a href="?idc=1">Alejandra</a></li>
  <li><a href="?idc=2">R2D2</a></li>
  <li><a href="?idc=3">Isaias</a></li>
   <li><a href="?idc=4">Patricia</a></li>
    <li><a href="?idc=5">Jesus</a></li>
  <li><a href="?idc=0">Todos</a></li>
  <li><a href="?idc=6">Rodrigo</a></li>
  </ol>
  <p><a href="ffgdfgdfgdfg">Agregar cliente </a></p>
-->

<div >
<table cellpadding="0" cellspacing="0" width="900px">
<tr>
<td>


<div style="height:7px"></div>
<div class="clientes"><b><a href="?idc=0">Todos</a></b></div>



<div id="display"  align="left"></div>

<div id="flash" align="left"  ></div>

<!-- <input type="button"  value="show"  id="isa" name="isa" class="isa"/> -->
</td>

</tr>

</table>

<table><tr><td>

<BR>
<input type="button" onclick="bot_agrega();" id="botagrega" value="Agregar cliente" />
<div style="display:none;" id="agrega">
<form  method="post" name="form" action="">
<table cellpadding="0" cellspacing="0" width="500px">
<tr>
<td style="padding:4px; padding-left:10px;" >
  <div align="left"><b>Agregar Cliente:<b></div>
<textarea  rows="1" style="width:280px; height:30px;font-size:20px; font-weight:bold" name="content" id="content" maxlength="145" ></textarea><br />
<input type="submit"  value="Agregar"  id="v" name="submit" class="comment_button"/>
</form>
</div>

</td></tr></table>

</td>
</tr>
</table>






</div>







  <p><strong>DASHBOARD: actividad diaria </strong>

<!--

<table width="24%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>trabajado hoy horas: <?php //echo cuantashoras(date('Y-m-d'));?> </td>
  </tr>
  <tr>
    <td>monto hoy: $300 </td>
  </tr>
</table>
-->


<p>




<div id="example5.1" style="width: 900px; height: 500px;"></div>
<select>
   <option value="5">Mayo</option>
   <option value="6">Junio</option>
  <option value="7">Julio</option>
  <option value="8">Agosto</option>
</select>
<input type="button" name="Submit3" value="Mostrar" />


<!-- <p>aqui se debe mostrar un grafico con las horas FACTURADAS y indicando el monto del dia.trabajadas los ultimos 30 dias. </p>


  <div id="chart_div" style="width: 900px; height: 500px;"></div>
-->

<?php 

/*
 for ($i = 0; $i <= 7; $i++) {
$fecha=date("Y-m-d", strtotime('-'.$i.' day'));
$myarr[$i]['fecha']=$fecha;
$myarr[$i]['horas']=cuantashoras($fecha);
$myarr[$i]['monto']="";
}
*/
//var_dump($myarr);

//print_r($myarr);



?>



</div>




<?php }else{?>





  <?php 



$idproyecto=$_GET['idc'];





if($idproyecto=="0"){
$filtro="";
}else{
$filtro="WHERE idproyecto='".$idproyecto."'  ";
}
//$filtro=" ORDER BY id DESC";
$tablename="tareas";
//$filtro=" ORDER BY id LIMIT 20,10";

$query="SELECT * FROM $tablename $filtro ORDER BY id DESC ;";
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
	$tareas[$a]["id"]=$fila["id"];
	$tareas[$a]["nombre"]=$fila["nombre"];	
	$tareas[$a]["tiempo_estimado"]=$fila["tiempo_estimado"];		
	$tareas[$a]["fecha_entrega"]=$fila["fecha_entrega"];	
	$tareas[$a]["idproyecto"]=$fila["idproyecto"];			
	$a++;
}

mysql_free_result($resultado);




//print_r($tareas);


?>

<div style="background-color:#FFFFFF;"><a href="?">Listar </a> \ <a href="?n=1&idc=<?php echo $_GET['idc']; ?>">Crear nueva </a></div>


<div align="center" style="background-color:#FFFFFF;font-size:30px;"><?php echo relacionar1($tareas[1]["idproyecto"]); ?></div>



<iframe src="../tareas/3.php?id=<?php echo $_GET['idc']; ?>&h=5" width="100%" height="495px;" align="center"></iframe>


<table bgcolor="#ffffff" width="100%">
  <tr>
    <td>
      




<div id="" style=" height:420px; width:933px;">
<div style="  width: 100%;   "> 
<?php  for ($i = 1; $i <= count($tareas); $i++) { ?>
<div style="float:left; margin-right:10px; margin-bottom:10px;display: inline-block;    ">
<table width="300" height="300" border="1" cellpadding="5" cellspacing="0" bgcolor="#DDEBFF">
  <tr>
    <td valign="top"><div  class="Estilo1" align="center" style="margin-top:20px;"><?php echo $tareas[$i]["nombre"]; ?></div>
      
     <div align="center">ID <?php echo $tareas[$i]["id"]; ?></div>
      <label>
      <div align="center">
	  
        <input type="button" name="Submit" value="ENTRAR"  onClick="window.open('marcador.php?id=<?php echo $tareas[$i]["id"]; ?>','_self')"/>
      </div>
      </label>

<br>
      <div id="contenido<?php echo $i;?>" style="margin-left:15px;margin-right:15px;"></div>
      <div style="margin-left:15px;margin-right:15px;">archivar</div>

<script >

      $("#contenido<?php echo $i;?>").cargar("resumen3.php?id=<?php echo $tareas[$i]["id"]; ?>","contenido<?php echo $i;?>");

</script>
    <?php 


//$_GET['id'] = $tareas[$i]["id"];
    
    //include("funcion_sumar.php");
    //echo "ooo<br>";
   //include("resumen3.php"); 


    ?>
<!-- 
<iframe src="resumen3.php?id=<?php //echo $tareas[$i]["id"]; ?>" width="100%" height="100%;" align="center" ></iframe>
-->

       </td>
  </tr>
</table>

</div>
<?php } ?>
</div>
</div>


      
    </td>
  </tr>

</table>


<p>


<?php }}  ?>

<?php 

//echo $nav;
if($nav==1){ ?>

<p>
<table width="200" border="1" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td><form id="form1" name="form1" method="post" action="?n=2&idc=<?php echo $_GET['idc']; ?>">
      <label>
        Nombre
        <input name="nombre" type="text" id="nombre" value="Nuevo Proyecto" />
        <br />
        </label>
      <p>Tiemopestimado<br />
        <input name="tiempo_estimado" value="0" type="text" id="tiempo_estimado" />
        Ejemplo 4 horas.
      </p>
      <p>fecha entrega 
        <input name="fecha_entrega" value="2017-01-01" type="text" id="fecha_entrega" />
      <br>Ejemplo formato 2016-11-25 (año-mes-dia)

      </p>


        <input name="idproyecto"  type="hidden"  id="idproyecto" value="<?php echo $_GET['idc']; ?>" />
</p>
 
      <p>precio x hora
        <input name="preciohora" value="0" type="text" id="preciohora" />
</p>
      <p>
        <label>
        <input type="submit" name="Submit2" value="Enviar" />
        </label>
      </p>
    </form>
    </td>
  </tr>
</table>

<?php } ?>

<?php if($nav==2){ ?>

<?php 
	//TABLA OFERTAS
	$tablename="tareas";
	//$filtro="WHERE dni='".$dni."'";
	$fechaaay=date('Y-m-d h:i:s');
	
	
	//if($ultimoReg==0){$gop=1;}else{$gop=0;}
	
	$query="INSERT INTO $tablename (nombre,tiempo_estimado,fecha_entrega,idproyecto) VALUES ('".$_POST['nombre']."','".$_POST['tiempo_estimado']."','".$_POST['fecha_entrega']."','".$_POST['idproyecto']."');";
	//echo $q
	mysql_select_db($dbname,$link);
	mysql_query($query,$link);
	$my_error = mysql_error($link);
	if(!empty($my_error)) {
	//cartel(3,"Hubo un error al insertar el registro. $my_error"); 
	echo "Hubo un error al insertar el registro. $my_error";
	} else {
	echo "GUARDADO.";
	//echo cartel(3,"SSEEEEEEEEE");
	}
	?>
	
	<script language="JavaScript" type="text/javascript">
var pagina="?n=1&idc=<?php echo $_GET['idc']; ?>"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>



<?php } ?>
</body>
</html>
