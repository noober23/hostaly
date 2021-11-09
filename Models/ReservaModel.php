<?php 
	class ReservaModel extends Mysql
	{
		private $intIdReserva;
		private $dtFechaIngreso;
		private $dtFechaFin;
		private $dtFechaReserva;
		
		public function __construct()
		{
			parent::__construct();
		}
		public function selectFechasReserva(){
			$query = "SELECT fecha_ingreso, fecha_fin FROM reserva";
			$result =$this->connect($query);
			return $result;
		}
		public function setReserva(){
			$query = "INSERT INTO reserva (fecha_ingreso,fecha_fin, fecha_reserva)VALUES (?,?,?)";
			
		}
		

    }
?>