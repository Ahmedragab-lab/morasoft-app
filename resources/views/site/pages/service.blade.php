@extends('site.layouts.master')
@section('css')
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<div id="header-bottom-wrap" class="is-clearfix">
    <div id="header-bottom" class="site-header-bottom">
      <div id="header-bottom-inner" class="site-header-bottom-inner ">
        <section class="hero page-title is-medium has-text-centered services">
          <div class="hero-body">
            <div class="container">
              <h1>Mora soft</h1>
              <h3>Services</h3>
            </div>
          </div>
        </section>
      </div>
    </div>
</div>

<section class="section works-list is-clearfix">
    <div class="container">
        <h1 class="heading-title style-1">{{ $service->serve_name }}</h1>
        <h2 class="has-text-centered">{{ $service->desc }}</h2>
        <br>
<br>
        <div class="works">
            <div class="columns is-variable is-4 is-multiline">
                <div class="column is-4" data-aos="fade-up">
                    <div class="work-item">
                        <figure class="work-item-img">
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{asset('uploads/serv/'.$service->image)}} ">
                        </figure>

                    </div>
                    <!-- .work-item -->
                </div>
<<<<<<< HEAD

                    <!-- .work-item -->
                </div>

                <!-- .columns -->
            </div>
        </div>
    </div>
</section>
<!-- .works-list -->
<!-- testimonials section -->
<section class="section hero has-background-primary-light is-clearfix">
    <div class="container">
        <div class="testimonials  owl-carousel dots carousel-items-  ">
            <div class="testimonials-item">
                <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{asset('uploads/user-img/' .Auth::user()->image )}}">
                <a href="{{route('allservices.show',$service->id)}}">
                <p>#</p>
                <h3>#</h3>
            </div>

        </div>
    </div>
</section>
<!-- .testimonials-list -->


=======
              </div>
            </div>
          </div>
        </section>
        <section id="testimonials" class="section testimonials-section has-background-primary-light is-clearfix">
            <div class="container">
                <p class="heading-title-top has-text-centered">آراء العملاء</p>
                <h1 class="heading-title style-3">قالوا عنا</h1>
                <div class="testimonials  owl-carousel dots carousel-items-3 columns-style-1 ">
                    @foreach (\App\Models\Feedback::orderBy('id','DESC')->limit(3)->get() as $feedback)
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
        {{-- anthor form --}}
    <section id="quote" class="section quote-section padding-bottom-none is-clearfix">
        <div class="container">
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
                    {{-- <form accept-charset="UTF-8" class="ajax-contact-form" action="https://usebasin.com/f/3587049dbc33.json" method="POST"> --}}
                    <form accept-charset="UTF-8" class="ajax-contact-form" action="https://usebasin.com/f/3587049dbc33.json" method="POST">
                        <div class="field is-horizontal">
                            <div class="field-body">
                                <div class="field">
                                    <div class="control is-expanded">
                                      <div class="select" >
                                        <select name="from">
                                            <option value="" readonly > ---from ---</option>
                                            @foreach ( \App\Models\Country::all() as $country)
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
                                            <option value="" readonly > ---to ---</option>
                                            @foreach ( \App\Models\Country::all() as $country)
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
                                        <input type="hidden"  value="{{ $service->id }}" name="serv_id">
                                        <input type="text" readonly value="{{ $service->serve_name }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field ">
                            <div class="control is-expanded">
                                <textarea class="textarea" name="sms" placeholder="Message"
                                    required=""></textarea>
                            </div>
                        </div>
                        <div class="field ">
                            <div class="control">
                                <button class="button save-data" type="submit"> ارسل طلبك <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
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
>>>>>>> 8ebb1e6c8d0af14a182a251cf6343177d3883627
      </div>
    </div>
</div>

@endsection
@section('js')
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
<<<<<<< HEAD
  </script>
@endsection
=======
    $(document).ready(function(){
        $(".save-data").click(function(e){
            e.preventDefault();
            let from = $("select[name=from]").val();
            let to = $("select[name=to]").val();
            let serv_id = $("input[name=serv_id]").val();
            let sms = $("textarea[name=sms]").val();
            console.log(from);
            console.log(to);
            console.log(serv_id);
            console.log(sms);
            $.ajax({
                method:"POST",
                url: "/servrequest",
                data:{
                    from:from,
                    to:to,
                    serv_id:serv_id,
                    sms:sms,
                },
                success: function(response)
                {
                    if(response) {
                        swal(response.status);
                        $("#ajaxform")[0].reset();
                    }
                }
            });
        });
    });
</script>
@endsection
{{--

    --}}
>>>>>>> 8ebb1e6c8d0af14a182a251cf6343177d3883627
