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
    
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- COMMON CSS -->
	<link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/vendors.css')}}" rel="stylesheet">

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/rev-slider-files/fonts/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/rev-slider-files/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/rev-slider-files/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/rev-slider-files/css/navigation.css')}}">

	<!-- CUSTOM CSS -->
	<link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet">

                                         {{-- Template Links  --}}







    @yield('css')
    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    @livewireStyles
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

   
            @yield('content')
  
    </div>




    <!-- Common scripts -->

    <script src="{{asset('assets/js/jquery-3.6.3.min.js')}}"></script>
    
    {{-- <script src="{{asset('frontend/js/jquery-3.6.0.min.js')}}"></script> --}}
    <script src="{{asset('assets/js/common_scripts_min.js')}}"></script>
    <script src="{{asset('assets/js/functions.js')}}"></script>
    
    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script src="{{asset('frontend/rev-slider-files/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('frontend/rev-slider-files/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('frontend/rev-slider-files/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('frontend/rev-slider-files/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('frontend/rev-slider-files/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('frontend/rev-slider-files/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('frontend/rev-slider-files/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('frontend/rev-slider-files/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('frontend/rev-slider-files/js/extensions/revolution.addon.slicey.min.js')}}"></script>


    <!--Scripts-->
  
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
   
    
@yield('script')

@livewireScripts
</body>
</html>
