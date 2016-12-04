
<?php 
include("db.php");
date_default_timezone_set('America/Argentina/Buenos_Aires'); 





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













//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");





if(isset($_GET['m'])){

$mimes=$_GET['m'];
$miaño=$_GET['a'];

}else{

$mimes=date('m');
$miaño=date('Y');

}


 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
body {
	font-size: 18px;
  background-color: white;
}
-->
</style>



 <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src="jquery-ui-timepicker-addon.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<link rel="stylesheet" href="jquery-ui-timepicker-addon.css">
<script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>



<script type="text/javascript">

function tilde(id){

ano=<?php echo $miaño; ?>;
mes=<?php echo $mimes; ?>;
tildarr(ano+"-"+mes+"-"+id);
//alert(id);

var mivalor=parseInt($("#o_"+id).html());
if(mivalor>=2){mivalor=0;
$("#o_"+id).html(mivalor);
}else{
$("#o_"+id).html(mivalor+1);
}


if($("#o_"+id).html()==0){
$("#"+id).css({'background-color':'white'});
}

if($("#o_"+id).html()==1){
$("#"+id).css({'background-color':'green'});
}

if($("#o_"+id).html()==2){
$("#"+id).css({'background-color':'red'});
}

}




function cambiar(){
  
  mimes=$("#mes").val();
  
  miano=$("#ano").val();
  //alert("dasd"+mimes+miano);
  window.location.href = "?m="+mimes+"&a="+miano+"&id="+<?php echo $_GET['id'];?>;
}





function tildarr(var1){

//alert(var1);

//var res = var1.split(";"); 

//var1='2014-06-25';



 var fruits= var1;

$.post( "tildar.php", 

 { func: "getNameAndTime", pages: fruits },


  function( data ) {
console.log( data.name ); // John
console.log( data.time ); // 2pm

//alert('complete');

  //$("#contenido").cargar("lista.php");
}


,


 "json");



//$("#contenido").cargar("lista.php");




}
</script>






<script>
      jQuery.fn.cargar = function(url,mdiv) {
            $(document).ready(function(){
                  $("#"+mdiv).load(url+"&id="+<?php echo $_GET['id']?>);












});


                  //console.log( data.name ); 
       
      };

      //$("#contenido").cargar("lista.php");




</script>







<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization',
       'version':'1','packages':['timeline']}]}"></script>
<script type="text/javascript">


/*
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
    [ '01-03-2014', 'Beginning JavaScript',       new Date(0,0,0,0,0,0),  new Date(0,0,0,3,30,0) ],
   [ '01-03-2014', 'asdasript',       new Date(0,0,0,3,30,0),  new Date(0,0,0,6,30,0) ],
    [ '02-03-2014', 'Beginning JavaScript',    new Date(0,0,0,0,0,0),  new Date(0,0,0,5,30,0) ],
    [ '03-03-2014', 'Advanced JavaScript',        new Date(0,0,0,0,0,0),  new Date(0,0,0,7,30,0) ],
    [ '04-03-2014',   'Beginning Google Charts',    new Date(0,0,0,0,0,0), new Date(0,0,0,0,0,0) ],
    [ '05-03-2014',   'Intermediate Google Charts', new Date(0,0,0,0,0,0), new Date(0,0,0,6,0,0) ],
    [ '06-03-2014',   'Advanced Google Charts',     new Date(0,0,0,0,0,0), new Date(0,0,0,8,0,0) ]]);

  var options = {
timeline: { singleColor: '#8d8' },
  };

  chart.draw(dataTable, options);
}

*/
</script>




</head>

<body>





 <?php //echo $_GET['f'];



//$fecha=$_GET['f'];
$proyecto=$_GET['id'];
 ?>



<?php 



$proyecto=$_GET['id'];

if(isset($_GET['m'])){
  $elmes=$_GET['m'];
  $elaño=$_GET['a'];
}else{
  $elaño=date('Y');
  $elmes=date('m');
}


//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE month(fecha)='$elmes' and year(fecha)='$elaño' and proyecto='$proyecto' and a<>'00:00:00'";
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
  $mis_fechas[]=$fila["fecha"];
  $mis_relojes2[$a]["d"]=$fila["d"];   
  $mis_relojes2[$a]["a"]=$fila["a"];  
  $a++;
}

mysql_free_result($resultado);

//print_r($gastos);



