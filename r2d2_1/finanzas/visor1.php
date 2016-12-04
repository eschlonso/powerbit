<?php


include('funciones.php');


?>
<div aling="center" style="padding-left:280px;">
<table aling="center" width="365" border="3" cellpadding="0" cellspacing="0" bgcolor="#E1E4EC">
  <tr>
    <td width="257"><div align="right" style='font-size:22px;'><b>Ingresos: </b></div></td>
    <td width="100"><div id="total" align="right" style='font-size:22px;'>$<?php echo number_format(dameingresos(date('Y-m-d'),0)); ?> </div></td>
  </tr>
</table>

<table aling="center" width="365" border="3" cellpadding="0" cellspacing="0" bgcolor="#E1E4EC">
  <tr>
    <td width="257"><div align="right" style='font-size:22px;'><b>Gastos: </b></div></td>
    <td width="100"><div id="total" align="right" style='font-size:22px;'>$<?php echo number_format(damegastos(date('Y-m-d'),2)); ?> </div></td>
  </tr>
</table>

<table width="365" border="3" cellpadding="0" cellspacing="0" bgcolor="#E1E4EC">
  <tr>
    <td width="257"><div align="right" style='font-size:22px;'><b>AHORROS: </b></div></td>
    <td width="100"><div id="total_op1" align="right" style='font-size:22px;'>$<?php echo number_format(damesaldo(date('Y-m-d'),1)); ?> </div></td>
  </tr>
</table>


<table width="365" border="3" cellpadding="0" cellspacing="0" bgcolor="#E1E4EC">
  <tr>
    <td width="257"><div align="right" style='font-size:22px;'><b>Ganancia: </b></div></td>
    <td width="100"><div id="total_op1" align="right" style='font-size:22px;'>$<?php 



$ingg=dameingresos(date('Y-m-d'),0); 
$gastt=damegastos(date('Y-m-d'),2);

echo dameganancias($ingg,$gastt);



    //echo number_format(damesaldo(date('Y-m-d'),1)); ?> </div></td>
  </tr>
</table>

</div>
