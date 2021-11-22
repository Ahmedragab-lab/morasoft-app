@extends('site.layouts.master')

@section('content')

<div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
          <div id="header-bottom-inner" class="site-header-bottom-inner ">
            <section class="hero page-title is-medium has-text-centered about">
              <div class="hero-body">
                <div class="container">
                  <h1>testimonials</h1>
                  <h3>Break Through Self Doubt And Fear</h3>
                </div>
                <!-- .hero-body -->
              </div>
              <!-- .container -->
            </section>
            <!-- .page-title -->
          </div>
          <!-- #header-bottom-inner -->
        </div>
        <!-- #header-bottom -->
      </div>
      <!-- #header-bottom-wrap -->
      <!-- import content layouts and modules -->
      <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
          <div id="content-area-inner" class="site-content-area-inner">
            <section class="section hero has-background-primary-light is-clearfix">
              <div class="container">
                <p class="heading-title-top has-text-centered">app feedback</p>
                <h1 class="heading-title style-3">all reviews</h1>
               
              </div>
            </section>
            <div class="columns is-variable is-4 is-multiline">
               @foreach ( $feedbacks as $feedback)
                    <div class="column is-4" data-aos="fade">
                        
                            <!-- <ul class="social">
                                {{-- <li>
                                <a href="../pages/shop-product.html" target="_blank">
                                    <span class="icon">
                                    <i class="icon-basket"></i>
                                    </span>
                                </a>
                                </li> --}}
                                <li>
                                <a href="{{route('front.show',$feedback->id)}}">
                                    <span class="icon">
                                    <i class="icon-link"></i>
                                    </span>
                                </a>
                                </li>
                            </ul> -->
                            <div class="column is-4">
                    <div class="testimonials-item">
                      <h2> <a href="#">{{ $feedback->services->serve_name}} LE</a></h2>
                      <div class="testimonials-stars">
                        <span class="icon">
                          <i class="ion-md-star"></i>
                        </span>
                        <span class="icon">
                          <i class="ion-md-star"></i>
                        </span>
                        <span class="icon">
                          <i class="ion-md-star"></i>
                        </span>
                        <span class="icon">
                          <i class="ion-md-star"></i>
                        </span>
                        <span class="icon">
                          <i class="ion-md-star"></i>
                        </span>
                      </div>
                      <p><a href="#">{{ $feedback->feedback}}</a></p>
                      <img alt="Joo - Niche Multi-Purpose HTML Template" src="../assets/images/testimonials/2.png">
                      <h3>  <a href="#">{{ $feedback->users->name}}</a>
                        <br>
                       
                      </h3>
                    </div>
                  </div>

                    </div>
                    </div> 
               @endforeach

              </div>
             
            <!-- .works -->
            <nav class="pagination is-centered">
              <a href="#" class="pagination-previous">Prev</a>
              <a href="#" class="pagination-next">Next</a>
              <ul class="pagination-list">
                <li>
                  <a href="#" class="pagination-link is-current ">1</a>
                </li>
                <li>
                  <a href="#" class="pagination-link ">2</a>
                </li>
                <li>
                  <a href="#" class="pagination-link ">3</a>
                </li>
                <li>
                  <a href="#" class="pagination-ellipsis ">...</a>
                </li>
                <li>
                  <a href="#" class="pagination-link ">11</a>
                </li>
                <li>
                  <a href="#" class="pagination-link ">12</a>
                </li>
              </ul>
              </nav>
            <!-- .pagination -->
            <br> </div>
        </section>
        </div>
      <!-- #content-area-inner -->
    </div>
    <!-- #content-area -->
  </div>
@endsection

      