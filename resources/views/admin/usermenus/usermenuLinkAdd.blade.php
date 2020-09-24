@extends('admin.layouts.master_origin')

@section('content')
<?php
    use App\UserMenuActions;
?>

<?php
    $actionStatus = array('1' => 'Add', '2' => 'Edit', '3' => 'Publication Status', '4' => 'Delete', '5' => 'Permission',
        '6' => 'Changepassword', '7' => 'View PopUp', '8' => 'View','9'=>'Shipping Status','10'=>'Product List','11'=>'View PDF','12'=>'Send');
?>

<style type="text/css">
    .chosen-single{
        height: 33px !important;
    }
</style>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6"><h4 class="card-title">{{ @$title }}</h4></div>
            <div class="col-md-6 text-right">
                <span class="shortlink">
                    <a class="btn btn-success" onclick="goBack()">
                            <i class="fa fa-arrow-left"></i> 
                        Go Back
                    </a>
                </span>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form class="form-horizontal" action="{{ route('userMenu.ActionLinkSave',$menuId) }}" method="POST" enctype="multipart/form-data" id="newMenu" name="newMenu">
            {{ csrf_field() }}
            
            @if( count($errors) > 0 )
                
            <div style="display:inline-block;width: auto;" class="alert alert-danger">{{ $errors->first() }}</div>
            @endif
            <div class="col-md-9 m-b-20 text-right">    
                 <button type="submit" class="btn btn-info waves-effect">Save</button> 
            </div>
            <br>
            <div class="form-group row {{ $errors->has('menuType') ? ' has-danger' : '' }}">
                <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Select Menu Type</label>
                <div class="col-sm-6">
                    <select class="form-control chosen-select" name="menuType">
                        <option value=" ">Select Menu Type</option>
                <?php
                    foreach ($actionStatus as $key => $value) {
                ?>
                        <option value="{{$key}}">{{$value}}</option>
                <?php } ?>
                    </select>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('actionName') ? ' has-danger' : '' }}">
                <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-danger" placeholder="Add" name="actionName" value="{{ old('actionName') }}" required>
                    @if ($errors->has('actionName'))
                    @foreach($errors->get('actionName') as $error)
                    <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                    @endif
                </div>
            </div>

            <div class="form-group row {{ $errors->has('actionLink') ? ' has-danger' : '' }}">
                <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Link</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-danger" placeholder="menu.add" name="actionLink" value="{{ old('actionLink') }}" required>
                    @if ($errors->has('actionLink'))
                    @foreach($errors->get('actionLink') as $error)
                    <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                    @endif
                </div>
            </div>

            <div class="form-group row {{ $errors->has('orderBy') ? ' has-danger' : '' }}">
                <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Order By</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control form-control-danger" placeholder="order by" name="orderBy" value="{{ old('orderBy') }}" required>
                    @if ($errors->has('orderBy'))
                    @foreach($errors->get('orderBy') as $error)
                    <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                    @endif
                </div>
            </div>
            
            <div class="form-group row {{ $errors->has('actionStatus') ? ' has-danger' : '' }}">
                <label class="col-sm-3 col-form-label">Publication status</label>
                <div class="col-sm-3 row" style="margin-left: 2px;">
                    <div class="form-control">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="published" name="actionStatus" class="custom-control-input" checked="" value="1" required>
                            <label class="custom-control-label" for="published">Published</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="unpublished" name="actionStatus" class="custom-control-input" value="0">
                            <label class="custom-control-label" for="unpublished">Unpublished</label>
                        </div>
                    </div>                            
                </div>
            </div>               
        </form>
    </div>
</div>
        
@endsection

@section('custom-js')

<script src="{{ asset('/public/admin-elite/assets/node_modules/datatables/jquery.dataTables.min.js') }}"></script>


 <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 200, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });

            var updateThis ;

            // Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function() {
                new Switchery($(this)[0], $(this).data());
            });

            var table = $('#MenusTable').DataTable( {
                "order": [[ 0, "asc" ]]
            } );

            

        });
 

            function summernote(){
                $('.summernote').summernote({
                    height: 200, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: false // set focus to editable area after initializing summernote
                });
            }
    </script>

@endsection