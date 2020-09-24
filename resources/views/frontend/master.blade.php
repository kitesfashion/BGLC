<!DOCTYPE html>
    <html lang="en">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <META NAME="KEYWORDS" CONTENT="<?php echo @$metaTag['meta_keyword']; ?>">
        <META NAME="TITLE" CONTENT="<?php echo @$metaTag['meta_title']; ?>">
        <META NAME="DESCRIPTION" CONTENT="<?php echo @$metaTag['meta_description']; ?>">

        <link rel="shortcut icon" type="image/png" href="{{ asset('/').@$information->sitefavIcon }}">
        <title>{{$information->siteName}} @if(@$title) {{@$information->titlePrefix}} @endif {{ @$title }}</title>
        @include('frontend.include.header.header_asset')
    </head>
    <body class="home page-template-default page page-id-2393 template-slider  color-custom style-simple layout-full-width nice-scroll-on button-flat if-zoom no-content-padding no-shadows header-classic minimalist-header-no sticky-white ab-hide subheader-both-center menu-arrow-top menuo-no-borders menuo-right footer-copy-center mobile-tb-left mobile-mini-mr-ll wpb-js-composer js-comp-ver-5.0.1 vc_responsive">
        <div id="Wrapper">
            <div id="Header_wrapper">
                <header id="Header">
                    <div class="header_placeholder"></div>
                    @include('frontend.include.header.header_menu')
                    @include('frontend.include.header.header_slider')
                </header>
             </div>

             <div id="Content">
                <div class="content_wrapper clearfix">
                    <div class="sections_group">
                        <div class="entry-content" itemprop="mainContentOfPage">
                            @if(url('/') != URL::current())
                                @include('frontend.include.others.breadcomes')
                            @endif
                            @yield('mainContent')
                        </div>
                    </div>
                </div>
            </div>

            <footer id="Footer" class="clearfix">
                <div class="widgets_wrapper" style="padding:50px 0;">
                    <div class="container"></div>
                </div>
                <div class="footer_copy">
                    <div class="container">
                        <div class="column one">
                            <div class="copyright">
                                © {{Date('Y')}} {{$information->siteName}}. All Rights Reserved. Developed by <a target="_blank" href="https://technoparkbd.com/">Techno Park Bangladesh</a> 
                            </div>

                            <ul class="social"></ul>
                        </div>
                    </div>
                </div>
            </footer>
         </div>
    
        @include('frontend.include.footer.footer_asset')
        @include('frontend.include.others.contact_javascript')
        @yield('custom_js')
    </body>
</html>

