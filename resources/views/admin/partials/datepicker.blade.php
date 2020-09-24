{{-- script for date picker --}}
<script>
    $( function() {
        $( ".add_datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd-mm-yy',
        }).datepicker('setDate', 'today');

        $( ".datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd-mm-yy',
            yearRange: '1970:'+(new Date).getFullYear(),
        });
    } );
</script>