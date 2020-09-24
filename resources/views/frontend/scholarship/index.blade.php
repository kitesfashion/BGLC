@extends('frontend.master')

@section('mainContent')
@php
  use App\Scholarship;
@endphp

@if(@strlen($scholarshipBlock->innerDescription) > 68)
  <div class="section mcb-section" style="padding-top:10px; background-color:">
    <div class="section_wrapper mcb-section-inner">
      <div class="wrap mcb-wrap one  column-margin-30px valign-top clearfix">
        <div class="mcb-wrap-inner">
          <div class="column mcb-column one column_column  column-margin-">
            <div class="column_attr clearfix align_center" style="">
              <span>
                @php
                  echo  $scholarshipBlock->innerDescription;
                @endphp
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@else
  <div style="padding-bottom: 20px;"></div>
@endif
<div class="row">
  <div class="col-md-12">
    
  </div>
</div>
  @foreach ($scholarshipCategoryList as $scholarshipCategory)
    @php
      $scholarshipList = Scholarship::where('categoryId',$scholarshipCategory->id)
                      ->where('status',1)
                      ->orderBy('orderBy','ASC')
                      ->get()
    @endphp
    <div class="section mcb-section" id="sch_{{$scholarshipCategory->id}}" style=" padding-bottom:10px; background-color:">
      <div class="section_wrapper mcb-section-inner">
        <div class="wrap mcb-wrap one  valign-top clearfix" style="">
          <div class="mcb-wrap-inner">
            <div class="column mcb-column one column_column  column-margin-">
              <div class="column_attr clearfix align_center" style="">
                <h2>{{$scholarshipCategory->name}}</h2>
              </div>
            </div>
          </div>
        </div>
        @foreach ($scholarshipList as $scholarship)
        @php
          if(file_exists($scholarship->image)){
            $image = asset($scholarship->image);
          }else{
            $image = $noImage;
          }
        @endphp
          <div class="wrap mcb-wrap one-third  valign-top clearfix" style="padding:0px 10px">
            <div class="mcb-wrap-inner">
              <div class="column mcb-column one column_column column-margin-" style="min-height: 540px">
                <div class="column_attr clearfix" style=" background-color:#f4f4f7; padding:30px;min-height: 540px">
                  <img src="{{$image}}" alt="" width="300" height="200" class="aligncenter size-medium wp-image-2467" />
                  <br>
                  @php
                    echo $scholarship->description;
                  @endphp
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  @endforeach
@endsection