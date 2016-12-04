


<?php 


date_default_timezone_set('America/Argentina/Buenos_Aires'); 
error_reporting(0);





include("db.php");

?>





<?php


function consumo_mensual($id_cat,$mes){


global $host,$user,$password,$dbname;
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");



$filtro="WHERE month(fecha)='$mes' and year(fecha)='".date('Y')."' and categoria='$id_cat' ";
//$filtro=" ";
$tablename="finanzas_gastos";
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
//$rows = array();
$mitot=0;
$saldo=0;
while ($fila = mysql_fetch_assoc($resultado)) {


  $saldo=$fila["saldo"];
  $mitot=$mitot+$saldo;
  //$gastos_categorias[$a]["nombre"]=;       
  $a++;
}


//$jTableResult = array();
//$jTableResult = "OK";



mysql_free_result($resultado);






echo  $mitot;
}


global $host,$user,$password,$dbname;
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");



//$filtro="WHERE id='$id' ";
$filtro=" order BY c ASC";
$tablename="gastos_categorias";
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
//$rows = array();
while ($fila = mysql_fetch_assoc($resultado)) {
  
 //$eil = array();
    $eil[$fila["id"]] = $fila["nombre"];
    //$rows[] = $eil;



  $gastos_categorias[$a]["id"]=$fila["id"];
  $gastos_categorias[$a]["nombre"]=$fila["nombre"];       
    $gastos_categorias[$a]["c"]=$fila["c"]; 
  $a++;
}


//$jTableResult = array();
//$jTableResult = "OK";
$jTableResult = $eil; 


mysql_free_result($resultado);


//var_dump($jTableResult);



 //print  json_encode($jTableResult);
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>




    <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
  <link href="scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
  

<link href="themes/lightcolor/gray/jtable.css" rel="stylesheet" type="text/css" />

  <script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
  

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Finanzas</title>


<script type="text/javascript" src="https://www.google.com/jsapi"></script>






  <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      //google.load("jquery", "1.6.1");
      google.load('visualization', '1', {packages: ['corechart']});
    </script>





<script type="text/javascript">





  google.setOnLoadCallback(makeAjaxCall);
    google.setOnLoadCallback(makeAjaxCall1);
        google.setOnLoadCallback(makeAjaxCall2);


    function actualizartodo(){

     
      //MIcarga2();
      

      makeAjaxCall1();
      //alert("sadsad"); 
      makeAjaxCall();
      makeAjaxCall2();


      //MIcarga('gastos_fijos.php','g_f');
      MIcarga3();

    }






function makeAjaxCall() {

mes=$( "#mes" ).val();
ano=$( "#ano" ).val();

//alert(opp);

fecha1=new Date();
fecha2=new Date();

fecha2=new Date(ano,mes-1,1);
fecha1=new Date(fecha1.getFullYear(),fecha1.getMonth(),fecha1.getDate());
f1=new Date(fecha2);
f2=new Date(fecha1); 
//alert("ingresa: "+f1+" es: "+f2);


      if(f1<=f2){



      
      //alert(mes);
      $.ajax({url:'test.php?op=1',
              data: {pages: mes+"-"+ano},
              success: function(responseData) {
                         // eval just for testing - make safer
                         var arrayForGviz = eval("(" + responseData + ")");
                         drawVisualization(arrayForGviz);
                          //alert("aqui");
                       }
        });

      }else{

        alert("No se encontraron resultados para la fecha.")
      }
      

    }





