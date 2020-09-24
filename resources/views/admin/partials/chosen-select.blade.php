{{-- script for multiple and suggested select --}}
<script>
    $(document).ready(function () {
    $(".select2").select2({
      tags: true,
	  selectOnClose: true
      
        });
    })
</script>

<script type="text/javascript">
    $(".chosen-select").chosen();
</script>

{{-- script for success messege hide --}}
<script>
  $(document).ready(function(){
        $('.alert-success').fadeIn().delay(7000).fadeOut();
  });
</script>