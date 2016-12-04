<?php 

function sumar4($h1,$h2)
{
$h2h = date('H', strtotime($h2));
$h2m = date('i', strtotime($h2));
$hora2 =$h2h." hour ". $h2m ." min ";
 
$horas_sumadas= $h1." + ". $hora2;
$text=date('H:i', strtotime($horas_sumadas)) ;
//echo "------".$h1.$horas_sumadas."------";
return $text;
 
} ?>