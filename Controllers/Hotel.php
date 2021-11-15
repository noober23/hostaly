<?php
class Hotel extends Controllers 
 {
     public function __construct()
     {
         parent::__construct();
     }
     public function hotel(){
        $data['page_id'] =1;
        $data['page_tag']="Hotel";
        $data['page_title']="Datos Informativos hostal";
        $data['page_name']="hotel";
        $data['page_functions_js'] = "functionsHotel.js";
        $this->views->getView($this,"hotel",$data);
     }
     public function getHotel(){
        $btnEdit ='';
       
        $arrData = $this->model->selectHotel();

        for ($i=0; $i < count($arrData); $i++) {

            $btnEdit ='<button class="btn btn-primary btn-sm btnEditHotel" onClick="fntEditHotel('.$arrData[$i]['idHotel'].')" title="Editar"><i class="fas fa-pencil-alt"></i></button>';
            
            $arrData[$i]['options'] = '<div class="text-center">'.$btnEdit.'</div>';
        }
        echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
        die();
    }
     public function setHotel(){
         if($_POST){
            if(empty($_POST['txtNombre'])||empty($_POST['txtEstrella'])||empty($_POST['txtCategoria'])||
            empty($_POST['txtDireccion'])||empty($_POST['txtCiudad'])||empty($_POST['txtTelefono'])){
                $arrResponse =array("status" => false, "msg" => 'Datos incorrectos.');
            }else{
                $txtNombre = strval($_POST['txtNombre']);
                $txtEstrella = intval($_POST['txtEstrella']);
                $txtCategoria= strval($_POST['txtCategoria']);
                $txtDireccion= strval($_POST['txtDireccion']);
                $txtCiudad= strval($_POST['txtCiudad']);
                $intTelfono= intval($_POST['txtTelefono']); 
                $intIdHotel= intval($_POST['idHotel']); 
                $request_hotel = "";
            }
            if($intIdHotel == 0)
			{
				//Crear
				$request_hotel = $this->model->insertHotel($txtNombre,$txtEstrella,$txtCategoria,$txtDireccion,$txtCiudad,$intTelfono);
			
			}
			else{
				//Actualizar
				$request_hotel = $this->model->updateCategoria($intIdHotel,$txtNombre,$txtEstrella,$txtCategoria,$txtDireccion,$txtCiudad,$intTelfono);
					
			}
            if($request_hotel>1){
                $arrResponse = array('msg' => 'Datos guardados correctamente.');
            }else{
                $arrResponse = array('msg' => 'Datos no fueron validados.');
            }
            echo json_encode($arrResponse);
         }
         die();
     }
     
 }

 ?>
