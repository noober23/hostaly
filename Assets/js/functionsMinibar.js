var tableMinibar;

document.addEventListener('DOMContentLoaded', function() {
    tableMinibar = $('#tableMinibar').dataTable( {

        "aProcessing":true,
        "aServerSide":true,
        "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },

        "ajax":{
            "url": " "+base_url+"/Minibar/getMinibar",
            "dataSrc":""
        },

        "columns":[
            {"data":"idMinibar"},
            {"data":"idBebida"},
            {"data":"cantidadInicio"},
            {"data":"cantidadConsumido"}
        ],

        "resonsieve":"true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order":[[0,"desc"]]

});

});