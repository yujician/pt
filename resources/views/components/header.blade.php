{{-- <nav x-data="{ open: false }" class="bg-white border-b border-gray-100"> --}}
<!DOCTYPE html>
<html lang="ja">
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
    <head>
    <!-- Site Tittle -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ $title }}</title> --}}

    <!-- Plugins css Style -->
    <link href= "{{ asset('plugins/fontawesome-5.15.2/css/all.min.css') }}" rel='stylesheet'>
    <link href= "{{ asset('plugins/fontawesome-5.15.2/css/fontawesome.min.css') }}" rel='stylesheet'>
    <link href= "{{ asset('plugins/animate/animate.css') }}" rel='stylesheet'>

    <link href= "{{ asset('plugins/fancybox/jquery.fancybox.min.css') }}" rel='stylesheet'>
    <link href= "{{ asset('plugins/isotope/isotope.min.css') }}" rel='stylesheet'>
    
    
    <link href= "{{ asset('plugins/owl-carousel/owl.carousel.min.css') }}" rel='stylesheet' media='screen'>
    <link href= "{{ asset('plugins/owl-carousel/owl.theme.default.min.css') }}" rel='stylesheet' media='screen'>
    <link href= "{{ asset('plugins/revolution/css/settings.css') }}" rel='stylesheet'>
    <link href= "{{ asset('plugins/revolution/css/layers.css') }}" rel='stylesheet'>
    <link href= "{{ asset('plugins/revolution/css/navigation.css') }}" rel='stylesheet'>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,600,700|Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    
    <!-- Custom css -->
    <link href="{{ asset('css/kidz.css') }}" id="option_style" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" id="option_style" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.png') }}" rel="shortcut icon">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>{{ $title }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/datepicker-ja.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/lightbox.js') }}"></script>
    
    <!-- Vue.js開発用 https://jp.vuejs.org/v2/guide/installation.html -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>