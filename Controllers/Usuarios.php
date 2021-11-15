<?php

class Usuarios extends Controllers
{
    public function __construct()
    {
        parent::__construct();
        /*
        
        */
        session_start();
        if(empty($_SESSION['login'])){
            header('Location:'.base_url().'/login');
            die();
        }
    }

    public function usuarios(){
        $data['page_id'] =3;
        $data['page_tag']="Usuarios ";
        $data['page_title']="Usuarios hostal";
        $data['page_name']="Usuarios";
        $data['page_functions_js'] = "functionsUsuarios.js";
        $this->views->getView($this,"usuarios",$data);
    }

    public function setUsuario(){
        $sql = "INSERT INTO user (username, password,email,nombre,direccion) VALUES(?,?,?)";
    }
    public function updateUsuario(){}
    public function blockUsuario(){
        $sql= "UPDATE user SET account_block ='1'";

    }
}

?>