<?php 
require_once("Libraries/Core/Mysql.php");
trait TTipoHab{
	private $con;

	public function getTiposHab(){
		$this->con = new Mysql();
		$sql = "SELECT * FROM tipo_habitacion";
		$request = $this->con->select_all($sql);
		return $request;
	}
}

 ?>