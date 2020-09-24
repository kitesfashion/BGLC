@extends('frontend.master')

@section('mainContent')
  <div class="section mcb-section" style="padding-top:40px; padding-bottom:40px; background-color:">
    <div class="section_wrapper mcb-section-inner">
      <div class="wrap mcb-wrap one  column-margin-30px valign-top clearfix">
        <div class="mcb-wrap-inner">
          <div class="column mcb-column one column_column  column-margin-">
            <div class="column_attr clearfix align_center" style="">
              <h3>{{$serviceBlock->firstHomeTitle}}</h3>
              @php
                echo $serviceBlock->homeDescription;
              @endphp
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach ($serviceList as $service)
        @php
          if(file_exists($service->firstHomeImage)){
            $image = asset($service->firstHomeImage);
          }else{
            $image = $noImage;
          }
        @endphp
          <div class="col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 10px">
            <div class="feature_box">
              <div class="feature_box_wrapper">
                <div class="photo_wrapper">
                  <img class="scale-with-grid" src="{{$image}}" />
                </div>
                <div class="desc_wrapper">
                  <h4>{{$service->name}}</h4>
                  <div class="desc">
                    @php
                      echo $service->homeDescription;
                    @endphp
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection