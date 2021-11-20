<title>@yield('title')</title>

<link rel="shortcut icon" href="{{ URL::asset('admin/ar/assets/images/favicon.ico')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- morris css -->
<link rel="stylesheet" href="../plugins/morris/morris.css">

@if (App::getLocale() == 'ar')
     <link href="{{ URL::asset('admin/ar/assets/css/bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ URL::asset('admin/ar/assets/css/icons.css') }}" rel="stylesheet">
     <link href="{{ URL::asset('admin/ar/assets/css/style.css') }}" rel="stylesheet">
@else
    <link href="{{ URL::asset('admin/en/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/en/assets/css/icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/en/assets/css/style.css') }}" rel="stylesheet">
@endif
@toastr_css
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
     $.ajaxSetup({
                cache:false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            });
            $( document ).ajaxSuccess((e,res)=>console.log((res.responseJSON && res.responseJSON) || res));
            $( document ).ajaxError(function( event, res ) {
                console.log(res.responseJSON.errors || res);
            });
     function toaster(icon, message){
                Toast.fire({
                    icon: icon,
                    title: message,
                })
            }
</script>
@yield('css')

