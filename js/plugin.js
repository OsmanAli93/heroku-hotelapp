$(function () {
    
   const date = new Date();
   const today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

    $('.datepicker').datepicker({
        format: 'yyyy-mm-d',
        autoclose: true,
        startDate: date

    });


    $('#arrival').datepicker({

        format: 'yyyy-mm-d',
        autoclose: true,
        
        
    }).on('changeDate', function(){
        
        var temp = $(this).datepicker('getDate');
        var d = new Date(temp);
        d.setDate(d.getDate() + 1);

        $('#departure').datepicker('setDate', d);

    })

    $('#departure').on('change', function(){

        let date1 = $('#arrival').datepicker('getDate');
        let date2 = $('#departure').datepicker('getDate');
        let diff = 0;

        if (date1 && date2) {

            diff = Math.floor((date2.getTime() - date1.getTime()) / 86400000);
        }

        console.log(diff);
        $('#total_night').val(diff);
        
    })

    
});