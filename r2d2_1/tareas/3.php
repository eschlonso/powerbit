
<?php 

include("db.php");

//echo json_encode(array("name"=>"John","time"=>$_POST['pages']));

//phpinfo();
//echo json_encode($_POST['pages'])


if(isset($_GET['h'])){
  $va=$_GET['h'];
}else{

  $va="3";
}



 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MIS TAREAS</title>


	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.3/jquery-ui.min.js"></script>
	
	<style type="text/css">

.menu-pages{
background-color: #ffffff;

}

		.menu  li {
			list-style: none;
			padding: 10px;
			margin-bottom: 5px;
			border: 1px solid #000;
			background-color: #C0C0C0;/*C0C0C0*/
			width: 880px;
			height: 100%;
      display: inline-table;
 
 
     
      font-size: 22px;
		}
		.ui-state-highlight { height: 1.5em; line-height: 1.2em; background-color:#000000;  }
	</style>

 






<style >
body
{
  background-color: #ffffff;
font-family:Arial, Helvetica, sans-serif;
font-size:22px;
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

background-color:#ffffcc;
border:solid 1px #000;
padding:4px;
}
.edit_tr:hover
{
background:url(edit.png) right no-repeat #80C8E5;
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
              var gg="<?php 

              
                echo '?';
                if (isset($_GET['archi'])){echo 'archi=1';}

                if (isset($_GET['h'])){echo '&h='.$va;}

                if (isset($_GET['id'])){$id=$_GET['id'];echo '&id='.$id;} 

                
              ?>";
              //alert("plim"+gg);
                  $("#contenido").load(url+gg);
            });
      };

      $("#contenido").cargar("lista.php");




</script>



<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>




    <script language="JavaScript" type="text/javascript">
function mostrar() 
{
//alert("asda");
  document.getElementById("mensaje").style.display = "";
  document.getElementById("bot1").style.display = "none";
  document.getElementById("bot2").style.display = "";
} 

function ocultar() 
{
//alert("asda");
  document.getElementById("mensaje").style.display = "none";
  document.getElementById("bot1").style.display = "";
  document.getElementById("bot2").style.display = "none";
} 
</script>

</head>

<body> 	



  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="20%">MIS TAREAS v2.2</td>
      <td width="80%"> 
  <input type="button" id="bot1" value="Crear Mensaje" onclick="mostrar()" />

  <input type="button" id="bot2" value="Ocultar Mensaje" onclick="ocultar()" style="display:none;" /></td>
    </tr>
  </table>










<div style="display:none;" id="mensaje">
  <textarea id="tarea" style="font-size:30px; font-weight:bold;" rows="3" cols="40" name="tarea"></textarea>
<p>
<input name="guardar" id="guardar" type="button" value="guardar mensaje" />
<!-- <input name="boton" id="boton" type="button" value="Actualizar tabla" /> -->
<hr>
</div>







<div id="contenido">Cargando..</div>



  
<script>
$("#boton").click(function(){
  //alert("The paragraph was clicked.");
  $("#contenido").cargar("lista.php");
});








$("#guardar").click(function(){
  //alert("guardar");

var fruits=$('#tarea').val();


           var gg="<?php 

              
                echo '?';
               
                if (isset($_GET['h'])){echo '&h='.$va;}

                if (isset($_GET['id'])){$id=$_GET['id'];echo '&id='.$id;} 

                if (!isset($_GET['h'])){$h=1;echo '&h='.$h;} 

                
              ?>";
              //alert("plim"+gg);




$.post( "save_msj.php"+gg, 

 { func: "getNameAndTime", pages: fruits },


  function( data ) {
console.log( data.name ); // John
console.log( data.time ); // 2pm

//alert('complete');

  $("#contenido").cargar("lista.php");
}


,


 "json");


$('#tarea').val('');






});


</script>






<script>
$( ".edit_tr" ).css( "border", "3px solid red" );
</script>



</body>
</html>

