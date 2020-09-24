@extends('admin.layouts.master')

@section('content')
@php
    use App\StudyDestination;
@endphp
<div class="table-responsive">
    <table id="categoryTable" class="table table-bordered table-striped datatable"  name="categoryTable">
        <thead>
            <tr>
                <th width="5%">SL</th>
                <th>Name</th>
                <th width="40%">Destination</th>
                <th width="5%">Order</th>
                <th width="5%">Status</th>
                <th width="5%">Action</th>
            </tr>
        </thead>
        <tbody id="tbody">
            <?php $i = 0; ?>
        	@foreach($categories as $category)
            @php
                $i++;
               $dstination = StudyDestination::where('id',@$category->destinationId)->first();
            @endphp
                                  	
        	<tr class="row_{{$category->id}}">
                <td>{{ $i }}</td>
                 <td>{{ $category->name }}</td>
                 <td>{{ @$dstination->name }}</td>
                 <td class="text-center">{{ $category->orderBy }}</td>
                 <td>
                    <?php echo \App\Link::status($category->id,$category->status)?>
                </td>
                <td class="text-nowrap">
                <?php echo \App\Link::action($category->id)?>
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
            $('#categoryTable tbody').on( 'click', 'i.fa-trash', function () {
                $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                });

                categoryId = $(this).parent().data('id');
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
                           url : "{{ route('category.delete',0) }}",
                            data : {categoryId:categoryId},
                            success: function(response) {
                                swal({
                                    title: "<small class='text-success'>Success!</small>", 
                                    type: "success",
                                    text: "Category Category Successfully!",
                                    timer: 1000,
                                    html: true,
                                });
                                $('.row_'+categoryId).remove();
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
                            text: "Your category is safe :)",
                            timer: 1000,
                            html: true,
                        });    
                    } 
                });
            }); 

        });
                
        //ajax status change code
        function statusChange(categoryId) {
            $.ajax({
                    type: "GET",
                    url: "{{ route('category.status', 0) }}",
                    data: "categoryId=" + categoryId,
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        swal({
                            title: "<small class='text-success'>Success!</small>", 
                            type: "success",
                            text: "Status successfully updated!",
                            timer: 1000,
                            html: true,
                        });
                    },
                    error: function(response) {
                        error = "Failed.";
                        swal({
                            title: "<small class='text-danger'>Error!</small>", 
                            type: "error",
                            text: error,
                            timer: 2000,
                            html: true,
                        });
                    }
                });
            }
    </script>

@endsection


