<?php 
if( $_SERVER['SERVER_NAME'] == "localhost"){//..
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="localhost";
$user="todohoga_user1";
$password="KOHPpIW=SR5u";
$dbname="todohoga_db";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema de administracion colegio</title>
<style type="text/css">
<!--

input{
font-size:18px;
}

select {
font-size:18px;
}

#precio_1{
text-align:right;
padding-right:5px;
}

.coma{
font-size:15px;
font-style:italic;
}

.newpago{
background-color:#BBFFBB;

 border:solid; width:300px;
 padding-left:10px; 
 padding-top:10px;
 padding-bottom:10px;
 padding-right:10px;
 margin-bottom:20px;
 
 }

#site-name {
/* box-shadow:  3px 5px 10px 1px rgba(15, 15, 15, 0.60);*/
margin-top:25px; 
margin-left:8px;
    color: #686868;
    font-size: 1.510em;
    line-height: 1;
	letter-spacing: 1px; 
}
#site-slogan {
    font-size: 0.929em;
    font-style: italic;
    word-spacing: 0.1em;
	color: #FFFFFF;
	margin-left:8px;
}
.subtitulo {color: #000000; font-size:22px; font-weight:bold;}
.submenu { background-color:#E6E6E6;  font-weight:bold;  height:30px; padding-top:8px;padding-left:19px;}
.titulo {
  font-size: 1.821em;
    line-height: 1;
	color:#FFFFFF;
	font-family: Georgia,"Times New Roman",Times,serif;
 line-height: 1.1;
 font-weight:bold;
}
.titulo a:hover {color:#FFFFFF;}
.titulo a:link {color:#FFFFFF; }
.titulo a:active {color:#FFFFFF;}
.titulo a:visited {color:#FFFFFF;}


.tabla { font-weight:bold; background-color:#002164;color:#FFFFFF; padding-top:5px; padding-left:5px; padding-bottom:5px; text-transform:capitalize;}
.celda1 { background-color:#FFFFFF; padding-top:5px; padding-left:5px; padding-bottom:5px;text-transform:capitalize;}
.celda2 { background-color:#E1E4EC; padding-top:5px; padding-left:5px; padding-bottom:5px;text-transform:capitalize;}

.formulario10, #formulario10{
background-color:#BBFFBB; border:solid; width:350px; padding-top:10px; padding-left:10px; padding-bottom:10px;
margin-top:20px;
margin-left:20px;
margin-bottom:10px;
padding-right:10px;
}


.formulario11{
background-color:#ffffff; border:solid; width:350px; padding-top:10px; padding-left:10px; padding-bottom:10px;
margin-top:20px;
margin-left:20px;
margin-bottom:10px;
padding-right:10px;
}


.sinresultados{
width:744px; border: solid; background-color:#E1E4EC; text-align:center; padding-top:10px; padding-bottom:10px;
}

.cartel{
padding-top:20px;
}

.verde{
color:#339900;
}

.rojo{
color:#FF0000;
}

.eliminar{
    background:url(./b_drop.png) no-repeat;
    cursor:pointer;
	padding-left:20px;
    height:32px;
	background-position: 5px 6px;
}

.editar{
    background:url(./b_edit.png) no-repeat;
    cursor:pointer;
	/*background-position:10px 10px; */
    /*width:26px;*/
		/*padding-top:10px;*/
	padding-left:20px;
    height:32px;
	background-position: 5px 6px;
}





.contenido{
margin-top:20px;
margin-left:20px;
margin-bottom:10px;
}

.espacio1{
height:20px;
}



.cartel1{color:#CC3300; font-weight:bold;}
body {
	background-color: #ffffff;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom:0px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	font-size:18px;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
-->
</style>
<style>
.mayuss{

text-transform:capitalize;}

</style>



<link rel="stylesheet" type="text/css" href="imprimir.css" media="print" />



<style type="text/css">



#coolMenu,
#coolMenu ul {
	list-style: none;
	margin: 0;
padding: 0;

	/*
	padding-bottom:5px;
	padding-left:5px;
	padding-top:5px;
	*/
}
#coolMenu {
	float: left;
	
}
#coolMenu > li {
	float: left;

	
}
#coolMenu li a {

	display: block;
	height: 2em;
	line-height: 2em;
	padding: 0 1.5em;
	text-decoration: none;
}
#coolMenu ul {

	position: absolute;
	display: none;
	z-index: 999;
}
#coolMenu ul li a {

	width: 100px;
	
}
#coolMenu li:hover ul.noJS {
	display: block; 
}


/* Main menu
------------------------------------------*/
#coolMenu {
	/*font-family: Arial;*/
	/*font-size: 12px;*/
	background: #003399;
	text-transform:uppercase;

}
#coolMenu > li > a {
	height:40px;
	font-weight: bold;
	font-size:17px;
			/*margin-right:10px;*/
			
	/*padding-right:10px;*/
	
	/*padding-top:5px;*/
}
#coolMenu > li:hover > a {
color:#ffffff;
	background: #1350CB;
	
}


/* Submenu
------------------------------------------*/
#coolMenu ul {

	background: #f09d28;
}
#coolMenu ul li a {
	color: #ffffff;
	
}
#coolMenu ul li:hover a {
	background: #ffc97c;
}




#activo a {
	/*font-family: Arial;*/
	color: #ffffff;
	/*font-size: 12px;*/
	background: #002164;
}

#desactivo a {
	/*font-family: Arial;*/
	color: #FFFFFF;
	/*font-size: 12px;*/
}




 
 
 
 
</style>

  <script src="jquery-2.0.3.min.js"></script>

<script language="JavaScript">
//Función que permite solo Números
function ValidarNumeros() {
//
 if ((event.keyCode < 48) || (event.keyCode > 57))
  alert("asdasd");
  event.returnValue = false;
}


function lala(){
	//alert("asd");
	}
</script>




</head>

<body>

<table width="100%" height="125px" border="0" cellspacing="0" cellpadding="10" class="cabecera">
  <tr>
    <td  background="fondo1.jpg" height="120px;" ><div style="float:left; height:114px; margin-top:5px; margin-right:5px; margin-left:25px; margin-bottom:10px;"><a href="?op=0"><img src="logo3.png" /> </a></div><div style="float:left;"><div class="titulo" id="site-name"><a href="?op=0">Nuevo Colegio<br /> 
      de Monte Grande </a></div>
    <div id="site-slogan">Sistema de Administración</div> </div></td>
  </tr>
</table>


	
	<?php 

function tildar($t,$l){
	
	if ($l==$t){
		echo 'id="activo"';
	}else{
		echo 'id="desactivo"';
	}
//echo "/";
}

$title_for_layout=$_GET['op'];
?>
<div style="background-color:#003399; background-color: width:100%; height:40px; padding-left:21px;" class="menu">
              <ul id="coolMenu" >
			  <!--
			                  <li <?php tildar("13",$title_for_layout); ?> ><a href="1.php?op=13" id="boton1" class="boton_normal">Inicio </a></li> -->
                <li <?php if($_GET['op']=="0" || $_GET['op']=="2" || $_GET['op']=="3" || $_GET['op']=="14"){tildar($_GET['op'],$title_for_layout);}else{tildar("kk",$title_for_layout);} ?> ><a href="1.php?op=0" id="boton1" class="boton_normal">Pagos </a></li>
			
		
		
		       
				
					
						
						
						    <li <?php tildar("6",$title_for_layout); ?>>
				<a href="1.php?op=6"  id="boton1" class="boton_normal">Reportes </a></li>
				
				
						
      		<li 
			
			<?php if($_GET['op']=="5" || $_GET['op']=="7"){tildar($_GET['op'],$title_for_layout);}else{tildar("kk",$title_for_layout);}
			
			//tildar("5",$title_for_layout); ?> ><a href="1.php?op=5"  id="boton1" class="boton_normal">Familias </a></li>
 
  <li <?php tildar("9",$title_for_layout); ?> ><a href="1.php?op=9&amp;t=cursos&amp;n=0"  id="boton1" class="boton_normal">Cursos </a></li> 
	   
 
        <li <?php tildar("8",$title_for_layout); ?> ><a href="1.php?op=8&amp;t=cuotas&n=0"  id="boton1" class="boton_normal">Cuotas </a></li>
		
		    <li <?php if($_GET['op']=="10" || $_GET['op']=="11" || $_GET['op']=="12"  ){tildar($_GET['op'],$title_for_layout);}else{tildar("kk",$title_for_layout);}  ?> ><a href="1.php?op=11&t=cuotas_categoria&n=0"  id="boton1" class="boton_normal">CATEGORIAS </a></li>
       
            
			 
			 
		
				
				
				   
				  
		
	   
	   
	          
	  
              </ul>
</div>

	</div>
	
	
	
	
	
	
	
	
	<!--
	<table width="100%" border="0" cellpadding="0" cellspacing="10" bgcolor="#E6E6E6">
  <tr>
    <td>
	
	
	<a href="1.php?op=0">Pagos</a> <a href="1.php?op=5">Familias</a> <a href="1.php?op=6">Reportes</a> <a href="1.php?op=8&amp;t=cuotas&n=0">Cuotas</a>  <a href="1.php?op=10&amp;t=descuentos">Descuentos</a> <a href="1.php?op=9&amp;t=cursos&amp;n=0">Cursos</a>

	
	
    </td>
  </tr>
</table>
	-->





<div style="background-color:#FFFFFF;">
<?php 

if (isset($_GET['op'])){
$var= $_GET['op'];
}else{
$var= 0;
}

switch ($var) {
    case 0:
	
	//echo "<div class='subtitulo'>PAGOS</div><P>";
        	if(!isset($_POST['Submit'])){
				op1();
				if(isset($_GET['tabla'])){
				
				op2();
				}
			}else{
				op1();
				op2();
			}
        break;
    case 1:
	
	 	op1();
        op2();
        break;
    case 2:
	//echo "<div class='subtitulo'>PAGOS</div><P>";
	submenu1();
        op3();
        break;
	case 3:
	submenu1();
        op4();
        break;
	case 4:
        op5();
        break;
	case 5:
      //echo "<div class='subtitulo'>FAMILIAS</div><P>";
		if(isset($_GET['idf'])){
			//echo "aqui//////////////////////";
			 op5();
			op8();
			
		}else{
		     if(!isset($_POST['Submit'])){
			  //echo "aqui//////////////////////";
			   op5();
				//op6();
				op1();
				 
				if(isset($_GET['tabla'])){
					
				op2();
				
				}
			}else{
			//echo "aqui//////////////////////";
			 op5();
				op1();
				op2();
			}
			
			

		}
        break;
	case 6:
	 //echo "<div class='subtitulo'>REPORTES</div><P>";
        op7();
        break;
			case 7:
			op5();
        cms();
        break;
					case 8:
					submenu2();
					 //echo "<div class='subtitulo'>CUOTAS</div><P>";
        cms();
        break;
		
					case 9:
					// echo "<div class='subtitulo'>CURSOS</div><P>";
					submenu9();
        cms();
        break;
					case 10:
        	//echo "<div class='subtitulo'>DESCUENTOS</div><P>";
			if(!isset($_POST['Submit'])){
				op1();
				if(isset($_GET['tabla'])){
				op2();
				}
			}else{
				op1();
				op2();
			}
        break;
		case 11:
		submenucate();
		//op11();
		opcategoria();
		break;
		
		case 12:
		submenu11();
		op12();
		break;
		
				case 13:
		op13();
		break;

		case 14: 
		submenu1();
		opeditpag();
		break;
		
}
?>
</div>




























































<?php 



function recibos($miidche){




?>



 
 
 
  <?php 
  
  global $host, $user,$password, $dbname,$link;
  

      if($miidche==""){

}else{
  $filtro="WHERE id=".$miidche." ";


$tablename="recibos";
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
	$recibos[$a]["id"]=$fila["id"];
	$recibos[$a]["idpagocuota"]=$fila["idpagocuota"];
	$recibos[$a]["idf"]=$fila["idf"];
	$miidf=$fila["idf"];
	$a++;
}

mysql_free_result($resultado);
//print_r($recibos);


}

    if(!isset($recibos)){
echo "<div class='contenido'>No se encontraron resultados.";
}else{
  
  $punki=explode(";",$recibos[1]["idpagocuota"]);
  
  $a=1;
  for ($ww = 0; $ww <= count($punki)-1; $ww++) {
  
  
  
  
   $filtro="WHERE id=".$punki[$ww]." ";


$tablename="pagos";
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
	$pago[$a]["id"]=$fila["id"];
	$pago[$a]["precio"]=$fila["precio"];
	$pago[$a]["asignadofecha"]=$fila["asignadofecha"];
	$a++;
}

mysql_free_result($resultado);
  
  
  
  
  
  }
  

  
  
  
  //print_r ($pago);
  
  
  

$filtro="WHERE idf=".$miidf." ";


$tablename="alumnos";
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
	$filter1[$a]["id"]=$fila["id"];
	$filter1[$a]["apellido"]=$fila["apellido"];	
	$filter1[$a]["nombre"]=$fila["nombre"];		
	$filter1[$a]["dni"]=$fila["dni"];
	$filter1[$a]["idf"]=$fila["idf"];	
	$filter1[$a]["cuota"]=$fila["cuota"];		
	$filter1[$a]["fecha_inscrip_inicio"]=$fila["fecha_inscrip_inicio"];
	$filter1[$a]["fecha_inscrip_fin"]=$fila["fecha_inscrip_fin"];		
	$a++;
}

mysql_free_result($resultado);
//print_r($filter1);

  

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  
    <?php
	  function averff1($idalumno){	
/*
//echo $idalumno;
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/
global $host, $user,$password, $dbname,$link;


			   //TABLA prueba
$tablename="pagos";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE idalumno='".$idalumno."'";
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
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["fecha"]=$fila["fecha"];	
	$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

//print_r($pagos);
////////////////
			   $total = 0;
			   //aqui emepzaba el probelam.
			   if (isset($pagos)){
			   for ($i = 1; $i <= count($pagos); $i++) {
			   $total=$total+$pagos[$i]["precio"];
			   }
			   
			   }else{
			   $pagos=0;
			   }
			   return $total;
			   
			   
			   

}
?>




 <?php
	  function averffISA($idf,$mes){	
	  
	  
	  			   //if ($idcuota==0){
			   //$total=0;
			   //}else{
/*
//echo $idalumno;
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/
global $host, $user,$password, $dbname,$link;


			   //TABLA prueba
$tablename="pagos";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE idf='".$idf."' AND month(asignadofecha)='$mes' AND year(asignadofecha)='".$_GET['y']."' ";//AND year(fecha)='2013' AND month(fecha)='$mes'
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
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["fecha"]=$fila["fecha"];	
	$pagos[$a]["precio"]=$fila["precio"];
	$pagos[$a]["idcuota"]=$fila["idcuota"];	
	$pagos[$a]["asignadofecha"]="///";						
	$a++;
}

mysql_free_result($resultado);

//print_r($pagos);
////////////////
			   $total = 0;
			   //aqui emepzaba el probelam.

				   if (isset($pagos)){
				  for ($i = 1; $i <= count($pagos); $i++) {
				   $total=$total+$pagos[$i]["precio"];
				   }
				   
				   }else{
				   $pagos=0;
				   }
		
		
		//}
			   return $total;
			   
			   
			   

}
?>
  
  
  <!--
			  La Familia <span class="Estilo2">debe  $<?php //echo $deudaf; ?> pesos</span>.<br />
			
	</td>
  </tr>
</table>
  -->
</p>

<!--
</p>
<table width="750" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td class="tabla">Nombre</td>
    <td class="tabla">Pago</td>
    <td class="tabla">Cuota</td>
    <td class="tabla">Descuentos</td>
    <td class="tabla">Total</td>
  </tr>
  -->
  
  
  

  
  	  <?php 
	  
	  $cuot[3]=0;
	   $cuot[4]=0;
	   $cuot[5]=0;
	   
	   	  $cuot[6]=0;
	   $cuot[7]=0;
	   $cuot[8]=0;
	   
	   	  $cuot[9]=0;
	   $cuot[10]=0;
	   $cuot[11]=0;
	   
	   	  $cuot[12]=0;
	   $cuot[1]=0;
	   $cuot[2]=0;
	   
	  $totpagfam=0;
	  $totcuotafam=0;
	  $totdescufam=0;
	  $tottotfam=0;
	  
			  $deudaf=0;
	 $d=0;		  
			     for ($i = 1; $i <= count($filter1); $i++) {
				 //echo "hijo: ".$i."<br>";
				 
				 
				       if($d==1){
    //$class1='class="celda2"';
   $d=0;
   }else{
  // $class1='class="celda1"';
   $d=1;
   }
   
				 
				// echo '<tr><td '.$class1.'>';
			   
				//echo $filter1[$i]["nombre"]." ".$filter1[$i]["apellido"];
				
				//echo "&nbsp;</td>";
				 
				 
   //echo $i.$filter1[$i]["id"];
   
  
			  $m=date('m');
			  //echo $m."<br>";

			  
			  
			
			
						   //TABLA prueba

$tablename="descuentos";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE idalumno='".$filter1[$i]["id"]."'";
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
unset($descuento);
while ($fila = mysql_fetch_assoc($resultado)) {
	$descuento[$a]["id"]=$fila["id"];
	$descuento[$a]["fecha"]=$fila["fecha"];	
	$descuento[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);


  
			  
			  

			   //TABLA prueba
$tablename="cuotas";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE cuota='".$filter1[$i]["cuota"]."'  AND year(fecha)='".$_GET['y']."'";
$query="SELECT * FROM $tablename $filtro;";
//echo $query."dsad";






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
$cuota="";


while ($fila = mysql_fetch_assoc($resultado)) {

$date0 = new DateTime("0000-00-00");
$date1 = new DateTime($fila["fecha"]);
$date2 = new DateTime($filter1[$i]["fecha_inscrip_inicio"]);
$date3 = new DateTime($filter1[$i]["fecha_inscrip_fin"]);
//echo $filter1[$i]["fecha_inscrip_fin"] ."<br>";

if($filter1[$i]["fecha_inscrip_fin"]=="0000-00-00"){
$comparar="no";
}else{

$comparar="si";}
//echo $comparar;
if($comparar=="si"){
//echo "echo;".$filter1[$i]["fecha_inscrip_fin"];
}else{

}
if($comparar=="si"){

if($date1<$date2  or $date1 >= $date3){}else{
	$cuota[$a]["id"]=$fila["id"];
	$cuota[$a]["fecha"]=$fila["fecha"];	
	$cuota[$a]["precio"]=$fila["precio"];				
	$a++;
	}
	
	

}else{
if($date1<=$date2 ){}else{

	$cuota[$a]["id"]=$fila["id"];
	$cuota[$a]["fecha"]=$fila["fecha"];	
	$cuota[$a]["precio"]=$fila["precio"];				
	$a++;
	}
}


}

//print_r($cuota);

//echo "<br>";

if ($cuota==""){
//echo "vacio";
$cantcoutas=0;
}else{
$cantcoutas=count($cuota);
}
//$cuota= count(null);
//echo $cuota."///".$cantcoutas;


mysql_free_result($resultado);
			  
		 
$miscuotas[1]=0;
$miscuotas[2]=0;	
$miscuotas[3]=0;	
$miscuotas[4]=0;	
$miscuotas[5]=0;	
$miscuotas[6]=0;	
$miscuotas[7]=0;	
$miscuotas[8]=0;	
$miscuotas[9]=0;	
$miscuotas[10]=0;	
$miscuotas[11]=0;	
$miscuotas[12]=0;			 


 
//SI HAY ERROR EN explorador  es porque no tiene cargado ninguna cuota a ese alumno icuota.
for ($y = 1; $y <= $cantcoutas; $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		for ($g = 1; $g <= 12; $g++) {
			if($fchacha[1]==$g AND $fchacha[0]==$_GET['y']){
				$miscuotas[$g]=$cuota[$y]['id'];
			}
		}
}

//print_r($miscuotas);

///////////////////////////////////////////////////////////////////////////

		 




for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==3){
			$cuot[3]=$cuot[3]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==4){
			$cuot[4]=$cuot[4]+$cuota[$y]['precio'];
		}
	}
}


for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==5){
			$cuot[5]=$cuot[5]+$cuota[$y]['precio'];
		}
	}
}


for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==6){
			$cuot[6]=$cuot[6]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==7){
			$cuot[7]=$cuot[7]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==8){
			$cuot[8]=$cuot[8]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==9){
			$cuot[9]=$cuot[9]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==10){
			$cuot[10]=$cuot[10]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==11){
			$cuot[11]=$cuot[11]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==12){
			$cuot[12]=$cuot[12]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==1){
			$cuot[1]=$cuot[1]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==2){
			$cuot[2]=$cuot[2]+$cuota[$y]['precio'];
		}
	}
}

		 
 
		  
			  
			  	$cuotat=0;
			   for ($y = 1; $y <= $cantcoutas; $y++) {
					$cuotat=$cuotat+$cuota[$y]["precio"];
			  }
			  
			$desct=0;
			if(isset($descuento)){
			   for ($y = 1; $y <= count($descuento); $y++) {
			   		$var=explode(" ",$descuento[$y]["fecha"]);
					$var=explode("-",$var[0]);
					if ($var[1]<=date('m') && $var[2]<=date('Y')){
					$desct=$desct+$descuento[$y]["precio"];
					}
			  }}
		//$cuotat=0;
			  
			  //$alumno[$i]["curso"];
			  
			  $t=$cuotat;
			  //echo $t;
			  
			  //echo "cuanto tengo asignado a ese idf?";
			  $tota=averff1($filter1[$i]["id"]);//$filter1[$i]["id"]
			  $pag[3]=averffISA($miidf,3);//$filter1[$i]["id"] //$miscuotas[3]
			  //echo $miscuotas[3]."***". $pag[3]."///";
			 $pag[4]=averffISA($miidf,4);
			  $pag[5]=averffISA($miidf,5);
			   $pag[6]=averffISA($miidf,6);
			    $pag[7]=averffISA($miidf,7);
				 $pag[8]=averffISA($miidf,8);
				  $pag[9]=averffISA($miidf,9);
				   $pag[10]=averffISA($miidf,10);
				    $pag[11]=averffISA($miidf,11);
					 $pag[12]=averffISA($miidf,12);
					  $pag[1]=averffISA($miidf,1);
					   $pag[2]=averffISA($miidf,2);
			 
			 
			 
			  //$pag[3]=500;
			  //echo "//".averff1(1)."//";
				$tot=$t-$tota-$desct;
				
				
				
				//
				$totpagfam=$totpagfam+$tota;
				$totcuotafam=$totcuotafam+$cuotat;
				$totdescufam=$totdescufam+$desct;
				$tottotfam=$tottotfam+$tot;
				
				//
				
				
				$pieces = str_split($tot);
				
				$mg=0;
				
				//echo "<td ".$class1." id='precio1'>$".number_format($tota, 2)."</td>";
				//echo "<td ".$class1." id='precio1'>$".number_format($cuotat, 2)."</td>";
				//echo "<td ".$class1." id='precio1'>$".number_format($desct, 2)."</td>";
				
				//echo "<br>";
				
				if( $pieces[0]=="-"){
				$hg=explode("-",$tot);
				 for ($k = 1; $k <= count($hg)-1; $k++) {
				 $mg=$mg+$hg[$k];
				 }
				

				
				//echo "<td ".$class1." id='precio1'><span class='Estilo4' ><strong>A favor $".number_format($mg,2)."</strong></span></td>";
				}else{ // 
				
				//echo "<td ".$class1." id='precio1'><span class='Estilo2' ><strong> Debe $".number_format($tot,2)."</strong></span></td>";
				$deudaf=$deudaf+$tot;
				}
				
				//echo "</tr>";
				
				 }
			  ?>
  
  
 
  
  <?php    
   if($d==1){
   //$class1='class="celda2"';
   $d=0;
   }else{
  // $class1='class="celda1"';
   $d=1;
   }
   
   ?>

  <!--
  <tr>
    <td <?php //echo $class1; ?>>	  La Familia </td>
    <td <?php// echo $class1; ?> id='precio1'>$<?php //echo number_format($totpagfam, 2); ?></td>
    <td <?php //echo $class1; ?> id='precio1'>$<?php // echo number_format($totcuotafam, 2); ?></td>
    <td <?php //echo $class1; ?> id='precio1'>$<?php //echo number_format($totdescufam, 2); ?></td>
    <td <?php //echo $class1; ?> id='precio1'><?php 
	
	$pieces = str_split($deudaf);
	if($deudaf==0){
	
		//echo "<span class='Estilo4'><strong>A favor $".str_replace("-","",number_format($tottotfam, 2))."</strong></span>";
	}else{
	
		//echo "<span class='Estilo2'><strong>Debe $".number_format($deudaf, 2)."</strong></span>";
	}
	
	//echo $deudaf; ?></td>
  </tr>
</table>
<p>
-->
<?php 

function getisa1(){
$var="";
foreach($_GET as $k => $v) {
    // Reject items not starting with prefix
	if($k=="p" or $k=="f" or $k=="m"){}else{
$var=$var.$k."=".$v."&";
}
}

echo $var;
}

?>



<?php 

$filtro="WHERE idf=".$miidf." ";


$tablename="alumnos";
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
	$filter[$a]["apellido"]=$fila["apellido"];	
	$filter[$a]["nombre"]=$fila["nombre"];		
	$filter[$a]["dni"]=$fila["dni"];
	$filter[$a]["idf"]=$fila["idf"];				
	$a++;
}

mysql_free_result($resultado);
//print_r($filter);
?>




<?php function relacionar50($id,$t){
/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/
global $host, $user,$password, $dbname,$link;


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
	$filter[$a]["apellido"]=$fila["apellido"];	
	$filter[$a]["nombre"]=$fila["nombre"];		
	$filter[$a]["dni"]=$fila["dni"];
	$filter[$a]["idf"]=$fila["idf"];				
	$a++;
}

mysql_free_result($resultado);
//print_r($filter);

echo  $filter[1]["nombre"]." ".$filter[1]["apellido"];

 }?>



<?php //echo $filter[$_GET['f']]["id"];



function getisa2(){
$var="";
foreach($_GET as $k => $v) {
    // Reject items not starting with prefix
	if($k=="f" or $k=="y"){}else{
		$var=$var.$k."=".$v."&";
		}
}
echo $var;
}

 ?>


<p>

<!--


<table width="750" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><form id="form7" name="form7" method="post" action="">

  <div align="right">
  
    <label>
  <select id="ano" name="ano">
  <?php for ($i = 2012; $i <= date("Y")+5; $i++) { ?>
  	<option value="<?php echo $i; ?>" <?php if ($_GET['y'] == $i){echo "selected='selected'";} ?>><?php echo $i; ?></option>
  <?php } ?>
  </select>
  </label>
  <label>
  <input type="button" name="Submit5" value="Mostrar" onclick="filtro2('?<?php getisa2(); ?>')"/>
  </label>
  
  </div>
    </form></td>
  </tr>
</table>

<table width="750" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td class="tabla">Mes</td>
    <td class="tabla">Cuota</td>
    <td class="tabla">Matricula</td>
    <td class="tabla">Materiales</td>
    <td class="tabla">Ense&ntilde;anza</td>
	    <td class="tabla">Descuentos</td>
    <td class="tabla">Total</td>
    <td class="tabla">Pagos</td>
    <td class="tabla">Deuda</td>
  </tr>
  <tr>
    <td class="celda1">Enero</td>
    <td class="celda1" id='precio1'>0</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
	  <td class="celda1" id='precio1'>0</td>
    <td class="celda1" id='precio1'>0</td>
    <td class="celda1" id='precio1'>0</td>
    <td class="celda1" id='precio1'>0</td>
  </tr>
  <tr>
    <td class="celda2">Febrero  </td>
    <td class="celda2" id='precio1'>0</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>0</td>
	  <td class="celda2" id='precio1'>0</td>
    <td class="celda2" id='precio1'>0</td>
    <td class="celda2" id='precio1'>0</td>
  </tr>
  <tr>
    <td class="celda1">Marzo</td>
    <td class="celda1" id='precio1'>$<?php //echo $cuot[3]; ?></td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
		  <td class="celda1" id='precio1'>0</td>
    <td class="celda1" id='precio1'>$<?php $tot1= $cuot[3]; //echo $tot1; ?></td>

    <td class="celda1" id='precio1'>$<?php //echo $pag[3]; ?></td>
    <td class="celda1" id='precio1'>$<?php
//$totrestan="";
$j=0;

$mue= $tot1-$pag[3];
//echo $mue;

if($mue>=0){
$totrestan[$j]['fecha']='03-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 

	
	?></td>
  </tr>
  <tr>
    <td class="celda2">Abril</td>
    <td class="celda2" id='precio1'>$<?php //echo $cuot[4]; ?></td>
    <td class="celda2" id='precio1'></td>
    <td class="celda2" id='precio1'></td>
    <td class="celda2" id='precio1'></td>
		  <td class="celda2" id='precio1'>0</td>
    <td class="celda2" id='precio1'>$<?php $tot1= $cuot[4]; //echo $tot1; ?></td>
    <td class="celda2" id='precio1'>$<?php //echo $pag[4]; ?></td>
    <td class="celda2" id='precio1'>$<?php
//$totrestan="";


$mue= $tot1-$pag[4];
//echo $mue;

if($mue>=0){
$totrestan[$j]['fecha']='04-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 
	
	?></td>
  </tr>
  <tr>
    <td class="celda1">Mayo</td>
    <td class="celda1" id='precio1'>$<?php //echo $cuot[5]; ?></td>
    <td class="celda1" id='precio1'></td>
    <td class="celda1" id='precio1'></td>
    <td class="celda1" id='precio1'></td>
		  <td class="celda1" id='precio1'>0</td>
    <td class="celda1" id='precio1'>$<?php $tot1= $cuot[5]; //echo $tot1; ?></td>
    <td class="celda1" id='precio1'>$<?php //echo $pag[5]; ?></td>
    <td class="celda1" id='precio1'>$<?php //echo $tot1-$pag[5]; ?><?php
//$totrestan="";


$mue= $tot1-$pag[5];
//echo $mue;

if($mue>=0){
$totrestan[$j]['fecha']='05-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 
	
	?></td>
  </tr>
  <tr>
    <td class="celda2">Junio</td>
    <td class="celda2" id='precio1'>$<?php //echo $cuot[6]; ?></td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
		  <td class="celda2" id='precio1'>0</td>
    <td class="celda2" id='precio1'>$<?php $tot1= $cuot[6]; //echo $tot1; ?></td>
    <td class="celda2" id='precio1'>$<?php //echo $pag[6]; ?></td>
    <td class="celda2" id='precio1'>$<?php //echo $tot1-$pag[6]; ?><?php
//$totrestan="";


$mue= $tot1-$pag[6];
//echo $mue;

if($mue>=0){
$totrestan[$j]['fecha']='06-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 
	
	?></td>
  </tr>
  <tr>
    <td class="celda1">Julio</td>
    <td class="celda1" id='precio1'>$<?php //echo $cuot[7]; ?></td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
		  <td class="celda1" id='precio1'>0</td>
    <td class="celda1" id='precio1'>$<?php $tot1= $cuot[7]; //echo $tot1; ?></td>
    <td class="celda1" id='precio1'>$<?php //echo $pag[7]; ?></td>
    <td class="celda1" id='precio1'>$<?php //echo $tot1-$pag[7]; ?>
	<?php
//$totrestan="";


$mue= $tot1-$pag[7];
//echo $mue;

if($mue>=0){
$totrestan[$j]['fecha']='07-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 
	
	?></td>
  </tr>
  <tr>
    <td class="celda2">Agosto</td>
    <td class="celda2" id='precio1'>$<?php //echo $cuot[8]; ?></td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
		  <td class="celda2" id='precio1'>0</td>
    <td class="celda2" id='precio1'>$<?php $tot1= $cuot[8]; //echo $tot1; ?></td>
    <td class="celda2" id='precio1'>$<?php // echo $pag[8]; ?></td>
    <td class="celda2" id='precio1'>$<?php //echo $tot1-$pag[8]; ?><?php
//$totrestan="";


$mue= $tot1-$pag[8];
//echo $mue;

if($mue>=0){
$totrestan[$j]['fecha']='08-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 
	
	?>
      </td>
  </tr>
  <tr>
    <td class="celda1">Septiembre</td>
    <td class="celda1" id='precio1'>$<?php //echo $cuot[9]; ?></td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
		  <td class="celda1" id='precio1'>0</td>
    <td class="celda1" id='precio1'>$<?php $tot1= $cuot[9]; //echo $tot1; ?></td>
    <td class="celda1" id='precio1'>$<?php //echo $pag[9]; ?></td>
    <td class="celda1" id='precio1'>$<?php //echo $tot1-$pag[9]; ?><?php
//$totrestan="";


$mue= $tot1-$pag[9];
//echo $mue;

if($mue>=0){
$totrestan[$j]['fecha']='09-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 
	
	?></td>
  </tr>
  <tr>
    <td class="celda2">Octubre</td>
    <td class="celda2" id='precio1'>$<?php //echo $cuot[10]; ?></td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
		  <td class="celda2" id='precio1'>0</td>
    <td class="celda2" id='precio1'>$<?php $tot1= $cuot[10]; //echo $tot1; ?></td>
    <td class="celda2" id='precio1'>$<?php //echo $pag[10]; ?></td>
    <td class="celda2" id='precio1'>$<?php //echo $tot1-$pag[10]; ?><?php
//$totrestan="";


$mue= $tot1-$pag[10];
//echo $mue;

if($mue>=0){
$totrestan[$j]['fecha']='10-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 
	
	?></td>
  </tr>
  <tr>
    <td class="celda1">Noviembre</td>
    <td class="celda1" id='precio1'>$<?php //echo $cuot[11]; ?></td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
		  <td class="celda1" id='precio1'>0</td>
    <td class="celda1" id='precio1'>$<?php $tot1= $cuot[11]; //echo $tot1; ?></td>
    <td class="celda1" id='precio1'>$<?php //echo $pag[11]; ?></td>
    <td class="celda1" id='precio1'>$<?php
//$totrestan="";


$mue= $tot1-$pag[11];
//echo $mue;

if($mue>=0){
$totrestan[$j]['fecha']='11-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 
	
	?></td>
  </tr>
  <tr>
    <td class="celda2">Diciembre</td>
    <td class="celda2" id='precio1'>$<?php //echo $cuot[12]; ?></td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
		  <td class="celda2" id='precio1'>0</td>
    <td class="celda2" id='precio1'>$<?php $tot1= $cuot[12]; //echo $tot1; ?></td>
    <td class="celda2" id='precio1'>$<?php //echo $pag[12]; ?></td>
    <td class="celda2" id='precio1'>$<?php //echo $tot1-$pag[12]; ?><?php
//$totrestan="";


$mue= $tot1-$pag[12];
//echo $mue;

if($mue>=0){
$totrestan[$j]['fecha']='12-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 
	
	?></td>
  </tr>
  <tr>
    <td class="celda1">TOTAL</td>
    <td class="celda1">&nbsp;</td>
    <td class="celda1">&nbsp;</td>
    <td class="celda1">&nbsp;</td>
    <td class="celda1">&nbsp;</td>
		  <td class="celda1" id='precio1'>0</td>
    <td class="celda1">&nbsp;</td>
    <td class="celda1">&nbsp;</td>
    <td class="celda1" id='precio1'>$0</td>
  </tr>
</table>

 
 
 -->
 






















	 
	  
	<?php 
	
	
	
	
	global $host, $user,$password, $dbname,$link;

//echo $_POST['a'];
$ids = ""; 

//$ff=explode(";",$_POST['status']);
//print_r($ff);
//echo count($ff);
$mmm=1;

//echo $i."€€€";


	
	
	
	
	
	
	
	//echo $totrestan;
	//print_r($totrestan);
	
	/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;


 //TABLA prueba
$tablename="pagos";
//$filtro=" ORDER BY id ";

/*
if (isset($_GET['f'])){
	if ($_GET['f']=="todos"){
	$filtro1="";
	}else{
	$filtro1=" WHERE idalumno='".$_GET['f']."'";
	}
}else{
$filtro1="";
}
*/

$filtro=" ORDER BY id DESC";
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
$a=0;
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["fecha"]=$fila["fecha"];	
	$pagos[$a]["precio"]=$fila["precio"];	
	$pagos[$a]["idalumno"]=$fila["idalumno"];			
	$pagos[$a]["asignadofecha"]=$fila["asignadofecha"];			
	$a++;
}

mysql_free_result($resultado);
?>  





	<?php 
	

global $host, $user,$password, $dbname,$link;


 //TABLA prueba
$tablename="recibos";


$filtro="WHERE id ='".$miidche."' ";
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
$a=0;
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$recibos[$a]["id"]=$fila["id"];
	$recibos[$a]["fecha"]=$fila["fecha"];			
	$a++;
}

mysql_free_result($resultado);

//print_r($recibos);
?>  




	  <?php function relacionar($id,$t){
	  /*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;


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
	$filter[$a]["apellido"]=$fila["apellido"];	
	$filter[$a]["nombre"]=$fila["nombre"];		
	$filter[$a]["dni"]=$fila["dni"];
	$filter[$a]["idf"]=$fila["idf"];				
	$a++;
}

mysql_free_result($resultado);
//print_r($filter);

echo  $filter[1]["nombre"].", ".$filter[1]["apellido"];

 }?>
 
	  
	  
	  
	  <!--
	  <div  class="formulario11" >

<strong>RECIBO DE PAGO</strong>

<p>
<table border="0" cellpadding="0" cellspacing="0" >
  <tr>
    <td>
 
      <label>Alumno:</label><br />
  <div class="mayuss"><?php //relacionar($pagos[0]["idalumno"],"alumnos"); ?></div>
	  <div  class="espacio1"></div>
     </td>
    </tr>
	
	  <tr>
    <td>
      <label>Precio: </label><br />
  <div>$<?php //echo number_format($pagos[0]["precio"],2); ?> pesos</div>
	    <div class="espacio1"></div>
        </td>
    </tr>
	  <tr>
    <td>
	  <label>
      Fecha de pago:</label> <br />
	  <div><?php //echo $pagos[0]["fecha"]; ?></div>
<div class="espacio1"></div>
        </td>
    </tr>
	
		  <tr>
    <td>
	  <label>
      Numero de recibo:</label> <br />
	  <div><?php //echo $pagos[0]["id"]; ?></div>
<div class="espacio1"></div>
        </td>
    </tr>
	
</table></div>
-->



<?php global $host, $user,$password, $dbname,$link;






 //TABLA prueba
$tablename="alumnos";
//$filtro=" ORDER BY id ";


$filtro=" WHERE idf='".$miidf."' ORDER BY id ASC";
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
$a=0;
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$alumnos[$a]["id"]=$fila["id"];
	$alumnos[$a]["nombre"]=$fila["nombre"];	
	$alumnos[$a]["apellido"]=$fila["apellido"];	
	$alumnos[$a]["curso"]=$fila["curso"];	
	//$pagos[$a]["idalumno"]=$fila["idalumno"];				
	$a++;
}

mysql_free_result($resultado);





function relacionar3($id,$t){
	  /*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;


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

echo  $filter[1]["nombre"].", ".$filter[1]["apellido"];

 }



function damemes($h){

$array = array(
    1 => "Enero",
    2 => "Febrero",
	3 => "Marzo",
	4 => "Abril",
	5 => "Mayo",
	6 => "Junio",
	7 => "Julio",
	8 => "Agosto",
	9 => "Septiembre",
	10 => "Octubre",
	11 => "Noviembre",
	12 => "Diciembre",
);

$h=intval($h);

return $array[$h];
}

//echo damemes(04);
?>



<?php 

global $host, $user,$password, $dbname,$link;











$filtro="WHERE idf=".$miidf." ";


$tablename="alumnos";
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
	$filter1[$a]["id"]=$fila["id"];
	$filter1[$a]["apellido"]=$fila["apellido"];	
	$filter1[$a]["nombre"]=$fila["nombre"];		
	$filter1[$a]["dni"]=$fila["dni"];
	$filter1[$a]["idf"]=$fila["idf"];	
	$filter1[$a]["cuota"]=$fila["cuota"];		
	$filter1[$a]["fecha_inscrip_inicio"]=$fila["fecha_inscrip_inicio"];	
	$filter1[$a]["fecha_inscrip_fin"]=$fila["fecha_inscrip_fin"];			
	$a++;
}

mysql_free_result($resultado);
//print_r($filter1);








			   //TABLA prueba
$tablename="pagos";
//$filtro=" ORDER BY id LIMIT 20,10";
$fechj=date("Y")-1;
$filtro="WHERE idf='".$_GET['idf']."' AND year(asignadofecha) BETWEEN '2012' AND '$fechj' ";//AND year(fecha)='2013' AND month(fecha)='$mes'
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
//$pagos=0;
$totprecio=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["fecha"]=$fila["fecha"];	
	$pagos[$a]["precio"]=$fila["precio"];
	$totprecio=$totprecio+$fila["precio"];
	$pagos[$a]["idcuota"]=$fila["idcuota"];	
	$pagos[$a]["asignadofecha"]="///";						
	$a++;
}

mysql_free_result($resultado);

//echo "TOTPRECIO:".$totprecio;
//print_r($pagos);











//print_r($filter1);
$totcuota=0;
	for ($i = 1; $i <= count($filter1); $i++) {		  

			   //TABLA prueba
$tablename="cuotas";
//$filtro=" ORDER BY id LIMIT 20,10";
$fechj=date("Y")-1;
$filtro="WHERE cuota='".$filter1[$i]["cuota"]."'  AND year(fecha) BETWEEN '2012' AND '$fechj' ";

//$filtro="WHERE idf='".$_GET['idf']."' AND year(asignadofecha) BETWEEN '2012' AND '$fechj' ";
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
//$pagos=0;
$cuota="";


while ($fila = mysql_fetch_assoc($resultado)) {

$date0 = new DateTime("0000-00-00");
$date1 = new DateTime($fila["fecha"]);
$date2 = new DateTime($filter1[$i]["fecha_inscrip_inicio"]);
$date3 = new DateTime($filter1[$i]["fecha_inscrip_fin"]);
//echo $filter1[$i]["fecha_inscrip_fin"] ."<br>";

if($filter1[$i]["fecha_inscrip_fin"]=="0000-00-00"){
$comparar="no";
}else{

$comparar="si";}
//echo $comparar;
if($comparar=="si"){
//echo "echo;".$filter1[$i]["fecha_inscrip_fin"];
}else{

}
if($comparar=="si"){

if($date1<$date2  or $date1 >= $date3){}else{
	$cuota[$a]["id"]=$fila["id"];
	$cuota[$a]["fecha"]=$fila["fecha"];	
	$cuota[$a]["precio"]=$fila["precio"];		
	$totcuota=$totcuota+$fila["precio"];			
	$a++;
	}
	
	

}else{
if($date1<=$date2 ){}else{

	$cuota[$a]["id"]=$fila["id"];
	$cuota[$a]["fecha"]=$fila["fecha"];	
	$cuota[$a]["precio"]=$fila["precio"];		
	$totcuota=$totcuota+$fila["precio"];		
	$a++;
	}
}


}

//print_r($cuota);

//echo "<br>";

if ($cuota==""){
//echo "vacio";
$cantcoutas=0;
}else{
$cantcoutas=count($cuota);
}
//$cuota= count(null);
//echo $cuota."///".$cantcoutas;


mysql_free_result($resultado);

}

//echo "//*".$totcuota;




$mitot=$totcuota-$totprecio;

//echo "//-".$mitot;

/*
if ($mitot>0){
echo "<div class='rojo'>*Tiene una deuda de años anteriores de $".$mitot." pesos.</div>";
}
*/

//print_r($cuota);

//echo "<br>";
/*
if ($cuota==""){
//echo "vacio";
$cantcoutas=0;
}else{
$cantcoutas=count($cuota);
}
//$cuota= count(null);
//echo $cuota."///".$cantcoutas;
*/

			  
?>



<div style="margin-left:20px;">
	
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>  <div  align="center" style="width:300px; height:161px;float:left; position:relative; border-top:solid;  border-left:solid; padding-top:24px;  "><span style="font-size:27px;"><b>Nuevo Colegio</b></span><br> <span style="font-size:27px;"><b>Monte Grande</b></span><br> S.R.L  <span style="font-size:12px;"><br>
    Educación Niveles Inicial, E.G.B, E.S.B y E.S.O  <br>
    Avellaneda 566 - Tel.:4281-8181<br>
    (1842) Monte Grande - Provincia de Bs. As.<p></span></div>
    <div align="center" style="width:300px;float:left;border-top:solid; border-right:solid; border-left:solid; height:175px; padding-top:10px;   ">
      RECIBO Nº <?php echo $recibos[0]["id"]; ?>
      <table width="41%" border="1" cellspacing="0" cellpadding="2">
        <tr>
          <td><div align="center">Día</div></td>
          <td><div align="center">Mes</div></td>
          <td><div align="center">Año</div></td>
        </tr>
        <tr>
          <td><div align="center">
		  
		        <?php 
		  $tiqui=explode(" ",$recibos[0]["fecha"]);
		  $mifech=explode("-",$tiqui[0]);
		  
		  echo $mifech[2]; ?>
		  </div>
      </td>
          <td><div align="center"> <?php echo  $mifech[1]; ?></div>
           </td>
          <td><div align="center"><?php echo $mifech[0]; ?></div>
            </td>
        </tr>
      </table>
      <div style="font-size:12px; padding-top:5px; padding-bottom:32px;">DIPREGEP Educ. Inicial N 7465<br />
        DIPREGEP Educ. EBG N 7465<br />
        C.U.I.T 30-71091786-4<br />
        Ingresos Brutos EXENTO<br />
        Inicio de Actividades: Marzo 2009
		</div>

    </div>
	
	<div style="position:absolute; left:309px; border:solid; background-color:#FFFFFF; font-size:24px; padding-left:5px; padding-right:5px;"> X </div>
	
	
	</td>
  </tr>
  <tr>
    <td>	<div style="width:593px;border:solid; padding-left:5px; padding-right:5px; padding-bottom:20px;" > 
      <p>Recibí de
	  <?php 
	  
	  for ($i = 0; $i <= count($alumnos)-1; $i++) {
	  echo ucwords($alumnos[$i]['nombre'])." ".ucwords($alumnos[$i]['apellido']);
	  if($i==count($alumnos)-1){
	  echo ".";
	  }else{
	  echo ", ";
	  }
	  }
	  ?>
<br>
        Año/División:  	  <?php 
	  
	  for ($i = 0; $i <= count($alumnos)-1; $i++) {
	  echo $alumnos[$i]['curso'];
	  echo "º";
	  if($i==count($alumnos)-1){
	  echo ".";
	  }else{
	  echo ", ";
	  }
	  }
	  ?></p>
	  
<?php //print_r($pago);?>
      <table width="100%" border="1" cellspacing="0" cellpadding="0">
        <tr>
          <td>CONCEPTO</td>
          <td>IMPORTE </td>
          <td>TOTAL GENERAL</td>
        </tr>
		
			 <?php  
			 $tot=0;
	 for ($i = 1; $i <= count($pago); $i++) { ?>
	
	
	
	    <tr>
          <td> 
            <?php  
			//echo $_POST["ano".$ff[$i]];
			  $tiqui=explode(" ",$pago[$i]["asignadofecha"]);
		  $mifech=explode("-",$tiqui[0]);
		  
		  //echo $mifech[1]."-".$mifech[0];
		  echo "Pago  cuota ". damemes($mifech[1])." ".$mifech[0];
		  
		 //echo "<br>".$recibos[0]["fecha"];
 ?></td>
          <td><div align="right">$<?php   echo number_format($pago[$i]["precio"],2);
		  
		  $tot=$tot+$pago[$i]["precio"];
		   ?></div></td>
          <td></td>
        </tr>
		
	<?php } ?> 
	
	
        <tr>
          <td>&nbsp;</td>
          <td><div align="right">TOTAL</div></td>
          <td><div align="right">$<?php echo number_format($tot,2); ?></div></td>
        </tr>
      </table>

      <br>
      <table width="100%" border="1" cellspacing="0" cellpadding="0">
        <tr>
          <td>CONCEPTO</td>
          <td>IMPORTE </td>
          <td>TOTAL GENERAL</td>
        </tr>
	<?php 	  
	
	 $tot=0;
	for ($i = 0; $i <= count($totrestan)-1; $i++) {
	if($i>date("m")-3 or $totrestan[$i]['precio']==0){}else{
	
			  $tiqui=explode(" ",$totrestan[$i]['fecha']);
		  $mifech=explode("-",$tiqui[0]);
		  
		  //echo intval($mifech[0]).date("m");
		  if(intval($mifech[0])<=intval(date("m"))){
	?>
        <tr>
          <td><?php //echo $i; ?>Resta abonar cuota <?php echo damemes($mifech[0])." ".$mifech[1];// $mifech[0]; // ?>  </td>
          <td><div align="right">$<?php echo number_format($totrestan[$i]['precio'],2); 
		  
		    $tot=$tot+$totrestan[$i]['precio'];
		  ?></div></td>
          <td>&nbsp;</td>
        </tr>
		
		
		<?php }}} ?>
		
		<?php if ($mitot>0){
//echo "<div class='rojo'> de $".." pesos.</div>";
?>
        <tr>
          <td>Deuda de años anteriores </td>
          <td><div align="right">$<?php echo number_format($mitot,2);
		   $tot=$tot+$mitot;
		  
		  ?></div></td>
          <td>&nbsp;</td>
        </tr>
		
		<?php } ?>
        <tr>
          <td>&nbsp;</td>
          <td><div align="right">TOTAL</div></td>
          <td><div align="right">$<?php echo number_format($tot,2); ?></div></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="55%"><div align="right"></div></td>
          <td width="40%">_______________________</td>
          <td width="5%">&nbsp;</td>
        </tr>
        <tr>
          <td><div align="right"></div></td>
          <td><div align="center">Firma Responsable.</div></td>
          <td><div align="center"></div></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>



</div>
 
 <!--
 <script language="JavaScript" type="text/javascript">

window.print();

</script>
 -->
 <?php } 
 
 
 }
 
 //recibos($_POST['id']);
 ?>














  <?php 
  
  function submenu11(){ ?>
<div class="submenu"><img src="b_browse.png" /><a href="?op=11&idf=<?php echo $_GET['idf']; ?>&id=<?php echo $_GET['id']; ?>&t=<?php echo $_GET['t']; ?>">Listar Descuentos</a> | <img src="b_add.png" /><a href="?op=12&idf=<?php echo $_GET['idf']; ?>&id=<?php echo $_GET['id']; ?>&t=<?php echo $_GET['t']; ?>">Agregar Descuentos</a></div>

 
  <?php 
   }
  function submenu2(){ ?>
  
  <div class="submenu">
  
  <a href="1.php?op=8&amp;t=cuotas&amp;n=0"><img src="b_browse.png" />Listar Cuotas     </a>
  &nbsp;|&nbsp;
  <a href="1.php?op=8&amp;t=cuotas&amp;n=1"><img src="b_add.png" />Agregar Cuotas     </a>


</div>

  
    <?php 
  }
  
  

  function submenu9(){ ?>
  

  
  <div class="submenu">

<a href="?op=9&t=cursos&n=0"><img src="b_browse.png" />Listar Cursos</a>&nbsp;|&nbsp;
<a href="?op=9&amp;t=cursos&amp;n=1"><img src="b_add.png" />Agregar Cursos</a>


</div>

  
    <?php 
  }
  

  
  
  
  

  
  
  
function submenu1(){ ?>


<div class="submenu">

<!--

<a href="?op=3&idf=<?php //echo $_GET['idf']; ?>&id=<?php //echo $_GET['id']; ?>&t=<?php //echo $_GET['t']; ?>">Agregar pago</a>

-->



<a href="?op=2&idf=<?php echo $_GET['idf']; ?>&id=<?php echo $_GET['id']; ;?>&t=<?php echo $_GET['t'];?>&f=<?php echo $_GET['f'];?>&m=<?php echo $_GET['m'];?>&y=<?php echo date("Y");?>"><img src="b_browse.png" />Listar Pagos</a>

&nbsp;|&nbsp;

<a href="?op=3&idf=<?php echo $_GET['idf']; ?>&id=<?php echo $_GET['id']; ?>&t=<?php echo $_GET['t']; ?>&f=<?php echo $_GET['f'];?>&m=<?php echo $_GET['m'];?>&y=<?php echo date("Y");?>"><img src="b_add.png" />Agregar Pago</a>




</div>
<?php 
}  


function op1(){




 
 if (isset($_POST['buscar'])){
  $buscar=$_POST['buscar'];
 }else{
	 if(isset($_GET['buscar'])){
	  $buscar=$_GET['buscar'];
	 }else{
	  $buscar="";
	 }
 
 }
 
 
 
 
  if (isset($_POST['tabla'])){
  $tabla=$_POST['tabla'];
 }else{
  
  	 if(isset($_GET['tabla'])){
	  $tabla=$_GET['tabla'];
	 }else{
	  $tabla="";
	 }
 }
 
 
   if (isset($_POST['campo'])){
  $campo=$_POST['campo'];
 }else{
    	 if(isset($_GET['campo'])){
	  $campo=$_GET['campo'];
	 }else{
	  $campo="";
	 }
 }


?>


<script language="JavaScript">

function filtrito(){
//alert("sadsad");

c=document.getElementById('campo').selectedIndex;


//alert(c);

//document.getElementById("coma").style.display = "none";
if (c=='0'){
//alert("si");
document.getElementById("coma").innerHTML = "*Ejemplo: Juan, Martinez";
document.getElementById("coma").style.display = "";

}

if (c=="2"){
document.getElementById("coma").style.display = "";
document.getElementById("coma").innerHTML = "*Ejemplo: Juan";
}

if (c=="1"){
document.getElementById("coma").style.display = "";
document.getElementById("coma").innerHTML = "*Ejemplo: Martinez";
}

if (c=="3"){
document.getElementById("coma").style.display = "";
document.getElementById("coma").innerHTML = "*Ejemplo: 30864694";
}

if (c=="4"){
document.getElementById("coma").style.display = "";
document.getElementById("coma").innerHTML = "*Ejemplo: 16";
}


}

function filtro_sel(){
		
		
		c=document.getElementById("campo").value;

//alert(c);
		
a = document.getElementById("tabla").value;	   
document.getElementById("tabla_hiden").value=a;


b = document.getElementById("campo").value;	   
document.getElementById("campo_hiden").value=b;


filtrito();

}
</script>




<div class="contenido" style="width:730px; background-color:#E1E4EC; border-color:#000000; border:solid; padding-top:15px;padding-left:20px; padding-bottom:20px;">

<strong>Ingrese busqueda:</strong>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="709" valign="top">
	
	<form id="form1" name="form1" method="post" action="?op=<?php echo $_GET['op'] ?>">
	

	
	
	
	
	
 <div align="left"> 
 
 
  
	


	
 
 <label>
  <input name="buscar" type="text" id="buscar" size="24" <?php if($buscar==""){}else{echo 'value="'.$buscar.'"';}  ?> />
  </label>


 
    <select name="tabla" id="tabla" >

	 <option value="alumnos" <?php if($tabla==""){}else{if($tabla=='alumnos'){echo 'selected="selected"';}} ?>>Alumno</option>
	      <option value="padres" <?php if($tabla==""){}else{if($tabla=='padres'){echo 'selected="selected"';}} ?>>Padre</option>
      <option value="madres" <?php if($tabla==""){}else{if($tabla=='madres'){echo 'selected="selected"';}} ?>>Madre</option>
     


    </select>
&nbsp;

 Filtrar por: 
 

     <select name="campo" id="campo" onchange="filtro_sel()" >
       <option value="nombreapellido" <?php if($campo==""){}else{if($campo=='nombreapellido'){echo 'selected="selected"';}} ?>>Nombre y Apellido</option>
	   
	   <option value="apellido" <?php if($campo==""){}else{if($campo=='apellido'){echo 'selected="selected"';}} ?>>Apellido</option>
      <option value="nombre" <?php if($campo==""){}else{if($campo=='nombre'){echo 'selected="selected"';}} ?>>nombre</option>
      <option value="dni" <?php if($campo==""){}else{if($campo=='dni'){echo 'selected="selected"';}} ?>>dni</option>
      <option value="idf" <?php if($campo==""){}else{if($campo=='idf'){echo 'selected="selected"';}} ?>>idf</option>
      <option value="email" <?php if($campo==""){}else{if($campo=='email'){echo 'selected="selected"';}} ?>>email</option>
	  
    </select><div > <input type="submit" name="Submit" value="BUSCAR" /></div>
	 
	  <div id="coma" class="coma" style="padding-top:7px;"></div>
	</div>
	
	  <script language="javascript">
	 //alert("dsad");
	 filtrito();
	 //filtro_sel();
	 
	 
	 </script>

 
</form>



</td>
    <td width="17" valign="top">
	
	<form id="form5" name="form5" method="post" action="?op=<?php echo $_GET['op'] ?>">
     <input name="buscar" type="hidden" value="" />
	 <input id="tabla_hiden" name="tabla" type="hidden" value="padres" />

	 <input id="campo_hiden" name="campo" type="hidden" value="apellido" />
	 
	  <!-- <input type="submit" name="Submit" value="Traer todo" onclick="filtro_sel()" /> -->
      </form>    </td>
  </tr>
</table>
</div>

<?php 
} 
?>
<?php 

function op13(){
echo 'aqui la hora';

}


function op2(){


/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");


*/



//LIMIT
if (isset($_GET['p'])){
$p=$_GET['p'];
}else{
$p=1;
}

if($p==0){$limit=0;}else{$limit=$p-1;}
//LIMIT

 //TABLA prueba
//$tablename="pagos";
if (isset($_GET['f'])){
	if ($_GET['f']=="todos"){
	$filtro1="";
	}else{
	$filtro1=" WHERE cuota='".$_GET['f']."'";
	}
}else{
$filtro1="";
}

$filtro50="ORDER BY apellido ASC LIMIT ".$limit."0,10";










 //TABLA prueba
 
 if (isset($_POST['buscar'])){
  $buscar=$_POST['buscar'];
 }else{
  $buscar=$_GET['buscar'];
 }
 
 
 
 
  if (isset($_POST['tabla'])){
  $tabla=$_POST['tabla'];
 }else{
  $tabla=$_GET['tabla'];
 }
 
 
   if (isset($_POST['campo'])){
  $campo=$_POST['campo'];
 }else{
  $campo=$_GET['campo'];
 }





 //TABLA prueba

$tablename=$tabla;




//$filtro=" ORDER BY id LIMIT 20,10";





//echo $campo;

$bus2=explode(",",$buscar);

//if (substr($bus2[1],0,1)==" "){
//elimina

//}




if ($campo == "nombreapellido"){

$bus2[0]=ltrim($bus2[0]);
$bus2[0]=rtrim($bus2[0]);

if (isset($bus2[1])){
$bus2[1]=ltrim($bus2[1]);
$bus2[1]=rtrim($bus2[1]);
$busbusca="AND apellido like '$bus2[1]%'";

}else{
$busbusca="";
}




$filtroNomAp =" nombre like '$bus2[0]%' $busbusca ";


}else{

$buscar=ltrim($buscar);
$buscar=rtrim($buscar);



$filtroNomAp =$campo." like '$buscar%'";
}
$filtro="WHERE $filtroNomAp  $filtro50";
$query="SELECT * FROM $tablename $filtro;";

//$sql = "SELECT * FROM noticias WHERE noticia like ‘%$buscar%’ ORDER BY id DESC";
//echo $query;


//echo $GLOBALS['host'];

global $host, $user,$password, $dbname,$link;
/*
echo $host;
echo $user;
echo $password;
echo $dbname;
echo $link;

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
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$busqueda[$a]["id"]=$fila["id"];
	$busqueda[$a]["apellido"]=$fila["apellido"];
	$busqueda[$a]["nombre"]=$fila["nombre"];
	$busqueda[$a]["dni"]=$fila["dni"];
	$busqueda[$a]["idf"]=$fila["idf"];
	if($tabla=="alumnos"){
	
	$busqueda[$a]["curso"]=$fila["curso"];
	}
	//$pagos[$a]["fecha"]=$fila["fecha"];	
	//$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

////////////////

//print_r($busqueda);
?>



<?php function relacionarcurso($id,$t){
	  /*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;


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




<?php if(!isset($busqueda)){echo "<div class='contenido' style='width:736px; background-color:#E1E4EC; border-color:#000000; border:solid; padding-top:15px;padding-left:20px; padding-bottom:20px;'>No se encontraron resultados.</div>";}else{ ?>








<script language="javascript">
	
	
	
	
	
	var formatNumber = {
	alert("asd");
separador: ",", // separador para los miles
sepDecimal: '.', // separador para los decimales
formatear:function (num){
var str=num;
n=replaceAll(str, ",", "" )
num=n;
//alert(num);
num +='';
var splitStr = num.split('.');
var splitLeft = splitStr[0];
var splitRight = splitStr.length > 1 ? this.sepDecimal + splitStr[1] : '';
var regx = /(\d+)(\d{3})/;
while (regx.test(splitLeft)) {
splitLeft = splitLeft.replace(regx, '$1' + this.separador + '$2');
}
return this.simbol + splitLeft  +splitRight;
},
new:function(num, simbol){
this.simbol = simbol ||'';
return this.formatear(num);
}
}
	
	</script>
	

<div class="contenido">
<table width="750" border="1" cellpadding="0" cellspacing="0">
  <tr>
  <td class="tabla"><strong>ID</strong></td>
  <td class="tabla"><strong>Apellido</strong></td>
    <td class="tabla"><strong>Nombre</strong></td>
    
    <td class="tabla"><strong>DNI</strong></td>
	<td class="tabla"><strong>IDF</strong></td>
	<?php if($tabla=="alumnos"){ ?>
	<td class="tabla"><strong>Curso</strong></td>
	<?php }?>
    <td class="tabla">&nbsp;</td>
  </tr>
  <?php
$d=0;

   for ($i = 1; $i <= count($busqueda); $i++) {
   
   if($d==1){
    $class1='class="celda2"';
   $d=0;
   }else{
   $class1='class="celda1"';
   $d=1;
   }
   
   ?>
<tr>
<td <?php echo $class1;?>><?php echo $busqueda[$i]["id"]; ?></td>
  <td <?php echo $class1;?>><?php echo $busqueda[$i]["apellido"]; ?></td>
    <td <?php echo $class1;?>><?php echo $busqueda[$i]["nombre"]; ?></td>
  
    <td <?php echo $class1;?>>
	
	
	<?php echo  str_replace(",",".",number_format($busqueda[$i]["dni"],0)); ?>
	

	</td>
	
	
	    <td <?php echo $class1;?>>
	
	
	<?php echo  $busqueda[$i]["idf"]; ?>
	

	</td>

	<?php 	if($tabla=="alumnos"){?>
	    <td <?php echo $class1;?>>
	
	<div>
	<?php   relacionarcurso($busqueda[$i]["curso"],"cuotas_categoria"); ?>
	</div>

	</td>
	<?php } ?>
     <td <?php echo $class1;?> ><div style="width:350px;" >

		<?php 
		
				if (isset($_POST['tabla'])){
		$tabla_dato=$_POST['tabla'];
		}else{
		$tabla_dato=$_GET['tabla'];
		}
		
		if ($_GET['op']=="0"){
		 ?>

		<form action="?op=2&idf=<?php echo $busqueda[$i]["idf"];?>&id=<?php echo $busqueda[$i]["id"];?>&t=<?php echo $tabla_dato?><?php //if($tabla_dato=="alumnos"){echo "&f=".$busqueda[$i]["id"];}else{echo "&f=todos";}
		echo "&f=todos&y=".date("Y");
		
		
		?>&m=1" method="post"><input name="Enviar" type="submit" value="PAGOS" />
		</form>
		<?php } ?>
		
				<?php if ($_GET['op']=="10"){ ?>
					<form action="?op=11&idf=<?php echo $busqueda[$i]["idf"];?>&id=<?php echo $busqueda[$i]["id"];?>&t=<?php echo $tabla_dato?><?php if($tabla_dato=="alumnos"){echo "&f=".$busqueda[$i]["id"];}?>" method="post"><input name="Enviar" type="submit" value="DESCUENTOS" />
		</form>
		<!--
        <a href="?op=11&idf=<?php //echo $busqueda[$i]["idf"];?>&id=<?php //echo $busqueda[$i]["id"];?>&t=<?php //echo $tabla_dato;?><?php //if($tabla_dato=="alumnos"){echo "&f=".$busqueda[$i]["id"];}?>">DESCUENTOS</a>
		-->
		<?php } ?>
		
		<?php if ($_GET['op']=="5"){ ?>
		<div style="float:left;" >
		<form action="?op=5&idf=<?php echo $busqueda[$i]["idf"];?>&id=<?php echo $busqueda[$i]["id"];?>&t=<?php echo $tabla_dato;?>" method="post"><input name="Enviar" type="submit" value="FAMILIARES" />
		</form>
		<!--
		<a href="?op=5&idf=<?php //echo $busqueda[$i]["idf"];?>&id=<?php //echo $busqueda[$i]["id"];?>&t=<?php //echo $tabla_dato;?>">Familia</a>
			-->
		</div>
		<?php } ?>
		
		
			 <?php if ($_GET['op']=="5"){ ?>
	 <div style="float:left;">
		<input name="editar" type="button"  class="editar" value="Editar" onclick="window.location='?op=7&amp;t=<?php echo $tabla_dato; ?>&amp;n=2&amp;id=<?php echo $busqueda[$i]["id"];?>' "/>
<input name="eliminar" type="button" class="eliminar" value="Eliminar" onclick="pregunta(<?php echo $busqueda[$i]["id"];?>,'<?php echo $tabla_dato; ?>')"/>
        <input name="elim_id" type="hidden" id="elim_id" value="<?php echo $busqueda[$i]["id"];?>" />
	</div>
	
		<?php } ?>
		
		</div>
	
     </td>
  </tr>
  <?php }?>
</table>



<script language="JavaScript">
function pregunta(id,t){
    if (confirm('¿Estas seguro eliminar esta registro?')){
	   window.location = "?op=7&t="+t+"&n=3&e="+id
    }
	//alert("sd");
}
</script>

<?php function paginacion($t,$q){?>


<?php 

//echo $q."//";
$queri=explode("ORDER",$q);
$q=$queri[0].";";
/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/
global $host, $user,$password, $dbname,$link;

 //TABLA prueba
$tablename=$t;
//$filtro=" ORDER BY id ";


if (isset($_GET['f'])){
	if ($_GET['f']=="todos"){
	$filtro1="";
	}else{
	$filtro1=" WHERE cuota='".$_GET['f']."'";
	}
}else{
$filtro1="";
}

$filtro=" ORDER BY id DESC";
$query="SELECT * FROM $tablename $filtro;";
//echo $query;


$query=$q;



if (!$enlace = mysql_connect($host, $user, $password)) {
    echo 'No pudo conectarse a mysql';
    exit;
}

if (!mysql_select_db($dbname, $link)) {
    echo 'No pudo seleccionar la base de datos';
    exit;
}

$sql       = 'SELECT foo FROM bar WHERE id = 42';
$resultado = mysql_query($query, $enlace);

if (!$resultado) {
    echo "Error de BD, no se pudo consultar la base de datos\n";
    echo "Error MySQL: " . mysql_error();
    exit;
}
$a=1;
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["nombre"]=$fila["nombre"];		
	$a++;
}

mysql_free_result($resultado);

?>



<?php 

 $reg=count($pagos);
//echo $reg."//";
$numpag=0;
for ($i = 1; $i <= $reg; $i++) {
$i=$i+10;
$numpag=$numpag+1;
}
//echo $numpag;





if (isset($_GET['p'])){
$p=$_GET['p'];
}else{
$p=1;
}




function getisa(){
$var="";
foreach($_GET as $k => $v) {
    // Reject items not starting with prefix
	if($k=="p" || $k=="tabla" || $k=="campo" || $k=="buscar"  ){}else{
$var=$var.$k."=".$v."&";
}
}

echo $var;
}




		$tabla_dato="padres";
			if (isset($_POST['tabla'])){
		$tabla_dato=$_POST['tabla'];
		}else{
		$tabla_dato=$_GET['tabla'];
		}
		 
		
					if (isset($_POST['campo'])){
		$campo_dato=$_POST['campo'];
		}else{
		$campo_dato=$_GET['campo'];
		}
		
		
					if (isset($_POST['buscar'])){
		$buscar_dato=$_POST['buscar'];
		}else{
		$buscar_dato=$_GET['buscar'];
		}
 ?>
<table width="750" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div align="center">
	
	 <?php if ($p==1){}else{  ?>
	<a href="?<?php getisa();?>p=<?php echo $p-1; ?>&tabla=<?php echo $tabla_dato; ?>&campo=<?php echo $campo_dato; ?>&buscar=<?php echo $buscar_dato; ?>">&lt; anterior</a>
	
	<?php 
	}
	
	
	if($numpag==1){}else{
	
	 
	for ($i = 1; $i <= $numpag; $i++) {
	
	?>
	
	<?php if ($p==$i){?>
	
	 <strong><?php echo $i; ?></strong>
	<?php }else{ ?>
	
	 <a href="?<?php getisa();?>p=<?php echo $i; ?>&tabla=<?php echo $tabla_dato; ?>&campo=<?php echo $campo_dato; ?>&buscar=<?php echo $buscar_dato; ?>"><?php echo $i; ?></a>
	<?php } ?>
	
	 <?php }?>
	 
	<?php if ($p==$numpag){}else{  
	
	

		
		
	?>
	
	
	 <a href="?<?php getisa();?>p=<?php echo $p+1; ?>&tabla=<?php echo $tabla_dato; ?>&campo=<?php echo $campo_dato; ?>&buscar=<?php echo $buscar_dato; ?>">siguiente &gt;</a>
	 <?php }}?>
	 
	 </div></td>
  </tr>
</table>
<?php //print_r($_GET);?>

<?php  } ?>

<?php
		$tabla_dato="padres";
			if (isset($_POST['tabla'])){
		$tabla_dato=$_POST['tabla'];
		}else{
		$tabla_dato=$_GET['tabla'];
		}
echo "<br>";

 paginacion($tabla_dato,$query);?>
</div>
<?php }?>


<?php 
} 
?>










<?php 

function op3(){?>



<?php




/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/
global $host, $user,$password, $dbname,$link;







if (isset($_GET['e'])){


				$tablename="pagos";
				$filtro=" ";
				$query="DELETE FROM $tablename WHERE id='".$_GET['e']."';";
				echo $query;
				
				
				
				
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

//mysql_free_result($resultado);

}



//LIMIT
if (isset($_GET['p'])){
$p=$_GET['p'];
}else{
$p=1;
}

if($p==0){$limit=0;}else{$limit=$p-1;}
//LIMIT

 //TABLA prueba
$tablename="pagos";
if (isset($_GET['f'])){
	if ($_GET['f']=="todos"){
	$filtro1="";
	}else{
	$filtro1=" and idalumno='".$_GET['f']."'";
	}
}else{
$filtro1="";
}

$filtro="WHERE idf='".$_GET['idf']."' $filtro1 ORDER BY id DESC LIMIT ".$limit."0,10";
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

$sql       = 'SELECT foo FROM bar WHERE id = 42';
$resultado = mysql_query($query, $enlace);

if (!$resultado) {
    echo "Error de BD, no se pudo consultar la base de datos\n";
    echo "Error MySQL: " . mysql_error();
    exit;
}
$a=1;
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["fecha"]=$fila["fecha"];	
	$pagos[$a]["precio"]=$fila["precio"];	
	$pagos[$a]["idalumno"]=$fila["idalumno"];	
	$pagos[$a]["asignadofecha"]=$fila["asignadofecha"];				
	$a++;
}

mysql_free_result($resultado);

////////////////

//print_r($pagos);








//LIMIT
if (isset($_GET['p'])){
$p=$_GET['p'];
}else{
$p=1;
}

if($p==0){$limit=0;}else{$limit=$p-1;}
//LIMIT

 //TABLA prueba
$tablename="recibos";
if (isset($_GET['f'])){
	if ($_GET['f']=="todos"){
	$filtro1="";
	}else{
	$filtro1=" and idalumno='".$_GET['f']."'";
	}
}else{
$filtro1="";
}

$filtro="WHERE idf='".$_GET['idf']."' $filtro1 ORDER BY id DESC LIMIT ".$limit."0,10";
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

$sql       = 'SELECT foo FROM bar WHERE id = 42';
$resultado = mysql_query($query, $enlace);

if (!$resultado) {
    echo "Error de BD, no se pudo consultar la base de datos\n";
    echo "Error MySQL: " . mysql_error();
    exit;
}
$a=1;
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$recibos[$a]["id"]=$fila["id"];
	$recibos[$a]["idpagocuota"]=$fila["idpagocuota"];
	$recibos[$a]["fecha"]=$fila["fecha"];	
	/*$pagos[$a]["precio"]=$fila["precio"];	
	$pagos[$a]["idalumno"]=$fila["idalumno"];	
	$pagos[$a]["asignadofecha"]=$fila["asignadofecha"];				*/
	$a++;
}

mysql_free_result($resultado);
?>



<script language="JavaScript">
function pregunta(id){
    if (confirm('¿Estas seguro eliminar esta registro?')){
	   window.location = "?op=2&idf=1&e="+id
    }
	alert("sd");
}
</script>

<script language="JavaScript">
function filtro(n){
//alert("ksjdasd");
		a = document.getElementById("filtroo").value;
		//alert(a);
	   window.location = n+"&f=todos&m="+a;
	   
	   //alert("6464");
}
</script>


<script language="JavaScript">
function filtro1(n){
//alert("ksjdasd");
		a = document.getElementById("ano").value;

	   window.location = n+"&f=todos&y="+a;

}
</script>


<script language="JavaScript">
function filtro2(n){
//alert("ksjdasd");
		a = document.getElementById("ano").value;
		//alert("a"+a);
		//alert("n"+n);
	   window.location = n+"&f=todos&y="+a;
	   
	  //alert(n+"&f=todos&y="+a+"&");
}
</script>




<?php 
$tablename=$_GET['t'];
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE id='".$_GET['id']."'";
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
	$persona["id"]=$fila["id"];
	$persona["apellido"]=$fila["apellido"];	
	$persona["nombre"]=$fila["nombre"];		
	$persona["dni"]=$fila["dni"];
	$persona["idf"]=$fila["idf"];				
	$a++;
}

mysql_free_result($resultado);
?>

<style>
.mayuss{

text-transform:capitalize;}

</style>

<div class="contenido">

<div  style="width:730px; background-color:#E1E4EC; border-color:#000000; border:solid; padding-top:15px;padding-left:15px; padding-bottom:20px; margin-bottom:20px;">
Buscar por: 
<div><strong> <div class="mayuss" style="float:left;" ><?php echo $persona["nombre"]; ?>,</div> <div style="float:left;" class="mayuss">&nbsp;<?php echo " ".$persona["apellido"]; ?></div></strong>.&nbsp; DNI: <strong><?php echo str_replace(",",".",number_format($persona["dni"],0)); ?></strong>   IDFamilia: <strong> <?php echo $persona["idf"]; ?></strong> </div>


</div>


<p>
  <!--
<table width="750" border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td>
    	  -->
  <?php 

$filtro="WHERE idf=".$_GET['idf']." ";


$tablename="alumnos";
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
	$filter1[$a]["id"]=$fila["id"];
	$filter1[$a]["apellido"]=$fila["apellido"];	
	$filter1[$a]["nombre"]=$fila["nombre"];		
	$filter1[$a]["dni"]=$fila["dni"];
	$filter1[$a]["idf"]=$fila["idf"];	
	$filter1[$a]["cuota"]=$fila["cuota"];		
	$filter1[$a]["fecha_inscrip_inicio"]=$fila["fecha_inscrip_inicio"];	
	$filter1[$a]["fecha_inscrip_fin"]=$fila["fecha_inscrip_fin"];			
	$a++;
}

mysql_free_result($resultado);
//print_r($filter1);



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  
    <?php
	  function averff1($idalumno){	
/*
//echo $idalumno;
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/
global $host, $user,$password, $dbname,$link;


			   //TABLA prueba
$tablename="pagos";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE idalumno='".$idalumno."'";
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
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["fecha"]=$fila["fecha"];	
	$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

//print_r($pagos);
////////////////
			   $total = 0;
			   //aqui emepzaba el probelam.
			   if (isset($pagos)){
			   for ($i = 1; $i <= count($pagos); $i++) {
			   $total=$total+$pagos[$i]["precio"];
			   }
			   
			   }else{
			   $pagos=0;
			   }
			   return $total;
			   
			   
			   

}
?>




 <?php
	  function averffISA($idf,$mes){	
	  
	  
	  			   //if ($idcuota==0){
			   //$total=0;
			   //}else{
/*
//echo $idalumno;
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/
global $host, $user,$password, $dbname,$link;


			   //TABLA prueba
$tablename="pagos";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE idf='".$idf."' AND month(asignadofecha)='$mes' AND year(asignadofecha)='".$_GET['y']."' ";//AND year(fecha)='2013' AND month(fecha)='$mes'
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
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["fecha"]=$fila["fecha"];	
	$pagos[$a]["precio"]=$fila["precio"];
	$pagos[$a]["idcuota"]=$fila["idcuota"];	
	$pagos[$a]["asignadofecha"]="///";						
	$a++;
}

mysql_free_result($resultado);

//print_r($pagos);
////////////////
			   $total = 0;
			   //aqui emepzaba el probelam.

				   if (isset($pagos)){
				  for ($i = 1; $i <= count($pagos); $i++) {
				   $total=$total+$pagos[$i]["precio"];
				   }
				   
				   }else{
				   $pagos=0;
				   }
		
		
		//}
			   return $total;
			   
			   
			   

}
?>
  
  
  <!--
			  La Familia <span class="Estilo2">debe  $<?php //echo $deudaf; ?> pesos</span>.<br />
			
	</td>
  </tr>
</table>
  -->
</p>

<!--
</p>
<table width="750" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td class="tabla">Nombre</td>
    <td class="tabla">Pago</td>
    <td class="tabla">Cuota</td>
    <td class="tabla">Descuentos</td>
    <td class="tabla">Total</td>
  </tr>
  -->
  
  
  

  
  	  <?php 
	  
	  $cuot[3]=0;
	   $cuot[4]=0;
	   $cuot[5]=0;
	   
	   	  $cuot[6]=0;
	   $cuot[7]=0;
	   $cuot[8]=0;
	   
	   	  $cuot[9]=0;
	   $cuot[10]=0;
	   $cuot[11]=0;
	   
	   	  $cuot[12]=0;
	   $cuot[1]=0;
	   $cuot[2]=0;
	   
	  $totpagfam=0;
	  $totcuotafam=0;
	  $totdescufam=0;
	  $tottotfam=0;
	  
			  $deudaf=0;
	 $d=0;		  
			     for ($i = 1; $i <= count($filter1); $i++) {
				 //echo "hijo: ".$i."<br>";
				 
				 
				       if($d==1){
    //$class1='class="celda2"';
   $d=0;
   }else{
  // $class1='class="celda1"';
   $d=1;
   }
   
				 
				// echo '<tr><td '.$class1.'>';
			   
				//echo $filter1[$i]["nombre"]." ".$filter1[$i]["apellido"];
				
				//echo "&nbsp;</td>";
				 
				 
   //echo $i.$filter1[$i]["id"];
   
  
			  $m=date('m');
			  //echo $m."<br>";

			  
			  
			
			
						   //TABLA prueba
$tablename="descuentos";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE idalumno='".$filter1[$i]["id"]."'";
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
unset($descuento);
while ($fila = mysql_fetch_assoc($resultado)) {
	$descuento[$a]["id"]=$fila["id"];
	$descuento[$a]["fecha"]=$fila["fecha"];	
	$descuento[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);


  
			  
			  

			   //TABLA prueba
$tablename="cuotas";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE cuota='".$filter1[$i]["cuota"]."'  AND year(fecha)='".$_GET['y']."'";
$query="SELECT * FROM $tablename $filtro;";
//echo $query."dsad";






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
$cuota="";


while ($fila = mysql_fetch_assoc($resultado)) {
//echo $fila["fecha"]."%%".$filter1[$i]["fecha_inscrip_inicio"]."//";

$date0 = new DateTime("0000-00-00");
$date1 = new DateTime($fila["fecha"]);
$date2 = new DateTime($filter1[$i]["fecha_inscrip_inicio"]);
$date3 = new DateTime($filter1[$i]["fecha_inscrip_fin"]);
//echo $filter1[$i]["fecha_inscrip_fin"] ."<br>";

if($filter1[$i]["fecha_inscrip_fin"]=="0000-00-00"){
$comparar="no";
}else{

$comparar="si";}
//echo $comparar;
if($comparar=="si"){
//echo "echo;".$filter1[$i]["fecha_inscrip_fin"];
}else{

}
if($comparar=="si"){

if($date1<$date2  or $date1 >= $date3){}else{
	$cuota[$a]["id"]=$fila["id"];
	$cuota[$a]["fecha"]=$fila["fecha"];	
	$cuota[$a]["precio"]=$fila["precio"];				
	$a++;
	}
	
	

}else{
if($date1<=$date2 ){}else{

	$cuota[$a]["id"]=$fila["id"];
	$cuota[$a]["fecha"]=$fila["fecha"];	
	$cuota[$a]["precio"]=$fila["precio"];				
	$a++;
	}
}

}

//print_r($cuota);

//echo "<br>";

if ($cuota==""){
//echo "vacio";
$cantcoutas=0;
}else{
$cantcoutas=count($cuota);
}
//$cuota= count(null);
//echo $cuota."///".$cantcoutas;


mysql_free_result($resultado);
			  
		 
$miscuotas[1]=0;
$miscuotas[2]=0;	
$miscuotas[3]=0;	
$miscuotas[4]=0;	
$miscuotas[5]=0;	
$miscuotas[6]=0;	
$miscuotas[7]=0;	
$miscuotas[8]=0;	
$miscuotas[9]=0;	
$miscuotas[10]=0;	
$miscuotas[11]=0;	
$miscuotas[12]=0;			 


 
//SI HAY ERROR EN explorador  es porque no tiene cargado ninguna cuota a ese alumno icuota.
for ($y = 1; $y <= $cantcoutas; $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		for ($g = 1; $g <= 12; $g++) {
			if($fchacha[1]==$g AND $fchacha[0]==$_GET['y']){
				$miscuotas[$g]=$cuota[$y]['id'];
			}
		}
}

//print_r($miscuotas);

///////////////////////////////////////////////////////////////////////////

		 




for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==3){
			$cuot[3]=$cuot[3]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==4){
			$cuot[4]=$cuot[4]+$cuota[$y]['precio'];
		}
	}
}


for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==5){
			$cuot[5]=$cuot[5]+$cuota[$y]['precio'];
		}
	}
}


for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==6){
			$cuot[6]=$cuot[6]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==7){
			$cuot[7]=$cuot[7]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==8){
			$cuot[8]=$cuot[8]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==9){
			$cuot[9]=$cuot[9]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==10){
			$cuot[10]=$cuot[10]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==11){
			$cuot[11]=$cuot[11]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==12){
			$cuot[12]=$cuot[12]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==1){
			$cuot[1]=$cuot[1]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==2){
			$cuot[2]=$cuot[2]+$cuota[$y]['precio'];
		}
	}
}

		 
 
		  
			  
			  	$cuotat=0;
			   for ($y = 1; $y <= $cantcoutas; $y++) {
					$cuotat=$cuotat+$cuota[$y]["precio"];
			  }
			  
			$desct=0;
			if(isset($descuento)){
			   for ($y = 1; $y <= count($descuento); $y++) {
			   		$var=explode(" ",$descuento[$y]["fecha"]);
					$var=explode("-",$var[0]);
					if ($var[1]<=date('m') && $var[2]<=date('Y')){
					$desct=$desct+$descuento[$y]["precio"];
					}
			  }}
		//$cuotat=0;
			  
			  //$alumno[$i]["curso"];
			  
			  $t=$cuotat;
			  //echo $t;
			  
			  //echo "cuanto tengo asignado a ese idf?";
			  $tota=averff1($filter1[$i]["id"]);//$filter1[$i]["id"]
			  $pag[3]=averffISA($_GET['idf'],3);//$filter1[$i]["id"] //$miscuotas[3]
			  //echo $miscuotas[3]."***". $pag[3]."///";
			 $pag[4]=averffISA($_GET['idf'],4);
			  $pag[5]=averffISA($_GET['idf'],5);
			   $pag[6]=averffISA($_GET['idf'],6);
			    $pag[7]=averffISA($_GET['idf'],7);
				 $pag[8]=averffISA($_GET['idf'],8);
				  $pag[9]=averffISA($_GET['idf'],9);
				   $pag[10]=averffISA($_GET['idf'],10);
				    $pag[11]=averffISA($_GET['idf'],11);
					 $pag[12]=averffISA($_GET['idf'],12);
					  $pag[1]=averffISA($_GET['idf'],1);
					   $pag[2]=averffISA($_GET['idf'],2);
			 
			 
			 
			  //$pag[3]=500;
			  //echo "//".averff1(1)."//";
				$tot=$t-$tota-$desct;
				
				
				
				//
				$totpagfam=$totpagfam+$tota;
				$totcuotafam=$totcuotafam+$cuotat;
				$totdescufam=$totdescufam+$desct;
				$tottotfam=$tottotfam+$tot;
				
				//
				
				
				$pieces = str_split($tot);
				
				$mg=0;
				
				//echo "<td ".$class1." id='precio1'>$".number_format($tota, 2)."</td>";
				//echo "<td ".$class1." id='precio1'>$".number_format($cuotat, 2)."</td>";
				//echo "<td ".$class1." id='precio1'>$".number_format($desct, 2)."</td>";
				
				//echo "<br>";
				
				if( $pieces[0]=="-"){
				$hg=explode("-",$tot);
				 for ($k = 1; $k <= count($hg)-1; $k++) {
				 $mg=$mg+$hg[$k];
				 }
				

				
				//echo "<td ".$class1." id='precio1'><span class='Estilo4' ><strong>A favor $".number_format($mg,2)."</strong></span></td>";
				}else{ // 
				
				//echo "<td ".$class1." id='precio1'><span class='Estilo2' ><strong> Debe $".number_format($tot,2)."</strong></span></td>";
				$deudaf=$deudaf+$tot;
				}
				
				//echo "</tr>";
				
				 }
			  ?>
  
  
 
  
  <?php    
   if($d==1){
   //$class1='class="celda2"';
   $d=0;
   }else{
  // $class1='class="celda1"';
   $d=1;
   }
   
   ?>

  <!--
  <tr>
    <td <?php //echo $class1; ?>>	  La Familia </td>
    <td <?php// echo $class1; ?> id='precio1'>$<?php //echo number_format($totpagfam, 2); ?></td>
    <td <?php //echo $class1; ?> id='precio1'>$<?php // echo number_format($totcuotafam, 2); ?></td>
    <td <?php //echo $class1; ?> id='precio1'>$<?php //echo number_format($totdescufam, 2); ?></td>
    <td <?php //echo $class1; ?> id='precio1'><?php 
	
	$pieces = str_split($deudaf);
	if($deudaf==0){
	
		//echo "<span class='Estilo4'><strong>A favor $".str_replace("-","",number_format($tottotfam, 2))."</strong></span>";
	}else{
	
		//echo "<span class='Estilo2'><strong>Debe $".number_format($deudaf, 2)."</strong></span>";
	}
	
	//echo $deudaf; ?></td>
  </tr>
</table>
<p>
-->
<?php 

function getisa1(){
$var="";
foreach($_GET as $k => $v) {
    // Reject items not starting with prefix
	if($k=="p" or $k=="f" or $k=="m"){}else{
$var=$var.$k."=".$v."&";
}
}

echo $var;
}

?>



<?php 

$filtro="WHERE idf=".$_GET['idf']." ";


$tablename="alumnos";
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
	$filter[$a]["apellido"]=$fila["apellido"];	
	$filter[$a]["nombre"]=$fila["nombre"];		
	$filter[$a]["dni"]=$fila["dni"];
	$filter[$a]["idf"]=$fila["idf"];				
	$a++;
}

mysql_free_result($resultado);
//print_r($filter);
?>




<?php function relacionar($id,$t){
/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/
global $host, $user,$password, $dbname,$link;


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
	$filter[$a]["apellido"]=$fila["apellido"];	
	$filter[$a]["nombre"]=$fila["nombre"];		
	$filter[$a]["dni"]=$fila["dni"];
	$filter[$a]["idf"]=$fila["idf"];				
	$a++;
}

mysql_free_result($resultado);
//print_r($filter);

echo  $filter[1]["nombre"]." ".$filter[1]["apellido"];

 }?>



<?php //echo $filter[$_GET['f']]["id"];



function getisa2(){
$var="";
foreach($_GET as $k => $v) {
    // Reject items not starting with prefix
	if($k=="f" or $k=="y"){}else{
		$var=$var.$k."=".$v."&";
		}
}
echo $var;
}




















function mascara1($p,$cuot){
if($cuot==0){
$m="";
}else{

	if($p <=0){
	$m= "Pagado";
	$m="<div class='verde'>".$m."</div>";
	}else{
	$m= "$".number_format($p,2);
	$m="<div class='rojo'>".$m."</div>";
	}
}


return $m;
}

function mascara2($p,$cuot){
if($cuot==0){
$m="";
}else{

	if($p <=0){

if ($_GET['y']>=date("Y")){
$m="$".number_format($p,2);
	$m="<div >".$m."</div>";
}else{
	$m= "Pagado";
	$m="<div class='verde'>".$m."</div>";

}

	

	



	}else{
	$m= "$".number_format($p,2);
	$m="<div class='rojo'>".$m."</div>";
	}
}


return $m;
}
 ?>


<p>




<?php 

global $host, $user,$password, $dbname,$link;


			   //TABLA prueba
$tablename="pagos";
//$filtro=" ORDER BY id LIMIT 20,10";
$fechj=date("Y")-1;
$filtro="WHERE idf='".$_GET['idf']."' AND year(asignadofecha) BETWEEN '2012' AND '$fechj' ";//AND year(fecha)='2013' AND month(fecha)='$mes'
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
//$pagos=0;
$totprecio=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["fecha"]=$fila["fecha"];	
	$pagos[$a]["precio"]=$fila["precio"];
	$totprecio=$totprecio+$fila["precio"];
	$pagos[$a]["idcuota"]=$fila["idcuota"];	
	$pagos[$a]["asignadofecha"]="///";						
	$a++;
}

mysql_free_result($resultado);

//echo "TOTPRECIO:".$totprecio;
//print_r($pagos);










//print_r($filter1);
$totcuota=0;
	for ($i = 1; $i <= count($filter1); $i++) {		  

			   //TABLA prueba
$tablename="cuotas";
//$filtro=" ORDER BY id LIMIT 20,10";
$fechj=date("Y")-1;
$filtro="WHERE cuota='".$filter1[$i]["cuota"]."'  AND year(fecha) BETWEEN '2012' AND '$fechj' ";

//$filtro="WHERE idf='".$_GET['idf']."' AND year(asignadofecha) BETWEEN '2012' AND '$fechj' ";
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
//$pagos=0;
$cuota="";


while ($fila = mysql_fetch_assoc($resultado)) {

$date0 = new DateTime("0000-00-00");
$date1 = new DateTime($fila["fecha"]);
$date2 = new DateTime($filter1[$i]["fecha_inscrip_inicio"]);
$date3 = new DateTime($filter1[$i]["fecha_inscrip_fin"]);
//echo $filter1[$i]["fecha_inscrip_fin"] ."<br>";

if($filter1[$i]["fecha_inscrip_fin"]=="0000-00-00"){
$comparar="no";
}else{

$comparar="si";}
//echo $comparar;
if($comparar=="si"){
//echo "echo;".$filter1[$i]["fecha_inscrip_fin"];
}else{

}
if($comparar=="si"){

if($date1<$date2  or $date1 >= $date3){}else{
	$cuota[$a]["id"]=$fila["id"];
	$cuota[$a]["fecha"]=$fila["fecha"];	
	$cuota[$a]["precio"]=$fila["precio"];		
	$totcuota=$totcuota+$fila["precio"];			
	$a++;
	}
	
	

}else{
if($date1<=$date2 ){}else{

	$cuota[$a]["id"]=$fila["id"];
	$cuota[$a]["fecha"]=$fila["fecha"];	
	$cuota[$a]["precio"]=$fila["precio"];		
	$totcuota=$totcuota+$fila["precio"];		
	$a++;
	}
}


}

//print_r($cuota);

//echo "<br>";

if ($cuota==""){
//echo "vacio";
$cantcoutas=0;
}else{
$cantcoutas=count($cuota);
}
//$cuota= count(null);
//echo $cuota."///".$cantcoutas;


mysql_free_result($resultado);

}

//echo "//*".$totcuota;




$mitot=$totcuota-$totprecio;

//echo "//-".$mitot;



//print_r($cuota);

//echo "<br>";
/*
if ($cuota==""){
//echo "vacio";
$cantcoutas=0;
}else{
$cantcoutas=count($cuota);
}
//$cuota= count(null);
//echo $cuota."///".$cantcoutas;
*/

			  
?>

<table width="750" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><form id="form7" name="form7" method="post" action="">

  <div align="right">
  
    <label>
  <select id="ano" name="ano">
  <?php for ($i = 2012; $i <= date("Y")+5; $i++) { ?>
  	<option value="<?php echo $i; ?>" <?php if ($_GET['y'] == $i){echo "selected='selected'";} ?>><?php echo $i; ?></option>
  <?php } ?>
  </select>
  </label>
  <label>
  <input type="button" name="Submit5" value="Mostrar" onclick="filtro2('?<?php getisa2(); ?>')"/>
  </label>
  
  </div>
    </form></td>
  </tr>
</table>

<?php $jjtot=0;?>
<table width="750" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td class="tabla">Mes</td>
    <td class="tabla">Cuota</td>
    <td class="tabla">Matricula</td>
    <td class="tabla">Materiales</td>
    <td class="tabla">Ense&ntilde;anza</td>
	    <td class="tabla">Descuentos</td>
    <td class="tabla">Total</td>
    <td class="tabla">Pagos</td>
    <td class="tabla">Deuda</td>
  </tr>
  <tr>
    <td class="celda1">Enero</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
	  <td class="celda1" id='precio1'>&nbsp;</td>
      <td class="celda1" id='precio1'>&nbsp;</td>
      <td class="celda1" id='precio1'>&nbsp;</td>
      <td class="celda1" id='precio1'>&nbsp;</td>
  </tr>
  <tr>
    <td class="celda2">Febrero  </td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
	  <td class="celda2" id='precio1'>&nbsp;</td>
      <td class="celda2" id='precio1'>&nbsp;</td>
      <td class="celda2" id='precio1'>&nbsp;</td>
  </tr>
  <tr>
    <td class="celda1">Marzo</td>
    <td class="celda1" id='precio1'>$<?php echo number_format($cuot[3], 2); ?></td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
		  <td class="celda1" id='precio1'>&nbsp;</td>
          <td class="celda1" id='precio1'>$<?php 
		  
		
		   $tot1= $cuot[3];

		  
		   echo number_format($tot1,2); 
		   
		   
		 // $tot1= $cuot[3]; echo $tot1; ?>
	
	
	

	</td>

    <td class="celda1" id='precio1'>$<?php echo number_format($pag[3],2); ?></td>
    <td class="celda1" id='precio1'><?php 
	
	
//$totrestan="";
$j=0;

	if (intval(date('m')) >= 3){
$mue= mascara1($tot1-$pag[3],$cuot[3]);
$jjtot=$jjtot+$tot1-$pag[3];
}else{
$mue= "";
}
echo $mue;


if($mue>=0){
$totrestan[$j]['fecha']='03-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 

	
	?></td>
  </tr>
  <tr>
    <td class="celda2">Abril</td>
    <td class="celda2" id='precio1'>$<?php echo number_format($cuot[4],2); ?></td>
    <td class="celda2" id='precio1'></td>
    <td class="celda2" id='precio1'></td>
    <td class="celda2" id='precio1'></td>
		  <td class="celda2" id='precio1'>&nbsp;</td>
          <td class="celda2" id='precio1'>$<?php
		  
		   $tot1= $cuot[4];

		  
		   echo number_format($tot1,2); 
		  
		   //$tot1= $cuot[4]; echo $tot1; ?></td>
    <td class="celda2" id='precio1'>$<?php echo number_format($pag[4],2); ?></td>
    <td class="celda2" id='precio1'><?php
	
			
//$totrestan="";
$j=0;

	if (intval(date('m')) >= 4){
$mue= mascara1($tot1-$pag[4],$cuot[4]);
$jjtot=$jjtot+$tot1-$pag[4];
}else{
$mue= "";
}
echo $mue;


if($mue>=0){
$totrestan[$j]['fecha']='04-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 

	
	?></td>
  </tr>
  <tr>
    <td class="celda1">Mayo</td>
    <td class="celda1" id='precio1'>$<?php echo number_format($cuot[5],2); ?></td>
    <td class="celda1" id='precio1'></td>
    <td class="celda1" id='precio1'></td>
    <td class="celda1" id='precio1'></td>
		  <td class="celda1" id='precio1'>&nbsp;</td>
          <td class="celda1" id='precio1'>$<?php 
	
		   $tot1= $cuot[5];

		  
		   echo number_format($tot1,2); 
		  //$tot1= $cuot[5]; echo $tot1; ?></td>
    <td class="celda1" id='precio1'>$<?php echo number_format($pag[5],2); ?></td>
    <td class="celda1" id='precio1'><?php
	
			
//$totrestan="";
$j=0;

	if (intval(date('m')) >= 5){
$mue= mascara1($tot1-$pag[5],$cuot[5]);
$jjtot=$jjtot+$tot1-$pag[5];
}else{
$mue= "";
}
echo $mue;


if($mue>=0){
$totrestan[$j]['fecha']='05-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 

	
	?></td>
  </tr>
  <tr>
    <td class="celda2">Junio</td>
    <td class="celda2" id='precio1'>$<?php echo number_format($cuot[6],2); ?></td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
		  <td class="celda2" id='precio1'>&nbsp;</td>
          <td class="celda2" id='precio1'>$<?php 
		  
	
		   $tot1= $cuot[6];

		  
		   echo number_format($tot1,2); 
		  //$tot1= $cuot[6]; echo $tot1; ?></td>
    <td class="celda2" id='precio1'>$<?php echo number_format($pag[6],2); ?></td>
    <td class="celda2" id='precio1'><?php
	
	
	
//$totrestan="";
$j=0;

	if (intval(date('m')) >= 6){
$mue= mascara1($tot1-$pag[6],$cuot[6]);
$jjtot=$jjtot+$tot1-$pag[6];
}else{
$mue= "";
}
echo $mue;


if($mue>=0){
$totrestan[$j]['fecha']='06-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 

	
	?></td>
  </tr>
  <tr>
    <td class="celda1">Julio</td>
    <td class="celda1" id='precio1'>$<?php echo number_format($cuot[7],2); ?></td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
		  <td class="celda1" id='precio1'>&nbsp;</td>
          <td class="celda1" id='precio1'>$<?php
		  
	
		   $tot1= $cuot[7];
		   

		  
		   echo number_format($tot1,2); 
		   
		   //$tot1= $cuot[7]; echo $tot1; ?></td>
    <td class="celda1" id='precio1'>$<?php echo number_format($pag[7],2); ?></td>
    <td class="celda1" id='precio1'><?php 
	
	
//$totrestan="";
$j=0;

	if (intval(date('m')) >= 7){
$mue= mascara1($tot1-$pag[7],$cuot[7]);
$jjtot=$jjtot+$tot1-$pag[7];
}else{
$mue= "";
}
echo $mue;


if($mue>=0){
$totrestan[$j]['fecha']='07-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 

	
	?></td>
  </tr>
  <tr>
    <td class="celda2">Agosto</td>
    <td class="celda2" id='precio1'>$<?php echo number_format($cuot[8],2); ?></td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
		  <td class="celda2" id='precio1'>&nbsp;</td>
          <td class="celda2" id='precio1'>$<?php 
		  

		   $tot1= $cuot[8];

		  
		   echo number_format($tot1,2); 
		 // $tot1= $cuot[8]; echo $tot1; ?></td>
    <td class="celda2" id='precio1'>$<?php echo number_format($pag[8],2); ?></td>
    <td class="celda2" id='precio1'><?php
	
			
$j=0;

	if (intval(date('m')) >= 8){
$mue= mascara1($tot1-$pag[8],$cuot[8]);
$jjtot=$jjtot+$tot1-$pag[8];
}else{
$mue= "";
}
echo $mue;


if($mue>=0){
$totrestan[$j]['fecha']='08-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 

	
	?>
      </td>
  </tr>
  <tr>
    <td class="celda1">Septiembre</td>
    <td class="celda1" id='precio1'>$<?php echo number_format($cuot[9],2); ?></td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
		  <td class="celda1" id='precio1'>&nbsp;</td>
          <td class="celda1" id='precio1'>$<?php
		  
		  
		   //$tot1= $cuot[9]; echo $tot1; 
		   
		   

		   $tot1= $cuot[9];

		  
		   echo number_format($tot1,2); 
		   
		   ?></td>
    <td class="celda1" id='precio1'>$<?php echo number_format($pag[9],2); ?></td>
    <td class="celda1" id='precio1'><?php
	
	
		
$j=0;

	if (intval(date('m')) >= 9){
$mue= mascara1($tot1-$pag[9],$cuot[9]);
$jjtot=$jjtot+$tot1-$pag[9];
}else{
$mue= "";
}
echo $mue;


if($mue>=0){
$totrestan[$j]['fecha']='09-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 

	
	?></td>
  </tr>
  <tr>
    <td class="celda2">Octubre</td>
    <td class="celda2" id='precio1'>$<?php echo number_format($cuot[10],2); ?></td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
		  <td class="celda2" id='precio1'>&nbsp;</td>
          <td class="celda2" id='precio1'>$<?php
		  
	
		   $tot1= $cuot[10];

		  
		   echo number_format($tot1,2); 
		   
		   
		   
		   ?></td>
    <td class="celda2" id='precio1'>$<?php echo number_format($pag[10],2); ?></td>
    <td class="celda2" id='precio1'><?php 
	
	
//$totrestan="";
$j=0;

	if (intval(date('m')) >= 10){
$mue= mascara1($tot1-$pag[10],$cuot[10]);
$jjtot=$jjtot+$tot1-$pag[10];
}else{
$mue= "";
}
echo $mue;


if($mue>=0){
$totrestan[$j]['fecha']='10-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 

	
	?></td>
  </tr>
  <tr>
    <td class="celda1">Noviembre</td>
    <td class="celda1" id='precio1'>$<?php echo number_format($cuot[11],2); ?></td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
		  <td class="celda1" id='precio1'>&nbsp;</td>
          <td class="celda1" id='precio1'>$<?php
		  
		   
		  

		   $tot1= $cuot[11];

		   
		    echo number_format($tot1,2);
		    ?></td>
    <td class="celda1" id='precio1'>$<?php echo number_format($pag[11],2); ?></td>
    <td class="celda1" id='precio1'><?php 
	
	
$j=0;

	if (intval(date('m')) >= 11){
$mue= mascara1($tot1-$pag[11],$cuot[11]);
$jjtot=$jjtot+$tot1-$pag[11];
}else{
$mue= "";
}
echo $mue;


if($mue>=0){
$totrestan[$j]['fecha']='11-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 

	
	?></td>
  </tr>
  <tr>
    <td class="celda2">Diciembre</td>
    <td class="celda2" id='precio1'>$<?php echo number_format($cuot[12],2); ?></td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
		  <td class="celda2" id='precio1'>&nbsp;</td>
          <td class="celda2" id='precio1'>$<?php
		  
		  		  
		   //if (date('m') >= 12){
		   $tot1= $cuot[12];
		   
		   //}else{
		   //$tot1= 0;
		   //}
		   
		    echo number_format($tot1,2);
		  
		  ?></td>
    <td class="celda2" id='precio1'>$<?php echo number_format($pag[12],2); ?></td>
    <td class="celda2" id='precio1'><?php
	
	

	
	 //echo $pag[12]; ?><?php
//$totrestan="";
$j=0;
	if (intval(date('m')) >= 12){
$mue= mascara1($tot1-$pag[12],$cuot[12]);
$jjtot=$jjtot+$tot1-$pag[12];
}else{
$mue= "";
}
echo $mue;



//echo intval(date('m'));

if($mue>=0){
$totrestan[$j]['fecha']='12-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 

	
	?></td>
  </tr>
  <tr>
    <td class="celda1">TOTAL</td>
    <td class="celda1">&nbsp;</td>
    <td class="celda1">&nbsp;</td>
    <td class="celda1">&nbsp;</td>
    <td class="celda1">&nbsp;</td>
		  <td class="celda1" id='precio1'>&nbsp;</td>
          <td class="celda1">&nbsp;</td>
    <td class="celda1">&nbsp;</td>
    <td class="celda1" id='precio1'>
	
	
	<?php 
	/*
	$jjtot=0;
	echo $totrestan[3]['precio'];
	 for ($i = 0; $i <= count($totrestan)-1; $i++) {
	 
	$jjtot=$jjtot+$totrestan[$i]['precio'];
	}	*/
	echo mascara2($jjtot,1);

	?>
	</td>
  </tr>
  
  
  
  
  
  <?php if ($mitot>0){ ?>
  
  
    <tr>
    <td class="celda2">deuda años anteriores</td>
    <td class="celda2">&nbsp;</td>
    <td class="celda2">&nbsp;</td>
    <td class="celda2">&nbsp;</td>
    <td class="celda2">&nbsp;</td>
		  <td class="celda2" id='precio1'>&nbsp;</td>
          <td class="celda2">&nbsp;</td>
    <td class="celda2">&nbsp;</td>
    <td class="celda2" id='precio1'>
	
	
	<?php 
	/*
	$jjtot=0;
	echo $totrestan[3]['precio'];
	 for ($i = 0; $i <= count($totrestan)-1; $i++) {
	 
	$jjtot=$jjtot+$totrestan[$i]['precio'];
	}	*/
	echo mascara2($mitot,1);

	?>
	</td>
  </tr>
  
  <?php 	if($_GET['y']<date('Y')){
	//$pistol=$jjtot;
	}else{?>
  
      <tr>
    <td class="celda1">TOTAL general</td>
    <td class="celda1">&nbsp;</td>
    <td class="celda1">&nbsp;</td>
    <td class="celda1">&nbsp;</td>
    <td class="celda1">&nbsp;</td>
		  <td class="celda1" id='precio1'>&nbsp;</td>
          <td class="celda1">&nbsp;</td>
    <td class="celda1">&nbsp;</td>
    <td class="celda1" id='precio1'>
	
	
	<?php 
	/*
	$jjtot=0;
	echo $totrestan[3]['precio'];
	 for ($i = 0; $i <= count($totrestan)-1; $i++) {
	 
	$jjtot=$jjtot+$totrestan[$i]['precio'];
	}	*/

	$pistol=$mitot+$jjtot;

	
	
	echo mascara2($pistol,1);

	?>
	</td>
  </tr>
  
  <?php } ?>
  
  <?php } ?>
  
  
  
</table>



<?php 

if ($mitot>0){
//echo "<div class='rojo'>*Tiene una deuda de años anteriores de $".$mitot." pesos.</div>";
}


?>




<p>

<?php
	  function averffDEUDA($idf){	
	  
	  
	  			   //if ($idcuota==0){
			   //$total=0;
			   //}else{
/*
//echo $idalumno;
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/
global $host, $user,$password, $dbname,$link;


			   //TABLA prueba
$tablename="pagos";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE idf='".$idf."' AND year(asignadofecha)='".$_GET['y']."' ";//AND year(fecha)='2013' AND month(fecha)='$mes'
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
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["fecha"]=$fila["fecha"];	
	$pagos[$a]["precio"]=$fila["precio"];
	$pagos[$a]["idcuota"]=$fila["idcuota"];	
	$pagos[$a]["asignadofecha"]="///";						
	$a++;
}

mysql_free_result($resultado);

//print_r($pagos);
////////////////
			   $total = 0;
			   //aqui emepzaba el probelam.

				   if (isset($pagos)){
				  for ($i = 1; $i <= count($pagos); $i++) {
				   $total=$total+$pagos[$i]["precio"];
				   }
				   
				   }else{
				   $pagos=0;
				   }
		
		
		//}
			   return $total;
			   
			   
			   

}
?>



<?php 
function damemes($h){

$array = array(
    "01" => "Enero",
    "02" => "Febrero",
	"03" => "Marzo",
	"04" => "Abril",
	"05" => "Mayo",
	"06" => "Junio",
	"07" => "Julio",
	"08" => "Agosto",
	"09" => "Septiembre",
	"10" => "Octubre",
	"11" => "Noviembre",
	"12" => "Diciembre",
);

return $array[$h];
}





function relacionar33($id){



/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/
global $host, $user,$password, $dbname,$link;
$miid=explode(";",$id);

$tot=0;


echo '<table width="100%" border="1" cellspacing="0" cellpadding="0" >
  <tr>
    <td class="tabla">ID</td>
    <td class="tabla">Pago cuota</td>
    <td class="tabla">Precio</td>
  </tr>';
  
  $d=0;

for ($i = 0; $i <= count($miid)-1; $i++) {


      if($d==1){
    $class1='class="celda2"';
   $d=0;
   }else{
   $class1='class="celda1"';
   $d=1;
   }
   

$filtro="WHERE id=".$miid[$i]." ";


$tablename="pagos";
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
	$filter[$a]["asignadofecha"]=$fila["asignadofecha"];	
	$filter[$a]["precio"]=$fila["precio"];					
	$a++;
}

mysql_free_result($resultado);
//print_r($filter);
$tot=$tot+$filter[1]["precio"];
//echo  "(id:".$miid[$i].") ".$filter[1]["asignadofecha"]." - $".$filter[1]["precio"]."<br>";

$mesfech=explode("-",$filter[1]["asignadofecha"]);
$mesfech=damemes($mesfech[1])." ".$mesfech[0] ;





echo '  <tr>
    <td  '.$class1.'>'.$miid[$i].'</td>
    <td  '.$class1.'>'.$mesfech.'</td>
    <td  '.$class1.'><div align="right">$'.number_format($filter[1]["precio"],2).'</div></td>
  </tr>';

}


      if($d==1){
    $class1='class="celda2"';
   $d=0;
   }else{
   $class1='class="celda1"';
   $d=1;
   }

echo '<tr><td '.$class1.'></td><td '.$class1.'><div align="right">TOTAL</div></td><td '.$class1.'><div align="right">$'.number_format($tot,2).'</div></td></tr>';
echo '</table>';
//echo "total: ".$tot;
 }?>



<table width="750" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div align="right">
	<form name="tuformulario1" >
      <select id="filtroo" name="filtroo">
        <option value="1" <?php if($_GET['m']=="1"){echo 'selected="selected"';}  ?>>Recibos</option>
        <option value="2"  <?php if($_GET['m']=="2"){echo 'selected="selected"';}  ?>>Descuentos</option>
        <option value="3" <?php if($_GET['m']=="3"){echo 'selected="selected"';}  ?>>Matricula</option>
        <option value="4" <?php if($_GET['m']=="4"){echo 'selected="selected"';}  ?>>Materiales</option>
        <option value="5">Ense&ntilde;anza</option>
            </select>
			
			
			
			
			<!--
      <select name="filtroo" id="filtroo" class="mayuss">
  <?php
  
   //if (isset($_GET['f'])){
   
  //if($_GET['f']=='todos'){}else{
  
  
  /*
  for ($i = 1; $i <= count($filter); $i++) {
	  if($filter[$i]["id"]==$_GET['f']){
	  $timb=$i;
	  }
  
  
  }
  */
  ?>
  <option class="mayuss" value="<?php //echo $filter[$timb]["id"]; ?>  "><?php //echo $filter[$timb]["nombre"].", ".$filter[$timb]["apellido"];  ?></option>
  
   <?php
  //} }?>
   
	<?php 
	
	
	
	//for ($i = 1; $i <= count($filter); $i++) {


	//if($filter[$i]["id"]==$_GET['f']){}else{
	?>
    <option class="mayuss" value="<?php //echo $filter[$i]["id"]; ?>"><?php //echo $filter[$i]["nombre"].", ".$filter[$i]["apellido"];  ?></option>
	<?php //}}?>
	 <option value="todos" <?php //if($_GET['f']=='todos'){echo 'selected="selected"';} ?>>Todos</option>
  </select>
  
  
  -->
  
  
  
  
  
  
  
  
  
  
  
  <input name="sdfsdf" type="button" value="Mostrar" onclick="filtro('?<?php getisa1(); ?>')" />
 
    </form>
	
	</div>
	<?php 
	
	//echo count($filter);
	//print_r($filter);?>
	
	</td>
  </tr>
</table>



<?php //print_r($pagos);

$vacio=false;

if (isset($_GET['m']) and $_GET['m']=="1"){//echo "recibos";
 ?>

<table width="750" border="1" cellspacing="0" cellpadding="0" >
  <tr>
    <td class="tabla"><strong>ID</strong></td>
    <td class="tabla"><strong>Fecha</strong></td>
	<td class="tabla"><strong>Pago cuota</strong></td>
    <td class="tabla"><strong>Acci&oacute;n</strong></td>
  </tr>
  <?php
  
 
  if (!isset($recibos)){$vacio=true;}else{
  
//print_r($recibos);
  
  
  $d=0;
   for ($i = 1; $i <= count($recibos); $i++) {
   
      if($d==1){
    $class1='class="celda2"';
   $d=0;
   }else{
   $class1='class="celda1"';
   $d=1;
   }
   
   ?>
<tr>
    <td <?php echo $class1;?>><?php echo $recibos[$i]["id"]; ?></td>
    <td <?php echo $class1;?> ><?php 
	 
	 $date = new DateTime($recibos[$i]["fecha"]);
	 echo $date->format('d-m-Y H:i:s');
	 //echo $recibos[$i]["fecha"];
	 
	 
	 
	 
	  ?></td>
	 <td <?php echo $class1;?>><div style="padding-right:4px;"><?php relacionar33($recibos[$i]["idpagocuota"]); ?></div></td>
     <td <?php echo $class1;?>>
	 
	 <div align="center">
	 <form name="tuformulario">
	
	
	
        <input name="elim_id" type="hidden" id="elim_id" value="<?php echo $recibos[$i]["id"];?>" />
		<!--
<a href="javascript:window.location='?op=14&t=<?php //echo $_GET['t']; ?>&n=2&idf=<?php //echo $_GET['idf']; ?>&id=<?php //echo $_GET['id']; ?>&m=<?php //echo $pagos[$i]["id"];?>&f=<?php //echo $_GET['f']; ?>'">Editar</a>-->	<!-- <input name="editar" value="Editar" type="button" class="editar" onclick="javascript:window.location='?op=14&t=<?php //echo $_GET['t']; ?>&n=2&idf=<?php //echo $_GET['idf']; ?>&id=<?php //echo $_GET['id']; ?>&m=<?php //echo $pagos[$i]["id"];?>&f=<?php //echo $_GET['f']; ?>'"/> -->
		<label> <input name="eliminar" class="eliminar" type="button"   value="Eliminar" onclick="javascript:pregunta22(<?php echo $recibos[$i]["id"];?>)" /><!-- <a  href="javascript:pregunta22(<?php //echo $pagos[$i]["id"];?>)">Eliminar</a>--></label>
    </form>
	</div>
	</td>
  </tr>
  <?php }}?>
</table>




  <?php if($vacio==true){echo "<div class='sinresultados'>No se encontraron resultados.</div>";} ?>
<p>
<script language="JavaScript">
function pregunta22(id){
//alert("sad");
    if (confirm('¿Estas seguro eliminar esta registro?')){
	   window.location = "?op=14&idf=<?php echo $_GET['idf']; ?>&id=<?php echo $_GET['id']; ?>&t=<?php echo $_GET['t']; ?>&f=<?php echo $_GET['f']; ?>&n=3&e="+id+"&m=<?php echo $_GET['m']; ?>&y=<?php echo $_GET['y']; ?>"
    }
}
</script>



<?php function paginacion($t){?>


<?php 


/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;


 //TABLA prueba
$tablename=$t;
//$filtro=" ORDER BY id ";


if (isset($_GET['f'])){
	if ($_GET['f']=="todos"){
	$filtro1="";
	}else{
	$filtro1=" and idalumno='".$_GET['f']."'";
	}
}else{
$filtro1="";
}

$filtro="WHERE idf='".$_GET['idf']."' $filtro1 ORDER BY id DESC";
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

$sql       = 'SELECT foo FROM bar WHERE id = 42';
$resultado = mysql_query($query, $enlace);

if (!$resultado) {
    echo "Error de BD, no se pudo consultar la base de datos\n";
    echo "Error MySQL: " . mysql_error();
    exit;
}
$a=1;
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$recibos[$a]["id"]=$fila["id"];
	//$recibos[$a]["fecha"]=$fila["fecha"];	
	//$recibos[$a]["precio"]=$fila["precio"];	
	//$recibos[$a]["idalumno"]=$fila["idalumno"];				
	$a++;
}

mysql_free_result($resultado);

?>



<?php 

if(isset($recibos)){
 $reg=count($recibos);
 }else{
  $reg=0;
 }
//echo $reg."//";
$numpag=0;
for ($i = 1; $i <= $reg; $i++) {
$i=$i+10;
$numpag=$numpag+1;
}
//echo $numpag;





if (isset($_GET['p'])){
$p=$_GET['p'];
}else{
$p=1;
}




function getisa(){
$var="";
foreach($_GET as $k => $v) {
    // Reject items not starting with prefix
	if($k=="p"){}else{
$var=$var.$k."=".$v."&";
}
}

echo $var;
}








/////////////////////////limita la paginacion a 10 resistros.
//echo $numpag;
//echo $p;

//if($p==13){echo "si";}


$inipaginacion=1;
$finpaginacion=$numpag;

if($p==1){
$inipaginacion=1;
$finpaginacion=$numpag;
}else{

	if($p>=$numpag-5){
	$inipaginacion=1;
	$finpaginacion=$numpag;
	//echo "saaaaaaaaa";
	}else{
	
	
	
		if(5<=$p){
		$inipaginacion=$p-5;
		$finpaginacion=$numpag;
		//echo "seeee";
		}
		
		
			if($p<=5){
		$inipaginacion=1;
		$finpaginacion=$numpag;
		//echo "suuuuuuuuuu";
		}
		
		
	}
}

//echo $inipaginacion.$finpaginacion;

 ?>
 
 <div align="center" style="width:750px;">
 
 	 <?php if ($p==1){}else{  ?>
	<a href="?<?php getisa();?>p=<?php echo $p-1; ?>">&lt; anterior</a>
	
	<?php 
	}
 

	
	$posicion=intval($p);
	$cantidadres=intval($numpag);
	//$cantidadres=8;
	
$inicio=1;
$fin=$cantidadres;

	for ($i = $inicio; $i <= $fin; $i++) {
	
		if($posicion>$cantidadres-5){
			$iniciom=$cantidadres-10;
			$inicion=$cantidadres;
		}else{
			$iniciom=$posicion-5;
			$inicion=$posicion+5;
		}
		
		if($posicion<=5){
			if($cantidadres<=10){
				$inicion=$cantidadres;
			}else{
				$inicion=10;
			}
				//echo "es";
		}
		
		if($i>=$iniciom AND $i<=$inicion){
	
	
			
			if($i<1 || $i>$cantidadres){
			}else{
				//echo $i." --";
				
				
		if($numpag==1){}else{	
			if ($p==$i){?>
	
	 <strong><?php echo $i; ?></strong>
	<?php }else{ ?>
	
	 <a href="?<?php getisa();?>p=<?php echo $i; ?>"><?php echo $i; ?></a>
	 
	 

	 
	 

	
	 <?php }
	 }
	 
	 
	 
	 
	 
	 
				
			}
			
			
			
			
		}	
	
	}
	
	
 if ($p==$numpag){}else{  ?>
	 <a href="?<?php getisa();?>p=<?php echo $p+1; ?>">siguiente &gt;</a>
	 <?php }
	 

?>

</div>

<!--
 
<table width="750" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div align="center">
	
	 <?php //if ($p==1){}else{  ?>
	<a href="?<?php //getisa();?>p=<?php //echo $p-1; ?>">&lt; anterior</a>
	
	<?php 
	//}
	
	
	//if($numpag==1){}else{
	
	 
	//for ($i = $inipaginacion; $i <= $finpaginacion; $i++) {
	
	
	
	
	?>
		
	<?php //if ($p==$i){?>
	
	 <strong><?php //echo $i; ?></strong>
	<?php //}else{ ?>
	
	 <a href="?<?php //getisa();?>p=<?php //echo $i; ?>"><?php //echo $i; ?></a>
	 
	 

	 
	 
	<?php //} ?>
	
	 <?php //}?>
	 
	<?php //if ($p==$numpag){}else{  ?>
	 <a href="?<?php //getisa();?>p=<?php //echo $p+1; ?>">siguiente &gt;</a>
	 <?php //}}?>
	 
	 </div></td>
  </tr>
</table>

-->
<?php 

/*
echo $numpag;
echo $p;

if($p==13){echo "si";}
if($p==1){
$inipaginacion=1;
$finpaginacion=$p+9;
}else{

	if($p>=$numpag-4){
	$inipaginacion=$p-4;
	$finpaginacion=$numpag;
	echo "saaaaaaaaa";
	}else{
	
	
	
		if(5<=$p){
		$inipaginacion=$p-4;
		$finpaginacion=$p+4;
		echo "seeee";
		}
		
		
		
	}
}

*/

 ?>


<?php //print_r($_GET);?>

<?php  } ?>

<?php 
if(isset($recibos)){
$reg=count($recibos);
}else{
$reg=0;
}


if($reg==0){}else{
paginacion("recibos");
}
?>


<?php } 

if (isset($_GET['m']) and $_GET['m']=="2"){echo "cuotas";
 ?>

<table width="750" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td class="tabla"><strong>IDsa</strong></td>
    <td class="tabla"><strong>mes cuota</strong></td>
    <td class="tabla"><strong>Precio</strong></td>
	<td class="tabla"><strong>fecha</strong></td>
    <td class="tabla"><strong>Acci&oacute;n</strong></td>
  </tr>
  <?php
  
  if (!isset($pagos)){$vacio=true;}else{
  
  $d=0;
   for ($i = 1; $i <= count($pagos); $i++) {
   
      if($d==1){
    $class1='class="celda2"';
   $d=0;
   }else{
   $class1='class="celda1"';
   $d=1;
   }
   
   ?>
<tr>
    <td <?php echo $class1;?>><?php echo $pagos[$i]["id"]; ?></td>
    <td <?php echo $class1;?>><?php echo $pagos[$i]["asignadofecha"]; ?></td>
    <td <?php echo $class1;?> id='precio1'>$<?php echo number_format($pagos[$i]["precio"],2); ?></td>
	 <td <?php echo $class1;?>><?php echo $pagos[$i]["fecha"]; ?></td>
     <td <?php echo $class1;?>>
	 
	 <div align="center">
	 <form name="tuformulario">
	
	
	
	
	
        <input name="elim_id" type="hidden" id="elim_id" value="<?php echo $pagos[$i]["id"];?>" />
<a href="javascript:window.location='?op=14&t=<?php echo $_GET['t']; ?>&n=2&idf=<?php echo $_GET['idf']; ?>&id=<?php echo $_GET['id']; ?>&m=<?php echo $pagos[$i]["id"];?>&f=<?php echo $_GET['f']; ?>'">	<input name="editar" type="button" class="editar"/>Editar</a>
		<label><a  href="javascript:pregunta22(<?php echo $pagos[$i]["id"];?>)"> <input name="eliminar" class="eliminar" type="button"  />Eliminar</a></label>
		
		<input name="eliminar" class="eliminar" type="button"   value="Eliminar" onclick="javascript:pregunta22(<?php echo $pagos[$i]["id"];?>)" />
		
		
		 <input name="editar" value="Editar" type="button" class="editar" onclick="javascript:window.location='?op=14&t=<?php echo $_GET['t']; ?>&n=2&idf=<?php echo $_GET['idf']; ?>&id=<?php echo $_GET['id']; ?>&m=<?php echo $pagos[$i]["id"];?>&f=<?php echo $_GET['f']; ?>'"/>
		
		
    </form>
	</div>
	</td>
  </tr>
  <?php }}?>
</table>




  <?php if($vacio==true){echo "<div class='sinresultados'>No se encontraron resultados.</div>";} ?>
<p>
<script language="JavaScript">
function pregunta22(id){
//alert("sad");
    if (confirm('¿Estas seguro eliminar esta registro?')){
	   window.location = "?op=14&idf=<?php echo $_GET['idf']; ?>&id=<?php echo $_GET['id']; ?>&t=<?php echo $_GET['t']; ?>&f=<?php echo $_GET['f']; ?>&n=3&e="+id
    }
}
</script>



<?php function paginacion($t){?>


<?php 


/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;


 //TABLA prueba
$tablename=$t;
//$filtro=" ORDER BY id ";


if (isset($_GET['f'])){
	if ($_GET['f']=="todos"){
	$filtro1="";
	}else{
	$filtro1=" and idalumno='".$_GET['f']."'";
	}
}else{
$filtro1="";
}

$filtro="WHERE idf='".$_GET['idf']."' $filtro1 ORDER BY id DESC";
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

$sql       = 'SELECT foo FROM bar WHERE id = 42';
$resultado = mysql_query($query, $enlace);

if (!$resultado) {
    echo "Error de BD, no se pudo consultar la base de datos\n";
    echo "Error MySQL: " . mysql_error();
    exit;
}
$a=1;
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["fecha"]=$fila["fecha"];	
	$pagos[$a]["precio"]=$fila["precio"];	
	$pagos[$a]["idalumno"]=$fila["idalumno"];				
	$a++;
}

mysql_free_result($resultado);

?>



<?php 

if(isset($pagos)){
 $reg=count($pagos);
 }else{
  $reg=0;
 }
//echo $reg."//";
$numpag=0;
for ($i = 1; $i <= $reg; $i++) {
$i=$i+10;
$numpag=$numpag+1;
}
//echo $numpag;





if (isset($_GET['p'])){
$p=$_GET['p'];
}else{
$p=1;
}




function getisa(){
$var="";
foreach($_GET as $k => $v) {
    // Reject items not starting with prefix
	if($k=="p"){}else{
$var=$var.$k."=".$v."&";
}
}

echo $var;
}








/////////////////////////limita la paginacion a 10 resistros.
//echo $numpag;
//echo $p;

//if($p==13){echo "si";}


$inipaginacion=1;
$finpaginacion=$numpag;

if($p==1){
$inipaginacion=1;
$finpaginacion=$numpag;
}else{

	if($p>=$numpag-5){
	$inipaginacion=1;
	$finpaginacion=$numpag;
	//echo "saaaaaaaaa";
	}else{
	
	
	
		if(5<=$p){
		$inipaginacion=$p-5;
		$finpaginacion=$numpag;
		//echo "seeee";
		}
		
		
			if($p<=5){
		$inipaginacion=1;
		$finpaginacion=$numpag;
		//echo "suuuuuuuuuu";
		}
		
		
	}
}

//echo $inipaginacion.$finpaginacion;

 ?>
 
 <div align="center" style="width:750px;">
 
 	 <?php if ($p==1){}else{  ?>
	<a href="?<?php getisa();?>p=<?php echo $p-1; ?>">&lt; anterior</a>
	
	<?php 
	}
 

	
	$posicion=intval($p);
	$cantidadres=intval($numpag);
	//$cantidadres=8;
	
$inicio=1;
$fin=$cantidadres;

	for ($i = $inicio; $i <= $fin; $i++) {
	
		if($posicion>$cantidadres-5){
			$iniciom=$cantidadres-10;
			$inicion=$cantidadres;
		}else{
			$iniciom=$posicion-5;
			$inicion=$posicion+5;
		}
		
		if($posicion<=5){
			if($cantidadres<=10){
				$inicion=$cantidadres;
			}else{
				$inicion=10;
			}
				//echo "es";
		}
		
		if($i>=$iniciom AND $i<=$inicion){
	
	
			
			if($i<1 || $i>$cantidadres){
			}else{
				//echo $i." --";
				
				
		if($numpag==1){}else{	
			if ($p==$i){?>
	
	 <strong><?php echo $i; ?></strong>
	<?php }else{ ?>
	
	 <a href="?<?php getisa();?>p=<?php echo $i; ?>"><?php echo $i; ?></a>
	 
	 

	 
	 

	
	 <?php }
	 }
	 
	 
	 
	 
	 
	 
				
			}
			
			
			
			
		}	
	
	}
	
	
 if ($p==$numpag){}else{  ?>
	 <a href="?<?php getisa();?>p=<?php echo $p+1; ?>">siguiente &gt;</a>
	 <?php }
	 

?>

</div>

<!--
 
<table width="750" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div align="center">
	
	 <?php //if ($p==1){}else{  ?>
	<a href="?<?php //getisa();?>p=<?php //echo $p-1; ?>">&lt; anterior</a>
	
	<?php 
	//}
	
	
	//if($numpag==1){}else{
	
	 
	//for ($i = $inipaginacion; $i <= $finpaginacion; $i++) {
	
	
	
	
	?>
		
	<?php //if ($p==$i){?>
	
	 <strong><?php //echo $i; ?></strong>
	<?php //}else{ ?>
	
	 <a href="?<?php //getisa();?>p=<?php //echo $i; ?>"><?php //echo $i; ?></a>
	 
	 

	 
	 
	<?php //} ?>
	
	 <?php //}?>
	 
	<?php //if ($p==$numpag){}else{  ?>
	 <a href="?<?php //getisa();?>p=<?php //echo $p+1; ?>">siguiente &gt;</a>
	 <?php //}}?>
	 
	 </div></td>
  </tr>
</table>

-->
<?php 

/*
echo $numpag;
echo $p;

if($p==13){echo "si";}
if($p==1){
$inipaginacion=1;
$finpaginacion=$p+9;
}else{

	if($p>=$numpag-4){
	$inipaginacion=$p-4;
	$finpaginacion=$numpag;
	echo "saaaaaaaaa";
	}else{
	
	
	
		if(5<=$p){
		$inipaginacion=$p-4;
		$finpaginacion=$p+4;
		echo "seeee";
		}
		
		
		
	}
}

*/

 ?>


<?php //print_r($_GET);?>

<?php  } ?>

<?php 
if(isset($pagos)){
$reg=count($pagos);
}else{
$reg=0;
}


if($reg==0){}else{
paginacion("pagos");
}
?>


<?php } ?>

</div>





  <?php 
} 
?>
  
  
  
  
  
  
<?php 















function submenucate(){ ?>
  

  
  <div class="submenu">

<a href="?op=11&t=cuotas_categoria&n=0"><img src="b_browse.png" />Listar Categorias</a>&nbsp;|&nbsp;
<a href="?op=11&t=cuotas_categoria&n=1"><img src="b_add.png" />Agregar Categoria</a>


</div>

  
    <?php 
  }









function opcategoria(){




?>


		
		
		
		
	
		<?php if ($_GET['n']==0){ ?>

 <?php 

/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;




//LIMIT
if (isset($_GET['p'])){
$p=$_GET['p'];
}else{
$p=1;
}

if($p==0){$limit=0;}else{$limit=$p-1;}
//LIMIT

 //TABLA prueba
//$tablename="pagos";
if (isset($_GET['f'])){
	if ($_GET['f']=="todos"){
	$filtro1="";
	}else{
	$filtro1=" WHERE cuota='".$_GET['f']."'";
	}
}else{
$filtro1="";
}

$filtro="ORDER BY id DESC LIMIT ".$limit."0,10";


 //TABLA prueba
$tablename=$_GET['t'];
//$filtro=" ORDER BY id LIMIT 20,10";
//$filtro=" ORDER BY id DESC";
$query="SELECT * FROM $tablename $filtro;";

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
	$busqueda[$a]["nombre"]=$fila["nombre"];
	//$pagos[$a]["fecha"]=$fila["fecha"];	
	//$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

////////////////

//print_r($busqueda);
?>


 <div class="contenido">
<?php if(!isset($busqueda)){echo "No se encontraron resultados.";}else{ ?>
<table width="750" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td class="tabla"><strong>id</strong></td>
    <td class="tabla"><strong>Nombre</strong></td>
    <td class="tabla">Acción</td>
  </tr>
  <?php

  $d=0;
   for ($i = 1; $i <= count($busqueda); $i++) {
   
            if($d==1){
    $class1='class="celda2"';
   $d=0;
   }else{
   $class1='class="celda1"';
   $d=1;
   }
   
   ?>
<tr>
    <td <?php echo $class1; ?>><?php echo $busqueda[$i]["id"]; ?></td>
    <td <?php echo $class1; ?>><?php echo $busqueda[$i]["nombre"]; ?></td>
     <td <?php echo $class1; ?> align="center"><form name="tuformulario">
	 <?php //if ($_GET['op']=="5"){ ?>

		<input name="editar" type="button" value="Editar"  class="editar" onclick="window.location='?op=11&t=cuotas_categoria&n=2&id=<?php echo $busqueda[$i]["id"];?>' " />
		<input name="eliminar" type="button" value="Eliminar"  class="eliminar" onclick="pregunta(<?php echo $busqueda[$i]["id"];?>)"/>
        <input name="elim_id" type="hidden" id="elim_id" value="<?php echo $busqueda[$i]["id"];?>" />
		
		<?php //} ?>
		<?php if ($_GET['op']=="0"){ ?>
        <a href="?op=2&idf=<?php echo $busqueda[$i]["idf"];?>&id=<?php echo $busqueda[$i]["id"];?>&t=<?php echo $_POST['tabla'];?>">PAGOS</a><?php } ?>
		<?php if ($_GET['op']=="5"){ ?>
		<a href="?op=5&idf=<?php echo $busqueda[$i]["idf"];?>&id=<?php echo $busqueda[$i]["id"];?>&t=<?php echo $_POST['tabla'];?>">Familia</a><?php } ?>
     </form></td>
  </tr>
  <?php }?>
</table>
<?php }?>









<?php function paginacion($t){?>


<?php 


/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;


 //TABLA prueba
$tablename=$t;
//$filtro=" ORDER BY id ";


if (isset($_GET['f'])){
	if ($_GET['f']=="todos"){
	$filtro1="";
	}else{
	$filtro1=" WHERE cuota='".$_GET['f']."'";
	}
}else{
$filtro1="";
}

$filtro=" ORDER BY id DESC";
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

$sql       = 'SELECT foo FROM bar WHERE id = 42';
$resultado = mysql_query($query, $enlace);

if (!$resultado) {
    echo "Error de BD, no se pudo consultar la base de datos\n";
    echo "Error MySQL: " . mysql_error();
    exit;
}
$a=1;
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["nombre"]=$fila["nombre"];		
	$a++;
}

mysql_free_result($resultado);

?>



<?php 

 $reg=count($pagos);
//echo $reg."//";
$numpag=0;
for ($i = 1; $i <= $reg; $i++) {
$i=$i+10;
$numpag=$numpag+1;
}
//echo $numpag;





if (isset($_GET['p'])){
$p=$_GET['p'];
}else{
$p=1;
}




function getisa(){
$var="";
foreach($_GET as $k => $v) {
    // Reject items not starting with prefix
	if($k=="p"){}else{
$var=$var.$k."=".$v."&";
}
}

echo $var;
}

 ?>
<table width="750" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div align="center">
	
	 <?php if ($p==1){}else{  ?>
	<a href="?<?php getisa();?>p=<?php echo $p-1; ?>">&lt; anterior</a>
	
	<?php 
	}
	
	
	if($numpag==1){}else{
	
	 
	for ($i = 1; $i <= $numpag; $i++) {
	
	?>
	
	<?php if ($p==$i){?>
	
	 <strong><?php echo $i; ?></strong>
	<?php }else{ ?>
	
	 <a href="?<?php getisa();?>p=<?php echo $i; ?>"><?php echo $i; ?></a>
	<?php } ?>
	
	 <?php }?>
	 
	<?php if ($p==$numpag){}else{  ?>
	 <a href="?<?php getisa();?>p=<?php echo $p+1; ?>">siguiente &gt;</a>
	 <?php }}?>
	 
	 </div></td>
  </tr>
</table>
<?php //print_r($_GET);?>

<?php  } ?>

<?php

echo "<br>";
 paginacion("cuotas_categoria");?>


</div>



<script language="JavaScript">
function pregunta(id){
    if (confirm('¿Estas seguro eliminar esta registro?')){
	   window.location = "?op=11&t=cuotas_categoria&n=3&e="+id
    }
}
</script>





	  <?php }?>
	
	  <?php if ($_GET['n']==1){ 
	  
	  
	  if (!isset($_POST['Submit4'])){ 
	  ?>
	  
	  
	  
	    <script>



function validacion3() {
alert("see");
return false;
}


function validacion() {
estatus=true;

nombre = document.getElementById("nombre").value;


//alert(valor);

if( nombre == null || nombre == "" || /^\s+$/.test(nombre) ) {
//alert("obligatorio");
estatus=false;
document.getElementById('cartel1').style.display = '';
}else{
document.getElementById('cartel1').style.display = 'none';
}






  return estatus;//true
}





function validacion1(){
alert("lalal");
return false;
}







</script>	

<div  class="formulario10" >

<strong>FORMULARIO DE CATEGORIA CUOTA </strong>

<p>
<form id="form4" name="form4" method="post" action="" onsubmit="return validacion()">
  <label>
  Nombre del la categoria:<br />
  <input name="nombre" type="text" id="nombre" />
  </label>
   <div id="cartel1" style="display:none;" class="cartel1">Este campo es requerido.</div>
  <p>
  <p>
    <label></label><label>
    <input type="submit" name="Submit4" value="GUARDAR" />
    </label>
  </p>
</form>
</div>
  <?php }else{?>
 
 
 
 
  <?php 


/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;


	//TABLA OFERTAS
	$tablename=$_GET['t'];
	//$filtro="WHERE dni='".$dni."'";
	$query="INSERT INTO $tablename (nombre) VALUES ('".$_POST['nombre']."');";
	//echo $q
	mysql_select_db($dbname,$link);
	mysql_query($query,$link);
	$my_error = mysql_error($link);
	if(!empty($my_error)) {
	//cartel(3,"Hubo un error al insertar el registro. $my_error"); 
	echo "Hubo un error al insertar el registro. $my_error";
	} else {
	//echo "SEEEEEEEEEEEEEE";
	//echo cartel(3,"SSEEEEEEEEE");
	}
	?>
	
	<script language="JavaScript" type="text/javascript">
var pagina="?op=<?php echo $_GET['op']; ?>&t=<?php echo $_GET['t']; ?>&n=0"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>
 
 
 
  
 <?php  }
  
   }?>
	
	
		<?php if ($_GET['n']==2){//modificar ?>
	
	
	<?php
		  if (!isset($_POST['Submit4'])){ 
	  ?>
	  
	  
	  <?php 
	  
	  /*
	  if( $_SERVER['SERVER_NAME'] == "localhost"){
	  
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;



 //TABLA prueba
$tablename=$_GET['t'];
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE id='".$_GET['id']."' ORDER BY id DESC";
$query="SELECT * FROM $tablename $filtro;";

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
	$busqueda[$a]["nombre"]=$fila["nombre"];
	//$pagos[$a]["fecha"]=$fila["fecha"];	
	//$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

//print_r($busqueda);
?>
	  
	  


<div class="formulario10">

<strong>MODIFICAR FORMULARIO DE CURSOS</strong> <p>
<form id="form4" name="form4" method="post" action="">
  <label>
  Nombre:<br />
  <input name="nombre" type="text" id="nombre" value="<?php echo $busqueda[1]["nombre"]; ?>" />
  </label>
   <p>
    <input type="submit" name="Submit4" value="GUARDAR" />
    

</form>

</div>
  <?php }else{ //guardar modificar  ?>
  
  
  
  
  
  <?php 
 /*
  if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;
  

$tablename=$_GET['t'];
$query="UPDATE $tablename SET nombre='".$_POST['nombre']."' WHERE id=".$_GET['id']." ;";
//echo $query;
//$result=mysql_db_query ($dbname, $query, $link);




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

//mysql_free_result($resultado);

  ?>
  
  
  	<script language="JavaScript" type="text/javascript">
var pagina="?op=<?php echo $_GET['op']; ?>&t=<?php echo $_GET['t']; ?>&n=0"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>
  
 <?php  }
 
 
	}?>
	
	
		<?php if ($_GET['n']==3){ //eliminar ?>
	
	
	
	<?php 
	/*
	if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/
global $host, $user,$password, $dbname,$link;

				$tablename=$_GET['t'];
				$filtro=" ";
				$query="DELETE FROM $tablename WHERE id='".$_GET['e']."';";
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

//mysql_free_result($resultado);?>

	<script language="JavaScript" type="text/javascript">
var pagina="?op=<?php echo $_GET['op']; ?>&t=<?php echo $_GET['t']; ?>&n=0"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>
	
	
	
	<?php }?>
	
	
	
	
	
	
	
	
	
	
	
	
<?php 
}

function op11(){?>



<?php




/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;







if (isset($_GET['e'])){


				$tablename="becas";
				$filtro=" ";
				$query="DELETE FROM $tablename WHERE id='".$_GET['e']."';";
				echo $query;
				
				
				
				
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

//mysql_free_result($resultado);

}







$filtro="WHERE idf=".$_GET['idf']." ";


$tablename="alumnos";
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
	$filter1[$a]["id"]=$fila["id"];
	$filter1[$a]["apellido"]=$fila["apellido"];	
	$filter1[$a]["nombre"]=$fila["nombre"];		
	$filter1[$a]["dni"]=$fila["dni"];
	$filter1[$a]["idf"]=$fila["idf"];	
	$filter1[$a]["cuota"]=$fila["cuota"];				
	$a++;
}

mysql_free_result($resultado);
//print_r($filter1);


//LIMIT
if (isset($_GET['p'])){
$p=$_GET['p'];
}else{
$p=1;
}

if($p==0){$limit=0;}else{$limit=$p-1;}
//LIMIT

 //TABLA prueba
$tablename="pagos";
if (isset($_GET['f'])){
	if ($_GET['f']=="todos"){
	$filtro1="";
	}else{
	$filtro1=" WHERE idalumno='".$_GET['f']."'";
	}
}else{
$filtro1="";
}

$filtro="  $filtro1 ORDER BY id DESC LIMIT ".$limit."0,10";


if (isset($_GET['f'])){
	if ($_GET['f']=="todos"){
	$filtro33="";
	}else{
	$filtro33="WHERE idalumno='".$_GET['f']."'";
	}
}else{
$filtro33="";
}

 //TABLA prueba
$tablename="descuentos";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro22="";

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 for ($i = 1; $i <= count($filter1); $i++) {
 if ($i == 1){}else{$filtro22=$filtro22." or ";}
 $filtro22=$filtro22." idalumno='".$filter1[$i]["id"]."' ";
 }

$query="SELECT * FROM $tablename $filtro ;";
//echo $query;






if (!$enlace = mysql_connect($host, $user, $password)) {
    echo 'No pudo conectarse a mysql';
    exit;
}

if (!mysql_select_db($dbname, $link)) {
    echo 'No pudo seleccionar la base de datos';
    exit;
}

$sql       = 'SELECT foo FROM bar WHERE id = 42';
$resultado = mysql_query($query, $enlace);

if (!$resultado) {
    echo "Error de BD, no se pudo consultar la base de datos\n";
    echo "Error MySQL: " . mysql_error();
    exit;
}
$a=1;
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["fecha"]=$fila["fecha"];	
	$pagos[$a]["precio"]=$fila["precio"];	
	$pagos[$a]["idalumno"]=$fila["idalumno"];				
	$a++;
}

mysql_free_result($resultado);

////////////////

//print_r($pagos);
?>



<script language="JavaScript">
function pregunta(id,t){
    if (confirm('¿Estas seguro eliminar esta registro?')){
	   window.location = "?op=11&idf=1&e="+id+"&t="+t
    }
}
</script>




<?php 
$tablename=$_GET['t'];
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE id='".$_GET['id']."'";
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
	$persona["id"]=$fila["id"];
	$persona["apellido"]=$fila["apellido"];	
	$persona["nombre"]=$fila["nombre"];		
	$persona["dni"]=$fila["dni"];
	$persona["idf"]=$fila["idf"];				
	$a++;
}

mysql_free_result($resultado);
?>
<div class="contenido">
Buscar por:
<strong> <?php echo $persona["apellido"]; ?>, <?php echo $persona["nombre"]; ?>. <strong>DNI:</strong> <?php echo $persona["dni"]; ?>. <strong>IDFamilia:</strong> <?php echo $persona["idf"]; ?>.</strong></p>







  <table width="750" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td class="tabla">Nombre</td>
    <td class="tabla">Descuentos</td>

  </tr>
  

    	  
	  <?php 

$filtro="WHERE idf=".$_GET['idf']." ";


$tablename="alumnos";
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
	$filter1[$a]["id"]=$fila["id"];
	$filter1[$a]["apellido"]=$fila["apellido"];	
	$filter1[$a]["nombre"]=$fila["nombre"];		
	$filter1[$a]["dni"]=$fila["dni"];
	$filter1[$a]["idf"]=$fila["idf"];	
	$filter1[$a]["cuota"]=$fila["cuota"];				
	$a++;
}

mysql_free_result($resultado);
//print_r($filter1);



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
	  
	<?php
	  function averff1($idalumno){	

//echo $idalumno;

/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;


			   //TABLA prueba
$tablename="pagos";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE idalumno='".$idalumno."'";
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
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["fecha"]=$fila["fecha"];	
	$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

//print_r($pagos);
////////////////
			   $total = 0;
			   for ($i = 1; $i <= count($pagos); $i++) {
			   $total=$total+$pagos[$i]["precio"];
			   }
			   return $total;
			   
			   
			   

}
?>
	 
	 
	 
	   
  

 
	 
	 

	 
	  <?php 
	  
	  /////////////////////////////////////////////////
			  $deudaf=0;
			  $d=0;
			     for ($i = 1; $i <= count($filter1); $i++) {
				 
				 
				 
				    if($d==1){
   $class1='class="celda2"';
   $d=0;
   }else{
   $class1='class="celda1"';
   $d=1;
   }
   
				 
				 
				 
				 
				 
				 
				 
				 
				echo "<tr><td ".$class1.">".$filter1[$i]["nombre"]." ".$filter1[$i]["apellido"]." (".$filter1[$i]["dni"].")"."</td>";
				 
				 
   //echo $i.$filter1[$i]["id"];
   
  
			  $m=date('m');
			  //echo $m."<br>";

			  
			  
			
			
						   //TABLA prueba
$tablename="descuentos";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE idalumno='".$filter1[$i]["id"]."'";
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
unset($descuento);
while ($fila = mysql_fetch_assoc($resultado)) {
	$descuento[$a]["id"]=$fila["id"];
	$descuento[$a]["fecha"]=$fila["fecha"];	
	$descuento[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);


  
			  
			  

			   //TABLA prueba
$tablename="cuotas";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE cuota='".$filter1[$i]["cuota"]."'";
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
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$cuota[$a]["id"]=$fila["id"];
	$cuota[$a]["fecha"]=$fila["fecha"];	
	$cuota[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);
			  
			  
			  
			  	$cuotat=0;
			   for ($y = 1; $y <= count($cuota); $y++) {
					$cuotat=$cuotat+$cuota[$y]["precio"];
			  }
			  
			$desct=0;
			if(isset($descuento)){
			   for ($y = 1; $y <= count($descuento); $y++) {
			   		$var=explode(" ",$descuento[$y]["fecha"]);
					$var=explode("-",$var[0]);
					if ($var[1]<=date('m') && $var[2]<=date('Y')){
					$desct=$desct+$descuento[$y]["precio"];
					}
			  }}
		//$cuotat=0;
			  
			  //$alumno[$i]["curso"];
			  
			  $t=$cuotat;
			  //echo $t;
			  
			  //echo "cuanto tengo asignado a ese idf?";
			  $tota=averff1($filter1[$i]["id"]);//$filter1[$i]["id"]
			  //echo "//".averff1(1)."//";
				$tot=$t-$tota-$desct;
				
				
				$pieces = str_split($tot);
				
				$mg=0;
				if( $pieces[0]=="-"){
				$hg=explode("-",$tot);
				 for ($k = 1; $k <= count($hg)-1; $k++) {
				 $mg=$mg+$hg[$k];
				 }
				
				//echo "<span class='Estilo4'><strong> tiene a su favor $".$mg." pesos.</strong></span>";
				}else{ // 
				
				//echo "<span class='Estilo2'><strong> debe $".$tot." pesos.</strong></span>";
				//$deudaf=$deudaf+$tot;
				}
				//echo " Abonó $".$tota." pesos.";
				//echo " Cuota $".$cuotat." pesos.";
				$deudaf=$deudaf+$desct;
				echo " <td ".$class1."> $".$desct." pesos.</td>";
				echo "<tr>";
				
				 }
			  ?>
			  
			  <?php    
   if($d==1){
   $class1='class="celda2"';
   $d=0;
   }else{
   $class1='class="celda1"';
   $d=1;
   }
   
   ?>  
	
    <td <?php echo $class1; ?>>	  La LFamilia<br /></td>
    <td <?php echo $class1; ?>> $<?php echo $deudaf; ?> pesos.</td>
  </tr>
</table>


<p>





<?php 

function getisa1(){
$var="";
foreach($_GET as $k => $v) {
    // Reject items not starting with prefix
	if($k=="p" or $k=="f"){}else{
$var=$var.$k."=".$v."&";
}
}

echo $var;
}

?>



<?php 

$filtro="WHERE idf=".$_GET['idf']." ";


$tablename="alumnos";
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
	$filter[$a]["apellido"]=$fila["apellido"];	
	$filter[$a]["nombre"]=$fila["nombre"];		
	$filter[$a]["dni"]=$fila["dni"];
	$filter[$a]["idf"]=$fila["idf"];				
	$a++;
}

mysql_free_result($resultado);
//print_r($filter);
?>




<?php function relacionar($id,$t){

/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;


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
	$filter[$a]["apellido"]=$fila["apellido"];	
	$filter[$a]["nombre"]=$fila["nombre"];		
	$filter[$a]["dni"]=$fila["dni"];
	$filter[$a]["idf"]=$fila["idf"];				
	$a++;
}

mysql_free_result($resultado);
//print_r($filter);

echo  $filter[1]["nombre"]." ".$filter[1]["apellido"]." (".$id.")";

 }?>
 
 
 <script language="JavaScript">
function filtro(n){
//alert("dasdadasd");

		a = document.getElementById("filtroo").value;
		alert(a);
	   window.location = n+"f="+a;

	   
	   
}
</script>

<table width="750" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div align="right">
	<form name="tuformulario1" >
  <select name="filtroo" id="filtroo">
  <?php if (isset($_GET['f'])){
  if($_GET['f']=='todos'){}else{?>
  <option value="<?php echo $filter[$_GET['f']]["id"]; ?>"><?php echo $filter[$_GET['f']]["nombre"]."".$filter[$_GET['f']]["apellido"];  ?></option>
  
   <?php
  } }?>
   
	<?php for ($i = 1; $i <= count($filter); $i++) {

if (isset($_GET['f'])){$f=$_GET['f'];}else{$f='no';}

	if($f==$i){}else{
	?>
    <option value="<?php echo $filter[$i]["id"]; ?>"><?php echo $filter[$i]["nombre"]."".$filter[$i]["apellido"];  ?></option>
	<?php }}?>
	 <option value="todos" <?php if($f=='no' or $f=='todos'){echo 'selected="selected"';} ?>>TODOS</option>
  </select>
  <input name="sdfsdf" type="button" value="filtrar" onclick="filtro('?<?php getisa1(); ?>')" />
 
    </form>
	
	</div></td>
  </tr>
</table>










<table width="750" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td class="tabla"><strong>id</strong></td>
    <td class="tabla"><strong>FECHA</strong></td>
    <td class="tabla"><strong>PRECIO</strong></td>
	<td class="tabla"><strong>ID alumno</strong></td>
    <td class="tabla">&nbsp;</td>
  </tr>
  <?php
  $vacio=false;
  if (!isset($pagos)){$vacio=true;}else{
   $d=0;
   for ($i = 1; $i <= count($pagos); $i++) {
   
   
         if($d==1){
    $class1='class="celda2"';
   $d=0;
   }else{
   $class1='class="celda1"';
   $d=1;
   }
   ?>
<tr>
    <td <?php echo $class1;?>><?php echo $pagos[$i]["id"]; ?></td>
    <td <?php echo $class1;?>><?php echo $pagos[$i]["fecha"]; ?></td>
    <td <?php echo $class1;?>><?php echo $pagos[$i]["precio"]; ?></td>
	 <td <?php echo $class1;?>><?php echo $pagos[$i]["idalumno"]; ?></td>
     <td <?php echo $class1;?>><form name="tuformulario">
	
        <input name="elim_id" type="hidden" id="elim_id" value="<?php echo $pagos[$i]["id"];?>" />
		<input name="editar" type="button"  class="editar" />
		 <input name="eliminar" type="button"  class="eliminar" onclick="pregunta(<?php echo $pagos[$i]["id"];?>,'<?php echo $_GET['t'];?>')"/>
    </form></td>
  </tr>
  <?php }}?>
</table>
<?php if($vacio==true){echo "vacio";} ?>






<?php function paginacion($t){?>


<?php 


/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/
global $host, $user,$password, $dbname,$link;


 //TABLA prueba
$tablename=$t;
//$filtro=" ORDER BY id ";


if (isset($_GET['f'])){
	if ($_GET['f']=="todos"){
	$filtro1="";
	}else{
	$filtro1=" WHERE idalumno='".$_GET['f']."'";
	}
}else{
$filtro1="";
}

$filtro="  $filtro1 ORDER BY id DESC";
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

$sql       = 'SELECT foo FROM bar WHERE id = 42';
$resultado = mysql_query($query, $enlace);

if (!$resultado) {
    echo "Error de BD, no se pudo consultar la base de datos\n";
    echo "Error MySQL: " . mysql_error();
    exit;
}
$a=1;
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["fecha"]=$fila["fecha"];	
	$pagos[$a]["precio"]=$fila["precio"];	
	$pagos[$a]["idalumno"]=$fila["idalumno"];				
	$a++;
}

mysql_free_result($resultado);

?>



<?php 

 $reg=count($pagos);
//echo $reg."//";
$numpag=0;
for ($i = 1; $i <= $reg; $i++) {
$i=$i+10;
$numpag=$numpag+1;
}
//echo $numpag;





if (isset($_GET['p'])){
$p=$_GET['p'];
}else{
$p=1;
}




function getisa(){
$var="";
foreach($_GET as $k => $v) {
    // Reject items not starting with prefix
	if($k=="p"){}else{
$var=$var.$k."=".$v."&";
}
}

echo $var;
}

 ?>
 
<table width="750" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div align="center">
	
	 <?php if ($p==1){}else{  ?>
	<a href="?<?php getisa();?>p=<?php echo $p-1; ?>">&lt; anterior</a>
	
	<?php 
	}
	
	
	if($numpag==1){}else{
	
	 
	for ($i = 1; $i <= $numpag; $i++) {
	
	?>
	
	<?php if ($p==$i){?>
	
	 <strong><?php echo $i; ?></strong>
	<?php }else{ ?>
	
	 <a href="?<?php getisa();?>p=<?php echo $i; ?>"><?php echo $i; ?></a>
	<?php } ?>
	
	 <?php }?>
	 
	<?php if ($p==$numpag){}else{  ?>
	 <a href="?<?php getisa();?>p=<?php echo $p+1; ?>">siguiente &gt;</a>
	 <?php }}?>
	 
	 </div></td>
  </tr>
</table>
<?php //print_r($_GET);?>

<?php  } ?>
<br >
<?php paginacion("descuentos");?>

</div>
  <?php 
} 
?>
  
  
  
  
  
  <?php 

function op4(){?>
<?php 
if (isset($_POST['boton_P_g'])){
 
 



/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;

//echo $_POST['a'];
$ids = ""; 

$ff=explode(";",$_POST['status']);
//print_r($ff);
//echo count($ff);
$mmm=count($ff)-2;
for ($i = 0; $i <= $mmm; $i++) {
//echo $i."€€€";













   $date= date_create($_POST['asignadofecha'.$ff[$i]]); //date_create();



	$asignadofecha=date_format($date, 'Y-m-d H:i:s');

     $date= date_create($_POST['fecha'.$ff[$i]]); //date_create();

	$fecha=date_format($date, 'Y-m-d H:i:s');
	//echo $fecha;
	$precio = str_replace(",", "",$_POST['precio__'.$ff[$i]]);// filtrar sacar comas
	//echo $precio;
	//$idcuota=$_POST['idcuota'.$ff[$i]];
	
	//echo $i;


	//TABLA OFERTAS
	$tablename="pagos";
	//$filtro="WHERE dni='".$dni."'";
	$query="INSERT INTO $tablename (fecha, precio,idf,asignadofecha) VALUES ('".$fecha."','".$precio."','".$_GET['idf']."'".",'".$asignadofecha."');";
	//echo $query;
	mysql_select_db($dbname,$link);
	mysql_query($query,$link);
	$my_error = mysql_error($link);
	if(!empty($my_error)) {
	//cartel(3,"Hubo un error al insertar el registro. $my_error"); 
	echo "Hubo un error al insertar el registro. $my_error";
	} else {



	//echo cartel(3,"SSEEEEEEEEE");
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
$tablename="pagos";

$filtro=" ORDER BY id DESC";
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




$resultado1 = mysql_result ($resultado, 0); //Extraemos el valor que nos interesa.
//echo "///".$resultado1."///"; //Te devolverá el último ID.

if($ids==""){
$ids = $resultado1; 
}else{

$ids = $ids.";".$resultado1; 

}


mysql_free_result($resultado);
	
	
	
	
	
	
	
	
	
	
	
	
	
	}
	
	
	//echo $ids;
	
	
	

	//TABLA OFERTAS
	$tablename="recibos";
	//$filtro="WHERE dni='".$dni."'";
	$query="INSERT INTO $tablename (idpagocuota, fecha, idf) VALUES ('".$ids."','".$fecha."','".$_GET['idf']."');";
	//echo $q
	mysql_select_db($dbname,$link);
	mysql_query($query,$link);
	$my_error = mysql_error($link);
	if(!empty($my_error)) {
	//cartel(3,"Hubo un error al insertar el registro. $my_error"); 
	echo "Hubo un error al insertar el registro. $my_error";
	} else {
	//echo 'ok';

$idultimo=mysql_insert_id();
	//echo cartel(3,"SSEEEEEEEEE");
	}
	?>
	
	
	
	
	<?php if(!empty($my_error)) {echo "Hubo un error al insertar el registro. $my_error";}else{
	
	
		echo '<div class="cartel" id="formulario10">
<table  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td ><div align="center" style="font-weight:bold; margin-left:50px;">El Pago se agregó con éxito.</div></td>
    <td ><div style="width:140px; height:120px;"><img src="tilde_bien.png" width="117" height="120" /></div></td>
  </tr>
</table>
</div>';


	} ?>
	
	
	
	<!----> 
	<script language="JavaScript" type="text/javascript">

var pagina="?op=2&idf=<?php echo $_GET['idf'];// ?>&id=<?php echo $_GET['id'];// ?>&t=<?php echo $_GET['t'];// ?>&f=<?php echo $_GET['f'];// ?>&m=<?php echo $_GET['m'];?>&y=<?php echo $_GET['y'];?>"
/*
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 3000);
*/
</script>
























 



















 <?php recibos($idultimo);?>
 
 
 
 












	
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 


	<script language="JavaScript" type="text/javascript">
/*
var pagina="?op=11&idf=<?php //echo $_GET['idf']; ?>&id=<?php //echo $_GET['id']; ?>&t=<?php //echo $_GET['t']; ?>"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);
*/

function redireccionar() 
{
window.print();
} 


function redireccionara() 
{
window.location=pagina;
} 


//setTimeout ("redireccionar()", 100);
//setTimeout ("redireccionara()", 200);
</script>

	  	  	  <script language="JavaScript" type="text/javascript">

window.onload = function() {


//setTimeout ("redireccionar()", 100);
//

//window.print();
setTimeout ("redireccionar()", 100);
setTimeout ("redireccionara()", 200);
//window.location=pagina;
}


</script>
	  



<?php 	
}else{
?>


<?php 

/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;
$filtro="WHERE idf=".$_GET['idf']." ";


$tablename="alumnos";
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
	$filter[$a]["apellido"]=$fila["apellido"];	
	$filter[$a]["nombre"]=$fila["nombre"];		
	$filter[$a]["dni"]=$fila["dni"];
	$filter[$a]["idf"]=$fila["idf"];				
	$a++;
}

mysql_free_result($resultado);
//print_r($filter);
?>

<script>






function validacion() {
estatus=true;

//alert("sadas");

//alert(valor);


status = document.getElementById("status").value;

var res = status.split(";"); 

var fechas1 = "";
for (var i=0;i<res.length-1;i++)
{
valor33 = document.getElementById("mes"+res[i]).value+"-"+ document.getElementById("ano"+res[i]).value;
fechas1=valor33+";"+fechas1;
}

//alert(fechas1);

var elem = fechas1.split(';');

for (var i=0;i<res.length-1;i++)
{
//alert(res[i]+"res");

var test6 = new String(res[i]);

valor = document.getElementById('precio__'+res[i]).value;
valor1 = document.getElementById("fecha"+res[i]).value;
montos = document.getElementById("monto_"+res[i]).value;
valorfechaasig = document.getElementById("mes"+res[i]).value+"-"+ document.getElementById("ano"+res[i]).value;

//alert(valor+"valor");














	

for (var r=0;r<res.length-1;r++)
{

//alert("aqui "+[i]);

var miel = elem[r].split(" ");
//alert("miel "+miel);


/////////////////////////////////////////////////////
//var rgxp = new RegExp(cadena, "g");
var cadena = fechas1;//miel;
var re = new RegExp('/1-2013/'); 
var coincidencias = cadena.match(miel, 'g' );
var numcars = coincidencias ? coincidencias.length : 0;
//alert(numcars); //Muestra 1
/////////////////////////////////////////////////////

//alert("miel "+miel[0]);

	if(numcars>1) {
		//alert("son iguales "+valorfechaasig+" "+miel[0]);
		estatus=false;
		document.getElementById('cartel94_'+res[i]).style.display = '';
		//alert("estatus "+estatus);
	}else{
		document.getElementById('cartel94_'+res[i]).style.display = 'none';
	}

}

//alert("boen1");


//alert(valor+" //"+montos);

if(valor==""){
mivalue=0;
}else{
mivalue=valor;
}



patron = ",";
prueba = mivalue;
prueba=prueba.replace(patron,'');


patron = ",";
montos = montos;
montos=montos.replace(patron,'');


//el monto es amyor q la deuda
//alert(mivalue+"//"+prueba);
//alert(parseFloat(prueba)+" // "+parseFloat(montos));

if( parseFloat(prueba) > parseFloat(montos) ) {
	//alert(" es mayor ");
	estatus=false;
	document.getElementById('cartel7_'+res[i]).style.display = '';
}else{
	document.getElementById('cartel7_'+res[i]).style.display = 'none';
}



	//alert("boen2");






if( montos==0 ) {
	//alert("es mayor");
	estatus=false;
	document.getElementById('cartel22_'+res[i]).style.display = '';
}else{
	document.getElementById('cartel22_'+res[i]).style.display = 'none';
}

/*
	if( isNaN(valor) ) {
	alert("numerico");
	document.getElementById('cartel1').style.display = '';
	  estatus=false;
	}else{
	document.getElementById('cartel1').style.display = 'none';
	}
	*/
	
	if( valor == null || valor == "" ||  valor.length == 0 || /^\s+$/.test(valor) ) {
	//alert("obligatorio");
	estatus=false;
	document.getElementById('cartel3_'+res[i]).style.display = '';
}else{
	document.getElementById('cartel3_'+res[i]).style.display = 'none';
}



   if( valor1 == null || valor1 == "" || valor1.length == 0 || /^\s+$/.test(valor1) ) {
  //alert("obligatorio");
  estatus=false;
  //document.getElementById('cartel2').style.display = '';
}else{
	//document.getElementById('cartel2').style.display = 'none';
	}
  //...
	//alert("estatus "+estatus);
	
	

	
format2=valor1.split(" ");
//alert(format2[0]);














 var cadena = valor1;
var coincidencias = cadena.match(/-/g); //Busca todas las 'e'
var numcars = coincidencias ? coincidencias.length : 0;
//alert("lalalal"+numcars); //Muestra 1
sepfecha=numcars;
//alert(sepfecha);

var coincidencias = cadena.match(/:/g); //Busca todas las 'e'
var numcars = coincidencias ? coincidencias.length : 0;
//alert("lalalal"+numcars); //Muestra 1
sephora=numcars;
//alert(sephora);

var coincidencias = cadena.match(/ /g); //Busca todas las 'e'
var numcars = coincidencias ? coincidencias.length : 0;
//alert("lalalal"+numcars); //Muestra 1
sepespacio=numcars;
//alert(sephora);


if(sepfecha==2 && sephora==2 && sepespacio==1){
//alert("sale bien")




fecha=format2[0].split("-");
hora=format2[1].split(":");
//alert(fecha[0]+fecha[1]+fecha[2]);
var ano = fecha[2];
var mes = fecha[1];
var dia = fecha[0];
 //alert(ano+mes+dia);



var horas=hora[0];
var minuto=hora[1];
var segundos=hora[2];
 //alert(horas+minuto+segundos);
 
 if(segundos==""){
 segundos="//";
 }
 
 
var txt = segundos;
variablee=txt.length;

 if(variablee>2){
 segundos="//";
 //alert("saaaaa");
 }
 
 
  if(minuto==""){
 segundos="//";
 }
 
 
var txt = minuto;
variablee=txt.length;

 if(variablee>2){
 minuto="//";
 //alert("saaaaa");
 }
 
  if(horas==""){
 segundos="//";
 }
 
 
var txt = horas;
variablee=txt.length;

 if(variablee>2){
 horas="//";
 //alert("saaaaa");
 }
 
 
  if(ano==""){
 segundos="//";
 }
 
 
var txt = ano;
variablee=txt.length;

//alert(variablee+ano);

 if(variablee>4){
 ano="//";
// alert("saaaaa");
 }
 
 
  if(mes==""){
 segundos="//";
 }
 
 
var txt = mes;
variablee=txt.length;

 if(variablee>2){
 mes="//";
 //alert("saaaaa");
 }



 if(dia==""){
 segundos="//";
 }
 
 
var txt = dia;
variablee=txt.length;

 if(variablee>2){
 dia="//";
 //alert("saaaaa");
 }
 
 
 }else{
dia="//";
//alert("salemal");
}

 

 
valor = new Date(ano, mes, dia, horas, minuto, segundos);
//alert(valor);





 
if(isNaN(valor) ) {
  estatus=false;
  document.getElementById('cartel4_'+res[i]).style.display = '';
  	//alert("isa ");
}else{
	document.getElementById('cartel4_'+res[i]).style.display = 'none';
}
/*
 if(horas == "" || horas == null  || minuto == "" || minuto == null || segundos == null || segundos == ""  ) {
   estatus=false;
  document.getElementById('cartel4').style.display = '';
 }else{
	document.getElementById('cartel4').style.display = 'none';
}
*/
 
  // Si el script ha llegado a este punto, todas las condiciones
  // se han cumplido, por lo que se devuelve el valor true
  //alert("status "+estatus);
  
  
  }
  //alert("status "+estatus);
  return estatus;//true
}










    












/*
 var objeto2;     

 

  function soloDinero(objeto, e){

  estatus=true;

            var keynum

            var keychar

           var numcheck

    

          if(window.event){ 

            keynum = e.keyCode

          }

  

          else if(e.which){

            keynum = e.which

             }

   

         

   

            if((keynum>=35 && keynum<=37) ||keynum==8||keynum==9||keynum==46||keynum==39) {

               estatus=true;

           }

  

          if(keynum==190||keynum==110||(keynum>=95&&keynum<=105)||(keynum>=48&&keynum<=57)){

  

            posicion = objeto.value.indexOf('.');

  

           if(posicion==-1) {

               estatus=true;

            }else {                           

            if(!(keynum==190||keynum==110)){

                objeto2=objeto;

               t = setTimeout('dosDecimales()',150);

             estatus=true;

           }else{

              objeto2=null;

                estatus=false;

            }

          }

         }else {

        estatus=false;

     }
	 
	 //alert(estatus);
	 return estatus;

    }

*/


/*
function dosDecimales(){    

  

        var objeto = objeto2;

     var posicion = objeto.value.indexOf('.');

        var decimal = 2;

  

      if(objeto.value.length - posicion < decimal){

        objeto.value = objeto.value.substr(0,objeto.value.length-1);                                        

      }else {

       objeto.value = objeto.value.substr(0,posicion+decimal+1);                                            

      }

       return;

    }

*/



var objeto2;     

 

  function soloDinero(objeto, e){
  
  
  
	//alert("res");
  
  
  //alert(objeto.id);
  este=objeto.id;

  
  
  
  estatus=true;

            var keynum

            var keychar

           var numcheck

    

          if(window.event){ /*/ IE*/

            keynum = e.keyCode

          }

  

          else if(e.which){ /*/ Netscape/Firefox/Opera/*/

            keynum = e.which

             }

   


          if((keynum>=35 && keynum<=37)||keynum==9||keynum==46||keynum==39) {

               estatus=true;

           }
		   

            /*if(keynum==8){
		 //estatus=true;
		alert("see");
		 objeto2=null;
		 estatus=false;
		 }   */
   


          if(keynum==8||keynum==190||keynum==110||(keynum>=95&&keynum<=105)||(keynum>=48&&keynum<=57)){

 

            posicion = objeto.value.indexOf('.');
			



           if(posicion==-1) {

               estatus=true;
			   
 

			   
			   	//alert(formatNumber.new(objeto.value));
				//objeto2=formatNumber.new(objeto.value);
				
  var res = objeto.value.replace(/,/g,""); 
	
				document.getElementById(este).value=formatNumber.new(res);
			
				
							

		 

            }else {         
			
              



            if(!(keynum==190||keynum==110)){



              objeto2=objeto;
			//document.getElementById("precio").value=formatNumber.new(objeto.value);
			 var res = objeto.value.replace(/,/g,""); 
document.getElementById(este).value=formatNumber.new(res);
               t = setTimeout('dosDecimales()',0);

             estatus=true;

           }else{




              objeto2=null;

                estatus=false;
				}

          
			
		
			

          }
		  
		  

		  

         }else {

    
        estatus=false;

     }
	 /*
	 		  if (keynum==8) {
alert("see");

estatus= false;
}*/
	 //alert(formatNumber.new(objeto.value));
	 //alert(estatus);
	 return estatus;

    }



function dosDecimales(){    



        var objeto = objeto2;

     var posicion = objeto.value.indexOf('.');



        var decimal = 2;

  

      if(objeto.value.length - posicion < decimal){

        objeto.value = objeto.value.substr(0,objeto.value.length-1);                                        

      }else {

       objeto.value = objeto.value.substr(0,posicion+decimal+1);                                            

      }

       return;

    }
	
	
	 function solonumero(objeto, e){
	 
	/* 
//alert("dasd");
var str = objeto.value;

var n = str.split("."); 

if(str.indexOf('.') != -1){
//var n = replaceAll(n[1],".","")
//alert(n[0]+n);
//alert("seeee");
}else{
//alert(str);
}

*/







  var keynum

            var keychar

           var numcheck

    

          if(window.event){ /*/ IE*/

            keynum = e.keyCode

          }

  

          else if(e.which){ /*/ Netscape/Firefox/Opera/*/

            keynum = e.which

             }
			 
			 
			 
			 
			 
			 
			 

			 
			 
			 
			 
			 
			 //alert(keynum);
			 
	 if (keynum > 31 && (keynum < 46 || keynum > 57)) {
return false;
}		


 		
			 valor=objeto.value;
  //var key = window.event ? e.keyCode : e.which;
    var keychar = String.fromCharCode(keynum);
    if (valor.indexOf(".")!=-1 && keychar=="."){
    	return false;
  	}else{
    	return true;
  	}

			 
			
			 
			 
 }

	
	
	function replaceAll( text, busca, reemplaza ){
	  while (text.toString().indexOf(busca) != -1)
	      text = text.toString().replace(busca,reemplaza);
	  return text;
	}




var formatNumber = {
separador: ",", // separador para los miles
sepDecimal: '.', // separador para los decimales
formatear:function (num){
var str=num;
n=replaceAll(str, ",", "" )
num=n;
//alert(num);
num +='';
var splitStr = num.split('.');
var splitLeft = splitStr[0];
var splitRight = splitStr.length > 1 ? this.sepDecimal + splitStr[1] : '';
var regx = /(\d+)(\d{3})/;
while (regx.test(splitLeft)) {
splitLeft = splitLeft.replace(regx, '$1' + this.separador + '$2');
}
return this.simbol + splitLeft  +splitRight;
},
new:function(num, simbol){
this.simbol = simbol ||'';
return this.formatear(num);
}
}



function validacion1(){

valor = document.getElementById("precio").value;

if( isNaN(valor) ) {
	document.getElementById('cartel1').style.display = '';
  return false;
}
/*
alert("lalal");
return false;*/
}

</script>





<?php 

global $host, $user,$password, $dbname,$link;











$filtro="WHERE idf=".$_GET['idf']." ";


$tablename="alumnos";
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
	$filter1[$a]["id"]=$fila["id"];
	$filter1[$a]["apellido"]=$fila["apellido"];	
	$filter1[$a]["nombre"]=$fila["nombre"];		
	$filter1[$a]["dni"]=$fila["dni"];
	$filter1[$a]["idf"]=$fila["idf"];	
	$filter1[$a]["cuota"]=$fila["cuota"];		
	$filter1[$a]["fecha_inscrip_inicio"]=$fila["fecha_inscrip_inicio"];	
	$filter1[$a]["fecha_inscrip_fin"]=$fila["fecha_inscrip_fin"];			
	$a++;
}

mysql_free_result($resultado);
//print_r($filter1);








			   //TABLA prueba
$tablename="pagos";
//$filtro=" ORDER BY id LIMIT 20,10";
$fechj=date("Y")-1;
$filtro="WHERE idf='".$_GET['idf']."' AND year(asignadofecha) BETWEEN '2012' AND '$fechj' ";//AND year(fecha)='2013' AND month(fecha)='$mes'
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
//$pagos=0;
$totprecio=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["fecha"]=$fila["fecha"];	
	$pagos[$a]["precio"]=$fila["precio"];
	$totprecio=$totprecio+$fila["precio"];
	$pagos[$a]["idcuota"]=$fila["idcuota"];	
	$pagos[$a]["asignadofecha"]="///";						
	$a++;
}

mysql_free_result($resultado);

//echo "TOTPRECIO:".$totprecio;
//print_r($pagos);











//print_r($filter1);
$totcuota=0;
	for ($i = 1; $i <= count($filter1); $i++) {		  

			   //TABLA prueba
$tablename="cuotas";
//$filtro=" ORDER BY id LIMIT 20,10";
$fechj=date("Y")-1;
$filtro="WHERE cuota='".$filter1[$i]["cuota"]."'  AND year(fecha) BETWEEN '2012' AND '$fechj' ";

//$filtro="WHERE idf='".$_GET['idf']."' AND year(asignadofecha) BETWEEN '2012' AND '$fechj' ";
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
//$pagos=0;
$cuota="";


while ($fila = mysql_fetch_assoc($resultado)) {

$date0 = new DateTime("0000-00-00");
$date1 = new DateTime($fila["fecha"]);
$date2 = new DateTime($filter1[$i]["fecha_inscrip_inicio"]);
$date3 = new DateTime($filter1[$i]["fecha_inscrip_fin"]);
//echo $filter1[$i]["fecha_inscrip_fin"] ."<br>";

if($filter1[$i]["fecha_inscrip_fin"]=="0000-00-00"){
$comparar="no";
}else{

$comparar="si";}
//echo $comparar;
if($comparar=="si"){
//echo "echo;".$filter1[$i]["fecha_inscrip_fin"];
}else{

}
if($comparar=="si"){

if($date1<$date2  or $date1 >= $date3){}else{
	$cuota[$a]["id"]=$fila["id"];
	$cuota[$a]["fecha"]=$fila["fecha"];	
	$cuota[$a]["precio"]=$fila["precio"];		
	$totcuota=$totcuota+$fila["precio"];			
	$a++;
	}
	
	

}else{
if($date1<=$date2 ){}else{

	$cuota[$a]["id"]=$fila["id"];
	$cuota[$a]["fecha"]=$fila["fecha"];	
	$cuota[$a]["precio"]=$fila["precio"];		
	$totcuota=$totcuota+$fila["precio"];		
	$a++;
	}
}


}

//print_r($cuota);

//echo "<br>";

if ($cuota==""){
//echo "vacio";
$cantcoutas=0;
}else{
$cantcoutas=count($cuota);
}
//$cuota= count(null);
//echo $cuota."///".$cantcoutas;


mysql_free_result($resultado);

}

//echo "//*".$totcuota;




$mitot=$totcuota-$totprecio;

//echo "//-".$mitot;
if ($mitot>0){
//echo "<div class='rojo'>*Tiene una deuda de años anteriores de $".$mitot." pesos.</div>";
}


//print_r($cuota);

//echo "<br>";
/*
if ($cuota==""){
//echo "vacio";
$cantcoutas=0;
}else{
$cantcoutas=count($cuota);
}
//$cuota= count(null);
//echo $cuota."///".$cantcoutas;
*/

			  
?>
















































































 <?php
	  function averff1($idalumno){	
/*
//echo $idalumno;
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/
global $host, $user,$password, $dbname,$link;


			   //TABLA prueba
$tablename="pagos";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE idalumno='".$idalumno."'";
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
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["fecha"]=$fila["fecha"];	
	$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

//print_r($pagos);
////////////////
			   $total = 0;
			   //aqui emepzaba el probelam.
			   if (isset($pagos)){
			   for ($i = 1; $i <= count($pagos); $i++) {
			   $total=$total+$pagos[$i]["precio"];
			   }
			   
			   }else{
			   $pagos=0;
			   }
			   return $total;
			   
			   
			   

}
?>




 <?php
	  function averffISA($idf,$mes,$ano){	
	  
	  
	  			   //if ($idcuota==0){
			   //$total=0;
			   //}else{
/*
//echo $idalumno;
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/
global $host, $user,$password, $dbname,$link;


			   //TABLA prueba
$tablename="pagos";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE idf='".$idf."' AND month(asignadofecha)='$mes' AND year(asignadofecha)='".$ano."' ";//AND year(fecha)='2013' AND month(fecha)='$mes'
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
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["fecha"]=$fila["fecha"];	
	$pagos[$a]["precio"]=$fila["precio"];
	$pagos[$a]["idcuota"]=$fila["idcuota"];	
	$pagos[$a]["asignadofecha"]="///";						
	$a++;
}

mysql_free_result($resultado);

//print_r($pagos);
////////////////
			   $total = 0;
			   //aqui emepzaba el probelam.

				   if (isset($pagos)){
				  for ($i = 1; $i <= count($pagos); $i++) {
				   $total=$total+$pagos[$i]["precio"];
				   }
				   
				   }else{
				   $pagos=0;
				   }
		
		
		//}
			   return $total;
			   
			   
			   

}
?>
  
  
  <!--
			  La Familia <span class="Estilo2">debe  $<?php //echo $deudaf; ?> pesos</span>.<br />
			
	</td>
  </tr>
</table>
  -->
</p>

<!--
</p>
<table width="750" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td class="tabla">Nombre</td>
    <td class="tabla">Pago</td>
    <td class="tabla">Cuota</td>
    <td class="tabla">Descuentos</td>
    <td class="tabla">Total</td>
  </tr>
  -->
  
  
  

  
  	  <?php 
	  
	 
	  
	  
	  $cuot[3]=0;
	   $cuot[4]=0;
	   $cuot[5]=0;
	   
	   	  $cuot[6]=0;
	   $cuot[7]=0;
	   $cuot[8]=0;
	   
	   	  $cuot[9]=0;
	   $cuot[10]=0;
	   $cuot[11]=0;
	   
	   	  $cuot[12]=0;
	   $cuot[1]=0;
	   $cuot[2]=0;
	   
	  $totpagfam=0;
	  $totcuotafam=0;
	  $totdescufam=0;
	  $tottotfam=0;
	  
			  $deudaf=0;
	 $d=0;		  
			     for ($i = 1; $i <= count($filter1); $i++) {
				 //echo "hijo: ".$i."<br>";
				 
				 
				       if($d==1){
    //$class1='class="celda2"';
   $d=0;
   }else{
  // $class1='class="celda1"';
   $d=1;
   }
   
				 
				// echo '<tr><td '.$class1.'>';
			   
				//echo $filter1[$i]["nombre"]." ".$filter1[$i]["apellido"];
				
				//echo "&nbsp;</td>";
				 
				 
   //echo $i.$filter1[$i]["id"];
   
  
			  $m=date('m');
			  //echo $m."<br>";

			  
			  
			
			
						   //TABLA prueba
$tablename="descuentos";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE idalumno='".$filter1[$i]["id"]."'";
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
unset($descuento);
while ($fila = mysql_fetch_assoc($resultado)) {
	$descuento[$a]["id"]=$fila["id"];
	$descuento[$a]["fecha"]=$fila["fecha"];	
	$descuento[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);


  $cuota="";
  $cuotat=0;
  
			    for ($d = 2012; $d <= date("Y")+5; $d++) {  
				
				
				
				
				

if (isset($cuot[$d][3])){}else{

$cuot[$d][3]=0;
$cuot[$d][4]=0;
$cuot[$d][5]=0;

$cuot[$d][6]=0;
$cuot[$d][7]=0;
$cuot[$d][8]=0;

$cuot[$d][9]=0;
$cuot[$d][10]=0;
$cuot[$d][11]=0;

$cuot[$d][12]=0;
$cuot[$d][1]=0;
$cuot[$d][2]=0;
$totpagfam=0;
$totcuotafam=0;
$totdescufam=0;
$tottotfam=0;
$deudaf=0;
}






			  
			  
			  
				
				
				
				
				//echo $d."<br>";
			  

			   //TABLA prueba
$tablename="cuotas";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE cuota='".$filter1[$i]["cuota"]."'  AND year(fecha)='".$d."'";
$query="SELECT * FROM $tablename $filtro;";
//echo $query."dsad";






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
//echo $fila["fecha"]."%%".$filter1[$i]["fecha_inscrip_inicio"]."//";

$date0 = new DateTime("0000-00-00");
$date1 = new DateTime($fila["fecha"]);
$date2 = new DateTime($filter1[$i]["fecha_inscrip_inicio"]);
$date3 = new DateTime($filter1[$i]["fecha_inscrip_fin"]);
//echo $filter1[$i]["fecha_inscrip_fin"] ."<br>";

if($filter1[$i]["fecha_inscrip_fin"]=="0000-00-00"){
$comparar="no";
}else{

$comparar="si";}
//echo $comparar;
if($comparar=="si"){
//echo "echo;".$filter1[$i]["fecha_inscrip_fin"];
}else{

}
if($comparar=="si"){

if($date1<$date2  or $date1 >= $date3){}else{
	$cuota[$d][$a]["id"]=$fila["id"];
	$cuota[$d][$a]["fecha"]=$fila["fecha"];	
	$cuota[$d][$a]["precio"]=$fila["precio"];				
	$a++;
	}
	
	

}else{
if($date1<=$date2 ){}else{

	$cuota[$d][$a]["id"]=$fila["id"];
	$cuota[$d][$a]["fecha"]=$fila["fecha"];	
	$cuota[$d][$a]["precio"]=$fila["precio"];				
	$a++;
	}
}

}

//print_r($cuota);

//echo count($cuota[$d]);

//echo "<br>";

if ($cuota=="" OR !isset($cuota[$d])){
//echo "vacio";
$cantcoutas=0;
}else{
//$cantcoutas=count($cuota);
$cantcoutas=count($cuota[$d]);
}
//$cuota= count(null);

//$cantcoutas1=count($cuota[$d]);
//echo $cuota."///".$cantcoutas;


mysql_free_result($resultado);
			  
/*		 
$miscuotas[$d][1]=0;
$miscuotas[$d][2]=0;	
$miscuotas[$d][3]=0;	
$miscuotas[$d][4]=0;	
$miscuotas[$d][5]=0;	
$miscuotas[$d][6]=0;	
$miscuotas[$d][7]=0;	
$miscuotas[$d][8]=0;	
$miscuotas[$d][9]=0;	
$miscuotas[$d][10]=0;	
$miscuotas[$d][11]=0;	
$miscuotas[$d][12]=0;			 
*/

 
//SI HAY ERROR EN explorador  es porque no tiene cargado ninguna cuota a ese alumno icuota.
for ($y = 1; $y <= $cantcoutas; $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$d][$y]['fecha']);
		for ($g = 1; $g <= 12; $g++) {
			if($fchacha[1]==$g AND $fchacha[0]==$d){
				$miscuotas[$d][$g]=$cuota[$d][$y]['id'];
			}
		}
}
/*
echo "<p>MIS CUOTAS";
print_r($miscuotas);
echo "<p>MIS CUOTAS";*/
///////////////////////////////////////////////////////////////////////////

		 




for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota[$d]); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$d][$y]['fecha']);
		if($fchacha[1]==3){
			$cuot[$d][3]=$cuot[$d][3]+$cuota[$d][$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota[$d]); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$d][$y]['fecha']);
		if($fchacha[1]==4){
			$cuot[$d][4]=$cuot[$d][4]+$cuota[$d][$y]['precio'];
		}
	}
}


for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota[$d]); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$d][$y]['fecha']);
		if($fchacha[1]==5){
			$cuot[$d][5]=$cuot[$d][5]+$cuota[$d][$y]['precio'];
		}
	}
}


for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota[$d]); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$d][$y]['fecha']);
		if($fchacha[1]==6){
			$cuot[$d][6]=$cuot[$d][6]+$cuota[$d][$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota[$d]); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$d][$y]['fecha']);
		if($fchacha[1]==7){
			$cuot[$d][7]=$cuot[$d][7]+$cuota[$d][$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota[$d]); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$d][$y]['fecha']);
		if($fchacha[1]==8){
			$cuot[$d][8]=$cuot[$d][8]+$cuota[$d][$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota[$d]); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$d][$y]['fecha']);
		if($fchacha[1]==9){
			$cuot[$d][9]=$cuot[$d][9]+$cuota[$d][$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota[$d]); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$d][$y]['fecha']);
		if($fchacha[1]==10){
			$cuot[$d][10]=$cuot[$d][10]+$cuota[$d][$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota[$d]); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$d][$y]['fecha']);
		if($fchacha[1]==11){
			$cuot[$d][11]=$cuot[$d][11]+$cuota[$d][$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota[$d]); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$d][$y]['fecha']);
		if($fchacha[1]==12){
			$cuot[$d][12]=$cuot[$d][12]+$cuota[$d][$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota[$d]); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$d][$y]['fecha']);
		if($fchacha[1]==1){
			$cuot[$d][1]=$cuot[$d][1]+$cuota[$d][$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota[$d]); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$d][$y]['fecha']);
		if($fchacha[1]==2){
			$cuot[$d][2]=$cuot[$d][2]+$cuota[$d][$y]['precio'];
		}
	}
}

		 
 
		  
			  
			  	
			   for ($y = 1; $y <= $cantcoutas; $y++) {
					$cuotat=$cuotat+$cuota[$d][$y]["precio"];
			  }
			  
			
			$desct=0;
			if(isset($descuento)){
			   for ($y = 1; $y <= count($descuento); $y++) {
			   		$var=explode(" ",$descuento[$y]["fecha"]);
					$var=explode("-",$var[0]);
					if ($var[1]<=date('m') && $var[2]<=date('Y')){
					$desct=$desct+$descuento[$y]["precio"];
					}
			  }}
			 
			// echo "<p>**";
			// print_r($cuot[$d]);
			//  echo "<p>**";
		//$cuotat=0;
			  
			  //$alumno[$i]["curso"];
			  
			  $t=$cuotat;
			  //echo $t;
			  
			  //echo "cuanto tengo asignado a ese idf?";
			  $tota=averff1($filter1[$i]["id"]);//$filter1[$i]["id"]
			  $pag[$d][3]=averffISA($_GET['idf'],3,$d);//$filter1[$i]["id"] //$miscuotas[3]
			  //echo $miscuotas[3]."***". $pag[3]."///";
			 $pag[$d][4]=averffISA($_GET['idf'],4,$d);
			  $pag[$d][5]=averffISA($_GET['idf'],5,$d);
			   $pag[$d][6]=averffISA($_GET['idf'],6,$d);
			    $pag[$d][7]=averffISA($_GET['idf'],7,$d);
				 $pag[$d][8]=averffISA($_GET['idf'],8,$d);
				  $pag[$d][9]=averffISA($_GET['idf'],9,$d);
				   $pag[$d][10]=averffISA($_GET['idf'],10,$d);
				    $pag[$d][11]=averffISA($_GET['idf'],11,$d);
					 $pag[$d][12]=averffISA($_GET['idf'],12,$d);
					  $pag[$d][1]=averffISA($_GET['idf'],1,$d);
					   $pag[$d][2]=averffISA($_GET['idf'],2,$d);
			 
			 
			 
			  //$pag[3]=500;
			  //echo "//".averff1(1)."//";
				$tot=$t-$tota-$desct;
				
				
				
				//
				$totpagfam=$totpagfam+$tota;
				$totcuotafam=$totcuotafam+$cuotat;
				$totdescufam=$totdescufam+$desct;
				$tottotfam=$tottotfam+$tot;
				
				//
				
				
				$pieces = str_split($tot);
				
				$mg=0;
				
				//echo "<td ".$class1." id='precio1'>$".number_format($tota, 2)."</td>";
				//echo "<td ".$class1." id='precio1'>$".number_format($cuotat, 2)."</td>";
				//echo "<td ".$class1." id='precio1'>$".number_format($desct, 2)."</td>";
				
				//echo "<br>";
				
				if( $pieces[0]=="-"){
				$hg=explode("-",$tot);
				 for ($k = 1; $k <= count($hg)-1; $k++) {
				 $mg=$mg+$hg[$k];
				 }
				

				
				//echo "<td ".$class1." id='precio1'><span class='Estilo4' ><strong>A favor $".number_format($mg,2)."</strong></span></td>";
				}else{ // 
				
				//echo "<td ".$class1." id='precio1'><span class='Estilo2' ><strong> Debe $".number_format($tot,2)."</strong></span></td>";
				$deudaf=$deudaf+$tot;
				}
				
				//echo "</tr>";
				
				 }
			  ?>
  
  
 
  
  <?php    
   if($d==1){
   //$class1='class="celda2"';
   $d=0;
   }else{
  // $class1='class="celda1"';
   $d=1;
   }
   
   ?>

  <!--
  <tr>
    <td <?php //echo $class1; ?>>	  La Familia </td>
    <td <?php// echo $class1; ?> id='precio1'>$<?php //echo number_format($totpagfam, 2); ?></td>
    <td <?php //echo $class1; ?> id='precio1'>$<?php // echo number_format($totcuotafam, 2); ?></td>
    <td <?php //echo $class1; ?> id='precio1'>$<?php //echo number_format($totdescufam, 2); ?></td>
    <td <?php //echo $class1; ?> id='precio1'><?php 
	
	$pieces = str_split($deudaf);
	if($deudaf==0){
	
		//echo "<span class='Estilo4'><strong>A favor $".str_replace("-","",number_format($tottotfam, 2))."</strong></span>";
	}else{
	
		//echo "<span class='Estilo2'><strong>Debe $".number_format($deudaf, 2)."</strong></span>";
	}
	
	//echo $deudaf; ?></td>
  </tr>
</table>
<p>
-->
<?php 

//echo $pag[$d][3];

}//termina for

function getisa1(){
$var="";
foreach($_GET as $k => $v) {
    // Reject items not starting with prefix
	if($k=="p" or $k=="f" or $k=="m"){}else{
$var=$var.$k."=".$v."&";
}
}

echo $var;
}

?>




<?php 

$filtro="WHERE idf=".$_GET['idf']." ";


$tablename="alumnos";
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
	$filter[$a]["apellido"]=$fila["apellido"];	
	$filter[$a]["nombre"]=$fila["nombre"];		
	$filter[$a]["dni"]=$fila["dni"];
	$filter[$a]["idf"]=$fila["idf"];				
	$a++;
}

mysql_free_result($resultado);
//print_r($filter);
?>




<?php function relacionar($id,$t){
/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/
global $host, $user,$password, $dbname,$link;


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
	$filter[$a]["apellido"]=$fila["apellido"];	
	$filter[$a]["nombre"]=$fila["nombre"];		
	$filter[$a]["dni"]=$fila["dni"];
	$filter[$a]["idf"]=$fila["idf"];				
	$a++;
}

mysql_free_result($resultado);
//print_r($filter);

echo  $filter[1]["nombre"]." ".$filter[1]["apellido"];

 }?>



<?php //echo $filter[$_GET['f']]["id"];



function getisa2(){
$var="";
foreach($_GET as $k => $v) {
    // Reject items not starting with prefix
	if($k=="f" or $k=="y"){}else{
		$var=$var.$k."=".$v."&";
		}
}
echo $var;
}




















function mascara1($p){
if($p <=0){
$m= "Pagado";
$m="<div class='verde'>".$m."</div>";
}else{
$m= "$".$p;
$m="<div class='rojo'>".$m."</div>";
}



return $m;
}
 ?>


<p>
<div style="display:none;">
 <?php 
 
 
 for ($d = 2012; $d <= date("Y")+5; $d++) { 
 echo $d;
 
 
 /*
  ?>
  
<table width="750" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><form id="form7" name="form7" method="post" action="">

  <div align="right">
  
    <label>
  <select id="ano" name="ano">
  <?php for ($i = 2012; $i <= date("Y")+5; $i++) { ?>
  	<option value="<?php echo $i; ?>" <?php if ($_GET['y'] == $i){echo "selected='selected'";} ?>><?php echo $i; ?></option>
  <?php } ?>
  </select>
  </label>
  <label>
  <input type="button" name="Submit5" value="Mostrar" onclick="filtro2('?<?php getisa2(); ?>')"/>
  </label>
  
  </div>
    </form></td>
  </tr>
</table>

<?php */



?>

<table width="750" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td class="tabla">Mes</td>
    <td class="tabla">Cuota</td>
    <td class="tabla">Matricula</td>
    <td class="tabla">Materiales</td>
    <td class="tabla">Ense&ntilde;anza</td>
	    <td class="tabla">Descuentos</td>
    <td class="tabla">Total</td>
    <td class="tabla">Pagos</td>
    <td class="tabla">Deuda</td>
  </tr>
  <tr>
    <td class="celda1">Enero</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
	  <td class="celda1" id='precio1'>&nbsp;</td>
      <td class="celda1" id='precio1'>&nbsp;</td>
      <td class="celda1" id='precio1'>&nbsp;</td>
      <td class="celda1" id='precio1'>&nbsp;</td>
  </tr>
  <tr>
    <td class="celda2">Febrero  </td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
	  <td class="celda2" id='precio1'>&nbsp;</td>
      <td class="celda2" id='precio1'>&nbsp;</td>
      <td class="celda2" id='precio1'>&nbsp;</td>
  </tr>
  <tr>
    <td class="celda1">Marzo</td>
    <td class="celda1" id='precio1'>$<?php echo $cuot[$d][3]; 
	//print_r($cuot);
	?></td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
		  <td class="celda1" id='precio1'>&nbsp;</td>
          <td class="celda1" id='precio1'>$<?php 
		  
		  		   if (date('m') >= 03){
		   $tot1= $cuot[$d][3];
		   
		   }else{
		   $tot1= 0;
		   }
		  
		   echo $tot1; 
		   
		   
		 // $tot1= $cuot[3]; echo $tot1; ?>
	
	
	

	</td>

    <td class="celda1" id='precio1'>$<?php echo $pag[$d][3]; ?></td>
    <td class="celda1" id='precio1'><?php 
	
	
			 if (date('m') >= 03){
	echo mascara1($tot1-$pag[$d][3]);
	}else{
	echo "$0";
	
	}
	//echo $tot1-$pag[3]; ?>	<?php
//$totrestan="";
$j=0;

$mue= $tot1-$pag[$d][3];
//echo $mue;
$debe[$d][3]=$mue;

if($mue>=0){
$totrestan[$d][$j]['fecha']='03-'.$d;
$totrestan[$d][$j]['precio']=$mue;
$j++;
} 

	
	?></td>
  </tr>
  <tr>
    <td class="celda2">Abril</td>
    <td class="celda2" id='precio1'>$<?php echo $cuot[$d][4]; ?></td>
    <td class="celda2" id='precio1'></td>
    <td class="celda2" id='precio1'></td>
    <td class="celda2" id='precio1'></td>
		  <td class="celda2" id='precio1'>&nbsp;</td>
          <td class="celda2" id='precio1'>$<?php
		  
		  		   if (date('m') >= 04){
		   $tot1= $cuot[$d][4];
		   
		   }else{
		   $tot1= 0;
		   }
		  
		   echo $tot1; 
		  
		   //$tot1= $cuot[4]; echo $tot1; ?></td>
    <td class="celda2" id='precio1'>$<?php echo $pag[$d][4]; ?></td>
    <td class="celda2" id='precio1'><?php
	
			 if (date('m') >= 04){
	echo mascara1($tot1-$pag[$d][4]);
	}else{
	echo "$0";
	
	}
	 //echo $tot1-$pag[4]; ?><?php
//$totrestan="";
$j=0;

$mue= $tot1-$pag[$d][4];
//echo $mue;
$debe[$d][4]=$mue;

if($mue>=0){
$totrestan[$d][$j]['fecha']='04-'.$d;
$totrestan[$d][$j]['precio']=$mue;
$j++;
} 

	
	?></td>
  </tr>
  <tr>
    <td class="celda1">Mayo</td>
    <td class="celda1" id='precio1'>$<?php echo $cuot[$d][5]; ?></td>
    <td class="celda1" id='precio1'></td>
    <td class="celda1" id='precio1'></td>
    <td class="celda1" id='precio1'></td>
		  <td class="celda1" id='precio1'>&nbsp;</td>
          <td class="celda1" id='precio1'>$<?php 
		  		   if (date('m') >= 05){
		   $tot1= $cuot[$d][5];
		   
		   }else{
		   $tot1= 0;
		   }
		  
		   echo $tot1; 
		  //$tot1= $cuot[5]; echo $tot1; ?></td>
    <td class="celda1" id='precio1'>$<?php echo $pag[$d][5]; ?></td>
    <td class="celda1" id='precio1'><?php
	
			 if (date('m') >= 05){
	echo mascara1($tot1-$pag[$d][5]);
	}else{
	echo "$0";
	
	}
	
	 //echo $tot1-$pag[5]; ?><?php
//$totrestan="";
$j=0;

$mue= $tot1-$pag[$d][5];
//echo $mue;
$debe[$d][5]=$mue;

if($mue>=0){
$totrestan[$d][$j]['fecha']='05-'.$d;
$totrestan[$d][$j]['precio']=$mue;
$j++;
} 

	
	?></td>
  </tr>
  <tr>
    <td class="celda2">Junio</td>
    <td class="celda2" id='precio1'>$<?php echo $cuot[$d][6]; ?></td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
		  <td class="celda2" id='precio1'>&nbsp;</td>
          <td class="celda2" id='precio1'>$<?php 
		  
		  		   if (date('m') >= 06){
		   $tot1= $cuot[$d][6];
		   
		   }else{
		   $tot1= 0;
		   }
		  
		   echo $tot1; 
		  //$tot1= $cuot[6]; echo $tot1; ?></td>
    <td class="celda2" id='precio1'>$<?php echo $pag[$d][6]; ?></td>
    <td class="celda2" id='precio1'><?php
	
	
	
			 if (date('m') >= 06){
	echo mascara1($tot1-$pag[$d][6]);
	}else{
	echo "$0";
	
	}
	 //echo $tot1-$pag[6]; ?><?php
//$totrestan="";
$j=0;

$mue= $tot1-$pag[$d][6];
//echo $mue;
$debe[$d][6]=$mue;

if($mue>=0){
$totrestan[$d][$j]['fecha']='06-'.$d;
$totrestan[$d][$j]['precio']=$mue;
$j++;
} 

	
	?></td>
  </tr>
  <tr>
    <td class="celda1">Julio</td>
    <td class="celda1" id='precio1'>$<?php echo $cuot[$d][7]; ?></td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
		  <td class="celda1" id='precio1'>&nbsp;</td>
          <td class="celda1" id='precio1'>$<?php
		  
		  		   if (date('m') >= 07){
		   $tot1= $cuot[$d][7];
		   
		   }else{
		   $tot1= 0;
		   }
		  
		   echo $tot1; 
		   
		   //$tot1= $cuot[7]; echo $tot1; ?></td>
    <td class="celda1" id='precio1'>$<?php echo $pag[$d][7]; ?></td>
    <td class="celda1" id='precio1'><?php 
	
	
			 if (date('m') >= 07){
	echo mascara1($tot1-$pag[$d][7]);
	}else{
	echo "$0";
	
	}
	//echo $tot1-$pag[7]; ?><?php
//$totrestan="";
$j=0;

$mue= $tot1-$pag[$d][7];
//echo $mue;
$debe[$d][7]=$mue;

if($mue>=0){
$totrestan[$d][$j]['fecha']='07-'.$d;
$totrestan[$d][$j]['precio']=$mue;
$j++;
} 

	
	?></td>
  </tr>
  <tr>
    <td class="celda2">Agosto</td>
    <td class="celda2" id='precio1'>$<?php echo $cuot[$d][8]; ?></td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
		  <td class="celda2" id='precio1'>&nbsp;</td>
          <td class="celda2" id='precio1'>$<?php 
		  
		  		   if (date('m') >= 08){
		   $tot1= $cuot[$d][8];
		   
		   }else{
		   $tot1= 0;
		   }
		  
		   echo $tot1; 
		 // $tot1= $cuot[8]; echo $tot1; ?></td>
    <td class="celda2" id='precio1'>$<?php echo $pag[$d][8]; ?></td>
    <td class="celda2" id='precio1'><?php
	
			 if (date('m') >= 08){
	echo mascara1($tot1-$pag[$d][8]);
	}else{
	echo "$0";
	
	}
	
	
	
	 //echo $tot1-$pag[8]; ?><?php
//$totrestan="";
$j=0;

$mue= $tot1-$pag[$d][8];
//echo $mue;
$debe[$d][8]=$mue;

if($mue>=0){
$totrestan[$d][$j]['fecha']='08-'.$d;
$totrestan[$d][$j]['precio']=$mue;
$j++;
} 

	
	?>
      </td>
  </tr>
  <tr>
    <td class="celda1">Septiembre</td>
    <td class="celda1" id='precio1'>$<?php echo $cuot[$d][9]; ?></td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
		  <td class="celda1" id='precio1'>&nbsp;</td>
          <td class="celda1" id='precio1'>$<?php
		  
		  
		   //$tot1= $cuot[9]; echo $tot1; 
		   
		   
		   if (date('m') >= 09){
		   $tot1= $cuot[$d][9];
		   
		   }else{
		   $tot1= 0;
		   }
		  
		   echo $tot1; 
		   
		   ?></td>
    <td class="celda1" id='precio1'>$<?php echo $pag[$d][9]; ?></td>
    <td class="celda1" id='precio1'><?php
	
	
		 if (date('m') >= 09){
	echo mascara1($tot1-$pag[$d][9]);
	}else{
	echo "$0";
	
	}
	
	  ?><?php
//$totrestan="";
$j=0;

$mue= $tot1-$pag[$d][9];
//echo $mue;
$debe[$d][9]=$mue;

if($mue>=0){
$totrestan[$d][$j]['fecha']='09-'.$d;
$totrestan[$d][$j]['precio']=$mue;
$j++;
} 

	
	?></td>
  </tr>
  <tr>
    <td class="celda2">Octubre</td>
    <td class="celda2" id='precio1'>$<?php echo $cuot[$d][10]; ?></td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
		  <td class="celda2" id='precio1'>&nbsp;</td>
          <td class="celda2" id='precio1'>$<?php
		  
		  		   if (date('m') >= 10){
		   $tot1= $cuot[$d][10];
		   
		   }else{
		   $tot1= 0;
		   }
		  
		   echo $tot1; 
		   
		   
		   
		   ?></td>
    <td class="celda2" id='precio1'>$<?php echo $pag[$d][10]; ?></td>
    <td class="celda2" id='precio1'><?php 
	
	
	 if (date('m') >= 10){
	echo mascara1($tot1-$pag[$d][10]);
	}else{
	echo "$0";
	
	}
	 ?><?php
//$totrestan="";
$j=0;

$mue= $tot1-$pag[$d][10];
//echo $mue;
$debe[$d][10]=$mue;

if($mue>=0){
$totrestan[$d][$j]['fecha']='10-'.$d;
$totrestan[$d][$j]['precio']=$mue;
$j++;
} 

	
	?></td>
  </tr>
  <tr>
    <td class="celda1">Noviembre</td>
    <td class="celda1" id='precio1'>$<?php echo $cuot[$d][11]; ?></td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
		  <td class="celda1" id='precio1'>&nbsp;</td>
          <td class="celda1" id='precio1'>$<?php
		  
		   
		  
		   if (date('m') >= 11){
		   $tot1= $cuot[$d][11];
		   
		   }else{
		   $tot1= 0;
		   }
		   
		    echo $tot1;
		    ?></td>
    <td class="celda1" id='precio1'>$<?php echo $pag[$d][11]; ?></td>
    <td class="celda1" id='precio1'><?php 
	
	 if (date('m') >= 11){
	echo mascara1($tot1-$pag[$d][11]);
	}else{
	 echo "$0";
	}
	
	 ?>
	<?php
//$totrestan="";
$j=0;

$mue= $tot1-$pag[$d][11];
//echo $mue;
$debe[$d][11]=$mue;

if($mue>=0){
$totrestan[$d][$j]['fecha']='11-'.$d;
$totrestan[$d][$j]['precio']=$mue;
$j++;
} 

	
	?></td>
  </tr>
  <tr>
    <td class="celda2">Diciembre</td>
    <td class="celda2" id='precio1'>$<?php echo $cuot[$d][12]; ?></td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
		  <td class="celda2" id='precio1'>&nbsp;</td>
          <td class="celda2" id='precio1'>$<?php
		  
		  		  
		   if (date('m') >= 12){
		   $tot1= $cuot[$d][12];
		   
		   }else{
		   $tot1= 0;
		   }
		   
		    echo $tot1;
		  
		  ?></td>
    <td class="celda2" id='precio1'>$<?php echo $pag[$d][12]; ?></td>
    <td class="celda2" id='precio1'><?php
	
	
	if (date('m') >= 12){
	echo mascara1($tot1-$pag[$d][12]);
	}else{
	 echo "$0";
	}
	
	
	
	 //echo $pag[12]; ?><?php
//$totrestan="";
$j=0;

$mue= $tot1-$pag[$d][12];
echo $mue;

$debe[$d][12]=$mue;

if($mue>=0){
$totrestan[$d][$j]['fecha']='12-'.$d;
$totrestan[$d][$j]['precio']=$mue;
$j++;
} 

	
	?></td>
  </tr>
  <tr>
    <td class="celda1">TOTAL</td>
    <td class="celda1">&nbsp;</td>
    <td class="celda1">&nbsp;</td>
    <td class="celda1">&nbsp;</td>
    <td class="celda1">&nbsp;</td>
		  <td class="celda1" id='precio1'>&nbsp;</td>
          <td class="celda1">&nbsp;</td>
    <td class="celda1">&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
  </tr>
</table>


<?php } 

//print_r($debe);?>


</div>



<script language="javascript">







//alert(items[0][0]); // 1

//alert("log2");

var debe=new Array(3);

var d = new Date();
var n = d.getFullYear(); 

var m=parseInt(n);

//alert(n);

var h=m+5;


for (i = 2012; i < parseInt(h); i++){
debe[i]=new Array(3);
}

//debe[2013][3]="contenido 3";  
<?php 

 for ($d = 2012; $d <= date("Y")+5; $d++) {  ?>
debe[<?php echo $d; ?>][3]="<?php echo number_format($debe[$d][3],2); ?>";
debe[<?php echo $d; ?>][4]="<?php echo number_format($debe[$d][4],2); ?>";
debe[<?php echo $d; ?>][5]="<?php echo number_format($debe[$d][5],2); ?>";
debe[<?php echo $d; ?>][6]="<?php echo number_format($debe[$d][6],2); ?>";
debe[<?php echo $d; ?>][7]="<?php echo number_format($debe[$d][7],2); ?>";
debe[<?php echo $d; ?>][8]="<?php echo number_format($debe[$d][8],2); ?>";
debe[<?php echo $d; ?>][9]="<?php echo number_format($debe[$d][9],2); ?>";
debe[<?php echo $d; ?>][10]="<?php echo number_format($debe[$d][10],2); ?>";
debe[<?php echo $d; ?>][11]="<?php echo number_format($debe[$d][11],2); ?>";
debe[<?php echo $d; ?>][12]="<?php echo number_format($debe[$d][12],2); ?>";
<?php }  ?>


//console.log("lal"+debe);


console.log("cuota2013"+debe[2013][3]);

</script>





<div  class="formulario10"  style="background-color:#95FF95;"> 

<strong>FORMULARIO DE PAGOS</strong>




<p>








   



<form id="form2"  onsubmit="return validacion()" name="form2" method="post" action="?op=3&idf=<?php echo $_GET['idf']; ?>&id=<?php echo $_GET['id']; ?>&t=<?php echo $_GET['t']; ?>&f=<?php echo $_GET['f']; ?>&m=<?php echo $_GET['m'];?>&y=<?php echo $_GET['y'];?>">






<div id="pepe"></div>


    <input id='theButton' type='button' value='+'>Agregar mas pagos.



<p>
<table border="0" cellpadding="0" cellspacing="0" >
  <tr>
    <td>
	
	<!--
<div class="newpago" id="ww1" >

 <p>
   <input name="idalumno" type="hidden" value="1" />
   Cuota:<br>
   <select name="idcuota1" id="idcuota1">
     <option value="16">MARZO - 350</option>
     <option value="17">ABRIL - 350</option>
   </select>
          <br>
   <br>
   <label> Asignado a cuota:
   <input name="asignadofecha1" type="text" id="asignadofecha1" value="<?php //echo date("d-m-Y h:i:s"); ?>" />
   </label>
 </p>
 <p>Monto:<br>
   <input name="precio1"  type="text" />
   
   
   
   
 </p>
 <div  class="espacio1"></div>
							
							
							
								  <label>
      Fecha de pago:</label> <br />
      <input name="fecha1" id="fecha1" type="text" value="<?php //echo date("d-m-Y H:i:s");  ?>" />
      <div id="cartel2" style="display:none;" class="cartel1">Este campo es requerido.</div>
      <div id="cartel4" style="display:none;" class="cartel1">Este campo debe ser una fecha valida.</div>	
	  
	  		
</div>
		
		
					

	  
	  
	  
     </td>
    </tr>
	
	  <tr>
    <td> -->
	
	<!--
      <label>Precio: </label><br />
          <input name="precio" type="text" id="precio" value=""  onkeyup="return soloDinero(this, event);" onkeypress="return solonumero(this, event);" /> -->
		  
		  <!-- onkeydown="return soloDinero(this, event);" -->
          <!-- onkeydown="return soloDinero(this, event);" 
      <div id="cartel1" style="display:none;" class="cartel1">Este campo permite solo números.</div>
	  <div id="cartel3" style="display:none;" class="cartel1">Este campo es requerido.</div>	
	  
        </td>
    </tr>
	  <tr>
    <td>

	<div class="espacio1"></div>
	
	
	
					
		
		
		
	
	
	<a href="javascript:showDiv()"> Aregar mas pagos cuota</a><p>-->
	
	
	







<script language="javascript">
var a = 1;
function showDiv() {
	a=a+1
	//alert(a);
   document.getElementById('ww'+a).style.display = "";
   document.getElementById('a').value = a;
   document.getElementById('status').value = a+";" +document.getElementById('status').value;
}
function hideDiv(a) {
	//a=a+1
	//alert(a);
   document.getElementById('ww'+a).style.display = "none";
   
   cadena =  document.getElementById('status').value;
   document.getElementById('status').value = cadena.replace(a+";",""); 
}
function hideDiv1(a) {
	//a=a+1
	//alert(a);
   document.getElementById('v'+a).style.display = "none";
   
   cadena =  document.getElementById('status').value;
   document.getElementById('status').value = cadena.replace(a+";",""); 
}
</script>


        <label>
        <input type="hidden" name="a" id="a" value="1" />
        </label>
	<p>
	  <input type="hidden" name="status" id="status" value="" />

	</td>
    </tr>
	  <tr>
    <td>
      <input type="submit" name="boton_P_g" value="Guardar"  />
     </td>
    </tr>
</table>
</form>

</div>

<script>
 function mifun(a) {
 
 var myCars=debe;  
 /*
myCars['01']="122";
myCars['02']="500";
myCars['03']="455";
myCars['04']="0";
myCars['05']="0";
myCars['06']="600";
myCars['07']="400";
myCars['08']="350";
myCars['09']="470";
myCars['10']="450";
myCars['11']="500";
myCars['12']="200";
*/
 
 
	 //alert("a"+a);
	document.getElementById('asignadofecha'+a).value ="01-"+document.getElementById('mes'+a).value+"-"+document.getElementById('ano'+a).value+ " 06:55:55";
	ss=document.getElementById('mes'+a).value;
	sm=document.getElementById('ano'+a).value;
	
	if (myCars[sm][ss]==undefined){
		document.getElementById('monto'+a).innerHTML = 0;
	document.getElementById('monto_'+a).value = 0;
	}else{
	//alert(myCars[sm][ss]);
	
	
		document.getElementById('monto'+a).innerHTML = "$"+myCars[sm][ss];
	document.getElementById('monto_'+a).value = myCars[sm][ss];
	}

 }

</script>












  <?php 
  $año="";
  for ($i = 2012; $i <= date("Y")+5; $i++) { 
  if ($_GET['y'] == $i){$sel= "selected='selected'";}else{$sel= "";}
  	$año=$año."<option value='".$i."' ".$sel.">".$i."</option>";
  }
  //echo $año;
  
   ?>

  
  
  

	<script>
jQuery(function($) {
  fechapago='<?php echo date("d-m-Y H:i:s"); ?>';
  a=0;
  addAnotherTextBox();
  $('#theButton').click(addAnotherTextBox);
  
  function addAnotherTextBox() {
  
  a=a+1;
  document.getElementById('status').value = a+";" +document.getElementById('status').value;
  
  
  if(a==1){
  jijiji="";
  }else{
  jijiji="<a href='javascript:hideDiv1("+a+")'>X</a>";
  }
  
  
  
    $("#pepe").append("<div class='newpago' id='v"+a+"'>"+jijiji+" Asignar a cuota: <br> <select id='mes"+a+"' name='mes"+a+"' onchange='javascript:mifun("+a+")'><option value='1'>Enero</option><option value='2'>Febrero</option><option value='3'>Marzo</option> <option value='4'>Abril</option> <option value='5'>Mayo</option><option value='6'>Junio</option><option value='7'>Julio</option><option value='8'>Agosto</option><option value='9'>Septiembre</option><option value='10'>Octubre</option><option value='11'>Noviembre</option><option value='12'>Diciembre</option></select>  <select  id='ano"+a+"' name='ano"+a+"' onchange='javascript:mifun("+a+")'><?php echo $año; ?></select> <input name='asignadofecha"+a+"'  id='asignadofecha"+a+"' type='hidden' value='01-01-<?php echo date("Y"); ?> 06:55:55' /> <div id='cartel94_"+a+"' style='display:none;' class='cartel1'>No se puede guardar porque ya tienes seleccionado esta fecha.</div>  <br><div style='float:left;'>Monto: </div><div id='monto"+a+"'> 200</div><input type='hidden' id='monto_"+a+"' value='200' /><input type='text' id='precio__"+a+"' name='precio__"+a+"' onkeyup='return soloDinero(this, event);' onkeypress='return solonumero(this, event);'><div id='cartel1' style='display:none;' class='cartel1'>Este campo permite solo números.</div><div id='cartel22_"+a+"' style='display:none;' class='cartel1'>No se puede guardar porque la cuota ya esta paga.</div><div id='cartel3_"+a+"' style='display:none;' class='cartel1'>Este campo es requerido.</div><div id='cartel7_"+a+"' style='display:none;' class='cartel1'>El monto es mayor que la deuda.</div><br>Fecha de pago:<br><input type='text' id='fecha"+a+"' name='fecha"+a+"' value='"+fechapago+"'><div id='cartel2' style='display:none;' class='cartel1'>Este campo es requerido.</div><div id='cartel4_"+a+"' style='display:none;' class='cartel1'>Este campo debe ser una fecha valida.</div>	</div>");
	
	mifun(a);
  }
  
});
</script>

<?php 
}









 }
?>









 <?php 
 
function opeditpag(){


 if ($_GET['n']==2){ ?>
<!-- modificar aqui -->
	
	<?php
		  if (!isset($_POST['Submit4'])){ 
		  
		  
		  //echo "modificar formulario";
		  
		  
	
	  
	   /*
	  
	   if( $_SERVER['SERVER_NAME'] == "localhost"){
	  
	 
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;



 //TABLA prueba
$tablename="pagos";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE id='".$_GET['m']."' ORDER BY id DESC";
$query="SELECT * FROM $tablename $filtro;";

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
	$busqueda[$a]["idalumno"]=$fila["idalumno"];
	$busqueda[$a]["precio"]=$fila["precio"];
	$busqueda[$a]["fecha"]=$fila["fecha"];
	$busqueda[$a]["idf"]=$fila["idf"];
	//$busqueda[$a]["email"]=$fila["email"];
	//$pagos[$a]["fecha"]=$fila["fecha"];	
	//$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

//print_r($busqueda);
?>
	  
	
 



<?php 

/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;
$filtro="WHERE idf=".$_GET['idf']." ";


$tablename="alumnos";
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
	$filter[$a]["apellido"]=$fila["apellido"];	
	$filter[$a]["nombre"]=$fila["nombre"];		
	$filter[$a]["dni"]=$fila["dni"];
	$filter[$a]["idf"]=$fila["idf"];				
	$a++;
}

mysql_free_result($resultado);
//print_r($filter);
?>



<?php function relacionar($id,$t){
/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;
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
	//$filter[$a]["apellido"]=$fila["apellido"];	
	$filter[$a]["nombre"]=$fila["nombre"];		
	//$filter[$a]["dni"]=$fila["dni"];
	//$filter[$a]["idf"]=$fila["idf"];				
	$a++;
}

mysql_free_result($resultado);
//print_r($filter);

echo  $filter[1]["nombre"];

 }
 
 
 
 
 
  function relacionar2($id,$t){
/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;
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
	$filter[$a]["apellido"]=$fila["apellido"];	
	$filter[$a]["nombre"]=$fila["nombre"];		
	//$filter[$a]["dni"]=$fila["dni"];
	//$filter[$a]["idf"]=$fila["idf"];				
	$a++;
}

mysql_free_result($resultado);
//print_r($filter);

echo  $filter[1]["nombre"].", ".$filter[1]["apellido"];

 }
 ?>
 
 
 
<script>






function validacion() {
estatus=true;

//alert("sadas");
valor = document.getElementById("precio").value;
valor1 = document.getElementById("fecha").value;
//alert(valor1);

/*
	if( isNaN(valor) ) {
	alert("numerico");
	document.getElementById('cartel1').style.display = '';
	  estatus=false;
	}else{
	document.getElementById('cartel1').style.display = 'none';
	}
	*/
	//fecha
   if( valor1 == null || valor1 == "" || valor1.length == 0 || /^\s+$/.test(valor1) ) {
  //alert("obligatorio");
  estatus=false;
  document.getElementById('cartel2').style.display = '';
}else{
	document.getElementById('cartel2').style.display = 'none';
	}
  //...
if( valor == null || valor == "" || /^\s+$/.test(valor) ) {
	//alert("obligatorio");
	estatus=false;
	document.getElementById('cartel3').style.display = '';
}else{
	document.getElementById('cartel3').style.display = 'none';
}
format2=valor1.split(" ");
//alert(format2[0]);














 var cadena = valor1;
var coincidencias = cadena.match(/-/g); //Busca todas las 'e'
var numcars = coincidencias ? coincidencias.length : 0;
//alert("lalalal"+numcars); //Muestra 1
sepfecha=numcars;
//alert(sepfecha);

var coincidencias = cadena.match(/:/g); //Busca todas las 'e'
var numcars = coincidencias ? coincidencias.length : 0;
//alert("lalalal"+numcars); //Muestra 1
sephora=numcars;
//alert(sephora);

var coincidencias = cadena.match(/ /g); //Busca todas las 'e'
var numcars = coincidencias ? coincidencias.length : 0;
//alert("lalalal"+numcars); //Muestra 1
sepespacio=numcars;
//alert(sephora);


if(sepfecha==2 && sephora==2 && sepespacio==1){
//alert("sale bien")




fecha=format2[0].split("-");
hora=format2[1].split(":");
//alert(fecha[0]+fecha[1]+fecha[2]);
var ano = fecha[2];
var mes = fecha[1];
var dia = fecha[0];
 //alert(ano+mes+dia);



var horas=hora[0];
var minuto=hora[1];
var segundos=hora[2];
 //alert(horas+minuto+segundos);
 
 if(segundos==""){
 segundos="//";
 }
 
 
var txt = segundos;
variablee=txt.length;

 if(variablee>2){
 segundos="//";
 //alert("saaaaa");
 }
 
 
  if(minuto==""){
 segundos="//";
 }
 
 
var txt = minuto;
variablee=txt.length;

 if(variablee>2){
 minuto="//";
 //alert("saaaaa");
 }
 
  if(horas==""){
 segundos="//";
 }
 
 
var txt = horas;
variablee=txt.length;

 if(variablee>2){
 horas="//";
 //alert("saaaaa");
 }
 
 
  if(ano==""){
 segundos="//";
 }
 
 
var txt = ano;
variablee=txt.length;

//alert(variablee+ano);

 if(variablee>4){
 ano="//";
// alert("saaaaa");
 }
 
 
  if(mes==""){
 segundos="//";
 }
 
 
var txt = mes;
variablee=txt.length;

 if(variablee>2){
 mes="//";
 //alert("saaaaa");
 }



 if(dia==""){
 segundos="//";
 }
 
 
var txt = dia;
variablee=txt.length;

 if(variablee>2){
 dia="//";
 //alert("saaaaa");
 }
 
 
 }else{
dia="//";
//alert("salemal");
}

 

 
valor = new Date(ano, mes, dia, horas, minuto, segundos);
//alert(valor);





 
if(isNaN(valor) ) {
  estatus=false;
  document.getElementById('cartel10').style.display = '';
}else{
	document.getElementById('cartel10').style.display = 'none';
}
/*
 if(horas == "" || horas == null  || minuto == "" || minuto == null || segundos == null || segundos == ""  ) {
   estatus=false;
  document.getElementById('cartel4').style.display = '';
 }else{
	document.getElementById('cartel4').style.display = 'none';
}
*/
 
  // Si el script ha llegado a este punto, todas las condiciones
  // se han cumplido, por lo que se devuelve el valor true
  //alert(estatus);
  return estatus;//true estatus
}










    












/*
 var objeto2;     

 

  function soloDinero(objeto, e){

  estatus=true;

            var keynum

            var keychar

           var numcheck

    

          if(window.event){ 

            keynum = e.keyCode

          }

  

          else if(e.which){

            keynum = e.which

             }

   

         

   

            if((keynum>=35 && keynum<=37) ||keynum==8||keynum==9||keynum==46||keynum==39) {

               estatus=true;

           }

  

          if(keynum==190||keynum==110||(keynum>=95&&keynum<=105)||(keynum>=48&&keynum<=57)){

  

            posicion = objeto.value.indexOf('.');

  

           if(posicion==-1) {

               estatus=true;

            }else {                           

            if(!(keynum==190||keynum==110)){

                objeto2=objeto;

               t = setTimeout('dosDecimales()',150);

             estatus=true;

           }else{

              objeto2=null;

                estatus=false;

            }

          }

         }else {

        estatus=false;

     }
	 
	 //alert(estatus);
	 return estatus;

    }

*/


/*
function dosDecimales(){    

  

        var objeto = objeto2;

     var posicion = objeto.value.indexOf('.');

        var decimal = 2;

  

      if(objeto.value.length - posicion < decimal){

        objeto.value = objeto.value.substr(0,objeto.value.length-1);                                        

      }else {

       objeto.value = objeto.value.substr(0,posicion+decimal+1);                                            

      }

       return;

    }

*/



var objeto2;     

 

  function soloDinero(objeto, e){

  estatus=true;

            var keynum

            var keychar

           var numcheck

    

          if(window.event){ /*/ IE*/

            keynum = e.keyCode

          }

  

          else if(e.which){ /*/ Netscape/Firefox/Opera/*/

            keynum = e.which

             }

   


          if((keynum>=35 && keynum<=37)||keynum==9||keynum==46||keynum==39) {

               estatus=true;

           }
		   

            /*if(keynum==8){
		 //estatus=true;
		alert("see");
		 objeto2=null;
		 estatus=false;
		 }   */
   


          if(keynum==190||keynum==110||(keynum>=95&&keynum<=105)||(keynum>=48&&keynum<=57)){

 

            posicion = objeto.value.indexOf('.');
			



           if(posicion==-1) {

               estatus=true;
			   
 

			   
			   	//alert(formatNumber.new(objeto.value));
				//objeto2=formatNumber.new(objeto.value);
				

	
				document.getElementById("precio").value=formatNumber.new(objeto.value);
				
							

		 

            }else {         
			
              



            if(!(keynum==190||keynum==110)){



              objeto2=objeto;
			//document.getElementById("precio").value=formatNumber.new(objeto.value);
document.getElementById("precio").value=formatNumber.new(objeto.value);
               t = setTimeout('dosDecimales()',0);

             estatus=true;

           }else{




              objeto2=null;

                estatus=false;
				}

          
			
		
			

          }
		  
		  

		  

         }else {

    
        estatus=false;

     }
	 /*
	 		  if (keynum==8) {
alert("see");

estatus= false;
}*/
	 //alert(formatNumber.new(objeto.value));
	 //alert(estatus);
	 return estatus;

    }



function dosDecimales(){    

  

        var objeto = objeto2;

     var posicion = objeto.value.indexOf('.');

        var decimal = 2;

  

      if(objeto.value.length - posicion < decimal){

        objeto.value = objeto.value.substr(0,objeto.value.length-1);                                        

      }else {

       objeto.value = objeto.value.substr(0,posicion+decimal+1);                                            

      }

       return;

    }
	
	
	 function solonumero(objeto, e){
	 
	/* 
//alert("dasd");
var str = objeto.value;

var n = str.split("."); 

if(str.indexOf('.') != -1){
//var n = replaceAll(n[1],".","")
//alert(n[0]+n);
//alert("seeee");
}else{
//alert(str);
}

*/







  var keynum

            var keychar

           var numcheck

    

          if(window.event){ /*/ IE*/

            keynum = e.keyCode

          }

  

          else if(e.which){ /*/ Netscape/Firefox/Opera/*/

            keynum = e.which

             }
			 
			 
			 
			 
			 
			 
			 

			 
			 
			 
			 
			 
			 //alert(keynum);
			 
	 if (keynum > 31 && (keynum < 46 || keynum > 57)) {
return false;
}		


 		
			 valor=objeto.value;
  //var key = window.event ? e.keyCode : e.which;
    var keychar = String.fromCharCode(keynum);
    if (valor.indexOf(".")!=-1 && keychar=="."){
    	return false;
  	}else{
    	return true;
  	}

			 
			
			 
			 
 }

	
	
	function replaceAll( text, busca, reemplaza ){
	  while (text.toString().indexOf(busca) != -1)
	      text = text.toString().replace(busca,reemplaza);
	  return text;
	}




var formatNumber = {
separador: ",", // separador para los miles
sepDecimal: '.', // separador para los decimales
formatear:function (num){
var str=num;
n=replaceAll(str, ",", "" )
num=n;
//alert(num);
num +='';
var splitStr = num.split('.');
var splitLeft = splitStr[0];
var splitRight = splitStr.length > 1 ? this.sepDecimal + splitStr[1] : '';
var regx = /(\d+)(\d{3})/;
while (regx.test(splitLeft)) {
splitLeft = splitLeft.replace(regx, '$1' + this.separador + '$2');
}
return this.simbol + splitLeft  +splitRight;
},
new:function(num, simbol){
this.simbol = simbol ||'';
return this.formatear(num);
}
}



function validacion1(){

valor = document.getElementById("precio").value;

if( isNaN(valor) ) {
	document.getElementById('cartel1').style.display = '';
  return false;
}
/*
alert("lalal");
return false;*/
}

</script> 
	
	
	
<form id="form2" name="form2" method="post" onsubmit="return validacion()">
  
  <div  class="formulario10" >

<strong>MODIFICAR FORMULARIO DE PAGOS</strong>

<p>
  
  <table width="100%" border="0" cellpadding="0" cellspacing="0" >
    <tr>
      <td>
	  
 
      <label>Alumno:</label><br />
    <select name="idalumno" id="idalumno" class="mayuss">
	 <option value="<?php echo $busqueda[1]["idalumno"]; ?>"><?php relacionar2($busqueda[1]["idalumno"],"alumnos"); ?></option>
	<?php for ($i = 1; $i <= count($filter); $i++) {
	?>
	<?php if ($filter[$i]["id"]==$busqueda[1]["idalumno"]){}else{ ?>
    <option value="<?php echo $filter[$i]["id"]; ?>"><?php echo $filter[$i]["nombre"].", ".$filter[$i]["apellido"];  ?></option>
	<?php }}?>
      </select>
	  <div  class="espacio1"></div>
	  </td>
    </tr>
    <tr>
      <td>  <label>
    Precio:<br />
    <input name="precio" type="text" id="precio" onkeyup="return soloDinero(this, event);" onkeypress="return solonumero(this, event);" value="<?php echo number_format($busqueda[1]["precio"], 2); ?>"  />
    </label>
  <div id="cartel3" style="display:none;" class="cartel1">Este campo es requerido.</div>

<div class="espacio1"></div>

</td>
    </tr>
    <tr>
      <td>
    <label>
    Fecha:<br />
    <input name="fecha" type="text" id="fecha" value="<?php echo $busqueda[1]["fecha"]; ?>" />
    </label>
  <div id="cartel2" style="display:none;" class="cartel1">Este campo es requerido.</div>
	  <div id="cartel10" style="display:none;" class="cartel1">Este campo debe ser una fecha valida.</div>

<div class="espacio1"></div>
</td>
    </tr>
    <tr>
      <td>   


    <input type="submit" name="Submit4" value="GUARDAR" />

</td>
    </tr>
  </table>

  </div>

</form>

<?php		  
		  
		  
		  
		  
		  
		  
	 }else{
	 //echo "guardar modificar";
	 

  
  /*
  if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;
  
  
  
      $date= date_create($_POST['fecha']); //date_create();
    
 
 
 
	$fecha=date_format($date, 'd-m-Y H:i:s');
	//echo $fecha;
	$precio = str_replace(",", "",$_POST['precio']);// filtrar sacar comas
	//echo $precio;




$tablename="pagos";
$query="UPDATE $tablename SET precio='".$precio."', idalumno='".$_POST['idalumno']."', fecha='".$fecha."' WHERE id=".$_GET['m']." ;";
//echo $query;
//$result=mysql_db_query ($dbname, $query, $link);




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

//mysql_free_result($resultado);

  ?>
  

  	<script language="JavaScript" type="text/javascript">
var pagina="?op=2&idf=<?php echo $_GET['idf']; ?>&id=<?php echo $_GET['id']; ?>&t=<?php echo $_GET['t']; ?>&f=<?php echo $_GET['f']; ?>"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>
	
	  <?php 
	 
	 
	 }
} 










 if ($_GET['n']==3){ ?>
	<!-- eliminar -->
	
	
	<?php 
	//PRIMERO ES CONSULTAR SEGUN SU ID, QUE PAGOS CONTIENE EL RECIBO.
	//UNA VEZ QUE TENGO LOS PAGOS, LOS BORRO.
	//BORRO EL RECIBO.
	
	
	$idspagos="";
	
	global $host, $user,$password, $dbname,$link;



$filtro="WHERE id=".$_GET['e']." ";


$tablename="recibos";
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
	//$filter[$a]["id"]=$fila["id"];
	//$filter[$a]["idpagocuota"]=$fila["idpagocuota"];
	$idspagos=$fila["idpagocuota"].";".	$idspagos;		
	$a++;
}

mysql_free_result($resultado);
//print_r($filter);
	
	//echo ($idspagos);
	$idspagos=explode(";",$idspagos);
	
	
	
	
	for ($i = 0; $i <= count($idspagos)-2; $i++) {
	
	global $host, $user,$password, $dbname,$link;


$tablename="pagos";
$filtro=" ";
$query="DELETE FROM $tablename WHERE id='".$idspagos[$i]."';";
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

//mysql_free_result($resultado);
	
	}







global $host, $user,$password, $dbname,$link;


$tablename="recibos";
$filtro=" ";
$query="DELETE FROM $tablename WHERE id='".$_GET['e']."';";
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

//mysql_free_result($resultado);

?>

	<script language="JavaScript" type="text/javascript">
var pagina="?op=2&idf=<?php echo $_GET['idf']; ?>&id=<?php echo $_GET['id']; ?>&t=<?php echo $_GET['t']; ?>&f=<?php echo $_GET['f']; ?>&m=<?php echo $_GET['m']; ?>&y=<?php echo $_GET['y']; ?>"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>
	
	
	
	<?php }
	



}
 
 

function op12(){?>
<?php 
if (isset($_POST['boton_P_g'])){

	$fecha=$_POST['fecha'];
	$precio=$_POST['precio'];


/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;


	//TABLA OFERTAS
	$tablename="descuentos";
	//$filtro="WHERE dni='".$dni."'";
	$query="INSERT INTO $tablename (fecha, precio,idalumno) VALUES ('".$fecha."','".$precio."','".$_POST['idalumno']."');";
	//echo $q
	mysql_select_db($dbname,$link);
	mysql_query($query,$link);
	$my_error = mysql_error($link);
	if(!empty($my_error)) {
	//cartel(3,"Hubo un error al insertar el registro. $my_error"); 
	echo "Hubo un error al insertar el registro. $my_error";
	} else {
	//echo "SEEEEEEEEEEEEEE";
	//echo cartel(3,"SSEEEEEEEEE");
	}
	?>
	
	<script language="JavaScript" type="text/javascript">

var pagina="?op=11&idf=<?php echo $_GET['idf']; ?>&id=<?php echo $_GET['id']; ?>&t=<?php echo $_GET['t']; ?>"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>
                      
<?php 	
}else{
?>




<?php 

/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;



$filtro="WHERE idf=".$_GET['idf']." ";


$tablename="alumnos";
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
	$filter[$a]["apellido"]=$fila["apellido"];	
	$filter[$a]["nombre"]=$fila["nombre"];		
	$filter[$a]["dni"]=$fila["dni"];
	$filter[$a]["idf"]=$fila["idf"];				
	$a++;
}

mysql_free_result($resultado);
//print_r($filter);
?>






<script>






function validacion() {
estatus=true;

precio = document.getElementById("precio").value;
fecha = document.getElementById("fecha").value;
//alert(valor);

if( precio == null || precio == "" || /^\s+$/.test(precio) ) {
//alert("obligatorio");
estatus=false;
document.getElementById('cartel1').style.display = '';
}else{
document.getElementById('cartel1').style.display = 'none';
}



if( fecha == null || fecha == "" || /^\s+$/.test(fecha) ) {
//alert("obligatorio");
estatus=false;
document.getElementById('cartel2').style.display = '';
}else{
document.getElementById('cartel2').style.display = 'none';
}






format2=fecha.split(" ");
//alert(format2[0]);

fecha=format2[0].split("-");
hora=format2[1].split(":");
//alert(fecha[0]+fecha[1]+fecha[2]);
var ano = fecha[0];
var mes = fecha[1];
var dia = fecha[2];

var horas=hora[0];
var minuto=hora[1];
var segundos=hora[2];
 //alert(horas+minuto+segundos);
valor = new Date(ano, mes, dia, horas, minuto, segundos);
//alert(valor);



 
if(isNaN(valor) ) {
  estatus=false;
  document.getElementById('cartel4').style.display = '';
}else{
	document.getElementById('cartel4').style.display = 'none';
}





  return estatus;//true
}










    













 var objeto2;     

 

  function soloDinero(objeto, e){

  estatus=true;

            var keynum

            var keychar

           var numcheck

    

          if(window.event){ /*/ IE*/

            keynum = e.keyCode

          }

  

          else if(e.which){ /*/ Netscape/Firefox/Opera/*/

            keynum = e.which

             }

   

         

   

            if((keynum>=35 && keynum<=37) ||keynum==8||keynum==9||keynum==46||keynum==39) {

               estatus=true;

           }

  

          if(keynum==190||keynum==110||(keynum>=95&&keynum<=105)||(keynum>=48&&keynum<=57)){

  

            posicion = objeto.value.indexOf('.');

  

           if(posicion==-1) {

               estatus=true;

            }else {                           

            if(!(keynum==190||keynum==110)){

                objeto2=objeto;

               t = setTimeout('dosDecimales()',0);

             estatus=true;

           }else{

              objeto2=null;

                estatus=false;

            }

          }

         }else {

        estatus=false;

     }
	 
	 //alert(estatus);
	 return estatus;

    }





function dosDecimales(){    



        var objeto = objeto2;

     var posicion = objeto.value.indexOf('.');

        var decimal = 2;

  

      if(objeto.value.length - posicion < decimal){

        objeto.value = objeto.value.substr(0,objeto.value.length-1);                                        

      }else {

       objeto.value = objeto.value.substr(0,posicion+decimal+1);                                            

      }

       return;

    }



function validacion1(){
/*
valor = document.getElementById("precio").value;
if( isNaN(valor) ) {
	document.getElementById('cartel1').style.display = '';
  return false;
}
*/

alert("lalal");
return false;
}

</script>




<div  class="formulario10" >

<strong>FORMULARIO DE DESCUENTOS</strong>

<p>
<form id="form2" name="form2" method="post" onsubmit="return validacion()" action="?op=12&idf=<?php echo $_GET['idf']; ?>&id=<?php echo $_GET['id']; ?>&t=<?php echo $_GET['t']; ?>">
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><label>Fecha de descuento:<br>
      <input name="fecha" id="fecha" type="text" value="<?php echo date("d-m-Y H:i:s");  ?>" />
	  	  <div id="cartel2" style="display:none;" class="cartel1">Este campo es requerido.</div>
	  <div id="cartel4" style="display:none;" class="cartel1">Este campo debe ser una fecha valida.</div>
	  
	  <div class="espacio1"></div>
    </label></td>
  </tr>
  <tr>
    <td><label>Alumno<br>
      <select name="idalumno" id="idalumno">
	<?php for ($i = 1; $i <= count($filter); $i++) {
	?>
    <option value="<?php echo $filter[$i]["id"]; ?>"><?php echo $filter[$i]["nombre"]."".$filter[$i]["apellido"];  ?></option>
	<?php }?>
      </select>
    </label>
	
		  <div class="espacio1"></div>
	</td>
  </tr>
  <tr>
    <td>Precio:<br>
	
	<input name="precio" type="text" id="precio" onkeydown="return soloDinero(this, event);" />
	
	<div id="cartel1" style="display:none;" class="cartel1">Este campo es requerido.</div>
	
	  <div class="espacio1"></div>
	</td>
  </tr>
  <tr>
    <td><label>
      <input type="submit" name="boton_P_g" value="Guardar" />
    </label></td>
  </tr>
</table>
</form>

</div>

<?php 
} }
?>










<?php 

function op5(){?>
<div class="submenu"><a href="?op=5"><img src="b_browse.png" />Listar Familias </a> &nbsp;|&nbsp; <a href="?op=7&amp;t=alumnos&amp;n=1"><img src="b_add.png" />Agregar Alumno </a> &nbsp;|&nbsp; <a href="?op=7&amp;t=padres&amp;n=1"><img src="b_add.png" /> Agregar Padre </a>&nbsp;|&nbsp;<a href="?op=7&amp;t=madres&amp;n=1"><img src="b_add.png" />Agregar Madre </a>&nbsp;|&nbsp;
<a href="?op=7&amp;t=familias&amp;n=1"><img src="b_add.png" />Agregar Familia </a>
</div>


<?php 
} 
?>

<?php 

function op6(){?>

<div class="submenu"><a href="?op=4">Agregar Familias </a></div>

<?php 
} 
?>

<?php 

function op7(){?>



<?php 


if (isset($_POST['recibos'])){?>



<div>



<?php recibos($_POST['id']);?>

	<script language="JavaScript" type="text/javascript">
/*
var pagina="?op=11&idf=<?php //echo $_GET['idf']; ?>&id=<?php //echo $_GET['id']; ?>&t=<?php //echo $_GET['t']; ?>"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);
*/

function redireccionar() 
{
window.print();
} 


redireccionar() 

</script>
 
 
 
 
 
 
 
 
 



















<?php }else{?>
<div class="contenido">
<?php if (isset($_POST['imprimir'])){?>
<?php 
/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");

*/

global $host, $user,$password, $dbname,$link;


 //TABLA prueba
$tablename="alumnos";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE curso='".$_POST['curso']."' ";
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
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$alumno[$a]["id"]=$fila["id"];
	$alumno[$a]["nombre"]=$fila["nombre"];	
	$alumno[$a]["apellido"]=$fila["apellido"];			
	$alumno[$a]["idf"]=$fila["idf"];
	$alumno[$a]["curso"]=$fila["curso"];
	$alumno[$a]["cuota"]=$fila["cuota"];			
	$a++;
}

mysql_free_result($resultado);

////////////////

//print_r($alumno);


//echo count($alumno);





















 
 
 
 
 
 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  







 
 
 
 
 



  function damemes($h){

$array = array(
    1 => "Enero",
    2 => "Febrero",
	3 => "Marzo",
	4 => "Abril",
	5 => "Mayo",
	6 => "Junio",
	7 => "Julio",
	8 => "Agosto",
	9 => "Septiembre",
	10 => "Octubre",
	11 => "Noviembre",
	12 => "Diciembre",
);

$h=intval($h);

return $array[$h];
}
  
  
  
  
  
  
  
  
  
  
  

  
  
  
  
  
  
  
  
  
function relacionarcurso($id,$t){
/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;
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

 }
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

	  function averff1($idalumno){	
/*
//echo $idalumno;
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/
global $host, $user,$password, $dbname,$link;


			   //TABLA prueba
$tablename="pagos";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE idalumno='".$idalumno."'";
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
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["fecha"]=$fila["fecha"];	
	$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

//print_r($pagos);
////////////////
			   $total = 0;
			   //aqui emepzaba el probelam.
			   if (isset($pagos)){
			   for ($i = 1; $i <= count($pagos); $i++) {
			   $total=$total+$pagos[$i]["precio"];
			   }
			   
			   }else{
			   $pagos=0;
			   }
			   return $total;
			   
			   
			   

}
?>




 <?php
	  function averffISA($idf,$mes){	
	  
	  
	  			   //if ($idcuota==0){
			   //$total=0;
			   //}else{
/*
//echo $idalumno;
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/
global $host, $user,$password, $dbname,$link;


			   //TABLA prueba
$tablename="pagos";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE idf='".$idf."' AND month(asignadofecha)='$mes' AND year(asignadofecha)='".$_GET['y']."' ";//AND year(fecha)='2013' AND month(fecha)='$mes'
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
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["fecha"]=$fila["fecha"];	
	$pagos[$a]["precio"]=$fila["precio"];
	$pagos[$a]["idcuota"]=$fila["idcuota"];	
	$pagos[$a]["asignadofecha"]="///";						
	$a++;
}

mysql_free_result($resultado);

//print_r($pagos);
////////////////
			   $total = 0;
			   //aqui emepzaba el probelam.

				   if (isset($pagos)){
				  for ($i = 1; $i <= count($pagos); $i++) {
				   $total=$total+$pagos[$i]["precio"];
				   }
				   
				   }else{
				   $pagos=0;
				   }
		
		
		//}
			   return $total;
			   
			   
			   

}

  ?>
  
  
  <?php function relacionar50($id,$t){
/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/
global $host, $user,$password, $dbname,$link;


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
	$filter[$a]["apellido"]=$fila["apellido"];	
	$filter[$a]["nombre"]=$fila["nombre"];		
	$filter[$a]["dni"]=$fila["dni"];
	$filter[$a]["idf"]=$fila["idf"];				
	$a++;
}

mysql_free_result($resultado);
//print_r($filter);

echo  $filter[1]["nombre"]." ".$filter[1]["apellido"];

 }?>
<?php 

function getisa1(){
$var="";
foreach($_GET as $k => $v) {
    // Reject items not starting with prefix
	if($k=="p" or $k=="f" or $k=="m"){}else{
$var=$var.$k."=".$v."&";
}
}

echo $var;
}

?>


<?php //echo $filter[$_GET['f']]["id"];



function getisa2(){
$var="";
foreach($_GET as $k => $v) {
    // Reject items not starting with prefix
	if($k=="f" or $k=="y"){}else{
		$var=$var.$k."=".$v."&";
		}
}
echo $var;
}


  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  //echo count($alumno);
  
  
  //echo $rere;
  
  
  $vacio=false;
  if (!isset($alumno)){$vacio=true;}else{
 for ($dd = 1; $dd <= count($alumno); $dd++) {
 
 $estup=$dd;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
   
  
  


global $host, $user,$password, $dbname,$link;











$filtro="WHERE idf=".$alumno[$estup]["idf"]." ";


$tablename="alumnos";
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
	$filter1[$a]["id"]=$fila["id"];
	$filter1[$a]["apellido"]=$fila["apellido"];	
	$filter1[$a]["nombre"]=$fila["nombre"];		
	$filter1[$a]["dni"]=$fila["dni"];
	$filter1[$a]["idf"]=$fila["idf"];	
	$filter1[$a]["cuota"]=$fila["cuota"];		
	$filter1[$a]["fecha_inscrip_inicio"]=$fila["fecha_inscrip_inicio"];	
	$filter1[$a]["fecha_inscrip_fin"]=$fila["fecha_inscrip_fin"];			
	$a++;
}

mysql_free_result($resultado);
//print_r($filter1);








			   //TABLA prueba
$tablename="pagos";
//$filtro=" ORDER BY id LIMIT 20,10";
$fechj=date("Y")-1;
$filtro="WHERE idf='".$alumno[$estup]["idf"]."' AND year(asignadofecha) BETWEEN '2012' AND '$fechj' ";//AND year(fecha)='2013' AND month(fecha)='$mes'
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
//$pagos=0;
$totprecio=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["fecha"]=$fila["fecha"];	
	$pagos[$a]["precio"]=$fila["precio"];
	$totprecio=$totprecio+$fila["precio"];
	$pagos[$a]["idcuota"]=$fila["idcuota"];	
	$pagos[$a]["asignadofecha"]="///";						
	$a++;
}

mysql_free_result($resultado);

//echo "TOTPRECIO:".$totprecio;
//print_r($pagos);











//print_r($filter1);
$totcuota=0;
	for ($i = 1; $i <= count($filter1); $i++) {		  

			   //TABLA prueba
$tablename="cuotas";
//$filtro=" ORDER BY id LIMIT 20,10";
$fechj=date("Y")-1;
$filtro="WHERE cuota='".$filter1[$i]["cuota"]."'  AND year(fecha) BETWEEN '2012' AND '$fechj' ";

//$filtro="WHERE idf='".$_GET['idf']."' AND year(asignadofecha) BETWEEN '2012' AND '$fechj' ";
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
//$pagos=0;
$cuota="";


while ($fila = mysql_fetch_assoc($resultado)) {

$date0 = new DateTime("0000-00-00");
$date1 = new DateTime($fila["fecha"]);
$date2 = new DateTime($filter1[$i]["fecha_inscrip_inicio"]);
$date3 = new DateTime($filter1[$i]["fecha_inscrip_fin"]);
//echo $filter1[$i]["fecha_inscrip_fin"] ."<br>";

if($filter1[$i]["fecha_inscrip_fin"]=="0000-00-00"){
$comparar="no";
}else{

$comparar="si";}
//echo $comparar;
if($comparar=="si"){
//echo "echo;".$filter1[$i]["fecha_inscrip_fin"];
}else{

}
if($comparar=="si"){

if($date1<$date2  or $date1 >= $date3){}else{
	$cuota[$a]["id"]=$fila["id"];
	$cuota[$a]["fecha"]=$fila["fecha"];	
	$cuota[$a]["precio"]=$fila["precio"];		
	$totcuota=$totcuota+$fila["precio"];			
	$a++;
	}
	
	

}else{
if($date1<=$date2 ){}else{

	$cuota[$a]["id"]=$fila["id"];
	$cuota[$a]["fecha"]=$fila["fecha"];	
	$cuota[$a]["precio"]=$fila["precio"];		
	$totcuota=$totcuota+$fila["precio"];		
	$a++;
	}
}


}

//print_r($cuota);

//echo "<br>";

if ($cuota==""){
//echo "vacio";
$cantcoutas=0;
}else{
$cantcoutas=count($cuota);
}
//$cuota= count(null);
//echo $cuota."///".$cantcoutas;


mysql_free_result($resultado);

}

//echo "//*".$totcuota;




$mitot=$totcuota-$totprecio;

//echo "//-".$mitot;

/*
if ($mitot>0){
echo "<div class='rojo'>*Tiene una deuda de años anteriores de $".$mitot." pesos.</div>";
}
*/

//print_r($cuota);

//echo "<br>";
/*
if ($cuota==""){
//echo "vacio";
$cantcoutas=0;
}else{
$cantcoutas=count($cuota);
}
//$cuota= count(null);
//echo $cuota."///".$cantcoutas;
*/

			  

  
  
  
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  

$filtro="WHERE idf=".$alumno[$estup]["idf"]." ";


$tablename="alumnos";
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
	$filter1[$a]["id"]=$fila["id"];
	$filter1[$a]["apellido"]=$fila["apellido"];	
	$filter1[$a]["nombre"]=$fila["nombre"];		
	$filter1[$a]["dni"]=$fila["dni"];
	$filter1[$a]["idf"]=$fila["idf"];	
	$filter1[$a]["cuota"]=$fila["cuota"];		
	$filter1[$a]["fecha_inscrip_inicio"]=$fila["fecha_inscrip_inicio"];
	$filter1[$a]["fecha_inscrip_fin"]=$fila["fecha_inscrip_fin"];		
	$a++;
}

mysql_free_result($resultado);
//print_r($filter1);



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
  

  
  
  <!--
			  La Familia <span class="Estilo2">debe  $<?php //echo $deudaf; ?> pesos</span>.<br />
			
	</td>
  </tr>
</table>
  -->
</p>

<!--
</p>
<table width="750" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td class="tabla">Nombre</td>
    <td class="tabla">Pago</td>
    <td class="tabla">Cuota</td>
    <td class="tabla">Descuentos</td>
    <td class="tabla">Total</td>
  </tr>
  -->
  
  
  

  
  	  <?php 
	  
	  $cuot[3]=0;
	   $cuot[4]=0;
	   $cuot[5]=0;
	   
	   	  $cuot[6]=0;
	   $cuot[7]=0;
	   $cuot[8]=0;
	   
	   	  $cuot[9]=0;
	   $cuot[10]=0;
	   $cuot[11]=0;
	   
	   	  $cuot[12]=0;
	   $cuot[1]=0;
	   $cuot[2]=0;
	   
	  $totpagfam=0;
	  $totcuotafam=0;
	  $totdescufam=0;
	  $tottotfam=0;
	  
			  $deudaf=0;
	 $d=0;		  
			     for ($i = 1; $i <= count($filter1); $i++) {
				 //echo "hijo: ".$i."<br>";
				 
				 
				       if($d==1){
    //$class1='class="celda2"';
   $d=0;
   }else{
  // $class1='class="celda1"';
   $d=1;
   }
   
				 
				// echo '<tr><td '.$class1.'>';
			   
				//echo $filter1[$i]["nombre"]." ".$filter1[$i]["apellido"];
				
				//echo "&nbsp;</td>";
				 
				 
   //echo $i.$filter1[$i]["id"];
   
  
			  $m=date('m');
			  //echo $m."<br>";

			  
			  
			
			
						   //TABLA prueba
$tablename="descuentos";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE idalumno='".$filter1[$i]["id"]."'";
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
unset($descuento);
while ($fila = mysql_fetch_assoc($resultado)) {
	$descuento[$a]["id"]=$fila["id"];
	$descuento[$a]["fecha"]=$fila["fecha"];	
	$descuento[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);


  
			  
			  

			   //TABLA prueba
$tablename="cuotas";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE cuota='".$filter1[$i]["cuota"]."'  AND year(fecha)='".$_GET['y']."'";
$query="SELECT * FROM $tablename $filtro;";
//echo $query."dsad";






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
$cuota="";


while ($fila = mysql_fetch_assoc($resultado)) {

$date0 = new DateTime("0000-00-00");
$date1 = new DateTime($fila["fecha"]);
$date2 = new DateTime($filter1[$i]["fecha_inscrip_inicio"]);
$date3 = new DateTime($filter1[$i]["fecha_inscrip_fin"]);
//echo $filter1[$i]["fecha_inscrip_fin"] ."<br>";

if($filter1[$i]["fecha_inscrip_fin"]=="0000-00-00"){
$comparar="no";
}else{

$comparar="si";}
//echo $comparar;
if($comparar=="si"){
//echo "echo;".$filter1[$i]["fecha_inscrip_fin"];
}else{

}
if($comparar=="si"){

if($date1<$date2  or $date1 >= $date3){}else{
	$cuota[$a]["id"]=$fila["id"];
	$cuota[$a]["fecha"]=$fila["fecha"];	
	$cuota[$a]["precio"]=$fila["precio"];				
	$a++;
	}
	
	

}else{
if($date1<=$date2 ){}else{

	$cuota[$a]["id"]=$fila["id"];
	$cuota[$a]["fecha"]=$fila["fecha"];	
	$cuota[$a]["precio"]=$fila["precio"];				
	$a++;
	}
}


}

//print_r($cuota);

//echo "<br>";

if ($cuota==""){
//echo "vacio";
$cantcoutas=0;
}else{
$cantcoutas=count($cuota);
}
//$cuota= count(null);
//echo $cuota."///".$cantcoutas;


mysql_free_result($resultado);
			  
		 
$miscuotas[1]=0;
$miscuotas[2]=0;	
$miscuotas[3]=0;	
$miscuotas[4]=0;	
$miscuotas[5]=0;	
$miscuotas[6]=0;	
$miscuotas[7]=0;	
$miscuotas[8]=0;	
$miscuotas[9]=0;	
$miscuotas[10]=0;	
$miscuotas[11]=0;	
$miscuotas[12]=0;			 


 
//SI HAY ERROR EN explorador  es porque no tiene cargado ninguna cuota a ese alumno icuota.
for ($y = 1; $y <= $cantcoutas; $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		for ($g = 1; $g <= 12; $g++) {
			if($fchacha[1]==$g AND $fchacha[0]==$_GET['y']){
				$miscuotas[$g]=$cuota[$y]['id'];
			}
		}
}

//print_r($miscuotas);

///////////////////////////////////////////////////////////////////////////

		 




for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==3){
			$cuot[3]=$cuot[3]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==4){
			$cuot[4]=$cuot[4]+$cuota[$y]['precio'];
		}
	}
}


for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==5){
			$cuot[5]=$cuot[5]+$cuota[$y]['precio'];
		}
	}
}


for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==6){
			$cuot[6]=$cuot[6]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==7){
			$cuot[7]=$cuot[7]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==8){
			$cuot[8]=$cuot[8]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==9){
			$cuot[9]=$cuot[9]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==10){
			$cuot[10]=$cuot[10]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==11){
			$cuot[11]=$cuot[11]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==12){
			$cuot[12]=$cuot[12]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==1){
			$cuot[1]=$cuot[1]+$cuota[$y]['precio'];
		}
	}
}

for ($y = 1; $y <= $cantcoutas; $y++) {
	for ($y = 1; $y <= count($cuota); $y++) {
		//sie es el mes q necesito
		$fchacha=explode("-",$cuota[$y]['fecha']);
		if($fchacha[1]==2){
			$cuot[2]=$cuot[2]+$cuota[$y]['precio'];
		}
	}
}

		 
 
		  
			  
			  	$cuotat=0;
			   for ($y = 1; $y <= $cantcoutas; $y++) {
					$cuotat=$cuotat+$cuota[$y]["precio"];
			  }
			  
			$desct=0;
			if(isset($descuento)){
			   for ($y = 1; $y <= count($descuento); $y++) {
			   		$var=explode(" ",$descuento[$y]["fecha"]);
					$var=explode("-",$var[0]);
					if ($var[1]<=date('m') && $var[2]<=date('Y')){
					$desct=$desct+$descuento[$y]["precio"];
					}
			  }}
		//$cuotat=0;
			  
			  //$alumno[$i]["curso"];
			  
			  $t=$cuotat;
			  //echo $t;
			  
			  //echo "cuanto tengo asignado a ese idf?";
			  $tota=averff1($filter1[$i]["id"]);//$filter1[$i]["id"]
			  $pag[3]=averffISA($alumno[$estup]["idf"],3);//$filter1[$i]["id"] //$miscuotas[3]
			  //echo $miscuotas[3]."***". $pag[3]."///";
			 $pag[4]=averffISA($alumno[$estup]["idf"],4);
			  $pag[5]=averffISA($alumno[$estup]["idf"],5);
			   $pag[6]=averffISA($alumno[$estup]["idf"],6);
			    $pag[7]=averffISA($alumno[$estup]["idf"],7);
				 $pag[8]=averffISA($alumno[$estup]["idf"],8);
				  $pag[9]=averffISA($alumno[$estup]["idf"],9);
				   $pag[10]=averffISA($alumno[$estup]["idf"],10);
				    $pag[11]=averffISA($alumno[$estup]["idf"],11);
					 $pag[12]=averffISA($alumno[$estup]["idf"],12);
					  $pag[1]=averffISA($alumno[$estup]["idf"],1);
					   $pag[2]=averffISA($alumno[$estup]["idf"],2);
			 
			 
			 
			  //$pag[3]=500;
			  //echo "//".averff1(1)."//";
				$tot=$t-$tota-$desct;
				
				
				
				//
				$totpagfam=$totpagfam+$tota;
				$totcuotafam=$totcuotafam+$cuotat;
				$totdescufam=$totdescufam+$desct;
				$tottotfam=$tottotfam+$tot;
				
				//
				
				
				$pieces = str_split($tot);
				
				$mg=0;
				
				//echo "<td ".$class1." id='precio1'>$".number_format($tota, 2)."</td>";
				//echo "<td ".$class1." id='precio1'>$".number_format($cuotat, 2)."</td>";
				//echo "<td ".$class1." id='precio1'>$".number_format($desct, 2)."</td>";
				
				//echo "<br>";
				
				if( $pieces[0]=="-"){
				$hg=explode("-",$tot);
				 for ($k = 1; $k <= count($hg)-1; $k++) {
				 $mg=$mg+$hg[$k];
				 }
				

				
				//echo "<td ".$class1." id='precio1'><span class='Estilo4' ><strong>A favor $".number_format($mg,2)."</strong></span></td>";
				}else{ // 
				
				//echo "<td ".$class1." id='precio1'><span class='Estilo2' ><strong> Debe $".number_format($tot,2)."</strong></span></td>";
				$deudaf=$deudaf+$tot;
				}
				
				//echo "</tr>";
				
				 }
			  ?>
  
  
 
  
  <?php    
   if($d==1){
   //$class1='class="celda2"';
   $d=0;
   }else{
  // $class1='class="celda1"';
   $d=1;
   }
   
   ?>

  <!--
  <tr>
    <td <?php //echo $class1; ?>>	  La Familia </td>
    <td <?php// echo $class1; ?> id='precio1'>$<?php //echo number_format($totpagfam, 2); ?></td>
    <td <?php //echo $class1; ?> id='precio1'>$<?php // echo number_format($totcuotafam, 2); ?></td>
    <td <?php //echo $class1; ?> id='precio1'>$<?php //echo number_format($totdescufam, 2); ?></td>
    <td <?php //echo $class1; ?> id='precio1'><?php 
	
	$pieces = str_split($deudaf);
	if($deudaf==0){
	
		//echo "<span class='Estilo4'><strong>A favor $".str_replace("-","",number_format($tottotfam, 2))."</strong></span>";
	}else{
	
		//echo "<span class='Estilo2'><strong>Debe $".number_format($deudaf, 2)."</strong></span>";
	}
	
	//echo $deudaf; ?></td>
  </tr>
</table>
<p>
-->




<?php 

$filtro="WHERE idf=".$alumno[$estup]["idf"]." ";


$tablename="alumnos";
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
	$filter[$a]["apellido"]=$fila["apellido"];	
	$filter[$a]["nombre"]=$fila["nombre"];		
	$filter[$a]["dni"]=$fila["dni"];
	$filter[$a]["idf"]=$fila["idf"];				
	$a++;
}

mysql_free_result($resultado);
//print_r($filter);
?>







<p>

<!--


<table width="750" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><form id="form7" name="form7" method="post" action="">

  <div align="right">
  
    <label>
  <select id="ano" name="ano">
  <?php for ($i = 2012; $i <= date("Y")+5; $i++) { ?>
  	<option value="<?php echo $i; ?>" <?php if ($_GET['y'] == $i){echo "selected='selected'";} ?>><?php echo $i; ?></option>
  <?php } ?>
  </select>
  </label>
  <label>
  <input type="button" name="Submit5" value="Mostrar" onclick="filtro2('?<?php getisa2(); ?>')"/>
  </label>
  
  </div>
    </form></td>
  </tr>
</table>

<table width="750" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td class="tabla">Mes</td>
    <td class="tabla">Cuota</td>
    <td class="tabla">Matricula</td>
    <td class="tabla">Materiales</td>
    <td class="tabla">Ense&ntilde;anza</td>
	    <td class="tabla">Descuentos</td>
    <td class="tabla">Total</td>
    <td class="tabla">Pagos</td>
    <td class="tabla">Deuda</td>
  </tr>
  <tr>
    <td class="celda1">Enero</td>
    <td class="celda1" id='precio1'>0</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
	  <td class="celda1" id='precio1'>0</td>
    <td class="celda1" id='precio1'>0</td>
    <td class="celda1" id='precio1'>0</td>
    <td class="celda1" id='precio1'>0</td>
  </tr>
  <tr>
    <td class="celda2">Febrero  </td>
    <td class="celda2" id='precio1'>0</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>0</td>
	  <td class="celda2" id='precio1'>0</td>
    <td class="celda2" id='precio1'>0</td>
    <td class="celda2" id='precio1'>0</td>
  </tr>
  <tr>
    <td class="celda1">Marzo</td>
    <td class="celda1" id='precio1'>$<?php //echo $cuot[3]; ?></td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
		  <td class="celda1" id='precio1'>0</td>
    <td class="celda1" id='precio1'>$<?php $tot1= $cuot[3]; //echo $tot1; ?></td>

    <td class="celda1" id='precio1'>$<?php //echo $pag[3]; ?></td>
    <td class="celda1" id='precio1'>$<?php
//$totrestan="";
$j=0;

$mue= $tot1-$pag[3];
//echo $mue;

if($mue>=0){
$totrestan[$j]['fecha']='03-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 

	
	?></td>
  </tr>
  <tr>
    <td class="celda2">Abril</td>
    <td class="celda2" id='precio1'>$<?php //echo $cuot[4]; ?></td>
    <td class="celda2" id='precio1'></td>
    <td class="celda2" id='precio1'></td>
    <td class="celda2" id='precio1'></td>
		  <td class="celda2" id='precio1'>0</td>
    <td class="celda2" id='precio1'>$<?php $tot1= $cuot[4]; //echo $tot1; ?></td>
    <td class="celda2" id='precio1'>$<?php //echo $pag[4]; ?></td>
    <td class="celda2" id='precio1'>$<?php
//$totrestan="";


$mue= $tot1-$pag[4];
//echo $mue;

if($mue>=0){
$totrestan[$j]['fecha']='04-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 
	
	?></td>
  </tr>
  <tr>
    <td class="celda1">Mayo</td>
    <td class="celda1" id='precio1'>$<?php //echo $cuot[5]; ?></td>
    <td class="celda1" id='precio1'></td>
    <td class="celda1" id='precio1'></td>
    <td class="celda1" id='precio1'></td>
		  <td class="celda1" id='precio1'>0</td>
    <td class="celda1" id='precio1'>$<?php $tot1= $cuot[5]; //echo $tot1; ?></td>
    <td class="celda1" id='precio1'>$<?php //echo $pag[5]; ?></td>
    <td class="celda1" id='precio1'>$<?php //echo $tot1-$pag[5]; ?><?php
//$totrestan="";


$mue= $tot1-$pag[5];
//echo $mue;

if($mue>=0){
$totrestan[$j]['fecha']='05-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 
	
	?></td>
  </tr>
  <tr>
    <td class="celda2">Junio</td>
    <td class="celda2" id='precio1'>$<?php //echo $cuot[6]; ?></td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
		  <td class="celda2" id='precio1'>0</td>
    <td class="celda2" id='precio1'>$<?php $tot1= $cuot[6]; //echo $tot1; ?></td>
    <td class="celda2" id='precio1'>$<?php //echo $pag[6]; ?></td>
    <td class="celda2" id='precio1'>$<?php //echo $tot1-$pag[6]; ?><?php
//$totrestan="";


$mue= $tot1-$pag[6];
//echo $mue;

if($mue>=0){
$totrestan[$j]['fecha']='06-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 
	
	?></td>
  </tr>
  <tr>
    <td class="celda1">Julio</td>
    <td class="celda1" id='precio1'>$<?php //echo $cuot[7]; ?></td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
		  <td class="celda1" id='precio1'>0</td>
    <td class="celda1" id='precio1'>$<?php $tot1= $cuot[7]; //echo $tot1; ?></td>
    <td class="celda1" id='precio1'>$<?php //echo $pag[7]; ?></td>
    <td class="celda1" id='precio1'>$<?php //echo $tot1-$pag[7]; ?>
	<?php
//$totrestan="";


$mue= $tot1-$pag[7];
//echo $mue;

if($mue>=0){
$totrestan[$j]['fecha']='07-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 
	
	?></td>
  </tr>
  <tr>
    <td class="celda2">Agosto</td>
    <td class="celda2" id='precio1'>$<?php //echo $cuot[8]; ?></td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
		  <td class="celda2" id='precio1'>0</td>
    <td class="celda2" id='precio1'>$<?php $tot1= $cuot[8]; //echo $tot1; ?></td>
    <td class="celda2" id='precio1'>$<?php // echo $pag[8]; ?></td>
    <td class="celda2" id='precio1'>$<?php //echo $tot1-$pag[8]; ?><?php
//$totrestan="";


$mue= $tot1-$pag[8];
//echo $mue;

if($mue>=0){
$totrestan[$j]['fecha']='08-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 
	
	?>
      </td>
  </tr>
  <tr>
    <td class="celda1">Septiembre</td>
    <td class="celda1" id='precio1'>$<?php //echo $cuot[9]; ?></td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
		  <td class="celda1" id='precio1'>0</td>
    <td class="celda1" id='precio1'>$<?php $tot1= $cuot[9]; //echo $tot1; ?></td>
    <td class="celda1" id='precio1'>$<?php //echo $pag[9]; ?></td>
    <td class="celda1" id='precio1'>$<?php //echo $tot1-$pag[9]; ?><?php
//$totrestan="";


$mue= $tot1-$pag[9];
//echo $mue;

if($mue>=0){
$totrestan[$j]['fecha']='09-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 
	
	?></td>
  </tr>
  <tr>
    <td class="celda2">Octubre</td>
    <td class="celda2" id='precio1'>$<?php //echo $cuot[10]; ?></td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
		  <td class="celda2" id='precio1'>0</td>
    <td class="celda2" id='precio1'>$<?php $tot1= $cuot[10]; //echo $tot1; ?></td>
    <td class="celda2" id='precio1'>$<?php //echo $pag[10]; ?></td>
    <td class="celda2" id='precio1'>$<?php //echo $tot1-$pag[10]; ?><?php
//$totrestan="";


$mue= $tot1-$pag[10];
//echo $mue;

if($mue>=0){
$totrestan[$j]['fecha']='10-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 
	
	?></td>
  </tr>
  <tr>
    <td class="celda1">Noviembre</td>
    <td class="celda1" id='precio1'>$<?php //echo $cuot[11]; ?></td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
    <td class="celda1" id='precio1'>&nbsp;</td>
		  <td class="celda1" id='precio1'>0</td>
    <td class="celda1" id='precio1'>$<?php $tot1= $cuot[11]; //echo $tot1; ?></td>
    <td class="celda1" id='precio1'>$<?php //echo $pag[11]; ?></td>
    <td class="celda1" id='precio1'>$<?php
//$totrestan="";


$mue= $tot1-$pag[11];
//echo $mue;

if($mue>=0){
$totrestan[$j]['fecha']='11-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 
	
	?></td>
  </tr>
  <tr>
    <td class="celda2">Diciembre</td>
    <td class="celda2" id='precio1'>$<?php //echo $cuot[12]; ?></td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
    <td class="celda2" id='precio1'>&nbsp;</td>
		  <td class="celda2" id='precio1'>0</td>
    <td class="celda2" id='precio1'>$<?php $tot1= $cuot[12]; //echo $tot1; ?></td>
    <td class="celda2" id='precio1'>$<?php //echo $pag[12]; ?></td>
    <td class="celda2" id='precio1'>$<?php //echo $tot1-$pag[12]; ?><?php
//$totrestan="";


$mue= $tot1-$pag[12];
//echo $mue;

if($mue>=0){
$totrestan[$j]['fecha']='12-'.$_GET['y'];
$totrestan[$j]['precio']=$mue;
$j++;
} 
	
	?></td>
  </tr>
  <tr>
    <td class="celda1">TOTAL</td>
    <td class="celda1">&nbsp;</td>
    <td class="celda1">&nbsp;</td>
    <td class="celda1">&nbsp;</td>
    <td class="celda1">&nbsp;</td>
		  <td class="celda1" id='precio1'>0</td>
    <td class="celda1">&nbsp;</td>
    <td class="celda1">&nbsp;</td>
    <td class="celda1" id='precio1'>$0</td>
  </tr>
</table>

 
 
 -->
 

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  <div style="border:solid; width:650px;  margin-bottom:10px;">
<table width="100%" style="padding-left:10px; padding-right:10px; padding-top:10px; padding-bottom:10px;" border="0" cellspacing="0" cellpadding="0">
		  <tr>
			<td> <?php echo ucwords($alumno[$estup]["nombre"]); ?> <?php echo  ucwords($alumno[$estup]["apellido"]); ?>  <?php relacionarcurso($alumno[$estup]["curso"],"cursos"); ?> 
			  <br>Se comunica que al dia <?php echo date("d-m-Y"); ?>,  
			  
			  
			  
			  
			  
			  
			  
			
			  
			  
			  
			        <table width="100%" border="1" cellspacing="0" cellpadding="0">
        <tr>
          <td>CONCEPTO</td>
          <td>IMPORTE </td>
          <td>TOTAL GENERAL</td>
        </tr>
	<?php 	  
	
	 $tot=0;
	for ($t = 0; $t <= count($totrestan)-1; $t++) {
	if($t>date("m")-3 or $totrestan[$t]['precio']==0){}else{
	
			  $tiqui=explode(" ",$totrestan[$t]['fecha']);
		  $mifech=explode("-",$tiqui[0]);
		  
		  //echo intval($mifech[0]).date("m");
		  if(intval($mifech[0])<=intval(date("m"))){
	?>
        <tr>
          <td><?php //echo $i; ?>Resta abonar cuota <?php echo damemes($mifech[0])." ".$mifech[1];// $mifech[0]; // ?>  </td>
          <td><div align="right">$<?php echo number_format($totrestan[$t]['precio'],2); 
		  
		    $tot=$tot+$totrestan[$t]['precio'];
		  ?></div></td>
          <td>&nbsp;</td>
        </tr>
		
		
		<?php }}} ?>
		
		<?php
		
		//$mitot=0;
		 if ($mitot>0){
//echo "<div class='rojo'> de $".." pesos.</div>";
?>
        <tr>
          <td>Deuda de años anteriores </td>
          <td><div align="right">$<?php echo number_format($mitot,2);
		   $tot=$tot+$mitot;
		  
		  ?></div></td>
          <td>&nbsp;</td>
        </tr>
		
		<?php } ?>
        <tr>
          <td>&nbsp;</td>
          <td><div align="right">TOTAL</div></td>
          <td><div align="right">$<?php echo number_format($tot,2); ?></div></td>
        </tr>
      </table>
			  
			  
			  
			  
			  
			  
	
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  

			  Ante cualquier consulta comunicarse con el colegio.
			  <?php 
			  
			  
			  
	
	
	
	
	  
			  /*
		//print_r($alumno);	  
			  	   //TABLA prueba
$tablename="descuentos";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE idalumno='".$alumno[$i]["id"]."'";
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
unset($descuento);
while ($fila = mysql_fetch_assoc($resultado)) {
	$descuento[$a]["id"]=$fila["id"];
	$descuento[$a]["fecha"]=$fila["fecha"];	
	$descuento[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

			  
			  
			  
			  
//TABLA prueba
$tablename="cuotas";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE cuota='".$alumno[$i]["cuota"]."'";
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

$sql       = 'SELECT foo FROM bar WHERE id = 42';
$resultado = mysql_query($query, $enlace);

if (!$resultado) {
    echo "Error de BD, no se pudo consultar la base de datos\n";
    echo "Error MySQL: " . mysql_error();
    exit;
}
$a=1;
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$cuotas[$a]["id"]=$fila["id"];
	$cuotas[$a]["nombre"]=$fila["cuota"];		
	$cuotas[$a]["precio"]=$fila["precio"];	
	$a++;
}

mysql_free_result($resultado);

////////////////
			  
			  
			  
			  
			  
			  
			  $m=date('m');
			  //echo $m."<br>";
	 		 	$cuotat=0;
			   for ($y = 1; $y <= count($cuotas); $y++) {
					$cuotat=$cuotat+$cuotas[$y]["precio"];
			  }
			  */
			  
			  /*
			  //$alumno[$i]["curso"];
			  //$cuotat=300;
			  $t=$cuotat;
			  //echo $t;
			  
			  //echo "cuanto tengo asignado a ese idf?";
			  $tota=averff($alumno[$i]["id"]);
				$tot=$t-$tota;
				*/
				
				
				
				
				
				
				
				
				
				
				
				/*
				
				
							$desct=0;
			if(isset($descuento)){
			   for ($y = 1; $y <= count($descuento); $y++) {
			   		$var=explode(" ",$descuento[$y]["fecha"]);
					$var=explode("-",$var[0]);
					if ($var[1]<=date('m') && $var[2]<=date('Y')){
					$desct=$desct+$descuento[$y]["precio"];
					}
			  }}
		//$cuotat=0;
			  
			  //$alumno[$i]["curso"];
			  
			  $t=$cuotat;
			  //echo $t;
			  
			  //echo "cuanto tengo asignado a ese idf?";
			  $tota=averff1ISA($alumno[$i]["id"]);//$filter1[$i]["id"]
			  //echo "//".averff1(1)."//";
				$tot=$t-$tota-$desct;
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				$pieces = str_split($tot);
				
				$mg=0;
				if( $pieces[0]=="-"){
				$hg=explode("-",$tot);
				 for ($k = 1; $k <= count($hg)-1; $k++) {
				 $mg=$mg+$hg[$k];
				 }
				
				echo "<br><strong>usted tiene a su favor $".$mg."</strong>";
				}else{ // 
				
				echo "<br><strong>usted debe al dia de la fecha $".$tot."</strong>";
				}*/
			  ?>
		    </td>
		  </tr>
</table>
</div>





		
  <?php }}?>

<?php if($vacio==true){echo '<div style="background-color: #E1E4EC;border: medium solid;padding-bottom: 10px;padding-left: 10px;padding-top: 10px;width: 736px;">No se encontraron resultados. <p><a href="?op=6"> volver</a></div>';}else{ ?>


<script language="JavaScript" type="text/javascript">

window.print();

</script>
<?php }}else{?>

<?php 

/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;


			   //TABLA prueba
$tablename="cursos";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="order by nombre ASC";
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
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$cursos[$a]["id"]=$fila["id"];
	$cursos[$a]["nombre"]=$fila["nombre"];				
	$a++;
}

mysql_free_result($resultado);
//print_r($cursos);
?>

<div style="background-color: #E1E4EC;border: medium solid;padding-bottom: 10px;padding-left: 10px;padding-top: 10px;width: 736px;">
  <b>REPORTE N&ordm;1:</b> <br />Imprime en  el cuadrerno de comunicaciones el vencimiento de los alumnos.
  </p>
  <form action="?op=6&idf=1&y=2013" method="post">
  Seleccione el curso:<br>
<select name="curso" id="curso">
<?php   for ($i = 1; $i <= count($cursos); $i++) { ?>
  <option value="<?php echo $cursos[$i]["id"]; ?>"><?php echo $cursos[$i]["nombre"]; ?></option>
  <?php }?>
</select>
<p>
<input type="submit" name="imprimir" value="Generar" />
  </form>
  <hr align="left" style=" margin-right:10px;" />

  <p><b>REPORTE N&ordm;2:</b> <br />
    Imprime recibos de pago.
    </p>
</p>
  <form id="form3" name="form3" method="post" action="?op=6&idf=1&y=2013">
    <label>Ingrese el ID de pago:<br>
      <input type="text" name="id" />
      </label>
    <p>
    <input name="recibos" type="submit"  value="Generar" />
    
  </form>
  
</div>




  <?php 
 
}}

 ?>
</div>
<?php
}


function averff($idalumno){	

//echo $idalumno;
/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;


			   //TABLA prueba
$tablename="pagos";
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE idalumno='".$idalumno."'";
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
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["fecha"]=$fila["fecha"];	
	$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

//print_r($pagos);
//echo "//".count($pagos);
/*
if (isset($pagos)){
echo "lala";
}else{
echo "lolo";
}
*/
////////////////
			   $total = 0;
			   if(isset($pagos)){
			   
			     for ($i = 1; $i <= count($pagos); $i++) {
			   $total=$total+$pagos[$i]["precio"];
			   }
			   
			   }else{
			
			    $total=0;
			   }
			   
			   
			   return $total;
			   
			   
			   

}


?>
  
  
  
  <?php 

function op8(){

/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;

$arryfamilia[1]="padres";
$arryfamilia[2]="alumnos";
$arryfamilia[3]="madres";
for ($i = 1; $i <= count($arryfamilia); $i++) {
$tablename=$arryfamilia[$i];
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE idf='".$_GET['idf']."'";
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
	$familia[$arryfamilia[$i]][$a]["id"]=$fila["id"];
	$familia[$arryfamilia[$i]][$a]["apellido"]=$fila["apellido"];	
	$familia[$arryfamilia[$i]][$a]["nombre"]=$fila["nombre"];		
	$familia[$arryfamilia[$i]][$a]["dni"]=$fila["dni"];		
	$a++;
}

mysql_free_result($resultado);
}
//print_r($familia);
?>
<div class="contenido" style="background-color: #E1E4EC;border: medium solid;padding-bottom: 20px;padding-left: 20px;padding-top: 15px;width: 730px;">
  <strong>Padre:</strong>
  <?php 
    if(!isset($familia['padres'])){}else{
for ($i = 1; $i <= count($familia['padres']); $i++) {
 echo $familia['padres'][$i]["apellido"]." ".$familia['padres'][$i]["nombre"]; 
 if (count($familia['padres'])==$i){echo ".";}else{echo ", ";}
 }
 }
 ?>
  <br>
   <strong>Madre:</strong>
  <?php 
  if(!isset($familia['madres'])){}else{
for ($i = 1; $i <= count($familia['madres']); $i++) {
 echo $familia['madres'][$i]["apellido"]." ".$familia['madres'][$i]["nombre"]; 
  if (count($familia['madres'])==$i){echo ".";}else{echo ", ";}
 }
 }
 ?>
  <br>
 <strong> Hijo/s:</strong>
  <?php 
    if(!isset($familia['alumnos'])){}else{
for ($i = 1; $i <= count($familia['alumnos']); $i++) {
 echo $familia['alumnos'][$i]["apellido"]." ".$familia['alumnos'][$i]["nombre"]; 
  if (count($familia['alumnos'])==$i){echo ".";}else{echo ", ";}
 }
 }
 ?>
</div>
  <?php }?>
  
  
  <?php 

function cms(){


?>
    
  <?php 

if (isset($_GET['t'])){
$var=$_GET['t'];
}else{
$var= "error";
}

//echo $var;
switch ($var) {
    case "error":
	echo "vacio";

        break;
		case "pagos":
		
		echo "pagos";
		break;
		case "cursos": ?>
		
		
		
		
	
		<?php if ($_GET['n']==0){ ?>

 <?php 

/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;




//LIMIT
if (isset($_GET['p'])){
$p=$_GET['p'];
}else{
$p=1;
}

if($p==0){$limit=0;}else{$limit=$p-1;}
//LIMIT

 //TABLA prueba
//$tablename="pagos";
if (isset($_GET['f'])){
	if ($_GET['f']=="todos"){
	$filtro1="";
	}else{
	$filtro1=" WHERE cuota='".$_GET['f']."'";
	}
}else{
$filtro1="";
}

$filtro="ORDER BY id DESC LIMIT ".$limit."0,10";


 //TABLA prueba
$tablename=$_GET['t'];
//$filtro=" ORDER BY id LIMIT 20,10";
//$filtro=" ORDER BY id DESC";
$query="SELECT * FROM $tablename $filtro;";

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
	$busqueda[$a]["nombre"]=$fila["nombre"];
	//$pagos[$a]["fecha"]=$fila["fecha"];	
	//$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

////////////////

//print_r($busqueda);
?>


 <div class="contenido">
<?php if(!isset($busqueda)){echo "No se encontraron resultados.";}else{ ?>
<table width="750" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td class="tabla"><strong>id</strong></td>
    <td class="tabla"><strong>Nombre</strong></td>
    <td class="tabla">Acción</td>
  </tr>
  <?php

  $d=0;
   for ($i = 1; $i <= count($busqueda); $i++) {
   
            if($d==1){
    $class1='class="celda2"';
   $d=0;
   }else{
   $class1='class="celda1"';
   $d=1;
   }
   
   ?>
<tr>
    <td <?php echo $class1; ?>><?php echo $busqueda[$i]["id"]; ?></td>
    <td <?php echo $class1; ?>><?php echo $busqueda[$i]["nombre"]; ?></td>
     <td <?php echo $class1; ?> align="center"><form name="tuformulario">
	 <?php //if ($_GET['op']=="5"){ ?>

		<input name="editar" type="button" value="Editar"  class="editar" onclick="window.location='?op=9&t=cursos&n=2&id=<?php echo $busqueda[$i]["id"];?>' " />
		<input name="eliminar" type="button" value="Eliminar"  class="eliminar" onclick="pregunta(<?php echo $busqueda[$i]["id"];?>)"/>
        <input name="elim_id" type="hidden" id="elim_id" value="<?php echo $busqueda[$i]["id"];?>" />
		
		<?php //} ?>
		<?php if ($_GET['op']=="0"){ ?>
        <a href="?op=2&idf=<?php echo $busqueda[$i]["idf"];?>&id=<?php echo $busqueda[$i]["id"];?>&t=<?php echo $_POST['tabla'];?>">PAGOS</a><?php } ?>
		<?php if ($_GET['op']=="5"){ ?>
		<a href="?op=5&idf=<?php echo $busqueda[$i]["idf"];?>&id=<?php echo $busqueda[$i]["id"];?>&t=<?php echo $_POST['tabla'];?>">Familia</a><?php } ?>
     </form></td>
  </tr>
  <?php }?>
</table>
<?php }?>









<?php function paginacion($t){?>


<?php 


/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;


 //TABLA prueba
$tablename=$t;
//$filtro=" ORDER BY id ";


if (isset($_GET['f'])){
	if ($_GET['f']=="todos"){
	$filtro1="";
	}else{
	$filtro1=" WHERE cuota='".$_GET['f']."'";
	}
}else{
$filtro1="";
}

$filtro=" ORDER BY id DESC";
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

$sql       = 'SELECT foo FROM bar WHERE id = 42';
$resultado = mysql_query($query, $enlace);

if (!$resultado) {
    echo "Error de BD, no se pudo consultar la base de datos\n";
    echo "Error MySQL: " . mysql_error();
    exit;
}
$a=1;
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["nombre"]=$fila["nombre"];		
	$a++;
}

mysql_free_result($resultado);

?>



<?php 

 $reg=count($pagos);
//echo $reg."//";
$numpag=0;
for ($i = 1; $i <= $reg; $i++) {
$i=$i+10;
$numpag=$numpag+1;
}
//echo $numpag;





if (isset($_GET['p'])){
$p=$_GET['p'];
}else{
$p=1;
}




function getisa(){
$var="";
foreach($_GET as $k => $v) {
    // Reject items not starting with prefix
	if($k=="p"){}else{
$var=$var.$k."=".$v."&";
}
}

echo $var;
}

 ?>
<table width="750" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div align="center">
	
	 <?php if ($p==1){}else{  ?>
	<a href="?<?php getisa();?>p=<?php echo $p-1; ?>">&lt; anterior</a>
	
	<?php 
	}
	
	
	if($numpag==1){}else{
	
	 
	for ($i = 1; $i <= $numpag; $i++) {
	
	?>
	
	<?php if ($p==$i){?>
	
	 <strong><?php echo $i; ?></strong>
	<?php }else{ ?>
	
	 <a href="?<?php getisa();?>p=<?php echo $i; ?>"><?php echo $i; ?></a>
	<?php } ?>
	
	 <?php }?>
	 
	<?php if ($p==$numpag){}else{  ?>
	 <a href="?<?php getisa();?>p=<?php echo $p+1; ?>">siguiente &gt;</a>
	 <?php }}?>
	 
	 </div></td>
  </tr>
</table>
<?php //print_r($_GET);?>

<?php  } ?>

<?php

echo "<br>";
 paginacion("cursos");?>


</div>



<script language="JavaScript">
function pregunta(id){
    if (confirm('¿Estas seguro eliminar esta registro?')){
	   window.location = "?op=9&t=cursos&n=3&e="+id
    }
}
</script>





	  <?php }?>
	
	  <?php if ($_GET['n']==1){ 
	  
	  
	  if (!isset($_POST['Submit4'])){ 
	  ?>
	  
	  
	  
	    <script>



function validacion3() {
alert("see");
return false;
}


function validacion() {
estatus=true;

nombre = document.getElementById("nombre").value;


//alert(valor);

if( nombre == null || nombre == "" || /^\s+$/.test(nombre) ) {
//alert("obligatorio");
estatus=false;
document.getElementById('cartel1').style.display = '';
}else{
document.getElementById('cartel1').style.display = 'none';
}






  return estatus;//true
}





function validacion1(){
alert("lalal");
return false;
}







</script>	

<div  class="formulario10" >

<strong>FORMULARIO DE CURSOS</strong>

<p>
<form id="form4" name="form4" method="post" action="" onsubmit="return validacion()">
  <label>
  Nombre del curso:<br />
  <input name="nombre" type="text" id="nombre" />
  </label>
   <div id="cartel1" style="display:none;" class="cartel1">Este campo es requerido.</div>
  <p>
  <p>
    <label></label><label>
    <input type="submit" name="Submit4" value="GUARDAR" />
    </label>
  </p>
</form>
</div>
  <?php }else{?>
 
 
 
 
  <?php 


/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;


	//TABLA OFERTAS
	$tablename=$_GET['t'];
	//$filtro="WHERE dni='".$dni."'";
	$query="INSERT INTO $tablename (nombre) VALUES ('".$_POST['nombre']."');";
	//echo $q
	mysql_select_db($dbname,$link);
	mysql_query($query,$link);
	$my_error = mysql_error($link);
	if(!empty($my_error)) {
	//cartel(3,"Hubo un error al insertar el registro. $my_error"); 
	echo "Hubo un error al insertar el registro. $my_error";
	} else {
	//echo "SEEEEEEEEEEEEEE";
	//echo cartel(3,"SSEEEEEEEEE");
	}
	?>
	
	<script language="JavaScript" type="text/javascript">
var pagina="?op=<?php echo $_GET['op']; ?>&t=<?php echo $_GET['t']; ?>&n=0"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>
 
 
 
  
 <?php  }
  
   }?>
	
	
		<?php if ($_GET['n']==2){//modificar ?>
	
	
	<?php
		  if (!isset($_POST['Submit4'])){ 
	  ?>
	  
	  
	  <?php 
	  
	  /*
	  if( $_SERVER['SERVER_NAME'] == "localhost"){
	  
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;



 //TABLA prueba
$tablename=$_GET['t'];
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE id='".$_GET['id']."' ORDER BY id DESC";
$query="SELECT * FROM $tablename $filtro;";

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
	$busqueda[$a]["nombre"]=$fila["nombre"];
	//$pagos[$a]["fecha"]=$fila["fecha"];	
	//$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

//print_r($busqueda);
?>
	  
	  


<div class="formulario10">

<strong>MODIFICAR FORMULARIO DE CURSOS</strong> <p>
<form id="form4" name="form4" method="post" action="">
  <label>
  Nombre:<br />
  <input name="nombre" type="text" id="nombre" value="<?php echo $busqueda[1]["nombre"]; ?>" />
  </label>
   <p>
    <input type="submit" name="Submit4" value="GUARDAR" />
    

</form>

</div>
  <?php }else{ //guardar modificar  ?>
  
  
  
  
  
  <?php 
 /*
  if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;
  

$tablename=$_GET['t'];
$query="UPDATE $tablename SET nombre='".$_POST['nombre']."' WHERE id=".$_GET['id']." ;";
//echo $query;
//$result=mysql_db_query ($dbname, $query, $link);




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

//mysql_free_result($resultado);

  ?>
  
  
  	<script language="JavaScript" type="text/javascript">
var pagina="?op=<?php echo $_GET['op']; ?>&t=<?php echo $_GET['t']; ?>&n=0"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>
  
 <?php  }
 
 
	}?>
	
	
		<?php if ($_GET['n']==3){ //eliminar ?>
	
	
	
	<?php 
	/*
	if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/
global $host, $user,$password, $dbname,$link;

				$tablename=$_GET['t'];
				$filtro=" ";
				$query="DELETE FROM $tablename WHERE id='".$_GET['e']."';";
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

//mysql_free_result($resultado);?>

	<script language="JavaScript" type="text/javascript">
var pagina="?op=<?php echo $_GET['op']; ?>&t=<?php echo $_GET['t']; ?>&n=0"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>
	
	
	
	<?php }?>
	
	
		
		<?php break;
		
		case "cuotas": ?>
		
		
		
	
		<?php if ($_GET['n']==0){ ?>



<?php 

/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/
global $host, $user,$password, $dbname,$link;


//LIMIT
if (isset($_GET['p'])){
$p=$_GET['p'];
}else{
$p=1;
}

if($p==0){$limit=0;}else{$limit=$p-1;}
//LIMIT

 //TABLA prueba
$tablename="pagos";
if (isset($_GET['f'])){
	if ($_GET['f']=="todos"){
	$filtro1="";
	}else{
	$filtro1=" WHERE cuota='".$_GET['f']."'";
	}
}else{
$filtro1="";
}

$filtro=" $filtro1 ORDER BY id DESC LIMIT ".$limit."0,10";




 //TABLA prueba
$tablename=$_GET['t'];
//$filtro=" ORDER BY id LIMIT 20,10";
//$filtro=" ORDER BY id DESC";
$query="SELECT * FROM $tablename $filtro;";

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
	$busqueda[$a]["cuota"]=$fila["cuota"];
	$busqueda[$a]["precio"]=$fila["precio"];
	$busqueda[$a]["fecha"]=$fila["fecha"];
	//$pagos[$a]["fecha"]=$fila["fecha"];	
	//$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

////////////////

//print_r($busqueda);
?>



<?php 

function getisa1(){
$var="";
foreach($_GET as $k => $v) {
    // Reject items not starting with prefix
	if($k=="p" or $k=="f"){}else{
$var=$var.$k."=".$v."&";
}
}

echo $var;
}

?>



<?php 

//$filtro="WHERE idf=".$_GET['idf']." ";


$tablename="cuotas_categoria";
//$filtro=" ORDER BY id LIMIT 20,10";

$query="SELECT * FROM $tablename;";
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
?>



<?php function relacionarcuotas($id,$t){
/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/
global $host, $user,$password, $dbname,$link;


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
<?php function relacionar($id,$t){
/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;
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
	$filter[$a]["apellido"]=$fila["apellido"];	
	$filter[$a]["nombre"]=$fila["nombre"];		
	$filter[$a]["dni"]=$fila["dni"];
	$filter[$a]["idf"]=$fila["idf"];				
	$a++;
}

mysql_free_result($resultado);
//print_r($filter);

echo  $filter[1]["nombre"]." ".$filter[1]["apellido"]." (".$id.")";

 }?>
 
 
 <script language="JavaScript">
function filtro(n){
		a = document.getElementById("filtroo").value;
		//alert(a);
	   window.location = n+"f="+a
	   
	   
}
</script>
<div class="contenido">
<table width="750" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div align="right">
	<form name="tuformulario1" >
  <select name="filtroo" id="filtroo">

   
	<?php for ($i = 1; $i <= count($filter); $i++) {

if (isset($_GET['f'])){$f=$_GET['f'];}else{$f='no';}

	
	?>
    <option value="<?php echo $filter[$i]["id"]; ?>" <?php if($filter[$i]["id"]==$f){echo 'selected="selected"';} ?> ><?php echo $filter[$i]["nombre"];  ?></option>
	<?php }?>
	 <option value="todos" <?php if($f=='no' or $f=='todos'){echo 'selected="selected"';} ?>>TODOS</option>
  </select>
  <input name="sdfsdf" type="button" value="filtrar" onclick="filtro('?<?php getisa1(); ?>')" />
 
    </form>
	
	</div></td>
  </tr>
</table>



<?php if(!isset($busqueda)){echo "No se encontraron resultados.";}else{ ?>










<table width="750" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td class="tabla"><strong>ID</strong></td>
    <td class="tabla"><strong>Cuota</strong></td>
    <td class="tabla"><strong>Precio</strong></td>
	   <td class="tabla"><strong>Fecha</strong></td>
       <td class="tabla">Acción</td>
  </tr>
  <?php

$d=0;
   for ($i = 1; $i <= count($busqueda); $i++) {
   
         if($d==1){
    $class1='class="celda2"';
   $d=0;
   }else{
   $class1='class="celda1"';
   $d=1;
   }
   ?>
<tr>
    <td <?php echo $class1;  ?>><?php echo $busqueda[$i]["id"]; ?></td>
    <td <?php echo $class1;  ?>><?php relacionarcuotas($busqueda[$i]["cuota"],"cuotas_categoria"); ?></td>
    <td <?php echo $class1;  ?>><?php echo $busqueda[$i]["precio"]; ?></td>
	 <td <?php echo $class1;  ?>><?php echo $busqueda[$i]["fecha"]; ?></td>
     <td <?php echo $class1;  ?> align="center"><form name="tuformulario">
	 <?php //if ($_GET['op']=="5"){ ?>

		<input name="editar" type="button" class="editar" value="Editar" onclick="window.location='?op=8&t=cuotas&n=2&id=<?php echo $busqueda[$i]["id"];?>' "  />
		<input name="eliminar" type="button"  class="eliminar" value="Eliminar" onclick="pregunta(<?php echo $busqueda[$i]["id"];?>)"/>
		
		
		
		
		

		
        <input name="elim_id" type="hidden" id="elim_id" value="<?php echo $busqueda[$i]["id"];?>" />
		
		<?php //} ?>
		<?php if ($_GET['op']=="0"){ ?>
        <a href="?op=2&idf=<?php echo $busqueda[$i]["idf"];?>&id=<?php echo $busqueda[$i]["id"];?>&t=<?php echo $_POST['tabla'];?>">PAGOS</a><?php } ?>
		<?php if ($_GET['op']=="5"){ ?>
		<a href="?op=5&idf=<?php echo $busqueda[$i]["idf"];?>&id=<?php echo $busqueda[$i]["id"];?>&t=<?php echo $_POST['tabla'];?>">Familia</a><?php } ?>
     </form></td>
  </tr>
  <?php }?>
</table>










<?php function paginacion($t){?>


<?php 


/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;


 //TABLA prueba
$tablename=$t;
//$filtro=" ORDER BY id ";


if (isset($_GET['f'])){
	if ($_GET['f']=="todos"){
	$filtro1="";
	}else{
	$filtro1=" WHERE cuota='".$_GET['f']."'";
	}
}else{
$filtro1="";
}

$filtro=" $filtro1 ORDER BY id DESC";
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

$sql       = 'SELECT foo FROM bar WHERE id = 42';
$resultado = mysql_query($query, $enlace);

if (!$resultado) {
    echo "Error de BD, no se pudo consultar la base de datos\n";
    echo "Error MySQL: " . mysql_error();
    exit;
}
$a=1;
//$pagos=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$pagos[$a]["id"]=$fila["id"];
	$pagos[$a]["fecha"]=$fila["fecha"];	
	$pagos[$a]["precio"]=$fila["precio"];	
	$pagos[$a]["cuota"]=$fila["cuota"];				
	$a++;
}

mysql_free_result($resultado);

?>



<?php 

 $reg=count($pagos);
//echo $reg."//";
$numpag=0;
for ($i = 1; $i <= $reg; $i++) {
$i=$i+10;
$numpag=$numpag+1;
}
//echo $numpag;





if (isset($_GET['p'])){
$p=$_GET['p'];
}else{
$p=1;
}




function getisa(){
$var="";
foreach($_GET as $k => $v) {
    // Reject items not starting with prefix
	if($k=="p"){}else{
$var=$var.$k."=".$v."&";
}
}

echo $var;
}

 ?>
<table width="750" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div align="center">
	
	 <?php if ($p==1){}else{  ?>
	<a href="?<?php getisa();?>p=<?php echo $p-1; ?>">&lt; anterior</a>
	
	<?php 
	}
	
	
	if($numpag==1){}else{
	
	 
	for ($i = 1; $i <= $numpag; $i++) {
	
	?>
	
	<?php if ($p==$i){?>
	
	 <strong><?php echo $i; ?></strong>
	<?php }else{ ?>
	
	 <a href="?<?php getisa();?>p=<?php echo $i; ?>"><?php echo $i; ?></a>
	<?php } ?>
	
	 <?php }?>
	 
	<?php if ($p==$numpag){}else{  ?>
	 <a href="?<?php getisa();?>p=<?php echo $p+1; ?>">siguiente &gt;</a>
	 <?php }}?>
	 
	 </div></td>
  </tr>
</table>
<?php //print_r($_GET);?>

<?php  } ?>

<?php

echo "<br>";
 paginacion("cuotas");?>

  
</div>
  
  


<script language="JavaScript">
function pregunta(id){
    if (confirm('¿Estas seguro eliminar esta registro?')){
	   window.location = "?op=8&t=cuotas&n=3&e="+id
    }
}
</script>


<?php }?>


	  <?php }?>
	
	  <?php if ($_GET['n']==1){ 
	  
	  
	  if (!isset($_POST['Submit4'])){ 
	  ?>
	  
	  
	  <?php 

/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;
$filtro="ORDER BY id ASC ";


$tablename="cuotas_categoria";
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
?>



<script>






function validacion() {
estatus=true;

precio = document.getElementById("precio").value;
fecha = document.getElementById("fecha").value;
//alert(valor);

if( precio == null || precio == "" || /^\s+$/.test(precio) ) {
//alert("obligatorio");
estatus=false;
document.getElementById('cartel1').style.display = '';
}else{
document.getElementById('cartel1').style.display = 'none';
}



if( fecha == null || fecha == "" || /^\s+$/.test(fecha) ) {
//alert("obligatorio");
estatus=false;
document.getElementById('cartel2').style.display = '';
}else{
document.getElementById('cartel2').style.display = 'none';
}






format2=fecha.split(" ");
//alert(format2[0]);

fecha=format2[0].split("-");
hora=format2[1].split(":");
//alert(fecha[0]+fecha[1]+fecha[2]);
var ano = fecha[0];
var mes = fecha[1];
var dia = fecha[2];

var horas=hora[0];
var minuto=hora[1];
var segundos=hora[2];
 //alert(horas+minuto+segundos);
valor = new Date(ano, mes, dia, horas, minuto, segundos);
//alert(valor);



 
if(isNaN(valor) ) {
  estatus=false;
  document.getElementById('cartel4').style.display = '';
}else{
	document.getElementById('cartel4').style.display = 'none';
}





  return estatus;//true
}










    













 var objeto2;     

 

  function soloDinero(objeto, e){

  estatus=true;

            var keynum

            var keychar

           var numcheck

    

          if(window.event){ /*/ IE*/

            keynum = e.keyCode

          }

  

          else if(e.which){ /*/ Netscape/Firefox/Opera/*/

            keynum = e.which

             }

   

         

   

            if((keynum>=35 && keynum<=37) ||keynum==8||keynum==9||keynum==46||keynum==39) {

               estatus=true;

           }

  

          if(keynum==190||keynum==110||(keynum>=95&&keynum<=105)||(keynum>=48&&keynum<=57)){

  

            posicion = objeto.value.indexOf('.');

  

           if(posicion==-1) {

               estatus=true;

            }else {                           

            if(!(keynum==190||keynum==110)){

                objeto2=objeto;

               t = setTimeout('dosDecimales()',0);

             estatus=true;

           }else{

              objeto2=null;

                estatus=false;

            }

          }

         }else {

        estatus=false;

     }
	 
	 //alert(estatus);
	 return estatus;

    }





function dosDecimales(){    

  

        var objeto = objeto2;

     var posicion = objeto.value.indexOf('.');

        var decimal = 2;

  

      if(objeto.value.length - posicion < decimal){

        objeto.value = objeto.value.substr(0,objeto.value.length-1);                                        

      }else {

       objeto.value = objeto.value.substr(0,posicion+decimal+1);                                            

      }

       return;

    }



function validacion1(){
/*
valor = document.getElementById("precio").value;
if( isNaN(valor) ) {
	document.getElementById('cartel1').style.display = '';
  return false;
}
*/

alert("lalal");
return false;
}

</script>

	  

	
	
<form id="form4" name="form4" method="post" action="" onsubmit="return validacion()">
  
  <div  class="formulario10" >

<strong>FORMULARIO DE CUOTAS</strong>

<p>
  
  <table width="100%" border="0" cellpadding="0" cellspacing="0" >
    <tr>
      <td>
	  
	  Categoria Cuota:<br />

        <select name="cuota" id="cuota">
	<?php for ($i = 1; $i <= count($filter); $i++) {
	?>
    <option value="<?php echo $filter[$i]["id"]; ?>"><?php echo $filter[$i]["nombre"];  ?></option>
	<?php }?>
        </select>

<div class="espacio1"></div>
  
  
	  </td>
    </tr>
    <tr>
      <td>  <label>
    Precio:<br />
    <input name="precio" type="text" id="precio" onkeydown="return soloDinero(this, event);"  />
    </label>
  <div id="cartel1" style="display:none;" class="cartel1">Este campo es requerido.</div>

<div class="espacio1"></div>

</td>
    </tr>
    <tr>
      <td>
    <label>
    Fecha:<br />
    <input name="fecha" type="text" id="fecha" value="<?php echo date("d-m-Y H:i:s"); ?>" />
    </label>
  <div id="cartel2" style="display:none;" class="cartel1">Este campo es requerido.</div>
	  <div id="cartel4" style="display:none;" class="cartel1">Este campo debe ser una fecha valida.</div>

<div class="espacio1"></div>
</td>
    </tr>
    <tr>
      <td>   


    <input type="submit" name="Submit4" value="GUARDAR" />

</td>
    </tr>
  </table>

  </div>

</form>

  <?php }else{?>
 
 
 
 
  <?php 


/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");

*/

global $host, $user,$password, $dbname,$link;



	//TABLA OFERTAS
	$tablename=$_GET['t'];
	//$filtro="WHERE dni='".$dni."'";
	$query="INSERT INTO $tablename (cuota, precio,fecha) VALUES ('".$_POST['cuota']."','".$_POST['precio']."','".$_POST['fecha']."');";
	//echo $query;
	mysql_select_db($dbname,$link);
	mysql_query($query,$link);
	$my_error = mysql_error($link);
	if(!empty($my_error)) {
	//cartel(3,"Hubo un error al insertar el registro. $my_error"); 
	echo "Hubo un error al insertar el registro. $my_error";
	} else {
	//echo "SEEEEEEEEEEEEEE";
	//echo cartel(3,"SSEEEEEEEEE");
		echo '<div style="background-color: #BBFFBB;border: medium solid;margin-bottom: 10px;margin-left: 10px;margin-top: 10px;padding-bottom: 10px;padding-left: 10px;padding-top: 10px;width: 500px;">
<table  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td ><div align="center" style="font-weight:bold; margin-left:70px; margin-right:15px;">Se agrego con exito la Cuota. </div></td>
    <td ><img src="tilde_bien.png" width="117" height="120" /></td>
  </tr>
</table>
</div>';
	
	}
	?>
	
	<script language="JavaScript" type="text/javascript">
var pagina="?op=<?php echo $_GET['op']; ?>&t=<?php echo $_GET['t']; ?>&n=1"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 3000);

</script>
 
 
 
  
 <?php  }
  
   }?>
	
	
		<?php if ($_GET['n']==2){ ?>
	<!-- modificar aqui-->
	
	<?php
		  if (!isset($_POST['Submit4'])){ 
	  ?>
	  
	  
	  <?php
	  
	   /*
	  
	   if( $_SERVER['SERVER_NAME'] == "localhost"){
	  
	 
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;



 //TABLA prueba
$tablename=$_GET['t'];
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE id='".$_GET['id']."' ORDER BY id DESC";
$query="SELECT * FROM $tablename $filtro;";

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
	$busqueda[$a]["cuota"]=$fila["cuota"];
	$busqueda[$a]["precio"]=$fila["precio"];
	$busqueda[$a]["fecha"]=$fila["fecha"];
	//$busqueda[$a]["idf"]=$fila["idf"];
	//$busqueda[$a]["email"]=$fila["email"];
	//$pagos[$a]["fecha"]=$fila["fecha"];	
	//$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

//print_r($busqueda);
?>
	  
	
  <?php 

/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;
$filtro="ORDER BY id ASC ";


$tablename="cuotas_categoria";
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
?>



<?php function relacionar($id,$t){
/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;
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
	//$filter[$a]["apellido"]=$fila["apellido"];	
	$filter[$a]["nombre"]=$fila["nombre"];		
	//$filter[$a]["dni"]=$fila["dni"];
	//$filter[$a]["idf"]=$fila["idf"];				
	$a++;
}

mysql_free_result($resultado);
//print_r($filter);

echo  $filter[1]["nombre"];

 }?>
	
	
	
<form id="form4" name="form4" method="post" action="" onsubmit="return validacion()">
  
  <div  class="formulario10" >

<strong>MODIFICAR FORMULARIO DE CUOTAS</strong>

<p>
  
  <table width="100%" border="0" cellpadding="0" cellspacing="0" >
    <tr>
      <td>
	  
	    <label>Categoria Cuota:  </label><br />
		

        <select name="cuota" id="cuota">
		<option value="<?php echo $busqueda[1]["cuota"]; ?>"><?php  relacionar($busqueda[1]["cuota"],"cuotas_categoria");  ?></option>
	<?php for ($i = 1; $i <= count($filter); $i++) {
	
	if($filter[$i]["id"]==$busqueda[1]["cuota"]){}else{
	?>
    <option value="<?php echo $filter[$i]["id"]; ?>"><?php echo $filter[$i]["nombre"];  ?></option>
	<?php }}?>
        </select>
		
	  <!-- <input name="cuota" type="text" id="cuota" value="<?php //echo $busqueda[1]["cuota"]; ?>"  /> -->
		

<div class="espacio1"></div>
  
  
	  </td>
    </tr>
    <tr>
      <td>  <label>
    Precio:<br />
    <input name="precio" type="text" id="precio" onkeydown="return soloDinero(this, event);" value="<?php echo $busqueda[1]["precio"]; ?>"  />
    </label>
  <div id="cartel1" style="display:none;" class="cartel1">Este campo es requerido.</div>

<div class="espacio1"></div>

</td>
    </tr>
    <tr>
      <td>
    <label>
    Fecha:<br />
    <input name="fecha" type="text" id="fecha" value="<?php echo $busqueda[1]["fecha"]; ?>" />
    </label>
  <div id="cartel2" style="display:none;" class="cartel1">Este campo es requerido.</div>
	  <div id="cartel4" style="display:none;" class="cartel1">Este campo debe ser una fecha valida.</div>

<div class="espacio1"></div>
</td>
    </tr>
    <tr>
      <td>   


    <input type="submit" name="Submit4" value="GUARDAR" />

</td>
    </tr>
  </table>

  </div>

</form>
	
	
  <?php }else{?>
  guardar modificar
  
  
  
  
  <?php 
  
  /*
  if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;
  

$tablename=$_GET['t'];
$query="UPDATE $tablename SET precio='".$_POST['precio']."', cuota='".$_POST['cuota']."', fecha='".$_POST['fecha']."' WHERE id=".$_GET['id']." ;";
//echo $query;
//$result=mysql_db_query ($dbname, $query, $link);




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

//mysql_free_result($resultado);

  ?>
  
  
  	<script language="JavaScript" type="text/javascript">
var pagina="?op=<?php echo $_GET['op']; ?>&t=<?php echo $_GET['t']; ?>&n=0"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>
  
 <?php  }
 
 
	}?>
	
	
		<?php if ($_GET['n']==3){ ?>
	eliminar
	
	
	<?php 
	/*
	if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");

*/

global $host, $user,$password, $dbname,$link;


				$tablename=$_GET['t'];
				$filtro=" ";
				$query="DELETE FROM $tablename WHERE id='".$_GET['e']."';";
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

//mysql_free_result($resultado);?>

	<script language="JavaScript" type="text/javascript">
var pagina="?op=<?php echo $_GET['op']; ?>&t=<?php echo $_GET['t']; ?>&n=0"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>
	
	
	
	<?php }?>
	
	
	
		
		
		<?php
		break;
		
		
    case "familias": ?>
  
  
  
	
		<?php if ($_GET['n']==0){ ?>
<p><a href="1.php?op=7&amp;t=familias&amp;n=1">Agregar familia     </a>
<p>listar



<?php 
/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;



 //TABLA prueba
$tablename=$_GET['t'];
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro=" ORDER BY id DESC";
$query="SELECT * FROM $tablename $filtro;";

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
	//$pagos[$a]["fecha"]=$fila["fecha"];	
	//$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

////////////////

//print_r($busqueda);
?>



<?php if(!isset($busqueda)){echo "No se encontraron resultados.";}else{ ?>
<table width="750" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td><strong>idf</strong></td>
    <td>&nbsp;</td>
  </tr>
  <?php


   for ($i = 1; $i <= count($busqueda); $i++) {?>
<tr>
    <td><?php echo $busqueda[$i]["id"]; ?></td>
     <td><form name="tuformulario">
	 <?php //if ($_GET['op']=="5"){ ?>

		<input name="editar" type="button" value="editar" onclick="window.location='?op=7&t=familias&n=2&id=<?php echo $busqueda[$i]["id"];?>' " />
		<input name="eliminar" type="button" value="Eliminar" onclick="pregunta(<?php echo $busqueda[$i]["id"];?>)"/>
        <input name="elim_id" type="hidden" id="elim_id" value="<?php echo $busqueda[$i]["id"];?>" />
		
		<?php //} ?>
		<?php if ($_GET['op']=="0"){ ?>
        <a href="?op=2&idf=<?php echo $busqueda[$i]["idf"];?>&id=<?php echo $busqueda[$i]["id"];?>&t=<?php echo $_POST['tabla'];?>">PAGOS</a><?php } ?>
		<?php if ($_GET['op']=="5"){ ?>
		<a href="?op=5&idf=<?php echo $busqueda[$i]["idf"];?>&id=<?php echo $busqueda[$i]["id"];?>&t=<?php echo $_POST['tabla'];?>">Familia</a><?php } ?>
     </form></td>
  </tr>
  <?php }?>
</table>
<?php }?>
<p>Paginacion


<script language="JavaScript">
function pregunta(id){
    if (confirm('¿Estas seguro eliminar esta registro?')){
	   window.location = "?op=7&t=familias&n=3&e="+id
    }
}
</script>





	  <?php }?>
	
	  <?php if ($_GET['n']==1){ 
	  
	  
	  if (!isset($_POST['Submit4'])){ 
	  ?>
<div  class="formulario10" >

<strong>FORMULARIO DE FAMLIAS</strong>

<p>
<form id="form4" name="form4" method="post" action="">


  <label>Haga click en generar para crear una nueva familia. recuerde tomart nota del numero de idfamilia al clickear en el boton. </label>
  <p>
    <label>
    <input type="submit" name="Submit4" value="GENERAR" />
    </label>
  </p>
  </form>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>
  <?php }else{?>
 
 
 
 
  <?php 


/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;


	//TABLA OFERTAS
	$tablename=$_GET['t'];
	//$filtro="WHERE dni='".$dni."'";
	$query="INSERT INTO $tablename (id) VALUES ('');";
	//echo $q
	mysql_select_db($dbname,$link);
	mysql_query($query,$link);
	$my_error = mysql_error($link);
	if(!empty($my_error)) {
	//cartel(3,"Hubo un error al insertar el registro. $my_error"); 
	echo "Hubo un error al insertar el registro. $my_error";
	} else {
	//echo "SEEEEEEEEEEEEEE";
	//echo cartel(3,"SSEEEEEEEEE");
	}
	?>
	
	
	
	
		  <?php 
		 /* 
		  if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/


global $host, $user,$password, $dbname,$link;



 //TABLA prueba
$tablename=$_GET['t'];
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="ORDER BY id ASC";
$query="SELECT * FROM $tablename $filtro;";

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
	//$pagos[$a]["fecha"]=$fila["fecha"];	
	//$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);
//print_r($busqueda);
$ultimo_idf=$busqueda[count($busqueda)]['id'];
?>

<div  class="formulario10" >

<strong>FORMULARIO DE FAMLIAS</strong>

<p><strong><?php echo $ultimo_idf; ?> </strong> aqui se muestra el numero de idf. como para que el usuario puedo copiarlo o tomar nota. <br ><a href="?op=7&amp;t=familias&amp;n=1"> finalizar.</a></div>
	
	<!--
	<script language="JavaScript" type="text/javascript">
var pagina="?op=<?php //echo $_GET['op']; ?>&t=<?php //echo $_GET['t']; ?>&n=0"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>
 
 -->
 
 
  
 <?php  }
  
   }?>
	
	
		<?php if ($_GET['n']==2){ ?>
	modificar
	
	<?php
		  if (!isset($_POST['Submit4'])){ 
	  ?>
	  
	  
	  <?php
	  
	  /*
	   if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");

*/

global $host, $user,$password, $dbname,$link;


 //TABLA prueba
$tablename=$_GET['t'];
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE id='".$_GET['id']."' ORDER BY id DESC";
$query="SELECT * FROM $tablename $filtro;";

//$sql = "SELECT * FROM noticias WHERE noticia like ‘%$buscar%’ ORDER BY id DESC";
echo $query;






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
	$busqueda[$a]["apellido"]=$fila["apellido"];
	$busqueda[$a]["nombre"]=$fila["nombre"];
	$busqueda[$a]["dni"]=$fila["dni"];
	$busqueda[$a]["idf"]=$fila["idf"];
	$busqueda[$a]["email"]=$fila["email"];
	//$pagos[$a]["fecha"]=$fila["fecha"];	
	//$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

print_r($busqueda);
?>
	
	
  
	  
formulario padres</p> ss
<form id="form4" name="form4" method="post" action="">
  <label>
  Nombre <br />
  <input name="nombre" type="text" id="nombre" value="<?php echo $busqueda[1]["nombre"]; ?>" />
  </label>
<p>
    <label>
    Apellido<br />
    <input name="apellido" type="text" id="apellido"  value="<?php echo $busqueda[1]["apellido"]; ?>" />
    </label>
  </p>
  <p>
    <label>DNI<br />
    <input name="dni" type="text" id="dni"   value="<?php echo $busqueda[1]["dni"]; ?>"/>
    </label>
</p>
  <p>
    <label>IDF<br />
    <input name="idf" type="text" id="idf"  value="<?php echo $busqueda[1]["idf"]; ?>" />
    </label>
</p>
  <p>
    <label>Email<br />
    <input name="email" type="text" id="email"  value="<?php echo $busqueda[1]["email"]; ?>" />
    </label>
</p>
  <p>
    <label>
    <input type="submit" name="Submit4" value="GUARDAR" />
    </label>
  </p>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>
  <?php }else{?>
  guardar modificar
  
  
  
  
  <?php /*
  if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;
  

$tablename=$_GET['t'];
$query="UPDATE $tablename SET nombre='".$_POST['nombre']."',apellido='".$_POST['apellido']."',dni='".$_POST['dni']."',idf='".$_POST['idf']."',email='".$_POST['email']."' WHERE id=".$_GET['id']." ;";
echo $query;
//$result=mysql_db_query ($dbname, $query, $link);




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

//mysql_free_result($resultado);

  ?>
  
  
  	<script language="JavaScript" type="text/javascript">
var pagina="?op=<?php echo $_GET['op']; ?>&t=<?php echo $_GET['t']; ?>&n=0"
function redireccionar() 
{
location.href=pagina
} 
//setTimeout ("redireccionar()", 000);

</script>
  
 <?php  }
 
 
	}?>
	
	
		<?php if ($_GET['n']==3){ ?>
	eliminar
	
	
	<?php 
	/*
	if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

				$tablename=$_GET['t'];
				$filtro=" ";
				$query="DELETE FROM $tablename WHERE id='".$_GET['e']."';";
				echo $query;
				
				
				
				
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

//mysql_free_result($resultado);?>

	<script language="JavaScript" type="text/javascript">
var pagina="?op=<?php echo $_GET['op']; ?>&t=<?php echo $_GET['t']; ?>&n=0"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>
	
	
	
	<?php }?>
	
	
  
 
  <?php
        break;
    case "padres": ?>
	
	
		<?php if ($_GET['n']==0){ ?>
<p><a href="1.php?op=7&amp;t=padres&amp;n=1">Agregar Padre     </a>
<p>listar



<?php 
/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;



 //TABLA prueba
$tablename=$_GET['t'];
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro=" ORDER BY id DESC";
$query="SELECT * FROM $tablename $filtro;";

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
	$busqueda[$a]["apellido"]=$fila["apellido"];
	$busqueda[$a]["nombre"]=$fila["nombre"];
	$busqueda[$a]["dni"]=$fila["dni"];
	$busqueda[$a]["idf"]=$fila["idf"];
	//$pagos[$a]["fecha"]=$fila["fecha"];	
	//$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

////////////////

//print_r($busqueda);
?>



<?php if(!isset($busqueda)){echo "No se encontraron resultados.";}else{ ?>
<table width="750" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td><strong>Apellido</strong></td>
    <td><strong>Nombre</strong></td>
    <td><strong>DNI</strong></td>
    <td>&nbsp;</td>
  </tr>
  <?php


   for ($i = 1; $i <= count($busqueda); $i++) {?>
<tr>
    <td><?php echo $busqueda[$i]["apellido"]; ?></td>
    <td><?php echo $busqueda[$i]["nombre"]; ?></td>
    <td><?php echo $busqueda[$i]["dni"]; ?></td>
     <td><form name="tuformulario">
	 <?php //if ($_GET['op']=="5"){ ?>

		<input name="editar" type="button" value="editar" onclick="window.location='?op=7&t=padres&n=2&id=<?php echo $busqueda[$i]["id"];?>' " />
		<input name="eliminar" type="button" value="Eliminar" onclick="pregunta(<?php echo $busqueda[$i]["id"];?>)"/>
        <input name="elim_id" type="hidden" id="elim_id" value="<?php echo $busqueda[$i]["id"];?>" />
		
		<?php //} ?>
		<?php if ($_GET['op']=="0"){ ?>
        <a href="?op=2&idf=<?php echo $busqueda[$i]["idf"];?>&id=<?php echo $busqueda[$i]["id"];?>&t=<?php echo $_POST['tabla'];?>">PAGOS</a><?php } ?>
		<?php if ($_GET['op']=="5"){ ?>
		<a href="?op=5&idf=<?php echo $busqueda[$i]["idf"];?>&id=<?php echo $busqueda[$i]["id"];?>&t=<?php echo $_POST['tabla'];?>">Familia</a><?php } ?>
     </form></td>
  </tr>
  <?php }?>
</table>
<?php }?>
<p>Paginacion


<script language="JavaScript">
function pregunta(id){
    if (confirm('¿Estas seguro eliminar esta registro?')){
	   window.location = "?op=7&t=padres&n=3&e="+id
    }
}
</script>





	  <?php }?>
	
	  <?php if ($_GET['n']==1){ 
	  
	  
	  if (!isset($_POST['Submit4'])){ 
	  ?>
	  
	  
	  
	  <script>



function validacion3() {
alert("see");
return false;
}


function validacion() {
estatus=true;

valor = document.getElementById("nombre").value;
apellido = document.getElementById("apellido").value;
dni = document.getElementById("dni").value;
idf = document.getElementById("idf").value;

//alert(valor);

if( valor == null || valor == "" || /^\s+$/.test(valor) ) {
//alert("obligatorio");
estatus=false;
document.getElementById('cartel1').style.display = '';
}else{
document.getElementById('cartel1').style.display = 'none';
}


if( apellido == null || apellido == "" || /^\s+$/.test(apellido) ) {
//alert("obligatorio");
estatus=false;
document.getElementById('cartel2').style.display = '';
}else{
document.getElementById('cartel2').style.display = 'none';
}

if( dni == null || dni == "" || /^\s+$/.test(dni) ) {
//alert("obligatorio");
estatus=false;
document.getElementById('cartel3').style.display = '';
}else{
document.getElementById('cartel3').style.display = 'none';
}

if( idf == null || idf == "" || /^\s+$/.test(idf) ) {
//alert("obligatorio");
estatus=false;
document.getElementById('cartel4').style.display = '';
}else{
document.getElementById('cartel4').style.display = 'none';
}


  return estatus;//true
}





function validacion1(){
alert("lalal");
return false;
}





//Función que permite solo Números
function ValidarNumeros(e) {

//
/*
estatus=true;
var keynum
var keychar
var numcheck

if(window.event){ 
keynum = e.keyCode
}
else if(e.which){
keynum = e.which
 }
 
 
        if((keynum>=35 && keynum<=37) ||keynum==8||keynum==9||keynum==46||keynum==39) {

               estatus=true;
alert("asdasd");
           }   
   
   */
   var keynum = window.event ? window.event.keyCode : e.which;
if ((keynum == 8))
return true;

return /\d/.test(String.fromCharCode(keynum));

/*   

 if ((keynum < 48) || (keynum > 57))
  
  
  estatus=false;
}
*/
//return estatus;

}

</script>	
	  
	  
<div  class="formulario10" >

<strong>FORMULARIO DE PADRES</strong>
<p>

<form id="form4" name="form4" method="post" action="" onsubmit="return validacion()">


<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>  <label>
  Nombre padree</label><br>
  <input name="nombre" type="text" id="nombre" />
  
  <div id="cartel1" style="display:none;" class="cartel1">Este campo es requerido.</div>
  <div class="espacio1"></div>
  </td>
  </tr>
  <tr>
    <td>    <label>
    Apellido    </label><br>
    <input name="apellido" type="text" id="apellido" />
	<div id="cartel2" style="display:none;" class="cartel1">Este campo es requerido.</div>
	 <div class="espacio1"></div>
	</td>
  </tr>
  <tr>
    <td>    <label>DNI </label><br />
    <input name="dni" type="text" id="dni" onkeypress="return ValidarNumeros(event)" />
<div id="cartel3" style="display:none;"  class="cartel1"  >Este campo es requerido.</div>
 <div class="espacio1"></div>

</td>
  </tr>
  <tr>
    <td>    <label>IDF</label><br />
    <input name="idf" type="text" id="idf" onkeypress="return ValidarNumeros(event)" />
    
	<div id="cartel4" style="display:none;" class="cartel1">Este campo es requerido.</div>
	
	 <div class="espacio1"></div>
	</td>
  </tr>
  <tr>
    <td>      <label>Email</label><br />
    <input name="email" type="text" id="email" />
	 <div class="espacio1"></div></td>
  </tr>
  <tr>
    <td><input type="submit" name="Submit4" value="GUARDAR" /></td>
  </tr>
</table>


   
</form>
</div>

  <?php }else{?>
 
 
 
 
  <?php 


/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;


	//TABLA OFERTAS
	$tablename=$_GET['t'];
	//$filtro="WHERE dni='".$dni."'";
	$query="INSERT INTO $tablename (nombre, apellido,idf,dni,email) VALUES ('".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['idf']."','".$_POST['dni']."','".$_POST['email']."');";
	//echo $q
	mysql_select_db($dbname,$link);
	mysql_query($query,$link);
	$my_error = mysql_error($link);
	if(!empty($my_error)) {
	//cartel(3,"Hubo un error al insertar el registro. $my_error"); 
	echo "Hubo un error al insertar el registro. $my_error";
	} else {
		echo '<div style="background-color: #BBFFBB;border: medium solid;margin-bottom: 10px;margin-left: 10px;margin-top: 10px;padding-bottom: 10px;padding-left: 10px;padding-top: 10px;width: 500px;">
<table  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td ><div align="center" style="font-weight:bold; margin-left:70px; margin-right:15px;">Se agrego con exito el padre. </div></td>
    <td ><img src="tilde_bien.png" width="117" height="120" /></td>
  </tr>
</table>
</div>';
	//echo cartel(3,"SSEEEEEEEEE");
	}
	?>
	
	<script language="JavaScript" type="text/javascript">
var pagina="?op=7&t=padres&n=1"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 3000);

</script>
 
 
 
  
 <?php  }
  
   }?>
	
	
		<?php if ($_GET['n']==2){//modificar ?>
	
	
	<?php
		  if (!isset($_POST['Submit4'])){ 
	  ?>
	  
	  
	  <?php
	  
	  /* if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");

*/

global $host, $user,$password, $dbname,$link;


 //TABLA prueba
$tablename=$_GET['t'];
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE id='".$_GET['id']."' ORDER BY id DESC";
$query="SELECT * FROM $tablename $filtro;";

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
	$busqueda[$a]["apellido"]=$fila["apellido"];
	$busqueda[$a]["nombre"]=$fila["nombre"];
	$busqueda[$a]["dni"]=$fila["dni"];
	$busqueda[$a]["idf"]=$fila["idf"];
	$busqueda[$a]["email"]=$fila["email"];
	//$pagos[$a]["fecha"]=$fila["fecha"];	
	//$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

//print_r($busqueda);
?>
	  
	<div class="formulario10">
	<b>FORMULARIO MODIFICAR PADRE</b><p>
	<form id="form4" name="form4" method="post" action="">
  <label>
  Nombre<br />
  <input name="nombre" type="text" id="nombre" value="<?php echo $busqueda[1]["nombre"]; ?>" />
  </label>
  <p>
    <label>
    Apellido<br />
    <input name="apellido" type="text" id="apellido"  value="<?php echo $busqueda[1]["apellido"]; ?>" />
    </label>
  </p>
  <p>
    <label>DNI<br />
    <input name="dni" type="text" id="dni"   value="<?php echo $busqueda[1]["dni"]; ?>"/>
    </label>
</p>
  <p>
    <label>IDF<br />
    <input name="idf" type="text" id="idf"  value="<?php echo $busqueda[1]["idf"]; ?>" />
    </label>
</p>
  <p>
    <label>Email<br />
    <input name="email" type="text" id="email"  value="<?php echo $busqueda[1]["email"]; ?>" />
    </label>
</p>
  <p>
    <label>
    <input type="submit" name="Submit4" value="GUARDAR" />
    </label>
  </p>
</form>
</div>  

  <?php }else{// guardar modificar ?>
 
  
  
  
  
  <?php 
  
  /*
  if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;
  

$tablename=$_GET['t'];
$query="UPDATE $tablename SET nombre='".$_POST['nombre']."',apellido='".$_POST['apellido']."',dni='".$_POST['dni']."',idf='".$_POST['idf']."',email='".$_POST['email']."' WHERE id=".$_GET['id']." ;";
//echo $query;
//$result=mysql_db_query ($dbname, $query, $link);




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

//mysql_free_result($resultado);

  ?>
  
  
  	<script language="JavaScript" type="text/javascript">
var pagina="?op=5"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>
  
 <?php  }
 
 
	}?>
	
	
		<?php if ($_GET['n']==3){//eliminar ?>
	
	
	
	<?php 
	/*
	if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;

				$tablename=$_GET['t'];
				$filtro=" ";
				$query="DELETE FROM $tablename WHERE id='".$_GET['e']."';";
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

//mysql_free_result($resultado);?>

	<script language="JavaScript" type="text/javascript">
var pagina="?op=5"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>
	
	
	
	<?php }?>
	
	
	
	

  <?php
        break;
    case "cursos": ?>
	
	cursos
	
	
	<?php if ($_GET['n']==0){ ?>
<p><a href="1.php?op=9&amp;t=cursos&amp;n=1">Agregar Curso    </a>
<p>listar
	  <?php }?>
	
	  <?php if ($_GET['n']==1){ 
	  
	  
	  if (!isset($_POST['Submit4'])){ 
	  ?>
<form id="form4" name="form4" method="post" action="">
  <label>
  Nombre<br />
  <input name="nombre" type="text" id="nombre" />
  </label>
  <p>
    <label></label>
    <label>
    <input type="submit" name="Submit4" value="GUARDAR" />
    </label>
  </p>
</form>
  <?php }else{?>
  guardar agregar
  
 <?php  }
  
   }?>
	
	
		<?php if ($_GET['n']==2){ ?>
	modificar
	
	<?php
		  if (!isset($_POST['Submit4'])){ 
	  ?>
	<form id="form4" name="form4" method="post" action="">
  <label>
  Nombre<br />
  <input name="nombre" type="text" id="nombre" />
  </label>
  <p>
    <label></label>
    <label>
    <input type="submit" name="Submit4" value="GUARDAR" />
    </label>
  </p>
  </form>
  <?php }else{?>
  guardar modificar
  
 <?php  }
 
 
	}?>
	
	
		<?php if ($_GET['n']==3){ ?>
	eliminar
	<?php }?>
	
  <?php
       
        break;
		
		
	        
    case "madres":  ?>
	
	
	
		<?php if ($_GET['n']==0){ ?>
<p><a href="1.php?op=7&amp;t=madres&amp;n=1">Agregar Madre     </a>
<p>listar



<?php 
/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;



 //TABLA prueba
$tablename=$_GET['t'];
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro=" ORDER BY id DESC";
$query="SELECT * FROM $tablename $filtro;";

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
	$busqueda[$a]["apellido"]=$fila["apellido"];
	$busqueda[$a]["nombre"]=$fila["nombre"];
	$busqueda[$a]["dni"]=$fila["dni"];
	$busqueda[$a]["idf"]=$fila["idf"];
	//$pagos[$a]["fecha"]=$fila["fecha"];	
	//$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

////////////////

//print_r($busqueda);
?>



<?php if(!isset($busqueda)){echo "No se encontraron resultados.";}else{ ?>
<table width="750" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td><strong>Apellido</strong></td>
    <td><strong>Nombre</strong></td>
    <td><strong>DNI</strong></td>
    <td>&nbsp;</td>
  </tr>
  <?php


   for ($i = 1; $i <= count($busqueda); $i++) {?>
<tr>
    <td><?php echo $busqueda[$i]["apellido"]; ?></td>
    <td><?php echo $busqueda[$i]["nombre"]; ?></td>
    <td><?php echo $busqueda[$i]["dni"]; ?></td>
     <td><form name="tuformulario">
	 <?php //if ($_GET['op']=="5"){ ?>

		<input name="editar" type="button" value="Editar"   />
		<input name="eliminar" type="button" value="Eliminar" onclick="pregunta(<?php echo $busqueda[$i]["id"];?>)"/>
        <input name="elim_id" type="hidden" id="elim_id" value="<?php echo $busqueda[$i]["id"];?>" />
		<?php //} ?>
		<?php if ($_GET['op']=="0"){ ?>
        <a href="?op=2&idf=<?php echo $busqueda[$i]["idf"];?>&id=<?php echo $busqueda[$i]["id"];?>&t=<?php echo $_POST['tabla'];?>">PAGOS</a><?php } ?>
		<?php if ($_GET['op']=="5"){ ?>
		<a href="?op=5&idf=<?php echo $busqueda[$i]["idf"];?>&id=<?php echo $busqueda[$i]["id"];?>&t=<?php echo $_POST['tabla'];?>">Familia</a><?php } ?>
     </form></td>
  </tr>
  <?php }?>
</table>
<?php }?>
<p>Paginacion




	  <?php }?>
	
	  <?php if ($_GET['n']==1){ 
	  
	  
	  if (!isset($_POST['Submit4'])){ 
	  ?>
	  
	  
	  
	  
	  	  <script>



function validacion3() {
alert("see");
return false;
}


function validacion() {
estatus=true;

valor = document.getElementById("nombre").value;
apellido = document.getElementById("apellido").value;
dni = document.getElementById("dni").value;
idf = document.getElementById("idf").value;

//alert(valor);

if( valor == null || valor == "" || /^\s+$/.test(valor) ) {
//alert("obligatorio");
estatus=false;
document.getElementById('cartel1').style.display = '';
}else{
document.getElementById('cartel1').style.display = 'none';
}


if( apellido == null || apellido == "" || /^\s+$/.test(apellido) ) {
//alert("obligatorio");
estatus=false;
document.getElementById('cartel2').style.display = '';
}else{
document.getElementById('cartel2').style.display = 'none';
}

if( dni == null || dni == "" || /^\s+$/.test(dni) ) {
//alert("obligatorio");
estatus=false;
document.getElementById('cartel3').style.display = '';
}else{
document.getElementById('cartel3').style.display = 'none';
}

if( idf == null || idf == "" || /^\s+$/.test(idf) ) {
//alert("obligatorio");
estatus=false;
document.getElementById('cartel4').style.display = '';
}else{
document.getElementById('cartel4').style.display = 'none';
}


  return estatus;//true
}





function validacion1(){
alert("lalal");
return false;
}





//Función que permite solo Números
function ValidarNumeros(e) {

//
/*
estatus=true;
var keynum
var keychar
var numcheck

if(window.event){ 
keynum = e.keyCode
}
else if(e.which){
keynum = e.which
 }
 
 
        if((keynum>=35 && keynum<=37) ||keynum==8||keynum==9||keynum==46||keynum==39) {

               estatus=true;
alert("asdasd");
           }   
   
   */
   var keynum = window.event ? window.event.keyCode : e.which;
if ((keynum == 8))
return true;

return /\d/.test(String.fromCharCode(keynum));

/*   

 if ((keynum < 48) || (keynum > 57))
  
  
  estatus=false;
}
*/
//return estatus;

}

</script>	


<div  class="formulario10" >

<strong>FORMULARIO DE MADRE</strong>

<p>


<form id="form4" name="form4" method="post" action=""  onsubmit="return validacion()">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>  <label>
  Nombre </label><br />
  <input name="nombre" type="text" id="nombre" />
 
   <div id="cartel1" style="display:none;" class="cartel1">Este campo es requerido.</div>
<div class="espacio1"></div></td>
  </tr>
  <tr>
    <td>    <label>
    Apellido</label><br />
    <input name="apellido" type="text" id="apellido" />
    
  <div id="cartel2" style="display:none;" class="cartel1">Este campo es requerido.</div>
<div class="espacio1"></div>
</td>
  </tr>
  <tr>
    <td>    <label>DNI <br />
    <input name="dni" type="text" id="dni" onkeypress="return ValidarNumeros(event)" />
   </label>
  <div id="cartel3" style="display:none;" class="cartel1">Este campo es requerido.</div>
<div class="espacio1"></div></td>
  </tr>
  <tr>
    <td>
    <label>IDF<br />
    <input name="idf" type="text" id="idf" onkeypress="return ValidarNumeros(event)" />
    </label>
  <div id="cartel4" style="display:none;" class="cartel1">Este campo es requerido.</div>
<div class="espacio1"></div>
</td>
  </tr>
  <tr>
    <td> <label>Email<br />
    <input name="email" type="text" id="email" />
    </label>
<div class="espacio1"></div>
</td>
  </tr>
  <tr>
    <td><input type="submit" name="Submit4" value="GUARDAR" /></td>
  </tr>
</table>

</form>
</div>
  <?php }else{// guardar agregar ?>
 
  
  
  
  
  
  
  
  
  
  
  
  
 
  <?php 


/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;


	//TABLA OFERTAS
	$tablename=$_GET['t'];
	//$filtro="WHERE dni='".$dni."'";
	$query="INSERT INTO $tablename (nombre, apellido,idf,dni,email) VALUES ('".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['idf']."','".$_POST['dni']."','".$_POST['email']."');";
	//echo $q
	mysql_select_db($dbname,$link);
	mysql_query($query,$link);
	$my_error = mysql_error($link);
	if(!empty($my_error)) {
	//cartel(3,"Hubo un error al insertar el registro. $my_error"); 
	echo "Hubo un error al insertar el registro. $my_error";
	} else {
		echo '<div style="background-color: #BBFFBB;border: medium solid;margin-bottom: 10px;margin-left: 10px;margin-top: 10px;padding-bottom: 10px;padding-left: 10px;padding-top: 10px;width: 500px;">
<table  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td ><div align="center" style="font-weight:bold; margin-left:70px; margin-right:15px;">La madre se agrego con exito. </div></td>
    <td ><img src="tilde_bien.png" width="117" height="120" /></td>
  </tr>
</table>
</div>';
	//echo cartel(3,"SSEEEEEEEEE");
	}
	?>
	
	<script language="JavaScript" type="text/javascript">
var pagina="?op=7&t=madres&n=1"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 3000);

</script>
 
 
 
 
	
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 <?php  }
  
   }?>
	
	
			<?php if ($_GET['n']==2){//modificar ?>
	
	
	<?php
		  if (!isset($_POST['Submit4'])){ 
	  ?>
	  
	  
	  <?php
	  
	  /* if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");

*/

global $host, $user,$password, $dbname,$link;


 //TABLA prueba
$tablename=$_GET['t'];
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE id='".$_GET['id']."' ORDER BY id DESC";
$query="SELECT * FROM $tablename $filtro;";

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
	$busqueda[$a]["apellido"]=$fila["apellido"];
	$busqueda[$a]["nombre"]=$fila["nombre"];
	$busqueda[$a]["dni"]=$fila["dni"];
	$busqueda[$a]["idf"]=$fila["idf"];
	$busqueda[$a]["email"]=$fila["email"];
	//$pagos[$a]["fecha"]=$fila["fecha"];	
	//$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

//print_r($busqueda);
?>
	  <div  class="formulario10">
	  
<b>FORMULARIO MODIFICAR MADRE</b></p>
<form id="form4" name="form4" method="post" action="">
  <label>
  Nombre<br />
  <input name="nombre" type="text" id="nombre" value="<?php echo $busqueda[1]["nombre"]; ?>" />
  </label>
  <p>
    <label>
    Apellido<br />
    <input name="apellido" type="text" id="apellido"  value="<?php echo $busqueda[1]["apellido"]; ?>" />
    </label>
  </p>
  <p>
    <label>DNI<br />
    <input name="dni" type="text" id="dni"   value="<?php echo $busqueda[1]["dni"]; ?>"/>
    </label>
</p>
  <p>
    <label>IDF<br />
    <input name="idf" type="text" id="idf"  value="<?php echo $busqueda[1]["idf"]; ?>" />
    </label>
</p>
  <p>
    <label>Email<br />
    <input name="email" type="text" id="email"  value="<?php echo $busqueda[1]["email"]; ?>" />
    </label>
</p>
  <p>
    <label>
    <input type="submit" name="Submit4" value="GUARDAR" />
    </label>
  </p>
</form>

</div>
  <?php }else{//guardar modificar ?>
  
  
  
  
  
  <?php 
  
  /*
  if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;
  

$tablename=$_GET['t'];
$query="UPDATE $tablename SET nombre='".$_POST['nombre']."',apellido='".$_POST['apellido']."',dni='".$_POST['dni']."',idf='".$_POST['idf']."',email='".$_POST['email']."' WHERE id=".$_GET['id']." ;";
//echo $query;
//$result=mysql_db_query ($dbname, $query, $link);




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

//mysql_free_result($resultado);

  ?>
  
  
  	<script language="JavaScript" type="text/javascript">
var pagina="?op=5"
function redireccionar() 
{

location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>
  
 <?php  }
 
 
	}?>
	
	
		<?php if ($_GET['n']==3){//eliminar ?>
	
	
	
	<?php 
	/*
	if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;

				$tablename=$_GET['t'];
				$filtro=" ";
				$query="DELETE FROM $tablename WHERE id='".$_GET['e']."';";
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

//mysql_free_result($resultado);?>

	<script language="JavaScript" type="text/javascript">
var pagina="?op=5"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>
	
	
	
	<?php }?>
	<?php
	break;
	   case "alumnos": ?>
	   
	
	
		<?php if ($_GET['n']==0){ ?>
<p><a href="1.php?op=7&amp;t=alumnos&amp;n=1">Agregar Alumnos     </a>
<p>listar



<?php 
/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;



 //TABLA prueba
$tablename=$_GET['t'];
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro=" ORDER BY id DESC";
$query="SELECT * FROM $tablename $filtro;";

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
	$busqueda[$a]["apellido"]=$fila["apellido"];
	$busqueda[$a]["nombre"]=$fila["nombre"];
	$busqueda[$a]["dni"]=$fila["dni"];
	$busqueda[$a]["idf"]=$fila["idf"];
	//$pagos[$a]["fecha"]=$fila["fecha"];	
	//$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

////////////////

//print_r($busqueda);
?>



<?php if(!isset($busqueda)){echo "No se encontraron resultados.";}else{ ?>
<table width="750" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td><strong>Apellido</strong></td>
    <td><strong>Nombre</strong></td>
    <td><strong>DNI</strong></td>
    <td>&nbsp;</td>
  </tr>
  <?php


   for ($i = 1; $i <= count($busqueda); $i++) {?>
<tr>
    <td><?php echo $busqueda[$i]["apellido"]; ?></td>
    <td><?php echo $busqueda[$i]["nombre"]; ?></td>
    <td><?php echo $busqueda[$i]["dni"]; ?></td>
     <td><form name="tuformulario">
	 <?php //if ($_GET['op']=="5"){ ?>

		<input name="editar" type="button" value="Editar" />
		<input name="eliminar" type="button" value="Eliminar" onclick="pregunta(<?php echo $busqueda[$i]["id"];?>)"/>
        <input name="elim_id" type="hidden" id="elim_id" value="<?php echo $busqueda[$i]["id"];?>" />
		<?php //} ?>
		<?php if ($_GET['op']=="0"){ ?>
        <a href="?op=2&idf=<?php echo $busqueda[$i]["idf"];?>&id=<?php echo $busqueda[$i]["id"];?>&t=<?php echo $_POST['tabla'];?>">PAGOS</a><?php } ?>
		<?php if ($_GET['op']=="5"){ ?>
		<a href="?op=5&idf=<?php echo $busqueda[$i]["idf"];?>&id=<?php echo $busqueda[$i]["id"];?>&t=<?php echo $_POST['tabla'];?>">Familia</a><?php } ?>
     </form></td>
  </tr>
  <?php }?>
</table>
<?php }?>
<p>Paginacion




	  <?php }?>
	
	  <?php if ($_GET['n']==1){ 
	  
	  
	  if (!isset($_POST['Submit4'])){ 
	  ?>
	  
	  
	  	  <script>



function validacion3() {
alert("see");
return false;
}


function validacion() {
estatus=true;

valor = document.getElementById("nombre").value;
apellido = document.getElementById("apellido").value;
dni = document.getElementById("dni").value;
idf = document.getElementById("idf").value;

//alert(valor);

if( valor == null || valor == "" || /^\s+$/.test(valor) ) {
//alert("obligatorio");
estatus=false;
document.getElementById('cartel1').style.display = '';
}else{
document.getElementById('cartel1').style.display = 'none';
}


if( apellido == null || apellido == "" || /^\s+$/.test(apellido) ) {
//alert("obligatorio");
estatus=false;
document.getElementById('cartel2').style.display = '';
}else{
document.getElementById('cartel2').style.display = 'none';
}

if( dni == null || dni == "" || /^\s+$/.test(dni) ) {
//alert("obligatorio");
estatus=false;
document.getElementById('cartel3').style.display = '';
}else{
document.getElementById('cartel3').style.display = 'none';
}

if( idf == null || idf == "" || /^\s+$/.test(idf) ) {
//alert("obligatorio");
estatus=false;
document.getElementById('cartel4').style.display = '';
}else{
document.getElementById('cartel4').style.display = 'none';
}


  return estatus;//true
}





function validacion1(){
alert("lalal");
return false;
}





//Función que permite solo Números
function ValidarNumeros(e) {

//
/*
estatus=true;
var keynum
var keychar
var numcheck

if(window.event){ 
keynum = e.keyCode
}
else if(e.which){
keynum = e.which
 }
 
 
        if((keynum>=35 && keynum<=37) ||keynum==8||keynum==9||keynum==46||keynum==39) {

               estatus=true;
alert("asdasd");
           }   
   
   */
   var keynum = window.event ? window.event.keyCode : e.which;
if ((keynum == 8))
return true;

return /\d/.test(String.fromCharCode(keynum));

/*   

 if ((keynum < 48) || (keynum > 57))
  
  
  estatus=false;
}
*/
//return estatus;

}

</script>	


<?php 
/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/
global $host, $user,$password, $dbname,$link;


$filtro="";


$tablename="cursos";
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
$a=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$cursos[$a]["id"]=$fila["id"];

	$cursos[$a]["nombre"]=$fila["nombre"];		
		
	$a++;
}

mysql_free_result($resultado);
//print_r($cursos);





$filtro="";


$tablename="cuotas_categoria";
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
$a=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$cuotas[$a]["id"]=$fila["id"];

	$cuotas[$a]["nombre"]=$fila["nombre"];		
		
	$a++;
}

mysql_free_result($resultado);
//print_r($cuotas);
?>






<form id="form4" name="form4" method="post" action="" onsubmit="return validacion()">  
	  <div  class="formulario10" >

<strong>FORMULARIO DE ALUMNOS</strong>

<p>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>  <label>
  Nombre<br />
  <input name="nombre" type="text" id="nombre" />
  </label>
   <div id="cartel1" style="display:none;" class="cartel1">Este campo es requerido.</div>
   
   <div class="espacio1"></div>   </td>
  </tr>
  <tr>
    <td> <label>
    Apellido<br />
    <input name="apellido" type="text" id="apellido" />
    </label>
  <div id="cartel2" style="display:none;" class="cartel1">Este campo es requerido.</div>
     <div class="espacio1"></div>  </td>
  </tr>
  <tr>
    <td>  <label>DNI<br />
    <input name="dni" type="text" id="dni" onkeypress="return ValidarNumeros(event)" />
    </label>
  <div id="cartel3" style="display:none;" class="cartel1">Este campo es requerido.</div>
     <div class="espacio1"></div>  </td>
  </tr>
  <tr>
    <td>  <label>IDF<br />
    <input name="idf" type="text" id="idf" onkeypress="return ValidarNumeros(event)"/>
    </label>
  <div id="cartel4" style="display:none;" class="cartel1">Este campo es requerido.</div>
     <div class="espacio1"></div></td>
  </tr>
  <tr>
    <td>Email<br />
      <input name="email2" type="text" id="email2" />
      <div class="espacio1"></div></td>
  </tr>
  <tr>
    <td>Curso<br />

	    <select name="curso" id="curso">
	  <?php   for ($b = 0; $b <= count($cursos)-1; $b++) {
	  
	  ?>
	  
	   <option value="<?php echo $cursos[$b]["id"] ?>"><?php echo $cursos[$b]["nombre"] ?></option>
	  
	  
	  <?php 
	  }?>
	    </select>
      <div class="espacio1"></div></td>
  </tr>
  <tr>
    <td>Cuota<br />
		    <select name="cuota" id="cuota">
	  <?php   for ($b = 0; $b <= count($cuotas)-1; $b++) {
	  
	  ?>
	  
	   <option value="<?php echo $cuotas[$b]["id"] ?>"><?php echo $cuotas[$b]["nombre"] ?></option>
	  
	  
	  <?php 
	  }?>
	    </select>
 
      <div class="espacio1"></div></td>
  </tr>
  <tr>
    <td>Fecha de Inicio.<br />
      <input name="fechainicio" type="text" id="fechainicio" value="01-01-<?php echo date("Y"); ?>" />
      <div class="espacio1"></div></td>
  </tr>
  <tr>
    <td>  <label>Fecha de fin. <br />
        <input name="fechafin" type="text" id="fechafin"  />
</label>
      <div class="espacio1"></div></td>
  </tr>
  <tr>
    <td> <div class="espacio1"></div>
      <input type="submit" name="Submit4" value="GUARDAR" /></td>
  </tr>
</table>



  </div>
</form>
  <?php }else{?>





 <?php 


/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;
if ($_POST['fechainicio']==""){
$mifech="";
}else{
$mifech=explode("-",$_POST['fechainicio']);
$mifech=$mifech[2]."-".$mifech[1]."-".$mifech[0];
}

if ($_POST['fechafin']==""){
$mifech3="";
}else{
$mifech3=explode("-",$_POST['fechafin']);
$mifech3=$mifech3[2]."-".$mifech3[1]."-".$mifech3[0];
}

	//TABLA OFERTAS
	$tablename="alumnos";
	//$filtro="WHERE dni='".$dni."'";
	$query="INSERT INTO $tablename (nombre,apellido,dni,idf,email,curso,cuota,fecha_inscrip_inicio,fecha_inscrip_fin) VALUES ('".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['dni']."','".$_POST['idf']."','".$_POST['email2']."','".$_POST['curso']."','".$_POST['cuota']."','".$mifech."','".$mifech3."');";
	//echo $query;
	mysql_select_db($dbname,$link);
	mysql_query($query,$link);
	$my_error = mysql_error($link);
	if(!empty($my_error)) {
	//cartel(3,"Hubo un error al insertar el registro. $my_error"); 
	echo "Hubo un error al insertar el registro. $my_error";
	} else {
	//echo "SEEEEEEEEEEEEEE";
	//echo cartel(3,"SSEEEEEEEEE");
	echo '<div style="background-color: #BBFFBB;border: medium solid;margin-bottom: 10px;margin-left: 10px;margin-top: 10px;padding-bottom: 10px;padding-left: 10px;padding-top: 10px;width: 500px;">
<table  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td ><div align="center" style="font-weight:bold; margin-left:70px; margin-right:15px;">El alumno se agrego con éxito. </div></td>
    <td ><img src="tilde_bien.png" width="117" height="120" /></td>
  </tr>
</table>
</div>';
	}
	?>
	
	<script language="JavaScript" type="text/javascript">
var pagina="?op=<?php echo $_GET['op']; ?>&t=<?php echo $_GET['t']; ?>&n=1"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 3000);

</script>











  
 <?php  }
  
   }?>
	
	
			<?php if ($_GET['n']==2){//modificar ?>
	
	
	<?php
		  if (!isset($_POST['Submit4'])){ 
	  ?>
	  
	  
	  <?php
	  
	  /* if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");

*/

global $host, $user,$password, $dbname,$link;


 //TABLA prueba
$tablename=$_GET['t'];
//$filtro=" ORDER BY id LIMIT 20,10";
$filtro="WHERE id='".$_GET['id']."' ORDER BY id DESC";
$query="SELECT * FROM $tablename $filtro;";

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
	$busqueda[$a]["apellido"]=$fila["apellido"];
	$busqueda[$a]["nombre"]=$fila["nombre"];
	$busqueda[$a]["dni"]=$fila["dni"];
	$busqueda[$a]["idf"]=$fila["idf"];
	$busqueda[$a]["email"]=$fila["email"];
	if($_GET['t']=="alumnos"){
	$busqueda[$a]["curso"]=$fila["curso"];
	$busqueda[$a]["cuota"]=$fila["cuota"];
	$busqueda[$a]["fecha_inscrip_inicio"]=$fila["fecha_inscrip_inicio"];
	$busqueda[$a]["fecha_inscrip_fin"]=$fila["fecha_inscrip_fin"];
	}
	//$pagos[$a]["fecha"]=$fila["fecha"];	
	//$pagos[$a]["precio"]=$fila["precio"];				
	$a++;
}

mysql_free_result($resultado);

//print_r($busqueda);
?>




<?php 
/*
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/
global $host, $user,$password, $dbname,$link;


$filtro="";


$tablename="cursos";
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
$a=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$cursos[$a]["id"]=$fila["id"];

	$cursos[$a]["nombre"]=$fila["nombre"];		
		
	$a++;
}

mysql_free_result($resultado);
//print_r($cursos);





$filtro="";


$tablename="cuotas_categoria";
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
$a=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	$cuotas[$a]["id"]=$fila["id"];

	$cuotas[$a]["nombre"]=$fila["nombre"];		
		
	$a++;
}

mysql_free_result($resultado);
//print_r($cuotas);
?>


	 <div class="formulario10"> 
	  
<b>FORMULARIO MODIFICAR ALUMNO </b></p>
<form id="form4" name="form4" method="post" action="">
  <label>
  Nombre<br />
  <input name="nombre" type="text" id="nombre" value="<?php echo $busqueda[1]["nombre"]; ?>" />
  </label>
  <p>
    <label>
    Apellido<br />
    <input name="apellido" type="text" id="apellido"  value="<?php echo $busqueda[1]["apellido"]; ?>" />
    </label>
  </p>
  <p>
    <label>DNI<br />
    <input name="dni" type="text" id="dni"   value="<?php echo $busqueda[1]["dni"]; ?>"/>
    </label>
</p>
  <p>
    <label>IDF<br />
    <input name="idf" type="text" id="idf"  value="<?php echo $busqueda[1]["idf"]; ?>" />
    </label>
</p>
  <p>
    <label>Email<br />
    <input name="email" type="text" id="email"  value="<?php echo $busqueda[1]["email"]; ?>" />
    </label>
</p>

  
  
  
  Curso<br />
  <?php //echo $busqueda[1]["curso"]; ?>

	    <select name="curso" id="curso">
	  <?php   for ($b = 0; $b <= count($cursos)-1; $b++) {
	  
	  ?>
	  
	   <option value="<?php echo $cursos[$b]["id"] ?>" <?php if (intval($cursos[$b]["id"])==intval($busqueda[1]["curso"])){echo ' selected="selected"'; } ?>><?php //echo $cursos[$b]["id"] ?><?php echo $cursos[$b]["nombre"] ?></option>
	  
	  
	  <?php 
	  }?>
	    </select>
      <div class="espacio1"></div>
	  Cuota<br />
		    <select name="cuota" id="cuota">
	  <?php   for ($b = 0; $b <= count($cuotas)-1; $b++) {
	  
	  ?>
	  
	   <option value="<?php echo $cuotas[$b]["id"] ?>" <?php if (intval($cuotas[$b]["id"])==intval($busqueda[1]["cuota"])){echo ' selected="selected"'; } ?>><?php echo $cuotas[$b]["nombre"] ?></option>
	  
	  
	  <?php 
	  }?>
	    </select>
 
      <div class="espacio1"></div>
	  
	  Fecha de Inicio.<br />
      <input name="fechainicio" type="text" id="fechainicio" value="<?php
	  
	  
	  $arg=explode("-",$busqueda[1]["fecha_inscrip_inicio"]);
	   echo $arg[2]."-".$arg[1]."-".$arg[0];
	   
	   
	   
	    ?>" />
      <div class="espacio1"></div>
 <label>Fecha de fin. <br />
        <input name="fechafin" type="text" id="fechafin"  value="<?php
		
			  $arg=explode("-",$busqueda[1]["fecha_inscrip_fin"]);
	   echo $arg[2]."-".$arg[1]."-".$arg[0];

		 
		  ?>"  />
</label>
      <div class="espacio1"></div>
	   <input type="submit" name="Submit4" value="GUARDAR" />

</form>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>
  <?php }else{//guardar modificar ?>
  
  
  
  
  
  <?php 
  
  /*
  if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;


if ($_POST['fechainicio']==""){
$mifech="";
}else{
$mifech=explode("-",$_POST['fechainicio']);
$mifech=$mifech[2]."-".$mifech[1]."-".$mifech[0];
}

if ($_POST['fechafin']==""){
$mifech3="";
}else{
$mifech3=explode("-",$_POST['fechafin']);
$mifech3=$mifech3[2]."-".$mifech3[1]."-".$mifech3[0];
}
  

$tablename=$_GET['t'];
$query="UPDATE $tablename SET nombre='".$_POST['nombre']."',apellido='".$_POST['apellido']."',dni='".$_POST['dni']."',idf='".$_POST['idf']."',email='".$_POST['email']."',curso='".$_POST['curso']."',cuota='".$_POST['cuota']."',fecha_inscrip_inicio='".$mifech."',fecha_inscrip_fin='".$mifech3."' WHERE id=".$_GET['id']." ;";
//echo $query;
//$result=mysql_db_query ($dbname, $query, $link);




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

//mysql_free_result($resultado);

  ?>
  
  
  	<script language="JavaScript" type="text/javascript">
var pagina="?op=5"
function redireccionar() 
{

location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>
  
 <?php  }
 
 
	}?>
	
	
		<?php if ($_GET['n']==3){//eliminar ?>
	
	
	
	<?php 
	/*
	if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="colegioadmin_base";
}else{
$host="190.228.29.63";
$user="kory";
$password="123654";
$dbname="ceramicasa";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
*/

global $host, $user,$password, $dbname,$link;

				$tablename=$_GET['t'];
				$filtro=" ";
				$query="DELETE FROM $tablename WHERE id='".$_GET['e']."';";
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

//mysql_free_result($resultado);?>

	<script language="JavaScript" type="text/javascript">
var pagina="?op=5"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>
	
	
	
	<?php }?>
	   
	   <?php
	break;
}
?>
  
  
  <?php }?>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
</p>
</body>
</html>


