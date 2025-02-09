# Login en PHP
## Login.php
- Página de inicio
## DB.php
- Datos para la conexión con la base de datos
- $host = "mysql.hostinger.com";
## Validar.php
- Primero comprueba si hay conexión usando "db.php"
- Comprueba que el usuario y la contraseña están en la base de datos
- Si existen redirije a "index.php"
- Si no existe, redirije a "login.php"
## Index.php
- Página principal a la cual accedes tras logearte
- Una vez se llega aquí, iniciamos la sesiópn "session_start();"
## Logout.php
- Se usa para cerrar la sessión "session_destroy()"
