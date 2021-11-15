<?php
class UsuariosModel extends Mysql{
    public function  __construct()
    {
        parent::__construct();
    }
    public  function selectUser(){
        $sql ="SELECT * FROM user";
        $consult =$this->select_all($sql);
        return $consult;
    }
    public  function getUser(){
        $arrData=$this->model->selectUser();
        dep($arrData);
    }
}
?>