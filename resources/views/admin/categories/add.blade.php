@extends('admin.layouts.master')

@section('content')
@php
    use App\Category;
@endphp
<form class="form-horizontal" action="{{ route('category.add') }}" method="POST" enctype="multipart/form-data" id="newProduct" name="newProduct">
        {{ csrf_field() }}
        <div class="modal-body">
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

            <div class="form-group row {{ $errors->has('destinationId') ? ' has-danger' : '' }}">
                <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Connect With Destination</label>
                <div class="col-sm-9">
                    <select class="form-control chosen-select" name="destinationId">
                    <option value=" ">Select Study Destination</option>      
                    @foreach ($studyDestinationList as $destination)
                    @php
                        $existDestination = Category::where('destinationId',$destination->id)->first();
                        if(!@$existDestination){
                    @endphp
                        <option value="{{$destination->id}}">{{$destination->name}}</option>
                        @php
                            }
                        @endphp
                    @endforeach
                </select>
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

