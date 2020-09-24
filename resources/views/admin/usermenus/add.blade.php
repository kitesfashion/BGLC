@extends('admin.layouts.master')

@section('content')
<?php
    use App\UserMenu;
    $userMenus = UserMenu::orderBy('id','DESC')->first();
    $orderBy = $userMenus->orderBy+1;
?>

<style type="text/css">
    .chosen-single{
        height: 33px !important;
    }
</style>       
    <form class="form-horizontal" action="{{ url('/admin/user-menu/save') }}" method="POST" enctype="multipart/form-data" id="newMenu" name="newMenu">
        {{ csrf_field() }}
        
        @if( count($errors) > 0 )
            
        <div style="display:inline-block;width: auto;" class="alert alert-danger">{{ $errors->first() }}</div>
        
        @endif
        <div class="modal-body">
           
        <div class="col-md-9 m-b-20 text-right">    
             <button type="submit" class="btn btn-info waves-effect">Save</button> 
        </div>
        <br>
            <div class="form-group row {{ $errors->has('parent') ? ' has-danger' : '' }}">
                <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Select Parent</label>
                <div class="col-sm-6">
                    <select class="form-control chosen-select" name="parentMenu">
                        <option value=" ">Select Parent</option>
                <?php
                    foreach ($menus as $menu) {
                ?>
                        <option value="{{$menu->id}}">{{$menu->menuName}}</option>
                <?php } ?>
                    </select>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('menuName') ? ' has-danger' : '' }}">
                <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Menu Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-danger" placeholder="Menu name" name="menuName" value="{{ old('menuName') }}" required>
                    @if ($errors->has('menuName'))
                    @foreach($errors->get('menuName') as $error)
                    <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                    @endif
                </div>
            </div>

            <div class="form-group row {{ $errors->has('menuLink') ? ' has-danger' : '' }}">
                <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Menu Link</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-danger" placeholder="Menu link" name="menuLink" value="{{ old('menuLink') }}" required>
                    @if ($errors->has('menuLink'))
                    @foreach($errors->get('menuLink') as $error)
                    <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                    @endif
                </div>
            </div>

            <div class="form-group row {{ $errors->has('menuIcon') ? ' has-danger' : '' }}">
                <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Menu Icon</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-danger" placeholder="fa fa-icon" name="menuIcon" value="{{ old('menuIcon') }}">
                    @if ($errors->has('menuIcon'))
                    @foreach($errors->get('menuIcon') as $error)
                    <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                    @endif
                </div>
            </div>

            <div class="form-group row {{ $errors->has('orderBy') ? ' has-danger' : '' }}">
                <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Order By</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control form-control-danger" placeholder="order by" name="orderBy" value="{{ $orderBy }}" required>
                    @if ($errors->has('orderBy'))
                    @foreach($errors->get('orderBy') as $error)
                    <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                    @endif
                </div>
            </div>
            
            <div class="form-group row {{ $errors->has('status') ? ' has-danger' : '' }}">
                <label class="col-sm-3 col-form-label">Publication status</label>
                <div class="col-sm-3 row" style="margin-left: 2px;">
                    <div class="form-control">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="published" name="menuStatus" class="custom-control-input" checked="" value="1" required>
                            <label class="custom-control-label" for="published">Published</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="unpublished" name="menuStatus" class="custom-control-input" value="0">
                            <label class="custom-control-label" for="unpublished">Unpublished</label>
                        </div>
                    </div>                            
                </div>
            </div>
            
        </div>                
    </form>

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