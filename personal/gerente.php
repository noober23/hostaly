<?php 

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!--
	<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/> -->

	<!--Custom stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/styles1.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
<!--
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.20/datatables.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
-->
	<title>Gestion de Personal</title>
</head>
<body>
	<main>
		<div class="container text-center">
			<h1 class="py-4 bg-black text-light rounded">GESTION DEL PERSONAL</h1>
			<div class="d-flex justify-content-center">
				<form action="" method="post" class="w-50">
					<div class="row">
						<div class="col-25">
							<label for="idPersonal">ID PERSONAL</label>
						</div>
						<div class="col-75">
							<input type="text" name="idPersonal" id="idPersonal" readonly="">
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label for="nombre">Nombre</label>
						</div>
						<div class="col-75">
							<input type="text" name="nombre" id="nombre" required="">
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label for="ap">Apellidos</label>
						</div>
						<div class="col-75">
							<input type="text" name="ap" id="ap">
							
						</div>
						
					</div>
					<div class="row">
						<div class="col-25">
							<label for="">Edad</label>
						</div>
						<div class="col-75">
							<input  type="text" name="edad" id="edad" required="">
						</div>
	
					</div>
					<div class="row">
						<div class="col-25">
							<label for="correo">email</label>
						</div>
						<div class="col-75">
							<input type="email" name="correo" id="correo" required="">
						</div>
						
					</div>
					<div class="row">
						<div class="col-25">
							<label for="fFin">Telefono</label>
						</div>
						<div class="col-75">
							<input type="number" name="tel" id="tel">
						</div>
					</div>
					
					<button type="submit" class="btn btn-primary mb-2">Crear</button>
					
				</form>
			</div>
		</div>
	</main>
<div>
	
	<div>
		<table>
			<tr>
				<td>ID</td>
				<td></td>
			</tr>
		</table>
	</div>
</body>
</html>