function makeAjaxCall1() {



//alert(opp);

fecha1=new Date();

//alert("ingresa: "+f1+" es: "+f2);
mes=fecha1.getMonth();
ano=fecha1.getFullYear();

    



      
      //alert(mes);
      $.ajax({url:'test.php?op=0',
              data: {pages: mes+"-"+ano},
              success: function(responseData) {
                         // eval just for testing - make safer
                         var arrayForGviz = eval("(" + responseData + ")");
                         drawVisualization1(arrayForGviz);
                          //alert("aqui");
                       }
        });

    
      

    }






 function drawVisualization(dataFromAjax) {
      var data = google.visualization.arrayToDataTable(dataFromAjax);





      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2,3,{
    calc: "stringify",
    sourceColumn: 3,
    type: "string",
    role: "annotation"
}]);




        var options = {
          title: 'Mi Performance mensual.',
          hAxis: {title: '',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0},
                    series: {
           
            2: { color: 'blue' },
            0: { color: 'green' },
            1: { color: 'red' },
          },
        };


 var chart = new google.visualization.AreaChart(document.getElementById('table'));
        chart.draw(view, options);

/*
      visualization = new google.visualization.Table(document.getElementById('table'));
      visualization.draw(data);

      */
    }



    function drawVisualization1(dataFromAjax) {

  //alert("sevendays");
      var data = google.visualization.arrayToDataTable(dataFromAjax);





      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { 


                        calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2,3,{
    calc: "stringify",
    sourceColumn: 3,
    type: "string",
    role: "annotation"
}]);







        var options = {
          title: 'Mi Performance 7 dias.',
          hAxis: {title: '',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0},
                    series: {

            2: { color: 'blue' },
            0: { color: 'green' },
            1: { color: 'red' },
          },
        };


 var chart = new google.visualization.AreaChart(document.getElementById('7dias'));
        chart.draw(view, options);

/*
      visualization = new google.visualization.Table(document.getElementById('table'));
      visualization.draw(data);

      */
    }









    function drawVisualization2(dataFromAjax) {

  //alert("sevendays");
      var data = google.visualization.arrayToDataTable(dataFromAjax);





      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2,3,{
    calc: "stringify",
    sourceColumn: 3,
    type: "string",
    role: "annotation"
}]);




        var options = {
          title: 'Mi Performance anual.',
          hAxis: {title: '',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0},
                    series: {

            2: { color: 'blue' },
            0: { color: 'green' },
            1: { color: 'red' },
          },
        };


 var chart = new google.visualization.AreaChart(document.getElementById('anual'));
        chart.draw(view, options);

/*
      visualization = new google.visualization.Table(document.getElementById('table'));
      visualization.draw(data);

      */
    }
  //google.setOnLoadCallback(makeAjaxCall);
    //google.setOnLoadCallback(makeAjaxCall1);
      //  google.setOnLoadCallback(makeAjaxCall2);







 function makeAjaxCall2() {



//alert(opp);

fecha1=new Date();

//alert("ingresa: "+f1+" es: "+f2);
mes=fecha1.getMonth();
ano=fecha1.getFullYear();

    



      
      //alert(mes);
      $.ajax({url:'test.php?op=2',
              data: {pages: mes+"-"+ano},
              success: function(responseData) {
                         // eval just for testing - make safer
                         var arrayForGviz = eval("(" + responseData + ")");
                         drawVisualization2(arrayForGviz);
                          //alert("aqui");
                       }
        });

    
      

    }




</script>





<script>

h=1;

function agregarcat(){
  //alert(h);

  if (h==1){
$( "#agrega_cat" ).show();

$( "#nombre_cat" ).val('');
//$( "#link" ).val('');
$('#grupo_cat option')[0].selected = true;
$( "#boton1" ).val('Cerrar Agregar +');
h=0;
  }else{

$( "#agrega_cat" ).hide();
$( "#boton1" ).val('Agregar +');

$( "#nombre_cat" ).val('');
$('#grupo_cat option')[0].selected = true;
//$( "#link" ).val('');
h=1;
  }
  

}



