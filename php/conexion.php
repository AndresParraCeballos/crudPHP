<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "profundizacion";
/*
try {
	$conn =new PDO("mysql:host=$hostname;dbname=$dbname;",$username,$password);

} catch (Exception $e) {

	die("Conexion pailas". $e->getMessage());

}*/
$conn = mysqli_connect( $hostname, $username, "",$dbname ) or die ("No se ha podido conectar al servidor de Base de datos");






?>