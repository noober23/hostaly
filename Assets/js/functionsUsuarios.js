var tableUsuarios;

document.addEventListener('DOMContentLoaded', function() {
    tableUsuarios = $('#tableUsuarios').dataTable( {

        "aProcessing":true,
        "aServerSide":true,
        "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },

        "ajax":{
            "url": " "+base_url+"/Bebidas/getBebidas",
            "dataSrc":""
        },

        "columns":[
            {"data":"idUser"},
            {"data":"username"},
            {"data":"password"},
            {"data":"email"},
            {"data":"nombre"},
            {"data":"direccion"}
           
        ],

        "resonsieve":"true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order":[[0,"desc"]]

});

});