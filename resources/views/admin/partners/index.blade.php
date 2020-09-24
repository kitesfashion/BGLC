@extends('admin.layouts.master')

@section('content')
<a href="{{ route('headerArticle.block',['section'=>'partners','title'=>"Header Block of Partners"]) }}" class="btn btn-danger">Header Info</a>
<div class="table-responsive">
    <table id="companyTable" class="table table-bordered table-striped datatable"  name="companyTable">
        <thead>
            <tr>
                <th width="5%">SL</th>
                <th>Name</th>
                <th width="10%" class="text-center">Image</th>
                <th width="5%" class="text-center">Order</th>
                <th width="5%">Status</th>
                <th width="5%">Action</th>
            </tr>
        </thead>
        <tbody id="tbody">
            <?php $i = 0; ?>
            @foreach($partners as $partner)
            <?php $i++; ?>                          
            <tr class="row_{{$partner->id}}">
                <td>{{ $i }}</td>
                <td>{{$partner->name}}</td>
                 <td>
                   @if(file_exists($partner->image))
                    <img src="{{asset($partner->image)}}">
                   @else
                    <img src="{{$noImage}}">
                   @endif
                </td>
                <td class="text-center">{{$partner->orderBy}}</td>
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
                           url : "{{ route('partners.delete',0) }}",
                            data : {partnerId:partnerId},
                            success: function(response) {
                                swal({
                                    title: "<small class='text-success'>Success!</small>", 
                                    type: "success",
                                    text: "Partner Deleted Successfully!",
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
                    url: "{{ route('partners.status', 0) }}",
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


