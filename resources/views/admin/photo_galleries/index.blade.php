@extends('admin.layouts.master')

@section('content')
<?php
    use App\Category;
?>

<div class="table-responsive">
  <a href="{{ route('headerArticle.block',['section'=>'photoGallery','title'=>"Header Block of Photo Gallery"]) }}" class="btn btn-danger">    Header Info</a>
    <table id="photoGalleryTable" class="table table-bordered table-striped datatable"  name="photoGalleryTable">
        <thead>
            <tr>
                <th width="5%">SL</th>
                <th>Title</th>
                <th width="20%" style="text-align: center;">Image</th>
                <th width="25%">Category</th>
                <th width="5%">Status</th>
                <th width="5%">Action</th>
            </tr>
        </thead>
        <tbody id="tbody">
            <?php $i = 0; ?>
        	@foreach($photo_galleries as $photoGallery)
            <?php
                $category = Category::where('id',@$photoGallery->category_id)->first();
            ?>
            <?php $i++; ?>                        	
        	<tr class="row_{{$photoGallery->id}}">
                <td>{{ $i }}</td>
                 <td>{{ $photoGallery->title }}</td>
                 <td align="center">
                     @if (file_exists($photoGallery->image))
                         <img src="{{asset('/'.$photoGallery->image)}}"  style="height: 90px;width: 132px;">
                     @else
                        <img src="{{asset('/public/frontend/noImage.jpg')}}" style="height: 40px;">
                     @endif
                 </td>
                 <td>{{ @$category->name }}</td>
                 <td>
                    <?php echo \App\Link::status($photoGallery->id,$photoGallery->status)?>
                </td>
                <td class="text-nowrap">
                <?php echo \App\Link::action($photoGallery->id)?>
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
            $('#photoGalleryTable tbody').on( 'click', 'i.fa-trash', function () {
                $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                });

                photoGalleryId = $(this).parent().data('id');
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
                           url : "{{ route('photoGallery.delete',0) }}",
                            data : {photoGalleryId:photoGalleryId},
                            success: function(response) {
                                swal({
                                    title: "<small class='text-success'>Success!</small>", 
                                    type: "success",
                                    text: "Photo Deleted from Gallery Successfully!",
                                    timer: 1000,
                                    html: true,
                                });
                                $('.row_'+photoGalleryId).remove();
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
                            text: "Your Photo Gallery is safe :)",
                            timer: 1000,
                            html: true,
                        });    
                    } 
                });
            }); 

        });
                
        //ajax status change code
        function statusChange(photoGalleryId) {
            $.ajax({
                    type: "GET",
                    url: "{{ route('photoGallery.status', 0) }}",
                    data: "photoGalleryId=" + photoGalleryId,
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


