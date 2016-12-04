@ECHO OFF


set tm=%time% 

echo "hola"
echo %tm% 



set hh=%tm:~0,2%



IF %hh% lss 12 (

echo "PRENDER WIFI"
START C:\wamp\www\generathor\wifi\encender_wifi.bat 

)