@extends('admin.layouts.master')

@section('content')
<form class="form-horizontal" action="{{ route('district.add') }}" method="POST" enctype="multipart/form-data" id="newProduct" name="newProduct">
        {{ csrf_field() }}

        @if( count($errors) > 0 )
            
        <div style="display:inline-block;width: auto;" class="alert alert-danger">{{ $errors->first() }}</div>
        
        @endif
        <div class="modal-body">
            <div class="form-group row {{ $errors->has('name') ? ' has-danger' : '' }}">
                <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-danger" placeholder="name" name="name" value="{{ old('name') }}" required="">
                    @if ($errors->has('name'))
                    @foreach($errors->get('name') as $error)
                    <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                    @endif
                </div>
            </div>

            <div class="form-group row {{ $errors->has('bn_name') ? ' has-danger' : '' }}">
                <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Bangla Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-danger" placeholder="bangla name" name="bn_name" value="{{ old('bn_name') }}" required="">
                    @if ($errors->has('bn_name'))
                    @foreach($errors->get('bn_name') as $error)
                    <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                    @endif
                </div>
            </div>

            <div class="col-md-12 m-b-20 text-right">    
                <button type="submit" class="btn btn-info waves-effect"><i class="fa fa-save"></i> SAVE</button> 
            </div>
            
        </div>                
</form>
@endsection

