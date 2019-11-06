<?php 

require 'conexion.php';

if ($_POST) {
	$email = $_POST['email'];
	$contra =  $_POST['password'];
	$contraT = hash('sha256', $contra);
	$sql = "SELECT * FROM usuario WHERE usu_email = '$email' AND usu_contrasenia = '$contraT'";
	


	$res = mysqli_query($conn,$sql);

	if ($fila = mysqli_fetch_array($res)) {
		session_start();
		$_SESSION['email'] = $email;
		header("location:http://localhost/crudPHP/tablaDatos.php");

	}
}


?>