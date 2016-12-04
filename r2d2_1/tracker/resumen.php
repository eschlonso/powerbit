<?php 
include("db.php");
error_reporting(0);


///////////////////////////

date_default_timezone_set('America/Argentina/Buenos_Aires'); 






$idproyecto=$_GET['id'];



//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");










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



$lf=explode(" ",$fila["fecha"]);
	
$date1 = new DateTime($lf[0]);
$date2 = new DateTime(date("Y-m-d"));
	
	
if($date1==$date2){
	$reloj_hoyP[$a]["id"]=$fila["id"];
	$reloj_hoyP[$a]["fecha"]=$fila["fecha"];	
	$reloj_hoyP[$a]["op"]=$fila["op"];		
	$reloj_hoyP[$a]["idproyecto"]=$fila["idproyecto"];			

}

	$reloj[$a]["id"]=$fila["id"];
	$reloj[$a]["fecha"]=$fila["fecha"];	
	$reloj[$a]["op"]=$fila["op"];		
	$reloj[$a]["idproyecto"]=$fila["idproyecto"];			
	$a++;
}

mysql_free_result($resultado);




//print_r($reloj);

//print_r($reloj_hoyP);









//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";

$filtro="WHERE  day(fecha)='".date('d')."' and  month(fecha)='".date('m')."' and year(fecha)='".date('Y')."' ORDER BY id DESC ";
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



//var_dump($tareas);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TRACKER RESUMEN </title>
<style type="text/css">
<!--
body,td,th {
	
	font-family: Arial, Helvetica, sans-serif;
}
.Estilo3 {color: #FFFFFF; font-weight: bold; }
.estilo4 {font-size: 15px; }
.estilo5 {font-size: 20px;}
body {
	background-color: #FFFFFF;
}
-->
</style>



<style >
body
{
font-family:Arial, Helvetica, sans-serif;
font-size:14px;
}
.editbox
{
display:none
}
td
{
padding:5px;
}
.editbox
{
font-size:14px;
width:270px;
background-color:#ffffcc;
border:solid 1px #000;
padding:4px;
}
.edit_tr:hover
{
background:url(edit.png) right no-repeat #80C8E5;
cursor:pointer;
}
.head
{
background-color:#333;
color:#FFFFFF

}
</style>



<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$(".edit_tr").click(function()
{
var ID=$(this).attr('id');
$("#first_"+ID).hide();
$("#last_"+ID).hide();
$("#first_input_"+ID).show();
$("#last_input_"+ID).show();
}).change(function()
{
var ID=$(this).attr('id');
var first=$("#first_input_"+ID).val();
var last=$("#last_input_"+ID).val();
var dataString = 'id='+ ID +'&fecha='+first+'&op='+last;
$("#first_"+ID).html('<img src="load.gif" />'); // Loading image

if(first.length>0&& last.length>0)
{

$.ajax({
type: "POST",
url: "ajax_table_edit.php",
data: dataString,
cache: false,
success: function(html)
{
$("#first_"+ID).html(first);
$("#last_"+ID).html(last);
}
});
}
else
{
alert('Enter something.');
}

});

// Edit input box click action
$(".editbox").mouseup(function()
{
return false
});

// Outside click action
$(document).mouseup(function()
{
$(".editbox").hide();
$(".text").show();
});

});
</script>


</head>

<body>
<div id="resumen" >
<strong>RESUMEN</strong><br>
<table width="100%" border="1" cellspacing="0" cellpadding="1"  class="estilo4">
  <tr>
    <td width="54%"><div style="float:left;"><strong> guardado en este proyecto:&nbsp; </strong></div><div style="float:left;" id="total"></div> <div style="float:left; "></div></td>
    </tr>
  <tr>
    <td><div style="float:left; "><strong> trabajado hoy en este proyecto:&nbsp;</strong></div><div style="float:left;" id="total1">06:00:00</div> <div>&nbsp;horas.</div></td>
    </tr>
  <tr>
    <td><div style="float:left;"><strong> trabajado hoy todos los proyectos:&nbsp;</strong></div><div style="float:left;" id="total2">06:00:00</div> <div>&nbsp;horas.</div></td>
    </tr>
  <tr>
    <td>
	
	
	<div style=" width:100%; float:left;">
	
	
		<div style="float:left;"><strong>monto:&nbsp;</strong>$</div>
		<div style="float:left;" id="monto"> 250</div>
		<div style="float:left;">&nbsp;pesos. ($</div>
		<div style="float:left;" id="precioxhora" >10</div>
		<div style="float:left;">&nbsp; x hora)</div>
	</div>	</td>
    </tr>
  <tr>
    <td><div style="float:left;"><strong>fecha entrega: &nbsp;</strong></div><div id="diasrestantes" style="float:left;"></div></td>
    </tr>
  <tr>
    <td><strong>tiempo estimado:</strong> <?php 
	
	
	if($tareas[1]["tiempo_estimado"]==""){
	echo "sin tiempo." ;
	}else{
	echo $tareas[1]["tiempo_estimado"]."&nbsp; horas" ;
	}
	
	
	
	
	?> </td>
    </tr>
  <tr>
    <td><div style="float:left;"><strong>tiempo restante:</strong></div><div id="tiemporestante"></div></td>
    </tr>
  <tr>
    <td>tareas pendientes: </td>
  </tr>
