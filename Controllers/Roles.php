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
        $data['page_functions_js'] = "functionsRoles.js";
        $this->views->getView($this,"roles",$data);
    }
    public function getRoles(){
        $btnEdit ='';
        $btnDelete='';
        $arrData = $this->model->selectRoles();

        for ($i=0; $i < count($arrData); $i++) {

            if($arrData[$i]['autorizacion'] == 1)
            {
                $arrData[$i]['autorizacion'] = '<span class="badge badge-success">si</span>';
            }else{
                $arrData[$i]['autorizacion'] = '<span class="badge badge-danger">no</span>';
            }
            
            $btnEdit ='<button class="btn btn-primary btn-sm btnEditRol" onClick="fntEditRol('.$arrData[$i]['idRol'].')" title="Editar"><i class="fas fa-pencil-alt"></i></button>';
            $btnDelete='<button class="btn btn-danger btn-sm btnDelRol" onClick="fntDelRol('.$arrData[$i]['idRol'].')" title="Eliminar"><i class="far fa-trash-alt"></i></button>';
            $arrData[$i]['options'] = '<div class="text-center">'.$btnEdit.''.$btnDelete.'</div>';
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
                //crear status autorizacion
                    $request_rol = $this->model->insertRol($intIdrol,$strRol,$intAuto);
                    $option = 1;
            }
            else{
                $request_rol = $this->model->updateRol($intIdrol,$strRol,$intAuto);
                    $option = 0;
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
    public function getRol(int $idrol){
        $intIdrol = intval(strClean($idrol));
            if($intIdrol > 0)
            {
                $arrData = $this->model->selectRol($intIdrol);
                    if(empty($arrData))
                    {
                        $arrResponse = array('autorizacion' => true, 'msg' => 'Datos guardados correctamente.');
                    }else{
                        $arrResponse = array('autorizacion' => true, 'msg' => 'Datos Actualizados correctamente.');
                    }
            }

        
        echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
        die();
    }
    public function delRol(){
        $intIdrol = intval($_POST['idrol']);
		$requestDelete = $this->model->deleteRol($intIdrol);
		if($requestDelete == 'ok')
			{
				$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el Rol');
			}
            else if($requestDelete == 'exist'){
						$arrResponse = array('status' => false, 'msg' => 'No es posible eliminar un Rol asociado a usuarios.');
					}
            else{
				$arrResponse = array('status' => false, 'msg' => 'Error al eliminar el Rol.');
			}
		echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
            die();
    }
    
}
?>