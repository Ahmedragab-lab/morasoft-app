@extends('site.layouts.master')
@section('css')
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
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
<div id="content-main-wrap" class="is-clearfix">
    <div id="content-area" class="site-content-area">
      <div id="content-area-inner" class="site-content-area-inner">
        <section class="section hero has-background-primary-light padding-bottom-none padding-top-none is-clearfix">
          <div>
            <div class="columns is-multiline is-variable is-8">
              <div class="column is-6-desktop is-12-tablet">
                <figure>
                  <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('uploads/serv/'.$service->image) }}" class="is-block">
                </figure>
              </div>
              <div class="column is-6-desktop is-12-tablet" data-aos="fade-up">
                <div style="padding: 30px 30% 100px 0;">
                  <br>
                  <br>
                  <br>
                  <br>
                  <h1 class="heading-title style-1 has-text-left">{{ $service->serve_name }}</h1>
                  <p class="heading-title-bottom has-text-left">{{ $service->desc }}
                    <br> accumsan, metus ultrices eleifend gravi.</p>
                  <div class="columns is-variable is-4 is-multiline boxes-style-3">
                    <div class="column is-12 aos-init aos-animate" data-aos="fade">
                      <div class="box-item media padding-bottom-none">
                        <div class="media-left">
                          <a href="../features/index.html">
                            <span class="icon">
                              <i class="ion-ios-briefcase-outline"></i>
                            </span>
                          </a>
                        </div>
                        <div class="media-content">
                          <h3>
                            <a href="../features/index.html">Prototyping</a>
                          </h3>
                          <p>Climatology chronocrator puppysnatch leacher unrived tomentum insignia harmoniousness rule.</p>
                          <a href="../features/index.html" class="button">More</a>
                        </div>
                      </div>
                      <!-- .box-item -->
                    </div>
                    <div class="column is-12 aos-init aos-animate" data-aos="fade">
                      <div class="box-item media padding-bottom-none">
                        <div class="media-left">
                          <a href="../features/index.html">
                            <span class="icon">
                              <i class="ion-ios-browsers-outline"></i>
                            </span>
                          </a>
                        </div>
                        <div class="media-content">
                          <h3>
                            <a href="../features/index.html">Branding</a>
                          </h3>
                          <p>Climatology chronocrator puppysnatch leacher unrived tomentum insignia harmoniousness rule.</p>
                          <a href="../features/index.html" class="button">More</a>
                        </div>
                      </div>
                      <!-- .box-item -->
                    </div>
                    <div class="column is-12 aos-init aos-animate" data-aos="fade">
                      <div class="box-item media padding-bottom-none">
                        <div class="media-left">
                          <a href="../features/index.html">
                            <span class="icon">
                              <i class="ion-ios-paper-outline"></i>
                            </span>
                          </a>
                        </div>
                        <div class="media-content">
                          <h3>
                            <a href="../features/index.html">Development</a>
                          </h3>
                          <p>Climatology chronocrator puppysnatch leacher unrived tomentum insignia harmoniousness rule.</p>
                          <a href="../features/index.html" class="button">More</a>
                        </div>
                      </div>
                      <!-- .box-item -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section  is-clearfix">
          <div class="container">
            <div class="testimonials  owl-carousel dots carousel-items-  ">
              <div class="testimonials-item">
                <img alt="Joo - Niche Multi-Purpose HTML Template" src="../assets/images/testimonials/1.png">
                <p>Any time we start something new it is exciting and we are very motivated and committed. As time goes by</p>
                <h3>Christina & Sandro</h3>
              </div>
              <div class="testimonials-item">
                <img alt="Joo - Niche Multi-Purpose HTML Template" src="../assets/images/testimonials/2.png">
                <p>Any time we start something new it is exciting and we are very motivated and committed. As time goes by</p>
                <h3>Christina & Sandro</h3>
              </div>
              <div class="testimonials-item">
                <img alt="Joo - Niche Multi-Purpose HTML Template" src="../assets/images/testimonials/3.png">
                <p>Any time we start something new it is exciting and we are very motivated and committed. As time goes by</p>
                <h3>Christina & Sandro</h3>
              </div>
            </div>
          </div>
        </section>
        <section id="quote" class="section quote-section padding-bottom-none is-clearfix">
            <div class="container">
            <div class="columns is-variable is-2 is-multiline">
                <div class="column is-6-desktop is-12-tablet" >
                <h1 class="heading-title style-3 has-text-left"> طلب
                    <span class="has-text-primary">عرض أسعار</span>
                </h1>
                <p class="heading-title-bottom">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى حيث يمكنك أن تولد.</p>
                <!-- successful form message -->
                <div class="overhang-message-content is-hidden success">
                    <span class="icon">
                    <i class="ion-md-notifications"></i>
                    </span> شكرا جزيلا! لقد تم ارسال رسالتك بنجاح. </div>
                <!-- error form message -->
                <div class="overhang-message-content is-hidden error">
                    <span class="icon">
                    <i class="ion-md-notifications"></i>
                    </span> ! حدث خطأ ما ، لم نتمكن من إرسال رسالتك. </div>
                <!-- ajax contact form -->
                <span class="success" style="color:green; margin-top:10px; margin-bottom: 10px;"></span>
                <form accept-charset="UTF-8" class="ajax-contact-form" id="ajaxform" >
                    {{-- @csrf --}}
                    <div class="field is-horizontal">
                    <div class="field-body">
                        <div class="field">
                        <div class="control is-expanded">
                            <input class="input" type="text" name="name" placeholder="الإسم" required>
                        </div>
                        </div>
                        <!-- .field -->
                        <div class="field">
                        <div class="control is-expanded">
                            <input class="input" type="email" name="email" placeholder="الإيميل" required>
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
                            <input class="input" type="text" name="subject" placeholder="العنوان" required>
                        </div>
                        </div>
                        <!-- .field -->
                        <div class="field">
                        <div class="control is-expanded">
                            <input type="hidden"  value="{{ $service->id }}" name="serv_id">
                            <input type="text" readonly value="{{ $service->serve_name }}">
                            {{-- <div class="select" name="serv_id"> --}}
                            {{-- <select>
                                <option readonly >--Chosse Your Services--</option>
                                @foreach ($allservices as $serv )
                                <option value="{{ $serv->id }}">{{ $serv->serve_name }}</option>
                                @endforeach
                            </select> --}}
                            {{-- </div> --}}
                        </div>
                        <!-- .field -->
                        </div>
                        <!-- .field-body -->
                    </div>
                    </div>
                    <div class="field ">
                    <div class="control is-expanded">
                        <textarea class="textarea" name="sms" placeholder="رسالتك" required></textarea>
                    </div>
                    </div>
                    <div class="field ">
                    <div class="control">
                        <button class="button save-data" id="send-data" type="submit">Order Now</button>
                    </div>
                    </div>
                </form>
                </div>
                <div class="column is-6-desktop is-12-tablet"  data-aos-delay="600">
                <br>
                <br>
                <br>
                <br>
                <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/global/man.png') }}"> </div>
            </div>
            </div>
        </section>
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
    // $.ajaxSetup({
    //                 headers: {
    //                     'X-CSRF-TOKEN': '<?= csrf_token() ?>'
    //                 }
    //             });
    $("#send-data").click(function(event){
        event.preventDefault();
        let name = $("input[name=name]").val();
        let email = $("input[name=email]").val();
        let subject = $("input[name=subject]").val();
        let serv_id = $("input[name=serv_id]").val();
        let sms = $("input[name=sms]").val();
        let _token   = $('meta[name="csrf-token"]').attr('content');
        console.log(name);
        $.ajax({
          type:"POST",
          url: "{{ route('servrequest') }}",
          dataType: "json",
          cache: false,
          data:{
            name:name,
            email:email,
            subject:subject,
            serv_id:serv_id,
            sms:sms,
            _token: _token
          },
        //   success:function(data){
        //       alert(data.success);
        //    }
        //   success:function(response){
        //     console.log(response);
        //     if(response) {
        //       $('.success').text(response.success);
        //       $("#ajaxform")[0].reset();
        //     }
        //   },
        if (response.status === true) {
            console.log(response.message);
        } else {
            alert('Issue');
        },
          error: function(error) {
           console.log(error);
          }
         });
    });
  </script>
@endsection