@extends('admin.layouts.master')

@section('content')
<form class="form-horizontal" action="{{ route('partners.add') }}" method="POST" enctype="multipart/form-data" id="newProduct" name="newProduct">
    {{ csrf_field() }}
    <div class="form-group row {{ $errors->has('name') ? ' has-danger' : '' }}">
        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Name</label>
        <div class="col-sm-9">
            <input type="text" class="form-control form-control-danger" placeholder="Name" name="name" value="{{ old('name') }}">
            @if ($errors->has('name'))
            @foreach($errors->get('name') as $error)
            <div class="form-control-feedback">{{ $error }}</div>
            @endforeach
            @endif
        </div>
    </div>

    <div class="form-group row {{ $errors->has('information') ? ' has-danger' : '' }}">
        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Information</label>
        <div class="col-sm-9">
            <input type="text" class="form-control form-control-danger" placeholder="Information" name="information" value="{{ old('information') }}">
            @if ($errors->has('information'))
            @foreach($errors->get('information') as $error)
            <div class="form-control-feedback">{{ $error }}</div>
            @endforeach
            @endif
        </div>
    </div>

    <div class="form-group row {{ $errors->has('image') ? ' has-danger' : '' }}">
        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Image</label>
        <div class="col-sm-9">
            <input type="file" class="form-control form-control-danger" name="image" required="">
            <span class="imageSizeInfo">/* Standard Image Size : 200*100 */ <br></span>
            @if ($errors->has('image'))
            @foreach($errors->get('image') as $error)
            <div class="form-control-feedback">{{ $error }}</div>
            @endforeach
            @endif
        </div>
    </div>

    <div class="form-group row {{ $errors->has('description') ? ' has-danger' : '' }}">
        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Description</label>
        <div class="col-sm-9">
            <textarea class="form-control tinymce" name="description" style="min-height: 250px"></textarea>
            @if ($errors->has('description'))
            @foreach($errors->get('description') as $error)
            <div class="form-control-feedback">{{ $error }}</div>
            @endforeach
            @endif
        </div>
    </div>

     <div class="form-group row {{ $errors->has('orderBy') ? ' has-danger' : '' }}">
        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Order By</label>
        <div class="col-sm-9">
            <input type="number" name="orderBy" value="{{ old('orderBy') }}" required>
            @if ($errors->has('orderBy'))
            @foreach($errors->get('orderBy') as $error)
            <div class="form-control-feedback">{{ $error }}</div>
            @endforeach
            @endif
        </div>
    </div>
    
    <div class="form-group row {{ $errors->has('status') ? ' has-danger' : '' }}">
        <label class="col-sm-3 col-form-label">Publication status</label>
        <div class="col-sm-9 row">
            <div class="form-control">
                <div>
                    <input type="radio" name="status" value="1" checked required>
                    <label for="published">Published</label>
                </div>
                <div>
                    <input type="radio" name="status" value="0">
                    <label for="unpublished">Unpublished</label>
                </div>
            </div>                            
        </div>
    </div>

    <div class="col-md-12 m-b-20 text-right">    
        <button type="submit" class="btn btn-info waves-effect"><i class="fa fa-save"></i> SAVE</button> 
    </div>                
</form>
@endsection

