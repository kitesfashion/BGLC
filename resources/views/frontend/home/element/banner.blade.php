@if(@$banners)
    <div class="section mcb-section equal-height-wrap" style="padding-top:40px; padding-bottom:10px; background-color:">
        <div class="section_wrapper mcb-section-inner">
            <div class="wrap mcb-wrap one-fifth  valign-top clearfix" style="">
                <div class="mcb-wrap-inner">
                    <div class="column mcb-column one column_placeholder">
                        <div class="placeholder">&nbsp;</div>
                    </div>
                </div>
            </div>
            <div class="wrap mcb-wrap three-fifth  valign-top clearfix" style="">
                <div class="mcb-wrap-inner">
                    <div class="column mcb-column one column_photo_box ">
                        <div class="photo_box  without-desc">
                            <div class="image_frame">
                                <div class="image_wrapper">
                                    <div class="mask"></div>
                                    @php
                                        if($banners->urlLink){
                                            $bannerLink = 'href="'.$banners->urlLink.'"';
                                        }else{
                                            $bannerLink = '';
                                        }
                                    @endphp
                                    <a {{$bannerLink}}>
                                        <img class="scale-with-grid" src="{{ asset($banners->bannerImage) }}"/>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif