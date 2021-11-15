var tableTipoHab;

document.addEventListener('DOMContentLoaded', function() {
    tableTipoHab = $('#tableTipoHab').dataTable( {

        "aProcessing":true,
        "aServerSide":true,
        "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },

        "ajax":{
            "url": " "+base_url+"/TipoHab/getTipoHab",
            "dataSrc":""
        },

        "columns":[
            {"data":"idtipo_habitacion"},
            {"data":"nombre"},
            {"data":"precio"},
            {"data":"descripcion"}
        ],

        "resonsieve":"true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order":[[0,"desc"]]

});

});