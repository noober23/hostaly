var tableRoles;
let rowTable = "";
let divLoading = document.querySelector("#divLoading");
document.addEventListener('DOMContentLoaded', function() {

	tableRoles = $('#tableRoles').dataTable( {

	"aProcessing":true,
	"aServerSide":true,
	"language": {
	"url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"

	},

	"ajax":{
	"url": " "+base_url+"/Roles/getRoles",
	"dataSrc":""
	},

	"columns":[

		{"data":"idRol"},
		{"data":"rol"},
		{"data":"autorizacion"},
        {"data":"options"}
	],

	"resonsieve":"true",
	"bDestroy": true,
	"iDisplayLength": 10,
	"order":[[0,"desc"]]

	});

});

//----------------------------------------------------------------

$('#tableRoles').DataTable();
function openModal(){
	document.querySelector('#idRol').value ="";
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnText').innerHTML ="Guardar";
    document.querySelector('#titleModal').innerHTML = "Nuevo Rol";
    document.querySelector("#formRol").reset();
$('#modalFormRol').modal('show');

}

 //NUEVO ROL
 var formRol = document.querySelector("#formRol");
 formRol.onsubmit = function(e) {
	 e.preventDefault();

	 var intIdRol = document.querySelector('#idRol').value;
	 var strRol = document.querySelector('#txtRol').value;
	 var intAuto = document.querySelector('#Auto').value;        
	 if(strRol == '' || intAuto == '')
	 {
		 swal("Atención", "Todos los campos son obligatorios." , "error");
		 return false;
	 }
	 divLoading.style.display = "flex";
	 var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	 var ajaxUrl = base_url+'/Roles/setRol'; 
	 var formData = new FormData(formRol);
	 request.open("POST",ajaxUrl,true);
	 request.send(formData);
	 request.onreadystatechange = function(){
		if(request.readyState == 4 && request.status == 200){
			 
			 var objData = JSON.parse(request.responseText);
			 if(objData.status)
			 {
				 $('#modalFormRol').modal("hide");
				 formRol.reset();
				 swal("Roles de usuario", objData.msg ,"success");
				 tableRoles.api().ajax.reload();
			 }else{
				 swal("Error", objData.msg , "error");
			 }     
             
                  
		 } 
		 divLoading.style.display = "none";
		 return false;
	 }

	 
 }

function fntEditRol(){
    var btnEditRol = document.querySelectorAll(".btnEditRol");
    btnEditRol.forEach(function(btnEditRol){
        btnEditRol.addEventListener('click',function(){
            document.querySelector('#titleModal').innerHTML ="Actualizar Rol";
            document.querySelector('.modal-header').classList.replace("headerRegister", "headerUpdate");
            document.querySelector('#btnActionForm').classList.replace("btn-primary", "btn-info");
            document.querySelector('#btnText').innerHTML ="Actualizar";

            var idrol = this.getAttribute;
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl  = base_url+'/Roles/getRol/'+idrol;
            request.open("GET",ajaxUrl ,true);
            request.send();

            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200){
                    var objData = JSON.parse(request.responseText);
                    if(objData.status)
                    {
                        document.querySelector("#idRol").value = objData.data.idrol;
                        document.querySelector("#txtRol").value = objData.data.nombrerol;
                        

                        if(objData.autorizacion == 1)
                        {
                            var optionSelect = '<option value="1" selected class="notBlock">si</option>';
                        }else{
                            var optionSelect = '<option value="0" selected class="notBlock">no</option>';
                        }
                        var htmlSelect = `${optionSelect}
                                        <option value="1">si</option>
                                        <option value="0">no</option>
                                        `;
                        document.querySelector("#Auto").innerHTML = htmlSelect;
                        $('#modalFormRol').modal('show');
                    }
                    else{
                        swal("Error", objData.msg , "error");
                    }
                    
                }
            }
            
        });
    });
    

}

function fntDelRol(idrol){
    var idrol = idrol;
    swal({
        title: "Eliminar Rol",
        text: "¿Realmente quiere eliminar el Rol?",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Si, eliminar!",
        cancelButtonText: "No, cancelar!",
        closeOnConfirm: false,
        closeOnCancel: true
    }, function(isConfirm) {
        
        if (isConfirm) 
        {
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url+'/Roles/delRol/';
            var strData = "idrol="+idrol;
            request.open("POST",ajaxUrl,true);
            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            request.send(strData);
            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200){
                    var objData = JSON.parse(request.responseText);
                    if(objData.status)
                    {
                        swal("Eliminar!", objData.msg , "success");
                        tableRoles.api().ajax.reload(function(){
                            fntEditRol();
                            fntDelRol();
                            
                        });
                    }else{
                        swal("Atención!", objData.msg , "error");
                    }
                }
            }
        }

    });
}