<title>@yield('title')</title>

<link rel="shortcut icon" href="{{ URL::asset('admin/ar/assets/images/favicon.ico')}}">

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
@yield('css')

