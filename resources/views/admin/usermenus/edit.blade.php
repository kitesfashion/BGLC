@extends('admin.layouts.master')


@section('content')

<style type="text/css">
    .chosen-single{
        height: 33px !important;
    }
</style>
    <form class="form-horizontal" action="{{ route('usermenu.update') }}" method="POST" enctype="multipart/form-data" id="newMenu" name="newMenu">
            {{ csrf_field() }}
            
            @if( count($errors) > 0 )
                
            <div style="display:inline-block;width: auto;" class="alert alert-danger">{{ $errors->first() }}</div>
            
        @endif
            <div class="modal-body">
               
            <div class="col-md-9 m-b-20 text-right">    
                 <button type="submit" class="btn btn-info waves-effect">Save</button> 
            </div>
            <br>
            <input type="hidden" name="usermenuId" value="{{$menuItem->id}}">
                <div class="form-group row {{ $errors->has('parentMenu') ? ' has-danger' : '' }}">
                    <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Select Parent</label>
                    <div class="col-sm-6">
                        <select class="form-control chosen-select" name="parentMenu">
                            <option value=" ">Select Parent</option>
                    <?php
                        foreach ($menus as $menu) {
                            if ($menu->id == $menuItem->parentMenu) {
                                $selected = 'selected';
                            }else{
                               $selected = ''; 
                            }
                    ?>
                            <option {{$selected}} value="{{$menu->id}}">{{$menu->menuName}}</option>
                    <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row {{ $errors->has('menuName') ? ' has-danger' : '' }}">
                    <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Menu Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-danger" placeholder="Menu name" name="menuName" value="{{ $menuItem->menuName }}" required>
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
                        <input type="text" class="form-control form-control-danger" placeholder="Menu link" name="menuLink" value="{{ $menuItem->menuLink }}" required>
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
                        <input type="text" class="form-control form-control-danger" placeholder="fa fa-icon" name="menuIcon" value="{{ $menuItem->menuIcon }}">
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
                        <input type="number" class="form-control form-control-danger" placeholder="order by" name="orderBy" value="{{ $menuItem->orderBy }}"" required>
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
                                <input type="radio" id="published" name="menuStatus" class="custom-control-input" value="1" required>
                                <label class="custom-control-label" for="published">Published</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="unpublished" name="menuStatus" class="custom-control-input" checked="" value="0">
                                <label class="custom-control-label" for="unpublished">Unpublished</label>
                            </div>
                        </div>                            
                    </div>
                </div>
            </div>                
        </form>
@endsection

@section('custom-js')

<script type="text/javascript">
    document.forms['newMenu'].elements['menuStatus'].value = "{{$menuItem->menuStatus}}";
</script>

@endsection