{{-- <script src="{{ asset('front/js/jquery-3.6.0.min') }}"></script> --}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://js.pusher.com/6.0/pusher.min.js"></script>

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
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        Pusher.logToConsole = true;
        var pusher = new Pusher('c79dee38494226dd7e21', {
          cluster: 'mt1'
        // encrypted:false
        });
        var channel = pusher.subscribe('new_price');
        channel.bind('PriceNotification', function(data) {
        alert(JSON.stringify(data));
        });
    </script>
{{-- <script src="{{ asset('js/pusherNotifications.js') }}"></script> --}}
<script type="text/javascript">
        // notification price
    //=*=*=*=*=*=*=*=*=*****************************************============
    var notificationsWrapper   = $('.dropdown-notifications');
    var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
    var notificationsCountElem = notificationsToggle.find('i[data-count]');
    var notificationsCount     = parseInt(notificationsCountElem.data('count'));
    var notifications          = notificationsWrapper.find('ul.scrollable-container');
    // if (notificationsCount <= 0) {
    // notificationsWrapper.hide();
    // }

    // Enable pusher logging - don't include this in production
    // Pusher.logToConsole = true;

    // var pusher = new Pusher('bb82e65c18afc6a8c12f', {
    //     cluster: 'mt1',
    //   encrypted: true
    // });

    // Subscribe to the channel we specified in our Laravel Event
    var channel = pusher.subscribe('new_price');
    channel.bind('App\\Events\\PriceNotification', function(data) {
    var existingNotifications = notifications.html();
    var newNotificationHtml =
    `
        <li>
            <a href="#">
                <strong>`+data.price+`</strong> `+data.price+`
            </a>
        </li>
    `;
    notifications.html(newNotificationHtml + existingNotifications);
    notificationsCount += 1;
    notificationsCountElem.attr('data-count', notificationsCount);
    notificationsWrapper.find('.notif-count').text(notificationsCount);
    notificationsWrapper.show();
    });
</script>
