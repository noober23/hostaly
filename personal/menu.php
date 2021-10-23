<?php
if(isset($_GET['open'])) {
	switch ($_GET['open']){
		default			: if(!file_exists ("login.php")) die ("Informacion de archivo no existe");
								include "login.php"; break;

		case '' 		: if(!file_exists ("login.php")) die ("Informacion de archivo no existe");
								include "login.php"; break;

		case 'personal' :if(!file_exists("personal.php")) die ("No existe archivo Personal");
							include "personal.php"; break;
		case 'trabajo'	:if(!file("trabajoC.php"))die("No existe archivo Trabajo");
								include "trabajoC.php"; break;
	}
}