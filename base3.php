<?php //CONECTAR UNA BASE DE DATOS SIN DRUPAL. LISTAR UNA TABLA.



 
 
if( $_SERVER['SERVER_NAME'] == "localhost"){
$host="127.0.0.1";
$user="root";
$password="";
$dbname="arquitex";
echo"1";
}else{
$host="208.86.249.19:2082";
$user="todohoga@localhost";
$password="";
$dbname="todohoga_base";
echo"2";
}
//////////CONECTAR DB
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n"); 

echo"fin.";
?>