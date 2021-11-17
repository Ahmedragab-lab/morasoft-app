<!DOCTYPE html >
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}"  lang="en" class="no-js no-svg ">
    @include('site.layouts.head')
    <body class=" active-pageloader corporate logistics header-sticky hide-on-scroll header-menu-with-icons header-transparent header-menu-border-bottom header-topbar topbar-background dark-color footer-widgets footer-background dark-color submenu-show-arrow-right menu-is-capitalized submenu-is-capitalized logo-text-is-capitalized page-index">
        @include('site.layouts.Header')
        {{-- @include('site.layouts.sections') --}}
        <div id="content-main-wrap" class="is-clearfix">
            <div id="content-area" class="site-content-area">
              <div id="content-area-inner" class="site-content-area-inner">
                @yield('content')
              </div>
            <!-- #content-area-inner -->
            </div>
        <!-- #content-area -->
        </div>
        @include('site.layouts.footer')
        @include('site.layouts.footerjs')
    </body>
</html>

