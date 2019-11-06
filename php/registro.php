<?php 
require 'conexion.php';

if ($_POST) {
	$nombres = $_POST["nombres"];
	$apellidos = $_POST["apellidos"];
	$programa = $_POST["programa"];
	$periodo = $_POST["periodo"];
	$email = $_POST["email"];
	$contrasenia = $_POST["password1"];
	$contrasenia2 = $_POST["contra2"];
	
	if ($contrasenia == $contrasenia2) {
		$contraT = hash('sha256', $contrasenia);
		$sql = "INSERT INTO usuario (usu_nombres, usu_apellidos, usu_programa,usu_periodoinicio,usu_email,usu_contrasenia) VALUES ('$nombres', '$apellidos', '$programa','$periodo','$email','$contraT')";
		if ($conn->query($sql) === TRUE) {
			
			header("location:http://localhost/crudPHP/login.html");	
		}else{
			echo "nooo";
		}
	}else{
		echo "<script type='text/javascript'>alert('Las contraseña no coinciden');
				window.location.href='http://localhost/crudPHP/registro.html';;
			</script>";	
	}	
 
	



	
	
	

}

 ?>