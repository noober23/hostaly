var tableHotel;

document.addEventListener('DOMContentLoaded', function() {
    tableHotel = $('#tableHotel').dataTable( {

        "aProcessing":true,
        "aServerSide":true,
        "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },

        "ajax":{
            "url": " "+base_url+"/Hotel/getHotel",
            "dataSrc":""
        },

        "columns":[
            {"data":"idHotel"},
            {"data":"nombre"},
            {"data":"estrellas"},
            {"data":"categoria"},
            {"data":"direccion"},
            {"data":"ciudad"},
            {"data":"telefono"},
            {"data":"options"}
        ],

        "resonsieve":"true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order":[[0,"desc"]]

});

});
$('#tableHotel').DataTable();
function openModal(){
	document.querySelector('#idHotel').value ="";
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnText').innerHTML ="Guardar";
    document.querySelector('#titleModal').innerHTML = "Registro Hotel";
    document.querySelector("#formHotel").reset();
$('#modalFormHotel').modal('show');

}

 var formHotel = document.querySelector("#formHotel");
 formHotel.onsubmit = function(e) {
	 e.preventDefault();

	var intIdHotel = document.querySelector('#idHotel').value;
	var txtNombre = document.querySelector('#txtNombre').value;                
    var txtEstrella =document.querySelector('#txtEstrella').value;
    var txtCategoria=document.querySelector('#txtCategoria').value;
    var txtDireccion=document.querySelector('#txtDireccion').value;
    var txtCiudad= document.querySelector('#txtCiudad').value;                
    var intTelfono= document.querySelector('#txtTelefono').value;
    
	 if(txtNombre== '' ||txtEstrella== '' ||txtCategoria== '' ||txtDireccion== '' ||txtCiudad== '' ||intTelfono  == '')
	 {
		 swal("Atención", "Todos los campos son obligatorios." , "error");
		 return false;
	 }
	 
	 var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	 var ajaxUrl = base_url+'/Hotel/setHotel'; 
	 var formData = new FormData(formHotel);
	 request.open("POST",ajaxUrl,true);
	 request.send(formData);
	 request.onreadystatechange = function(){
		if(request.readyState == 4 && request.status == 200){
			 
			 var objData = JSON.parse(request.responseText);
			 if(objData.status)
			 {
				 $('#modalFormHotel').modal("hide");
				 formHotel.reset();
				 swal("Datos de hotel registrados", objData.msg ,"success");
				 tableHotel.api().ajax.reload();
			 }else{
				 swal("Error", objData.msg , "error");
			 }     
             
                  
		 } 
		 
		 return false;
	 }

	 
 }

function fntEditHotel(){
    var btnEditHotel = document.querySelectorAll(".btnEditHotel");
    btnEditHotel.forEach(function(btnEditHotel){
        btnEditRol.addEventListener('click',function(){
            document.querySelector('#titleModal').innerHTML ="Actualizar Datos Hotel";
            document.querySelector('.modal-header').classList.replace("headerRegister", "headerUpdate");
            document.querySelector('#btnActionForm').classList.replace("btn-primary", "btn-info");
            document.querySelector('#btnText').innerHTML ="Actualizar";

            var idhotel = this.getAttribute;
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl  = base_url+'/Hotel/getHotel/'+idhotel;
            request.open("GET",ajaxUrl ,true);
            request.send();

            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200){
                    var objData = JSON.parse(request.responseText);
                    if(objData.status)
                    {
                        document.querySelector("#idHotel").value = objData.data.hotel;
                        document.querySelector("#txtRol").value = objData.data.nombre;
                       
                        $('#modalFormHotel').modal('show');
                    }
                    else{
                        swal("Error", objData.msg , "error");
                    }
                    
                }
            }
            
        });
    });
    

}