<?php 
	require("connection.php");
	session_start();

	

	if(!isset($_POST)){
		
		$usuario = mysqli_real_escape_string($connection,$_POST['user']);
		$password = mysqli_real_escape_string($connection,$_POST['pass']);
		$error = '';

		$sha1_pass = sha1($password);

		$sql= "SELECT idusuario FROM usuario WHERE usuario = '$usuario'";
		$resulta = mysqli_query($connection,$sql) or die("error conexion".mysqli_error($connection));
		$rows = mysqli_num_rows($resulta);
		if($rows>0){
			$row = mysqli_fetch_assoc($resulta);
			$_SESSION['id_usuario']= $row['id'];
			//SESION [tipo-usuario]=$row ['id_tipo']
		}else{
			$error= "El nombre o contraseña son incorrectos";
		}

	}

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
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

	<title>Login</title>
</head>
<body>
	<main>
		<div class="container text-center">
			<h1 class="py-4 bg-black text-light rounded">LOGIN</h1>
			<div class="d-flex justify-content-center">
				<form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="w-50">
					
					<div class="row">
						<div class="col-25">
							<label for="user">username:</label>
						</div>
						<div class="col-75">
							<input type="text" name="user" id="user" required="">
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label for="pass">Contraseña</label>
						</div>
						<div class="col-75">
							<input type="password" name="pass" id="pass">
						</div>
					</div>
					<input type="submit" name="login" class="btn btn-primary mb-2" value="Ingresar" >
				
					
				</form>
			</div>
		</div>
	</main>
<div>
	<div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>