$lasuma="00:00";
if(isset($mis_relojes2)){

  $teke="00:00";

 for ($i = 1; $i <= count($mis_relojes2); $i++) {


  $date = date_create($mis_relojes2[$i]["d"]);
 $date1 = date_create($mis_relojes2[$i]["a"]);
 //echo  "<div>".date_format($date,'H:i')." - ".date_format($date1,'H:i') ."</div>";

  

$datetime1 = date_create($mis_relojes2[$i]["d"]);//$GLOBALS["r"]
$datetime2 = date_create($mis_relojes2[$i]["a"]);//
  $newfecha = date_diff($datetime1, $datetime2);   


$h1="$newfecha->h:$newfecha->i";
  //echo "<div style='float:left;'><b> $newfecha->h:$newfecha->i h.</b>&nbsp;</div>";    


   //echo "<button onclick='borrar(\"$fecha\",".$mis_relojes2[$i]["id"].")' type='button'>b</button>";   
          
          
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


  $miarrayes[]=$h1.":00";
 
  $teke=sumar3($h1,$teke);

$horas=$teke;
  }


//var_dump($miarrayes);



/*
  if(count($mis_relojes2)>1){


 echo "<div style='font-size:16px;'><b>total: $horas h</b></div>";
  }
*/
 /*echo "<script>

 var mivariableglob='".$horas."';
 </script>";*/
//$GLOBALS['tt'][]=$horas;

  //echo json_encode(array("name"=>"isa","time"=>$horas));
 


/**
* Ejemplo de uso
*/
 
/**
* Array de tiempos que queremos sumar
* @var Array
*/
$tiempos = $miarrayes;
// Inicializamos el tiempo

//var_dump($tiempos);
$tiempoInicial = new SumaTiempos();
// Recorremos los tiempos y los vamos sumando
foreach ($tiempos as $parcial) {
$tiempoInicial->sumaTiempo(new SumaTiempos($parcial));
}
// Mostramos el tiempo final




$lasuma= $tiempoInicial->verTiempoFinal(); // En este ejemplo 32:04:10.40














 }






function sumar3($h1,$h2)
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



Horas trabajadas este mes: <?php echo $lasuma;?><br>
Dias trabajados este mes:


<?php 


if(isset($mis_fechas)){
//var_dump($mis_fechas);
$resultado = array_unique($mis_fechas);

//var_dump($resultado);
echo count($resultado);

}else{

echo "0";

}



?>
<br>

<?php 

function seleccionar($fecha){
  $cut=explode('-', $fecha);
  $dia=intval($cut[2]);

//echo $fecha;
//$newstr = explode('"', $fecha);
//echo "**".$fecha."**";



global $host,$user,$password,$dbname;
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");



//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE fecha=$fecha and proyecto='".$_GET['id']."'";
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

//print_r($mis_relojes);

$check1='';
$check2='';
$check3='';



if(isset($mis_relojes)){
  $estado=$mis_relojes[1]["estado"];
  
  if($mis_relojes[1]["estado"]==0){
   $check1='selected';
  }
  if($mis_relojes[1]["estado"]==1){
   $check2='selected';
  }
  if($mis_relojes[1]["estado"]==2){
   $check3='selected';
  }

 // echo "$$".$estado;
}else{

  $check1='selected';
}


  return "

<div style='float:left; height:30px; width:122px;'>
<select id='sel_$dia' style='float:left;'>
  <option value='0' $check1 >blanco</option>
  <option value='1' $check2 >asistio</option>
  <option value='2' $check3 >no asistio</option>
</select> 
<button type='button' onclick='guardar(".$fecha.");'>g</button> 
</div>


 ";
}


function anotaciones($id,$fecha){




global $host,$user,$password,$dbname;
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");



//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE id='".$id."'";
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
  $mis_relojes[$a]["descripcion"]=$fila["descripcion"];   
  $a++;
}

mysql_free_result($resultado);



if(isset($mis_relojes)){
$miid= $mis_relojes[1]["id"];
$nota=$mis_relojes[1]["descripcion"];

}else{

$miid="";
  $nota="";
}


$mimi=str_replace('"', '', $fecha);
$newfecha=explode('-', $mimi);

  $a= "<div style='float:left;'>


<textarea id='nota_$newfecha[2]' class='editbox' style='float:left;width: 85px; height: 46px; resize: vertical;'>".$nota."</textarea>


  </div><div style='float:left;'><button style='width:27px;' onclick='guarda_anota($fecha);' type='button'>g</button></div>";


  return $a;
}


