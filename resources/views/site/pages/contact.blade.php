@extends('site.layouts.master')
@section('css')

@endsection
@section('content')
    <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">
                <!-- works section -->
                <section class="section hero has-background-primary-light  works-list is-clearfix">
                    <div class="container">
<br><br>
                        <section class="section  is-clearfix">
                            <div class="container">
                                <div class="columns is-centered">
                                    <div class="column is-two-thirds has-text-centered">
                                        <p class="heading-title-top has-text-centered">contact us</p>
                                        <h1 class="heading-title style-3">How we can help</h1>
                                        <p> The main component of a healthy environment for self esteem is that it needs be nurturing, main component of a healthy env for self esteem. The main component of a healthy environment for self esteem is that it needs be nurturing,
                                            main component of a healthy env for self esteem. </p>
                                        <br>
                                        <br>
                                        <br> </div>
                                </div>
                                <div class="columns is-centered">
                                    <div class="column is-three-quarters has-text-centered">
                                        <div class="columns is-variable is-multiline is-4">
                                            <div class="column widget is-4 widget-links">
                                                <h3 class="widget-title has-text-primary margin-top-none">Address</h3>
                                                <ul>
                                                    <li>295 Witting Streets Suite 666,
                                                        <br> Melbourne, Australia</li>
                                                </ul>
                                            </div>
                                            <div class="column widget is-4 widget-links">
                                                <h3 class="widget-title has-text-primary">Phone</h3>
                                                <ul>
                                                    <li>+ 123 5456 789 01
                                                        <br> + 123 5456 789 01</li>
                                                </ul>
                                            </div>
                                            <div class="column widget is-4 widget-links">
                                                <h3 class="widget-title has-text-primary">Email</h3>
                                                <ul>
                                                    <li>welcome@website.com
                                                        <br> hello@site.co</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="has-text-centered">
                                    <div class="global-social-links style-1">
                                        <ul>
                                            <li>
                                                <a href="#">
                          <span class="icon">
                            <i class="fab fa-facebook-f"></i>
                          </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                          <span class="icon">
                            <i class="fab fa-twitter"></i>
                          </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                          <span class="icon">
                            <i class="fab fa-instagram"></i>
                          </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                          <span class="icon">
                            <i class="fab fa-pinterest-p"></i>
                          </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                          <span class="icon">
                            <i class="fab fa-google"></i>
                          </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                          <span class="icon">
                            <i class="fab fa-dribbble"></i>
                          </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- .get-in-touch contact-page -->
                        <!-- contact-form section -->
                        <section class="section hero has-background-primary-light is-clearfix">
                            <div class="container">
                                <h1 class="heading-title style-1">Get In Touch</h1>
                                <br>
                                <br>
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
                                <form accept-charset="UTF-8" class="ajax-contact-form" action="https://usebasin.com/f/3587049dbc33.json" method="POST">
                                    <div class="field is-horizontal">
                                        <div class="field-body">
                                            <div class="field">
                                                <div class="control is-expanded">
                                                    <input class="input" type="text" name="name" placeholder="Your Name" required> </div>
                                            </div>
                                            <!-- .field -->
                                            <div class="field">
                                                <div class="control is-expanded">
                                                    <input class="input" type="text" name="subject" placeholder="Your Subject" required> </div>
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
                                                    <input class="input" type="tel" name="phone" placeholder="Your Phone" required> </div>
                                            </div>
                                            <!-- .field -->
                                            <div class="field">
                                                <div class="control is-expanded">
                                                    <input class="input" type="email" name="email" placeholder="Your Email" required> </div>
                                            </div>
                                            <!-- .field -->
                                        </div>
                                        <!-- .field-body -->
                                    </div>
                                    <!-- .field -->
                                    <div class="field ">
                                        <div class="control is-expanded">
                                        <textarea class="textarea" name="sms" placeholder="Message"
                                          required=""></textarea>
                                        </div>
                                    </div>
                                    <!-- .field -->
                                    <div class="field ">
                                        <div class="control">
                                            <button class="button save-data" type="submit"> Send message <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89.471-1.178-1.178.471L5.93 9.363l.338.215a.5.5 0 0 1 .154.154l.215.338 7.494-7.494Z"/>
                                                </svg>  </button>
                                        </div>
                                    </div>
{{--                                    <div class="field ">--}}
{{--                                        <div class="control has-text-centered">--}}
{{--                                            <button class="button" type="submit">Send message</button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <!-- .field -->
                                </form>
                                <br> </div>
                        </section>
                        @endsection
@section('js')
    <script src="{{ asset('soon') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('soon') }}/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('soon') }}/js/main.js"></script>

@endsection
