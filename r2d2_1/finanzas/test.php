<?php

include('funciones.php');

////////////////////////////////////////////////////////////////////////////////////
 


function funimpro($fecha){

//echo $fecha;

 // return "100";
  
  $date1 = new DateTime($fecha);

$date2 = new DateTime("2014-11-30");

  if($date1>$date2){

return  damegastos($fecha,2);

  }else{

   return damegastos($fecha,0);
  }

//damegastos($fecha,0);


}


if(isset($_GET['pages'])){

$tit=explode('-', $_GET['pages']);
//var_dump($tit);
$mes=$tit[0];
$ano=$tit[1];


if(isset($_GET['op'])){
$op=$_GET['op'];
}else{
$op=1;

}





switch ($op) {
    case 0://ULTIMOS 7 DIAS
        //echo "i es igual a 0";






$myarr2_2[1]=date('Y-m-d', strtotime('-7 day'));
$myarr2_2[2]=date('Y-m-d', strtotime('-6 day'));
$myarr2_2[3]=date('Y-m-d', strtotime('-5 day'));
$myarr2_2[4]=date('Y-m-d', strtotime('-4 day'));
$myarr2_2[5]=date('Y-m-d', strtotime('-3 day'));
$myarr2_2[6]=date('Y-m-d', strtotime('-2 day'));
$myarr2_2[7]=date('Y-m-d', strtotime('-1 day'));
$myarr2_2[8]=date('Y-m-d');







        break;
    case 1://MENSUAL
        //echo "i es igual a 1";









if($mes>date('m') && $ano==date('Y')){echo "bumn";}else{
 if($mes==date('m') && $ano==date('Y') ){


$myarr2_2[1]=date('Y-m-d', strtotime('-30 day'));
$myarr2_2[2]=date('Y-m-d', strtotime('-29 day'));
$myarr2_2[3]=date('Y-m-d', strtotime('-28 day'));
$myarr2_2[4]=date('Y-m-d', strtotime('-27 day'));
$myarr2_2[5]=date('Y-m-d', strtotime('-26 day'));
$myarr2_2[6]=date('Y-m-d', strtotime('-25 day'));
$myarr2_2[7]=date('Y-m-d', strtotime('-24 day'));
$myarr2_2[8]=date('Y-m-d', strtotime('-23 day'));
$myarr2_2[9]=date('Y-m-d', strtotime('-22 day'));
$myarr2_2[10]=date('Y-m-d', strtotime('-21 day'));
$myarr2_2[11]=date('Y-m-d', strtotime('-20 day'));
$myarr2_2[12]=date('Y-m-d', strtotime('-19 day'));
$myarr2_2[13]=date('Y-m-d', strtotime('-18 day'));
$myarr2_2[14]=date('Y-m-d', strtotime('-17 day'));
$myarr2_2[15]=date('Y-m-d', strtotime('-16 day'));
$myarr2_2[16]=date('Y-m-d', strtotime('-15 day'));
$myarr2_2[17]=date('Y-m-d', strtotime('-14 day'));
$myarr2_2[18]=date('Y-m-d', strtotime('-13 day'));
$myarr2_2[19]=date('Y-m-d', strtotime('-12 day'));
$myarr2_2[20]=date('Y-m-d', strtotime('-11 day'));
$myarr2_2[21]=date('Y-m-d', strtotime('-10 day'));
$myarr2_2[22]=date('Y-m-d', strtotime('-9 day'));
$myarr2_2[23]=date('Y-m-d', strtotime('-8 day'));
$myarr2_2[24]=date('Y-m-d', strtotime('-7 day'));
$myarr2_2[25]=date('Y-m-d', strtotime('-6 day'));
$myarr2_2[26]=date('Y-m-d', strtotime('-5 day'));
$myarr2_2[27]=date('Y-m-d', strtotime('-4 day'));
$myarr2_2[28]=date('Y-m-d', strtotime('-3 day'));
$myarr2_2[29]=date('Y-m-d', strtotime('-2 day'));
$myarr2_2[30]=date('Y-m-d', strtotime('-1 day'));
$myarr2_2[31]=date('Y-m-d');



 }else{



$ultimoDia = getUltimoDiaMes($ano,$mes);
//echo $ultimoDia;

  $cantdias= $ultimoDia; //date('t',$mes);
  //echo $cantdias."----".$mes;
  for ($i = 1; $i <= $cantdias; $i++) {
  $myarr2_2[$i]="$ano-$mes-$i";

  }
 }

 //echo $cantdias;


}










        break;
    case 2://ANUAL
       







$plim=date('Y-m-d');
$myarr2_2[12]=$plim;

$plim=date('Y-m-1', strtotime('-1 month'));
$perm=explode("-",$plim);
$myarr2_2[11]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-2 month'));
$perm=explode("-",$plim);
$myarr2_2[10]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-3 month'));
$perm=explode("-",$plim);
$myarr2_2[9]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-4 month'));
$perm=explode("-",$plim);
$myarr2_2[8]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-5 month'));
$perm=explode("-",$plim);
$myarr2_2[7]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-6 month'));
$perm=explode("-",$plim);
$myarr2_2[6]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-7 month'));
$perm=explode("-",$plim);
$myarr2_2[5]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-8 month'));
$perm=explode("-",$plim);
$myarr2_2[4]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-9 month'));
$perm=explode("-",$plim);
$myarr2_2[3]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-10 month'));
$perm=explode("-",$plim);
$myarr2_2[2]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-11 month'));
$perm=explode("-",$plim);
$myarr2_2[1]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

















        break;
}








//var_dump($myarr2_2);

///////////////////////////////////////////////////////
///////////////////////////////////////////////////////

  for ($i = 1; $i <= count($myarr2_2); $i++) {
  
  
   $myarr2[$i]['fecha']=$myarr2_2[$i];
  $myarr2[$i]['saldo']=damesaldo($myarr2_2[$i],0);
      $myarr2[$i]['saldo_1']=damesaldo(date($myarr2_2[$i]),1);
}


echo "
[
 ['Dia','Ingresos','Gastos','Caja Ahorro'],

";
// sort($myarr2);
           for ($i = 1; $i <= count($myarr2); $i++) {
      echo " ['".fecha_esp($myarr2[$i]['fecha'])."',".dameingresos($myarr2[$i]['fecha'],0).",".funimpro($myarr2[$i]['fecha']).",".$myarr2[$i]['saldo_1']."],";
       }

       echo "]";




}

?>