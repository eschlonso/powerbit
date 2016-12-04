


<?php

include("db.php");




$mifech= explode("-", $_GET['fecha']); 



function esmes($v){
  $m=date('m');
  if($v==$m){
    echo "selected";
  }
}


function esano($v){
  $m=date('Y');
  if($v==$m){
    return "selected";
  }
}






function consumo_mensual($id_cat,$mes,$ano){




/////////////


global $host,$user,$password,$dbname;
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");



$filtro="WHERE month(fecha)='$mes' and year(fecha)='$ano' and categoria='$id_cat' ";
//$filtro=" ";
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
//$rows = array();
$mitot=0;
$saldo=0;
while ($fila = mysql_fetch_assoc($resultado)) {


  $saldo=$fila["saldo"];
  $mitot=$mitot+$saldo;
  //$gastos_categorias[$a]["nombre"]=;       
  $a++;
}


//$jTableResult = array();
//$jTableResult = "OK";



mysql_free_result($resultado);






echo  $mitot;
}


global $host,$user,$password,$dbname;
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");



//$filtro="WHERE id='$id' ";
$filtro=" order BY c ASC";
$tablename="gastos_categorias";
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
//$rows = array();
while ($fila = mysql_fetch_assoc($resultado)) {
  
 //$eil = array();
    $eil[$fila["id"]] = $fila["nombre"];
    //$rows[] = $eil;



  $gastos_categorias[$a]["id"]=$fila["id"];
  $gastos_categorias[$a]["nombre"]=$fila["nombre"];       
    $gastos_categorias[$a]["c"]=$fila["c"]; 
  $a++;
}


//$jTableResult = array();
//$jTableResult = "OK";
$jTableResult = $eil; 


mysql_free_result($resultado);


//var_dump($jTableResult);



 //print  json_encode($jTableResult);
 ?>





<?php //echo $_GET['fecha']; ?>




<div style="padding-left:230px;" aling="center">




<table border="1" style="font-size:20px;" aling="center">
<tr style="background-color:#4297d7;" >
  <td>Nombre</td>

  <td>consumo mensual</td>
</tr>


  <?php 
//asort($gastos_categorias);

//array_multisort($gastos_categorias['c'], SORT_NUMERIC, SORT_DESC);
$alma=1;
$mimi=0;
  for ($i = 1; $i <= count($gastos_categorias); $i++) { 

if($gastos_categorias[$i]['c']==1 and $alma==1){


  echo '<tr><td>+ALMACEN</td><td></td></tr>';
  $alma=0;
}

   
  


if($mimi==1){$micolor="style='background-color:#bebebe;'";$mimi=0;}else{$micolor="style='background-color:white;'";$mimi=1;}



            ?>

  <tr <?php echo $micolor;?> >




  <td> <?php echo $gastos_categorias[$i]['nombre']; ?></td>

  <td>$<?php consumo_mensual($gastos_categorias[$i]['id'],$mifech[0],$mifech[1]); ?></td>

</tr>


<?php 




 } ?>



  </table>

</div>



