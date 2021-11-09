<?php
class Acerca extends Controllers 
 {
     public function __construct()
     {
         parent::__construct();
     }

     public function acerca(){
        $data['page_id'] =11;
        $data['page_tag']="Acerca";
        $data['page_title']="Acerca de -Residencial Tajibos";
        $data['page_name']="acerca";
        //$data['page_content']="Lorem Ipsum";
       $this->views->getView($this,"acerca",$data);
        
     }

 }
 ?>