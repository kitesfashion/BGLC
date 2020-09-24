@extends('admin.layouts.master')

@section('content')
<div class="table-responsive">
    <table id="professionTabel" class="table table-bordered table-striped datatable"  name="professionTabel">
        <thead>
            <tr>
                <th width="5%">SL</th>
                <th>Name</th>
                <th>Bangla Name</th>
                <th width="5%">Action</th>
            </tr>
        </thead>
        <tbody id="tbody">
            <?php $i = 0; ?>
        	@foreach($districts as $district)
            <?php $i++; ?>                        	
        	<tr class="row_{{$district->id}}">
                <td>{{ $i }}</td>
                 <td>{{ $district->name }}</td>
                 <td>{{ $district->bn_name }}</td>
                <td class="text-nowrap">
                <?php echo \App\Link::action($district->id)?>
                </td>
            </tr>
        	@endforeach
        </tbody>
    </table>
</div>     
@endsection

@section('custom-js')

    <script>
        $(document).ready(function() {
            var updateThis ;

            //ajax delete code
            $('#professionTabel tbody').on( 'click', 'i.fa-trash', function () {
                $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                });

                districtId = $(this).parent().data('id');
                var tableRow = this;
                swal({   
                    title: "Are you sure?",   
                    text: "You will not be able to recover this imaginary file!",   
                    type: "warning",   
                    showCancelButton: true,   
                    confirmButtonColor: "#DD6B55",   
                    confirmButtonText: "Yes, delete it!",   
                    cancelButtonText: "No, cancel plx!",   
                    closeOnConfirm: false,   
                    closeOnCancel: false 
                }, function(isConfirm){   
                    if (isConfirm) {     
                       $.ajax({
                            type: "POST",
                           url : "{{ route('district.delete',0) }}",
                            data : {districtId:districtId},
                            success: function(response) {
                                swal({
                                    title: "<small class='text-success'>Success!</small>", 
                                    type: "success",
                                    text: "District Deleted Successfully!",
                                    timer: 1000,
                                    html: true,
                                });
                                $('.row_'+districtId).remove();
                            },
                            error: function(response) {
                                error = "Failed.";
                                swal({
                                    title: "<small class='text-danger'>Error!</small>", 
                                    type: "error",
                                    text: error,
                                    timer: 1000,
                                    html: true,
                                });
                            }
                        });    
                    } else { 
                        swal({
                            title: "Cancelled", 
                            type: "error",
                            text: "Your data is safe :)",
                            timer: 1000,
                            html: true,
                        });    
                    } 
                });
            }); 

        });
                
    </script>

@endsection


