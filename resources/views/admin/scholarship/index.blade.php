@extends('admin.layouts.master')

@section('content')
<?php
    use App\TeamCategory;
?>
    <div class="row">
        <div class="col-md-2">
            <a href="{{ route('headerArticle.block',['section'=>'scholarship','title'=>"Header Block of Scholarship"]) }}" class="btn btn-danger">
                Header Info
            </a>
        </div>
        <div class="col-md-3">
            <h5><strong>Search By Category</strong></h5>
            <form>
                <select name="categoryId" class="form-control chosen-select category">
                        <option value="">View All</option>
                    @foreach ($categoryList as $category)
                       @php
                            if(@$categoryId){
                                if($category->id == $categoryId){
                                    $selected = 'selected';
                                }else{
                                    $selected = '';
                                }
                            }
                       @endphp
                        <option {{@$selected}} value="{{$category->id}}">{{$category->name}}
                        </option>
                    @endforeach
                </select>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <table id="scholarshipTable" class="table table-bordered table-striped datatable"  name="scholarshipTable">
            <thead>
                <tr>
                    <th width="5%">SL</th>
                    <th width="25%">Category</th>
                    <th>Name</th>
                    <th width="5%">Status</th>
                    <th width="5%">Order</th>
                    <th width="5%">Action</th>
                </tr>
            </thead>
            <tbody id="tbody">
                <?php $i = 0; ?>
            	@foreach($scholarshipList as $scholarship)
                <?php $i++; ?>                        	
            	<tr class="row_{{$scholarship->id}}">
                    <td>{{ $i }}</td>
                     <td>{{ @$scholarship->categoryName }}</td>
                     <td>{{ @$scholarship->name }}</td>
                     <td>
                        <?php echo \App\Link::status($scholarship->id,$scholarship->status)?>
                    </td>
                     <td class="text-center">{{ @$scholarship->orderBy }}</td>
                    <td class="text-nowrap">
                    <?php echo \App\Link::action($scholarship->id)?>
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
            $('#scholarshipTable tbody').on( 'click', 'i.fa-trash', function () {
                $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                });

                scholarshipId = $(this).category().data('id');
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
                           url : "{{ route('scholarship.delete',0) }}",
                            data : {scholarshipId:scholarshipId},
                            success: function(response) {
                                swal({
                                    title: "<small class='text-success'>Success!</small>", 
                                    type: "success",
                                    text: "Scholarship Deleted Successfully!",
                                    timer: 1000,
                                    html: true,
                                });
                                $('.row_'+scholarshipId).remove();
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
                            text: "Your scholarship is safe :)",
                            timer: 1000,
                            html: true,
                        });    
                    } 
                });
            }); 

        });
                
        //ajax status change code
        function statusChange(scholarshipId) {
            $.ajax({
                    type: "GET",
                    url: "{{ route('scholarship.status', 0) }}",
                    data: "scholarshipId=" + scholarshipId,
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
        $('.category').on('change', function(){
          var category = $('.category').val();
          window.location.href = "{{route('scholarship.index')}}"+"?category="+category;
        }); 
    </script>

@endsection


