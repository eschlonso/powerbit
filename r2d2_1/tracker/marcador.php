<?php 
include("db.php");





date_default_timezone_set('America/Argentina/Buenos_Aires'); 


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





$idproyecto=$_GET['id'];


global $host,$user,$password,$dbname;
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");










$filtro="WHERE idproyecto='".$idproyecto."' ";
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
	$reloj[$a]["id"]=$fila["id"];
	$reloj[$a]["fecha"]=$fila["fecha"];	
	$reloj[$a]["op"]=$fila["op"];		
	$reloj[$a]["idproyecto"]=$fila["idproyecto"];			
	$a++;
}

mysql_free_result($resultado);




//print_r($reloj);






//$idproyecto=3;






$filtro="WHERE idproyecto='".$idproyecto."' ";
$filtro="WHERE id='".$_GET['id']."' ORDER BY id DESC";
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
	$tareas[$a]["idproyecto"]=$fila["idproyecto"];
	$tareas[$a]["proyectoweb"]=$fila["proyectoweb"];				
	$a++;
}

mysql_free_result($resultado);




//print_r($tareas);
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $tareas[1]['nombre']; ?> - Tracker de tiempo</title>
<style type="text/css">
<!--
.Estilo1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	color:#FFFFFF;
}

.Estilo2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	color:#000000;
}
body {
	
background-image: url(../black-background.jpg);
}
-->



#fancyClock{
	/*margin:40px auto;*/
	/*height:200px;*/
	border:1px solid #111111;
	/*width:600px;*/
}




#fondito {
    background-image: url("jquery.tzineClock/img/bg_green.png");
    height: 182px;
    width: 182px;
}
</style>

<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>




<link rel="stylesheet" type="text/css" href="jquery.tzineClock/jquery.tzineClock.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
  <script src="jquery-1.10.2.min.js">//jquery-2.0.3.min</script>
<script type="text/javascript" src="jquery.tzineClock/jquery.tzineClock.js"></script>

<script type="text/javascript" src="script.js"></script>







	<script>
      jQuery.fn.cargar = function(url) {
            $(document).ready(function(){
                  //alert('sass');
                  $("#contenido").load(url);
            });
      };

      




</script>



	<script>




 function guardar() {
//alert('guardar');

//tiki = fecha.split('-');



var fruits=<?php echo $_GET['id']; ?>+"!"+"lala";//$('#d'+tiki[2]).val()+'!'+$('#a'+tiki[2]).val()+'!'+fecha;
$.post( "inserta_hora.php", 

 { func: "getNameAndTime", pages: fruits },


  function( data ) {
console.log( data.name ); // John
console.log( data.time ); // 2pm

//alert('complete');


//a='list_'+tiki[2];
  //$("#"+a).cargar("lista.php?f="+fecha,a);
}


,


 "json");



}


function prendido(){

//alert("prendido");


			$("#boton1").text('APAGAR');
	      	$("#boton1").attr('value', '1');
	      	$("#semaforo").css("background-color","green");

}

      function sistem1() {

      	

      	//$("#boton1").val('APAGAR');

      	if($("#boton1").val()=='0'){

			$("#boton1").text('APAGAR');
	      	$("#boton1").attr('value', '1');
	      	$("#semaforo").css("background-color","green");
	      	guardar();

      	}else{

			$("#boton1").text('PRENDER');
	      	$("#boton1").attr('value', '0');
	      	$("#semaforo").css("background-color","grey");
			guardar();
      	}
      	
//alert(""+$("#boton1").val());
		  
  setTimeout(function(){


  	$("#contenido").cargar("resumen3.php?id=<?php echo $_GET['id']; ?>");

    document.getElementById('calendario').contentDocument.location.reload(true);

  }, 4000);


		
      
      };

      




</script>



