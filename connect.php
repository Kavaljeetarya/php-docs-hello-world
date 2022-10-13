<?php
$host = 'njkmserver.mysql.database.azure.com';
$username = 'njkmserveruser';
$password = 'Arya@12345';
$db_name = 'testdb';

//Initializes MySQLi
$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootG2.crt.pem", NULL, NULL);
// Establish the connection
mysqli_real_connect($conn, 'njkmserver.mysql.database.azure.com', 'njkmserveruser', 'Arya@12345', 'testdb', 3306, NULL, MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT);
//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
//Run the Select query
printf("Reading data from table: \n");
$res = mysqli_query($conn, 'SELECT * FROM dinner');
while ($row = mysqli_fetch_assoc($res))
{
   echo $row['dinnerid']." ";
    echo $row['dinnername']." ";
    echo $row['dinnerday']." ";
    echo $row['dinneraddress']."</br>";
}
?>
