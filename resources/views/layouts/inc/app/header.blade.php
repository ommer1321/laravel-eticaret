<header>
    <div id="top_line">
        <div class="container">
            <div class="row">
                <div class="col-6"><i class="icon-phone"></i><strong>0045 043204434</strong></div>
                <div class="col-6">
                    <ul id="top_links">
                        <li><a href="#sign-in-dialog" id="access_link">Sign in</a></li>
                        <li><a href="wishlist.html" id="wishlist_link">Wishlist</a></li>
                        <li><a
                                href="http://themeforest.net/item/citytours-city-tours-tour-tickets-and-guides/10715647?ref=ansonika">{{ config('app.name', 'Laravel') }}</a>
                        </li>
                    </ul>
                </div>
            </div><!-- End row -->
        </div><!-- End container-->
    </div><!-- End top line-->

    <div class="container">
        <div class="row">
            <div class="col-3">
                <div id="logo_home">
                    {{-- Logo --}}
                </div>
            </div>
            <nav class="col-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu
                        mobile</span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        <img src="logo_sticky.png" width="160" height="34" alt="City tours">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                    <ul>


                        <li class="submenu">
                            <a href="{{ route('index.home') }}" class="show-submenu">Anasayfa </a>
                        </li>


                        <li class="submenu">
                            <a href="{{ route('index.category.app') }}" class="show-submenu">Kategoriler </i></a>

                        </li>

                        <li class="submenu">
                            <a href="{{ route('index.order') }}" class="show-submenu">Siparişler </a>
                        </li>

                        <li class="submenu">
                            <a href="{{ route('index.trends') }}" class="show-submenu">Trendler </a>
                        </li>


                        <li class="submenu">
                            <a href="{{ route('index.arrivals') }}" class="show-submenu">En Son Çıkanlar </a>
                        </li>


                        @if (Auth::user())
                            <li class="submenu">

                                <a href="" class="show-submenu"> <i style="font-size: 1rem"
                                        class="icon-user-3"></i>{{ Auth::user()->name }}</a>
                            </li>

                            <li class="submenu">

                                <a class="show-submenu" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                                    {{ __('Çıkış Yap') }} <i class="  icon-export-1"></i>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </li>

                        @else
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Hesap <i
                                        class="icon-down-open-mini"></i></a>
                                <ul>
                                    <!-- Authentication Links -->
                                    @guest
                                        @if (Route::has('login'))
                                            <li class="">
                                                <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                        @endif

                                        @if (Route::has('register'))
                                            <li class="">
                                                <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        {{-- <li class="">
                        <a id="navbarDropdown" class="" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                    </li> --}}
                                        <li>

                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>


                                </li>
                            @endguest
                        @endif
                    </ul>
                    </li>

                    </ul>
                </div><!-- End main-menu -->
                <ul id="top_tools">

                    <li>

                        <livewire:app.product.wish-count />

                    </li>


                    <li>

                        <livewire:app.product.cart-count />

                        <!-- End dropdown-cart-->
                    </li>
                </ul>
            </nav>
        </div>
    </div><!-- container -->
</header>

{{-- 
    eskisi
    
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                
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


        

</div> --}}
