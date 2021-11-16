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
                    <a href="mailto:info@company.com">
                      <span class="icon">
                        <i class="icon-envelope"></i>
                      </span> info@company.com </a>
                  </li>
                  <li>
                    <a href="tel:+66396847263">
                      <span class="icon">
                        <i class="icon-phone"></i>
                      </span> +800-987-65-43 </a>
                  </li>
                </ul>
              </div>
              <!-- .level-left -->
              <div class="level-right">
                <ul class="header-menu-icons social">
                  <li>
                    <a href="#" target="_blank">
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
                    <a href="javascript:void(0);">
                      <span class="flag-icon flag-icon-gb"></span>ع</a>
                    <ul>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="flag-icon flag-icon-es"></span>Es</a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="flag-icon flag-icon-tr"></span>tr</a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="flag-icon flag-icon-eg"></span>En</a>
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
                      <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/logo/logo2.png">
                      <span class="logo-text">خدمات النقل</span>
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
                    @foreach ($nav_Data as $nav_Datas)
                        <li>
                        <a href="./index.html">{{$nav_Datas->name}}</a>
                      </li>
                    @endforeach
                      {{-- {<li>
                        <a href="./index.html">الرئيسية</a>
                      </li> --}}
                      {{-- <li> --}}
                        {{-- <a href="./features/index.html">المميزات</a> --}}
                        {{-- <ul>
                          <li>
                            <a href="javascript:void(0);">header
                              <span class="tag menu-mark is-secondary">wow</span>
                            </a>
                            <ul>
                              <li>
                                <a href="./features/header/logo-center.html">logo center
                                  <span class="tag menu-mark is-secondary">old</span>
                                </a>
                              </li>
                              <li>
                                <a href="./features/header/logo-left.html">logo left
                                  <span class="tag menu-mark is-success">new</span>
                                </a>
                              </li>
                              <li>
                                <a href="./features/header/logo-right.html">logo right
                                  <span class="tag menu-mark is-danger">hot</span>
                                </a>
                              </li>
                              <li>
                                <a href="./features/header/logo-center-menu-center.html">logo &amp; menu center</a>
                              </li>
                              <li>
                                <a href="./features/header/logo-top.html">logo top
                                  <span class="tag menu-mark is-warning">hot</span>
                                </a>
                                <ul>
                                  <li>
                                    <a href="./features/header/logo-top-menu-with-icons.html">&amp; menu with icons</a>
                                  </li>
                                  <li>
                                    <a href="./features/header/logo-top-with-icons.html">&amp; logo with icons</a>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a href="./features/header/menu-with-buttons.html">menu with buttons</a>
                                <ul>
                                  <li>
                                    <a href="./features/header/menu-center-with-buttons.html">&amp; menu center</a>
                                  </li>
                                  <li>
                                    <a href="./features/header/menu-left-with-buttons.html">&amp; menu left</a>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a href="./features/header/menu-with-icons.html">menu with icons</a>
                                <ul>
                                  <li>
                                    <a href="./features/header/menu-with-icons-2.html">menu with icons 2</a>
                                  </li>
                                  <li>
                                    <a href="./features/header/menu-with-icons-2-search-default.html">search default style</a>
                                  </li>
                                  <li>
                                    <a href="./features/header/menu-center-with-icons.html">&amp; menu center</a>
                                  </li>
                                  <li>
                                    <a href="./features/header/menu-left-with-icons.html">&amp; menu left</a>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a href="./features/header/menu-with-language-switcher.html">language switcher</a>
                                <ul>
                                  <li>
                                    <a href="./features/header/menu-with-language-switcher-click.html">switcher on click</a>
                                  </li>
                                  <li>
                                    <a href="./features/header/menu-with-language-switcher-2.html">language switcher 2</a>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a href="./features/header/menu-top.html">menu top</a>
                                <ul>
                                  <li>
                                    <a href="./features/header/menu-top-logo-with-icons.html">&amp; logo with icons</a>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a href="javascript:void(0);">styles</a>
                                <ul>
                                  <li>
                                    <a href="./features/header/styles/full-width.html">full width</a>
                                    <ul>
                                      <li>
                                        <a href="./features/header/styles/full-width-transparent.html">transparent</a>
                                      </li>
                                      <li>
                                        <a href="./features/header/styles/full-width-transparent-border.html">transparent border</a>
                                      </li>
                                      <li>
                                        <a href="./features/header/styles/full-width-background-primary.html">background primary</a>
                                      </li>
                                      <li>
                                        <a href="./features/header/styles/full-width-background-dark.html">background dark</a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="./features/header/styles/transparent.html">transparent</a>
                                    <ul>
                                      <li>
                                        <a href="./features/header/styles/transparent-overlay.html">transparent overlay</a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="./features/header/styles/background-primary-color.html">background color</a>
                                    <ul>
                                      <li>
                                        <a href="./features/header/styles/background-primary-color.html">primary color</a>
                                      </li>
                                      <li>
                                        <a href="./features/header/styles/background-dark-color.html">dark color</a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="./features/header/styles/center-overlay.html">center overlay</a>
                                  </li>
                                  <li>
                                    <a href="javascript:void(0);">menu</a>
                                    <ul>
                                      <li>
                                        <a href="./features/header/styles/menu-dropdown-icon.html">dropdown icon</a>
                                      </li>
                                      <li>
                                        <a href="./features/header/styles/menu-icons.html">with icons</a>
                                      </li>
                                      <li>
                                        <a href="./features/header/styles/menu-border-bottom.html">with border</a>
                                        <ul>
                                          <li>
                                            <a href="./features/header/styles/menu-border-bottom.html">border bottom</a>
                                          </li>
                                          <li>
                                            <a href="./features/header/styles/menu-border-top.html">border top</a>
                                          </li>
                                        </ul>
                                      </li>
                                      <li>
                                        <a href="./features/header/styles/menu-background-primary.html">with background</a>
                                        <ul>
                                          <li>
                                            <a href="./features/header/styles/menu-background-primary.html">primary color</a>
                                          </li>
                                          <li>
                                            <a href="./features/header/styles/menu-background-dark.html">dark color</a>
                                          </li>
                                        </ul>
                                      </li>
                                      <li>
                                        <a href="./features/header/styles/menu-separator-dots.html">with separator</a>
                                        <ul>
                                          <li>
                                            <a href="./features/header/styles/menu-separator-dots.html">with dots</a>
                                          </li>
                                          <li>
                                            <a href="./features/header/styles/menu-separator-line.html">with line</a>
                                          </li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="javascript:void(0);">dropdown menu</a>
                                    <ul>
                                      <li>
                                        <a href="./features/header/styles/dropdown-menu-mark.html">with mark</a>
                                      </li>
                                      <li>
                                        <a href="./features/header/styles/dropdown-menu-primary.html">background primary</a>
                                      </li>
                                      <li>
                                        <a href="./features/header/styles/dropdown-menu-dark.html">background dark</a>
                                      </li>
                                    </ul>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="javascript:void(0);">side navigation</a>
                            <ul>
                              <li>
                                <a href="./features/side-navigation/side-left.html">side left</a>
                              </li>
                              <li>
                                <a href="./features/side-navigation/side-right.html">side right</a>
                              </li>
                              <li>
                                <a href="./features/side-navigation/side-mini-left.html">side mini left</a>
                              </li>
                              <li>
                                <a href="./features/side-navigation/side-mini-right.html">side mini right</a>
                              </li>
                              <li>
                                <a href="./features/side-navigation/side-mini-with-icons.html">side mini with icons</a>
                              </li>
                              <li>
                                <a href="./features/side-navigation/side-mini-logo-center.html">side mini logo center</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);">styles</a>
                                <ul>
                                  <li>
                                    <a href="javascript:void(0);">content align</a>
                                    <ul>
                                      <li>
                                        <a href="./features/side-navigation/styles/content-align-center.html">center</a>
                                      </li>
                                      <li>
                                        <a href="./features/side-navigation/styles/content-align-right.html">right</a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="javascript:void(0);">background color</a>
                                    <ul>
                                      <li>
                                        <a href="./features/side-navigation/styles/background-color-primary.html">primary color</a>
                                      </li>
                                      <li>
                                        <a href="./features/side-navigation/styles/background-color-dark.html">dark color</a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="javascript:void(0);">logo background</a>
                                    <ul>
                                      <li>
                                        <a href="./features/side-navigation/styles/logo-background-color-primary.html">primary color</a>
                                      </li>
                                      <li>
                                        <a href="./features/side-navigation/styles/logo-background-color-dark.html">dark color</a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="javascript:void(0);">menu</a>
                                    <ul>
                                      <li>
                                        <a href="./features/side-navigation/styles/menu-icons.html">with icons</a>
                                      </li>
                                      <li>
                                        <a href="./features/side-navigation/styles/menu-background-primary.html">with background</a>
                                        <ul>
                                          <li>
                                            <a href="./features/side-navigation/styles/menu-background-primary.html">primary color</a>
                                          </li>
                                          <li>
                                            <a href="./features/side-navigation/styles/menu-background-dark.html">dark color</a>
                                          </li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a href="javascript:void(0);">mini styles</a>
                                <ul>
                                  <li>
                                    <a href="javascript:void(0);">background color</a>
                                    <ul>
                                      <li>
                                        <a href="./features/side-navigation/styles/mini-background-color-primary.html">primary color</a>
                                      </li>
                                      <li>
                                        <a href="./features/side-navigation/styles/mini-background-color-dark.html">dark color</a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="javascript:void(0);">logo background</a>
                                    <ul>
                                      <li>
                                        <a href="./features/side-navigation/styles/mini-logo-background-color-primary.html">primary color</a>
                                      </li>
                                      <li>
                                        <a href="./features/side-navigation/styles/mini-logo-background-color-dark.html">dark color</a>
                                      </li>
                                    </ul>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="javascript:void(0);">hamburger menu</a>
                            <ul>
                              <li>
                                <a href="./features/hamburger-menu/slide-up.html">slide up</a>
                                <ul>
                                  <li>
                                    <a href="./features/hamburger-menu/slide-up-icon-left.html">&amp; icon left</a>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a href="./features/hamburger-menu/slide-down.html">slide down</a>
                                <ul>
                                  <li>
                                    <a href="./features/hamburger-menu/slide-down-icon-left.html">&amp; icon left</a>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a href="./features/hamburger-menu/slide-right.html">slide right</a>
                                <ul>
                                  <li>
                                    <a href="./features/hamburger-menu/slide-right-push.html">push off-canvas</a>
                                  </li>
                                  <li>
                                    <a href="./features/hamburger-menu/slide-right-overlay-full-width.html">overlay full-width</a>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a href="./features/hamburger-menu/slide-left.html">slide left</a>
                                <ul>
                                  <li>
                                    <a href="./features/hamburger-menu/slide-left-push.html">push off-canvas</a>
                                  </li>
                                  <li>
                                    <a href="./features/hamburger-menu/slide-left-overlay-full-width.html">overlay full-width</a>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a href="javascript:void(0);">styles</a>
                                <ul>
                                  <li>
                                    <a href="./features/hamburger-menu/styles/transparent.html">transparent</a>
                                  </li>
                                  <li>
                                    <a href="javascript:void(0);">icon color</a>
                                    <ul>
                                      <li>
                                        <a href="./features/hamburger-menu/styles/icon-primary-color.html">primary</a>
                                      </li>
                                      <li>
                                        <a href="./features/hamburger-menu/styles/icon-dark-color.html">dark</a>
                                      </li>
                                      <li>
                                        <a href="./features/hamburger-menu/styles/icon-white-color.html">white</a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="javascript:void(0);">icon background</a>
                                    <ul>
                                      <li>
                                        <a href="./features/hamburger-menu/styles/icon-background-primary-color.html">primary color</a>
                                      </li>
                                      <li>
                                        <a href="./features/hamburger-menu/styles/icon-background-dark-color.html">dark color</a>
                                      </li>
                                    </ul>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="./features/sticky-navigation/show-on-scroll.html">sticky navigation</a>
                            <ul>
                              <li>
                                <a href="./features/sticky-navigation/show-on-scroll.html">show on scroll</a>
                              </li>
                              <li>
                                <a href="./features/sticky-navigation/hide-on-scroll.html">hide on scroll</a>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="./features/one-page-navigation.html">one-page navigation</a>
                          </li>
                          <li>
                            <a href="./features/top-bar/default.html">top bar
                              <span class="tag menu-mark is-primary">new</span>
                            </a>
                            <ul>
                              <li>
                                <a href="./features/top-bar/default.html">default</a>
                              </li>
                              <li>
                                <a href="./features/top-bar/language-switcher.html">language switcher</a>
                              </li>
                              <li>
                                <a href="./features/top-bar/menu.html">with menu</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);">styles</a>
                                <ul>
                                  <li>
                                    <a href="./features/top-bar/styles/background-primary-color.html">background color</a>
                                    <ul>
                                      <li>
                                        <a href="./features/top-bar/styles/background-primary-color.html">primary color</a>
                                      </li>
                                      <li>
                                        <a href="./features/top-bar/styles/background-dark-color.html">dark color</a>
                                      </li>
                                    </ul>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="javascript:void(0);">sliders &amp; intro</a>
                            <ul>
                              <li>
                                <a href="./features/sliders-intro/slider-revolution.html">revolution slider</a>
                              </li>
                              <li>
                                <a href="./features/sliders-intro/slider-flex.html">flex slider</a>
                              </li>
                              <li>
                                <a href="./features/sliders-intro/slider-owl.html">owl slider</a>
                              </li>
                              <li>
                                <a href="./features/sliders-intro/intro-image.html">image intro</a>
                              </li>
                              <li>
                                <a href="./features/sliders-intro/intro-parallax.html">parallax intro</a>
                              </li>
                              <li>
                                <a href="./features/sliders-intro/intro-gallery.html">gallery intro</a>
                              </li>
                              <li>
                                <a href="./features/sliders-intro/intro-video.html">video intro</a>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="javascript:void(0);">footer</a>
                            <ul>
                              <li>
                                <a href="./features/footer/default.html#footer">default</a>
                              </li>
                              <li>
                                <a href="./features/footer/widgets.html#footer">widgets</a>
                                <ul>
                                  <li>
                                    <a href="./features/footer/widgets.html#footer">widgets 1</a>
                                  </li>
                                  <li>
                                    <a href="./features/footer/widgets-2.html#footer">widgets 2</a>
                                  </li>
                                  <li>
                                    <a href="./features/footer/widgets-3.html#footer">widgets 3</a>
                                  </li>
                                  <li>
                                    <a href="./features/footer/widgets-4.html#footer">widgets 4</a>
                                  </li>
                                  <li>
                                    <a href="./features/footer/widgets-5.html#footer">widgets 5</a>
                                  </li>
                                  <li>
                                    <a href="./features/footer/widgets-6.html#footer">widgets 6</a>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a href="javascript:void(0);">footer top</a>
                                <ul>
                                  <li>
                                    <a href="./features/footer/top/instagram-feed.html#footer-top">instagram feed</a>
                                  </li>
                                  <li>
                                    <a href="./features/footer/top/call-to-action.html#footer-top">call to action</a>
                                  </li>
                                  <li>
                                    <a href="./features/footer/top/google-map.html#footer-top">google map</a>
                                  </li>
                                  <li>
                                    <a href="./features/footer/top/clients.html#footer-top">clients</a>
                                  </li>
                                  <li>
                                    <a href="./features/footer/top/subscribe.html#footer-top">subscribe</a>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a href="javascript:void(0);">footer bottom</a>
                                <ul>
                                  <li>
                                    <a href="./features/footer/bottom/default.html#footer-bottom">default</a>
                                  </li>
                                  <li>
                                    <a href="./features/footer/bottom/with-icons.html#footer-bottom">with icons</a>
                                  </li>
                                  <li>
                                    <a href="./features/footer/bottom/with-icons-center.html#footer-bottom">center icons</a>
                                  </li>
                                  <li>
                                    <a href="./features/footer/bottom/with-menu.html#footer-bottom">with menu</a>
                                  </li>
                                  <li>
                                    <a href="./features/footer/bottom/with-menu-icons.html#footer-bottom">menu &amp; icons</a>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a href="javascript:void(0);">styles</a>
                                <ul>
                                  <li>
                                    <a href="./features/footer/styles/background-primary-color.html#footer">background color</a>
                                    <ul>
                                      <li>
                                        <a href="./features/footer/styles/background-primary-color.html#footer">primary color</a>
                                      </li>
                                      <li>
                                        <a href="./features/footer/styles/background-dark-color.html#footer">dark color</a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="./features/footer/styles/footer-reveal.html">footer reveal</a>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="javascript:void(0);">page title</a>
                            <ul>
                              <li>
                                <a href="./features/page-title/center-alignment.html">center alignment</a>
                                <ul>
                                  <li>
                                    <a href="./features/page-title/center-alignment-breadcrumb.html">with breadcrumb</a>
                                  </li>
                                  <li>
                                    <a href="./features/page-title/center-alignment-icons.html">with icons</a>
                                  </li>
                                  <li>
                                    <a href="./features/page-title/center-alignment-buttons.html">with buttons</a>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a href="./features/page-title/left-alignment.html">left alignment</a>
                                <ul>
                                  <li>
                                    <a href="./features/page-title/left-alignment-icons.html">with icons</a>
                                  </li>
                                  <li>
                                    <a href="./features/page-title/left-alignment-buttons.html">with buttons</a>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a href="./features/page-title/right-alignment.html">right alignment</a>
                                <ul>
                                  <li>
                                    <a href="./features/page-title/right-alignment-icons.html">with icons</a>
                                  </li>
                                  <li>
                                    <a href="./features/page-title/right-alignment-buttons.html">with buttons</a>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a href="javascript:void(0);">styles</a>
                                <ul>
                                  <li>
                                    <a href="javascript:void(0);">background color</a>
                                    <ul>
                                      <li>
                                        <a href="./features/page-title/styles/background-primary-color.html">primary color</a>
                                      </li>
                                      <li>
                                        <a href="./features/page-title/styles/background-primary-color-gradient.html">primary gradient</a>
                                      </li>
                                      <li>
                                        <a href="./features/page-title/styles/background-dark-color.html">dark color</a>
                                      </li>
                                      <li>
                                        <a href="./features/page-title/styles/background-dark-color-gradient.html">dark gradient</a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="./features/page-title/styles/background-image.html">background image</a>
                                  </li>
                                  <li>
                                    <a href="./features/page-title/styles/background-parallax.html">background parallax</a>
                                  </li>
                                  <li>
                                    <a href="./features/page-title/styles/background-ken-burns.html">background ken burns</a>
                                  </li>
                                  <li>
                                    <a href="./features/page-title/styles/background-video.html">background video</a>
                                    <ul>
                                      <li>
                                        <a href="./features/page-title/styles/background-video-muted.html">muted video</a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="./features/page-title/styles/transparent-header.html">transparent header</a>
                                  </li>
                                  <li>
                                    <a href="./features/page-title/styles/mini-height.html">mini height</a>
                                  </li>
                                  <li>
                                    <a href="./features/page-title/styles/full-width.html">full width</a>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a href="javascript:void(0);">breadcrumb styles</a>
                                <ul>
                                  <li>
                                    <a href="./features/page-title/breadcrumb-styles/default-separator.html">default separator</a>
                                  </li>
                                  <li>
                                    <a href="./features/page-title/breadcrumb-styles/bullet-separator.html">bullet separator</a>
                                  </li>
                                  <li>
                                    <a href="./features/page-title/breadcrumb-styles/arrow-separator.html">arrow separator</a>
                                  </li>
                                  <li>
                                    <a href="./features/page-title/breadcrumb-styles/dot-separator.html">dot separator</a>
                                  </li>
                                  <li>
                                    <a href="./features/page-title/breadcrumb-styles/succeeds-separator.html">succeeds separator</a>
                                  </li>
                                  <li>
                                    <a href="./features/page-title/breadcrumb-styles/with-icons.html">with icons</a>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="javascript:void(0);">columns</a>
                            <ul>
                              <li>
                                <a href="./features/columns/basics.html">basics</a>
                              </li>
                              <li>
                                <a href="./features/columns/sizes.html">sizes</a>
                              </li>
                              <li>
                                <a href="./features/columns/responsiveness.html">responsiveness</a>
                              </li>
                              <li>
                                <a href="./features/columns/nesting.html">nesting</a>
                              </li>
                              <li>
                                <a href="./features/columns/gap.html">gap</a>
                              </li>
                              <li>
                                <a href="./features/columns/options.html">options</a>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="javascript:void(0);">layout</a>
                            <ul>
                              <li>
                                <a href="./features/layout/boxed.html">boxed</a>
                              </li>
                              <li>
                                <a href="./features/layout/container.html">container</a>
                              </li>
                              <li>
                                <a href="./features/layout/level.html">level</a>
                              </li>
                              <li>
                                <a href="./features/layout/media-object.html">media object</a>
                              </li>
                              <li>
                                <a href="./features/layout/hero.html">hero</a>
                              </li>
                              <li>
                                <a href="./features/layout/section.html">section</a>
                              </li>
                              <li>
                                <a href="./features/layout/tiles.html">tiles</a>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="javascript:void(0);">form</a>
                            <ul>
                              <li>
                                <a href="./features/form/general.html">general</a>
                              </li>
                              <li>
                                <a href="./features/form/input.html">input</a>
                              </li>
                              <li>
                                <a href="./features/form/tagsinput.html">tags input</a>
                              </li>
                              <li>
                                <a href="./features/form/textarea.html">textarea</a>
                              </li>
                              <li>
                                <a href="./features/form/select.html">select</a>
                              </li>
                              <li>
                                <a href="./features/form/checkbox.html">checkbox</a>
                              </li>
                              <li>
                                <a href="./features/form/radio.html">radio</a>
                              </li>
                              <li>
                                <a href="./features/form/switch.html">switch</a>
                              </li>
                              <li>
                                <a href="./features/form/slider.html">slider</a>
                              </li>
                              <li>
                                <a href="./features/form/file.html">file</a>
                              </li>
                            </ul>
                          </li>
                        </ul> --}}
                      {{-- </li>
                      <li>
                        <a href="./pages/index.html">الصفحات</a>
                      </li>
                      <li>
                        <a href="./portfolio/index.html">المشاريع</a>
                      </li>
                      <li>
                        <a href="./blog/index.html">الاخبار</a>
                      </li>
                      <li class="mega-menu">
                        <a href="./elements/index.html">العناصر</a>
                      </li> --}}
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
                <div id="rev_slider_1" class="rev_slider tp-overflow-hidden fullscreenbanner" data-version="5.4.7" style="display:none">
                  <a href="#welcome" class="slider-scroll-down">اقرأ المزيد</a>
                  <ul>
                    @foreach ( $servs as $serv)
                    <li data-transition="fade" data-thumb="{{ asset('assets/images/slider_01.jpg') }}" data-title="{{ $serv->serve_name }}" data-param1="{{ $serv->desc }}." data-param2="{{ asset('uploads/serv/'.$serv->image) }} " >
                      <img alt="Joo - Niche Multi-Purpose HTML Template" class="rev-slidebg" src="{{ asset('assets/images/slider_01.jpg') }}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone"
                        data-scalestart="100" data-scaleend="115" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="15">
                      <div class="tp-caption tp-resizeme small_text top" data-x="right" data-hoffset="['405','405','0','0']" data-y="center" data-voffset="['-152','-152','-152','-152']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                        data-responsive-offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"> البضائع اللوجستية </div>
                      <div class="tp-caption tp-resizeme large_text" data-x="right" data-hoffset="['405','405','0','0']" data-y="center" data-voffset="['-56','-56','-56','-56']" data-width="none" data-height="none" data-whitespace="nowrap"
                        data-type="text" data-responsive-offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"> خدمات التوصيل المحلى والدولى
                        <br> لكل عمليات النقل السريع. </div>
                      <a class="tp-caption tp-resizeme button is-primary" href="#" data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-x="right" data-hoffset="['402','402','0','0']" data-y="center" data-voffset="['82','82','0','0']" data-type="button">
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
