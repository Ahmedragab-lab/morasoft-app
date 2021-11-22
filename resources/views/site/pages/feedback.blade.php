@extends('site.layouts.master')

@section('content')

    <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">
                <!-- works section -->
                <section class="section hero has-background-primary-light  works-list is-clearfix">
                    <div class="container">
                        <br>
                        <div class="works works-shop isotope style-1 image-hover effect-10">
                            <h1 class="heading-title style-3">
                                <span class="has-text-primary">TESTIMONIALS</span>
                            </h1>
                            <p class="heading-title-top has-text-centered">APP FEEDBACK
                                <span class="has-text-primary">All Reviews</span></p>


                            <div class="columns is-variable is-4 is-multiline">
                           @foreach ( $feedbacks as $feedback)
                         <div class="column is-4" data-aos="fade">
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

