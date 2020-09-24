@extends('admin.layouts.master')

@section('content')
<?php
    use App\Article;
?>
<form class="form-horizontal" action="{{ route('products.add') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('parentMenu') ? ' has-danger' : '' }}">
                <label for="parentMenu">Parent Menu</label>
                <select class="form-control chosen-select" name="parentMenu">
                    <option value=" ">Select Parent Menu</option>
                    <?php
                        foreach ($menus as $menu) {
                    ?>
                        <option {{@$selected}} value="{{$menu->id}}">{{$menu->menuName}}</option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group {{ $errors->has('menuName') ? ' has-danger' : '' }}">
                <label for="menuName">Menu Name</label>
                 <select class="form-control select2" name="menuName">
                    <option value=" ">Select Menu</option>
                    @foreach ($menus as $menu)
                        <option value="{{$menu->menuName}}">{{$menu->menuName}}</option>
                    @endforeach
                </select>
                @if ($errors->has('menuName'))
                    @foreach($errors->get('menuName') as $error)
                        <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('categoryId') ? ' has-danger' : '' }}">
                <label for="categoryId">Category</label>
                <select class="form-control chosen-select" name="categoryId" required="">
                    <option value=" ">Select Category</option>      
                    @foreach ($categoryList as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('name') ? ' has-danger' : '' }}">
                <label for="name">Product Name</label>
                <input type="text" class="form-control form-control-danger" placeholder="product name" name="name" value="{{ old('name') }}" required="">
                @if ($errors->has('name'))
                    @foreach($errors->get('name') as $error)
                        <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    {{-- <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('firstHomeTitle') ? ' has-danger' : '' }}">
                <label for="firstHomeTitle">Home Title 1</label>
                <input type="text" class="form-control form-control-danger" placeholder="home title 1" name="firstHomeTitle" value="{{ old('firstHomeTitle') }}">
                @if ($errors->has('firstHomeTitle'))
                    @foreach($errors->get('firstHomeTitle') as $error)
                        <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('secondHomeTitle') ? ' has-danger' : '' }}">
                <label for="secondHomeTitle">Home Title 2</label>
                <input type="text" class="form-control form-control-danger" placeholder="home title 2" name="secondHomeTitle" value="{{ old('secondHomeTitle') }}">
                @if ($errors->has('secondHomeTitle'))
                    @foreach($errors->get('secondHomeTitle') as $error)
                        <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('firstInnerTitle') ? ' has-danger' : '' }}">
                <label for="firstInnerTitle">Inner Tittle 1</label>
                <input type="text" class="form-control form-control-danger" placeholder="Inner Tittle 1" name="firstInnerTitle" value="{{ old('firstInnerTitle') }}">
                @if ($errors->has('firstInnerTitle'))
                    @foreach($errors->get('firstInnerTitle') as $error)
                        <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('secondInnerTitle') ? ' has-danger' : '' }}">
                <label for="secondInnerTitle">Inner Tittle 2</label>
                <input type="text" class="form-control form-control-danger" placeholder="Inner Tittle 2" name="secondInnerTitle" value="{{ old('secondInnerTitle') }}">
                @if ($errors->has('secondInnerTitle'))
                    @foreach($errors->get('secondInnerTitle') as $error)
                        <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </div>
    </div> --}}

    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('firstHomeImage') ? ' has-danger' : '' }}">
                <label for="firstHomeImage">First Image</label>
                <input type="file" class="form-control form-control-danger" name="firstHomeImage" value="{{ old('firstHomeImage') }}" required="">
                 <span class="imageSizeInfo">
                    /* Min Width: 1140px, Min Height: 760px */ <br>
                 </span>
                @if ($errors->has('firstHomeImage'))
                    @foreach($errors->get('firstHomeImage') as $error)
                        <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="col-md-6">
             <div class="form-group row {{ $errors->has('firstInnerImage') ? ' has-danger' : '' }}">
                <label for="firstInnerImage">Second Image</label>
                <input type="file" class="form-control form-control-danger" name="firstInnerImage" value="{{ old('firstInnerImage') }}">
                 <span class="imageSizeInfo">
                    /* Min Width: 1140px, Min Height: 760px */ <br>
                 </span>
                @if ($errors->has('firstInnerImage'))
                    @foreach($errors->get('firstInnerImage') as $error)
                        <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group {{ $errors->has('homeDescription') ? ' has-danger' : '' }}">
                <label for="homeDescription">Description</label>
                <textarea class="form-control tinymce" name="homeDescription" style="min-height: 250px"></textarea>
                @if ($errors->has('homeDescription'))
                    @foreach($errors->get('homeDescription') as $error)
                        <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    {{-- <div class="row">
        <div class="col-md-12">
            <div class="form-group {{ $errors->has('innerDescription') ? ' has-danger' : '' }}">
                <label for="innerDescription" class="col-sm-3 col-form-label">Inner Description</label>
                <textarea class="form-control tinymce" name="innerDescription" style="min-height: 250px"></textarea>
                @if ($errors->has('innerDescription'))
                    @foreach($errors->get('innerDescription') as $error)
                        <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </div>
    </div> --}}

    {{-- <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('urlLink') ? ' has-danger' : '' }}">
                <label for="urlLink">Url Link</label>
                <input type="text" class="form-control form-control-danger" placeholder="any url link" name="urlLink" value="{{ old('urlLink') }}">
                @if ($errors->has('urlLink'))
                    @foreach($errors->get('urlLink') as $error)
                        <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('articleIcon') ? ' has-danger' : '' }}">
                <label for="inputHorizontalDnger">Icon</label>
                <input type="text" class="form-control form-control-danger" placeholder='<i class="fa fa-icon"></i>' name="articleIcon" value="{{ old('articleIcon') }}">
                @if ($errors->has('articleIcon'))
                    @foreach($errors->get('articleIcon') as $error)
                        <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </div>
    </div> --}}
    
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


    <div class="col-md-12 m-b-20 text-right">    
        <button type="submit" class="btn btn-info waves-effect"><i class="fa fa-save"></i> SAVE</button> 
    </div>
</form>
                        
@endsection

