<?php
    class Habitaciones extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }

        public function habitaciones(){
            $data['page_id'] =4;
            $data['page_tag']="Habitaciones ";
            $data['page_title']="Habitaciones planeaci";
            $data['page_name']="habitaciones";
            $this->views->getView($this,"habitaciones",$data);
        }    
    }
?>