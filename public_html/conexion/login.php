<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "1234";
$dbname = "sweet_cream_db";


$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

/*
 * 
 *  aca es un aja de login lo que trata de hacer es obtener esas madres y ya luego
 *  lo que hace es obtener los id de los campos para que luego se manden a la base de datos
 *  aca por ejemplo hace un select para probar si existe algo asi y ya si si aja obtiene la fila y ya luego ingresa al sistema 
 * practicamente asi tendriamos que hacerle tambien con las demas consultas, si no me entendieron les dejo el tuto de donde lo saque+
 * 
 * https://youtu.be/mZG7VvHkOjI
 * 
 * 
$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	//header("Location: pagina.html")
	echo "Bienvenido:" .$nombre;
}
else if ($nr == 0) 
{
	//header("Location: login.html");
	//echo "No ingreso"; 
	echo "<script> alert('Error');window.location= 'login.html' </script>";
}
	

*/
?>
