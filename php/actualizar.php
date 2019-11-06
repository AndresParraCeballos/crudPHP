<?php 
require 'conexion.php';
if ($_POST) {
	$id = $_POST['id'];
	$usu_nombres = $_POST['nombres'];
	$usu_apellidos = $_POST['apellidos'];
	$usu_programa = $_POST['programa'];
	$usu_periodo = $_POST['periodo'];
	$usu_email = $_POST['email'];
	$sql = "UPDATE usuario SET usu_nombres='$usu_nombres',
			usu_apellidos='$usu_apellidos',
			usu_programa='$usu_programa',
			usu_periodoinicio='$usu_periodo',
			usu_email='$usu_email'
			WHERE idUsuario=$id";
	$res =  mysqli_query($conn,$sql);
	if ($res) {
		echo "<script type='text/javascript'>alert('usuario actualizado');
				window.location.href='http://localhost/crudPHP/tablaDatos.php';;
			</script>";
	}else{
		echo "no se actualiz";
	}
}


?>