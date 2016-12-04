<?php 


date_default_timezone_set('America/Argentina/Buenos_Aires'); 


if( $_SERVER['SERVER_NAME'] == "localhost"){
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

?>



  <?php 		  

$tablename="relojes";
//$filtro=" ORDER BY id LIMIT 20,10";
//$filtro="WHERE ".$campo." like '$buscar%' $filtro50";
$query="SELECT * FROM $tablename WHERE idproyecto='11' ;";
//$sql = "SELECT * FROM noticias WHERE noticia like ‘%$buscar%’ ORDER BY id DESC";
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
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$busqueda[$a]["id"]=$fila["id"];
	$busqueda[$a]["fecha"]=$fila["fecha"];
	$busqueda[$a]["op"]=$fila["op"];
	//$pagos[$a]["fecha"]=$fila["fecha"];	
	//$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

//print_r($busqueda);










$tablename="tareas";
$filtro="WHERE id='11'";
//$filtro="WHERE ".$campo." like '$buscar%' $filtro50";
$query="SELECT * FROM $tablename $filtro ;";
//$sql = "SELECT * FROM noticias WHERE noticia like ‘%$buscar%’ ORDER BY id DESC";
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
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$tarea[$a]["id"]=$fila["id"];
	$tarea[$a]["nombre"]=$fila["nombre"];
	$tarea[$a]["fecha_entrega"]=$fila["fecha_entrega"];
	$tarea[$a]["tiempo_estimado"]=$fila["tiempo_estimado"];
	$tarea[$a]["idproyecto"]=$fila["idproyecto"];
	//$pagos[$a]["fecha"]=$fila["fecha"];	
	//$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

?>


               <?php   //print_r($tarea);
			   
			   
			   			$u=0;
			       for ($i = 1; $i <= count($busqueda); $i++) {
				   
				   if($busqueda[$i]["op"]=="1" and $i==count($busqueda) ){
				   
				   }else{
					   if($u==0){
						   $fecha_inicio=new DateTime($busqueda[$i]["fecha"]);
						   $u=1;
					   }else{
							$fecha_fin = new DateTime($busqueda[$i]["fecha"]);
							$u=0;
							$fecha = $fecha_inicio->diff($fecha_fin);
							$horas=$fecha->h;
							$dias=$fecha->d;
							$min=$fecha->i;
							$seg1=$fecha->s;
							//echo "-----".$seg1;
							
							$horasdias= $dias*24;
							//sumar 
							$tot=$horasdias + $horas;
							$arraytiempos[]=sprintf('%02d', $tot).":".sprintf('%02d', $min).":".sprintf('%02d', $seg1);
							
							
					   }
					 }
					   
				   }
				   //echo "<br>"; 
				   //print_r($arraytiempos);

				   
				   
				   function sumar ($v1,$v2){
				   //echo $v1."///".$v2;
				   $tiempo1=explode(':',$v1);
				    $tiempo2=explode(':',$v2);
				   $hor1=$tiempo1[0];
				   $min1= $tiempo1[1];
				   $seg1=$tiempo1[2];
				   
				   
				   $hor2=$tiempo2[0];
				   $min2= $tiempo2[1];
				   $seg2=$tiempo2[2];
				   
				   
				   
				   
				   
				   
				   $tothoras= $hor1+$hor2;
				   $totmin= $min1+$min2;
				   
				   /*
				   if($totmin=>60){
				   	 $tothoras++;
				   }*/
				   
				   
				   $tot=$tothoras.":".$totmin;
				   
				   return $tot;
				   }
				   
				   
				   
				   
				   	
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
//echo sumar3("05:20:00","09:20:30");

				   
				   
				   $u=0;
				   $totales="00:00:00";
				   $este=0;
				 // print_r($arraytiempos);
				   //echo count($arraytiempos);
				   for ($i = 0; $i <= count($arraytiempos)-1; $i++) {
				  
				  
						  if($u == 0){
						   $fecha_inicio=$arraytiempos[$i];
						   $u++;
						   }else{ 
						   $fecha_fin=$arraytiempos[$i];
						   $u=0;
						 //  echo $fecha_inicio."++".$fecha_fin."++";
							 $kk=sumar3($fecha_inicio,$fecha_fin);
							  $totales= sumar3($totales,$kk);
						   }
						
								
						
						
				
				
							 //$este=sumar($fecha_inicio,$fecha_fin);
								//echo $fecha_inicio."--".$fecha_fin."//";
							 //echo "**".$este;
						
							  //echo $totales;
							  //echo "<br>";
						
						
						}
						
						 
						   //echo "<br>"; 
						  // echo("-----".$totales);
				
			   ?>



<?php 
					
					$fecha1 = new DateTime("2010-07-28 01:15:52");
$fecha2 = new DateTime("2012-11-30 02:33:45");
$fecha = $fecha1->diff($fecha2);
//printf('%d años, %d meses, %d días, %d horas, %d minutos', $fecha->y, $fecha->m, $fecha->d, $fecha->h, $fecha->i);
// imprime: 2 años, 4 meses, 2 días, 1 horas, 17 minutos
//echo"<br>";
$horas=$fecha->h;
$dias=$fecha->d;
$min=$fecha->i;
//sumar horas de dias

$horasdias= $dias*24;
//sumar 
$tot=$horasdias + $horas;

//echo $horas;
//echo"<br>";


//echo $fecha->d;
//echo $min;
//echo"<br>";
$tiempo_guardadito= "<div id='tiempo_guardado'>".$totales."</div>";	

//echo $totales;

$jk=explode(":",$totales);


				?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>R2D2</title>
<style type="text/css">
	body{
	background-color:#fefbec;
	color: #000000;
	font-family:Arial;
	}

	.botonsitos{
margin-bottom: 20px;
	}
</style>
    <!-- Bootstrap 
    <link href="css/bootstrap.css" rel="stylesheet">
-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">-->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>





<!--

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>R2D2</title>
-->

<SCRIPT LANGUAGE="JavaScript" >
<!--


var variabletiempoestimado;
var variabletiempototal;
variabletiempoestimado=<?php echo $tarea[1]["tiempo_estimado"]; ?>;
variabletiempototal=<?php  echo round($jk[0]).".".$jk[1];	 ?>;

/*
  mystr =variabletiempototal;
		
	  formatoposta1=mystr.split(".");
	  
	  
	 
	   h = (formatoposta[1] < 10) ? ("0" + formatoposta[1]) : formatoposta[1];
	   
	variabletiempototal=formatoposta[0]+"."+formatoposta[1];
	*/

//
var hour = "0"
var min = "00"
var sec = "0"





function timer(){
//alert("bla");



if ((min < 10) && (min != "00")){
 dismin = "0" + min
}
else{
 dismin = min
}
 dissec = (sec < 10) ? sec = "0" + sec : sec
 
 document.getElementById("tiempotrackeado").innerHTML=hour + ":" + dismin + ":" + dissec;	
 	tiempo_actual=hour + "." + dismin;
 	tiempo_guardado=<?php  echo round($jk[0]).".".$jk[1];	 ?>+"";
	
	
	<?php if ($_GET['b']=="0" or $_GET['b']=="3"){ ?>
	tiempo_total=sumaTiempos(tiempo_guardado,"0.0");
	variabletiempototal=sumaTiempos(tiempo_guardado,"0.0");
	//tiempo_total;//sumaTiempos(tiempo_total,tiempo_actual)+"----" ;	
	  
	<?php }else{  ?>
	tiempo_total=sumaTiempos(tiempo_guardado,tiempo_actual)+ ":"+dissec;
	variabletiempototal=sumaTiempos(tiempo_guardado,tiempo_actual);
	 document.getElementById("tiempototal").innerHTML=tiempo_total;	
	 
	// document.getElementById("output").value=tiempo_total;	
	<?php }?>
    
	 
	 
	 
	 document.getElementById("live_tiempo").innerHTML=hour + ":" + dismin + ":" + dissec;		
	  document.getElementById("liveclock").innerHTML=tiempo_total;	
	  
	   //formatoposta33=hour.split(":");
	     h = (hour < 10) ? ("0" + hour) : hour;
	    document.getElementById("tiempo_trakeado33").value=h + ":" + dismin + ":" + dissec;
		 document.getElementById("tiempo_trakeado43").innerHTML=h + ":" + dismin + ":" + dissec;
	  //document.getElementById("tiempo_guardado50").innerHTML=tiempo_guardado;
	  
	
  mystr = document.getElementById("tiempo_total333").value;//tiempo_total;
// alert(mystr);//0.12:15

 
		
	  formatoposta1=mystr.split(":");
	   h = formatoposta1[0];
	    m = (formatoposta1[1] < 10) ? ("0" + formatoposta1[1]) : formatoposta1[1];
	 <?php if ($_GET['b']=="0" or $_GET['b']=="3" ){?>
	 //s =  <?php //echo $jk[2];?>;
	 document.getElementById("reloj_generator").innerHTML=document.getElementById("tiempo_guardado").innerHTML;
	 <?php }//}else{  ?>
	    		 <?php if ($_GET['b']=="1" ){?>
		s =  formatoposta1[2];
	  <?php }?>
	   //alert(s);
	   <?php //}?>
 //myvar = myarr[0] + "."+h;// + ;
  
	   formatoposta=h+":"+m+":"+s;
	
	  document.getElementById("tiempo_virtual").value=formatoposta;	
	  document.getElementById("reloj_generator").innerHTML=formatoposta;	

document.getElementById("tiempo_total11").value=document.getElementById("tiempo_guardado").innerHTML+" - - "+document.getElementById("tiempo_trakeado33").value;	//sumaTiempos(tiempo_total,tiempo_actual)

format1=document.getElementById("tiempo_guardado").innerHTML;
mystr = format1;
format1=mystr.split(":");

format2=document.getElementById("tiempo_trakeado33").value;
mystr = format2;
format2=mystr.split(":");

//document.getElementById("tiempo_total22").value=format1[1]+"."+format1[2]+"//"+format2[1]+"."+format2[2];
document.getElementById("tiempo_total22").value=sumaTiempos(format1[1]+"."+format1[2],format2[1]+"."+format2[2]);
//sumaTiempos(format1[1]+"."+format1[2],format2[1]+"."+format2[2]);//tiempo_total,tiempo_actual


mystr = document.getElementById("tiempo_total22").value;
formatoposta1=mystr.split(".");
h="00";////////// FALTA
m = (formatoposta1[0] < 10) ? ("0" + formatoposta1[0]) : formatoposta1[0];
s = (formatoposta1[1] < 10) ? ("0" + formatoposta1[1]) : formatoposta1[1];
formatoposta=h+":"+m+":"+s;
document.getElementById("tiempo_total333").value=formatoposta;





 if (sec < 59){
  sec++
 }
 else{
  sec = "0"
  min++
  if (min > 59){
   min = "00"
   hour++
  }
 }
 window.setTimeout("timer()",1000)
}
// -->




<?php if ($_GET['b']=="0" or $_GET['b']=="3"){ ?>
document.getElementById("reloj_generator").innerHTML="///"; document.getElementById("tiempo_guardado").innerHTML;
<?php }?>
</SCRIPT>



<script language="JavaScript" type="text/javascript">
/*Script del Reloj */

//alert("buee2");


function actualizaReloj() {
/* Capturamos la Hora, los minutos y los segundos */
marcacion = new Date()
/* Capturamos la Hora */
Hora = marcacion.getHours()
/* Capturamos los Minutos */
Minutos = marcacion.getMinutes()

/* Capturamos los Segundos */
Segundos = marcacion.getSeconds()
//console.log(Hora+" "+Segundos);
/*variable para el apóstrofe de am o pm*/
dn = "a.m"
if (Hora > 12) {
dn = "p.m"

}

/* Si la Hora, los Minutos o los Segundos son Menores o igual a 9, le añadimos un 0 */
if (Hora <= 9) Hora = "0" + Hora
if (Minutos <= 9) Minutos = "0" + Minutos
if (Segundos <= 9) Segundos = "0" + Segundos
/* Termina el Script del Reloj */

/*Script de la Fecha */

var Dia = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
var Mes = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
"Octubre", "Noviembre", "Diciembre");
var Hoy = new Date();
var Anio = Hoy.getFullYear();
var Fecha = Dia[Hoy.getDay()] + ", " + Hoy.getDate() + " de " + Mes[Hoy.getMonth()] + " de " + Anio + ". ";

/* Termina el script de la Fecha */

/* Creamos 2 variables para darle formato a nuestro Script */
var Script, Total

/* En Reloj le indicamos la Hora, los Minutos y los Segundos */
Script =  "<div style='font-size:32px;'>"+Hora + ":" + Minutos + " "+ "</div> "+"<div style='font-size:18px;font-weight:bold;'>"+Fecha+"</div>";

/* En total Finalizamos el Reloj uniendo las variables */
Total = Script

/* Capturamos una celda para mostrar el Reloj */
document.getElementById('Fecha_Reloj').innerHTML = Total

/* Indicamos que nos refresque el Reloj cada 1 segundo */
setTimeout("actualizaReloj()", 1000)
}
</script>


