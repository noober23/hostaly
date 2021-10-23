var tableServicios;


document.addEventListener('DOMContentLoaded', function() {

    tableRoles = $('#tableRoles').dataTable( {

        "aProcessing":true,
        "aServerSide":true,
        "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },

        "ajax":{
            "url": " "+base_url+"/Servicios/getServicios",
            "dataSrc":""
        },

        "columns":[

            {"data":"idServicio"},
            {"data":"nombre"},
            {"data":"version"}

        ],

        "resonsieve":"true",

        "bDestroy": true,

        "iDisplayLength": 10,

        "order":[[0,"desc"]]

});

});