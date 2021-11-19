@extends('site.layouts.master')
@section('content')
<div id="header-bottom-wrap" class="is-clearfix">
    <div id="header-bottom" class="site-header-bottom">
      <div id="header-bottom-inner" class="site-header-bottom-inner ">
        <section class="hero page-title is-medium has-text-centered services">
          <div class="hero-body">
            <div class="container">
              <h1>Mora soft</h1>
              <h3>Services</h3>
            </div>
          </div>
        </section>
      </div>
    </div>
</div>
<div id="content-main-wrap" class="is-clearfix">
    <div id="content-area" class="site-content-area">
      <div id="content-area-inner" class="site-content-area-inner">
        <section class="section hero has-background-primary-light padding-bottom-none padding-top-none is-clearfix">
          <div>
            <div class="columns is-multiline is-variable is-8">
              <div class="column is-6-desktop is-12-tablet">
                <figure>
                  <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('uploads/serv/'.$service->image) }}" class="is-block">
                </figure>
              </div>
              <div class="column is-6-desktop is-12-tablet" data-aos="fade-up">
                <div style="padding: 30px 30% 100px 0;">
                  <br>
                  <br>
                  <br>
                  <br>
                  <h1 class="heading-title style-1 has-text-left">{{ $service->serve_name }}</h1>
                  <p class="heading-title-bottom has-text-left">{{ $service->desc }}
                    <br> accumsan, metus ultrices eleifend gravi.</p>
                  <div class="columns is-variable is-4 is-multiline boxes-style-3">
                    <div class="column is-12 aos-init aos-animate" data-aos="fade">
                      <div class="box-item media padding-bottom-none">
                        <div class="media-left">
                          <a href="../features/index.html">
                            <span class="icon">
                              <i class="ion-ios-briefcase-outline"></i>
                            </span>
                          </a>
                        </div>
                        <div class="media-content">
                          <h3>
                            <a href="../features/index.html">Prototyping</a>
                          </h3>
                          <p>Climatology chronocrator puppysnatch leacher unrived tomentum insignia harmoniousness rule.</p>
                          <a href="../features/index.html" class="button">More</a>
                        </div>
                      </div>
                      <!-- .box-item -->
                    </div>
                    <div class="column is-12 aos-init aos-animate" data-aos="fade">
                      <div class="box-item media padding-bottom-none">
                        <div class="media-left">
                          <a href="../features/index.html">
                            <span class="icon">
                              <i class="ion-ios-browsers-outline"></i>
                            </span>
                          </a>
                        </div>
                        <div class="media-content">
                          <h3>
                            <a href="../features/index.html">Branding</a>
                          </h3>
                          <p>Climatology chronocrator puppysnatch leacher unrived tomentum insignia harmoniousness rule.</p>
                          <a href="../features/index.html" class="button">More</a>
                        </div>
                      </div>
                      <!-- .box-item -->
                    </div>
                    <div class="column is-12 aos-init aos-animate" data-aos="fade">
                      <div class="box-item media padding-bottom-none">
                        <div class="media-left">
                          <a href="../features/index.html">
                            <span class="icon">
                              <i class="ion-ios-paper-outline"></i>
                            </span>
                          </a>
                        </div>
                        <div class="media-content">
                          <h3>
                            <a href="../features/index.html">Development</a>
                          </h3>
                          <p>Climatology chronocrator puppysnatch leacher unrived tomentum insignia harmoniousness rule.</p>
                          <a href="../features/index.html" class="button">More</a>
                        </div>
                      </div>
                      <!-- .box-item -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section  is-clearfix">
          <div class="container">
            <div class="testimonials  owl-carousel dots carousel-items-  ">
              <div class="testimonials-item">
                <img alt="Joo - Niche Multi-Purpose HTML Template" src="../assets/images/testimonials/1.png">
                <p>Any time we start something new it is exciting and we are very motivated and committed. As time goes by</p>
                <h3>Christina & Sandro</h3>
              </div>
              <div class="testimonials-item">
                <img alt="Joo - Niche Multi-Purpose HTML Template" src="../assets/images/testimonials/2.png">
                <p>Any time we start something new it is exciting and we are very motivated and committed. As time goes by</p>
                <h3>Christina & Sandro</h3>
              </div>
              <div class="testimonials-item">
                <img alt="Joo - Niche Multi-Purpose HTML Template" src="../assets/images/testimonials/3.png">
                <p>Any time we start something new it is exciting and we are very motivated and committed. As time goes by</p>
                <h3>Christina & Sandro</h3>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
</div>



@endsection