function guardarcat(){
  //alert('dasdas');
  
//alert('isa');

//tiki = fecha.split('-');



var fruits=$('#nombre_cat').val()+'!'+$('#grupo_cat').val();
$.post( "guardar_cat.php", 

 { func: "getNameAndTime", pages: fruits },


  function( data ) {
console.log( data.name ); // John
console.log( data.time ); // 2pm

//alert('complete');


h=0;
agregarcat();
 // $( "#agrega_cat" ).hide();



a='g_f';
  MIcarga("gastos_fijos.php",a);



}


,


 "json");


//$('#tarea').val('');













}







    function MIcarga(a,b){


      //alert("sadsad");
       //$("#"+b).cargar(a,b);
        mes_gf=$( "#mes_gf" ).val();
        ano_gf=$( "#ano_gf" ).val();
        $("#"+b).load(a+'?fecha='+mes_gf+'-'+ano_gf);
    }




    function MIcarga2(){
        $("#visor1").load('visor1.php');
    }

    function MIcarga3(){
        $("#visor2").load('visor2.php');
    }



</script>






<script>
      jQuery.fn.cargar = function(url) {
            $(document).ready(function(){
                  $("#contenido").load(url);
            });
      };

 




</script>


    <script type="text/javascript">



function actualizar(){
  //alert('bien');
     //$("#contenido").cargar("f1.php");
     
  setTimeout(function(){

    //document.getElementById('mue').contentDocument.location.reload(true);
    actualizartodo();


  }, 6000);
}


    </script>



 <script>
$(function() {
$( "#accordion" ).accordion({
  autoHeight:false
});
});
</script>


 <script>
$(function() {
$( "#accordion2" ).accordion({
  autoHeight:false
});
});
</script>


 <script>
$(function() {
$( "#tabs" ).tabs();
});
</script>


 <script>
$(function() {
$( "#tabs1" ).tabs();
});
</script>


 <script>
$(function() {
$( "#tabs2" ).tabs();
});
</script>

<style type="text/css">
<!--
body {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 20px;
}
-->

.titulotabla{
background-color:#002164;
  color: #FFFFFF;
    font-weight: bold;

    text-transform: capitalize;

}

.celda1tabla{
background-color:#ffffff;



    text-transform: capitalize;
}

.celda2tabla{
background-color:#E1E4EC;



    text-transform: capitalize;
}

.tablita{
width:800px;
display: none;
}


td,th{
padding:3px;
}


</style>













</head>

<body>
<?php 
$titulo="finanzas";
$ruta_titulo="index.php";
include("../ruta.php");?>


<div id="contenido"></div>

<?php //include('f1.php');?>

<!-- <iframe name='mue' id='mue' src="f1.php" width='950px' height='1020px'></iframe> -->



<div id='visor1'></div>



<script>

//MIcarga2();
     
</script>



<div id='visor2'></div>
<script>

    //MIcarga2();
    MIcarga3();

</script>





<div id="anual" style="width: 900px; height: 220px;"></div>



<div id="7dias" style="width: 900px; height: 220px;"></div>









<div id="table" style="width: 900px; height: 220px;"></div>


<div align="center">
<form id="form1" name="form1" method="post" action="">

<?php 

function esmes($v){
  $m=date('m');
  if($v==$m){
    echo "selected";
  }
}

?>

      <select id="mes">
  <option value="01" <?php esmes('01'); ?> >Enero</option>
  <option value="02" <?php esmes('02'); ?> >Febrero</option>
  <option value="03" <?php esmes('03'); ?> >Marzo</option>
  <option value="04" <?php esmes('04'); ?> >Abril</option>
  <option value="05" <?php esmes('05'); ?> >Mayo</option>
  <option value="06" <?php esmes('06'); ?> >Junio</option>
  <option value="07" <?php esmes('07'); ?> >Julio</option>
  <option value="08" <?php esmes('08'); ?> >Agosto</option>
  <option value="09" <?php esmes('09'); ?> >Septiembre</option>
  <option value="10" <?php esmes('10'); ?> >Octubre</option>
  <option value="11" <?php esmes('11'); ?> >Noviembre</option>
  <option value="12" <?php esmes('12'); ?> >Diciembre</option>
  </select>




<?php 

