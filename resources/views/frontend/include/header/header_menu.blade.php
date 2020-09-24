@php
  use App\Menu;
    $menuList = Menu::orderBy('orderBy','ASC')->where('showInMenu','yes')->where('menuStatus','1')->where('parent',NULL)->orWhere(\DB::raw('menus.id'), '=', \DB::raw('menus.parent'))->get();
@endphp
<div id="Top_bar" class="loading">
    <div class="container">
        <div class="column one">
            <div class="top_bar_left clearfix">
                <div class="logo">
                    <a id="logo" href="{{ url('/') }}" title="{{@$information->siteName}}">
                    @if(file_exists(@$information->siteLogo))
                        <img class="logo-main scale-with-grid" src="{{ asset('/').$information->siteLogo }}" alt="" />

                        <img class="logo-sticky scale-with-grid" src="{{ asset('/').$information->siteLogo }}" alt="" />

                        <img class="logo-mobile scale-with-grid" src="{{ asset('/').$information->siteLogo }}" alt="" />

                        <img class="logo-mobile-sticky scale-with-grid" src="{{ asset('/').$information->siteLogo }}" alt="" />
                    @else
                        <img class="logo-main scale-with-grid" src="{{ $noImage }}" alt="" />
                    @endif
                  </a>
                </div>
                <div class="menu_wrapper">
                    <nav id="menu" class="menu-main-menu-container">
                        <ul id="menu-main-menu" class="menu">
                            @php
                                if(URL::current() == url('/')){
                                    $activeHome = 'current_page_item';
                                }else{
                                    $activeHome = '';
                                }
                            @endphp
                            <li class="menu-item menu-item-type-post_type menu-item-object-page {{$activeHome}}">
                                <a href="{{url('/')}}">
                                    <span>Home</span>
                                </a>
                            </li>
                            @foreach ($menuList as $menu)
                            @php
                              $menuName = str_replace([' ','/','---'], '-', $menu->menuName);
                              $subMenuList = Menu::orderBy('orderBy','ASC')->where('menuStatus',1)->where('parent',$menu->id)->get();

                              if(@count($subMenuList) > 0){
                                $mainMenuListClass = 'menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children';
                                $menuLink = 'javascript:void(0)';
                              }else{
                                $mainMenuListClass = 'menu-item menu-item-type-post_type menu-item-object-page';
                                $menuLink = route('menu.content',['menuName'=>$menuName,'menuId'=>$menu->id]);
                              }

                              if(@$menuDetails->id == $menu->id){
                                  $activeClass = 'current_page_item';
                                }elseif(@$menuDetails->parent == $menu->id){
                                  $activeClass = 'current_page_item';
                                }else{
                                   $activeClass = ''; 
                                }
                            @endphp
                                <li class="{{$mainMenuListClass}} {{$activeClass}}">
                                    <a href="{{$menuLink}}">
                                        <span>{{$menu->menuName}}</span>
                                    </a>
                                     @if(@count($subMenuList) > 0)
                                        <ul class="sub-menu">
                                            @foreach ($subMenuList as $subMenu)
                                            @php
                                              $subMenuName = str_replace([' ','/','---'], '-', $subMenu->menuName);
                                               if($subMenu->urlLink){
                                                $subMenuLink = $subMenu->urlLink;
                                              }else{
                                                $subMenuLink = route('menu.content',['menuName'=>$subMenuName,'menuId'=>$subMenu->id]);
                                              }
                                            @endphp
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                    <a href="{{$subMenuLink}}">
                                                        <span>{{$subMenu->menuName}}</span>
                                                    </a>
                                                </li>
                                            @endforeach    
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </nav><a class="responsive-menu-toggle " href="#"><i class="icon-menu-fine"></i></a>
                </div>

                <div class="secondary_menu_wrapper">
                    <!-- #secondary-menu -->
                </div>

                <div class="banner_wrapper">
                </div>

                <div class="search_wrapper">
                    <!-- #searchform -->

                    <form method="get" id="searchform" action="">

                        <i class="icon_search icon-search-fine"></i>
                        <a href="#" class="icon_close"><i class="icon-cancel-fine"></i></a>

                        <input type="text" class="field" name="s" id="s" placeholder="Enter your search" />
                        <input type="submit" class="submit" value="" style="display:none;" />

                    </form>
                </div>

            </div>

            <div class="top_bar_right">
                <div class="top_bar_right_wrapper">
                    <a class="button button_theme button_js action_button ">
                        <span class="button_label">
                            <i class="icon-call"></i>{{$information->mobile1}} | 
                            <i class="icon-email"></i>{{$information->siteEmail1}}
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>