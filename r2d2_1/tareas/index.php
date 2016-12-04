<?php 
date_default_timezone_set('America/Argentina/Buenos_Aires'); 


function tildar($valor){
	if ($valor==1){
	$v='checked="checked"';
	}else{
	$v='';
	}
	echo $v;
	}

include("db.php");
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");







if(isset($_POST['filtro1'])){
	if($_POST['filtro1']==0){
	$michael="AND archivado=1 ";
	}else{
	$michael="AND archivado=0 ";
	}
}else{
if (isset($_GET['arc'])){
$michael="";
}else{
$michael="AND archivado=0 ";
}

}
/////////////////////////////////////////////////////////////



if (isset($_GET['h'])){
$pum="WHERE categoria=3 and subcategoria=".$_GET['id']." ";
$redi="?h=1";
$redi1="&h=1";
$subc="id=".$_GET['id'];
$guardasubc=$_GET['id'];
}else{
if(isset($_POST['filtro'])){

if($_POST['filtro']=="0"){
$pum="WHERE categoria<>3";
$redi="";
$redi1="";
$subc="";
$guardasubc="";
}else{
$pum="WHERE categoria<>3 AND categoria=".$_POST['filtro']." ".$michael;
$redi="";
$redi1="";
$subc="";
$guardasubc="";
}
}else{


	
$pum="WHERE categoria<>3 ".$michael;
$redi="";
$redi1="";
$subc="";
$guardasubc="";
}

}


//echo $subc;

$filtro=$pum." ORDER BY posicion ASC";
$tablename="mis_tareas";
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
$amod="";
$tpend=0;
while ($fila = mysql_fetch_assoc($resultado)) {
	if(isset($_GET['mod'])){
		if($fila["id"]==$_GET['mod']){
		$amod=$a;
		//echo $amod;
		}
	}
	
	if(isset($_GET['arc'])){
		if($fila["id"]==$_GET['arc']){
		$archi=$a;
		echo $archi;
		}
	}
	
	$ultimaposc=intval($fila["posicion"])+1;		
//
	$tareas[$a]["id"]=$fila["id"];
	$tareas[$a]["tarea"]=$fila["tarea"];	
	$tareas[$a]["finalizado"]=$fila["finalizado"];		
	$tareas[$a]["archivado"]=$fila["archivado"];	
	$tareas[$a]["fecha"]=$fila["fecha"];	
	$tareas[$a]["posicion"]=$fila["posicion"];	
	
	$a++;
	if ($fila["finalizado"]==0){$tpend++;}
	
}

mysql_free_result($resultado);
//print_r($tareas);


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> TAREAS</title><style type="text/css">
<!--

input[type=checkbox]
{
  /* Double-sized Checkboxes */
  -ms-transform: scale(2); /* IE */
  -moz-transform: scale(2); /* FF */
  -webkit-transform: scale(2); /* Safari and Chrome */
  -o-transform: scale(2); /* Opera */
  padding: 10px;
}


body,td,th {
	font-size: 20px;
	font-family: Arial, Helvetica, sans-serif;
}
.Estilo1 {
	color: #FFFFFF;
	font-weight: bold;
}
.Estilo2 {
	font-size: 24px;
	font-weight: bold;
}
body {
	background-color: #FFFFFF;
}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>



	
	
</head>

<body>



  <script language="JavaScript">
function pregunta(id){
    if (confirm('¿Estas seguro eliminar esta registro?')){
	   window.location = "?<?php echo $subc; ?><?php echo $redi1; ?>&e="+id;
    }
	//alert("sd");
}
</script>
  
  
  
  <script language="JavaScript">
function modificar(id){
    //if (confirm('¿Estas seguro eliminar esta registro?')){
	   window.location = "?<?php echo $subc; ?><?php echo $redi1; ?>&mod="+id;
    //}
	//alert("sd");
}
</script>
  
  
  <script language="JavaScript">
