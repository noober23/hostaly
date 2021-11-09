<?php
class BebidasModel extends Mysql{
    public $idBebida;
    public $bebida;
    public $precio;
    public function __construct()
    {
        parent::__construct();
    }
    public function insertBebidas(string $tbebida,int $precio){
        $this->bebida = $tbebida;
        $this->precio =$precio;
        $query = "INSERT INTO bebidas (bebida, precio) VALUES (?,?)";
        $arrData = array($this->bebida,
        					$this->precio);
        $result =$this->insert($query, $arrData);
        return $result;
    }
    public function updateBebidas(int $idbebidas,string $tbebida,int $precio){
        $this->bebida = $tbebida;
        $this->precio =$precio;

        $query_res = "UPDATE SET bebidas (bebida, precio) VALUES (?,?)";
        $result =" ";
        return $result;
    }
    public function deleteBebidas(){
        //this->idBebida = idbebidas;
        $query = "DELETE FROM bebidas WHERE idBebida = ?";
        $result = $this->delete($query);
        return $result;
    }
}
?>