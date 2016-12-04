set FILE=C:\wamp\www\generathor\backupsql\www_BACKUP.sql
"C:/wamp/bin/mysql/mysql5.5.24/bin/mysqldump.exe" -h localhost -u root -r %FILE% --all-databases