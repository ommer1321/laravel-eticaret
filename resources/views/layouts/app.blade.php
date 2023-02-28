<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta  name="description" content="@yield('description')">
    <meta  name="keywords" content="@yield('keywords')">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
   
    

                                        {{-- Template Links  --}}
    
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- COMMON CSS -->
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/vendors.css')}}" rel="stylesheet">

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/rev-slider-files/fonts/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/rev-slider-files/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/rev-slider-files/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/rev-slider-files/css/navigation.css')}}">

	<!-- CUSTOM CSS -->
	<link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">

        <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
                                         {{-- Template Links  --}}







    @yield('css')

    @yield('style')
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    @livewireStyles
</head>
<body>

    
<!--  Preload -->
<div id="preloader">
    <div class="sk-spinner sk-spinner-wave">
        <div class="sk-rect1"></div>
        <div class="sk-rect2"></div>
        <div class="sk-rect3"></div>
        <div class="sk-rect4"></div>
        <div class="sk-rect5"></div>
    </div>
</div>
<!-- End Preload -->
<div class="layer"></div>



<!-- Header -->
@include('layouts.inc.app.header')
<!-- End Header -->



<!--  main -->
<main>


@yield('content')

   

<!-- End main -->


</main>


<!-- start footer -->

@include('layouts.inc.app.footer')

<!-- End footer -->



    <!-- Common scripts -->

    <script src="{{asset('assets/js/jquery-3.6.3.min.js')}}"></script>
    <script src="{{asset('assets/js/common_scripts_min.js')}}"></script>
    <script src="{{asset('assets/js/functions.js')}}"></script>
    
    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script src="{{asset('assets/rev-slider-files/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('assets/rev-slider-files/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('assets/rev-slider-files/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('assets/rev-slider-files/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('assets/rev-slider-files/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('assets/rev-slider-files/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('assets/rev-slider-files/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('assets/rev-slider-files/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('assets/rev-slider-files/js/extensions/revolution.addon.slicey.min.js')}}"></script>


    <!--Scripts-->
  
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  
    <!-- Alertifyjs JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>


        <script>
        window.addEventListener('message', event => {
        
            alertify.set('notifier','position', 'bottom-left');
            alertify.message(event.detail.text);
        })
        </script>
    <!-- Alertifyjs JavaScript -->

@yield('js')

@yield('script')

@livewireScripts
</body>
</html>