function esano($v){
  $m=date('Y');
  if($v==$m){
    return "selected";
  }
}

?>
  <select id="ano">

    <?php   

$pp=date('Y');
    for ($i = 2013; $i <= $pp+2; $i++) {
  echo "<option value='".$i."' ".esano($i)." >$i</option>";

  } ?>
    
  </select>

 

  <input type="button" onclick="makeAjaxCall();return false;" value="Cambiar"></input>

</form>
</div>








<input type="button" onclick="actualizartodo();" value="actualizar todo" style='display:none;'></input>







<br>



Cierre de caja
<br>
saldo en caja de gastos:
<br>
se muetra la ganancia: 500
<br>
al aceptar se guarda la ganancia en ahorros.
<br>


<div style="padding-left:230px; display:none;" aling="center">

Gastos fijos:

<br>





<select id="mes_gf">
 <option value="01" <?php esmes('01'); ?> >Enero</option>
  <option value="02" <?php esmes('02'); ?> >Febrero</option>
  <option value="03" <?php esmes('03'); ?> >Marzo</option>
  <option value="04" <?php esmes('04'); ?> >Abril</option>
  <option value="05" <?php esmes('05'); ?> >Mayo</option>
  <option value="06" <?php esmes('06'); ?> >Junio</option>
  <option value="07" <?php esmes('07'); ?> >Julio</option>
  <option value="08" <?php esmes('08'); ?> >Agosto</option>
  <option value="09" <?php esmes('09'); ?> >Septiembre</option>
  <option value="10" <?php esmes('10'); ?> >Octubre</option>
  <option value="11" <?php esmes('11'); ?> >Noviembre</option>
  <option value="12" <?php esmes('12'); ?> >Diciembre</option>
</select>



 <select id="ano_gf">

    <?php   

$pp=date('Y');
    for ($i = 2013; $i <= $pp+2; $i++) {
  echo "<option value='".$i."' ".esano($i)." >$i</option>";

  } ?>
    
  </select>

 

  <input type="button" onclick="MIcarga('gastos_fijos.php','g_f');" value="Cambiar"></input>



<br>

</div>



<div id='g_f' ></div>

<script>

a='g_f';
  //MIcarga("gastos_fijos.php",a);


</script>
<br>


<div style="padding-left: 230px;">

 <input  type="button" id="boton1"  value="Agregar +" onClick="agregarcat();" >
<br>

<div id="agrega_cat" style="display:none;">
  nombre:<br>
<input id="nombre_cat" type="text">
  <br>


  grupo:<br>
  <select id="grupo_cat">

  <option value="0" >general</option>
    <option value="1" >alamacen</option>
</select>
  <br>
  <br>

<input  type="button"  value="Guardar" onClick="guardarcat();" >


</div>


</div>











    <script type="text/javascript">


//$("#contenido").cargar("prueba1.php");



</script>


<div style="display:none;">
<a href="?">Listar</a> <a href="?n=1">Ingresos</a> <a href="?n=2">Gastos</a> <a href="?n=3">Ajuste de caja 
</a>
</div>
<p>


