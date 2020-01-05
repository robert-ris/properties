<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">

    <link rel="stylesheet" href="{{ asset('properties/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('properties/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('properties/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('properties/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('properties/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('properties/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('properties/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('properties/css/mediaelementplayer.css') }}">
    <link rel="stylesheet" href="{{ asset('properties/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('properties/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('properties/css/fl-bigmug-line.css') }}">


    <link rel="stylesheet" href="{{ asset('properties/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('properties/css/style.css') }}">

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">


    @stack('css')
</head>
<body>
    <div id="app">

        @yield('content')

    </div>

    <script src="{{ asset('properties/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('properties/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('properties/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('properties/js/popper.min.js') }}"></script>
    <script src="{{ asset('properties/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('properties/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('properties/js/mediaelement-and-player.min.js') }}"></script>
    <script src="{{ asset('properties/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('properties/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('properties/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('properties/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('properties/js/aos.js') }}"></script>

    <script src="{{ asset('properties/js/main.js') }}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}

    <script>
        @if($errors->any())
        @foreach($errors->all() as $error)
        toastr.error('{{ $error }}', 'Error', {
            closeButton:true,
            progressBar:true,
        })
        @endforeach
        @endif
    </script>
@stack('js')
</body>
</html>
