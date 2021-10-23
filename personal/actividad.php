<?php 
	require("../connection");

	$tareas = "SELECT idpersonal FROM personal INNER JOIN actividad.idpersonal = idpersonal.personal ";
	$query = myqsli_query($connection,$tareas);

?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<title>Actividades por personal</title>
</head>
<body>
	<div>
		<h3>Actividades Listados</h3>
		<label for="actividad">Actividad</label>
		<input type="texto" name="actividad" id="actividad">
		<label></label>

	</div>
	<div class="table-responsive">
		<table class="table table-striped table-responsive">
			<thead>
				<tr>
					<th>idPersonal</th>
					<th>id Actividad</th>
					<th>Actividad</th>
					<th>Rol</th>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
	</div>
</body>
</html>