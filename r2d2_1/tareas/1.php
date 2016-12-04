
<?php //echo json_encode(array("name"=>"John","time"=>$_POST['pages']));

//phpinfo();
//echo json_encode($_POST['pages'])
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>


	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.3/jquery-ui.min.js"></script>
	<script language="javascript">
		$(document).ready(function(){

		
			$("#menu-pages").sortable(


			{


				update: function(event, ui) {
					var fruits=$('#menu-pages').sortable('serialize');
					//alert(fruits);
					//$.post("ajax.php", { type: "orderPages", pages: fruits } );
					









				$.post( "ajax.php", { func: "getNameAndTime", pages: fruits }, function( data ) {
console.log( data.name ); // John
console.log( data.time ); // 2pm
}, "json");













				}
			});
		});
	</script>
	<style type="text/css">
		.menu li {
			list-style: none;
			padding: 10px;
			margin-bottom: 5px;
			border: 1px solid #000;
			background-color: #C0C0C0;
			width: 800px;
			height: 22px;
		}
		.ui-state-highlight { height: 1.5em; line-height: 1.2em; background-color:#000000;  }
	</style>

 <style>

</style>





<script type="text/javascript">
$(document).ready(function()
{
$(".edit_tr").click(function()
{
var ID=$(this).attr('id');
$("#first_"+ID).hide();
$("#last_"+ID).hide();
$("#first_input_"+ID).show();
$("#last_input_"+ID).show();
}).change(function()
{
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
</script>


<style >
body
{
font-family:Arial, Helvetica, sans-serif;
font-size:14px;
}
.editbox
{
display:none
}
td
{
padding:5px;
}
.editbox
{
font-size:14px;
width:270px;
background-color:#ffffcc;
border:solid 1px #000;
padding:4px;
}
.edit_tr:hover
{
background:url(edit.png) right no-repeat #80C8E5;
cursor:pointer;
}
.head
{
background-color:#333;
color:#FFFFFF

}
</style>





<script>
      jQuery.fn.cargar = function(url) {
            $(document).ready(function(){
                  $("#contenido").load(url);
            });
      };

      //$("#contenido").cargar("lista.php");
</script>



</head>

<body>
<div id="contenido"> contenido</div>


<script type="text/javascript">
$(function() {

$(function mostrar() {




  $.ajax({
    type: "POST",
  url: "lista.php",
   data: dataString,
  cache: false,
  success: function(html){
  
  
  
    $("#display").before(html);

  
  }
});

});


  });
    
</script>



<div id="display" align="left"></div>










AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA










	<?php
	mysql_connect("localhost",'root','');
	mysql_select_db('generathor') or die( "Unable to select database");
?>

	<ul class="menu" id="menu-pages">
	<?php
		$result = mysql_query("SELECT id, tarea, fecha FROM mis_tareas WHERE `categoria`='1' and `subcategoria`='0'  ORDER BY `posicion` DESC") or die(mysql_error());
							
		while($row = mysql_fetch_array($result)){
			printf('<li id="page_%s">', $row['id'], $row['tarea'], $row['fecha']);



?>


<div style="width:600px; height:20px; float:left;" >

<div id="<?php echo $row['id']; ?>" class="edit_tr"  >
<div class="edit_td" >
<!-- -->
<div id="first_<?php echo $row['id']; ?>" class="text" style="width:400px;float:left;"><?php echo $row['tarea']; ?></div>
<input type="text" value="<?php echo $row['tarea']; ?>" class="editbox" id="first_input_<?php echo $row['id']; ?>" />





<div id="last_<?php echo $row['id']; ?>" class="text" style="width:170px;float:left;"><?php echo $row['fecha']; ?></div>
<input type="text" value="<?php echo $row['fecha']; ?>" class="editbox" id="last_input_<?php echo $row['id']; ?>"/>

</div>
</div>
</div>


<div style="width:90px; float:left;" >
<input class="archivar" type="button" onclick="pregunta('256')" value="archivar" name="archivar">
</div>

<div style="width:30px; float:left;" >
<input id="256" type="checkbox" onclick="tildo('<?php echo $row['id']; ?>');" value="checkbox" style="font-size:24px;" name="checkbox">
</div>

<div style="width:30px; float:left;" >
<input class="eliminar" type="button" onclick="pregunta('256')" value="Eliminar" name="eliminar">
</div>

<?php
	echo "</li>";
		}
	?>
	</ul>
</body>
</html>

