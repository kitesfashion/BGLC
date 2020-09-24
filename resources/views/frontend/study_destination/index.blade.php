@extends('frontend.master')

@section('mainContent')
@php
  use App\Menu;
    
@endphp
  <div class="section mcb-section" style="padding-top:60px; padding-bottom:60px; background-color:">
    <div class="section_wrapper mcb-section-inner">
      <div class="wrap mcb-wrap one  column-margin-30px valign-top clearfix">
        <div class="mcb-wrap-inner">
          <div class="column mcb-column one column_column  column-margin-">
            <div class="column_attr clearfix" style="">
              @php
                echo $studyDestination->homeDescription;
              @endphp
            </div>
            <div class="row">
              @foreach ($academyList as $academy)
                <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                  <div class="question">
                    <div class="image">
                      @php
                        if(file_exists($academy->firstInnerImage)){
                          $image  = asset($academy->firstInnerImage);
                        }else{
                          $image = $noImage;
                        }
                      @endphp
                      <img class="scale-with-grid" src="{{ $image }}" alt="" width="220" height="215">
                    </div>
                    <div class="title">
                      <h5>{{$academy->name}}</h5>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection