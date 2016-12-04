<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>



</head>

<body>

<?php 
//echo "sadsd";
//echo exec('C:\test3.bat');
//exec('C:\wamp\www\generathor\generadorweb\notepad.bat ');
//echo exec('C:\abrirprog.bat');
//system("cmd /c C:/windows/notepad.exe");
  ?>

  <?php

$WshShell = new COM("WScript.Shell");
//$oExec = $WshShell->Run("C:/test3.bat", 0, false); //C:/test3.bat
//$oExec = $WshShell->Run("C:/abrirprog.bat", 1, false); //C:/test3.bat

/**/
//$WshShell = new COM("WScript.Shell");
$oExec = $WshShell->Run("C:/wamp/www/generathor/backuplocal/abrirprog.bat", 1,false); 

//$oExec = $WshShell->Run("c:/abrirprog.bat",1,false);

//exec("cmd");



//echo exec('whoami');
?> 


<script >

//window.close()
</script>
</body>
</html>

