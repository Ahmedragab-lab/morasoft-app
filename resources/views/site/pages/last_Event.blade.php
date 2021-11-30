

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


                  {{-- ****************  Start View All *********************** --}}






                  <table class="table table-striped mb-0">
                  <tbody>
                    @foreach ( $events as $index=>$event )
                    <tr>
                                {{-- ******************************************* --}}
                                {{-- <th scope="row">{{ $index +1 }}</th> --}}
                                <div class="tab-block">
                                    <br>
                                    <ul class="comment-list comments comments-box ">
                                <li class="media comment comment-box">
                                    <figure class="media-left avatar">
                                      <p class="image">
                                        <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('uploads/event/'.$event->image) }}"> </p>
                                    </figure>
                                    <!-- .avatar -->
                                    <div class="media-content comment-body">
                                      <div class="level">
                                        <div class="level-left">
                                          <span class="comment-author">
                                            <a href="#">{{ $event->event_title }}</a>
                                          </span>
                                          <span class="comment-date">
                                            <a href="#">APRIL 5, 2018</a>
                                          </span>
                                         </div>
                                            <div class="level-right">
                                            {{-- <div class="shop-rating">
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
                                            </div> --}}
                                            </div>
                                         </div>
                                      <div class="content">
                                        <p>{{ $event->desc }}.</p>
                                      </div>
                                    </div>
                                    <!-- .comment-body -->
                                  </li>



{{-- *************************************************** --}}
                        {{-- <th scope="row">{{ $index +1 }}</th>
                        <td>{{ $event->event_title }}</td>
                        <td>{{ $event->limit }}</td>
                        <td>{{ $event->desc }}</td>
                        <td>
                            <img src="{{ asset('uploads/event/'.$event->image) }}" class="img-thumbnail" width="70" alt="">
                        </td> --}}



                    @endforeach
                </tbody>
            </table>



@endsection
