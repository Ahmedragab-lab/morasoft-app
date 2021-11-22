


@extends('site.layouts.master')
@section('title') {{ $Last_event->event_title }} @endsection
@section('css')
   <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<div id="content-main-wrap" class="is-clearfix">
    <div id="content-area" class="site-content-area">
      <div id="content-area-inner" class="site-content-area-inner">
        <section class="section works-list portfolio-single product-single is-clearfix">
          <div class="container">
            <br>
            <div class="columns is-multiline is-variable is-6 product_data">
              <div class="column is-6">
                <div class="flexslider thumbnails">
                  <ul class="slides">

                </div>
              </div>
                <div class="column is-6">
                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('uploads/event/'. $Last_event->image) }}"> </a>
                <h1 class="heading-title style-1 has-text-left">{{ $Last_event->event_title }}</h1>

                <!-- <span class="icon">

      </span> -->
    </div>
    <!-- <br>

    <br> -->
    <p> {{ $Last_event->desc }}.</p>
    <br>


</div>
</div>


<div class="tab-block">
    <br>
    <ul class="comment-list comments comments-box ">
      <li class="media comment comment-box">
        <figure class="media-left avatar">
          <p class="image">
            <img alt="Joo - Niche Multi-Purpose HTML Template" src="../assets/images/comments/1.png"> </p>
        </figure>
        <!-- .avatar -->
        <div class="media-content comment-body">
          <div class="level">
            <div class="level-left">
              <span class="comment-author">
                <a href="#">OLIVIA ALLISON</a>
              </span>
              <span class="comment-date">
                <a href="#">APRIL 5, 2018</a>
              </span>
            </div>
            <div class="level-right">
              <div class="shop-rating">
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
            </div>
          </div>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta eros lacus, nec ultricies elit bland non. Suspendisse pellentesque mauris sit amet dolor blandit rutrum. Nunc in tempus turpis. Lorem ipsum dolor sit amet,
              consectetur adipiscing elit. Duis porta eros lacus, nec ultricies elit bland non.</p>
          </div>
          <!-- .children -->
        </div>
        <!-- .comment-body -->
      </li>
      <!-- .comment-box -->
      <li class="media comment comment-box">
        <figure class="media-left avatar">
          <p class="image">
            <img alt="Joo - Niche Multi-Purpose HTML Template" src="../assets/images/comments/2.png"> </p>
        </figure>
        <!-- .avatar -->
        <div class="media-content comment-body">
          <div class="level">
            <div class="level-left">
              <span class="comment-author">
                <a href="#">OLIVIA ALLISON</a>
              </span>
              <span class="comment-date">
                <a href="#">APRIL 5, 2018</a>
              </span>
            </div>
            <div class="level-right">
              <div class="shop-rating">
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
            </div>
          </div>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta eros lacus, nec ultricies elit bland non. Suspendisse pellentesque mauris sit amet dolor blandit rutrum. Nunc in tempus turpis. Lorem ipsum dolor sit amet,
              consectetur adipiscing elit. Duis porta eros lacus, nec ultricies elit bland non.</p>
          </div>
        </div>
        <!-- .comment-body -->
      </li>
      <!-- .comment-box -->
    </ul>

</div>

@endsection