function tildar($fecha){



  $plim=explode('-', $fecha);

  if ($plim[2]==""){
}else{

global $host,$user,$password,$dbname;
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");



//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE fecha='".$fecha."' and proyecto='".$_GET['id']."'";
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
  $mis_relojes[$a]["descripcion"]=$fila["descripcion"];   
  $a++;
}

mysql_free_result($resultado);

//print_r($gastos);

$colormi='white';



if(isset($mis_relojes)){
  $estado=$mis_relojes[1]["estado"];
  if($mis_relojes[1]["estado"]==0){
  $colormi='white';
  }
  if($mis_relojes[1]["estado"]==1){
  $colormi='green';
  }
  if($mis_relojes[1]["estado"]==2){
  $colormi='red';
  }
  $miid=$mis_relojes[1]["id"];
}else{
  $miid='';
  $estado=0;
}


return "<div style='width:120px;'><div  id='".$plim[2]."' style='width:20px; height:20px; background-color:".$colormi."; border:1px solid;'></div> <div id='o_".$plim[2]."' style='display:none;' class='o_".$plim[2]."'>".$estado."</div>".seleccionar("\"".$fecha."\"").anotaciones($miid,"\"".$fecha."\"")." <div style='float:left;'><input value='00:00' id='d".$plim[2]."' style='width:40px;' type='text' value='' ></div><div style='float:left;'><input value='00:00' id='a".$plim[2]."' style='width:40px;' type='text' value='' > </div><div style='cursor:pointer; float:left;'  ><button style='width:27px;' onclick='guarda(\"".$fecha."\");' type='button'>g</button></div> <div id='list_".$plim[2]."' style='font-size:16px;'></div></div>"."<script>$('#d".$plim[2]."').timepicker(); </script>"."<script>$('#a".$plim[2]."').timepicker(); </script>";//.$fecha   
}



  
}
?>

<table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>


<?php //echo $mimes; ?> 
<select id="mes">
  <option  <?php if($mimes=="1"){echo 'selected';}  ?> value="1">Enero</option>
  <option  <?php if($mimes=="2"){echo 'selected';} ?> value="2">Febrero</option>
  <option <?php if($mimes=="3"){echo 'selected';} ?> value="3">Marzo</option>
  <option <?php if($mimes=="4"){echo 'selected';} ?> value="4">Abril</option>
  <option <?php if($mimes=="5"){echo 'selected';} ?> value="5">Mayo</option>

    <option  <?php if($mimes=="6"){echo 'selected';} ?> value="6">Junio</option>
  <option  <?php if($mimes=="7"){echo 'selected';} ?> value="7">Julio</option>
  <option <?php if($mimes=="8"){echo 'selected';} ?> value="8">Agosto</option>
  <option <?php if($mimes=="9"){echo 'selected';} ?> value="9">Septiembre</option>
  <option <?php if($mimes=="10"){echo 'selected';} ?> value="10">Octubre</option>


  <option  <?php if($mimes=="11"){echo 'selected';} ?> value="11">Noviembre</option>
  <option  <?php if($mimes=="12"){echo 'selected';} ?> value="12">Diciembre</option>


</select> 


<select id="ano">
  <option <?php if(date("Y")=="2014"){echo 'selected';} ?> value="2014">2014</option>
  <option <?php if(date("Y")=="2015"){echo 'selected';} ?> value="2015">2015</option>
  <option <?php if(date("Y")=="2016"){echo 'selected';} ?> value="2016">2016</option>
  <option <?php if(date("Y")=="2017"){echo 'selected';} ?> value="2016">2017</option>
</select> 

<button type="button" onclick="cambiar()">Cambiar</button> 

    </td>
  </tr>
</table>




<table width="600"  bgcolor="#d4d4d4" border="1" cellspacing="0" cellpadding="5">
  <tr bgcolor="#002164" STYLE="color:white;" align="center">
    <td>LUNES</td>
    <td>MARTES </td>
    <td>MIERCOLES</td>
    <td>JUEVES</td>
    <td>VIERNES</td>
    <td>SABADO</td>
    <td>DOMINGO</td>
  </tr>

   <?php 



   $nro_mes = $mimes; //diciembre 
   $ano = $miaño; //año en curso  
    $mes = mktime( 0, 0, 0, $nro_mes, 1, $ano );
    $cantdias= date('t',$mes);
    // echo ( 'El mes '.$nro_mes.' tiene '. date('t',$mes).' dias');// - See more at: http://www.diegodicamillo.com.ar/blog/2011/02/25/obtener-con-php-la-cantidad-de-dias-de-un-mes/#sthash.SVcrQdbc.dpuf


$dia= date("w",mktime(0, 0, 0, $nro_mes, "1", $ano));

//echo $dia;

