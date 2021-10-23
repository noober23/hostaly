<?php
class Login extends Controllers 
{
    public function __construct()
    {
        parent::__construct();
    }


    public function login(){
       
       $data['page_tag']="Login -Hostal";
       $data['page_title']="Login";
       $data['page_name']="Login";
       $data['page_functions_js']="function_login.js";
       //$data['page_content']="Lorem Ipsum";
      $this->views->getView($this,"login",$data);
       
    }
    

}
?>