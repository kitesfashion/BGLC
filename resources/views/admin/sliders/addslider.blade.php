@extends('admin.layouts.master')

@section('content')
            
<form class="form-horizontal" action="{{ route('slideradd.page') }}" method="POST" enctype="multipart/form-data" id="newProduct" name="newProduct">
    {{ csrf_field() }}

    @if( count($errors) > 0 )  
        <div style="display:inline-block;width: auto;" class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('firstTitle') ? ' has-danger' : '' }}">
                <label for="firstTitle">Slider Title 1</label>
                <input type="text" class="form-control form-control-danger" placeholder="slider first title" name="firstTitle" value="{{ old('firstTitle') }}">
                @if ($errors->has('firstTitle'))
                    @foreach($errors->get('firstTitle') as $error)
                        <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group {{ $errors->has('secondTitle') ? ' has-danger' : '' }}">
                <label for="secondTitle">Slider Title 2</label>
                <input type="text" class="form-control form-control-danger" placeholder="slider second title" name="secondTitle" value="{{ old('secondTitle') }}">
                @if ($errors->has('secondTitle'))
                    @foreach($errors->get('secondTitle') as $error)
                        <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group {{ $errors->has('description') ? ' has-danger' : '' }}">
                <label for="description">Slider Short Description</label>
               <textarea class="form-control tinymce" name="description"></textarea>
                @if ($errors->has('description'))
                    @foreach($errors->get('description') as $error)
                        <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('image') ? ' has-danger' : '' }}">
                <label for="image">Slider Image</label>
                <input type="file" class="form-control form-control-danger" placeholder="Category Image" name="image" value="{{ old('image') }}">
                <span class="imageSizeInfo">/* Min Width: 2045px, Min Height: 600px <br></span>
                @if ($errors->has('image'))
                    @foreach($errors->get('image') as $error)
                        <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group {{ $errors->has('link') ? ' has-danger' : '' }}">
                <label for="link">Link</label>
                <input type="text" class="form-control form-control-danger" placeholder="url link" name="link" value="{{ old('link') }}">
                @if ($errors->has('link'))
                    @foreach($errors->get('link') as $error)
                        <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>

        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group {{ $errors->has('metaTitle') ? ' has-danger' : '' }}">
                        <label for="meta-title">Meta Title</label>
                        <input type="text" class="form-control form-control-danger" placeholder="Meta Title" name="metaTitle" value="{{ old('metaTitle') }}">
                        @if ($errors->has('metaTitle'))
                            @foreach($errors->get('metaTitle') as $error)
                                <div class="form-control-feedback">{{ $error }}</div>
                            @endforeach
                        @endif
                    </div>
                </div>

                <div class="col-md-12">
                     <div class="form-group {{ $errors->has('metaKeyword') ? ' has-danger' : '' }}">
                        <label for="meta-keyword">Meta keyword</label>
                        <input type="text" class="form-control form-control-danger" name="metaKeyword" value="{{ old('metaKeyword') }}" data-role="tagsinput">
                        @if ($errors->has('metaKeyword'))
                            @foreach($errors->get('metaKeyword') as $error)
                                <div class="form-control-feedback">{{ $error }}</div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>

         <div class="col-md-6">
            <div class="form-group {{ $errors->has('description') ? ' has-danger' : '' }}">
                <label for="meta-description">Meta description</label>
                <textarea style="min-height: 182px;" class="form-control" name="metaDescription">{{ old('metaDescription') }}</textarea>
                @if ($errors->has('metaDescription'))
                    @foreach($errors->get('metaDescription') as $error)
                        <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('orderBy') ? ' has-danger' : '' }}">
                <label for="orderBy">Order By</label>
                <input type="number"  name="orderBy" class="form-control" value="{{ old('orderBy') }}" required>
                @if ($errors->has('orderBy'))
                    @foreach($errors->get('orderBy') as $error)
                        <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </div>

        <div class="col-md-6">
           <div class="form-group row {{ $errors->has('status') ? ' has-danger' : '' }}">
                <label class="col-sm-3 col-form-label">Publication status</label>
                <div class="col-sm-9 row">
                    <div class="form-control">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="published" name="status" class="custom-control-input" checked="" value="1" required>
                            <label class="custom-control-label" for="published">Published</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="unpublished" name="status" class="custom-control-input" value="0">
                            <label class="custom-control-label" for="unpublished">Unpublished</label>
                        </div>
                    </div>                            
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-10 m-b-20 text-right">    
        <button type="submit" class="btn btn-info waves-effect"><i class="fa fa-save"></i> SAVE</button> 
    </div>              
</form>
        

@endsection

