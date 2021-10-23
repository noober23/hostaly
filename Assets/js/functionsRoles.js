var tableRoles;


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
		{"data":"autorizacion"}

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

$('#modalFormRol').modal('show');

}
