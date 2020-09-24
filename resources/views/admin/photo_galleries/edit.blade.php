@extends('admin.layouts.master')

@section('content')

<form class="form-horizontal" action="{{ route('photoGallery.edit',$photoGallery->id) }}" method="POST" enctype="multipart/form-data" name="form">
        {{ csrf_field() }}

    @if( count($errors) > 0 )
        <div style="display:inline-block;width: auto;" class="alert alert-danger">{{ $errors->first() }}</div>
        
    @endif
        <div class="modal-body">
            {{-- <div class="form-group row {{ $errors->has('category_id') ? ' has-danger' : '' }}">
                <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Select Category</label>
                <div class="col-sm-9">
                    <select class="form-control chosen-select" name="category_id">
                        <option value=" ">Select Category</option>
                        @foreach ($categories as $category)
                        @php
                            if($category->id == $photoGallery->category_id){
                                $selected = "selected";
                            }else{
                                $selected = "";
                            }
                        @endphp
                        <option {{@$selected}} value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('name'))
                    @foreach($errors->get('category_id') as $error)
                    <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                    @endif
                </div>
            </div> --}}

            <div class="form-group row {{ $errors->has('title') ? ' has-danger' : '' }}">
                <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Title</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-danger" placeholder="title" name="title" value="{{ $photoGallery->title }}">
                    @if ($errors->has('title'))
                    @foreach($errors->get('title') as $error)
                    <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                    @endif
                </div>
            </div>

            <div class="form-group row {{ $errors->has('image') ? ' has-danger' : '' }}">
                <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Image</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control form-control-danger" name="image">
                    <span class="imageSizeInfo">
                        /* Min Width :900px, Min Height: 600px */ 
                        <br>
                    </span>
                    <?php if (file_exists(@$photoGallery->image)) { ?> 
                    <img src="{{asset('/').@$photoGallery->image}}" style="height: 90px;">
                    <?php }else{ ?>
                        <img src="{{asset('/public/frontend/noImage.jpg')}}" style="height: 94px;">
                    <?php } ?>
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
                    <textarea class="form-control tinymce" name="description" style="min-height: 250px"><?php echo $photoGallery->description; ?></textarea>
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
                    <input type="number"   name="orderBy" value="{{ $photoGallery->orderBy }}" required>
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
                            <input type="radio" name="status" value="1" required>
                            <label for="published">Published</label>
                        </div>
                        <div>
                            <input type="radio" name="status" checked="" value="0">
                            <label for="unpublished">Unpublished</label>
                        </div>
                    </div>                            
                </div>
            </div>

            <div class="col-md-12 m-b-20 text-right">    
                <button type="submit" class="btn btn-info waves-effect"><i class="fa fa-save"></i> UPDATE</button> 
            </div>
            
        </div>                
    </form>
                        

<script type="text/javascript">
        document.forms['form'].elements['status'].value = "{{$photoGallery->status}}";
</script>

@endsection


