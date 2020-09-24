@extends('admin.layouts.master')

@section('content')
    <form class="form-horizontal" action="{{ route('customers.edit',$partner->id) }}" method="POST" enctype="multipart/form-data" name="form">
        {{ csrf_field() }}

        @if( count($errors) > 0 )
        <div style="display:inline-block;width: auto;" class="alert alert-danger">{{ $errors->first() }}</div>
        @endif
        <div class="modal-body">
             <input type="hidden" name="aboutCompanyId" value="{{$partner->id}}">

            <div class="form-group row {{ $errors->has('name') ? ' has-danger' : '' }}">
                <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-danger" placeholder="customer name" name="name" value="{{ @$partner->name }}">
                    @if ($errors->has('name'))
                    @foreach($errors->get('name') as $error)
                    <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                    @endif
                </div>
            </div>

            <div class="form-group row {{ $errors->has('image') ? ' has-danger' : '' }}">
                <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Image</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control form-control-danger" name="image" value="{{ old('image') }}">
                     <span class="imageSizeInfo">/* Standard Image Size : */ <br></span>
                    <?php if (file_exists(@$partner->image)) { ?> 
                    <img src="{{asset('/').@$partner->image}}" style="height: 90px;">
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
                    <textarea class="form-control tinymce" name="description" style="min-height: 250px"><?php echo $partner->description; ?></textarea>
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
                    <input type="number"   name="orderBy" value="{{ $partner->orderBy }}" required>
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
        document.forms['form'].elements['status'].value = "{{$partner->status}}";
</script>

@endsection


