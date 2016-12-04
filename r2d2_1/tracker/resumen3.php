

<?php

include("db.php");
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
$proyecto=$_GET['id'];
//$proyecto="52";
 ?>



<?php 



//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");










//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";

$filtro="WHERE id='".$_GET['id']."' ORDER BY id DESC ";
//$filtro=" ";
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

	$tareas[$a]["id"]=$fila["id"];
	$tareas[$a]["nombre"]=$fila["nombre"];	
	$tareas[$a]["tiempo_estimado"]=$fila["tiempo_estimado"];		
	$tareas[$a]["fecha_entrega"]=$fila["fecha_entrega"];			
	$tareas[$a]["precioxhora"]=$fila["precioxhora"];	
	
	$a++;
}

mysql_free_result($resultado);














//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE proyecto='".$proyecto."' and a<>'00:00:00' ";
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
  $a++;
}

mysql_free_result($resultado);

//print_r($mis_relojes2);

$horas="00:00";

if(isset($mis_relojes2)){
 $totales="00:00:00";
  $teke="00:00";

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

  $misumar[]=$h1.":00";

$horas=$teke;

 $fecha_inicio=$horas;
$totales= sumar4("20:00","10:00");


//echo $horas."////";
  }



  if(count($mis_relojes2)>1){


// echo "<div style='font-size:16px;'><b>total: $horas h</b></div>";
  }


 }



//echo $totales;



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




<div style="font-size:16px;">
<!-- <div style="font-weight:bold;font-size:17;">RESUMEN</div>	-->
<div><strong>total en proyecto: </strong>
<?php 






/**
* Ejemplo de uso
*/
 
/**
* Array de tiempos que queremos sumar
* @var Array
*/

if(isset($misumar)){
$tiempos = array('10:21:54', '01:12:44', '20:01:12', '00:28:19');
$tiempos=$misumar;
//var_dump($misumar);
// Inicializamos el tiempo
$tiempoInicial = new SumaTiempos();
// Recorremos los tiempos y los vamos sumando
foreach ($tiempos as $parcial) {
$tiempoInicial->sumaTiempo(new SumaTiempos($parcial));
}
// Mostramos el tiempo final
echo $tiempoInicial->verTiempoFinal(); // En este ejemplo 32:04:10.40

}else {
  echo "00:00:00";
}








 ?>  horas.</div>


 <div><strong>tiempo estimado: </strong> <?php 
  
  
  if($tareas[1]["tiempo_estimado"]==""){
  echo "sin tiempo." ;
  }else{
  echo $tareas[1]["tiempo_estimado"]."&nbsp; horas" ;
  }
  
  
  
  
  ?> </div>


<div><strong>tiempo restante: </strong></div>


<div><strong>fecha entrega: </strong>  

<?php //////////////////////////////////////////////////////////////////////////////

$aa="sin fecha.";

//echo $tareas[1]["fecha_entrega"];
if($tareas[1]["fecha_entrega"]=="0000-00-00"){

}else{
$datetime2 = date_create(date('Y-m-d'));//$GLOBALS["r"]
$datetime1 = date_create($tareas[1]["fecha_entrega"]);//


if($datetime1<$datetime2){
//echo "-";
$aa="tiempo cumplido.";

}else{

//echo "+";

$fecha = date_diff($datetime1, $datetime2);
//echo $interval->format('%R%a días');
$aa=$fecha->y." anos, ". $fecha->m." meses, ".$fecha->d." dias  restantes." ;//$fecha->h, $fecha->i, $fecha->s

//echo $fecha->d;


}


}
	echo $aa;	 ?>



</div>



<div><strong>monto: </strong> $
0.00
 pesos. ($
0
  x hora)</div>


</div>




