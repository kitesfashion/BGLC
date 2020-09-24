@extends('admin.layouts.master')

@section('content')
    <a href="{{ route('headerArticle.block',['section'=>'customers','title'=>"Header Block of Customer"]) }}" class="btn btn-danger">Header Info</a>
    <div class="table-responsive">
        <table id="companyTable" class="table table-bordered table-striped datatable"  name="companyTable">
            <thead>
                <tr>
                    <th width="5%">SL</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th width="5%">Image</th>
                    <th width="5%">Order</th>
                    <th width="5%">Status</th>
                    <th width="5%">Action</th>
                </tr>
            </thead>
            <tbody id="tbody">
                <?php $i = 0; ?>
            	@foreach($partners as $partner)
                @php
                    $i++;
                    if(file_exists($partner->image)){
                        $image = asset('/').$partner->image;
                    }else{
                        $image = $noImage;
                    }
                    
                @endphp                       	
            	<tr class="row_{{$partner->id}}">
                    <td>{{ $i }}</td>
                    <td>{{$partner->name}}</td>
                     <td><?php echo str_limit($partner->description,120) ?></td>
                     <td style="text-align: center;">{{$partner->orderBy}}</td>
                     <td style="text-align: center;">
                        <img src="{{$image}}">
                     </td>
                     <td>
                        <?php echo \App\Link::status($partner->id,$partner->status)?>
                    </td>
                    <td class="text-nowrap">
                    <?php echo \App\Link::action($partner->id)?>
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
            $('#companyTable tbody').on( 'click', 'i.fa-trash', function () {
                $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                });

                partnerId = $(this).parent().data('id');
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
                           url : "{{ route('customers.delete',0) }}",
                            data : {partnerId:partnerId},
                            success: function(response) {
                                swal({
                                    title: "<small class='text-success'>Success!</small>", 
                                    type: "success",
                                    text: "Client Deleted Successfully!",
                                    timer: 1000,
                                    html: true,
                                });
                                $('.row_'+partnerId).remove();
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
                            text: "Your partner is safe :)",
                            timer: 1000,
                            html: true,
                        });    
                    } 
                });
            }); 

        });
                
        //ajax status change code
        function statusChange(partnerId) {
            $.ajax({
                    type: "GET",
                    url: "{{ route('customers.status', 0) }}",
                    data: "partnerId=" + partnerId,
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


