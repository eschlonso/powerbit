set reloj=%time%
set reloj=%reloj::=%
set reloj=%reloj:.=%

for /f "tokens=1-3 delims=/ " %%a in ('date/t') do (
set dia=%%a
set mes=%%b
set anio=%%c
)
set fecha=%anio%%mes%%dia%

set FILE=C:\wamp\www\elecktrobit\elecktrobit_%fecha%_%reloj%.sql
"C:/wamp/bin/mysql/mysql5.5.20/bin/mysqldump.exe" -h localhost -u root -r %FILE% elecktrobit