<SCRIPT LANGUAGE="JavaScript">
<!--
var hour = "0"
var min = "00"
var sec = "0"
function timer(){
// alert(estado);
if(estado=='APAGAR'){

if ((min < 10) && (min != "00")){
 dismin = "0" + min
}
else{
 dismin = min
}
 dissec = (sec < 10) ? sec = "0" + sec : sec
 document.timer.counter.value = hour + ":" + dismin + ":" + dissec
 
 
 isa2();
 isa1();




 if (sec < 59){
  sec++
  
 }
 else{
  sec = "0"
  min++
  
  //alert("minuto");
  console.log("minuto");
 
  if (min > 59){
   min = "00"
   hour++
  }
 }
 window.setTimeout("timer()",1000)
 
 }else{
 //alert("sdad");
 dissec = "00"
  document.timer.counter.value ="00:00:00"
  isa2();
 isa1();
 
 }
}
// -->





function isa2(){
 tiempo_guardado= tiempo_guardadodb;/*document.getElementById("tiempo_guardado").value;*/
 tiempo_guardado1=tiempo_guardado.split(":");
  tiempo_guardado=tiempo_guardado1[0]+"."+tiempo_guardado1[1];
 
 tiempo_actual=document.getElementById("tiempo_actual").value;
  tiempo_actual1=tiempo_actual.split(":");
  tiempo_actual=tiempo_actual1[0]+"."+tiempo_actual1[1];
 console.log(tiempo_actual+tiempo_guardado)
 	tiempo_total=sumaTiempos(tiempo_guardado,tiempo_actual)+ ":"+dissec;

	 document.getElementById("total").value=tiempo_total;
	 	
 document.getElementById("mihora").innerHTML=tiempo_total;	
 }
 
 
 
function isa1(){
  graf1=tiempo_total.split(":");
  
 dance=graf1[1]*1.6666666666666666666666666666667 ;
 
//alert(dance);

       var objeto = String(dance);
//alert(objeto);
     var posicion = objeto.indexOf('.');
//alert(posicion);
        var decimal = 0;
		console.log(posicion);
		
		if(posicion==-1){}else{
		
			objeto=objeto.split(".");
			objeto=objeto[0]+objeto[1];
		/*
			if(objeto.length - posicion < decimal){
				objeto = objeto.substr(0,objeto.length-1);                                        
			 }else {
			   objeto = objeto.substr(0,posicion+decimal);                                            
			 }
		*/
		}

 grafico32=graf1[0]+"."+objeto;
  document.getElementById("grafico_valor").value=grafico32;	
  }




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


if ((mRes < 10) && (mRes != "00")){
 mRes = "0" + mRes
}


return String(mRes) + ":" + String(sRes);
}

</SCRIPT>







 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 



   <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales'],
          ['01-03-2014',  1000],
          ['02-03-2014',  1170],
          ['03-03-2014',  660],
          ['04-03-2014',  1030]
        ]);

        var options = {
          title: 'Company Performance',
          hAxis: {title: 'Year', titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
	
	
	




<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization',
       'version':'1','packages':['timeline']}]}"></script>
<script type="text/javascript">

google.setOnLoadCallback(drawChart);
function drawChart() {

  var container = document.getElementById('example5.2');
  var chart = new google.visualization.Timeline(container);
  var dataTable = new google.visualization.DataTable();
  dataTable.addColumn({ type: 'string', id: 'Room' });
  dataTable.addColumn({ type: 'string', id: 'Name' });
  dataTable.addColumn({ type: 'date', id: 'Start' });
  dataTable.addColumn({ type: 'date', id: 'End' });
  dataTable.addRows([
    [ 'lo presupueste', 'Beginning JavaScript',       new Date(0,0,0,0,0,0),  new Date(0,0,0,3,30,0) ],
   [ 'lo hice en ', 'asdasript',       new Date(0,0,0,0,0,0),  new Date(0,0,0,6,30,0) ],
    [ 'tiempo de mas ', 'sdfsdf',       new Date(0,0,0,0,0,0),  new Date(0,0,0,3,30,0) ],
    [ 'ganancia', 'ganancia',       new Date(0,0,0,0,0,0),  new Date(0,0,0,3,30,0) ]
]);

  var options = {
timeline: { singleColor: '#8d8' },
  };

  chart.draw(dataTable);/*, options*/
}

