<?php


include('funciones.php');





$plim=date('Y-m-d');
$myarr3_2[12]=$plim;

$plim=date('Y-m-1', strtotime('-1 month'));
$perm=explode("-",$plim);
$myarr3_2[11]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-2 month'));
$perm=explode("-",$plim);
$myarr3_2[10]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-3 month'));
$perm=explode("-",$plim);
$myarr3_2[9]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-4 month'));
$perm=explode("-",$plim);
$myarr3_2[8]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-5 month'));
$perm=explode("-",$plim);
$myarr3_2[7]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-6 month'));
$perm=explode("-",$plim);
$myarr3_2[6]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-7 month'));
$perm=explode("-",$plim);
$myarr3_2[5]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-8 month'));
$perm=explode("-",$plim);
$myarr3_2[4]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-9 month'));
$perm=explode("-",$plim);
$myarr3_2[3]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-10 month'));
$perm=explode("-",$plim);
$myarr3_2[2]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);

$plim=date('Y-m-1', strtotime('-11 month'));
$perm=explode("-",$plim);
$myarr3_2[1]=$perm[0]."-".$perm[1]."-".getUltimoDiaMes($perm[0], $perm[1]);





//var_dump($myarr3_2);
 
 
 
   for ($i = 1; $i <= count($myarr3_2); $i++) {


   
   $myarr3[$i]['fecha']=$myarr3_2[$i];
   $myarr3[$i]['saldo']=damecaja(date($myarr3_2[$i]));
   $myarr3[$i]['saldo_1']=damesaldo(date($myarr3_2[$i]),1);

  

 
}


?>

<div aling="center" style="padding-left:300px;">
Tabla anual:
<table border="3" aling="center" style='font-size:20px;' id="ejemplo" name="ejemplo">
  <tr style='background-color:#4297d7;'>
    <td>Mes</td>
    <td>Ingresos</td>
     <td>Gastos</td>
    <td style="display:none;">Caja</td>
    <td>Ganancias</td>
  <td style="display:none;">Gastos v.</td>
    <td style="display:none;">Gastos ahorros</td>
 <td >Ahorros</td>
  </tr>
  <?php 
          
          $mimi=0;
          //sort($myarr3);
           for ($i = 12; $i >= 1; $i--) { 



if($mimi==1){$micolor="style='background-color:#bebebe;'";$mimi=0;}else{$micolor="style='background-color:white;'";$mimi=1;}



            ?>

  <tr <?php echo $micolor;?> >
    <td><?php echo fecha_esp($myarr3[$i]['fecha']);?></td>
    <td>$<?php echo number_format(dameingresos($myarr3[$i]['fecha'],0)); ?></td>
    <td>$<?php 


//$g1=;
//$g2=damegastos($myarr3[$i]['fecha'],1);
    echo number_format(damegastos($myarr3[$i]['fecha'],2)); ?></td>
    
    <td style="display:none;">$<?php echo number_format($myarr3[$i]['saldo']); ?></td>
    <td>$<?php 

$ingg=dameingresos($myarr3[$i]['fecha'],0); 
$gastt=damegastos($myarr3[$i]['fecha'],2);

echo number_format(dameganancias($ingg,$gastt));


?></td>
    <td style="display:none;">$<?php echo number_format(damegastos($myarr3[$i]['fecha'],0)); ?></td>
    <td style="display:none;"><?php echo number_format(damegastos($myarr3[$i]['fecha'],1));?></td>
<td>$<?php echo number_format(damesaldo($myarr3[$i]['fecha'],1)); ?></td>

  </tr>
 <?php 
      //echo " ['".$myarr3[$i]['fecha']."',  ".$myarr3[$i]['saldo'].",".$myarr3[$i]['saldo_1']."],";
       }
      ?>
</table>
</div>
