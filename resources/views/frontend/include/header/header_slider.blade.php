@if(@$sliders)
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" id="study_destination">
        @php
            $i = 0;
            foreach ($sliders as $slider) {
            $i++;
            if(file_exists($slider->image)){
                $image = asset('/').$slider->image;
            }else{
                $image = $noImage;
            }
            if($i == 1){
                $sliderActive = 'active';
            }else{

            }
        @endphp
            <div class="carousel-item {{$sliderActive}}">
              <img class="d-block w-100" src="{{$image}}" alt="First slide">
              <div class="carousel-caption d-none d-md-block" style="margin-bottom: 40px;">
                <h4 style="color: #fff">{{$slider->firstTitle}}</h4>
               
              </div>
              @if($slider->secondTitle)
                @php
                    if($slider->link){
                        $sliderLink = $slider->link;
                    }else{
                       $sliderLink = "#study_destination";  
                    }
                @endphp
                  <div class="carousel-caption d-md-block">
                    <a href="{{$sliderLink}}" style="text-decoration: none;">
                        {{$slider->secondTitle}}
                        <i class="fa-icon-chevron-right" style="margin-left: 10px"></i>
                    </a>
                  </div>
              @endif
            </div>
        @php
            }
        @endphp
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
@endif
<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
    if(htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    }else{
        var htmlDiv = document.createElement("div");
        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
        document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
    }
</script>
<script type="text/javascript">
            /******************************************
    -   PREPARE PLACEHOLDER FOR SLIDER  -
******************************************/

var setREVStartSize=function(){
    try{var e=new Object,i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
        e.c = jQuery('#rev_slider_1_1');
        e.responsiveLevels = [1240,1240,1240,480];
        e.gridwidth = [1240,1024,778,480];
        e.gridheight = [450,768,960,450];
                
        e.sliderLayout = "fullwidth";
        if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})
        
    }catch(d){console.log("Failure at Presize of Slider:"+d)}
};

setREVStartSize();

            var tpj=jQuery;

var revapi1;
tpj(document).ready(function() {
    if(tpj("#rev_slider_1_1").revolution == undefined){
        revslider_showDoubleJqueryError("#rev_slider_1_1");
    }else{
        revapi1 = tpj("#rev_slider_1_1").show().revolution({
            sliderType:"hero",
jsFileLocation:"//www.gesglobalgroup.com/wp-content/plugins/revslider/public/assets/js/",
            sliderLayout:"fullwidth",
            dottedOverlay:"none",
            delay:9000,
            navigation: {
            },
            responsiveLevels:[1240,1240,1240,480],
            visibilityLevels:[1240,1240,1240,480],
            gridwidth:[1240,1024,778,480],
            gridheight:[450,768,960,450],
            lazyType:"none",
            parallax: {
                type:"mouse+scroll",
                origo:"enterpoint",
                speed:400,
                levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
            },
            shadow:0,
            spinner:"spinner2",
            autoHeight:"off",
            disableProgressBar:"on",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
                simplifyAll:"off",
                disableFocusListener:false,
            }
        });
    }
}); /*ready*/
</script>
<script>
var htmlDivCss = ' #rev_slider_1_1_wrapper .tp-loader.spinner2{ background-color: #FFFFFF !important; } ';
var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
if(htmlDiv) {
    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
}
else{
    var htmlDiv = document.createElement('div');
    htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
    document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
}
</script>