<?php 
	class ReservaModel extends Mysql
	{	
		public function __construct()
		{
			parent::__construct();
		}
		public function selectReserva(){
			$sql = "SELECT * FROM reserva";
			$res = $this->select_all($sql);
			return $res;
		}
		public function selectFechasReserva(){
			$query = "SELECT fecha_ingreso, fecha_fin FROM reserva";
			$result =$this->select($query);
			return $result;
		}
		public function insertReserva(String $fechaIni,String $fechaFin,String $fechaRes){
			
			$this->fecha_ingreso =$fechaIni;
			$this->fecha_fin =$fechaFin;
			$this->fecha_reserva =$fechaRes;
			$query = "INSERT INTO reserva (fecha_ingreso,fecha_fin, fecha_reserva)VALUES (?,?,?)";
			$data =array($this->fecha_ingreso,$this->fecha_fin,$this->fecha_reserva);
			$this->insert($query,$data);
			return true;
		}
		public function editReserva($id){
			$sql = "SELECT * FROM reserva WHERE idReserva = $id";
			$res = $this->select($sql);
			return $res;
		}
		public function actualizarReserva(int $idRes,String $fechaIni,String $fechaFin,String $fechaRes){
			$this->fecha_ingreso =$fechaIni;
			$this->fecha_fin =$fechaFin;
			$this->fecha_reserva =$fechaRes;
			$this->idReserva=$idRes;
			$query = "UPDATE reserva SET fecha_ingreso = ?,fecha_fin = ?, fecha_reserva = ? WHERE idReserva =?";
			$data =array($this->fecha_ingreso,$this->fecha_fin,$this->fecha_reserva,$this->id);
			$this->update($query,$data);
			return true;
		}
		public function deleteReserva(int $idRes){
			$this->idReserva=$idRes;
			$query = "DELETE FROM reserva  WHERE idReserva =?";
			$data =array($this->id);
			$this->delete($query,$data);
			return true;
		}
		

    }
?>