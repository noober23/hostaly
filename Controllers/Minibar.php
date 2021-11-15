<?php
    class Minibar extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }

        public function minibar(){
            $data['page_id'] =13;
            $data['page_tag']="Minibar ";
            $data['page_title']="Minibar hostal";
            $data['page_name']="minibar";
            $data['page_functions_js'] = "functionsMinibar.js";
            $this->views->getView($this,"minibar",$data);
        }    
        public function getMinibar(){
            
        }
        public function setMnibar(){}
        public function updateMinibar(){}
        public function delMinibar(){}
    }
?>