<?php if (isset($_GET['n'])){

 if (isset($_GET['g'])){
 
 //echo "guardar";
 
 if($_GET['n']==1){
 $tablename="finanzas_ingresos";
 }
 
  if($_GET['n']==2){
 $tablename="finanzas_gastos";
 }
 
  if($_GET['n']==3){
 $tablename="finanzas_ajustecaja";
 }


	
		
	$query="INSERT INTO $tablename (fecha,saldo,descripcion,op) VALUES ('".$_POST['fecha']."','".$_POST['saldo']."','".$_POST['descripcion']."','".$_POST['op']."');";
	//echo $query;
	mysql_select_db($dbname,$link);
	mysql_query($query,$link);
	$my_error = mysql_error($link);
	if(!empty($my_error)) {
	//cartel(3,"Hubo un error al insertar el registro. $my_error"); 
	echo "Hubo un error al insertar el registro. $my_error";
	} else {
	echo "GUARDADO.";
	//echo cartel(3,"SSEEEEEEEEE");
	}
	?>
	
	<script language="JavaScript" type="text/javascript">
var pagina="?n=<?php echo $_GET['n']; ?>"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 000);

</script>



<?php
 
 
 }else{ 
 ?>
<table width="237" border="1" cellspacing="0" cellpadding="5" bgcolor="#95FF95">
  <tr>
    <td><form id="form2" name="form2" method="post" action="?n=<?php echo $_GET['n']; ?>&g=1">
      <label>      Saldo<br />
      <input name="saldo" type="text" id="saldo" />
        </label>
        <p>caja:
      <br />
        <select name="op">
          <option value="0">comun</option>
          <option value="1">ahorros</option>
        </select>
    
      </p>
      <p>
        <label></label>
        <label>        Fecha<br />
        <input name="fecha" type="text" id="fecha" value="<?php echo date("Y-m-d H:i:s"); ?>" />
        </label>
        </p>
      <p>Descripcion
        <label>
        <textarea name="descripcion" id="descripcion"></textarea>
        </label>
      </p>
    
      <p>
        <label>
        <input type="submit" name="Submit2" value="Enviar" />
        </label>
      </p>
    </form>    </td>
  </tr>
</table>
<?php }}else{ ?>






<div id="tabs">
<ul>
<li><a href="#tabs-1">Caja comun</a></li>
<li><a href="#tabs-2">caja ahorrros</a></li>
</ul>
<div id="tabs-1">


<div id="tabs1">
<ul>
<li><a href="#tabs1-1">Ingresos</a></li>

<!-- <li><a href="#tabs1-2">Gastos</a></li> -->
<li><a href="#tabs1-4">Gastosr</a></li>
<!-- <li><a href="#tabs1-3">Ajuste de caja</a></li>  -->
</ul>
<div id="tabs1-1">



<div id="PeopleTableContainer" style="width: 950px; "></div>
  <script type="text/javascript">

    $(document).ready(function () {

        //Prepare jTable
      $('#PeopleTableContainer').jtable({
        title: 'Tabla de Ingresos',
        paging: true,
        pageSize: 10,
        sorting: true,
        defaultSorting: 'fecha DESC',
        actions: {
          listAction: 'PersonActionsPagedSorted.php?action=list',
          createAction: 'PersonActionsPagedSorted.php?action=create',
          updateAction: 'PersonActionsPagedSorted.php?action=update',
          deleteAction: 'PersonActionsPagedSorted.php?action=delete'
        },
        fields: {
          id: {
            title: 'id',
            key: true,
            create: false,
            edit: false,
            list: true
          },
          descripcion: {
            title: 'descripcion',
            width: '40%'
          },
          saldo: {
            title: 'saldo',
            width: '20%'
          },
          fecha: {
            title: 'fecha',
            width: '30%',
            type: 'datetime',
            create: true,
            edit: true,
            defaultValue: "<?php echo date('Y-m-d H:i:s'); ?>",
        
          }
        }
      });

      //Load person list from server
      $('#PeopleTableContainer').jtable('load');

    });

  </script>
</div>




<!--
<div id="tabs1-2">


<div id="PeopleTableContainer1" style="width: 950px; "></div>
  <script type="text/javascript">

    $(document).ready(function () {

        //Prepare jTable
      $('#PeopleTableContainer1').jtable({
        title: 'Tabla de Gastos cc',
        paging: true,
        pageSize: 10,
        sorting: true,
        selecting: true,
        defaultSorting: 'fecha DESC',
        actions: {
          listAction: 'PersonActionsPagedSorted1.php?action=list',
          createAction: 'PersonActionsPagedSorted1.php?action=create',
          updateAction: 'PersonActionsPagedSorted1.php?action=update',
          deleteAction: 'PersonActionsPagedSorted1.php?action=delete'
        },
        fields: {
          id: {
            title: 'id',
            key: true,
            create: false,
            edit: false,
            list: true
          },
           categoria: {
            title: 'categoria',
            width: '20%',
            create: true,
            list:true,
            edit: true,
           // sorting: false,
            options:  <?php// print  json_encode($jTableResult); ?>
          },
                    descripcion: {
            title: 'descripcion',
            width: '10%'
          },
          
          saldo: {
            title: 'saldo',
            width: '10%'
          },
          fecha: {
            title: 'fecha',
            width: '30%',
            type: 'datetime',
            create: false,
            edit: true
          }

          
        }
      });

      //Load person list from server
      //$('#PeopleTableContainer1').jtable('load');

    });

  </script>





</div>

-->


<div id="tabs1-4">


<div id="PeopleTableContainer6" style="width: 950px; "></div>
  <script type="text/javascript">

    $(document).ready(function () {

        //Prepare jTable
      $('#PeopleTableContainer6').jtable({
        title: 'Tabla de Gastos r',
        paging: true,
        pageSize: 10,
        sorting: true,
        selecting: true,
        defaultSorting: 'fecha DESC',
        actions: {
          listAction: 'PersonActionsPagedSorted6.php?action=list',
          createAction: 'PersonActionsPagedSorted6.php?action=create',
          updateAction: 'PersonActionsPagedSorted6.php?action=update',
          deleteAction: 'PersonActionsPagedSorted6.php?action=delete'
        },
        fields: {
          id: {
            title: 'id',
            key: true,
            create: false,
            edit: false,
            list: true
          },
           categoria: {
            title: 'categoria',
            width: '20%',
            create: true,
            list:true,
            edit: true,
           // sorting: false,
            options:  <?php print  json_encode($jTableResult); ?>
          },
                    descripcion: {
            title: 'descripcion',
            width: '10%'
          },
          
          saldo: {
            title: 'saldo',
            width: '10%'
          },
          fecha: {
            title: 'fecha',
            width: '30%',
            type: 'datetime',
            create: true,
            edit: true,
            defaultValue: "<?php echo date('Y-m-d H:i:s'); ?>",
          }

          
        }
      });

      //Load person list from server
      $('#PeopleTableContainer6').jtable('load');

    });

  </script>





</div>

<!--
<div id="tabs1-3">




<div id="PeopleTableContainer2" style="width: 950px; "></div>
  <script type="text/javascript">

    $(document).ready(function () {

        //Prepare jTable
      $('#PeopleTableContainer2').jtable({
        title: 'Tabla de ajuste de caja',
        paging: true,
        pageSize: 10,
        sorting: true,
        defaultSorting: 'fecha DESC',
        actions: {
          listAction: 'PersonActionsPagedSorted2.php?action=list',
          createAction: 'PersonActionsPagedSorted2.php?action=create',
          updateAction: 'PersonActionsPagedSorted2.php?action=update',
          deleteAction: 'PersonActionsPagedSorted2.php?action=delete'
        },
        fields: {
          id: {
            title: 'id',
            key: true,
            create: false,
            edit: false,
            list: true
          },
          descripcion: {
            title: 'descripcion',
            width: '40%'
          },
          saldo: {
            title: 'saldo',
            width: '20%'
          },
          fecha: {
            title: 'fecha',
            width: '30%',
            type: 'datetime',
            create: false,
            edit: true
          }
        }
      });

      //Load person list from server
      $('#PeopleTableContainer2').jtable('load');

    });

  </script>






</div>

-->

</div>


</div>
<div id="tabs-2">



<div id="tabs2">
<ul>
<li><a href="#tabs2-1">Ingresos</a></li>
<li><a href="#tabs2-2">Gastos</a></li>
<li><a href="#tabs2-3">Ajuste de caja</a></li>
</ul>
<div id="tabs2-1">


<div id="PeopleTableContainer3" style="width: 950px; "></div>
  <script type="text/javascript">

    $(document).ready(function () {

        //Prepare jTable
      $('#PeopleTableContainer3').jtable({
        title: 'Tabla de ingresoss',
        paging: true,
        pageSize: 10,
        sorting: true,
        defaultSorting: 'fecha DESC',
        actions: {
          listAction: 'PersonActionsPagedSorted3.php?action=list',
          createAction: 'PersonActionsPagedSorted3.php?action=create',
          updateAction: 'PersonActionsPagedSorted3.php?action=update',
          deleteAction: 'PersonActionsPagedSorted3.php?action=delete'
        },
        fields: {
          id: {
            title: 'id',
            key: true,
            create: false,
            edit: false,
            list: true
          },
          descripcion: {
            title: 'descripcion',
            width: '40%'
          },
          saldo: {
            title: 'saldo',
            width: '20%'
          },
          fecha: {
            title: 'fecha',
            width: '30%',
            type: 'datetime',
            create: true,
            edit: true,
            defaultValue: "<?php echo date('Y-m-d H:i:s'); ?>",

          }
        }
      });

      //Load person list from server
      $('#PeopleTableContainer3').jtable('load');

    });

  </script>




</div>
<div id="tabs2-2">


<div id="PeopleTableContainer4" style="width: 950px; "></div>
  <script type="text/javascript">

    $(document).ready(function () {

        //Prepare jTable
      $('#PeopleTableContainer4').jtable({
        title: 'Tabla de gastos',
        paging: true,
        pageSize: 10,
        sorting: true,
        defaultSorting: 'fecha DESC',
        actions: {
          listAction: 'PersonActionsPagedSorted4.php?action=list',
          createAction: 'PersonActionsPagedSorted4.php?action=create',
          updateAction: 'PersonActionsPagedSorted4.php?action=update',
          deleteAction: 'PersonActionsPagedSorted4.php?action=delete'
        },
        fields: {
          id: {
            title: 'id',
            key: true,
            create: false,
            edit: false,
            list: true
          },
          descripcion: {
            title: 'descripcion',
            width: '40%'
          },
          saldo: {
            title: 'saldo',
            width: '20%'
          },
          fecha: {
            title: 'fecha',
            width: '30%',
            type: 'datetime',
            create: true,
            edit: true,
            defaultValue: "<?php echo date('Y-m-d H:i:s'); ?>",

          }
        }
      });

      //Load person list from server
      $('#PeopleTableContainer4').jtable('load');

    });

  </script>



</div>
<div id="tabs2-3">



<div id="PeopleTableContainer5" style="width: 950px; "></div>
  <script type="text/javascript">

    $(document).ready(function () {

        //Prepare jTable
      $('#PeopleTableContainer5').jtable({
        title: 'Tabla de ajustes caja',
        paging: true,
        pageSize: 10,
        sorting: true,
        defaultSorting: 'fecha DESC',
        actions: {
          listAction: 'PersonActionsPagedSorted5.php?action=list',
          createAction: 'PersonActionsPagedSorted5.php?action=create',
          updateAction: 'PersonActionsPagedSorted5.php?action=update',
          deleteAction: 'PersonActionsPagedSorted5.php?action=delete'
        },
        fields: {
          id: {
            title: 'id',
            key: true,
            create: false,
            edit: false,
            list: true
          },
          descripcion: {
            title: 'descripcion',
            width: '40%'
          },
          saldo: {
            title: 'saldo',
            width: '20%'
          },
          fecha: {
            title: 'fecha',
            width: '30%',
            type: 'datetime',
            create: true,
            edit: true,
            defaultValue: "<?php echo date('Y-m-d H:i:s'); ?>",
          }
        }
      });

      //Load person list from server
      $('#PeopleTableContainer5').jtable('load');

    });

  </script>


</div>
</div>







  




</div>
</div>














<?php } ?>



<script>
  


  var table = $('#ejemplo').DataTable();
 
table.column( 3 ).visible( false );
</script>
</body>
</html>
