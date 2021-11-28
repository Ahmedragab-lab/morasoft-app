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
                        <section class="section contact-form is-clearfix">
                            <div class="container">
                                <h1 class="heading-title style-3">كيف نقوم بمساعدتك</h1>
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
                                                            <a href="../pages/contact.html">العنوان</a>
                                                        </h3>
                                                        <p>295 Witting Streets Suite 666,
                                                            <br> Melbourne, Australia</p>
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
                                                            <a href="../pages/contact.html">الهاتف</a>
                                                        </h3>
                                                        <p>+ 123 5456 789 01
                                                            <br> + 123 5456 789 01</p>
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
                                                            <a href="../pages/contact.html">البريد الالكترونى</a>
                                                        </h3>
                                                        <p>welcome@website.com
                                                            <br> hello@site.co</p>
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
                                                    <textarea class="textarea" name="textarea" placeholder="Your Message" required></textarea>
                                                </div>
                                            </div>
                                            <!-- .field -->
                                            <div class="field ">
                                                <div class="control has-text-centered">
                                                    <button class="button" type="submit">Send message</button>
                                                </div>
                                            </div>
                                            <!-- .field -->
                                        </form>
                                    </div>
                                </div>
                                <br> </div>
                        </section>

                        <section class="hero google-maps is-clearfix">
                            <div>
                                <div>
                                    <iframe src="https://snazzymaps.com/embed/124493" width="100%" height="500px" style="border:none;"></iframe>
                                </div>
                            </div>
                        </section>
                        @endsection
@section('js')
    <script src="{{ asset('soon') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('soon') }}/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('soon') }}/js/main.js"></script>

@endsection
