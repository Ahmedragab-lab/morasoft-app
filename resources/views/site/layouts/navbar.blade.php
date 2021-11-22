<div id="header-wrap" class="is-clearfix">
    <header id="header" class="site-header">
        <div id="header-inner" class="site-header-inner container">
            <div class="level">
                <div class="level-left">
                    <div id="header-logo" class="site-logo ">
                        <div id="logo-inner" class="site-logo-inner">
                            <a href="{{ route('front.index') }}">
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
                            <ul class="menu"
                                <li>
                                    <a href="{{ route('front.index') }}">{{ __('front.home') }}</a>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#"> اشحن اونلاين</a>
                                    <ul class="dropdown">
                                        <li><a href="#"><i class=" far fa-address-card"></i> قدم طلبك</a></li>
                                        <li><a href="#"><i class=" far fa-comment-dots"></i> تتبع الشحنة</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#"> {{ __('front.services') }}</a>
                                    <ul class="dropdown">
                                        @foreach ( \App\Models\Service::all() as $service)
                                           <li><a href="{{ route('allservices.show',$service->id) }}"> {{ $service->serve_name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#"> {{ __('front.sections') }}</a>
                                    <ul class="dropdown">
                                        @foreach (\App\Models\Section::all() as $section)
                                        <li><a href="{{ route('allsections.show',$section->id) }}">{{$section->section_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('allproducts.index')}}">{{ __('front.products') }}</a>
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
                                        <a href="#"><img src={{ asset('uploads/user-img/'.Auth::user()->image) }} width="50" class="rounded-circle" > {{ \Str::limit(auth()->user()->name, 10) }}</a>
                                        <ul class="dropdown">
                                            <li><a href="#"><i class=" far fa-address-card"></i> Profile</a></li>
                                            <li><a href="#"><i class=" far fa-comment-dots"></i> my orders</a></li>
                                            <li><a href="{{ route('mycart.index')}}"><i class="icon-basket"></i> my cart</a></li>
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                    <i class="far fa-trash-alt"></i> log out
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="#"> <i class="fas fa-bell "></i></a>
                                        <ul class="dropdown">
                                            <li><a href="#"><img src={{ asset('assets/images/profile_img.jpg') }} width="30" class="rounded-circle" > Asmaa Hosny</a></li>
                                            <li><a href="#"><img src={{ asset('assets/images/profile_img.jpg') }} width="30" class="rounded-circle" > Asmaa Hosny</a></li>
                                        </ul>
                                    </li>
                                @endauth


                            </ul>
                        </nav>
                        <!-- #site-navigation -->
                    </div>
                    <!-- #nav-wrap -->
                    {{-- <ul class="header-menu-icons default ">
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
                    </ul> --}}
                    <!-- .header-menu-icons -->
                    {{-- <a href="#quote" class="button is-white">عرض أسعار</a>
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
                    </div> --}}
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
