<div id="header-top-wrap" class="is-clearfix">
    <div id="header-top" class="site-header-top">
        <div id="header-top-inner" class="site-header-top-inner container">
            <div class="level">
                <div class="level-left">
                    <ul class="topbar-info ">
                      {{--   <li>
                            <a href="#">
                                <span class="icon">
                                    <i class="icon-clock"></i>
                                </span> سبت - خميس : 09:00 - 17:00 </a>
                        </li>--}}
                        <li>
                            <a href="#">
                                <span class="icon">
                                    <i class="icon-envelope"></i>
                                {{-- </span> {{ $settings->email }} </a> --}}
                            </span> email </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon">
                                    <i class="icon-phone"></i>
                                {{-- </span> {{ $settings->phone1 }} </a> --}}
                            </span> phone  </a>
                        </li>
                        {{-- <li>
                            <a href="#">
                                <span class="icon">
                                    <i class="icon-phone"></i>
                                </span> {{ $settings->phone2 }} </a>
                        </li> --}}
                    </ul>
                </div>
                <!-- .level-left -->
                <div class="level-right">
                    <ul class="header-menu-icons social">
                        <li>
                            {{-- <a href="{{ $settings->FBLink }}" target="_blank"> --}}
                                <a href="#" target="_blank">
                                <span class="icon">
                                    <i class="fab fa-facebook-f"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            {{-- <a href="{{ $settings->YoutubeLink }}" target="_blank"> --}}
                                <a href="#" target="_blank">
                                <span class="icon">
                                    <i class="fab fa-youtube"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            {{-- <a href="{{ $settings->LinLink }}" target="_blank"> --}}
                                <a href="#" target="_blank">
                                <span class="icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!-- .header-menu-icons -->
                    {{-- <ul class="nav-menu-dropdown style-2 global-style on-click">
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
                    </ul> --}}
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
