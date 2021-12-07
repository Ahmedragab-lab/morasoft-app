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
                                {{-- <span class="logo-text">{{ $settings->comp_name }}</span> --}}
                                {{-- <span class="logo-text">شركة مورا سوفت</span> --}}

                                {{-- <img alt="Joo - Niche Multi-Purpose HTML Template"
                                    src="{{ asset('assets/images/logo8.png') }}" width="200" height="200">  --}}
                              {{-- <span> <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="truck-moving" class="svg-inline--fa fa-truck-moving fa-w-1 text-dark"
                               role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path
                                fill="currentColor" d="M621.3 237.3l-58.5-58.5c-12-12-28.3-18.7-45.3-18.7H480V64c0-17.7-14.3-32-32-32H32C14.3 32 0 46.3 0 64v336c0 44.2 35.8 80 80 80 26.3 0 49.4-12.9 64-32.4 14.6 19.6 37.7 32.4 64 32.4 44.2 0 80-35.8 80-80 0-5.5-.6-10.8-1.6-16h163.2c-1.1 5.2-1.6 10.5-1.6 16 0 44.2 35.8 80 80 80s80-35.8 80-80c0-5.5-.6-10.8-1.6-16H624c8.8 0 16-7.2 16-16v-85.5c0-17-6.7-33.2-18.7-45.2zM80 432c-17.6 0-32-14.4-32-32s14.4-32 32-32 32 14.4 32 32-14.4 32-32 32zm128 0c-17.6 0-32-14.4-32-32s14.4-32 32-32 32 14.4 32 32-14.4 32-32 32zm272-224h37.5c4.3 0 8.3 1.7 11.3 4.7l43.3 43.3H480v-48zm48 224c-17.6 0-32-14.4-32-32s14.4-32 32-32 32 14.4 32 32-14.4 32-32 32z"></path></svg></span> --}}
                                <i class="fas fa-truck-moving text-dark logo-text "></i>
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
                                    <a  href="{{ route('front.index') }}">{{ __('front.home') }}</a>
                                </li>

                                <li class="has-dropdown">
                                    <a href="#"> {{ __('front.services') }}</a>

                                    <ul class="dropdown">
                                        @foreach ( \App\Models\Service::where('status','1')->get() as $service)
                                           <li><a href="{{ route('allservices.show',$service->id) }}"> {{ $service->serve_name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#"> {{ __('front.sections') }}</a>
                                    <ul class="dropdown">
                                        @foreach (\App\Models\Section::where('status','1')->get() as $section)
                                        <li><a href="{{ route('allsections.show',$section->id) }}">{{$section->section_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('allproducts.index')}}">{{ __('front.products') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('allfeedback.index')}}">{{ __('front.feedback') }} </a>
                                </li>



                                <li>
                                    @auth()
                                    <a href="{{ route('contact.index')}}">{{ __('front.contactus') }}</a>
                                @endauth
                                </li>

                                <li class="has-dropdown">
                                    <a href="#"> اشحن اونلاين</a>
                                    <ul class="dropdown">
                                        <li>
                                            <a href="{{ url('/reserveServ') }}" >
                                              <i class=" far fa-address-card"></i> قدم طلبك
                                            </a>
                                        </li>
                                        <li><a href="#"><i class=" far fa-comment-dots"></i> تتبع الشحنة</a></li>
                                    </ul>
                                </li>
                                @guest
                                <li class="btn-cta"><a href="/login"><span>Login</span></a></li>
                                <li class="btn-cta"><a href="/register"><span>register</span></a></li>
                                @endguest
                                @auth
                                    <li class="has-dropdown">
                                        <a href="#"><img src={{ asset('uploads/user-img/'.Auth::user()->image) }} width="50" class="rounded-circle" >
                                             {{ \Str::limit(auth()->user()->fname, 10) }}
                                        </a>
                                        <ul class="dropdown">
                                            <li><a href="{{ route('userprofile.show',Auth::user()->id)}}"><i class=" far fa-address-card"></i> My Profile</a></li>
                                            {{-- <li><a href="#"><i class=" far fa-comment-dots"></i> my orders</a></li> --}}
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
                                        <a href="#"> <i class="fas fa-bell "></i>
                                            <span class="badge badge-danger badge-pill noti-icon-badge" id="noticount">
                                                {{ auth()->user()->unreadNotifications->count() }}
                                            </span>
                                        </a>
                                        <ul class="dropdown">
                                            <div id="unread">
                                                @foreach(auth()->user()->unreadNotifications as $notification)
                                                    <li>
                                                        <a href="{{ route('order_details.show',$notification->data['id']) }}">
                                                            <h4 style="color:rgb(0, 0, 0); font-size:15px;">
                                                                {{ $notification->data['title'] }}
                                                                <span style="color: rgb(226, 33, 33); font-size:20px; font-weight:bold;">
                                                                    {{ (number_format($notification->data['price'] ,2)) }} LE
                                                                </span>
                                                                of order number
                                                                <span style="color: rgb(33, 117, 226); font-size:15px;">
                                                                    {{ $notification->data['order_no'] }}
                                                                </span>
                                                                thank you
                                                                <span style="color: rgb(33, 123, 226); font-size:15px;">
                                                                {{ $notification->data['user'] }}
                                                                </span>
                                                            </h4>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </div>

                                        </ul>
                                    </li>

                                    <li class="dropdown-notifications">
                                        <a href="#" data-toggle="dropdown">
                                            <span class="icon ">
                                                <i class="icon-bell"></i>
                                                <span class="badge notif-count"
                                                 data-count="{{ \App\Models\Usernoti::count() }}" >{{ \App\Models\Usernoti::count() }}
                                                </span>
                                            </span>
                                        </a>

                                        {{-- <ul class="dropdown-notification scrollable-container wolfff"> --}}
                                          {{-- <li class="header">
                                              notifications(<span class="notif-count">{{ \App\Models\UserReqest::count() }}</span>)
                                          </li> --}}
                                          {{-- <li>
                                            <a href="javascript:void(0);">
                                              <strong>Jessica</strong> likes your photo
                                            </a>
                                          </li> --}}
                                          {{-- <li class="footer">
                                            <a href="javascript:void(0);">sell all</a>
                                          </li> --}}


                                        <ul class="dropdown-notification scrollable-container" >

                                            <li class="header">notifications(<span class="notif-count">{{ \App\Models\Usernoti::count() }}</span>)</li>
                                            @foreach (\App\Models\Usernoti::orderByDesc('id')->take(5)->get() as $noti)
                                                <li>
                                                    <a href="#">
                                                        <strong>{{ $noti->price }}</strong>
                                                    </a>
                                                </li>
                                            @endforeach

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
