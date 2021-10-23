<?php
class rolesModel extends Mysql{
    public function  __construct()
    {
        parent::__construct();
    }
    public  function selectRoles(){
        $sql ="SELECT * FROM rol WHERE autorizacion !=0";
        $consult =$this->select_all($sql);
        return $consult;
    }
    public function insertRol(string $rol, int $autorizacion){
        $return ="";
        $this->txtRol = $rol;
        $this->auto = $autorizacion;

        $sql= "SELECT * FROM rol WHERE rol  ='$this->txtRol' AND idRol != $this->idRol";
        $request =$this->select_all($sql);

        if(empty($request)){
            $query_insert = "INSERT INTO rol(rol,autorizacion) VALUES (?,?)";
            $arrData = array($this->txtRol,$this->auto);
            $request_insert = $this->insert($query_insert,$arrData);
            $return = $request_insert;
        }else{
            $return = false;
        }
        return $return;
    }

    public function updateRol(int $idrol, string $rol, int $autorizacion){
        $this->idRol = $idrol;
        $this->txtRol = $rol;
        $this->auto = $autorizacion;
        $sql= "SELECT * FROM rol WHERE rol  ='$this->txtRol' AND idRol != $this->idRol";
        $request =$this->select_all($sql);

        if(empty($request)){
            $sql = "UPDATE rol SET rol = ?, autorizacion = ? WHERE idRol = $this->intRol";
            $arrData = array($this->txtRol,$this->auto);
            $request = $this ->update($sql,$arrData);
        }else{
            $request = false;
        }
        return $request;
    }    
    public function deleteRol(){
        
    }

}