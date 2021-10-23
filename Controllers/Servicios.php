<?php
class Servicios extends Controllers{
    public function __construct()
    {
        parent::__construct();
    }

    public function servicios(){
        $data['page_id'] =5;
        $data['page_tag']="Servicios ";
        $data['page_title']="Servicios hostal";
        $data['page_name']="servicios";
        $this->views->getView($this,"servicios",$data);
    }    
}
?>