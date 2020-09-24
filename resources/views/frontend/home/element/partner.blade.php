@if(@count(@$partnerList) > 0 )
    <div class="section mcb-section equal-height-wrap  " style="padding-top:40px; padding-bottom:10px; background-color:">
        <div class="section_wrapper mcb-section-inner">
            <div class="wrap mcb-wrap one-third  valign-middle clearfix" style="height: 214px;">
                <div class="mcb-wrap-inner">
                    <div class="column mcb-column one column_column  column-margin-">
                        <div class="column_attr clearfix align_left" style=" padding:0 20px;">
                            <h3>{{$partnerBlock->firstHomeTitle}}</h3>

                           @php
                               echo $partnerBlock->homeDescription;
                           @endphp
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap mcb-wrap two-third valign-middle clearfix" style="height: 214px;">
                <div class="mcb-wrap-inner">
                    @php
                        foreach ($partnerList as $partner) {
                            if(file_exists($partner->image)){
                                $partnerImage = $partner->image;
                            }else{
                                $partnerImage = $noImage;
                            }
                    @endphp
                        <div class="column mcb-column two-sixth column_image">
                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                <div class="image_wrapper">
                                    <img class="scale-with-grid" src="{{ asset($partnerImage) }}">
                                </div>
                            </div>
                        </div>
                    @php
                        }
                    @endphp
                </div>
            </div>
        </div>
    </div>
@endif