</script>


	
	
</head>






<body  ONLOAD="timer()">





<?php

/*


//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";

$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
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



	$reloj_hoyT[$a]["id"]=$fila["id"];
	$reloj_hoyT[$a]["fecha"]=$fila["fecha"];	
	$reloj_hoyT[$a]["op"]=$fila["op"];		
	$reloj_hoyT[$a]["idproyecto"]=$fila["idproyecto"];			


	$a++;
}

mysql_free_result($resultado);


//var_dump($reloj_hoyT);


 for ($i = 1; $i <= count($reloj_hoyT); $i++){
 
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
						var tiempo_guardadodb= "'.$totales.'";
					
						</script>';





*/



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



//////////////////////////////////////////////
if(!isset($reloj)){
$ultimoReg=0;
}else{
$cantreg=count($reloj);
$ultimoReg=$reloj[$cantreg]["op"];
}
//si no tiene nada reloj $ultimoReg empieza con 1






 if(!isset($_GET['g'])){?>

<?php 



//echo $ultimoReg;

if($ultimoReg==0){$estado="PRENDER";}else{$estado="APAGAR";}

echo "<script>
  var estado='".$estado."';

  var tiempo_estimado=".$tareas[1]["tiempo_estimado"].";
   </script>";
?>
<?php 
$titulo="TRACKER";
$ruta_titulo="index.php";

?>


<div style="background-color:white;">
<div style="float:left;">
<?php


include("../ruta.php");?>
</div>

<div style='padding-bottom:10px;'>
&nbsp; > &nbsp;<a href="index.php?idc=<?php echo $tareas[1]['idproyecto']; ?>">TAREAS</a>
</div>

</DIV>


 <table bgcolor="ffffff" width="100%"><tr><td bgcolor='#282f32'>




<div align="center" style="width:250px; height:180px;float:left; background-color:#282f32;">


<BR>
<button type="button" id='boton1' value='0' onclick='sistem1();'>PRENDER</button> 
<BR>


	<div id="semaforo" style='background-color:grey;width:100px;height:100px;'></div>
<?php //include('resumen3.php'); ?>









</div>







 </td>
<td bgcolor='#E1E4EC'>

<div align="center" style='padding-left:20px;font-size:20;font-weight:bold;float:left;width:280px;background-color:#E1E4EC;'>


<?php echo $tareas[1]['nombre']; ?>
      
	 <?php //echo $tareas[1]['id']; ?>
	<br>
	<?php echo relacionar1($tareas[1]['idproyecto']); ?>	&nbsp;</span>
 <br>


		</div>	
	



</div>


</td>
<td bgcolor='#ddebff' valign='middle' width='400px'>


<div style='float:left;background-color:#DDEBFF; padding-left:20px;font-size:20px;' id='contenido'>contenido</div>
  

 

<script >


$("#contenido").cargar("resumen3.php?id=<?php echo $_GET['id']; ?>");
</script>





<?php 



//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE proyecto='".$idproyecto."' and a='00:00:00' ORDER BY id DESC";
$tablename="mis_relojes2";
//$filtro=" ORDER BY id LIMIT 20,10";

$query="SELECT * FROM $tablename $filtro LIMIT 0,1;";
//echo $query;
//echo json_encode($query);
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
	$mis_relojes[$a]["d"]=$fila["d"];		
	$mis_relojes[$a]["a"]=$fila["a"];	
	$a++;
}

mysql_free_result($resultado);
//echo json_encode($mis_relojes);
//print_r($gastos);


if(isset($mis_relojes[1]["id"])){

echo "<script> prendido(); </script>";

}

 ?>


</td>
</tr>
</table>






<!--

