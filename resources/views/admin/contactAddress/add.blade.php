@extends('admin.layouts.master')

@section('content')
    <form class="form-horizontal" action="{{route('contactAddress.add')}}" method="POST" enctype="multipart/form-data" name="editSettings">
        {{ csrf_field() }}
        <div class="row">
           <div class="col-md-6">
                <div class="form-group {{ $errors->has('officeLocation') ? ' has-danger' : '' }}">
                    <label for="officeLocation">Office Location Name</label>
                    <input type="text" class="form-control form-control-danger" placeholder="Bangladesh Head Office" name="officeLocation" value="{{ old('officeLocation') }}">
                    @if ($errors->has('officeLocation'))
                    @foreach($errors->get('officeLocation') as $error)
                    <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                    @endif
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group {{ $errors->has('officeName') ? ' has-danger' : '' }}">
                    <label for="officeName">Office Name</label>
                    <input type="text" class="form-control form-control-danger" placeholder="Demo Company Limited" name="officeName" value="{{ old('officeName') }}">
                    @if ($errors->has('officeName'))
                    @foreach($errors->get('officeName') as $error)
                    <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
           <div class="col-md-6">
                <div class="form-group {{ $errors->has('addressTitle1') ? ' has-danger' : '' }}">
                    <label for="addressTitle1">Title 1</label>
                    <input type="text" class="form-control form-control-danger" placeholder=" Title 1" name="addressTitle1" value="{{ old('addressTitle1') }}">
                    @if ($errors->has('addressTitle1'))
                    @foreach($errors->get('addressTitle1') as $error)
                    <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                    @endif
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group {{ $errors->has('image') ? ' has-danger' : '' }}">
                    <label for="image">Image</label>
                    <input type="file" class="form-control form-control-danger" name="image">
                    <span class="imageSizeInfo">/* Standard Image Size : 50*50 */ <br></span>
                    @if ($errors->has('image'))
                        @foreach($errors->get('image') as $error)
                            <div class="form-control-feedback">{{ $error }}</div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group {{ $errors->has('name') ? ' has-danger' : '' }}">
                    <label for="name">Person Name</label>
                    <input type="text" class="form-control form-control-danger" placeholder="name" name="name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                    @foreach($errors->get('name') as $error)
                    <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                    @endif
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group {{ $errors->has('designation') ? ' has-danger' : '' }}">
                    <label for="designation">Designation</label>
                    <input type="text" class="form-control form-control-danger" placeholder="designation" name="designation" value="{{ old('designation') }}">
                    @if ($errors->has('designation'))
                    @foreach($errors->get('designation') as $error)
                    <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group {{ $errors->has('address1') ? ' has-danger' : '' }}">
                    <label for="web-address-1">Address 1</label>
                    <textarea class="form-control form-control-danger tinymce" name="address1">{{ old('address1') }}</textarea>
                    @if ($errors->has('address1'))
                        @foreach($errors->get('address1') as $error)
                            <div class="form-control-feedback">{{ $error }}</div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group {{ $errors->has('address2') ? ' has-danger' : '' }}">
                    <label for="web-address-2">Address 2</label>
                    <textarea class="form-control form-control-danger tinymce" name="address2">{{ old('address2') }}</textarea>
                    @if ($errors->has('address2'))
                        @foreach($errors->get('address2') as $error)
                            <div class="form-control-feedback">{{ $error }}</div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group {{ $errors->has('email1') ? ' has-danger' : '' }}">
                    <label for="email-address-1">Email Address 1</label>
                    <input type="text" class="form-control form-control-danger" placeholder="Email Address" name="email1" value="{{ old('email1') }}">
                    @if ($errors->has('email1'))
                        @foreach($errors->get('email1') as $error)
                            <div class="form-control-feedback">{{ $error }}</div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group {{ $errors->has('email2') ? ' has-danger' : '' }}">
                    <label for="email-address-2">Email Address 2</label>
                    <input type="email" class="form-control form-control-danger" placeholder="Email Address" name="email2" value="{{ old('email2') }}">
                    @if ($errors->has('email2'))
                        @foreach($errors->get('email2') as $error)
                            <div class="form-control-feedback">{{ $error }}</div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
            
        <div class="row">
            <div class="col-md-6">
                <div class="form-group {{ $errors->has('mobile1') ? ' has-danger' : '' }}">
                    <label for="phone-number-1">Phone Number 1</label>
                    <input type="text" class="form-control form-control-danger" placeholder="First Phone Number" name="mobile1" value="{{ old('mobile1') }}">
                    @if ($errors->has('mobile1'))
                        @foreach($errors->get('mobile1') as $error)
                            <div class="form-control-feedback">{{ $error }}</div>
                        @endforeach
                    @endif
                </div>
            </div>

             <div class="col-md-6">
                <div class="form-group {{ $errors->has('mobile2') ? ' has-danger' : '' }}">
                    <label for="phone-number-2">Phone Number 2</label>
                    <input type="text" class="form-control form-control-danger" placeholder="Second Phone Number" name="mobile2" value="{{ old('mobile2') }}">
                    @if ($errors->has('mobile2'))
                        @foreach($errors->get('mobile2') as $error)
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

        <div class="row">
            <div class="col-md-12 m-b-20 text-right">    
                <button type="submit" class="btn btn-info waves-effect"><i class="fa fa-save"></i> SAVE</button> 
            </div>                               
        </div>
    </div>
    </form>
            
@endsection