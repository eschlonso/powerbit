
 <?php //echo $_GET['f'];
include("db.php")


$fecha=$_GET['f'];
$proyecto=$_GET['id'];
 ?>



<?php 



//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");



//$filtro="WHERE idproyecto='".$idproyecto."' ORDER BY id DESC ";
$filtro="WHERE fecha='".$fecha."' and proyecto='".$proyecto."' and a<>'00:00:00'";
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

//print_r($gastos);

if(isset($mis_relojes2)){

  $teke="00:00";

 for ($i = 1; $i <= count($mis_relojes2); $i++) {


  $date = date_create($mis_relojes2[$i]["d"]);
 $date1 = date_create($mis_relojes2[$i]["a"]);
 //coment echo  "<div>".date_format($date,'H:i')." - ".date_format($date1,'H:i') ."</div>";

	

$datetime1 = date_create($mis_relojes2[$i]["d"]);//$GLOBALS["r"]
$datetime2 = date_create($mis_relojes2[$i]["a"]);//
  $newfecha = date_diff($datetime1, $datetime2);   


$h1="$newfecha->h:$newfecha->i";
  //coment echo "<div style='float:left;'><b> $newfecha->h:$newfecha->i h.</b>&nbsp;</div>";    


   //coment echo "<button onclick='borrar(\"$fecha\",".$mis_relojes2[$i]["id"].")' type='button'>b</button>";   
          
          
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
 
  $teke=sumar3($h1,$teke);

$horas=$teke;

$mimi[]=$h1;
  }



  if(count($mis_relojes2)>1){


  //coment echo "<div style='font-size:16px;'><b>total: $horas h</b></div>";
  }

 /*echo "<script>

 var mivariableglob='".$horas."';
 </script>";*/
//$GLOBALS['tt'][]=$horas;

  echo json_encode(array("reloj"=>$mimi,"total"=>$horas));
 }


//var_dump($GLOBALS['b']);



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