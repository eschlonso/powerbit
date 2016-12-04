<?php
include("ajax_db.php");
if($_POST['id'])
{
$id=mysql_escape_String($_POST['id']);
$fecha=mysql_escape_String($_POST['fecha']);
$op=mysql_escape_String($_POST['op']);
$sql = "update relojes set fecha='$fecha',op='$op' where id='$id'";
mysql_query($sql);
}
?>