<?php
class rolesModel extends Mysql{
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

        $sql= "SELECT * FROM rol WHERE rol  ='$this->txtRol' AND idRol != $this->intIdrol";
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
        $sql= "SELECT * FROM rol WHERE rol  ='$this->txtRol' AND idRol != $this->intIdrol";
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


    public function deleteRol()
    {
        $intIdrol = intval($_POST['idrol']);
        $requestDelete = $this->model->deleteRol($intIdrol);
        if($requestDelete == 'ok')
        {
            $arrResponse = array('autorizacion' => true, 'msg' => 'Se ha eliminado el Rol');
         }else if($requestDelete == 'exist'){
            $arrResponse = array('autorizacion' => false, 'msg' => 'No es posible eliminar un Rol asociado a usuarios.');
            }else{
                $arrResponse = array('autorizacion' => false, 'msg' => 'Error al eliminar el Rol.');
            }
        echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
                
            }
        die();    
    }

}