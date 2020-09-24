@extends('admin.layouts.master')

@section('content')
<?php
    use App\TeamCategory;
?>
<a href="{{ route('headerArticle.block',['section'=>'team','title'=>"Header Block of Team"]) }}" class="btn btn-danger">Header Info</a>
    <div class="table-responsive">
        <table id="companyTable" class="table table-bordered table-striped datatable"  name="companyTable">
            <thead>
                <tr>
                    <th width="5%">SL</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Emaill</th>
                    <th>Designation</th>
                    <th width="5%">Status</th>
                    <th width="5%">Order</th>
                    <th width="5%">Action</th>
                </tr>
            </thead>
            <tbody id="tbody">
                <?php $i = 0; ?>
            	@foreach($teams as $team)
                <?php
                    $teamCategory = TeamCategory::where('id',$team->teamCategory)->first();
                ?>
                <?php $i++; ?>                        	
            	<tr class="row_{{$team->id}}">
                    <td>{{ $i }}</td>
                     <td>{{ @$team->categoryName }}</td>
                     <td>{{ @$team->name }}</td>
                     <td>{{ @$team->email }}</td>
                     <td>{{ @$team->designation }}</td>
                     <td>
                        <?php echo \App\Link::status($team->id,$team->status)?>
                    </td>
                     <td class="text-center">{{ @$team->orderBy }}</td>
                    <td class="text-nowrap">
                    <?php echo \App\Link::action($team->id)?>
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

                teamId = $(this).parent().data('id');
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
                           url : "{{ route('team.delete',0) }}",
                            data : {teamId:teamId},
                            success: function(response) {
                                swal({
                                    title: "<small class='text-success'>Success!</small>", 
                                    type: "success",
                                    text: "Team Deleted Successfully!",
                                    timer: 1000,
                                    html: true,
                                });
                                $('.row_'+teamId).remove();
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
                            text: "Your team is safe :)",
                            timer: 1000,
                            html: true,
                        });    
                    } 
                });
            }); 

        });
                
        //ajax status change code
        function statusChange(teamId) {
            $.ajax({
                    type: "GET",
                    url: "{{ route('team.status', 0) }}",
                    data: "teamId=" + teamId,
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


