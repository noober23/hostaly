<?php
class HotelModel extends Mysql{
    public $intIdHotel;
    public $txtNombre;
    public $txtEstrella;
    public $txtCategoria;
    public $txtDireccion;
    public $txtCiudad;
    public $intTelfono;
    public function  __construct()
    {
        parent::__construct();
    }
    public function selectHotel(){
        $sql = "SELECT * FROM hotel WHERE idHotel = $this->intIdHotel";
        $request =$this->select($sql);
        return $request;
    }
    public function insertHotel(String $nombre,int $estrella, String $categoria, String $direccion,String $ciudad,int $telefono){
        $return ="";
        $this->txtNombre= $nombre;
        $this->txtEstrella = $estrella;
        $this->txtCategoria= $categoria;
        $this->txtDireccion= $direccion;
        $this->txtCiudad= $ciudad;
        $this->intTelfono= $telefono;
        $sql = "SELECT * FROM hotel WHERE idHotel = $this->intIdHotel";
        $request =$this->select($sql);
        if(empty($request)){
            $query_insert = "INSERT INTO hotel(nombre,estrellas,categoria,direccion,ciudad,telefono) VALUES (?,?,?,?,?,?)";
            $arrData = array($this->txtNombre,$this->txtEstrella,$this->txtCategoria,$this->txtDireccion,$this->txtCiudad,$this->intTelfono);
            $request_insert = $this->insert($query_insert,$arrData);
            $return = $request_insert;
        }else{
            $return = "false";
        }
        return $return;
    }

    public function updateHotel(int $id,String $nombre,int $estrella, String $categoria, String $direccion,String $ciudad,int $telefono){
        $return ="";
        $this->txtNombre= $nombre;
        $this->txtEstrella = $estrella;
        $this->txtCategoria= $categoria;
        $this->txtDireccion= $direccion;
        $this->txtCiudad= $ciudad;
        $this->intTelfono= $telefono;
        $this->intIdHotel= $id;
        $sql = "SELECT * FROM hotel WHERE idHotel = $this->intIdHotel";
        $request = $this->select_all($sql);
        if(empty($request)){
            $query_insert = "UPDATE hotel SET nombre=?,
                                             estrellas=?,
                                             categoria=?,
                                             direccion=?,
                                             ciudad =?,
                                             telefono=?
                                             WHERE idHotel =$this->intIdHotel)";
            $arrData = array($this->txtNombre,$this->txtEstrella,$this->txtCategoria,$this->txtDireccion,$this->txtCiudad,$this->intTelfono);
            $request = $this->update($query_insert,$arrData);
            $return = $request;
        }else{
            $return = "false";
        }
        return $return;
    }
    
}
?>