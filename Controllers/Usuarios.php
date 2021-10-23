<?php

class Usuarios extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function usuarios(){
        $data['page_id'] =3;
        $data['page_tag']="Usuarios ";
        $data['page_title']="Usuarios planeaci";
        $data['page_name']="Usuarios";
        $this->views->getView($this,"usuarios",$data);
    }
}

?>