</table>
</div>
<p>
  <?php 
$fecha = date('Y-m-j');
$nuevafecha = strtotime ( '+2 day' , strtotime ( $fecha ) ) ;
$nuevafecha = date ( 'Y-m-j' , $nuevafecha );

//echo $nuevafecha;






//////////////////////////////////////////////////////////////////////////////
if($tareas[1]["fecha_entrega"]=="0000-00-00"){
$aa="sin fecha.";
}else{
$datetime1 = date_create(date('Y-m-d'));//$GLOBALS["r"]
$datetime2 = date_create($tareas[1]["fecha_entrega"]);//

$fecha = date_diff($datetime1, $datetime2);
//echo $interval->format('%R%a días');
$aa=$fecha->y." años, ". $fecha->m." meses, ".$fecha->d." dias  restantes." ;//$fecha->h, $fecha->i, $fecha->s

//echo $fecha->d;

$aa;
}
echo '
		<script>
		document.getElementById("diasrestantes").innerHTML = "'.$aa.'";
		</script>';
		
		
		
		
		
		echo '
		<script>
		document.getElementById("precioxhora").innerHTML = "'.$tareas[1]["precioxhora"].'";
		</script>';
		
		
		
		


?>
<div id="tabla">
<table width="100%" border="1" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" >
  <tr >
    <td bgcolor="#002164"><span class="Estilo3">IDs</span></td>
    <td  bgcolor="#002164"><span class="Estilo3">FECHA</span></td>
    <td bgcolor="#002164"><span class="Estilo3">ENTRO</span></td>
    <td bgcolor="#002164"><span class="Estilo3">duracion</span></td>
    <td bgcolor="#002164">&nbsp;</td>
  </tr>
<?php    for ($i = 1; $i <= count($reloj); $i++) {


$id=$reloj[$i]["id"];
$data1=$reloj[$i]["fecha"];
$data2=$reloj[$i]["op"];

	?>
  <tr id="<?php echo $id; ?>" class="edit_tr">
    <td><?php echo $reloj[$i]["id"];?></td>
    <td class="edit_td" ><?php //echo $reloj[$i]["fecha"];?>


<span id="first_<?php echo $id; ?>" class="text"><?php echo $data1; ?></span>
<input type="text" value="<?php echo $data1; ?>" class="editbox" id="first_input_<?php echo $id; ?>" />


    </td>

    <td class="edit_td"><?php //echo $reloj[$i]["op"];?>



<span id="last_<?php echo $id; ?>" class="text"><?php echo $data2; ?></span>
<input type="text" value="<?php echo $data2; ?>" class="editbox" id="last_input_<?php echo $id; ?>"/>


    </td>
    <td><?php if($reloj[$i]["op"]==1){
//$GLOBALS["r"]=$reloj[$i]["fecha"];
//echo $GLOBALS["r"];
	
	}else{
	$time1=$reloj[$i+1]["fecha"];
	$time2=$reloj[$i]["fecha"];


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
					printf('%d años, %d meses, %d días, %d horas, %d minutos, %s segundos', $fecha->y, $fecha->m, $fecha->d, $fecha->h, $fecha->i, $fecha->s);
					
					$arraytiempos[]=$fecha->h.":".$fecha->i.":".$fecha->s;


	} ?></td>
    <td>Modificar</td>
  </tr>
  <?php } ?>
</table>

</div>

<?php 

if (isset($_GET['m'])){

	if($_GET['m']==1){
		echo '
		<script>
		document.getElementById("tabla").style.display = "none";
		</script>';
	}
	
	if($_GET['m']==2){
		echo '
		<script>
		document.getElementById("resumen").style.display = "none";
		</script>';
	}

}

					 ?>





<div style="display:none;">

<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>ID</td>
    <td>FECHA</td>
    <td>ENTRO</td>
    <td>duracion</td>
    <td>&nbsp;</td>
  </tr>
<?php    for ($i = 1; $i <= count($reloj_hoyP); $i++) {?>
  <tr>
    <td><?php echo $reloj_hoyP[$i]["id"];?></td>
    <td><?php echo $reloj_hoyP[$i]["fecha"];?></td>
    <td><?php echo $reloj_hoyP[$i]["op"];?></td>
    <td><?php if($reloj_hoyP[$i]["op"]==1){
//$GLOBALS["r"]=$reloj[$i]["fecha"];
//echo $GLOBALS["r"];
	
	}else{
	$time1=$reloj_hoyP[$i+1]["fecha"];
	$time2=$reloj_hoyP[$i]["fecha"];


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
					printf('%d años, %d meses, %d días, %d horas, %d minutos, %s segundos', $fecha->y, $fecha->m, $fecha->d, $fecha->h, $fecha->i, $fecha->s);
					
					$arraytiempos_hoyP[]=$fecha->h.":".$fecha->i.":".$fecha->s;


	} ?></td>
    <td>Modificar</td>
  </tr>
  <?php } ?>
