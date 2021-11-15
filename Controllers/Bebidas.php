<?php
class Bebidas extends Controllers
{
    public function __construct()
    {
        parent::__construct();
        /*
        
        session_start();
        if(empty($_SESSION['login'])){
            header('Location:'.base_url().'/login');
            die();
        }*/
    }

    public function bebidas(){
        $data['page_id'] =11;
        $data['page_tag']="Bebidas ";
        $data['page_title']="Bebidas hostal";
        $data['page_name']="Bebidas";
        $this->views->getView($this,"bebidas",$data);
    }

    public function setBebidas(){
      
    }
    public function updateBebidas(){}
    
}

?>