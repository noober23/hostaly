<?php
class Residencial extends Controllers 
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
     public function habitacion(){
        $data['page_id'] =12;
        $data['page_tag']="Habitacion";
        $data['page_title']="Habitacion -Residencial Tajibos";
        $data['page_name']="habitacion";
        //$data['page_content']="Lorem Ipsum";
       $this->views->getView($this,"habitacion",$data);  
     }
     public function servicio(){
      $data['page_id'] =11;
      $data['page_tag']="Servicio";
      $data['page_title']="Servicio de -Residencial Tajibos";
      $data['page_name']="servicio";
      //$data['page_content']="Lorem Ipsum";
     $this->views->getView($this,"servicio",$data);
    }
    public function registro(){
      $data['page_id'] =11;
      $data['page_tag']="Registro";
      $data['page_title']="Registro de -Residencial Tajibos";
      $data['page_name']="registro";
      //$data['page_content']="Lorem Ipsum";
     $this->views->getView($this,"registro",$data);
      
   }
 }
 ?>