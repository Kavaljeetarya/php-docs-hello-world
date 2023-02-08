<?php
    echo "Hello Azure! \n"."</br>";
    
$host = 'njkmserver.mysql.database.azure.com';
$username = 'njkmserveruser';
$password = 'Password@12345';
$db_name = 'testdb';

//Initializes MySQLi
$conn = mysqli_init();
#mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootG2.crt.pem", NULL, NULL);
// Establish the connection
mysqli_real_connect($conn, "njkmserver.mysql.database.azure.com", "njkmserveruser", "Password@12345", "testdb", 3306, MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT);
//If connection failed, show the error
if (mysqli_connect_error())
{
    die('Failed to connect to MySQL: '.mysqli_connect_errno());
}
echo "Run the Select query";
printf("Reading data from table: \n");
$res = mysqli_query($conn, 'SELECT * FROM dinners');
while ($row = mysqli_fetch_assoc($res))
{
    echo $row['name']." ";
    echo $row['birthsate']." ";
    echo $row['entree']." ";
    echo $row['side']." ";
    echo $row['dessert']."</br>";
}
?>
