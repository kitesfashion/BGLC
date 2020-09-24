@php
    use App\Menu;
@endphp
@if(@count($destinationList) > 0)
    <div class="section mcb-section full-width  " id="destinations" style="padding-top:7px; padding-bottom:0px; background-color:">
        <div class="section_wrapper mcb-section-inner">
            @php
                foreach ($destinationList as $destination) {
                    if(file_exists($destination->firstHomeImage)){
                        $destinationImage = asset($destination->firstHomeImage);
                    }else{
                        $destinationImage = $noImage;
                    }
                    $menu = Menu::where('id',$destination->menuId)->first();
                    $menuName = str_replace([' ','/','---'], '-', $menu->menuName);
                    $destinationLink = route('menu.content',['menuName'=>$menuName,'menuId'=>$destination->menuId]);
            @endphp
                <div class="wrap mcb-wrap one-fifth valign-middle clearfix" style="">
                    <div class="mcb-wrap-inner">
                        <div class="column mcb-column one column_trailer_box ">
                            <div class="trailer_box">
                                <a href="{{$destinationLink}}">
                                    <img class="scale-with-grid" src="{{ $destinationImage }}" alt="" width="" height="">
                                    <div class="desc">
                                        <h2>{{$destination->name}}</h2>
                                        <div class="line"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @php
                }
            @endphp
        </div>
    </div>
@endif