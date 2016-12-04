<?php //CONECTAR UNA BASE DE DATOS SIN DRUPAL. LISTAR UNA TABLA.
//KOHPpIW=SR5u
//Added user todohoga_user1 with password KOHPpIW=SR5u. 


$link = mysql_connect("localhost", "todohoga_user1", "KOHPpIW=SR5u");
mysql_select_db("todohoga_db", $link);
return $link;




$host="localhost";
$user="todohoga_user1";
$password="KOHPpIW=SR5u";
$dbname="todohoga_db";
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n"); 



//TABLA OFERTAS
		$tablename="tabla1";
		//$filtro="WHERE dni='".$dni."'";
		$query="SELECT * FROM $tablename;";
		//echo $query;
		$result=mysql_db_query ($dbname, $query, $link);
		$a=0;
		while ($row = mysql_fetch_array ($result))
		{  
			echo $row["id"].$row["txt"];	
			$a++;
		}
		mysql_free_result($result);
?>
//1