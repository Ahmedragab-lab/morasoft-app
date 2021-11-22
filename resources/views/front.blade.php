@extends('site.layouts.master')
@section('title') mora soft company @endsection
@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('navslider')
    @include('site.layouts.navslider')
@endsection
@section('content')

    <!-- start adding page content -->
    {{-- <section id="welcome" class="section welcome-section has-background-primary-light is-clearfix">
        <div class="container">
        <p class="heading-title-top has-text-centered">الخدمات اللوجستية</p>
        <h1 class="heading-title style-3"> شركة الشحن مع الخدمات اللوجستية
            <br> أمان.
            <span class="has-text-primary">تطور مستمر</span>
        </h1>
        <br>
        <br>
        <div class="blog-list style-2 columns is-variable is-4 is-multiline">
            <div class="column is-4" data-aos="fade">
            <article class="blog-post">
                <figure class="post-image">
                <a href="./pages/about.html">
                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/blog/1.png') }}"> </a>
                </figure>
                <div class="entry-header">
                <h2 class="entry-title">
                    <a href="./pages/about.html">موظفينا الخبراء</a>
                </h2>
                </div>
                <!-- .entry-header -->
                <div class="entry-content">
                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى أنه مازال نصاً..</p>
                </div>
                <!-- .entry-content -->
                <div class="entry-footer">
                <a href="./pages/about.html" class="button">اقرأ المزيد</a>
                </div>
            </article>
            <!-- .blog-post -->
            </div>
            <div class="column is-4" data-aos="fade">
            <article class="blog-post">
                <figure class="post-image">
                <a href="./pages/about.html">
                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/blog/2.png') }}"> </a>
                </figure>
                <div class="entry-header">
                <h2 class="entry-title">
                    <a href="./pages/about.html">الخدمات اللوجستية</a>
                </h2>
                </div>
                <!-- .entry-header -->
                <div class="entry-content">
                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى أنه مازال نصاً..</p>
                </div>
                <!-- .entry-content -->
                <div class="entry-footer">
                <a href="./pages/about.html" class="button">اقرأ المزيد</a>
                </div>
            </article>
            <!-- .blog-post -->
            </div>
            <div class="column is-4" data-aos="fade">
            <article class="blog-post">
                <figure class="post-image">
                <a href="./pages/about.html">
                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/blog/3.png') }}"> </a>
                </figure>
                <div class="entry-header">
                <h2 class="entry-title">
                    <a href="./pages/about.html">الشحن البري</a>
                </h2>
                </div>
                <!-- .entry-header -->
                <div class="entry-content">
                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى أنه مازال نصاً..</p>
                </div>
                <!-- .entry-content -->
                <div class="entry-footer">
                <a href="./pages/about.html" class="button">اقرأ المزيد</a>
                </div>
            </article>
            <!-- .blog-post -->
            </div>
        </div>
        <br> </div>
    </section> --}}

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
                    @foreach ($products as $product)
                        <div class=" item">
                            <article class="blog-post">
                                <figure class="post-image">
                                    <a href="{{ route('front.show', $product->id) }}">
                                        <img alt="Joo - Niche Multi-Purpose HTML Template"
                                            src="{{ asset('uploads/product/' . $product->image) }}"> </a>
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
            <p class="heading-title-top has-text-centered">المتابعة</p>
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            <h1 class="heading-title style-3">متابعة شحنتك</h1>
            <div class="columns is-mobile is-centered">
                <div class="column is-10" data-aos="fade-up">
                    <div class="subscribe-form style-1">
                        <form>
                            <div class="field has-addons has-addons-centered is-grouped">
                                <div class="control">
                                    <input class="input" type="text" placeholder="ادخل رقم متابعة شحنتك">
                                </div>
                                <div class="control">
                                    <a href="#" class="button">
                                        <span>تتبع الشحنة</span>
                                        <span class="icon is-small">
                                            <i class="icon-target"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <p class="help"> افصل أرقام التتبع المتعددة بمسافة أو فاصلة.
                        <a href="#">تتبع متقدم</a>
                    </p>
                </div>
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
                @foreach ($services as $serv)
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

    {{-- start Event && agreement and service section --}}
    {{-- <section id="services" class="section services-section has-background-primary-light is-clearfix">
        <div class="container">
        <div class="columns is-variable is-multiline is-4">
            <div class="column is-5-desktop is-12-tablet">
            <p class="heading-title-top">الخدمات اللوجستية</p>
            <h1 class="heading-title style-3 has-text-left">خدماتنا الخاصة</h1>
            </div>
            <div class="column is-7-desktop is-12-tablet">
            <p class="heading-title-bottom">خدمتنا تتحدث عننا ونحتاج الى ارائكم واقتراحتكم شكرااا جزيلا لكم فريق <strong style="color:rgb(240, 29, 29);font-size:30px;font-weight:bold;">مورا سوفت</strong></p>
            </div>
        </div>
        <br>
        <div class="columns is-variable is-4 is-multiline boxes-style-2">
            <div class="column is-4" >
                <div class="box-item">
                <a href="#">
                    <img alt="no photo" src="{{ asset('uploads/event/'.$events->image) }}" style="max-height: 344px ;">
                </a>
                <h3>
                <a href="#">{{ $events->event_title }}</a>
                </h3>
                <p>{{ $events->desc }}</p>
                <p>{{ $events->status == 1 ?'Available':'Unavialable' }}</p>
                <a href="#" class="button"> see More</a>
                </div>
                <!-- .box-item -->
            </div>
            <div class="column is-4" >
            <div class="box-item">
            <a href="#">
                <img alt="no photo" src="{{ asset('uploads/agreement/'.$Last_agreement->image) }}" style="max-height: 344px ;">
            </a>
            <h3>
                <a href="#">{{ $Last_agreement->agreement_title }}</a>
            </h3>
            <p>{{ $Last_agreement->desc }}</p>
            <p>{{ $Last_agreement->status == 1 ?'Available':'Unavialable' }}</p>
            <a href="#" class="button"> see more</a>
            </div>
            <!-- .box-item -->
        </div>
            <div class="column is-4" >
            <div class="box-item">
            <a href="#">
                <img alt="no photo" src="{{ asset('uploads/event/'.$Last_service->image) }}" style="max-height: 344px ;">
            </a>
            <h3>
                <a href="#">{{ $Last_service->service_name }}</a>
            </h3>
            <p>{{ $Last_service->desc }}</p>
            <p>{{ $Last_service->status == 1 ?'Available':'Unavialable' }}</p>
            <a href="#" class="button"> Make Order</a>
            </div>
            <!-- .box-item -->
        </div>
        </div>
        </div>
    </section> --}}
    {{-- End Event && agreement and service section --}}
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
                        <p class="heading">سنوات من الخبرة</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="title counter">120</p>
                        <p class="heading">فروع حول العالم</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="title counter">230</p>
                        <p class="heading">طن نقل</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="title counter">110</p>
                        <p class="heading">البلدان المغطاة</p>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <section id="tracking-steps" class="section tracking-steps-section is-clearfix">
        <div class="container">
            <p class="heading-title-top has-text-centered">متابعة الشحنات</p>
            <h1 class="heading-title style-3">كيف يتم النقل</h1>
            <br>
            <br>
            <div class="steps" data-aos="fade-right">
                <div class="step-item" data-step-id="0">
                    <div class="step-marker"> 1 </div>
                    <div class="step-details">
                        <p class="step-title">نقل البضائع</p>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة.</p>
                    </div>
                </div>
                <div class="step-item active" data-step-id="1">
                    <div class="step-marker">2</div>
                    <div class="step-details">
                        <p class="step-title">التجهيز للنقل</p>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة.</p>
                    </div>
                </div>
                <div class="step-item" data-step-id="2">
                    <div class="step-marker">3</div>
                    <div class="step-details">
                        <p class="step-title">عملية المتابعة</p>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة.</p>
                    </div>
                </div>
                <div class="step-item" data-step-id="3">
                    <div class="step-marker"> 4 </div>
                    <div class="step-details">
                        <p class="step-title">التسليم النهائى</p>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="news" class="section news-section is-clearfix">
        <div class="container">
            <div class="blog-list style-2 columns is-variable is-4 is-multiline">
                <div class="column is-4">
                    <div class="blog-post-heading">
                        <p class="heading-title-top">أخر الاخبار</p>
                        <h1 class="heading-title style-3 has-text-left"> اتم نقل الباضائع
                            <span class="has-text-primary">بسهولة</span>
                        </h1>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى حيث
                            يمكنك أن تولد.</p>
                        <a href="./blog/index.html" class="button">أخبارنا
                            <span class="icon">
                                <i class="ion-ios-arrow-round-forward"></i>
                            </span>
                        </a>
                    </div>
                    <!-- .blog-post -->
                </div>
                <div class="column is-4">
                    <article class="blog-post">
                        <figure class="post-image">
                            <a href="./blog/single.html">
                                <img alt="Joo - Niche Multi-Purpose HTML Template"
                                    src="{{ asset('front/images/blog/4.png') }}"> </a>
                        </figure>
                        <div class="entry-header">
                            <div class="post-meta">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span>أبريل 5 ، 2018</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <h2 class="entry-title">
                                <a href="./blog/single.html">اتفاقية عمل مشترك لنقل البضائع</a>
                            </h2>
                        </div>
                        <div class="entry-footer">
                            <a href="./blog/single.html" class="button">اقرأ المزيد</a>
                        </div>
                    </article>
                    <!-- .blog-post -->
                </div>
                <div class="column is-4">
                    <article class="blog-post">
                        <figure class="post-image">
                            <a href="./blog/single.html">
                                <img alt="Joo - Niche Multi-Purpose HTML Template"
                                    src="{{ asset('front/images/blog/5.png') }}"> </a>
                        </figure>
                        <div class="entry-header">
                            <div class="post-meta">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span>أبريل 5 ، 2018</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <h2 class="entry-title">
                                <a href="./blog/single.html">كمية كبيرة للنقل الجوى المستمر</a>
                            </h2>
                        </div>
                        <div class="entry-footer">
                            <a href="./blog/single.html" class="button">اقرأ المزيد</a>
                        </div>
                    </article>
                    <!-- .blog-post -->
                </div>
            </div>
        </div>
    </section>
    {{-- Feedback Asmaa --}}

    {{-- <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner feedback-container">

            <div class="carousel-item container active " data-bs-interval="10000">
                <div classs="text-center bg-warning  row">
                    <div class="col mx-3 px-5">
                        <img src={{ asset('assets/images/profile_img.jpg') }} width="200"
                            class="rounded-circle  w-5 text-center" alt="...">
                    </div>
                    <div class="text-center col carousel-caption d-none d-md-block px-5 ms-5 ">
                        mmmmmmmmmmmmmmmmmmm
                        hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
                        cccccccccccccccccccccccccccccccccccccccccccccccccccccccccc
                        gggggggggggggggggggggggggggggggggggmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
                    </div>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="2000">
                <div classs="text-center   flex d-flex ">
                    <div class=" mx-3 p-5">
                        <img src={{ asset('assets/images/profile_img.jpg') }} width="200"
                            class="rounded-circle  w-5 p-2" alt="...">
                    </div>
                    <div class="  carousel-caption  px-5 ms-5 ">
                        <h1 class="feedack-heading">Ahmed Zeky</h1>
                        <p class="feedback-text w-5"> hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
                        
                            gggggggggggggggggggggggggggggggggggmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div classs="text-center bg-warning  row">
                    <div class="col mx-3 px-5">
                        <img src={{ asset('assets/images/profile_img.jpg') }} width="200"
                            class="rounded-circle  w-5 text-center" alt="...">
                    </div>
                    <div class="text-center col carousel-caption d-none d-md-block px-5 ms-5 ">
                        <h1 class="feedack-heading">Ahmed Zeky</h1>
                        <p class="feedback-text w-5"> hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
                        
                            gggggggggggggggggggggggggggggggggggmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="false"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="false"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div> --}}

    {{-- start client feedback --}}
    <section id="testimonials" class="section testimonials-section has-background-primary-light is-clearfix">
        <div class="container">
            <p class="heading-title-top has-text-centered">آراء العملاء</p>
            <h1 class="heading-title style-3">قالوا عنا</h1>
            <div class="testimonials  owl-carousel dots carousel-items-3 columns-style-1 ">
                @foreach ($feedbacks as $feedback)
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
    </section>
    {{-- end client feedback --}}
    {{-- مسحت سكشن فورمه خالص ربجاء بشمهندسه اسماء عمل فورمه اتفسار عن السعر --}}
    {{-- 1-اسم الخدمه --}}
    {{-- نوع الشحنه --}}
    {{-- من --}}
    {{-- الى --}}
    {{-- رساله --}}



    {{-- anthor form --}}
    <section id="quote" class="section quote-section padding-bottom-none is-clearfix">
        <div class="container">
            <div class="columns is-variable is-2 is-multiline">
                <div class="column is-6-desktop is-12-tablet">
                    <h1 class="heading-title style-3 has-text-left"> request a
                        <span class="has-text-primary">quote</span>
                    </h1>
                    <p class="heading-title-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit Nulla
                        chronocrator accumsan, metus ultrices eleifend gravi.</p>
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
                    <form accept-charset="UTF-8" class="ajax-contact-form"
                        action="https://usebasin.com/f/3587049dbc33.json" method="POST">
                        <div class="field is-horizontal">
                            <div class="field-body">
                                <div class="field">
                                    <div class="control is-expanded">
                                        <input class="input" type="text" name="fname" placeholder="الاسم"
                                            required>
                                    </div>
                                </div>
                                <!-- .field -->
                                <div class="field">
                                    <div class="control is-expanded">
                                        <input class="input" type="email" name="email" placeholder="الايميل"
                                            required="">
                                    </div>
                                </div>
                                <!-- .field -->
                            </div>
                            <!-- .field-body -->
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-body">
                                <div class="field">
                                    <div class="control is-expanded">
                                        <input class="input" type="text" name="address" placeholder="منطقتك"
                                            required="">
                                    </div>
                                </div>
                                <!-- .field -->
                                <div class="field">
                                    <div class="control is-expanded">
                                        <div class="field">
                                            <div class="control is-expanded">
                                                <input class="input" type="text" name="tO" placeholder="إلي منطقة"
                                                    required="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .field -->
                                </div>
                                <!-- .field-body -->
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-body">
                                <div class="field">
                                    <div class="control is-expanded">
                                        <input class="input" type="text" name="phone" placeholder="رقم الموبايل"
                                            required="">
                                    </div>
                                </div>
                                <!-- .field -->
                                <div class="field">
                                    <div class="control is-expanded">
                                        <div class="field">
                                            <div class="control is-expanded">
                                                <input class="input" type="text" name="service_type" placeholder="طريقة الشحن /نوع الشحنة"
                                                    required="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .field -->
                                </div>
                                <!-- .field-body -->
                            </div>
                        </div>

                        {{-- <div class="field ">
                            <div class="control is-expanded">
                                <textarea class="textarea" name="textarea" placeholder="Message"
                                    required=""></textarea>
                            </div>
                        </div> --}}
                        <div class="field ">
                            <div class="control">
                                <button class="button" type="submit"> ارسل طلبك <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89.471-1.178-1.178.471L5.93 9.363l.338.215a.5.5 0 0 1 .154.154l.215.338 7.494-7.494Z"/>
                                  </svg>  </button>
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
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        //     });
        // $(".save-data").click(function(event){
        //     event.preventDefault();
        //     // let name = $("input[name=name]").val();
        //     // let email = $("input[name=email]").val();
        //     // let subject = $("input[name=subject]").val();
        //     // let user_id = $("select[name=user_id]").val();
        //     let serv_id = $("select[name=serv_id]").val();
        //     let sms = $("textarea[name=sms]").val();
        //     console.log(serv_id);
        //     $.ajax({
        //     method:"POST",
        //     url: "/sendrequest",
        //     data:{
        //         // name:name,
        //         // email:email,
        //         // subject:subject,
        //         // user_id:user_id,
        //         serv_id:serv_id,
        //         sms:sms,
        //     },
        //     success:function(response){
        //         if(response) {
        //         swal(response.status);
        //         $("#ajaxform")[0].reset();
        //         }
        //     });
    </script>
@endsection