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