<table width="100%" height="241" border="1" cellpadding="0" cellspacing="0" bgcolor="282f32">
  <tr>
    <td width="23%" align="center" valign="bottom">
		<div id="mihora" style="position:relative; font-size:22px; top:114px; left:-11px; width:200px;z-index:22; color:#F5F5F5;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; text-align:center;text-shadow:4px 4px 5px #333333;"></div>
	<div id="fondito" style="position:absolute; z-index:5;opacity: 0.1;filter: alpha(opacity=10);"></div>
	
	<div id="fancyClock" style="position:relative; z-index:3;"></div>


	<br><form id="form1" name="form1" method="post" action="?g=1&id=<?php //echo $idproyecto; ?>">
      <label>
      <input type="submit" name="Submit" value="<?php //echo $estado; ?>" />
      </label>
    </form>	</td>
    <td width="28%" align="center" bgcolor="E1E4EC">
	
	<div style="background-color:#E1E4EC; padding-top:20px;padding-bottom:20px; ">
	<span class="Estilo2">
	
	
	<?php //echo $tareas[1]['nombre']; ?>
      <br>
	ID: <?php //echo $tareas[1]['id']; ?>
	<br>
	IDproyecto: <?php //echo $tareas[1]['idproyecto']; ?>	&nbsp;</span>	</div>	
	<p>
	
	<div style="display:none;">
	  <label>
	  <input name="tiempo_guardado" type="text" id="tiempo_guardado" value="09:26:30">
	  </label>
      <FORM NAME="timer">
     <INPUT TYPE="TEXT" NAME="counter" id="tiempo_actual"></P>
      </FORM>
	  <p>
	    <input name="total" type="text" id="total" value="0:36:46">
	    
	    </p>
	  </p>
      <form name="form2" method="post" action="">
        <label>
		
          <input name="textfield" type="text" value="" id="grafico_valor">
        </label>
    </form>      <p>&nbsp; </p></div></td>
    <td width="49%" align="center" bgcolor="E1E4EC"><iframe src="resumen.php?id=<?php //echo $_GET['id']; ?>&m=1" width="100%" height="240px;" align="center"></iframe>      </td>
  </tr>
</table>
-->

<iframe src="../tareas/3.php?id=<?php echo $_GET['id']; ?>&h=1" width="100%" height="495px;" align="center"></iframe>

<iframe id="calendario" src="1.php?id=<?php echo $_GET['id']; ?>" width="100%" height="1200px;" align="center"></iframe>

  <!-- <iframe src="resumen.php?id=<?php //echo $_GET['id']; ?>&m=2" width="100%" height="240px;" align="center"></iframe> -->

 









   <!-- <div id="example5.1" style="width: 900px; height: 300px;"></div> -->
  <?php if($tareas[1]['proyectoweb']==1){



  	echo '
<div style="background-color:white;">



<br>lo presupueste en , lo hice en.
  <div id="example5.2" style="width: 900px; height: 250px;"></div>
  </div>';
  }  ?>
    <!-- <div id="chart_div" style="width: 900px; height: 500px;"></div> -->





<?php 

}else{
?>



<?php 
	//TABLA OFERTAS
	$tablename="relojes";
	//$filtro="WHERE dni='".$dni."'";
	$fechaaay=date('Y-m-d H:i:s');
	
	
	if($ultimoReg==0){$gop=1;}else{$gop=0;}
	
	$query="INSERT INTO $tablename (fecha,op,idproyecto) VALUES ('".$fechaaay."',".$gop.",".$idproyecto.");";
	//echo $q
	mysql_select_db($dbname,$link);
	mysql_query($query,$link);
	$my_error = mysql_error($link);
	if(!empty($my_error)) {
	//cartel(3,"Hubo un error al insertar el registro. $my_error"); 
	echo "Hubo un error al insertar el registro. $my_error";
	} else {
	//echo "GUARDADO.";
	//echo cartel(3,"SSEEEEEEEEE");
	}
	?>
	
	<script language="JavaScript" type="text/javascript">
var pagina="?id=<?php echo $idproyecto; ?>"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>



<?php }?>
</body>
</html>
