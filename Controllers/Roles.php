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
        for ($i=0; $i < count($arrData); $i++) {

            if($arrData[$i]['autorizacion'] == 1)
            {
                $arrData[$i]['autorizacion'] = '<span class="badge badge-success">si</span>';
            }else{
                $arrData[$i]['autorizacion'] = '<span class="badge badge-danger">no</span>';
            }
            $arrData[$i]['options'] = '<div class="text-center">
            <button class="btn btn-primary btn-sm btnEditRol" onClick="fntEditRol('.$arrData[$i]['idRol'].')" title="Editar"><i class="fas fa-pencil-alt"></i></button>
            <button class="btn btn-danger btn-sm btnDelRol" onClick="fntDelRol('.$arrData[$i]['idRol'].')" title="Eliminar"><i class="far fa-trash-alt"></i></button>
            </div>';
        }
        echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
        die();
    }

    public function setRol(){
        $intIdrol = intval($_POST['idRol']);
        $strRol =  strClean($_POST['txtRol']);

        $intAuto = intval($_POST['Auto']);
        $request_rol = "";
            if($intIdrol == 0)
            {
                
                    $request_rol = $this->model->insertRol($strRol,$intAuto);
                    $option = 1;
                
            }

            if($request_rol > 0 )
            {
                if($option == 1)
                {
                    $arrResponse = array('autorizacion' => true, 'msg' => 'Datos guardados correctamente.');
                }else{
                    $arrResponse = array('autorizacion' => true, 'msg' => 'Datos Actualizados correctamente.');
                }
            }else if($request_rol == 'exist'){
                
                $arrResponse = array('status' => false, 'msg' => '¡Atención! El Rol ya existe.');
            }else{
                $arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
            }
        echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
        die();
    }

    
}
?>