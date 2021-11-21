@extends('site.layouts.master')

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
    <div class="">
        <div class="row pt-4 ">
            <div class="col">
                <div class="float-end pe-2 fav-offers">
                    <p>عروضنا المفضلة</p>
                </div>
            </div>
            <div class="col">
                <div class="float-start ps-2">
                    <button type="button" class="btn btn-outline-dark">تسوق الآن</button>

                </div>
            </div>

        </div>
    </div>



    <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-indicators container">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <section class="row gx-0  pt-3 px-1 bg-color">
                    <div class="col">
                        <div class=" ">
                            <img src={{ asset('assets/images/N35285583A_1.png') }} width="150px">
                            <p class="card-text">إتش بي طابعة ليزر جت برو</p>
                            <img src="https://z.nooncdn.com/s/app/com/noon/images/fulfilment_express_v2-ar.svg"
                                alt="noon-express" height="20px" width="80px">
                        </div>
                    </div>



                    <div class="col">
                        <div>
                            <img src={{ asset('assets/images/N49461673A_1.jpg') }} width="150px">
                            <p class="card-text">إتش بي طابعة ليزر جت برو</p>
                            <img src="https://z.nooncdn.com/s/app/com/noon/images/fulfilment_express_v2-ar.svg"
                                alt="noon-express" height="20px" width="80px">
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <img src={{ asset('assets/images/N13233168A_1.webp') }} width="150px">
                            <p class="card-text">إتش بي طابعة ليزر جت برو</p>
                            <img src="https://z.nooncdn.com/s/app/com/noon/images/fulfilment_express_v2-ar.svg"
                                alt="noon-express" height="20px" width="80px">
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <img src={{ asset('assets/images/N46954808A_1.webp') }} width="150px">
                            <p class="card-text">إتش بي طابعة ليزر جت برو</p>
                            <img src="https://z.nooncdn.com/s/app/com/noon/images/fulfilment_express_v2-ar.svg"
                                alt="noon-express" height="20px" width="80px">
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <img src={{ asset('assets/images/N43602546A_1.webp') }} width="150px">
                            <p class="card-text">إتش بي طابعة ليزر جت برو</p>
                            <img src="https://z.nooncdn.com/s/app/com/noon/images/fulfilment_express_v2-ar.svg"
                                alt="noon-express" height="20px" width="80px">
                        </div>
                    </div>

                </section>
            </div>
            <div class="carousel-item">
                <section class="row gx-0  pt-3 px-1 bg-color">
                    <div class="col">
                        <div>
                            <img src={{ asset('assets/images/N35285583A_1.png') }} width="150px">
                            <p class="card-text">إتش بي طابعة ليزر جت برو</p>
                            <img src="https://z.nooncdn.com/s/app/com/noon/images/fulfilment_express_v2-ar.svg"
                                alt="noon-express" height="20px" width="80px">
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <img src={{ asset('assets/images/N38248671A_2.png') }} width="150px">
                            <p class="card-text">إتش بي طابعة ليزر جت برو</p>
                            <img src="https://z.nooncdn.com/s/app/com/noon/images/fulfilment_express_v2-ar.svg"
                                alt="noon-express" height="20px" width="80px">
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <img src={{ asset('assets/images/N48060578A_2.png') }} width="150px">
                            <p class="card-text">إتش بي طابعة ليزر جت برو</p>
                            <img src="https://z.nooncdn.com/s/app/com/noon/images/fulfilment_express_v2-ar.svg"
                                alt="noon-express" height="20px" width="80px">
                        </div>
                    </div>

                    <div class="col">
                        <div>
                            <img src={{ asset('assets/images/N49461673A_1.jpg') }} width="150px">
                            <p class="card-text">إتش بي طابعة ليزر جت برو</p>
                            <img src="https://z.nooncdn.com/s/app/com/noon/images/fulfilment_express_v2-ar.svg"
                                alt="noon-express" height="20px" width="80px">
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <img src={{ asset('assets/images/N13233168A_1.webp') }} width="150px">
                            <p class="card-text">إتش بي طابعة ليزر جت برو</p>
                            <img src="https://z.nooncdn.com/s/app/com/noon/images/fulfilment_express_v2-ar.svg"
                                alt="noon-express" height="20px" width="80px">
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <img src={{ asset('assets/images/N46954808A_1.webp') }} width="150px">
                            <p class="card-text">إتش بي طابعة ليزر جت برو</p>
                            <img src="https://z.nooncdn.com/s/app/com/noon/images/fulfilment_express_v2-ar.svg"
                                alt="noon-express" height="20px" width="80px">
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <img src={{ asset('assets/images/N43602546A_1.webp') }} width="150px">
                            <p class="card-text">إتش بي طابعة ليزر جت برو</p>
                            <img src="https://z.nooncdn.com/s/app/com/noon/images/fulfilment_express_v2-ar.svg"
                                alt="noon-express" height="20px" width="80px">
                        </div>
                    </div>

                </section>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="false"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="false"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>






    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <section id="welcome" class="section welcome-section has-background-primary-light is-clearfix">
        <div class="container">
            <p class="heading-title-top has-text-centered">welcome logistics</p>
            <h1 class="heading-title style-3"> Our
                {{-- <br> difference. --}}
                <span class="has-text-primary">Products</span>
            </h1>
            <br>
            <br>
            <div class="blog-list style-2 columns is-variable is-4 is-multiline container">
                <div class="owl-carousel owl-theme container-fluid">
                    @foreach ($products as $product)
                        <div class=" card rounded container-fluid">
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
        <div>
            @foreach ($products as $product)
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <section class="row gx-0  pt-3 px-1 bg-color container">
                                <div class="col">
                                    <div>
                                        <img src="{{ asset('uploads/product/' . $product->image) }}" width="150px">
                                        <p class="card-text">إتش بي طابعة ليزر جت برو</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <img src={{ asset('assets/images/N48060578A_2.png') }} width="150px">
                                        <p class="card-text">إتش بي طابعة ليزر جت برو</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <img src={{ asset('assets/images/N48060578A_2.png') }} width="150px">
                                        <p class="card-text">إتش بي طابعة ليزر جت برو</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <img src={{ asset('assets/images/N48060578A_2.png') }} width="150px">
                                        <p class="card-text">إتش بي طابعة ليزر جت برو</p>
                                    </div>
                                </div>

                                <div class="col">
                                    <div>
                                        <img src={{ asset('assets/images/N48060578A_2.png') }} width="150px">
                                        <p class="card-text">إتش بي طابعة ليزر جت برو</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <img src={{ asset('assets/images/N48060578A_2.png') }} width="150px">
                                        <p class="card-text">إتش بي طابعة ليزر جت برو</p>
                                        <button class=""> Add to cart </button>
                                    </div>
                                </div>

                            </section>

                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            @endforeach



        </div>
    </section>
    <section id="tracking" class="section tracking-section is-clearfix">
        <div class="container">
            <p class="heading-title-top has-text-centered">المتابعة</p>


            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
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







    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    {{-- end client feedback --}}
    <section id="quote" class="section quote-section padding-bottom-none is-clearfix">
        <div class="container">
            <div class="columns is-variable is-2 is-multiline">
                <div class="column is-6-desktop is-12-tablet">
                    <h1 class="heading-title style-3 has-text-left"> طلب
                        <span class="has-text-primary">عرض أسعار</span>
                    </h1>
                    <p class="heading-title-bottom">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا
                        النص من مولد النص العربى حيث يمكنك أن تولد.</p>
                    <!-- successful form message -->
                    <div class="overhang-message-content is-hidden success">
                        <span class="icon">
                            <i class="ion-md-notifications"></i>
                        </span> شكرا جزيلا! لقد تم ارسال رسالتك بنجاح.
                    </div>
                    <!-- error form message -->
                    <div class="overhang-message-content is-hidden error">
                        <span class="icon">
                            <i class="ion-md-notifications"></i>
                        </span> ! حدث خطأ ما ، لم نتمكن من إرسال رسالتك.
                    </div>
                    <!-- ajax contact form -->

                    <form accept-charset="UTF-8" class="ajax-contact-form" id="ajaxform" method="POST">
                        {{ csrf_field() }}
                       
                        <div class="field is-horizontal">
                          <div class="field-body">
                              <div class="field">
                                  <div class="control is-expanded">
                                      <input class="input" type="text" name="fname" placeholder="الإسم" required>
                                      <input class="input" type="hidden" name="user_id"
                                          value="{{ auth()->user()->id }}">
                                  </div>
                              </div>
                              <!-- .field -->
                              <div class="field">
                                  <div class="control is-expanded">
                                      <input class="input" type="email" name="email" placeholder="الإيميل"
                                          required>
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
                                    <input class="input" type="text" name="phone" placeholder="رقم الهاتف" required>
                                    <input class="input" type="hidden" name="user_id"
                                        value="{{ auth()->user()->id }}">
                                </div>
                            </div>
                            <!-- .field -->
                            <div class="field">
                                <div class="control is-expanded">
                                    <input class="input" type="email" name="email" placeholder="طريقة الشحن/نوع الشحن"
                                        required>
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
                                        <input class="input" type="text" name="subject" placeholder="منطقتك"
                                            required>
                                    </div>
                                </div>
                                <!-- .field -->
                                <div class="field">
                                  <div class="control is-expanded">
                                      <input class="input" type="input" name="to" placeholder=" إلي"
                                          required>
                                  </div>
                              </div>
                                <!-- .field-body -->
                            </div>
                        </div>
                        <div class="field ">
                            <div class="control">
                                <button class="button save-data" type="submit">Order Now </button>
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
    
@endsection
@section('js')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(".save-data").click(function(event) {
            event.preventDefault();
            // let name = $("input[name=name]").val();
            // let email = $("input[name=email]").val();
            // let subject = $("input[name=subject]").val();
            // let user_id = $("select[name=user_id]").val();
            let serv_id = $("select[name=serv_id]").val();
            let sms = $("textarea[name=sms]").val();
            console.log(serv_id);
            $.ajax({
                method: "POST",
                url: "/sendrequest",
                data: {
                    // name:name,
                    // email:email,
                    // subject:subject,
                    // user_id:user_id,
                    serv_id: serv_id,
                    sms: sms,
                },
                success: function(response) {
                    if (response) {
                        alert(response.status);
                        $("#ajaxform")[0].reset();
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    </script>
@endsection
