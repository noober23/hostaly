<?php 
	class ServicioModel extends Mysql
	{
		private $intIdServicio;
		private $intIdHabita;
        private $strNombre;
        
		protected $intPrecio;
		protected $strTipoServi;

		public function __construct()
		{
			parent::__construct();
		}

		public function selectServicios(){
			$sql = "SELECT s.idServicio,
							s.nombre,
							s.nombre as tipoServicio,
							
					FROM servicio s
					INNER JOIN tipo_servicio ts
					ON s.idServicio = ts.idServicio
					WHERE s.nombre = ts.nombre ";
					$request = $this->select_all($sql);
			return $request;
		}	
        
		public function insertTipoServicio(string $nombre, string $tipoServicio,int $precio){
			$this->strNombre = $nombre;
			$this->intPrecio= $precio;
			$this->strTipoServi= $tipoServicio;
			$return = 0;
			
				$query_insert  = "INSERT INTO tipoServicio(nombre,
														tipo_servicio,
														precio
													) 
								  VALUES(?,?,?)";
	        	$arrData = array($this->intCategoriaId,
        						$this->intCodigo,
        						$this->strNombre,
        						$this->strDescripcion
        						);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			
	        return $return;
		}
		public function setServicio(string $nombre, string $tipoServicio,int $precio){
			$this->strNombre = $nombre;
			$this->intPrecio= $precio;
			$this->strTipoServi= $tipoServicio;
			$return = 0;
			
				$query_insert  = "INSERT INTO tipoServicio(nombre,
														tipo_servicio,
														precio
													) 
								  VALUES(?,?,?)";
	        	$arrData = array($this->intCategoriaId,
        						$this->intCodigo,
        						$this->strNombre,
        						$this->strDescripcion
        						);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			
	        return $return;
		}
		public function updateServicio(int $idServicio, string $nombre){
			$this->intIdServicio = $idServicio;
			$this->strNombre = $nombre;
			
			$return = 0;
			$sql = "SELECT * FROM servicio WHERE codigo = '{$this->intCodigo}' AND idproducto != $this->intIdProducto ";
			$request = $this->select_all($sql);
			if(empty($request))
			{
				$sql = "UPDATE producto 
						SET categoriaid=?,
							codigo=?,
							nombre=?,
							descripcion=?,
							precio=?,
							stock=?,
							ruta=?,
							status=? 
						WHERE idproducto = $this->intIdProducto ";
				$arrData = array($this->intCategoriaId,
        						$this->intCodigo,
        						$this->strNombre,
        						$this->strDescripcion,
        						$this->strPrecio,
        						$this->intStock,
        						$this->strRuta,
        						$this->intStatus);

	        	$request = $this->update($sql,$arrData);
	        	$return = $request;
			}else{
				$return = "exist";
			}
	        return $return;
		}

		public function deleteServicio(int $idservicio){
			$this->intIdServicio = $idservicio;
			$sql = "UPDATE producto SET status = ? WHERE idServicio = $this->intIdServicio ";
			$arrData = array(0);
			$request = $this->update($sql,$arrData);
			return $request;
		}

}
?>