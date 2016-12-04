<html>
    <head>
        <title>jQuery Load</title>
        <!-- Libreria jQuery -->
 


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.3/jquery-ui.min.js"></script>
  
 
        <!-- Acción sobre el botón con id=boton y actualizamos el div con id=capa -->
        <script type="text/javascript">
            $(document).ready(function() {
                $("#boton").click(function(event) {
                    $("#capa").load('lista.php');
                });
            });



            $(document).ready(function() {
          
                    $("#capa").load('lista.php');

              
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







    </head>
    <body>
    <div id="capa">Pulsa 'Actualizar capa' y este texto se actualizará</div>
    <br>
       <input name="boton" id="boton" type="button" value="Actualizar capa" />
    
      <input name="boton1" id="boton1" type="button" value="scipt capa" />


     


    </body>

</html>