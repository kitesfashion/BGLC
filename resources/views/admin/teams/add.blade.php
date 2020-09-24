@extends('admin.layouts.master')

@section('content')

<form class="form-horizontal" action="{{ route('team.add') }}" method="POST" enctype="multipart/form-data" id="newProduct" name="newProduct">
    {{ csrf_field() }}

    @if( count($errors) > 0 )
        
        <div style="display:inline-block;width: auto;" class="alert alert-danger">{{ $errors->first() }}</div>  
    @endif
    <div class="modal-body">
        <div class="form-group row {{ $errors->has('teamCategory') ? ' has-danger' : '' }}">
            <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Select Category</label>
            <div class="col-sm-9">
                <select class="form-control chosen-select" name="teamCategory">
                    <option value=" ">Select Category</option>
                    <?php
                        foreach ($teamCategories as $category) {
                    ?>
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    <?php } ?>
                </select>
                @if ($errors->has('name'))
                @foreach($errors->get('teamCategory') as $error)
                <div class="form-control-feedback">{{ $error }}</div>
                @endforeach
                @endif
            </div>
        </div>
        
        <div class="form-group row {{ $errors->has('name') ? ' has-danger' : '' }}">
            <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control form-control-danger" placeholder="name" name="name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                @foreach($errors->get('name') as $error)
                <div class="form-control-feedback">{{ $error }}</div>
                @endforeach
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('email') ? ' has-danger' : '' }}">
            <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
                <input type="email" class="form-control form-control-danger" placeholder="valid email address" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                @foreach($errors->get('email') as $error)
                <div class="form-control-feedback">{{ $error }}</div>
                @endforeach
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('phone') ? ' has-danger' : '' }}">
            <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Phone</label>
            <div class="col-sm-9">
                <input type="text" class="form-control form-control-danger" placeholder="phone number" name="phone" value="{{ old('phone') }}">
                @if ($errors->has('phone'))
                @foreach($errors->get('phone') as $error)
                <div class="form-control-feedback">{{ $error }}</div>
                @endforeach
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('designation') ? ' has-danger' : '' }}">
            <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Designation</label>
            <div class="col-sm-9">
                <input type="text" class="form-control form-control-danger" placeholder="designation" name="designation" value="{{ old('designation') }}">
                @if ($errors->has('designation'))
                @foreach($errors->get('designation') as $error)
                <div class="form-control-feedback">{{ $error }}</div>
                @endforeach
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('image') ? ' has-danger' : '' }}">
            <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Profile Picture</label>
            <div class="col-sm-9">
                <input type="file" class="form-control form-control-danger" name="image" value="{{ old('image') }}">
                <span class="imageSizeInfo">/* Standard Image Size : */ <br></span>
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

        <div class="form-group row {{ $errors->has('facebook') ? ' has-danger' : '' }}">
            <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Facebook ID</label>
            <div class="col-sm-9">
                <input type="text" class="form-control form-control-danger" placeholder="facebook" name="facebook" value="{{ old('facebook') }}">
                @if ($errors->has('facebook'))
                @foreach($errors->get('facebook') as $error)
                <div class="form-control-feedback">{{ $error }}</div>
                @endforeach
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('twiteer') ? ' has-danger' : '' }}">
            <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Twitter ID</label>
            <div class="col-sm-9">
                <input type="text" class="form-control form-control-danger" placeholder="twiteer" name="twiteer" value="{{ old('twiteer') }}">
                @if ($errors->has('twiteer'))
                @foreach($errors->get('twiteer') as $error)
                <div class="form-control-feedback">{{ $error }}</div>
                @endforeach
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('linkedin') ? ' has-danger' : '' }}">
            <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Linked IN</label>
            <div class="col-sm-9">
                <input type="text" class="form-control form-control-danger" placeholder="linkedin" name="linkedin" value="{{ old('linkedin') }}">
                @if ($errors->has('linkedin'))
                @foreach($errors->get('linkedin') as $error)
                <div class="form-control-feedback">{{ $error }}</div>
                @endforeach
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('instagram') ? ' has-danger' : '' }}">
            <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Instagram</label>
            <div class="col-sm-9">
                <input type="text" class="form-control form-control-danger" placeholder="instagram" name="instagram" value="{{ old('instagram') }}">
                @if ($errors->has('instagram'))
                @foreach($errors->get('instagram') as $error)
                <div class="form-control-feedback">{{ $error }}</div>
                @endforeach
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('skype') ? ' has-danger' : '' }}">
            <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Skype ID</label>
            <div class="col-sm-9">
                <input type="text" class="form-control form-control-danger" placeholder="skype id" name="skype" value="{{ old('skype') }}">
                @if ($errors->has('skype'))
                @foreach($errors->get('skype') as $error)
                <div class="form-control-feedback">{{ $error }}</div>
                @endforeach
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('google_plus') ? ' has-danger' : '' }}">
            <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Golgle Plus</label>
            <div class="col-sm-9">
                <input type="text" class="form-control form-control-danger" placeholder="google plus" name="google_plus" value="{{ old('google_plus') }}">
                @if ($errors->has('google_plus'))
                @foreach($errors->get('google_plus') as $error)
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
        
    </div>                
</form>

@endsection

