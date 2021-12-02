<script src="{{ asset('front/js/jquery-3.6.0.min') }}"></script>

@if (App::getLocale() == 'ar')
<script src="{{ asset('front/arabic/js/vendor.min.js?v=1557446391092') }}"></script>
<script src="{{ asset('front/arabic/js/scripts.min.js?v=1557446391092') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{ asset('front/arabic/js/custom.js?v=1557446391092') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('status'))
    <script>
          swal("{{ session('status') }}");
    </script>
@endif
@yield('js')

@else
<script src="{{ asset('front/english/js/vendor.min.js?v=1557446391092') }}"></script>
<script src="{{ asset('front/english/js/scripts.min.js?v=1557446391092') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{ asset('front/english/js/custom.js?v=1557446391092') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('status'))
    <script>
          swal("{{ session('status') }}");
    </script>
@endif
@yield('js')
@endif


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="{{ asset('front/js/owl.carousel.min') }}"></script>
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>
<script>
    // setInterval(function(){
    //     $('#noticount').load(window.location.href + "#noticount");
    //     $('#unread').load(window.location.href + "#unread");
    // }, 5000);
</script>
{{-- <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('bb82e65c18afc6a8c12f', {
      cluster: 'mt1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
  </script> --}}