<script language="JavaScript">
function reloj(){
	alert("relok");
}



</script>

<style type="text/css">


.btn {
	text-transform: uppercase;  
  background: #f9fbfc;
  background-image: -webkit-linear-gradient(top, #f9fbfc, #c9c9c9);
  background-image: -moz-linear-gradient(top, #f9fbfc, #c9c9c9);
  background-image: -ms-linear-gradient(top, #f9fbfc, #c9c9c9);
  background-image: -o-linear-gradient(top, #f9fbfc, #c9c9c9);
  background-image: linear-gradient(to bottom, #f9fbfc, #c9c9c9);
  -webkit-border-radius: 11;
  -moz-border-radius: 11;
  border-radius: 11px;
  font-family: Arial;
  color: #000000;
  font-size: 18px;
  padding: 5px 10px 5px 10px;
  text-decoration: none;
  margin: 3px;
}

.btn:hover {
  background: #54585A;
  background-image: -webkit-linear-gradient(top, #54585A, #000000);
  background-image: -moz-linear-gradient(top, #54585A, #000000);
  background-image: -ms-linear-gradient(top, #54585A, #000000);
  background-image: -o-linear-gradient(top, #54585A, #000000);
  background-image: linear-gradient(to bottom, #54585A, #000000);
  text-decoration: none;
  color: #ffffff;
}




button::-moz-focus-inner,
input[type="reset"]::-moz-focus-inner,
input[type="button"]::-moz-focus-inner,
input[type="submit"]::-moz-focus-inner,
select::-moz-focus-inner,
input[type="file"] > input[type="button"]::-moz-focus-inner {
    border: none;
}


.mibotonsito {
cursor:pointer;vertical-align:text-top;padding:50px 0 0;vertical-align: text-bottom;line-height : 29px; font-weight:bold;width:130px; height:80px; background-color:#FFFFFF;
}

body {
	/* background-image: url(black-background.jpg); */
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(black-background.jpg);
}
.Estilo2 {
	color: #000000;
	font-size: 24px;
}
.Estilo3 {
	color: #8d9396;
	font-size: 36px;
}
.Estilo6 {color: #FFFFFF}
.Estilo8 {color: #8d9396; font-size: 24px; }
.Estilo10 {color: #8d9396; font-size: 26px; font-weight: bold; }

.texto1{
	color: #ffffff;
}

.texto2{
	
	font-size: 16px;
}
<?php if($_GET['b']=="0" or $_GET['b']=="3"){?>
#tiempo_trakeado43{ display:none;}
<?php }else{?>


<?php }?>

<?php if($_GET['b']=="0" or $_GET['b']=="3"){?>

<?php }else{?>
#tiempo_guardado50{ display:none;}
<?php }?>

#fondito{ background-image:url(jquery.tzineClock/img/bg_green.png); width:182px; height:182px;}

</style>
<!-- -->
<link rel="stylesheet" type="text/css" href="styles.css" />

<link rel="stylesheet" type="text/css" href="jquery.tzineClock/jquery.tzineClock.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

  <script src="jquery-1.10.2.min.js">//jquery-2.0.3.min</script>

<script type="text/javascript" src="jquery.tzineClock/jquery.tzineClock.js"></script>

<script type="text/javascript" src="script.js"></script>


<script language="JavaScript">




function sumaTiempos(t1, t2){
var dot1 = t1.indexOf(".");
var dot2 = t2.indexOf(".");
var m1 = t1.substr(0, dot1);
var m2 = t2.substr(0, dot2);
var s1 = t1.substr(dot1 + 1);
var s2 = t2.substr(dot2 + 1);
var sRes = (Number(s1) + Number(s2));
var mRes;
var addMinute = false;
if (sRes >= 60){
addMinute = true;
sRes -= 60;
}
mRes = (Number(m1) + Number(m2) + (addMinute? 1: 0));
return String(mRes) + "." + String(sRes);
}

function calculaT3(){
//alert("calcula");
//alert(sumaTiempos("02.30", "01.20"));
}

</script>





<script>
function cargar(url,mdiv){
	//alert('aqui');
                  $("#"+mdiv).load(url);
}





</script>



<script>


function filtrar(){


jj=$( "#selector").val();
a="milist";

if(jj==0){
$("#"+a).cargar("lista_links.php?",a);
}else{
$("#"+a).cargar("lista_links.php?s="+jj,a);
}



//alert("filtro "+jj);
}



h=1;

function agregarlink(){
	//alert('dasdas');

	if (h==1){
$( "#list_links" ).show();

$( "#titulo" ).val('');
$( "#link" ).val('');
$( "#categoria" ).val('');
$( "#boton1" ).val('Cerrar Agregar +');

h=0;
	}else{

$( "#list_links" ).hide();
$( "#boton1" ).val('Agregar +');
$( "#categoria" ).val('');
$( "#titulo" ).val('');
$( "#link" ).val('');
h=1;
$("#selector").val("0");
	}
	

}



function guardarlink(){
	//alert('dasdas');
	
//alert('isa');

//tiki = fecha.split('-');



var fruits=$('#titulo').val()+'!'+$('#link').val()+'!'+$('#categoria').val();
$.post( "guardar_links.php", 

 { func: "getNameAndTime", pages: fruits },


  function( data ) {
console.log( data.name ); // John
console.log( data.time ); // 2pm

//alert('complete');



h=0;
agregarlink();
	//$( "#list_links" ).hide();




	a="milist";
	  $("#"+a).cargar("lista_links.php?",a);
}


,


 "json");


//$('#tarea').val('');













}




function myFunction()
{
alert("I am an alert box!");
document.getElementById("tiempototal").innerHTML="mmmmmmm";	
}

//alert("buee3");

window.onload = function() {
// alert("bla");
  timer();
 calculaT3();
 
}

</script>




<style type="text/css">
<!--
.Estilo11 {font-size: 29px}
.Estilo12 {font-size: 24px; }
.Estilo13 {font-size: 16px}
.Estilo14 {font-size: 18px}


-->

input{
   /*   background:#58D3F7 url(http://png-1.findicons.com/files/icons/1580/devine_icons_part_2/128/home.png) no-repeat left;
    background-size:20px;
    padding:10px 25px;
    text-align:center;
  border:none; border-radius:3px; cursor:pointer;*/

}


</style>
</head>

<!-- <body>  -->
<body onLoad="actualizaReloj()">
<?php if (!isset($_GET['n'])){ ?>

















<table>
	<tr>
	<td>
	.	
	</td>
	</tr>
</table>


<div class="container" style=""> 

	<!-- Columns are always 50% wide, on mobile and desktop -->
	<div class="row">


 <table style="width:100%;background-color: #EBEBEB; ">
  <tr>
    <td style="background-color: #54585A;padding:20px;">
    	







	  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3" style="height:400px;">

	  <div style="font-size:22px;font-weight:bold;" class="text-center texto1">R2D2 "ARTURITO"</div>
	  

<img src="r2d2.jpg" class="img-responsive center-block">

<p class="text-center texto1">es mi ayudante y tanque de ideas</p>

</div>






<table>
 <tr>
    <td>





<div class="col-xs-12 col-sm-12 col-md-8 col-lg-12 text-center" style="height:100%;">









	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 text-center">
		
			<div align="center" style=" margin-bottom:10px;" id="Fecha_Reloj" class="texto1">
              <div ></div>
            </div>


	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 text-center texto1 texto2">
		
Temperatura 23 c <br>		
prob de precipitaciones 0%<br>
humedad 73%<br>
viento: a 14 km x hora<br>



	</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 text-center texto1 texto2">
		
estado transito:
<br>	tren:<br>calles:	<br>subtes:<br>	


	</div>
			
		
         
	










	</div>	



    </td>
  </tr>
   <tr>
    <td>
    	


<div class="col-xs-6 col-sm-4 col-md-3 col-lg-12">



		  
	<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 text-center botonsitos" style="">
		
		    <input type="submit" name="Submit37" value="Finanzas" class="mibotonsito"  style="background:white url('FINANZAS.jpg');background-size: 65px 65px;background-repeat:no-repeat; background-position:50% 0px; " onClick="window.open('finanzas/index.php','_blank')">


	</div>		  

		<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 text-center botonsitos" style="">
		
		    <input type="submit" name="Submit36" value="Tracker tiempo" class="mibotonsito"  style="background:white url('11371551-cronometro-sobre-fondo-blanco-aislados-imagen-en-3d.jpg');background-size: 55px 55px;background-repeat:no-repeat; background-position:50% 4px; " onClick="window.open('tracker/index.php','_blank')">


	</div>	

		<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 text-center botonsitos" style="">
		

                         <input type="button" name="Submit38" value="Mis tareas" class="mibotonsito"  style="background:white  url('task.png');background-size: 48px 48px;background-repeat:no-repeat; background-position:50% 7px; " onClick="window.open('tareas/3.php','_blank')">





                          

                             

                             


	</div>	

		<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 text-center botonsitos" style="">
		


                 


      <input type="submit" name="Submit39" value="Calendario" class="mibotonsito"  style="background:white url('icono_Calendario.jpg');background-size: 55px 55px;background-repeat:no-repeat; background-position:50% 6px; " onClick="window.open('http://www.google.com/calendar/render?hl=es','_blank')">

                        

                          



	</div>	

	<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 text-center botonsitos" style="">
		

                        <input type="submit" name="Submit39" value="Clima" class="mibotonsito"  style="background:white url('icono_Calendario.jpg');background-size: 55px 55px;background-repeat:no-repeat; background-position:50% 6px; " onClick="window.open('https://www.google.com.ar/?gfe_rd=cr&ei=F_g6WJH_DqPV8AeSz5y4CQ&gws_rd=ssl#q=clima','_blank')">


                          



	</div>		  

		<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 text-center botonsitos" style="">
		

                          <input type="submit" name="Submit310" value="Camaras casa" class="mibotonsito"  style="background:white url('wsites.png');background-size: 50px 50px;background-repeat:no-repeat; background-position:50% 7px; " onClick="window.open('generadorweb/index.php','_blank')">


                          
                    


	</div>	

		<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 text-center botonsitos" style="">
		
      <input type="submit" name="Submit310" value="Camaras ciudad" class="mibotonsito"  style="background:white url('excel.jpg');background-size: 50px 50px;background-repeat:no-repeat; background-position:50% 7px; " onClick="window.open('https://docs.google.com/spreadsheet/ccc?key=0AuG3DD76WSZBdHUxSVNBaG1KdzFMT2Z6ZGE4NGt5THc&usp=sharing','_blank')">





	</div>	

		<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 text-center botonsitos" style="">
		
	
                          <input type="submit" name="Submit310" value="Estado Transito" class="mibotonsito"  style="background:white url('Drive Backup.png');background-size: 50px 50px;background-repeat:no-repeat; background-position:50% 7px; " onClick="window.open('backuplocal/index.php','_blank')">



                      


	</div>	

	<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 text-center botonsitos" style="">
		
    
                          <input type="submit" name="Submit310" value="BackUp Local" class="mibotonsito"  style="background:white url('Drive Backup.png');background-size: 50px 50px;background-repeat:no-repeat; background-position:50% 7px; " onClick="window.open('backuplocal/index.php','_blank')">



          

	</div>		  

		<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 text-center botonsitos" style="">
		
                

                          <input type="submit" name="Submit310" value="GDrive" class="mibotonsito"  style="background:white url('Drive Backup.png');background-size: 50px 50px;background-repeat:no-repeat; background-position:50% 7px; " onClick="window.open('http://drive.google.com/','_blank')">




	</div>	

		<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 text-center botonsitos" style="">
		


                          <input type="submit" name="Submit310" value="Generador web" class="mibotonsito"  style="background:white url('wsites.png');background-size: 50px 50px;background-repeat:no-repeat; background-position:50% 7px; " onClick="window.open('generadorweb/index.php','_blank')">



	</div>	

		<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 text-center botonsitos" style="">
		

                          <input type="submit" name="Submit310" value="Notas" class="mibotonsito"  style="background:white url('excel.jpg');background-size: 50px 50px;background-repeat:no-repeat; background-position:50% 7px; " onClick="window.open('https://docs.google.com/spreadsheet/ccc?key=0AuG3DD76WSZBdHUxSVNBaG1KdzFMT2Z6ZGE4NGt5THc&usp=sharing','_blank')">




	</div>	

</div>


    </td>
  </tr>
</table>














    </td>
  </tr>
  <tr>
    <td>
    	






<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">







<div  style="">
 <select id="selector">
  <option value="0">Todos</option>
  <option value="1">Reclut trabajo </option>
  <option value="2">Buscadores</option>
  <option value="3">Diarios</option>
  <option value="4">Hacking</option>
  <option value="5">tecnologia</option>
  <option value="6">mis sitios</option>
  <option value="7">Correos</option>
  <option value="8">Inmuebles</option>
</select> 

<input  type="button" id="boton55"  value="Filtrar" onClick="filtrar();" >
</div>


<div id="milist" class="text-center" style="float:left; width:100%; height:100%; overflow: auto;"></div>
<div>
	
<input  type="button" id="boton1"  value="Agregar +" onClick="agregarlink();" >

	
</div>


	 
	<div id="list_links" style="display:none;">
titulo
 <input type="text" id="titulo" />
 <br>
link
 <input type="text" id="link" />
<br>
Categoria
 <input type="text" id="categoria" />
<br>
  <input  type="button"  value="Guardar" onClick="guardarlink();" >
	</div>


	<script >


	a="milist";
	 // $("#"+a).cargar("lista_links.php?",a);
	  
	  cargar("lista_links.php?",a);
//alert('aqui1 abajo');

	</script>

        







<p class="text-center">clima, estado del transito, camaras ciudad, camaras de casa, detector moviemiento.</p>




</div>













    </td>
  </tr>
</table> 

			  
			  
	
	</div>		  
			




 </div>

















    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--
    <script src="js/bootstrap.min.js"></script>

 Include all compiled plugins (below), or include individual files as needed -->


<table>
	<tr>
	<td>
	.	
	</td>
	</tr>
</table>



























<?php }else{?>

<table width="100%" border="0" cellspacing="0" cellpadding="40">
  <tr>
    <td class="Estilo2"><table width="100%" height="251" border="1" cellpadding="0" cellspacing="0" bgcolor="#E9E9E9">
        <tr>
          <td width="18%" valign="top" bgcolor="f4f4f4"><a href="?n=1"><img src="11371551-cronometro-sobre-fondo-blanco-aislados-imagen-en-3d.jpg" width="168" height="168" border="0" /></a>
            <table width="100%" border="0" cellspacing="10" cellpadding="0">
            <tr>
              <td><table width="100%" height="30" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><a href="?n=1&o=4">DASHBOARD</a></td>
                  </tr>
                </table>
                <br>
                <table width="100%" height="30" border="0" cellpadding="0" cellspacing="0" bgcolor="c52b15">
                  <tr>
                    <td><a href="?n=1&o=1">TAREAS</a></td>
                  </tr>
                </table>
                <br><a href="?n=1&o=3">PROYECTOS</a></p>
                <table width="100%" height="30" border="0" cellpadding="0" cellspacing="0" bgcolor="282f32">
                  <tr>
                    <td><a href="asdasd">PLANILLAS</a></td>
                  </tr>
                </table>
                <p><a href="asdsada">EDITOR DE TIEMPO </a></p>
                <p><a href="?">INICIO</a></p></td>
            </tr>
          </table>          
          <p><a href="tracker/resumen.php" target="_blank">resumen</a></p>
          <p><a href="tracker/marcador.php" target="_blank">marcador</a></p></td>
          <td width="82%">
		  
		  <?php if ($_GET['o']=="2"){ ?>
		  
		  

		  
		  <?php 
		  
		 if($_GET['b']=="3"){}else{
		  $fecha=date("Y-m-d H:i:s");
		  $op=$_GET['b'];		  	
	$tablename="relojes";
	//$filtro="WHERE dni='".$dni."'";
	$query="INSERT INTO $tablename (fecha, op,idproyecto) VALUES ('".$fecha."','".$op."','11');";
	echo $query;
	mysql_select_db($dbname,$link);
	mysql_query($query,$link);
	$my_error = mysql_error($link);
	if(!empty($my_error)) {
	//cartel(3,"Hubo un error al insertar el registro. $my_error"); 
	echo "Hubo un error al insertar el registro. $my_error";
	} else {
	//echo '<div align="center">Se agrego con exito el pago. redireccctt</div>';
	
	/*echo '
	<script language="JavaScript">
	   window.location = "?n=1&o=2&b=3"
</script>';*/


	/*echo '<div style="border:groove; padding:5px; width:350px;">
<table width="350" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="59%"><div align="center">Se agrego con exito el pago. </div></td>
    <td width="41%"><img src="tilde_bien.png" width="117" height="120" /></td>
  </tr>
</table>
</div>';*/


	//echo cartel(3,"SSEEEEEEEEE");
	}
	
	}
	?>
		 
		  <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="1%" valign="top" bgcolor="282f32"><p>&nbsp;</p>
                </td>
              <td width="30%" valign="top" bgcolor="282f32"><table width="100%" border="0" cellspacing="10" cellpadding="0">
                <tr>
                  <td><p> <p>
                    <p align="center" class="Estilo6"><?php //relacionar(1,"proyectos"); ?> </p>
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="202020">
                      <tr>
                        <td>
						<div id="fondo_completo" style="position:absolute;  z-index:5;background-image:url(jquery.tzineClock/img/bg_orange.png); width:188; height:188px; display:none;"></div>
						<div id="fondito" style="position:absolute;  z-index:5;opacity: 0.1;filter:  alpha(opacity=10);"></div>
						
						<div id="fancyClock" style="position:absolute; z-index:3;"></div>
						<div align="center" style="position: relative; z-index:4; left:-3px; top:80px;">
						<span id="liveclock" class="Estilo10" style="display:none;">00:01:28</span>
						<div id="reloj_generator" class="Estilo10" style="position:relative; z-index:10;">00:01:28</div>
						
						
						
 <!--				
<script language="JavaScript" type="text/javascript">


function show5(){
if (!document.layers&&!document.all&&!document.getElementById)
return

 var Digital=new Date()
 var hours=Digital.getHours()
 var minutes=Digital.getMinutes()
 var seconds=Digital.getSeconds()

var dn="PM"
if (hours<12)
dn="AM"
if (hours>12)
hours=hours-12
if (hours==0)
hours=12

 if (minutes<=9)
 minutes="0"+minutes
 if (seconds<=9)
 seconds="0"+seconds
//change font size here to your desire
myclock=""+hours+":"+minutes+":"
 +seconds
if (document.layers){
document.layers.liveclock.document.write(myclock)
document.layers.liveclock.document.close()
}
else if (document.all)
liveclock.innerHTML=myclock
else if (document.getElementById)
document.getElementById("liveclock").innerHTML=myclock
setTimeout("show5()",1000)
 }


window.onload=show5

 </script>
    //-->                   
						
						
                                <span class="Estilo8"><div id='tiempoestimado11'></div></span></div>
								
								
								<script language="JavaScript" type="text/javascript">
								document.getElementById("tiempoestimado11").innerHTML=variabletiempoestimado+"hr";
								 </script>
								
							</td>
                      </tr>
                    </table>
					
					<div style="position:relative; top:150px;">
                    <form id="form1" name="form1" method="post" action="?n=1&o=2&b=<?php if ($_GET['b']=="1"){echo "0";}else{echo "1";} ?>">
                      <label>
                      <div align="center" style="background-color:#202020;">
                        <input type="submit" name="Submit" value="<?php if ($_GET['b']=="1"){echo "stop";}else{echo "play";} ?>" />
                      </div>
                      </label>
                    </form>
					
					
					
                    <p align="center" class="Estilo6"><?php echo $tarea[1]["nombre"]; ?></p>
					<div class="Estilo6">
                    <p >------------------------------<br />
                      
					  <?php if ($tarea[1]["fecha_entrega"]==""){ ?>
					  sin fecha de entrega<br />
					  <?php } ?>
					
					  
					  <?php 	
					  if ($tarea[1]["fecha_entrega"]==""){}else{				
					  $punga=date("Y-m-d H:i:s");
					  $fecha1 = new DateTime($punga);
$fecha2 = new DateTime("2012-11-30 02:33:45");
$fecha = $fecha1->diff($fecha2);
//printf('%d años, %d meses, %d días, %d horas, %d minutos', $fecha->y, $fecha->m, $fecha->d, $fecha->h, $fecha->i);
// imprime: 2 años, 4 meses, 2 días, 1 horas, 17 minutos
//echo"<br>";
$horas=$fecha->h;
$dias=$fecha->d;
$min=$fecha->i;

//echo "///".$punga;
//echo $dias;


$fecha=$tarea[1]["fecha_entrega"];
$segundos=strtotime($fecha) - strtotime('now');
$diferencia_dias=intval($segundos/60/60/24);
//echo "La cantidad de días entre el ".$fecha." y hoy es <b>".$diferencia_dias."</b>";


?>  <div style="color:#0099FF;"><?php echo $diferencia_dias." dias restantes"; ?></div>

<?php }?>
                      ------------------------------<br>
                   
					  <div id="tiempo_trakeado43" class="Estilo6"></div>
					  <div id="tiempo_guardado50" class="Estilo6" ><?php echo $tiempo_guardadito ?></div>
					  <div id="live_tiempo" style="display:none;" class="Estilo6"></div>
					  

					  
					  
                      <p class="Estilo6">------------------------------<br>
                        ninguna tarea<br />
                        ------------------------------<br>
                        0comentrarios 
                        </p>
                      </p>
                      <p>&nbsp;</p>
					  </div>
					</div>
					 <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p>
                    </td>
                </tr>
              </table>
                </td>
              <td width="69%" valign="top" bgcolor="f3f6f7"><table width="100%" border="0" cellspacing="10" cellpadding="0">
                <tr>
                  <td><p>subtareas crear sybtarea basecamp 60dias trial. </p>
                    <p>&nbsp;</p>
                    <p>
                      <?php 					  
					  //Obtenemos la fecha actual:
$fecha=time();
//Queremos restar 3 horas a la fecha actual:
$horas = -3;
// Convertimos las horas a segundos y las sumamos:
$fecha += ($horas * 60 * 60);
// Le damos al resultado el formato deseado:
$fecha = date("Y-m-d H:i:s", $fecha );

//echo "//".$fecha."//";


$fecha 	= date('2012-01-01 10:25:15', (strtotime ("+5 Hours")));
//echo "++".$fecha."++";



?>
                      
                      
            
                      
  <?php
$fecha = new DateTime('2000-01-01');
$fecha->add(new DateInterval('P5D'));
//echo $fecha->format('Y-m-d') . "\n";
?>
                      
      
                      
                      
                      
      
                      
                      
                        <?php 		
function date_fix($formato, $tiempo)
{
/*
$formato es el formato de la funcion date () de php, 
puedo usar cualquier formato válido por ejemplo:
Formato de fecha comun:  "d/m/Y H:i:s"
formato mysql:   "Y-m-d H:i:s"

$tiempo es el tiempo que quiero agregar o restar 
en mi propio formato.. 
+H:i:s
-H:i:s
*/

list($horasigno,$minutos,$segundos) = explode(":",$tiempo);
$horas = abs($horasigno);

$cadena = 'now ';
if (substr_count($horasigno,"-")==1) $cadena.= "-"; else $cadena.= "+"; 
if ($horas > 0 ) $cadena.= $horas. " hours ";
if ($minutos > 0 ) $cadena.= $minutos. " minutes ";
if ($segundos > 0 ) $cadena.= $segundos. " seconds ";

return date($formato, strtotime($cadena));
}


// restar 15 minutos
//echo date_fix("d/m/Y H:i:s","-0:15:0")."<br>";
//sumar 15 minutos
//echo date_fix("d/m/Y H:i:s","0:15:0")."<br>";
//restar una hora 15 minutos y 30 segundos
//echo date_fix("d/m/Y H:i:s","-1:15:30")."<br>"; 


?> 
                      
                          <?php	  
  $jj="";
  $fechaInicial="";
    for ($i = 1; $i <= count($busqueda); $i++) {
				if($busqueda[$i]['op']=="1"){
				$fechaInicial=$busqueda[$i]['fecha'];
				}else{
				$fechaFinal=$busqueda[$i]['fecha'];
				$tothoras = strtotime($fechaFinal) - strtotime($fechaInicial);
				$jj=$jj+$tothoras;
				}
			 }
			// echo  date("d/m/Y H:i:s");
			 
			 
			 
			 
			 $fecha="2012-02-14 00:00:00";
$segundos=strtotime($fecha) - strtotime('now');
$diferencia_dias=intval($segundos/60/60/24);
//echo "La cantidad de días entre el ".$fecha." y hoy es <b>".$diferencia_dias."</b>";
			
					  
					  ?>
					  
					  <div style="">
                    </p>
                    <p><strong>tiempo trakeado: </strong><br>
                    </p>
                    <div id="tiempotrackeado">00:01:28
					

					</div>
                    <p>&nbsp;</p>
                    <p><strong>tiempo guardado: </strong><br>
</p>
                    <div id="div"><?php echo $tiempo_guardadito ?></div>
					
                    <br>
                    <p><strong>tiempo total: </strong><br>
</p>
                    <div id="tiempototal">---</div>

			   
			   
			   




                    <p></p>
                    <p>
                      <label>
                      <input name="output" type="text" id="output" size="70">
                      </label>
                      <label>
                      <input name="tiempo_virtual" type="text" id="tiempo_virtual" size="50">
                      </label>
                      <input name="tiempo_trakeado33" type="text" id="tiempo_trakeado33" size="50">
                    </p>
                    <p>
                      <input name="tiempo_total11" type="text" id="tiempo_total11" size="50">
                    </p>
                    <p>
                      <input name="tiempo_total22" type="text" id="tiempo_total22" size="50">
                    </p>
                    <p>
					<br>
                      <input name="tiempo_total333" type="text" id="tiempo_total333" size="50">
                    </p>
                    <?php
					

//printf('%d años, %d meses, %d días, %d horas, %d minutos', $fecha->y, $fecha->m, $fecha->d, $fecha->h, $fecha->i);
// imprime: 2 años, 4 meses, 2 días, 1 horas, 17 minutos
//echo"<br>";

//sumar horas de dias

$horasdias= $dias*24;
//sumar 
$tot=$horasdias + $horas;

//echo $horas;
//echo"<br>";


//echo $fecha->d;
//echo $min;
//echo"<br>";
//$tiempo_guardadito= "<div id='tiempo_guardado'>".$tot.":".$min.":00"."</div>";	
					 ?>
					 
					 </div>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p>&nbsp;</p></td>
                </tr>
              </table>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                </td>
            </tr>
          </table>   
		  
		  
		  
		  
		  
		  <?php }?>
		 
			   <?php if ($_GET['o']=="1"){ ?>
		    
			 <table width="100%" border="0" cellspacing="10" cellpadding="0">
               <tr>
                 <td><table width="18%" height="30" border="0" cellpadding="0" cellspacing="0">
                       <tr>
                         <td><a href="asdasd">CREAR TAREA </a></td>
                       </tr>
                   </table></td>
               </tr>
             </table>
			 <table width="100%" border="0" cellspacing="10" cellpadding="0">
              <tr>
                <td><table width="199" border="0" align="center" cellpadding="0" cellspacing="10" bgcolor="#FFFFFF">
                  <tr>
                    <td align="center"><p>colegio administracion </p>
                        <p class="Estilo3">01:20:14</p>
                      <p>30:00hr</p>
                      <form name="form2" method="post" action="?n=1&o=2&b=3">
                        <label>
                          <input type="submit" name="Submit2" value="entrar">
                          </label>
                      </form>
                      <p>sistema pago padres </p>
                      <p>-------------------<br>
                        14 dias restantes<br>
                        -------------------<br>
                        28hs / 30hs<br>
                        -------------------<br>
                        3 de 4 subtareas<br>
                        -------------------<br>
                      0 comentarios </p></td>
                  </tr>
                </table></td>
                <td><table width="199" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                  <tr>
                    <td><p>colegio administracion </p>
                        <p class="Estilo3">01:20:14</p>
                      <p>30:00hr</p>
                      <p>sistema pago padres </p>
                      <p>-------------------<br>
                        14 dias restantes<br>
                        -------------------<br>
                        28hs / 30hs<br>
                        -------------------<br>
                        3 de 4 subtareas<br>
                        -------------------<br>
                        0 comentarios </p></td>
                  </tr>
                </table></td>
                <td><table width="199" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                  <tr>
                    <td><p>colegio administracion </p>
                        <p class="Estilo3">01:20:14</p>
                      <p>30:00hr</p>
                      <p>sistema pago padres </p>
                      <p>-------------------<br>
                        14 dias restantes<br>
                        -------------------<br>
                        28hs / 30hs<br>
                        -------------------<br>
                        3 de 4 subtareas<br>
                        -------------------<br>
                        0 comentarios </p></td>
                  </tr>
                </table></td>
                <td>&nbsp;</td>
              </tr>
            </table>
             <?php } ?>
             <?php if ($_GET['o']=="3"){ ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
              <tr>
                <td><p>- </p>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td>COLEGIO ADMINISTRACION </td>
                      <td>LOADING REDONDO 30:44 / 40:00 </td>
                      <td><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#0066CC">
                        <tr>
                          <td><div align="center">14 DIAS RESTANTES </div></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table>                  
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td valign="top"><p>CREAR LISTA EDITAR PROUECTO </p>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="46%"><p>                              JUNCHJO 14 DIAS RESTANTES<br>
                              SISTEMA ADMINITRAICON B1<br>
                              30:00 / 40:00<br>
                              10/8/2013</p>
                            </td>
                            <td width="54%">LOADING REDONDO </td>
                          </tr>
                        </table>
                        <hr>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="46%"><p>                              JUNCHJO 14 DIAS RESTANTES<br>
                              SISTEMA ADMINITRAICON B1<br>
                              30:00 / 40:00<br>
                              10/8/2013</p></td>
                            <td width="54%">LOADING REDONDO</td>
                          </tr>
                        </table>
                        <hr>
                        <p></p>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="46%"><p>                              JUNCHJO 14 DIAS RESTANTES<br>
                              SISTEMA ADMINITRAICON B1<br>
                              30:00 / 40:00<br>
                              10/8/2013</p></td>
                            <td width="54%">LOADING REDONDO</td>
                          </tr>
                        </table>
                        <hr>
                        <p></p>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="46%"><p>                              JUNCHJO 14 DIAS RESTANTES<br>
                              SISTEMA ADMINITRAICON B1<br>
                              30:00 / 40:00<br>
                              10/8/2013</p></td>
                            <td width="54%">LOADING REDONDO</td>
                          </tr>
                        </table>
                        <hr>
                        <p></p>
                        <p>&nbsp;</p>
                      </td>
                    </tr>
                  </table>
                <p>&nbsp;</p></td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
			
			
		  
		  
		  <?php } ?>
		  
		  
		  <?php if ($_GET['o']=="4"){ ?>
            <p>DASHBOARD</p>
            <p>PROYECTOS QUE SIGO</p>
            <p>ACTIVIDAD DIARIA</p>
            <p>HORAS DEL EQUIPO</p>
            <p>HORAS DE LA EMPRESA </p>
            <p>APP</p>
            <p>&nbsp;</p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="edeff0">
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="4d5051">
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="c52b15">
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="333333">
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table>
            <p></p>
            <p>&nbsp;</p>
		   <?php } ?>
		  </td>
        </tr>
      </table>      </td>
  </tr>
</table>
<p><p>
<p>
<br
<p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>asdasd</td>
  </tr>
</table>


  <?php }?>
  
  
  
  <?php function relacionar($id,$t){
  	/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="generathor";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}*/
global $host, $user,$password,$dbname;
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
$filtro="WHERE id=".$id." ";


$tablename=$t;
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
	$filter[$a]["id"]=$fila["id"];

	$filter[$a]["nombre"]=$fila["nombre"];		
		
	$a++;
}

mysql_free_result($resultado);
//print_r($filter);

echo  $filter[1]["nombre"];

 }?>


</body>
</html>