</table>

</div>













<div style="display:none;">

<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>ID</td>
    <td>FECHA</td>
    <td>ENTRO</td>
    <td>duracion</td>
    <td>&nbsp;</td>
  </tr>
<?php    for ($i = 1; $i <= count($reloj_hoyT); $i++) {?>
  <tr>
    <td><?php echo $reloj_hoyT[$i]["id"];?></td>
    <td><?php echo $reloj_hoyT[$i]["fecha"];?></td>
    <td><?php echo $reloj_hoyT[$i]["op"];?></td>
    <td><?php if($reloj_hoyT[$i]["op"]==1){
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
					printf('%d años, %d meses, %d días, %d horas, %d minutos, %s segundos', $fecha->y, $fecha->m, $fecha->d, $fecha->h, $fecha->i, $fecha->s);
					
					$arraytiempos_hoyT[]=$fecha->h.":".$fecha->i.":".$fecha->s;


	} ?></td>
    <td>Modificar</td>
  </tr>
  <?php } ?>
</table>

</div>




<?php 
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


function restar3($h1,$h2)
{
$h2h = date('H', strtotime($h2));
$h2m = date('i', strtotime($h2));
$h2s = date('s', strtotime($h2));
$hora2 =$h2h." hour ". $h2m ." min ".$h2s ." second";
//echo $hora2;


$h1h = date('H', strtotime($h1));
$h1m = date('i', strtotime($h1));
$h1s = date('s', strtotime($h1));
$hora1 =$h1h." hour ". $h1m ." min ".$h1s ." second";
//echo $hora1;
 
$horas_sumadas= $hora1." - ". $hora2;
$text=date('H:i:s', strtotime($horas_sumadas)) ;
//echo "------".$text."------";
return $text;
 
}


				   $u=0;
				   $totales="00:00:00";
				   $este=0;
				 // print_r($arraytiempos);
				   //echo count($arraytiempos);
				   for ($i = 0; $i <= count($arraytiempos)-1; $i++) {
				  
				  
				
						   $fecha_inicio=$arraytiempos[$i];

						  
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
						 document.getElementById("total").innerHTML = "'.$totales.'&nbsp; horas.";
						</script>';
						
						
						$var1=$totales;
						
						
						
						
						
						
						
						
						
						
						
						
						
						 $u=0;
				   $totales="00:00:00";
				   $este=0;
				 // print_r($arraytiempos);
				   //echo count($arraytiempos);
				   for ($i = 0; $i <= count($arraytiempos_hoyP)-1; $i++) {
				  
				  
				
						   $fecha_inicio=$arraytiempos_hoyP[$i];

						  
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
						 document.getElementById("total1").innerHTML = "'.$totales.'";
						</script>';
						
						
						
						
						
						
						
						
						
						
								
						
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
						?>
						
						
						
					<?php
					
					
					$datetime1 = date_create("00:45:00");//strval($tareas[1]["tiempo_estimado"]) //$GLOBALS["r"]
					$datetime2 = date_create("00:15:00");//$var1
	
					$fecha = date_diff($datetime1, $datetime2);

			//printf('%d años, %d meses, %d días, %d horas, %d minutos, %s segundos', $fecha->y, $fecha->m, $fecha->d, $fecha->h, $fecha->i, $fecha->s);
			
			
				if($tareas[1]["tiempo_estimado"]==""){
	$resultaa= "sin tiempo." ;
	}else{
	$resultaa="falta";//$fecha->h.":".$fecha->i.":".$fecha->s."  horas.";//
	}
					
					 echo '
						 <script>
						 document.getElementById("tiemporestante").innerHTML = "'.$resultaa.'";
						</script>';
						
						
						
						
						
						
						
				$valhora=intval($tareas[1]["precioxhora"]);		
					$valmin=$valhora/60;	
						$valseg=$valmin/60;
						
						
			//			echo 	$valhora."//".$valseg."//".$valmin;
						
		$eltiempo=explode(":",$var1);
		//echo $eltiempo[0].$eltiempo[1].$eltiempo[2];
		
		
			$tot=0;					
		$tot=$tot+intval($eltiempo[0])*$valhora;
		//$tot=number_format($tot,2);
		//echo $tot."********";
		//echo $eltiempo[1]*$valmin;
		//echo "<br>";
		$tot=$tot+intval($eltiempo[1])*$valmin;
		//echo $tot;
		$tot=$tot+(intval($eltiempo[2])*$valseg);						
		//echo $tot."<p>";
		
		//echo 	intval($eltiempo[0])*$valhora."//".intval($eltiempo[1])*$valmin."//".$valmin;
		
		$monto=number_format($tot,2);
				echo '
		<script>
		document.getElementById("monto").innerHTML = "'.$monto.'";
		</script>';
						
						
						
						
						
						
				  ?>
</body>
</html>
