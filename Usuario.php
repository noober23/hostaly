<?php
class Usuario  {
private $nombre;
private $apellido;
private $edad ;
private $correo;
private $telefono;
private $rol;
private $conexion;

public function __construct()
{
    $this->conexion = new Conexion();
    $this->conexion = $this->conexion->connect();
}
public function insertUsuario(string $nombre,string $apellido,int $edad, int $telefono,string $correo,string $rol){
    $this->nombre =$nombre;
    $this->apellido=$apellido;
    $this->edad=$edad;
    $this->correo=$correo;
    $this->telefono=$telefono;
    $this->rol=$rol;

    $sql = "INSERT INTO usuario(nombre,apellido,edad,correo,telefono) VALUES (?,?,?,?,?)";
    $insert = $this->conexion->prepare($sql);
    $arrData =array($this->nombre,$this->apellido,$this->edad,$this->correo,$this->telefono,$this->rol);
    $resInsert=$insert->execute($arrData);
    $idInsert = $this -> conexion->lastInsertId();
    return $idInsert;
}

public function getUsuarios(){
    $sql= "SELECT * FROM usuario";
    $execute = $this->conexion->query($sql);
    $request =$execute->fetchall(PDO::FETCH_ASSOC);
    return $request;
}

public function updateUsuario(int $id,string $nombre,string $apellido,int $edad, int $telefono,string $correo,string $rol){
    $this->nombre =$nombre;
    $this->apellido=$apellido;
    $this->edad=$edad;
    $this->correo=$correo;
    $this->telefono=$telefono;
    $this->rol=$rol;

    $sql = "UPDATE usuario SET nombre = ?,apellido=?,edad=?, telefono=?,correo=?,rol=? WHERE id=$id";
    $update = $this->conexion->prepare($sql);
    $arrData = array($this->nombre,$this->apellido,$this->edad,$this->correo,$this->telefono,$this->rol);
    $res = $update->execute($arrData);
    return $res;
}

public function getUsuarioId(int $id){
    $sql="SELECT * FROM usuario WHERE id=?";
    $arrWhere =array();
    $query=$this->conexion->prepare($sql);
    $query->execute($arrWhere);
    $request =$query->fetch(PDO::FETCH_ASSOC);
    return $request;
}

function deleteUsuario(int $id){
    $sql="DELETE FROM usuario WHERE id =?";
    $arrWhere =array();
    $delete=$this->conexion->prepare($sql);
    $del=$delete->execute($arrWhere);

    return $del;
}


}