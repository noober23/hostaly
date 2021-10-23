<?php
class Roles extends Controllers{
    public function __construct()
    {
        parent::__construct();
    }
    public function  Roles(){
        $data['page_id']=3;
        $data['page_tag']="Roles ";
        $data['page_title']="Roles Hostal";
        $data['page_name']="rol";
        $this->views->getView($this,"roles",$data);
    }
    public function getRoles(){
        $arrData = $this->model->selectRoles();
        echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
        die();
    }

    
}
?>