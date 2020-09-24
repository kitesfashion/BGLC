@php
    use App\Menu;
    $menu = Menu::where('id',4)->first();
    $menuName = str_replace([' ','/','---'], '-', $menu->menuName);
    $scholarshipLink = route('menu.content',['menuName'=>$menuName,'menuId'=>$menu->id]);
@endphp
@if(@count($testimonialList) > 0)
    <div class="section mcb-section equal-height-wrap full-width " style="padding-top:10px; padding-bottom:0px; background-color:">
        <div class="section_wrapper mcb-section-inner">
            {{-- <div class="wrap mcb-wrap two-fifth  valign-middle bg-cover clearfix" style="padding: 80px; background-color: rgb(218, 39, 132); background-image: url({{'public/frontend/assets'}}/uploads/2016/11/home_training_contact3.png&quot;); background-repeat: no-repeat; background-position: left top; height: 475px;">
                <div class="mcb-wrap-inner">
                    <div class="column mcb-column one column_column  column-margin-">
                        <div class="column_attr clearfix" style="">
                            <h2 style="color: #fff; font-weight: 700;">{{$scholarshipBlock->firstHomeTitle}}</h2>

                            <hr class="no_line" style="margin: 0 auto 10px;">

                            <h4 style="color: #fff; font-weight: 400;">
                                @php
                                  echo str_limit($scholarshipBlock->homeDescription,200);
                                @endphp
                            </h4>
                        </div>
                    </div>
                    <div class="column mcb-column one column_button">
                        <a class="button  button_size_2 button_js" href="{{$scholarshipLink}}" style=" background-color:#0d96a7 !important; color:#ffffff;">
                            <span class="button_label">{{$scholarshipBlock->secondHomeTitle}}</span>
                        </a>
                    </div>
                </div>
            </div> --}}
            <div class="wrap mcb-wrap three-fifth  valign-middle clearfix" style="background-color:#0D96A7;width: 100%; background-image:url({{'public/frontend/assets'}}/uploads/2016/11/line-1.png); background-repeat:no-repeat; background-position:left top; background-attachment:; background-size:; -webkit-background-size:">
                <div class="mcb-wrap-inner">
                    <div class="column mcb-column one column_testimonials ">
                        <div class="testimonials_slider single-photo">
                            <ul class="testimonials_slider_ul" style="height: 321px;">
                                @php
                                    foreach ($testimonialList as $testimonial) {
                                        if(file_exists($testimonial->image)){
                                            $testimonialImage = asset($testimonial->image);
                                        }else{
                                            $testimonialImage = $noImage;
                                        }
                                @endphp
                                <li>
                                    <div class="single-photo-img">
                                        <img width="85" height="85" src="{{$testimonialImage}}" class="scale-with-grid wp-post-image" alt="" srcset="{{$testimonialImage}}" sizes="(max-width: 85px) 100vw, 85px" />
                                    </div>
                                    <div class="bq_wrapper">
                                        <blockquote>
                                            @php
                                                echo str_limit($testimonial->description,213);
                                            @endphp
                                        </blockquote>
                                    </div>
                                    <div class="hr_dots"><span></span><span></span><span></span></div>
                                    <div class="author">
                                        <h5>{{$testimonial->information}}</h5>
                                        <span class="company">{{$testimonial->country}}</span>
                                    </div>
                                </li>
                                @php
                                    }
                                @endphp
                            </ul>
                            <div class="slider_pager slider_pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif