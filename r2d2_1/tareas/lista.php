<?php 
include("db.php");


function fecha_esp($fecha){
$a=date("d-m-Y H:i:s",strtotime($fecha));

return $a;
}




//echo "sdsad".$_GET['h'];

?>

<script type="text/javascript">


	function foo(ID) {
// Do something.
//alert(ID);
//var ID=$(this).attr('id');
//alert(ID);

$("#first_"+ID).hide();
$("#last_"+ID).hide();
$("#first_input_"+ID).show();
$("#last_input_"+ID).show();



$("#"+ID).change(function() {
//alert( "Handler for .change() called." );




//alert('123132');
//var ID=$(this).attr('id');
var first=$("#first_input_"+ID).val();
var last=$("#last_input_"+ID).val();
var dataString = 'id='+ ID +'&tarea='+first+'&fecha='+last;
$("#first_"+ID).html('<img src="load.gif" />'); // Loading image

if(first.length>0&& last.length>0)
{

$.ajax({
type: "POST",
url: "ajax_table_edit.php",
data: dataString,
cache: false,
success: function(html)
{
$("#first_"+ID).html(first);
$("#last_"+ID).html(last);
}
});
}
else
{
alert('Enter something.');
}

});



// Edit input box click action
$(".editbox").mouseup(function()
{
return false
});

// Outside click action
$(document).mouseup(function()
{
$(".editbox").hide();
$(".text").show();
});







}






$(".edit_tr1").click(function()
{
	//alert('foo');
	var ID=$(this).attr('id');
	foo(ID);

});
/*
$(document).ready(function()
{
$(".edit_tr").click(function()
{

var ID=$(this).attr('id');
//alert(ID);
$("#first_"+ID).hide();
$("#last_"+ID).hide();
$("#first_input_"+ID).show();
$("#last_input_"+ID).show();
}).change(function()
{
//alert('123132');
var ID=$(this).attr('id');
var first=$("#first_input_"+ID).val();
var last=$("#last_input_"+ID).val();
var dataString = 'id='+ ID +'&tarea='+first+'&fecha='+last;
$("#first_"+ID).html('<img src="load.gif" />'); // Loading image

if(first.length>0&& last.length>0)
{

$.ajax({
type: "POST",
url: "ajax_table_edit.php",
data: dataString,
cache: false,
success: function(html)
{
$("#first_"+ID).html(first);
$("#last_"+ID).html(last);
}
});
}
else
{
alert('Enter something.');
}

});

// Edit input box click action
$(".editbox").mouseup(function()
{
return false
});

// Outside click action
$(document).mouseup(function()
{
$(".editbox").hide();
$(".text").show();
});

});

*/






function tildarr(var1){


var res = var1.split(";"); 

if(res[1]==1){pp="des-tildar"}else{pp="tildar"}

//alert(var1);

 if (document.getElementById('tilda_'+res[0]).checked == true) {

	//alert("szi");
 	 //return false;
 	 document.getElementById('tilda_'+res[0]).checked=false;
 }else{

 document.getElementById('tilda_'+res[0]).checked=true;
 

 }


 if (confirm('¿Estas seguro '+ pp +' este registro?')){

var fruits= var1;

$.post( "til_msj.php", 

 { func: "getNameAndTime", pages: fruits },


  function( data ) {
console.log( data.name ); // John
console.log( data.time ); // 2pm

//alert('complete');

  $("#contenido").cargar("lista.php");
}


,


 "json");

//document.getElementById('tilda_'+res[0]).checked=false;
}else{




}

}

function eliminarr(var1){



  if (confirm('¿Estas seguro eliminar este registro?')){
	
   


var fruits= var1;

$.post( "del_msj.php", 

 { func: "getNameAndTime", pages: fruits },


  function( data ) {
console.log( data.name ); // John
console.log( data.time ); // 2pm

//alert('complete');

  $("#contenido").cargar("lista.php");
}


,


 "json");



 }
}



 function archivarr(var1){

//alert(var1);

var res = var1.split(";"); 

if(res[0]==0){pp="des-archivar"}else{pp="archivar"}

  if (confirm('¿Estas seguro '+ pp +' este registro?')){

 var fruits= var1;

$.post( "archi_msj.php", 

 { func: "getNameAndTime", pages: fruits },


  function( data ) {
console.log( data.name ); // John
console.log( data.time ); // 2pm

//alert('complete');

  $("#contenido").cargar("lista.php");
}


,


 "json");



//$("#contenido").cargar("lista.php");


}

}







$("#archivar").click(function(){
  
});
</script>





<div style="float:left; margin-left:49px; margin-bottom:10px;">
<div style="float:left;">Tareas pendientes:</div>
<div id="cant_tare" style="float:left;"></div>
</div>

<div style="float:right; margin-right:50px;">
<form name="form1" id="form1">
  <select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
    <option>filtrar</option>
    <option value="?">activos</option>
    <option value="?archi=1">archivados</option>
  </select>
</form>
</div>

	<?php
	mysql_connect($host,$user,$password);
	mysql_select_db($dbname) or die( "Unable to select database");
?>

	<ul class="menu" id="menu-pages">
	<?php


/////////////////////////////


if(isset($_GET['h'])){
$va=$_GET['h'];
}else{
$va=3;

}



