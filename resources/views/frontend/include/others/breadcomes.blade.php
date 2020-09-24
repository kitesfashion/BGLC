@php
    use App\Menu;
    if(file_exists($menuDetails->firstHomeImage)){
      $headerImage = asset($menuDetails->firstHomeImage);
    }else{
     $headerImage = ''; 
    }
@endphp
<div class="section mcb-section bg-cover" style="padding-top:80px; padding-bottom:80px; background-color:#da2784; background-image:url({{$headerImage}}); background-repeat:no-repeat; background-position:center; background-attachment:; background-size:; -webkit-background-size:" >
  <div class="section_wrapper mcb-section-inner">
    <div class="wrap mcb-wrap one  valign-top clearfix" style="" >
      <div class="mcb-wrap-inner">
        <div class="column mcb-column one-second column_column  column-margin-">
          <div class="column_attr clearfix"  style=" padding:0 40px;">
            <h2 style="color: #fff;">{{$menuDetails->articleName}}</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>