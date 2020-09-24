@extends('admin.layouts.master')

@section('content')
<?php
    use App\StudyDestination;
?>
<div class="row">
    <div class="col-md-3">
        <h5><strong>Search By Parent</strong></h5>
        <form>
            <select name="parentParam" class="form-control chosen-select parent">
                    <option value="">View All</option>
                @foreach ($parentList as $parent)
                   @php
                        if(@$parentParam){
                            if($parent->id == $parentParam){
                                $selected = 'selected';
                            }else{
                                $selected = '';
                            }
                        }
                   @endphp
                    <option {{@$selected}} value="{{$parent->id}}">{{$parent->name}}
                    </option>
                @endforeach
            </select>
        </form>
    </div>
</div>
<div class="table-responsive">
    <table id="destinationList" class="table table-bordered table-striped datatable" name="destinationList">
        <thead>
            <tr>
                <th width="5%">SL</th>
                <th>Name</th>
                <th width="18%">Parent</th>
                <th width="5%">Order</th>
                <th width="5%">Status</th>
                <th width="5%">Action</th>
            </tr>
        </thead>
        <tbody id="tbody">
            <?php $i = 0; ?>
        	@foreach($destinationList as $destination)
            <?php $i++;
                $parentDestination = StudyDestination::where('id',$destination->parent_id)->first();

            ?>                        	
        	<tr class="row_{{$destination->id}}">
                <td>{{ $i }}</td>
                 <td>{{$destination->name}}</td>
                 <td>{{@$parentDestination->name}}</td>
                 <td class="text-center">{{$destination->orderBy}}</td>
                 <td>
                    <?php echo \App\Link::status($destination->id,$destination->status)?>
                </td>
                <td class="text-nowrap">
                <?php echo \App\Link::action($destination->id)?>
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
        $('#destinationList tbody').on( 'click', 'i.fa-trash', function () {
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            destinationId = $(this).parent().data('id');
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
                        url : "{{ route('studyDestination.delete',0) }}",
                        data : {destinationId:destinationId},
                        success: function(response) {
                            swal({
                                title: "<small class='text-success'>Success!</small>", 
                                type: "success",
                                text: "Destination Deleted Successfully!",
                                timer: 1000,
                                html: true,
                            });
                            $('.row_'+destinationId).remove();
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
                        text: "Your destination is safe :)",
                        timer: 1000,
                        html: true,
                    });    
                } 
            });
        }); 

    });
            
    //ajax status change code
    function statusChange(destinationId) {
        $.ajax({
                type: "GET",
                url: "{{ route('studyDestination.status', 0) }}",
                data: "destinationId=" + destinationId,
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
    $('.parent').on('change', function(){
      var parent = $('.parent').val();
      window.location.href = "{{route('studyDestination.index')}}"+"?parent="+parent;
    }); 
</script>

@endsection


