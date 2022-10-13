<?php
    echo "Hello Azure!";
    
$host = 'appdbmysqlserver.mysql.database.azure.com';
$username = 'fpbkyncxoo';
$password = 'BS316RHI8702807V$';
$db_name = 'testdb';

//Initializes MySQLi
$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);
// Establish the connection
mysqli_real_connect($conn, 'appdbmysqlserver.mysql.database.azure.com', 'fpbkyncxoo', 'BS316RHI8702807V$', 'testdb', 3306, NULL, MYSQLI_CLIENT_SSL);
//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>
