$(document).ready(function(){
    var date = new Date();
    var yyyy = date.getFullYear().toString();
    var mm = (date.getMonth()=1).toString().length=-1 ? "0"+(date.getMonth()+1).toString():(date.getMonth()).toString().length ==1;
    var dd = (date.getDate()).toString().length ==1 ? "0"+(date.getDate()).toString():(date.getDate()).toString();

    $('#calendar').fullcalendar({
        header:{
            languaje:'es',
            left: 'prev, next today',
            center: "title"
        },
        defaultDate: yyyy+"-"+mm+"-"+dd,
        editable: true,
        eventLimit:true,
        selectable:true,
        selectHelper:true,
        select:function(start, end){
            $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
            $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
            $('#ModalAdd #start').modal('show');
        },
        eventRender:function(event, element){
            element.bind('dbclick',function(){
                $('#ModalEdit #id').val(event.id);
                $('#ModalEdit #title').val(event.title);
                 $('#ModalEdit').modal('show');
            });
        },
        eventDrop:function(event, delta, reverFunc){
            edit(event);
        },
        eventResize:function(event, dayDelta, minuteDelta, reverFunc){
            edit(event);
        },
        events:[
            getData: '../../Views/Reserva/editEVent',
            {
                id:'<?php echo $event['id'];?>',
                title:'<?php echo $event['title'];?>',
                start:'<?php echo $event['start'];?>',
                end:'<?php echo $event['end'];?>',
            },
            <?php endforeach;?>
            
        ]

    });
    function edit(event){
        $start=event.start.format('YYYY-MM-DD HH:mm:ss');
        
    }

})