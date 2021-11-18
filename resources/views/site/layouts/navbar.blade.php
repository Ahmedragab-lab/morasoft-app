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
