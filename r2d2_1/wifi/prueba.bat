@ECHO OFF
set tm=%time% 

echo "hola"
echo %tm% 



set hh=%tm:~0,2%
if %hh% equ 22 (
    echo "si"
    
)

echo %hh% 