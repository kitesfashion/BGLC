@extends('frontend.master')

@section('mainContent')
  <div class="section mcb-section" style="padding-top:60px; padding-bottom:60px; background-color:">
    <div class="section_wrapper mcb-section-inner">
      <div class="wrap mcb-wrap two-third valign-top clearfix" style="padding:0 40px">
        <div class="mcb-wrap-inner">
          <div class="column mcb-column one column_column  column-margin-">
            <div class="column_attr clearfix align_justify" style=" padding:0 5% 0 0;">
              <div class="spec">
                @if($aboutContent->firstHomeTitle)
                  <span class="dropcap transparent" style=" color:#da2784; font-size:90px;height:90px;line-height:90px;width:90px;">
                    {{$aboutContent->firstHomeTitle}}
                  </span>
                @endif
                @php
                  echo $aboutContent->homeDescription;
                @endphp
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="wrap mcb-wrap one-third valign-top clearfix" style="padding:40px 30px; background-color:#f4f4f7">
        <div class="mcb-wrap-inner">
          <div class="column mcb-column one column_column column-margin-" style="margin-bottom: 20px">
            <div class="column_attr clearfix align_left" style=" padding:0 0 5px 45px; border-bottom: 1px solid #cdcecf;">
            <h3>{{$aboutContent->secondHomeTitle}}</h3></div>
          </div>

          <div class="column mcb-column one column_column  column-margin-20px">
            <div class="column_attr clearfix" style=" background-image:url('../../global.demobb.com/wp-content/uploads/2016/11/home_training_box_icon.png'); background-repeat:no-repeat; background-position:left top; padding:0 0 5px 45px;">
                @php
                  echo $aboutContent->innerDescription;
                @endphp
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection