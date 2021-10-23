<?php require("../include/connection.php");
$consulta="SELECT * FROM avance";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Avance del Proyecto</title>
</head>
<body>
	<div>
		<form>
			<label for="avance">Avance</label>
			<input type="text" name="avance">
			<input type="submit" name="aceptar" id="aceptar" value="aceptar">
	</form>
	</div>
</body>
</html>