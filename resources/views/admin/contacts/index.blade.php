@extends('admin.layouts.master')


@section('content')
    <a href="{{ route('headerArticle.block',['section'=>'contacts','title'=>"Header Block of Contact Info"]) }}" class="btn btn-danger">Header Info</a>
    <div class="table-responsive">
        <table id="contactsTable" class="table table-bordered table-striped datatable"  name="contactsTable">
            <thead>
                <tr>
                    <th width="5%">SL</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th width="10%">Action</th>
                </tr>
            </thead>
            <tbody id="tbody">
                <?php $i=0; ?>
            	@foreach($contacts as $contact)                        	
            	<tr class="row_{{$contact->id}}">
                    <td>{{ $i++ }}</td>
                    <td>{{ $contact->contactName }}</td>
                     <td>{{ $contact->contactPhone }}</td>
                      <td>{{ $contact->contactEmail }}</td>
                      <td>{{ str_limit($contact->contactTitle,'30') }}</td>
                    
                 
                    <td class="text-nowrap">
                        <a href="{{route('contact.contactDetails',$contact->id)}}" data-toggle="tooltip" data-original-title="View Details"> <i class="fa fa-eye text-success m-r-10"></i> </a>
                       
                        <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Delete" data-id="{{$contact->id}}"  data-token="{{ csrf_token() }}"> <i class="fa fa-trash text-danger"></i> </a>
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
            $('#contactsTable tbody').on( 'click', 'i.fa-trash', function () {
                $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                });

                contact_id = $(this).parent().data('id');
                var contact = this;
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
                            type: "DELETE",
                            
                            url: "{{ route('contacts.index') }}" + "/" + contact_id,
                            
                            dataType: "JSON",
                            data: {
                                id:contact_id
                            },
                            cache:false,
                            contentType: false,
                            processData: false,
                            success: function(response) {
                                swal({
                                    title: "<small class='text-success'>Success!</small>", 
                                    type: "success",
                                    text: "Contact Message Deleted Successfully!",
                                    timer: 1000,
                                    html: true,
                                });
                                    $('.row_'+contact_id).remove();
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
                            text: "Your contact message is safe :)",
                            timer: 1000,
                            html: true,
                        });    
                    } 
                });
            }); 

        });
                
    
    </script>
@endsection