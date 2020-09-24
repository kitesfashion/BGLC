@extends('admin.layouts.master')

@section('content')
<?php
    use App\Category;
?>
<a href="{{ route('headerArticle.block',['section'=>'services','title'=>"Header Block of Services"]) }}" class="btn btn-danger">Header Info</a>
<div class="table-responsive">
    <table id="productList" class="table table-bordered table-striped datatable" name="productList">
        <thead>
            <tr>
                <th width="5%">SL</th>
                <th>Name</th>
                <th width="12%">First Image</th>
                <th width="14%">Second Image</th>
                <th width="5%">Order</th>
                <th width="5%">Status</th>
                <th width="5%">Action</th>
            </tr>
        </thead>
        <tbody id="tbody">
            <?php $i = 0; ?>
        	@foreach($serviceList as $service)
            <?php $i++;?>                        	
        	<tr class="row_{{$service->id}}">
                <td>{{ $i }}</td>
                 <td>{{$service->name}}</td>
                 <td>
                     <?php if (file_exists(@$service->firstHomeImage)) { ?> 
                        <img src="{{asset('/').@$service->firstHomeImage}}" style="height: 40px;">
                    <?php }else{ ?>
                        <img src="{{asset('/public/frontend/noImage.jpg')}}" style="height: 40px;">
                    <?php } ?>
                 </td>
                 <td>
                     <?php if (file_exists(@$service->firstInnerImage)) { ?> 
                        <img src="{{asset('/').@$service->firstInnerImage}}" style="height: 40px;">
                    <?php }else{ ?>
                        <img src="{{asset('/public/frontend/noImage.jpg')}}" style="height: 40px;">
                    <?php } ?>
                 </td>
                 <td class="text-center">{{$service->orderBy}}</td>
                 <td>
                    <?php echo \App\Link::status($service->id,$service->status)?>
                </td>
                <td class="text-nowrap">
                <?php echo \App\Link::action($service->id)?>
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
        $('#productList tbody').on( 'click', 'i.fa-trash', function () {
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            serviceId = $(this).parent().data('id');
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
                        url : "{{ route('services.delete',0) }}",
                        data : {serviceId:serviceId},
                        success: function(response) {
                            swal({
                                title: "<small class='text-success'>Success!</small>", 
                                type: "success",
                                text: "Service Deleted Successfully!",
                                timer: 1000,
                                html: true,
                            });
                            $('.row_'+serviceId).remove();
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
                        text: "Your service is safe :)",
                        timer: 1000,
                        html: true,
                    });    
                } 
            });
        }); 

    });
            
    //ajax status change code
    function statusChange(serviceId) {
        $.ajax({
                type: "GET",
                url: "{{ route('services.status', 0) }}",
                data: "serviceId=" + serviceId,
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


