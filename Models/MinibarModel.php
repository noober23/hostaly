<?php
class MinibarModel extends Mysql{
    public $intIdMinibar;
    public $intCantIni;
    public $intCantCon;
    public $intBebida;
    public function  __construct()
    {
        parent::__construct();
    }
    public  function selectMinibar(){
        $sql ="SELECT * FROM rol ";
        $consult =$this->select_all($sql);
        return $consult;
    }

    public  function selectBebida(int $idbebidas){
        
		$this->intBebida = $idbebidas;
		$sql = "SELECT * FROM rol WHERE idRol = $this->intIdrol";
		$request = $this->select($sql);
		return $request;
    }
    public function insertMinibar(int $idBebidas,int $cantIni, int $cantCon){
        $return ="";
        $this->intCantIni= $cantIni;
        $this->intCantCon = $cantCon;
        $this->intBebidas =$idBebidas;
        if(empty($request)){
            $query_insert = "INSERT INTO minibar(cantidadInicio,cantidadConsumido) VALUES (?,?)";
            $arrData = array($this->intCantIni,$this->intCantCon);
            $request_insert = $this->insert($query_insert,$arrData);
            $return = $request_insert;
        }else{
            $return = "false";
        }
        return $return;
    }

    public function updateMinibar(int $idBebidas,int $cantIni, int $cantCon){
        $return ="";
        $this->intCantIni= $cantIni;
        $this->intCantCon = $cantCon;
        $this->intBebidas =$idBebidas;
        if(empty($request)){
            $query_insert = "INSERT INTO minibar(cantidadInicio,cantidadConsumido) VALUES (?,?)";
            $arrData = array($this->intCantIni,$this->intCantCon);
            $request_insert = $this->insert($query_insert,$arrData);
            $return = $request_insert;
        }else{
            $return = "false";
        }
        return $return;
    }
    public function deleteMinibar(int $idMinibar)
    {
        $this->intIdMinibar = $idMinibar;
		$sql = "UPDATE minibar SET cantidadInicio = ?, cantidadConsumido = ? WHERE idMinibar = $this->intIdMinibar";
        $arrData = array(0);
        $request = $this->update($sql,$arrData);
		return $request;
    }
    

}
?>