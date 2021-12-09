@extends('site.layouts.master')
@section('title') mora soft company @endsection
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('navslider')
    @include('site.layouts.navslider')
@endsection
@section('content')
    {{-- ============================slider product======================================== --}}
    <section id="welcome" class="section welcome-section has-background-primary-light is-clearfix">
        <div class="container">
            <p class="heading-title-top has-text-centered">welcome logistics</p>
            <h1 class="heading-title style-3"> Our
                {{-- <br> difference. --}}
                <span class="has-text-primary">Products</span>
            </h1>
            <br>
            <br>
            <div class="blog-list style-2 columns is-variable is-4 is-multiline">
                <div class="owl-carousel owl-theme">
                    @foreach (\App\Models\Product::where('status', '1')->where('trending', '1')->orderBy('id', 'DESC')->limit(5)->get()
        as $product)
                        <div class=" item">
                            <article class="blog-post">
                                <figure class="post-image">
                                    <a href="{{ route('front.show', $product->id) }}">
                                        <img alt="Joo" src="{{ asset('uploads/product/' . $product->image) }}"
                                            width="50px">
                                    </a>
                                </figure>
                                <div class="entry-header">
                                    <h2 class="entry-title">
                                        <a href="#">{{ $product->product_name }}</a>
                                    </h2>
                                    <span class="float-start entry-title">{{ $product->selling_price }}</span>
                                    <span class="float-end "><s>{{ $product->original_price }}</s></span>
                                </div>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                    <p>{{ $product->desc }}</p>
                                </div>
                                <!-- .entry-content -->
                                <div class="entry-footer">
                                    <a href="{{ route('front.show', $product->id) }}" class="button">More
                                        details</a>
                                </div>
                            </article>
                            <!-- .blog-post -->
                        </div>
                    @endforeach
                </div>
            </div>
            <br>
        </div>
    </section>
    {{-- ============================End slider product======================================== --}}

    <section id="tracking" class="section tracking-section is-clearfix">
        <div class="container">
          <p class="heading-title-top has-text-centered">tracking</p>
          <h1 class="heading-title style-3">track your shipment</h1>
          <div class="columns is-mobile is-centered">
            <div class="column is-10" >
              <div class="subscribe-form style-1">
                <form method="post" action="{{ route('searchtrackstep') }}">
                    @csrf
                    <div class="field has-addons has-addons-centered is-grouped">
                        <div class="control">
                        <input class="input" type="text" placeholder="Type your order number" name="order_no" required autocomplete="off">
                        </div>
                        <div class="control">
                        {{-- <a href="" class="button" type="submit">
                            <span class="tracking_search">Track it</span>
                            <span class="icon is-small">
                            <i class="icon-target"></i>
                            </span>
                        </a> --}}
                        <input type="submit" value="Track it" class="button" >
                        </div>
                    </div>
                </form>
              </div>
              <p class="help"> with best regardes
                  <span class="icon is-small">
                     <i class="icon-target"></i>
                  </span>Mora Soft.
                <a href="#">Advanced Tracking</a>
              </p>
            </div>
        </div>
    </section>
    {{-- services section --}}
    <section id="services" class="section services-section has-background-primary-light is-clearfix">
        <div class="container">
            <div class="columns is-variable is-multiline is-4">

                <div class="column is-5-desktop is-12-tablet">
                    <p class="heading-title-top">الخدمات اللوجستية</p>
                    <h1 class="heading-title style-3 has-text-left">خدماتنا الخاصة</h1>
                </div>
                <div class="column is-7-desktop is-12-tablet">
                    <p class="heading-title-bottom">خدمتنا تتحدث عننا ونحتاج الى ارائكم واقتراحتكم شكرااا جزيلا لكم فريق
                        <strong style="color:rgb(240, 29, 29);font-size:30px;font-weight:bold;">مورا سوفت</strong>
                    </p>
                </div>
            </div><br>
            <div class="columns is-variable is-4 is-multiline boxes-style-2">
                @foreach (\App\Models\Service::orderBy('id', 'DESC')->limit(3)->get()
        as $serv)
                    <div class="column is-4">
                        <div class="box-item">
                            {{-- <a href="#"><img alt="no photo" src="{{ asset('uploads/serv/'.$serv->image) }}" style="max-height: 344px ;"></a> --}}
                            <a href="{{ route('allservices.show', $serv->id) }}"><img alt="no photo"
                                    src="{{ asset('front/images/icons/3.png') }}" style="max-height: 344px ;"></a>
                            <h3><a href="{{ route('allservices.show', $serv->id) }}">{{ $serv->serve_name }}</a></h3>
                            <p>{{ $serv->desc }}</p>
                            <p>{{ $serv->status == 1 ? 'Available' : 'Unavialable' }}</p>
                            <a href="{{ route('allservices.show', $serv->id) }}" class="button"> Make Order</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- End services section --}}
    {{-- video section --}}
    <section class="section watch-video is-clearfix">
        <div class="container">
            <br>
            <br>
            <div class="columns is-variable is-8 is-multiline">
                <div class="column is-6-desktop is-12-tablet has-text-centered">
                    <div class="works-latest">
                        <div class="works-latest-item">
                            <div class="works-latest-item-icon style-2">
                                <iframe class="mfp-lightbox mfp-iframe " width="500" height="200"
                                    src="https://www.youtube.com/embed/v5Ub1zgyItc" frameborder="0"
                                    allow="autoplay; encrypted-media;" allowfullscreen>
                                </iframe>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-6-desktop is-12-tablet">
                    <br>
                    <h1 class="heading-title style-3 has-text-left"> خدمات النقل المحلية اللوجستية
                        <br> لانواع الشحن
                        <span class="has-text-primary">والنقل.</span>
                    </h1>
                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى حيث
                        يمكنك أن تولد.</p>
                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى أنه
                        مازال نصاً.</p>
                    <br>
                    <div class="level">
                        <div class="level-left">
                            <h4> Eng :Samir Gamal <strong
                                    style="color:rgb(240, 29, 29);font-size:30px;font-weight:bold;">مورا سوفت</strong>
                                <br>
                                <span>المدير التنفيذى</span>
                            </h4>
                        </div>
                        <div class="level-right">
                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                src="{{ asset('front/images/global/mark.png') }}">
                        </div>
                    </div>
                </div>

                <br>
            </div>
    </section>
    {{-- End video section --}}
    <section class="hero fun-facts is-clearfix">
        <div class="hero-body">
            <h2 class="display-none">funfacts</h2>
            <nav class="level counterup style-5">
                <div class="level-item has-text-centered">
                    <div>
                        <p class="title counter">340</p>
                        <p class="heading">years of experience</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="title counter">120</p>
                        <p class="heading">branches over world</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="title counter">230</p>
                        <p class="heading">tonnes transported</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="title counter">110</p>
                        <p class="heading">countries covered</p>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    {{-- <section id="tracking-steps" class="section tracking-steps-section is-clearfix">
        <div class="container">
            <p class="heading-title-top has-text-centered">tracking</p>
            <h1 class="heading-title style-3">how we work</h1>
            <br>
            <br>
            <div class="steps" data-aos="fade-right">
                <div class="step-item" data-step-id="0">
                    <div class="step-marker"> 1 </div>
                    <div class="step-details">
                        <p class="step-title">lorem ipsum dolor</p>
                        <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>
                    </div>
                </div>
                <div class="step-item active" data-step-id="1">
                    <div class="step-marker">2</div>
                    <div class="step-details">
                        <p class="step-title">lorem ipsum dolor</p>
                        <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>

                    </div>
                </div>
                <div class="step-item" data-step-id="2">
                    <div class="step-marker">3</div>
                    <div class="step-details">
                        <p class="step-title">lorem ipsum dolor</p>
                        <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>
                    </div>
                </div>
                <div class="step-item" data-step-id="3">
                    <div class="step-marker"> 4 </div>
                    <div class="step-details">
                        <p class="step-title">lorem ipsum dolor</p>
                        <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    {{-- ********** Start Events ************ --}}

    <section id="news" class="section news-section is-clearfix">
        <div class="container">
            <div class="blog-list style-2 columns is-variable is-4 is-multiline">
                <div class="column is-4" data-aos="fade">
                    <div class="blog-post-heading">
                        <p class="heading-title-top">أخر الاخبار</p>
                        <h1 class="heading-title style-3 has-text-left">
                            {{-- <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('uploads/event/'.$Last_event->image) }}"> --}}
                            <h1 class="heading-title style-3 has-text-left">
                                <span class="has-text-primary">{{ $Last_event->event_title }}</span>
                            </h1>
                            <p>{{ $Last_event->desc }}</p>
                            <a href="{{ route('Last_event.show', $Last_event->id) }}" class="button"> أخبارنا...
                                <span class="icon">
                                    <i class="ion-ios-arrow-round-forward"></i>
                                </span>
                            </a>
                    </div>
                </div>
                <div class="column is-4" data-aos="fade">
                    <p class="heading-title-top">أخر الاتفاقيات</p>
                    <article class="blog-post">
                        <figure class="post-image">
                            <a href="">
                                <img alt="Joo - Niche Multi-Purpose HTML Template"
                                    src="{{ asset('uploads/event/' . $Last_event->image) }}"> </a>
                        </figure>
                        <div class="entry-header">
                            <div class="post-meta">
                                <ul>
                                    <li>
                                        {{-- <a href="#">
                                      <span>أبريل 5 ، 2018</span>
                                    </a> --}}
                                    </li>
                                </ul>
                            </div>
                            <h2 class="entry-title">

                                <a href="">{{ $Last_agreement->agreement_title }}</a>
                            </h2>


                            <p>{{ $Last_agreement->desc }}</p>
                        </div>
                        <div class="entry-footer">
                            <a href="{{ route('Last_agrement.show', $Last_agreement->id) }}" class="button">اقرأ
                                المزيد</a>
                        </div>
                    </article>
                    <!-- .blog-post -->
                </div>


                <div class="column is-4" data-aos="fade">
                    <p class="heading-title-top">أخر الخدمات</p>
                    <article class="blog-post">
                        <figure class="post-image">
                            <a href="./blog/single.html">
                                <img alt="Joo - Niche Multi-Purpose HTML Template"
                                    src="{{ asset('uploads/serv/' . $Last_service->image) }}"> </a>
                        </figure>
                        <div class="entry-header">
                            <div class="post-meta">
                                <ul>
                                    <li>
                                        {{-- <a href="#">
                                      <span>أبريل 5 ، 2018</span>
                                    </a> --}}
                                    </li>
                                </ul>
                            </div>
                            <h2 class="entry-title">
                                <a href="./blog/single.html">{{ $Last_service->serve_name }}</a>
                            </h2>
                            <p>{{ $Last_service->desc }}</p>

                            </div>
                             <div class="entry-footer">

                            <a href="{{ route('lastservice.showlast', $Last_service->id) }}" class="button">اقرأ
                                المزيد</a>
                        </div>
                    </article>
                    <!-- .blog-post -->
                </div>

                        </div>
                      </div>
                    </div>
                </section>


    {{-- ********** Start News ************ --}}



    {{-- ********** End Service ************ --}}

    {{-- Asmaa Client feedback --}}
    <section>

            <p class="heading-title-top has-text-centered">آراء العملاء</p>
            <h1 class="heading-title style-3">قالوا عنا</h1>
        <div id="carouselFeedback" class="carousel slide " data-bs-ride="carousel">
            {{-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div> --}}
            <div class="carousel-inner ">
                @foreach (\App\Models\Feedback::orderBy('id', 'DESC')->limit(15)->get()
        as $feedback)
                <div class="carousel-item feedback @if($loop->first) active @endif h-2" data-bs-interval="1500">
                    <img src="{{asset('assets/images/globebannermobile.jpg')}}" class="d-block w-100 " style="height:500px" alt="...">
                    <div class="carousel-caption feedback-caption d-none d-md-block">
                        <img src="{{ asset('uploads/user-img/' . $feedback->users->image) }}" width="150" height="150" class="img-area rounded-circle h-5 img-profil " alt="...">

                        <h1 class="text-light  py-2  ">{{ $feedback->users->fname }}   {{$feedback->users->lname}} </h1>

                        <label class="feed-service">{{ $feedback->services->serve_name }}   Service</label>
                        <p>{{ $feedback->feedback }}</p>
                    </div>
                </div>
                @endforeach


            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselFeedback" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselFeedback" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>

        </div>

    </section>

    {{-- start client feedback --}}
    {{-- <section id="testimonials" class="section testimonials-section has-background-primary-light is-clearfix">
        <div class="container">
            <p class="heading-title-top has-text-centered">آراء العملاء</p>
            <h1 class="heading-title style-3">قالوا عنا</h1>
            <div class="testimonials  owl-carousel dots carousel-items-3 columns-style-1 ">
                @foreach (\App\Models\Feedback::orderBy('id', 'DESC')->limit(3)->get()
        as $feedback)
                    <div class="testimonials-item">
                        <p>{{ $feedback->feedback }}</p>
                        <img alt="no photo" src="{{ asset('uploads/user-img/' . $feedback->users->image) }}">
                        <h3>{{ $feedback->users->name }}
                            <br>
                            <span>{{ $feedback->services->serve_name }} Services</span>
                        </h3>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}
    {{-- end client feedback --}}
    {{-- anthor form --}}
    <section id="quote" class="section quote-section padding-bottom-none is-clearfix">
        <div id="order" class="container" >
            <div class="columns is-variable is-2 is-multiline">
                <div class="column is-6-desktop is-12-tablet">
                    <h1 class="heading-title style-3 has-text-left"> Ask for
                        <span class="has-text-primary">price</span>
                    </h1>
                    <p class="heading-title-bottom"> Always do our best for you thank you</p>
                    <!-- successful form message -->
                    <div class="overhang-message-content is-hidden success">
                        <span class="icon">
                            <i class="ion-md-notifications"></i>
                        </span> Thank You! Your message was sent successfully.
                    </div>
                    <!-- error form message -->
                    <div class="overhang-message-content is-hidden error">
                        <span class="icon">
                            <i class="ion-md-notifications"></i>
                        </span> Oops! Something went wrong, we couldn't send your message.
                    </div>
                    <!-- ajax contact form -->
                    <form accept-charset="UTF-8" class="ajax-contact-form" id="ajaxform"
                        action="https://usebasin.com/f/3587049dbc33.json" method="POST">
                        <div class="field is-horizontal">
                            <div class="field-body">
                                <div class="field">
                                    <div class="control is-expanded">
                                        <div class="select">
                                            <select name="from">
                                                <option value="" readonly> ---from ---</option>
                                                @foreach (\App\Models\Country::all() as $country)
                                                    <option value="{{ $country->id }}">{{ $country->Name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control is-expanded">
                                        <div class="select">
                                            <select name="to">
                                                <option value="" readonly> ---to ---</option>
                                                @foreach (\App\Models\Country::all() as $country)
                                                    <option value="{{ $country->id }}">{{ $country->Name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-body">
                                <div class="field">
                                    <div class="control is-expanded">
                                        <div class="select">
                                            <select name="serv_id">
                                                <option value="" readonly> ---select your service---</option>
                                                @foreach (\App\Models\Service::all() as $service)
                                                    <option value="{{ $service->id }}">{{ $service->serve_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field ">
                            <div class="control is-expanded">
                                <textarea class="textarea" name="sms" placeholder="Message" required=""></textarea>
                            </div>
                        </div>
                        <div class="field ">
                            <div class="control">
                                <button class="button save-data" type="submit"> ارسل طلبك <svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-send-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89.471-1.178-1.178.471L5.93 9.363l.338.215a.5.5 0 0 1 .154.154l.215.338 7.494-7.494Z" />
                                    </svg> </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="column is-6-desktop is-12-tablet" data-aos-delay="600">
                    <br>
                    <br>
                    <br>
                    <br>
                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/global/man.png') }}">
                </div>
            </div>
        </div>
    </section>
    {{-- فورمه اجاكس --}}
@endsection
@section('js')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {
            $(".save-data").click(function(e) {
                e.preventDefault();
                let from = $("select[name=from]").val();
                let to = $("select[name=to]").val();
                let serv_id = $("select[name=serv_id]").val();
                let sms = $("textarea[name=sms]").val();
                console.log(from);
                console.log(to);
                console.log(serv_id);
                console.log(sms);
                $.ajax({
                    method: "POST",
                    url: "/sendrequest",
                    data: {
                        from: from,
                        to: to,
                        serv_id: serv_id,
                        sms: sms,
                    },
                    success: function(response)
                    {
                    swal(response.status);
                    $("#ajaxform")[0].reset();
                    },
                    error: function(response) {
                    swal(response.status);
                    }
                });
            });
            // $(".tracking_search").click(function(e){
            //     e.preventDefault();
            //     let order_no = $("input[name=order_no]").val();
            //     console.log(order_no);
            //     $.ajax({
            //         method:"GET",
            //         url: "/searchtrackstep",
            //         data:{
            //             order_no:order_no,
            //         },
            //         success: function(response)
            //         {
            //             if(response) {
            //                 swal(response.status);
            //                 // $("#ajaxform")[0].reset();
            //             }
            //         }
            //     });
            // });
        });
    </script>

@endsection
