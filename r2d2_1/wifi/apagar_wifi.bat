@ECHO OFF
ECHO.set handler=WScript.CreateObject("WScript.Shell") >> temp_SendKeys.VBS
ECHO.WScript.sleep 500 >>temp_SendKeys.VBS
ECHO.handler.SendKeys "open 192.168.1.1~" >>temp_SendKeys.VBS
ECHO.WScript.sleep 500 >>temp_SendKeys.VBS
ECHO.handler.SendKeys "admin~" >> temp_SendKeys.VBS
ECHO.WScript.sleep 500 >> temp_SendKeys.VBS
ECHO.handler.SendKeys "1234~" >>temp_SendKeys.VBS

ECHO.WScript.sleep 500 >> temp_SendKeys.VBS
ECHO.handler.SendKeys "wlan disable~" >>temp_SendKeys.VBS

start telnet.exe
cscript//nologo temp_SendKeys.VBS
DEL temp_SendKeys.VBS