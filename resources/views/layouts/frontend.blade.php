<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
   
    

                                        {{-- Template Links  --}} 

                               <!-- ======= All CSS Plugins here ======== -->
  <link rel="stylesheet" href="{{asset('/app/css/plugins/swiper-bundle.min.css')}}">
  <link rel="stylesheet" href="{{asset('app/css/plugins/glightbox.min.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

  <!-- Plugin css -->
  <link rel="stylesheet" href="{{asset('app/css/vendor/bootstrap.min.css')}}">
  
  <!-- Custom Style CSS -->
  <link rel="stylesheet" href="{{asset('app/css/style.css')}}">

                                         {{-- Template Links  --}}







    @yield('css')
    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    @livewireStyles
</head>
<body>
   

    <!-- Start preloader -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
              
                <div class="txt-loading">
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    
                    <span data-text-preloader="Y" class="letters-loading">
                        Y
                    </span>
                    
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    
                    <span data-text-preloader="Z" class="letters-loading">
                        Z
                    </span>
                    
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="M" class="letters-loading">
                        M
                    </span>
                </div>
            </div>	

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
    <!-- End preloader -->

    <!-- Start header area -->
   
<!-- Header -->
@include('layouts.inc.app.header-1')
<!-- End Header -->




    @yield('content')

 <!-- Scroll top bar -->
 <button aria-label="scroll top btn" id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>
    
 










  <!-- All Script JS Plugins here  -->
  <script src="{{asset('app/js/vendor/popper.js')}}" defer="defer"></script>
  <script src="{{asset('app/js/vendor/bootstrap.min.js')}}" defer="defer"></script>

  <script src="{{asset('app/js/plugins/swiper-bundle.min.js')}}" defer="defer"></script>
  <script src="{{asset('app/js/plugins/glightbox.min.js')}}" defer="defer"></script>

  <!-- Customscript js -->
  <script src="{{asset('app/js/script.js')}}" defer="defer"></script>
  

@yield('script')

@livewireScripts
</body>
</html>
