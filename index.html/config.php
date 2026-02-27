 <?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = ''; //contraseña vacia
$dbname = 'listar';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
// else
// {
// 	echo "YES";
// }
