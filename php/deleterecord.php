<?php 
require 'conexion.php';
if ($_GET) {
	$id = $_GET['id'];
	$sql = "DELETE FROM usuario WHERE idUsuario=$id";
	$res = mysqli_query($conn,$sql);
	if ($res) {
		echo "<script type='text/javascript'>alert('usuario eliminado');
				window.location.href='http://localhost/crudPHP/tablaDatos.php';;
			</script>";
	}else{
		echo "usuario no eliminado". $id;

	}
}


?>