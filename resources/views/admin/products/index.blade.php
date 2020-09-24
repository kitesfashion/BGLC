@extends('admin.layouts.master')

@section('content')
<?php
    use App\Category;
?>

<div class="table-responsive">
    <table id="productList" class="table table-bordered table-striped datatable" name="productList">
        <thead>
            <tr>
                <th width="5%">SL</th>
                <th width="18%">Category</th>
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
        	@foreach($productList as $product)
            <?php $i++;
                $category = Category::where('id',$product->categoryId)->first();

            ?>                        	
        	<tr class="row_{{$product->id}}">
                <td>{{ $i }}</td>
                 <td>{{$category->name}}</td>
                 <td>{{$product->name}}</td>
                 <td>
                     <?php if (file_exists(@$product->firstHomeImage)) { ?> 
                        <img src="{{asset('/').@$product->firstHomeImage}}" style="height: 40px;">
                    <?php }else{ ?>
                        <img src="{{asset('/public/frontend/noImage.jpg')}}" style="height: 40px;">
                    <?php } ?>
                 </td>
                 <td>
                     <?php if (file_exists(@$product->firstInnerImage)) { ?> 
                        <img src="{{asset('/').@$product->firstInnerImage}}" style="height: 40px;">
                    <?php }else{ ?>
                        <img src="{{asset('/public/frontend/noImage.jpg')}}" style="height: 40px;">
                    <?php } ?>
                 </td>
                 <td class="text-center">{{$product->orderBy}}</td>
                 <td>
                    <?php echo \App\Link::status($product->id,$product->status)?>
                </td>
                <td class="text-nowrap">
                <?php echo \App\Link::action($product->id)?>
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

            productId = $(this).parent().data('id');
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
                        url : "{{ route('products.delete',0) }}",
                        data : {productId:productId},
                        success: function(response) {
                            swal({
                                title: "<small class='text-success'>Success!</small>", 
                                type: "success",
                                text: "Product Deleted Successfully!",
                                timer: 1000,
                                html: true,
                            });
                            $('.row_'+productId).remove();
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
                        text: "Your product is safe :)",
                        timer: 1000,
                        html: true,
                    });    
                } 
            });
        }); 

    });
            
    //ajax status change code
    function statusChange(productId) {
        $.ajax({
                type: "GET",
                url: "{{ route('products.status', 0) }}",
                data: "productId=" + productId,
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

<script type="text/javascript">
    $('.parentArticle').on('change', function(){
      var parentArticle = $('.parentArticle').val();
      window.location.href = "{{route('products.index')}}"+"?parentArticle="+parentArticle;
    }); 
</script>

@endsection


