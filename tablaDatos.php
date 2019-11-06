<?php 
require 'php/conexion.php';
session_start();
if (!isset($_SESSION['email'])) {
	header("location:http://localhost/crudPHP/login.html");
}else{

	$sql = "SELECT * FROM usuario";
	$res = mysqli_query($conn,$sql);
	
?>

<!DOCTYPE html>
<html>
<head>
	<!--CSS BOOSTRAP-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
	    <meta charset="utf-8">
	<!--CSS BOOSTRAP-->
	<title>Home</title>
	<script type="text/javascript">
		function borrar(id){
			window.location.href="http://localhost/crudPHP/php/deleterecord.php?id="+id;			
		}
		function editar(id){
			window.location.href="http://localhost/crudPHP/php/editar.php?id="+id;			
		}
	</script>
</head>
<body class="bg-secondary">
		<!-- Image and text -->
	<nav class="navbar navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">	    
	    CRUD PHP + MySQL
	  </a>

	</nav>

	<div class="container p-4 pt-0 mt-5 rounded bg-dark">
		
		
			
				<div class="row p-3">
					<div class="col-1">
						<a href="php/logout.php" class="btn btn-dark ">
				          <span class="glyphicon glyphicon-chevron-left"></span> CERRAR SESIÓN
				        </a>
					</div>
					<div class="col-11">
						<h2 class="text-light text-center">Datos de usuario</h2>
					</div>
				</div>

				<!-- ROW NOMBRES Y APELLIDOS-->

				<table class="table table-dark">
				  <thead>
				    <tr>
				      <th scope="col">Codigo</th>
				      <th scope="col">Nombres</th>
				      <th scope="col">Apellidos</th>
				      <th scope="col">Programa</th>
				      <th scope="col">Semestre</th>
				      <th scope="col">Correo electronico</th>
				      <th scope="col" colspan="2" class="text-center">Acciones</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  		while ($fila = mysqli_fetch_array($res)) {
							echo $fila[0];
						
				  	?>
				    <tr>
				      <th scope="row"><?php echo "$fila[0]"; ?></th>
				      <td><?php echo "$fila[1]"; ?></td>
				      <td><?php echo "$fila[2]"; ?></td>
				      <td><?php echo "$fila[3]"; ?></td>
				      <td><?php echo "$fila[4]"; ?></td>
				      <td><?php echo "$fila[5]"; ?></td>
				      <td><button type="button" onclick="editar(<?php echo $fila[0]; ?>)" class="btn btn-outline-light">Editar 
				      		<span class="glyphicon glyphicon-pencil"></span>
				      </button></td>
				      <td><button type="button" onclick="borrar(<?php echo $fila[0]; ?>)" class="btn btn-outline-light">Eliminar 
				      		<span class="glyphicon glyphicon-trash"></span>
				      </button></td>

				    </tr>
					<?php } ?>
				    
				  </tbody>
				</table>
	</div>




<!--JS BOOSTRAP-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--JS BOOSTRAP-->

</body>
</html>
<?php } ?>