var tableHabitaciones;


document.addEventListener('DOMContentLoaded', function() {

    tableHabitaciones = $('#tableHabitaciones').dataTable( {

        "aProcessing":true,
        "aServerSide":true,
        "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },

        "ajax":{
            "url": " "+base_url+"/Habitaciones/getHabitaciones",
            "dataSrc":""
        },

        "columns":[

            {"data":"idHabitacion"},
            {"data":"idtipoHab"},
            {"data":"idHotel"}

        ],

        "resonsieve":"true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order":[[0,"desc"]]

});

});