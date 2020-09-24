@extends('admin.layouts.master')

@section('content')

<form class="form-horizontal" action="{{ route('scholarship.add') }}" method="POST" enctype="multipart/form-data" id="newProduct" name="newProduct">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group {{ $errors->has('categoryId') ? ' has-danger' : '' }}">
                        <label for="categoryId">Category</label>
                        <select class="form-control select2" name="categoryId" required="">
                            <option value=" ">Select Category</option>      
                            @foreach ($categoryList as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                         @if ($errors->has('categoryId'))
                            @foreach($errors->get('categoryId') as $error)
                                <div class="form-control-feedback">{{ $error }}</div>
                            @endforeach
                        @endif
                    </div>
                </div>

                <div class="col-md-5">
                   <div class="form-group {{ $errors->has('image') ? ' has-danger' : '' }}">
                        <label for="inputHorizontalDnger">Image</label>
                        <input type="file" class="form-control form-control-danger" name="image" required>
                        <span class="imageSizeInfo">/* Imaze Size: 300*200 */ <br></span>
                        @if ($errors->has('image'))
                            @foreach($errors->get('image') as $error)
                                <div class="form-control-feedback">{{ $error }}</div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        

        <div class="col-md-6">
            <div class="form-group {{ $errors->has('name') ? ' has-danger' : '' }}">
                <label for="inputHorizontalDnger">Name</label>
                <input type="text" class="form-control form-control-danger" placeholder="name" name="name" value="{{ old('name') }}" required="">
                @if ($errors->has('name'))
                    @foreach($errors->get('name') as $error)
                        <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group {{ $errors->has('description') ? ' has-danger' : '' }}">
                <label for="inputHorizontalDnger">Description</label>
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
            <div class="form-group {{ $errors->has('metaDescription') ? ' has-danger' : '' }}">
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

    <div class="col-md-12 m-b-20 text-right">    
        <button type="submit" class="btn btn-info waves-effect"><i class="fa fa-save"></i> SAVE</button> 
    </div>               
</form>

@endsection

