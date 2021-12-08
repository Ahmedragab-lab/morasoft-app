@extends('site.layouts.master')
@section('css')
   <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')

    <div id="content-main-wrap" class="is-clearfix">
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
                        <a href="https://www.facebook.com/samir.gamal77">
                        <span class="icon">
                            <i class="fab fa-facebook-f"></i>
                        </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/samir-gamal-8ab68ba0/">
                        <span class="icon">
                            <i class="fab fa-linkedin"></i>
                        </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCwT_14y87y3tgR8AqMCxrRA">
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
                        <a href="https://www.morasoft.net/">
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
                            <p>مخرج 14 , طريق عمر بن عبدالعزيز , الرياض,
                            <br> المملكة العربية السعودية</p>
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
                            <p>+ 0500699206
                            <br> + 0560032681</p>
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
                            <p>admin@morasoft.net
                            <br> www.morasoft.net</p>
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
    </div>


<section class="hero google-maps is-clearfix">
    <div>
        <div>
            <iframe src="https://snazzymaps.com/embed/124493" width="100%" height="500px" style="border:none;"></iframe>
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
                    // $('textarea[name="sms"]').text(response.responseJSON.errors.sms);
                    // console.log(response.error);
                    }
                });
            });
        });
    </script>
@endsection
