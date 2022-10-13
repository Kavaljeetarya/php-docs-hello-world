<?php
$host = 'appdbmysqlserver.mysql.database.azure.com';
$username = 'fpbkyncxoo';
$password = 'BS316RHI8702807V$';
$db_name = testdb';

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
//Run the Select query
printf("Reading data from table: \n");
$res = mysqli_query($conn, 'SELECT * FROM Products');
while ($row = mysqli_fetch_assoc($res))
{
    var_dump($row);
}
?>