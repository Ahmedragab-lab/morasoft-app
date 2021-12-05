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
                            <ul class="menu">
                                <li>
                                    <a  href="{{ route('front.index') }}">{{ __('front.home') }}</a>
                                </li>
                                <li class="dropdown dropdown-notification nav-item  dropdown-notifications">
                                    <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                                        <i class="fa fa-bell"> </i>
                                        <span
                                            class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow   notif-count"
                                            data-count="9">9</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                        <li class="dropdown-menu-header">
                                            <h6 class="dropdown-header m-0 text-center">
                                                <span class="grey darken-2 text-center"> الرسائل</span>
                                            </h6>
                                        </li>
                                        <li class="scrollable-container ps-container ps-active-y media-list w-100">
                                            <a href="">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <h6 class="media-heading text-right ">عنوان الاشعار </h6>
                                                        <p class="notification-text font-small-3 text-muted text-right"> نص الاشعار</p>
                                                        <small style="direction: ltr;">
                                                            <p class=" text-muted text-right"
                                                                  style="direction: ltr;"> 20-05-2020 - 06:00 pm
                                                            </p>
                                                            <br>
        
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
        
                                        </li>
                                        <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center"
                                                                            href=""> جميع الاشعارات </a>
                                        </li>
                                    </ul>
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

                                    {{-- <form action ={{url('/contact')}} method = "post" class="form_horezintal"> --}}


                                    <a href="{{ route('allfeedback.index')}}">{{ __('front.feedback') }} </a>
                                </li>
                                @auth()

                                <li>
                                    <a href="{{ route('contact.index')}}">{{ __('front.contactus') }}</a>
                                </li>
                                @endauth
                                <li class="has-dropdown">
                                    <a href="#"> اشحن اونلاين</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/reserveServ') }}"<i class=" far fa-address-card"></i> قدم طلبك</a></li>
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
                                          <span class="icon notif-count">
                                            <span class="badge" data-badge="1" data-count="1">
                                              <i class="icon-bell"></i>
                                            </span>
                                          </span>
                                        </a>
                                        <ul class="dropdown-notification scrollable-container">
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
