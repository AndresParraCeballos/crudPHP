<?php 

require 'conexion.php';
session_start();
if (!isset($_SESSION['email'])) {
	header("location:http://localhost/crudPHP/login.html");
}else{

	if ($_GET) {
			$id = $_GET['id'];
			$sql = "SELECT * FROM usuario WHERE idUsuario = $id";
			$res = mysqli_query($conn,$sql);
			$fila = mysqli_fetch_array($res);
			
			

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
	    <meta charset="utf-8">
	<title>Editar</title>
</head>
<body class="bg-secondary">

<div class="container p-4 pt-0 mt-5 rounded bg-dark">
		
		<form method="post" action="actualizar.php" class="mx-5">
			
				<div class="row p-3">
					<div class="col-1">
						<a href="../tablaDatos.php" class="btn btn-dark ">
				          <span class="glyphicon glyphicon-chevron-left"></span> TABLA DE DATOS
				        </a>
					</div>
					<div class="col-11">
						<h2 class="text-light text-center">Actualizar datos</h2>
					</div>
				</div>

				<!-- ROW NOMBRES Y APELLIDOS-->
				<div class="row">
					
					<div class="col-4">
							<input type="hidden" name="id" id="id" class="form-control"  value="<?php echo($fila[0]) ?>">    								
					</div>
											
				</div>

				<div class="row">
					<div class="col-2 text-center text-light bg-secondary my-auto p-1 rounded"> <label for="nombre">Nombres</label></div>
					<div class="col-4">
							<input type="text" name="nombres" id="nombres" class="form-control" placeholder="Escribe tu(s) nombre(s)" value="<?php echo($fila[1]) ?>">    								
					</div>
					<div class="col-2 text-center text-light bg-secondary my-auto p-1 rounded"> <label for="apellidos">Apellidos</label></div>
					<div class="col-4">
							<input type="text" name="apellidos" id="apellidos" class="form-control"   placeholder="Escribe tu(s) apellido(s)" value="<?php echo($fila[2]) ?>"> 					
					</div>							
				</div>	

				<!-- ROW EMAIL Y CONTRASEÑA-->

				<div class="row mt-5">
					<div class="col-2 text-center text-light bg-secondary my-auto p-1 rounded"> <label for="programa">Programa academico</label></div>
					<div class="col-4">
							<input type="text" name="programa" id="programa" class="form-control" aria-describedby="emailHelp" placeholder="Escribe tu carrera" required="true" value="<?php echo($fila[3]) ?>">	
					</div>
					<div class="col-2 text-center text-light bg-secondary my-auto p-1 rounded"> <label for="semestre">Periodo de inicio</label></div>
					<div class="col-4">
							<input type="text" name="periodo" id="periodo" class="form-control"   placeholder="2018-2" required="true" value="<?php echo($fila[4]) ?>"> 					
					</div>							
				</div>
				<div class="row mt-5">
					<div class="col-4 text-center text-light bg-secondary my-auto p-1 rounded"> <label for="email">Correo electronico</label></div>
					<div class="col-8">
							<input type="email" name="email" id="email" class="form-control"  aria-describedby="emailHelp" placeholder="Escribe tu correo electronico" required="true" value="<?php echo($fila[5]) ?>">    								
					</div>
				</div>
										
									
				
				<div class="row p-3 px-5 mt-5">
					<div class="col-12">
						<button type="submit" class="btn btn-danger btn-block">Actualizar</button>
					</div>
				</div>
				
			
		</form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<?php 
			
	}	
}
?>