if ($dia==0){$dia=7;}
//echo $dia;

 for ($i = 1; $i <= $cantdias+$dia-1; $i++) {

if($i>=$dia){

    $fecha[$i]['dia']=$i-$dia+1;
}else{
    $fecha[$i]['dia']="";
}

}



$l=1;
$micolor=1;




 for ($i = 1; $i <= count($fecha); $i++) {



if($micolor==1){
$color="#f1f1f1";
$micolor=0;
}else{
$color="#d4d4d4";
$micolor=1;
}


if(date('d')==$fecha[$i]['dia'] and date('m')==$nro_mes and date('Y')==$ano ){
$color="#95FF95";

}




  if($l==1){echo "<tr>";}

echo "<td valign='top' bgcolor='$color'><div style='font-size:22px;font-weight:bold;' align='center'>".$fecha[$i]['dia']."</div>".tildar($ano.'-'.$nro_mes.'-'.$fecha[$i]['dia'])."<script>$('#list_".$fecha[$i]['dia']."').cargar('lista.php?f=".$ano.'-'.$nro_mes.'-'.$fecha[$i]['dia']."','list_".$fecha[$i]['dia']."');</script>"."</td>";



 if($l==7){echo "</tr>";$l=1;}else{ $l=$l+1;}
 
   ?>


  <?php


 }


   ?>
   
</table>
<p>&nbsp;</p>





<script>


function guarda_anota(fecha){
 





tiki = fecha.split('-');



var fruits=$('#nota_'+tiki[2]).val()+'!'+fecha+"!"+<?php echo $_GET['id'];?>;
//alert(fruits);
$.post( "guardar_nota.php", 

 { func: "getNameAndTime", pages: fruits },


  function( data ) {
console.log( data.name ); // John
console.log( data.time ); // 2pm

//alert('complete');


a='list_'+tiki[2];
  $("#"+a).cargar("lista.php?f="+fecha,a);
}


,


 "json");


//$('#tarea').val('');








//alert('dsasd'+this);
  }


function guarda(fecha){

//alert('isa'+fecha);

tiki = fecha.split('-');



var fruits=$('#d'+tiki[2]).val()+'!'+$('#a'+tiki[2]).val()+'!'+fecha+"!"+<?php echo $_GET['id']; ?>;
$.post( "guardar.php", 

 { func: "getNameAndTime", pages: fruits },


  function( data ) {
console.log( data.name ); // John
console.log( data.time ); // 2pm

//alert('complete');


a='list_'+tiki[2];
  $("#"+a).cargar("lista.php?f="+fecha,a);
}


,


 "json");


//$('#tarea').val('');






}





function guardar(fecha){
  tiki = fecha.split('-');
a='sel_'+tiki[2];
 valor=$("#"+a).val();


//alert('guardar. fecha'+fecha+'valor'+valor+'tiki'+tiki[2]);
dia=tiki[2];




/////////////////////////


if(valor==0){
$("#"+dia).css({'background-color':'white'});
}

if(valor==1){
$("#"+dia).css({'background-color':'green'});
}

if(valor==2){
$("#"+dia).css({'background-color':'red'});
}

//////////////////////////



 var fruits= fecha+'!'+valor+"!"+<?php echo $_GET['id']; ?>;

$.post( "tildar.php", 

 { func: "getNameAndTime", pages: fruits },


  function( data ) {
console.log( data.name ); // John
console.log( data.time ); // 2pm

//alert('complete');

  //$("#contenido").cargar("lista.php");
}


,


 "json");



//$("#contenido").cargar("lista.php");







}



function borrar(fecha,id){

 if (confirm('¿Estas seguro borrar este registro?')){

//alert('isa'+fecha);

tiki = fecha.split('-');



var fruits=id;
$.post( "del_reloj.php", 

 { func: "getNameAndTime", pages: fruits },


  function( data ) {
console.log( data.name ); // John
console.log( data.time ); // 2pm

//alert('complete');


a='list_'+tiki[2];
  $("#"+a).cargar("lista.php?f="+fecha,a);
}


,


 "json");


//$('#tarea').val('');





}
}

$("#guardar").click(function(){
alert("guardar");


/*
var fruits=$('#tarea').val();
$.post( "save_msj.php", 

 { func: "getNameAndTime", pages: fruits },


  function( data ) {
console.log( data.name ); // John
console.log( data.time ); // 2pm

//alert('complete');

  $("#contenido").cargar("lista.php");
}


,


 "json");


$('#tarea').val('');




*/

});



  </script>


  


</body>
</html>
