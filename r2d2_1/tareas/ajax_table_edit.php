<?php function fecha_ing($fecha){
$a=date("Y-m-d H:i:s",strtotime($fecha));

return $a;
}

?>




<?php




include("ajax_db.php");
if($_POST['id'])
{
$id=mysql_escape_String($_POST['id']);
$fecha=mysql_escape_String(fecha_ing($_POST['fecha']));
$tarea=mysql_escape_String($_POST['tarea']);

echo json_encode(array("name"=>$tarea,"time"=>$fecha));
$sql = "update mis_tareas set fecha='$fecha',tarea='$tarea' where id='$id'";
mysql_query($sql);
}
?>