if (isset($_GET['h'])){
$pum=" categoria=".$va." and subcategoria=".$_GET['id']." ";
$redi="?h=".$va;
$redi1="&h=".$va;
$subc="id=".$_GET['id'];
$guardasubc=$_GET['id'];
}else{
if(isset($_POST['filtro'])){

if($_POST['filtro']=="0"){
$pum=" categoria<>3";
$redi="";
$redi1="";
$subc="";
$guardasubc="";
$categoria="";
}else{
$pum=" categoria<>3 AND categoria=".$_POST['filtro']." ";
$redi="";
$redi1="";
$subc="";
$guardasubc="";
}
}else{


	
$pum=" categoria=1 ";
$redi="";
$redi1="";
$subc="";
$guardasubc="";
}

}


//echo $subc;

$filtro=$pum."";


//echo $filtro;
//echo $va."//"; 

///////////////////////////////


if (isset($_GET['archi'])){
$varibb=1;
}else{
$varibb=0;
}
	
$cant_tareas=0;

$result = mysql_query("SELECT id, tarea, fecha, finalizado FROM mis_tareas WHERE $filtro  and archivado='".$varibb."'  ORDER BY `posicion` DESC") or die(mysql_error());//`categoria`='1' and `subcategoria`='0'
							
while($row = mysql_fetch_array($result)){
printf('<li id="page_%s">', $row['id'], $row['tarea'], $row['fecha']);


if ($row["finalizado"]==0){$cant_tareas++;}

?>


<div style="width:750px; height:100%; float:left;" >

<div id="<?php echo $row['id']; ?>" class="edit_tr"  >
<div class="edit_td" >
<!-- -->
<div id="first_<?php echo $row['id']; ?>" class="text" style="width:531px;float:left; padding-right:5px;"><?php echo $row['tarea']; ?></div>


<div style="float:left; margin-right:5px;" >
<textarea style="width:546px; height:65px; resize: vertical;"  class="editbox" id="first_input_<?php echo $row['id']; ?>" ><?php echo $row['tarea']; ?></textarea>
</div>




<div id="last_<?php echo $row['id']; ?>" class="text" style="width:210px;float:left;"><?php echo fecha_esp($row['fecha']); ?></div>
<div style="float:left;" >
<input type="text" style="width:195px;" value="<?php echo fecha_esp($row['fecha']); ?>" class="editbox" id="last_input_<?php echo $row['id']; ?>"/>
</div>



</div>
</div>
</div>

<!--
<div style="width:90px; float:left;" >
<input id="archivar" type="button" value="<?php //if(isset($_GET['archi'])){echo 'D';}else{} ?>archivar" onclick="archivarr('<?php //if(isset($_GET['archi'])){echo '0';}else{echo '1';} ?>;<?php //echo $row['id']; ?>')" name="archivar">
</div>
-->

<div title="Mover" id="dragche" style="width:27px; height:20px; background-position: 5px -18px; float:left; cursor:move; background-image:url('draggable.png'); background-repeat:no-repeat;" >
</div>

<div  title="Modificar" id="<?php echo $row['id']; ?>" class="edit_tr1" style="float:left;width:23px; height:20px; background-color:#000000;cursor: pointer;background: url('edit.png') no-repeat scroll 0 0 rgba(0, 0, 0, 0);"></div>

<div style="width:24px; float:left;" >

<input title="tildar" id="tilda_<?php echo $row['id']; ?>" type="checkbox" onclick="tildarr('<?php echo $row['id']; ?>;<?php echo $row['finalizado']; ?>');" value="checkbox" style="font-size:24px;" name="checkbox" <?php 

if ($row['finalizado']==1){


	echo 'checked="checked"';
}else{


	echo '';
}

 ?> > 
</div>
	<!-- 
<div style="width:80px; float:left;" >

<input class="eliminar" type="button" onclick="eliminarr('<?php //echo $row['id']; ?>')" value="Eliminar" name="eliminar">

</div>
-->




<div title="Archivar" onclick="archivarr('<?php if(isset($_GET['archi'])){echo '0';}else{echo '1';} ?>;<?php echo $row['id']; ?>')" style="width:24px; height:20px; background-position: 0px 0px; float:left; cursor:pointer; background-image:url('carpeta2.png'); background-repeat:no-repeat;" ></div>


<div title="Eliminar" onclick="eliminarr('<?php echo $row['id']; ?>')"  style="width:30px; height:20px; background-position: 0px 0px; float:left; cursor:pointer; background-image:url('delete.png'); background-repeat:no-repeat;" ></div>

<?php
	echo "</li>";
		}
	?>
	</ul>






<script>
$( "#cant_tare" ).html(<?php echo $cant_tareas ; ?>);

</script>



  <script language="javascript">
     



 
           


$("#menu-pages").sortable(


{


    handle: '#dragche',
    cancel: '',



update: function(event, ui) {
var fruits=$('#menu-pages').sortable('serialize');
//alert(fruits);
//$.post("ajax.php", { type: "orderPages", pages: fruits } );


$.post( "ajax.php", { func: "getNameAndTime", pages: fruits }, function( data ) {
console.log( data.name ); // John
console.log( data.time ); // 2pm
}, "json");



}
})
     
    </script>