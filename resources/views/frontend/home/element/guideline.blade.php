@if(@$guideline)
    <div class="section mcb-section equal-height-wrap" style="padding-top:10px; padding-bottom:0px; background-color:">
        <div class="section_wrapper mcb-section-inner">
            <div class="wrap mcb-wrap one-second  valign-middle clearfix" style="height: 560px;">
                <div class="mcb-wrap-inner">
                    <div class="column mcb-column one column_image ">
                        <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                            <div class="image_wrapper">
                                <img class="scale-with-grid" src="{{ asset($guideline->firstHomeImage) }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap mcb-wrap one-second  valign-middle clearfix" style="padding: 40px; height: 560px;">
                <div class="mcb-wrap-inner">
                    <div class="column mcb-column one column_column  column-margin-">
                        <div class="column_attr clearfix" style="">
                           @php
                              echo $guideline->homeDescription
                           @endphp
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif