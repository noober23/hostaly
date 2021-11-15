<?php
class RolesModel extends Mysql{
    public $intIdrol;
    public $txtRol;
    public $auto;
    public function  __construct()
    {
        parent::__construct();
    }
    public  function selectRoles(){
        $sql ="SELECT * FROM rol ";
        $consult =$this->select_all($sql);
        return $consult;
    }

    public  function selectRol(int $idrol){
        //BUSCAR ROLE
		$this->intIdrol = $idrol;
		$sql = "SELECT * FROM rol WHERE idRol = $this->intIdrol";
		$request = $this->select($sql);
		return $request;
    }
    public function insertRol(string $rol, int $autorizacion){
        $return ="";
        $this->txtRol = $rol;
        $this->auto = $autorizacion;

        $sql= "SELECT * FROM rol WHERE rol  = $this->txtRol AND idRol != $this->intIdrol";
        $request =$this->select_all($sql);

        if(empty($request)){
            $query_insert = "INSERT INTO rol(rol,autorizacion) VALUES (?,?)";
            $arrData = array($this->txtRol,$this->auto);
            $request_insert = $this->insert($query_insert,$arrData);
            $return = $request_insert;
        }else{
            $return = "false";
        }
        return $return;
    }

    public function updateRol(int $idrol, string $rol, int $autorizacion){
        $this->idRol = $idrol;
        $this->txtRol = $rol;
        $this->auto = $autorizacion;
        $sql= "SELECT * FROM rol WHERE rol  =$this->txtRol AND idRol != $this->intIdrol";
        $request =$this->select_all($sql);

        if(empty($request)){
            $sql = "UPDATE rol SET rol = ?, autorizacion = ? WHERE idRol = $this->intIdrol";
            $arrData = array($this->txtRol,$this->auto);
            $request = $this ->update($sql,$arrData);
        }else{
            $request = false;
        }
        return $request;
    }    


    public function deleteRol(int $idrol)
    {
        $this->intIdrol = $idrol;
			$sql = "DELETE FROM rol WHERE idRol = $this->intIdrol";
			$request = $this->delete($sql);
			
			return $request;
    }
    

}
?>