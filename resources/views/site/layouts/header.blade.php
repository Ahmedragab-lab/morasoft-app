<div class="pageloader is-active"></div>
<div id="site-wrap" class="site">
    <div id="header-top-wrap" class="is-clearfix">
        <div id="header-top" class="site-header-top">
            <div id="header-top-inner" class="site-header-top-inner container">
                <div class="level">
                    <div class="level-left">
                        <ul class="topbar-info ">
                            <li>
                                <a href="#">
                                    <span class="icon">
                                        <i class="icon-clock"></i>
                                    </span> سبت - خميس : 09:00 - 17:00 </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon">
                                        <i class="icon-envelope"></i>
                                    </span> info@company.com </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon">
                                        <i class="icon-phone"></i>
                                    </span> +01021493036 </a>
                            </li>
                        </ul>
                    </div>
                    <!-- .level-left -->
                    <div class="level-right">
                        <ul class="header-menu-icons social">
                            <li>
                                <a href="https://www.facebook.com" target="_blank">
                                    <span class="icon">
                                        <i class="fab fa-facebook-f"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <span class="icon">
                                        <i class="fab fa-twitter"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <span class="icon">
                                        <i class="fab fa-linkedin-in"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <!-- .header-menu-icons -->
                        <ul class="nav-menu-dropdown style-2 global-style on-click">
                            <li>
                                <a href="javascript:void(0);">
                                    <span class="icon">
                                        <i class="icon-globe"></i>
                                    </span>عالميا</a>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);">أفريقيا</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">أوروبا</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">أمريكا</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- .header-menu-icons -->
                        <ul class="nav-menu-dropdown style-2 on-click">
                            <li>
                                @if (App::getLocale() == 'ar')
                                    {{ LaravelLocalization::getCurrentLocaleName() }}
                                    <a href="javascript:void(0);">
                                        <img src="{{ URL::asset('assets/images/flags/EG.png') }}" alt="">
                                    </a>
                                @else
                                    {{ LaravelLocalization::getCurrentLocaleName() }}
                                    <a href="javascript:void(0);">
                                        <img src="{{ URL::asset('assets/images/flags/US.png') }}" alt="">
                                    </a>
                                @endif
                                <ul>
                                    <li>
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <a  hreflang="{{ $localeCode }}"
                                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        @endforeach
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- .header-menu-icons -->
                    </div>
                    <!-- .level-right -->
                </div>
                <!-- .level -->
            </div>
            <!-- #header-top-inner -->
        </div>
        <!-- #header-top -->
    </div>
    <!-- #header-top-wrap -->
    <div id="header-wrap" class="is-clearfix">
        <header id="header" class="site-header">
            <div id="header-inner" class="site-header-inner container">
                <div class="level">
                    <div class="level-left">
                        <div id="header-logo" class="site-logo ">
                            <div id="logo-inner" class="site-logo-inner">
                                <a href="./index.html">
                                    <img alt="Joo - Niche Multi-Purpose HTML Template"
                                        src="{{ asset('front/images/logo/logo2.png') }}">
                                    <span class="logo-text">{{ __('front.mora') }}</span>
                                </a>
                            </div>
                            <!-- #logo-inner -->
                        </div>
                        <!-- #header-logo -->
                    </div>
                    <!-- .level-left -->
                    <div class="level-right">
                        <div class="nav-wrap">
                            <nav class="main-navigation right">
                                <ul class="menu">
                                    <li>
                                        <a href="./index.html">{{ __('front.home') }}</a>
                                    </li>
                                    <li>
                                        <a href="./pages/index.html">{{ __('front.sections') }}</a>
                                    </li>
                                    <li>
                                        <a href="./features/index.html">{{ __('front.services') }}</a>
                                    </li>
                                    <li>
                                        <a href="./portfolio/index.html">{{ __('front.products') }}</a>
                                    </li>
                                    <li>
                                        <a href="./blog/index.html">{{ __('front.contactus') }}</a>
                                    </li>

                                    @guest
                                    <li class="btn-cta"><a href="/login"><span>Login</span></a></li>
                                    <li class="btn-cta"><a href="/register"><span>register</span></a></li>
                                    @endguest
                                    @auth
                                        <li class="has-dropdown">
                                            <a href="#">welcome back : {{ \Str::limit(auth()->user()->name, 10) }}</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Profile</a></li>
                                                @if(auth()->user()->admin==1)
                                                   <li><a href="{{ route('dashboard.index') }}">My Dashboard</a></li>
                                                @endif
                                                <li>
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                        <i class="bx bx-log-out"></i>log out
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    @endauth
                                </ul>
                            </nav>
                            <!-- #site-navigation -->
                        </div>
                        <!-- #nav-wrap -->
                        <ul class="header-menu-icons default ">
                            <li class="dropdown-search-form search-style-2">
                                <a href="javascript:void(0);">
                                    <span class="icon">
                                        <i class="icon-magnifier"></i>
                                    </span>
                                </a>
                                <ul>
                                    <li class="header widget-form">
                                        <form>
                                            <div class="field">
                                                <div class="control is-expanded">
                                                    <input class="input" type="text" placeholder="إبحث...">
                                                    <button type="submit" class="button">
                                                        <span class="icon">
                                                            <i class="icon-magnifier"></i>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- .header-menu-icons -->
                        <a href="#quote" class="button is-white">عرض أسعار</a>
                        <div class="modal search-form-overlay">
                            <div class="modal-background"></div>
                            <div class="modal-content">
                                <form class="widget-form">
                                    <div class="field">
                                        <div class="control is-expanded">
                                            <input class="input" type="text" placeholder="إبحث...">
                                            <button type="submit" class="button">
                                                <span class="icon">
                                                    <i class="icon-magnifier"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <button class="modal-close is-large" aria-label="close"></button>
                        </div>
                        <!-- .modal.search-form-overlay -->
                    </div>
                    <!-- .level-right -->
                </div>
                <!-- .level -->
            </div>
            <!-- #header-inner -->
        </header>
        <!-- #header -->
    </div>
    <!-- #header-wrap -->
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero slider is-clearfix ">
                    <h2 class="display-none">slider</h2>
                    <div class="rev_slider_wrapper fullscreen-container ">
                        <div id="rev_slider_1" class="rev_slider tp-overflow-hidden fullscreenbanner"
                            data-version="5.4.7" style="display:none">
                            <a href="#welcome" class="slider-scroll-down">اقرأ المزيد</a>
                            <ul>
                                @foreach ( $servs as $serv)
                                <li data-transition="fade" data-thumb="{{ asset('uploads/serv/'.$serv->image) }}"
                                    data-title="{{ $serv->serve_name }}" data-param1="{{ $serv->desc }}."
                                    data-param2="{{ asset('uploads/serv/'.$serv->image) }} ">
                                    <img alt="Joo - Niche Multi-Purpose HTML Template" class="rev-slidebg"
                                        src="{{asset('uploads/serv/'.$serv->image) }}" data-bgposition="center center"
                                        data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="off"
                                        data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100"
                                        data-scaleend="115" data-rotatestart="0" data-rotateend="0"
                                        data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="15">
                                    <div class="tp-caption tp-resizeme small_text top" data-x="right"
                                        data-hoffset="['405','405','0','0']" data-y="center"
                                        data-voffset="['-152','-152','-152','-152']" data-width="none"
                                        data-height="none" data-whitespace="nowrap" data-type="text"
                                        data-responsive-offset="on"
                                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                        data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"> البضائع اللوجستية </div>
                                    <div class="tp-caption tp-resizeme large_text" data-x="right"
                                        data-hoffset="['405','405','0','0']" data-y="center"
                                        data-voffset="['-56','-56','-56','-56']" data-width="none" data-height="none"
                                        data-whitespace="nowrap" data-type="text" data-responsive-offset="on"
                                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                        data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"> خدمات التوصيل المحلى والدولى
                                        <br> لكل عمليات النقل السريع.
                                    </div>
                                    <a class="tp-caption tp-resizeme button is-primary" href="#"
                                        data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                        data-x="right" data-hoffset="['402','402','0','0']" data-y="center"
                                        data-voffset="['82','82','0','0']" data-type="button">
                                        <span>معرفة المزيد</span>
                                        <span class="icon is-small">
                                            <i class="ion-ios-arrow-round-forward"></i>
                                        </span>
                                    </a>
                                </li>
                                @endforeach
                                <!-- slide -->

                            </ul>
                        </div>
                        <!-- .rev_slider -->
                    </div>
                    <!-- .rev_slider_wrapper -->
                </section>
                <!-- .slider -->
            </div>
            <!-- #header-bottom-inner -->
        </div>
        <!-- #header-bottom -->
    </div>
    <!-- #header-bottom-wrap -->
