@extends('site.layouts.master')
@section('title') order steps @endsection
@section('css')
<link rel="stylesheet" href="{{ asset('front/star.css') }}">
@endsection
@section('content')
<div id="content-main-wrap" class="is-clearfix">
    <div id="content-area" class="site-content-area">
      <div id="content-area-inner" class="site-content-area-inner">
  <!-- #content-main-wrap -->
        <section id="tracking-steps" class="section tracking-steps-section is-clearfix" >
            <div class="container">
            <p class="heading-title-top has-text-centered">tracking</p>
            <h1 class="heading-title style-3">how we work</h1>
            <br>
            <br>
            <div class="steps" data-aos="fade-right">
                <div class="step-item {{ $order_step->step==1 ? 'active':'' }}" data-step-id="0">
                <div class="step-marker"> 1 </div>
                <div class="step-details">
                    <p class="step-title">تم تجهيز الشحنه</p>
                    <p>هذه الخطوه يتم تجهيز وسيله النقل وترتيبات النقل.</p>
                </div>
                </div>
                <div class="step-item  {{ $order_step->step==2 ? 'active':'' }}" data-step-id="1">
                <div class="step-marker">2</div>
                <div class="step-details">
                    <p class="step-title">تم التعقيم والتغليف</p>
                    <p>الان يتم عمليه تعقيم وتغليف الشحنه بعنايه لتسليمها اليكم بجوده عاليه.</p>
                </div>
                </div>
                <div class="step-item {{ $order_step->step==3 ? 'active':'' }}" data-step-id="2">
                <div class="step-marker">3</div>
                <div class="step-details">
                    <p class="step-title">عمليه المتابعه</p>
                    <p>تم التحرك ومتابعه عمليه سير الشحنه.</p>
                </div>
                </div>
                <div class="step-item {{ $order_step->step==4 ? 'active':'' }}" data-step-id="3">
                <div class="step-marker"> 4 </div>
                <div class="step-details">
                    <p class="step-title">التسليم النهائى</p>
                    <p>الان تم استلام الشحنه يرجى تقييمكم للخدمه شكرا لكم مع تحيات مورا سوفت للنقل والشحن.</p>
                </div>
                </div>
            </div>
            </div>
        </section>

{{-- feed back --}}
        <section class="section  is-clearfix">
            <div class="container">
                <h1 class="heading-title style-1">we intersting in your feed back thank you</h1>
                <div class="has-text-centered">
                <div class="show-modal has-text-left">
                    <button class="button launch-modal">Please Rate Our Service</button>
                    <div class="modal">
                    <div class="modal-background"></div>
                    <div class="modal-content">
                        <div class="box">
                        <article class="media">
                            <div class="media-content">
                            <div class="content">
                                <p>
                                <strong>{{ $order_step->order->name }} </strong>
                                <small>@johnsmith</small>
                                <small>31m</small>
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                  </div>
                            </div>
                            <nav class="level is-mobile">
                                <div class="level-left">
                                <a class="level-item" aria-label="reply">
                                    <span class="icon is-small">
                                    <i class="fas fa-reply" aria-hidden="true"></i>
                                    </span>
                                </a>
                                <a class="level-item" aria-label="retweet">
                                    <span class="icon is-small">
                                    <i class="fas fa-retweet" aria-hidden="true"></i>
                                    </span>
                                </a>
                                <a class="level-item" aria-label="like">
                                    <span class="icon is-small">
                                    <i class="fas fa-heart" aria-hidden="true"></i>
                                    </span>
                                </a>
                                </div>
                            </nav>
                            </div>
                        </article>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                    <button class="modal-close is-large" aria-label="close"></button>
                    </div>
                </div>
                </div>
            </div>
        </section>
{{-- End feed back --}}
      </div>
  </div>
</div>
@endsection
@section('js')

@endsection