function archivar(id){
    if (confirm('¿Estas seguro archivar este registro?')){
	   window.location = "?<?php echo $subc; ?><?php echo $redi1; ?>&arc="+id;
    }
	//alert("sd");
}
</script>
  
  
  
  <script language="JavaScript">
function tildo(valor){
    if (confirm('¿Estas seguro tildar este registro?')){
	//alert("asdasd"+valor);
	   window.location = "?<?php echo $subc; ?><?php echo $redi1; ?>&m="+valor;
	   	
    }else{

		if(document.getElementById(valor).checked==false){
		document.getElementById(valor).checked=true;
		}else{
		document.getElementById(valor).checked=false;
		}
	}
}
</script>
  
  
  <script language="JavaScript">
function salto1(pepe,inicial,id){
	//alert(id);
	//v=18;
	v=pepe.options[pepe.selectedIndex].value;
	//alert(v);
	//b=document.getElementById("position").value;
	
	
    if (confirm('¿Estas seguro cambiar posicion de este registro?')){
		//alert("v:"+v);
	   window.location = "?<?php echo $subc; ?><?php echo $redi1; ?>&p="+v+"&id="+id;
    }else{
	//alert("i:"+inicial);
		pepe.selectedIndex=inicial-1;

	}
}
</script>
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="18%"><span class="Estilo2">MIS TAREAS</span></td>
      <td width="82%"> 
  <input type="button" id="bot1" value="Crear Mensaje" onclick="mostrar()" />

  <input type="button" id="bot2" value="Ocultar Mensaje" onclick="ocultar()" style="display:none;" /></td>
    </tr>
  </table>

  
  
  
  <?php 



 if(isset($_GET['e'])){
 
 
 

				$tablename="mis_tareas";
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




reordenar();
?>
  
  <script language="JavaScript" type="text/javascript">
var pagina="?<?php echo $subc; ?><?php echo $redi1; ?>"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

    </script>
  
   <?php }else{



if (isset($_GET['op'])=="1"){




	//TABLA OFERTAS
	$tablename="mis_tareas";
	//$filtro="WHERE dni='".$dni."'";
	$query="INSERT INTO $tablename (tarea,finalizado,archivado,categoria,subcategoria,fecha,posicion) VALUES ('".$_POST['tarea']."',0,0,'".$_POST['categoria']."','".$guardasubc."','".date('Y-m-d H:i:s')."','".$ultimaposc."');";
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
var pagina="index.php?<?php echo $subc; ?><?php echo $redi1; ?>";
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

    </script>
  
  
  <?php }else{ ?>
  
  
  <?php 



/////////////////////////////////////////////////////////archivar
if (isset($_GET['arc'])){



echo "arc"; 
echo $tareas[$archi]["archivado"];

if($tareas[$archi]["archivado"]==0){
$ponee=1;
}else{
$ponee=0;
}



//llee lo que tiene 
//si tiene 0 pone 1;

//update

$query="UPDATE mis_tareas SET archivado='".$ponee."' WHERE id='".$_GET['arc']."' ;";
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


?>
  
     <script language="JavaScript" type="text/javascript">
var pagina="?<?php echo $subc; ?><?php echo $redi1; ?>"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);
    </script>
  <?php 


/////////////////////////////////////////////////////////archivar
}else{

/////////////////////////////////////////////////////////MODIFICAR


if (isset($_GET['mod'])){ 


if (isset($_GET['g'])){


 echo "guarda"; 
 
 
$query="UPDATE mis_tareas SET tarea='".$_POST['tarea']."' WHERE id='".$_GET['mod']."' ;";
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


/////////////////////////////////

?>
     <script language="JavaScript" type="text/javascript">
var pagina="?<?php echo $subc; ?><?php echo $redi1; ?>"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

    </script>
  
   <?php 
 
 }else{
echo "<p>";
echo $_GET['mod'];
echo "<br>";
?>
</p>

<form action="?mod=<?php echo $_GET['mod']; ?>&g=1" method="post"> 
  <p>
    <textarea name="tarea" cols="40" rows="3" id="tarea" style="font-size:30px; font-weight:bold;"><?php echo $tareas[$amod]["tarea"];?></textarea>
  </p>
  <div style=" margin-top:7px; height:30px;">
          <input type="submit" name="Submit" value="GUARDAR" />
  </div>
</form>
<?php 
}

/////////////////////////////////////////////////////////MODIFICAR
}else{

?>


<?php if (isset($_GET['p'])){

////////////////////////////////////////////////////////POSICION 

echo "entra<p>".$_GET['id'].$_GET['p'];


echo "cambiar regustro// 0.5    o    1.5 <br>";



$poner=intval($_GET['p'])+0.5;

//echo $poner;


$query="UPDATE mis_tareas SET posicion='".$poner."' WHERE id='".$_GET['id']."' ;";
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


/////////////////////////////////
echo "reordenar todo";

reordenar();
?>


<script language="JavaScript" type="text/javascript">
var pagina="?<?php echo $subc; ?><?php echo $redi1; ?>"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>
 
 <?php 
 

////////////////////////////////////////////////////////POSICION 
}else{ ?>

<?php if (isset($_GET['m'])){ ?>




<?php
  
  
  
  
$filtro="WHERE id='".$_GET['m']."' ";
$tablename="mis_tareas";
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
	$tarea1[$a]["id"]=$fila["id"];
	$tarea1[$a]["tarea"]=$fila["tarea"];	
	$tarea1[$a]["finalizado"]=$fila["finalizado"];		
	$tarea1[$a]["archivado"]=$fila["archivado"];	
	$tarea1[$a]["fecha"]=$fila["fecha"];				
	$a++;
}

mysql_free_result($resultado);
//print_r($tareas);


if($tarea1[1]["finalizado"]==1){
$poner=0;
$fech_fin="";

}else{
$poner=1;
$fech_fin=date('Y-m-d H:i:s');
}




$query="UPDATE $tablename SET finalizado='".$poner."', fecha_fin='".$fech_fin."' WHERE id='".$_GET['m']."' ;";
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
var pagina="?<?php echo $subc; ?><?php echo $redi1; ?>"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>








<?php }else{?>
  	<script language="JavaScript" type="text/javascript">
function mostrar() 
{
//alert("asda");
	document.getElementById("mensaje").style.display = "";
	document.getElementById("bot1").style.display = "none";
	document.getElementById("bot2").style.display = "";
} 

function ocultar() 
{
//alert("asda");
	document.getElementById("mensaje").style.display = "none";
	document.getElementById("bot1").style.display = "";
	document.getElementById("bot2").style.display = "none";
} 
</script>



<div style="display:none;" id="mensaje">
<form id="form1" name="form1" method="post" action="?<?php echo $subc; ?><?php echo $redi1; ?>&op=1">
  <?php if (!isset($_GET['h'])){?>
<div style="height:30px;">
  <select name="categoria">
    <option value="1">personal</option>
    <option value="2">compras</option>
    <option value="4">Medico</option>
  </select>
 </div>
 <?php }else{
	
	?>
	          <input name="categoria" type="hidden" value="3" />
		
	<?php 
	} ?>
  <textarea name="tarea" cols="40" rows="3" id="tarea" style="font-size:30px; font-weight:bold;"></textarea>

 <div style=" margin-top:7px; height:30px;">
          <input type="submit" name="Submit" value="GUARDAR" />
  </div>

 




	
	

</form>

<hr />
</div>





<?php if(isset($tareas)){

 ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="64%"><div align="right">Tareas pendientes: <?php echo $tpend; ?> </div></td>
    <td width="36%"><form action="" method="post">
  <div align="right">
<?php if(!isset($_GET['h'])){ ?>


  <select name="filtro" id="filtro">
    <option value="1">personal</option>
    <option value="2">compras</option>
 
    <option value="4">medico</option>
    <option value="0">TODO</option>
  </select>


    

<?php } ?>
    <select name="filtro1" id="filtro1">
      <option value="1">Activos</option>
      <option value="0">Archivados</option>
    </select>  <input name="Enviar" type="submit" value="filtrar" /></div>
</form></td>
  </tr>
</table>
<form name="tabla" id="tabla">
<table width="100%" border="1" cellspacing="0" cellpadding="3">

  <tr>
    <td width="4%" bgcolor="#000066"><span class="Estilo1">id</span></td>
    <td width="40%" bgcolor="#000066"><span class="Estilo1">tarea</span></td>
	
    <td width="21%" bgcolor="#000066"><span class="Estilo1">fecha</span></td>
    <td width="35%" bgcolor="#000066"><span class="Estilo1">opciones&nbsp;</span></td>
  </tr>
<?php 			  
$col=0;
 for ($i = count($tareas); $i >= 1; $i--) {

if($col==2){
$col=0;
}

if($col==0){
$color="#ffffff";
}else{
$color="#E8E8E8";
}
			  ?>
  <tr>
    <td width="4%" bgcolor="<?php echo $color ;?>"><?php echo $tareas[$i]["id"];?></td>
    <td width="40%" valign="top" bgcolor="<?php echo $color ;?>"><?php echo $tareas[$i]["tarea"];?></td>
	    <td width="21%" valign="middle" bgcolor="<?php echo $color ;?>"><?php echo $tareas[$i]["fecha"];?></td>
	
    <td width="35%" bgcolor="<?php echo $color ;?>"><input id="<?php echo $tareas[$i]["id"];?>" name="checkbox" type="checkbox"  style="font-size:24px;" value="checkbox" <?php tildar($tareas[$i]["finalizado"]);?> onclick="tildo('<?php echo $tareas[$i]["id"];?>');"/>
	
	<?php 
	if($tareas[$i]["archivado"]==1){$text="DesArchivar";}else{$text="Archivar";}
	?>
	<input type="button" value="<?php echo $text; ?>" onclick="archivar(<?php echo $tareas[$i]["id"];?>)" />
	<input type="button" name="Submit2" value="Modificar" onclick="modificar(<?php echo $tareas[$i]["id"];?>)" />
	 <input name="eliminar" type="button" class="eliminar" value="Eliminar" onclick="pregunta('<?php echo $tareas[$i]["id"];?>')"/>
	 <select id="position" onchange="salto1(this,<?php echo $i; ?>,<?php echo $tareas[$i]["id"]; ?> )"  >
      <?php 
	  
	   $sele="";
	   for ($d = 1; $d <= count($tareas); $d++) { 
	  if($d==$i){
	  $sele='selected="selected"';
	  }else{
	  $sele="";
	  }

	   ?> 
	  <option <?php echo $sele; ?>  value="<?php echo $d; ?>"><?php echo $d; ?></option>
	  <?php } ?>
     </select></td>
  </tr>
  
  <?php 
  
  $col=$col+1;
  
  } ?>
</table>
</form>
<?php 
}else{?>

no se encontraron tareas.

<?php }

}

}

}

}

}

}?>




<?php 


function reordenar(){

global $pum;
global $host;
global $user;
global $password;
global $dbname;
global $link;





$tareas="";
$filtro=$pum." ORDER BY posicion ASC";
$tablename="mis_tareas";
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
	$tareas[$a]["tarea"]=$fila["tarea"];	
	$tareas[$a]["finalizado"]=$fila["finalizado"];		
	$tareas[$a]["archivado"]=$fila["archivado"];	
	$tareas[$a]["fecha"]=$fila["fecha"];	
	$tareas[$a]["posicion"]=$fila["posicion"];				
	$a++;
}

mysql_free_result($resultado);
print_r($tareas);



echo count($tareas);


 //for ($i = 1; $i <= count($tareas); $i++) {
 
  for ($i = count($tareas); $i >= 1; $i--) {


	$query="UPDATE mis_tareas SET posicion='".$i."' WHERE id='".$tareas[$i]["id"]."' ;";
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



}


}
?>

	
	
	
</body>
</html>
