@extends('site.layouts.master')
@section('css')
   <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')

<div id="content-main-wrap" class="is-clearfix">
    @foreach (\App\Models\Setting::get() as $settings )
        <div id="content-area" class="site-content-area">
        <div id="content-area-inner" class="site-content-area-inner">
            <!-- contact-form section -->
            <section class="section contact-form is-clearfix">
            <div class="container">
                <p class="heading-title-top has-text-centered">contact us</p>
                <h1 class="heading-title style-3">How we can help</h1>
                <div class="has-text-centered">
                <div class="global-social-links style-1">
                    <ul>
                    <li>
                        <a href="{{ $settings->FBLink }}">
                        <span class="icon">
                            <i class="fab fa-facebook-f"></i>
                        </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $settings->LinLink }}">
                        <span class="icon">
                            <i class="fab fa-linkedin"></i>
                        </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $settings->YoutubeLink }}">
                        <span class="icon">
                            <i class="fab fa-youtube"></i>
                        </span>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="#">
                        <span class="icon">
                            <i class="fab fa-pinterest-p"></i>
                        </span>
                        </a>
                    </li> --}}
                    <li>
                        <a href="{{ $settings->websiteLink }}">
                        <span class="icon">
                            <i class="fab fa-google"></i>
                        </span>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="#">
                        <span class="icon">
                            <i class="fab fa-dribbble"></i>
                        </span>
                        </a>
                    </li> --}}
                    </ul>
                </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="columns is-multiline is-variable is-8">
                <div class="column is-4">
                    <div class="columns is-variable is-4 is-multiline boxes-style-3">
                    <div class="column is-12" data-aos="fade">
                        <div class="box-item media">
                        <div class="media-left">
                            <a href="../pages/contact.html">
                            <span class="icon">
                                <i class="ion-ios-pin-outline"></i>
                            </span>
                            </a>
                        </div>
                        <div class="media-content">
                            <h3>
                            <a href="../pages/contact.html">Address</a>
                            </h3>
                            <p>{{ $settings->city }},
                            <br> {{ $settings->country }}</p>
                        </div>
                        </div>
                        <!-- .box-item -->
                    </div>
                    <div class="column is-12" data-aos="fade">
                        <div class="box-item media">
                        <div class="media-left">
                            <a href="../pages/contact.html">
                            <span class="icon">
                                <i class="ion-ios-call-outline"></i>
                            </span>
                            </a>
                        </div>
                        <div class="media-content">
                            <h3>
                            <a href="../pages/contact.html">Phone</a>
                            </h3>
                            <p>{{ $settings->phone1 }}
                            <br> {{ $settings->phone2 }}</p>
                        </div>
                        </div>
                        <!-- .box-item -->
                    </div>
                    <div class="column is-12" data-aos="fade">
                        <div class="box-item media">
                        <div class="media-left">
                            <a href="../pages/contact.html">
                            <span class="icon">
                                <i class="ion-ios-mail-outline"></i>
                            </span>
                            </a>
                        </div>
                        <div class="media-content">
                            <h3>
                            <a href="../pages/contact.html">Email</a>
                            </h3>
                            <p>{{ $settings->email }}
                            <br> {{ $settings->websiteLink }}</p>
                        </div>
                        </div>
                        <!-- .box-item -->
                    </div>
                    </div>
                    <!-- .columns -->
                </div>
                <div class="column is-8">
                    <!-- successful form message -->
                    <div class="overhang-message-content is-hidden success">
                    <span class="icon">
                        <i class="ion-md-notifications"></i>
                    </span> Thank You! Your message was sent successfully. </div>
                    <!-- error form message -->
                    <div class="overhang-message-content is-hidden error">
                    <span class="icon">
                        <i class="ion-md-notifications"></i>
                    </span> Oops! Something went wrong, we couldn't send your message. </div>
                    <!-- ajax contact form -->
                    <form accept-charset="UTF-8" id="ajaxform" class="ajax-contact-form"  method="POST">
                        <div class="field is-horizontal">
                            <div class="field-body">
                                <div class="field">
                                    <div class="control is-expanded">
                                        <input type="hidden" name="userid" value="{{ auth()->user()->id }}">
                                        <input class="input" type="text" name="name"  readonly value="{{ auth()->user()->fname }} {{ auth()->user()->lname }} "> </div>
                                </div>
                                <!-- .field -->
                                <div class="field">
                                    <div class="control is-expanded">
                                        <input class="input" type="text" name="address"  readonly value="{{ auth()->user()->address1 }}"> </div>
                                </div>
                                <!-- .field -->
                            </div>
                            <!-- .field-body -->
                        </div>
                        <!-- .field -->
                        <div class="field is-horizontal">
                            <div class="field-body">
                                <div class="field">
                                    <div class="control is-expanded">
                                        <input class="input" type="tel" name="phone" readonly value="{{ auth()->user()->phone }}"> </div>
                                </div>
                                <!-- .field -->
                                <div class="field">
                                    <div class="control is-expanded">
                                        <input class="input" type="email" name="email" readonly value="{{ auth()->user()->email }}"> </div>
                                </div>
                                <!-- .field -->
                            </div>
                            <!-- .field-body -->
                        </div>
                        <!-- .field -->
                        <div class="field ">
                            <div class="control is-expanded">
                                <textarea class="textarea" name="sms" placeholder="Your Message" required></textarea>
                            </div>
                        </div>
                        <!-- .field -->
                        <div class="field ">
                            <div class="control has-text-centered">
                                <button class="button contact" type="submit" >Send message</button>
                            </div>
                        </div>
                        <!-- .field -->
                    </form>
                </div>
                </div>
                <br> </div>
            </section>
            <!-- .contact-form -->
            <!-- google-maps section -->
            {{-- <section class="hero google-maps is-clearfix">
            <div>
                <div>
                <iframe src="https://snazzymaps.com/embed/129396" width="100%" height="500px" style="border:none;"></iframe>
                </div>
            </div>
            </section> --}}
            <!-- .google-maps -->
        </div>
        <!-- #content-area-inner -->
        </div>
        <!-- #content-area -->



        <section class="hero google-maps is-clearfix">
            <div>
                <div>
                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d27231.420735041746!2d34.41045893742996!3d31.443660285671744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2s!4v1638996252818!5m2!1sar!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d108935.61560473012!2d34.47865147954783!3d31.43511452308313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2s!4v1638995984380!5m2!1sar!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
                    <iframe src="{{ $settings->map }}" width="100%" height="500px" style="border:none;"></iframe>
                </div>
            </div>
        </section>

    @endforeach
</div>

@endsection

@section('js')

    <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        $(document).ready(function(){
            $('.contact').click(function(e){
                e.preventDefault();
                var userid  = $('input[name="userid"]').val();
                var name = $('input[name="name"]').val();
                var sms = $('textarea[name="sms"]').val();
                console.log(userid);
                console.log(sms);
                $.ajax({
                    method:"POST",
                    url: "/contact",
                    data: {
                        'userid': userid,
                        'name': name,
                        'sms': sms,
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
        });
    </script>
@endsection
