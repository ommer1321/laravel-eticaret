<header class="header__section">

    <!-- Start main header -->
    <div class="main__header main__header--style2 header__sticky">
        <div class="container-fluid width-100">
            <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                <div class="offcanvas__header--menu__open ">
                    <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg"
                            viewBox="0 0 512 512">
                            <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352" />
                        </svg>
                        <span class="visually-hidden">Offcanvas Menu Open</span>
                    </a>
                </div>
                <div class="main__logo main__logo--style2">
                    <h1 class="main__logo--title"><a class="main__logo--link" href="index.html"><img
                                class="main__logo--img" src="{{ asset('app/img/logo/nav-logo-white.webp') }}"
                                alt="logo-img"></a></h1>
                </div>
                <div class="header__menu d-none d-lg-block">
                    <nav class="header__menu--navigation">
                        <ul class="d-flex">

                            <li class="header__menu--items style2">
                                <a class="header__menu--link style2" href="{{ route('index.home') }}">Anasayfa </a>
                            </li>


                            <li class="header__menu--items style2">
                                <a class="header__menu--link style2" href="index.html">Ürünler <span
                                        class="menu__plus--icon">+</span></a>
                                <ul class="header__sub--menu">
                                    <li class="header__sub--menu__items"><a href="index.html"
                                            class="header__sub--menu__link">Tüm Ürünler</a></li>
                                    <li class="header__sub--menu__items"><a href="{{ route('index.category.app') }}"
                                            class="header__sub--menu__link">Kategoriler</a></li>
                                    <li class="header__sub--menu__items"><a href="index-2.html"
                                            class="header__sub--menu__link">Trendler</a></li>
                                    <li class="header__sub--menu__items"><a href="index-3.html"
                                            class="header__sub--menu__link">En Son Çıkanlar</a></li>
                                </ul>
                            </li>

                            <li class="header__menu--items style2"><a class="header__menu--link style2"
                                    href="{{ route('index.home') }}">Hakkımızda</a></li>


                            <li class="header__menu--items style2"><a class="header__menu--link style2"
                                    href="contact.html">İletişim</a></li>

                            @guest
                                <li class="header__menu--items style2">

                                    <a class="offcanvas__account--items__btn d-flex align-items-center"
                                        href="javascript:void(0)">
                                        <span class="offcanvas__account--items__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20.51" height="19.443"
                                                viewBox="0 0 512 512">
                                                <path
                                                    d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="32"></path>
                                                <path
                                                    d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                                    fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                    stroke-width="32"></path>
                                            </svg>
                                        </span>
                                        <span class="offcanvas__account--items__label">Giriş</span>


                                    </a>

                                    <ul class="header__sub--menu">

                                        @if (Route::has('login'))
                                            <li class="header__sub--menu__items"><a href="{{ route('login') }}"
                                                    class="header__sub--menu__link">Giriş Yap</a></li>
                                        @endif


                                        @if (Route::has('register'))
                                            <li class="header__sub--menu__items"><a href="{{ route('register') }}"
                                                    class="header__sub--menu__link">Kayıt Ol</a></li>
                                        @endif

                                    </ul>
                                </li>
                            @endguest

                            @auth
                                <li class="header__menu--items style2">

                                    <a class="offcanvas__account--items__btn d-flex align-items-center"
                                        href="javascript:void(0)">
                                        <span class="offcanvas__account--items__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20.51" height="19.443"
                                                viewBox="0 0 512 512">
                                                <path
                                                    d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="32"></path>
                                                <path
                                                    d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                                    fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                    stroke-width="32"></path>
                                            </svg>
                                        </span>
                                        <span class="offcanvas__account--items__label">{{ Auth::user()->name }}</span>


                                    </a>

                                    <ul class="header__sub--menu">


                                        <li class="header__sub--menu__items"><a href="{{ route('index.home') }}"
                                                class="header__sub--menu__link">Siparişlerim</a></li>
                                        <li class="header__sub--menu__items"><a href="{{ route('index.home') }}"
                                                class="header__sub--menu__link">{{ Auth::user()->name }}</a></li>

                                        <li class="header__sub--menu__items"><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"
                                                class="header__sub--menu__link">Çıkış Yap</a>



                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>


                                    </ul>
                                </li>
                            @endauth

                        </ul>
                    </nav>
                </div>
                <div class="header__account">
                    <ul class="d-flex">

                        <li class="header__account--items  header__account--search__items d-sm-2-none">
                            <a class="header__account--btn search__open--btn style2" href="javascript:void(0)"
                                data-offcanvas>
                                <svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg"
                                    width="26.51" height="23.443" viewBox="0 0 512 512">
                                    <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                        fill="none" stroke="currentColor" stroke-miterlimit="10"
                                        stroke-width="32" />
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                </svg>
                                <span class="visually-hidden">Search</span>
                            </a>
                        </li>
                        <li class="header__account--items d-sm-2-none">
                            <a class="header__account--btn minicart__open--btn style2" href="javascript:void(0)"
                                data-offcanvas>
                                <span class="minicart__open--btn__style2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.897" height="21.565"
                                        viewBox="0 0 18.897 21.565">
                                        <path
                                            d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z"
                                            transform="translate(-2.667 -1.366)" fill="currentColor" />
                                    </svg>
                                </span>
                                <span class="items__count minicart__items--count2">
                                    <livewire:app.product.cart-count />
                                </span>


                            </a>
                        </li>
                        {{-- <li class="header__account--items  ">
                              @auth

                              <a class="offcanvas__account--items__btn d-flex align-items-center" href="{{route('login')}}">
                                <span class="offcanvas__account--items__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20.51" height="19.443" viewBox="0 0 512 512">
                                        <path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path>
                                        <path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path>
                                    </svg>
                                </span>
                               
                              <span class="offcanvas__account--items__label">{{auth()->user()->name}}</span>
                            
                            </a> 
                              
                               @endauth
                                 @guest

                                 <a class="offcanvas__account--items__btn d-flex align-items-center" href="{{route('login')}}">
                                    <span class="offcanvas__account--items__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20.51" height="19.443" viewBox="0 0 512 512">
                                            <path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path>
                                            <path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path>
                                        </svg>
                                    </span>
                                    <span class="offcanvas__account--items__label">Giriş</span>
                                 
                                
                                </a> 
                              
                               @endguest
                        </li> --}}
                    </ul>
                </div>
                <a class="header__contact--text" href="#contactsection">Teklif Al</a>
            </div>
        </div>
    </div>
    <!-- End main header -->

    <!-- Start Offcanvas header menu -->
    <div class="offcanvas-header" tabindex="-1">
        <div class="offcanvas__inner">
            <div class="offcanvas__logo">
                <a class="offcanvas__logo_link" href="index.html">
                    <img src="{{ asset('app/img/logo/nav-logo.webp') }}" alt="Rokon Logo">
                </a>
                <button class="offcanvas__close--btn" data-offcanvas>close</button>
            </div>
            <nav class="offcanvas__menu">
                <ul class="offcanvas__menu_ul">


                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="{{ route('index.home') }}">

                            <div class="row">
                                <div class="col-3 d-flex align-items-center"> <span
                                        class="offcanvas__account--items__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20.51" height="19.443"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                                fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="32" />
                                            <path
                                                d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                                fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                stroke-width="32" />
                                        </svg>
                                    </span> </div>
                                <div class="col-9 d-flex align-items-center"> <b> {{ Auth::user()->name }}</b></div>
                            </div>





                        </a></li>
                    @auth

                        <li class="offcanvas__menu_li ">


                            <a class="offcanvas__menu_item" href="#">Hesabım</a>
                            <ul class="offcanvas__sub_menu">


                                <li class="offcanvas__sub_menu_li"><a href="{{ route('index.home') }}"
                                        class="offcanvas__sub_menu_item">Siparişlerim</a></li>


                                <li class="offcanvas__sub_menu_li"><a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                        class="offcanvas__sub_menu_item">Çıkış Yap</a>



                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>


                            </ul>
                        </li>

                    @endauth




                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="#">Ürünler</a>
                        <ul class="offcanvas__sub_menu">
                            <li class="offcanvas__sub_menu_li"><a href="{{ route('index.home') }}"
                                    class="offcanvas__sub_menu_item">Tüm Ürünler</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="{{ route('index.home') }}"
                                    class="offcanvas__sub_menu_item">Kategoriler</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="{{ route('index.home') }}"
                                    class="offcanvas__sub_menu_item">En Son Çıkanlar</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="{{ route('index.home') }}"
                                    class="offcanvas__sub_menu_item">Trendler</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="{{ route('index.home') }}"
                                    class="offcanvas__sub_menu_item">Tüm Ürünler</a></li>

                        </ul>
                    </li>

                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item"
                            href="{{ route('index.order') }}">Siparişlerim</a></li>

                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item"
                            href="{{ route('index.cart') }}">Sepetim</a></li>

                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item"
                            href="{{ route('index.wishlist') }}">Favorilerim</a></li>


                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item"
                            href="{{ route('index.home') }}">Hakkımızda</a></li>

                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item"
                            href="{{ route('index.home') }}">İletişim</a></li>



                </ul>

                @guest

                    <div class="offcanvas__account--items">
                        <a class="offcanvas__account--items__btn d-flex align-items-center" href="{{ route('login') }}">
                            <span class="offcanvas__account--items__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.51" height="19.443"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="32" />
                                    <path
                                        d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                        fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                </svg>
                            </span>


                            <span class="offcanvas__account--items__label">Giriş / Kayıt Ol</span>
                        </a>
                    </div>
                @endguest



            </nav>
        </div>
    </div>
    <!-- End Offcanvas header menu -->
    <div>


        <!-- Start Offcanvas stikcy toolbar -->
        <div class="offcanvas__stikcy--toolbar" tabindex="-1">
            <ul class="d-flex justify-content-between">
                <li class="offcanvas__stikcy--toolbar__list">
                    <a class="offcanvas__stikcy--toolbar__btn" href="{{ route('index.home') }}">
                        <span class="offcanvas__stikcy--toolbar__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="21.51" height="21.443"
                                viewBox="0 0 22 17">
                                <path fill="currentColor"
                                    d="M20.9141 7.93359c.1406.11719.2109.26953.2109.45703 0 .14063-.0469.25782-.1406.35157l-.3516.42187c-.1172.14063-.2578.21094-.4219.21094-.1406 0-.2578-.04688-.3515-.14062l-.9844-.77344V15c0 .3047-.1172.5625-.3516.7734-.2109.2344-.4687.3516-.7734.3516h-4.5c-.3047 0-.5742-.1172-.8086-.3516-.2109-.2109-.3164-.4687-.3164-.7734v-3.6562h-2.25V15c0 .3047-.11719.5625-.35156.7734-.21094.2344-.46875.3516-.77344.3516h-4.5c-.30469 0-.57422-.1172-.80859-.3516-.21094-.2109-.31641-.4687-.31641-.7734V8.46094l-.94922.77344c-.11719.09374-.24609.14062-.38672.14062-.16406 0-.30468-.07031-.42187-.21094l-.35157-.42187C.921875 8.625.875 8.50781.875 8.39062c0-.1875.070312-.33984.21094-.45703L9.73438.832031C10.1094.527344 10.5312.375 11 .375s.8906.152344 1.2656.457031l8.6485 7.101559zm-3.7266 6.50391V7.05469L11 1.99219l-6.1875 5.0625v7.38281h3.375v-3.6563c0-.3046.10547-.5624.31641-.7734.23437-.23436.5039-.35155.80859-.35155h3.375c.3047 0 .5625.11719.7734.35155.2344.211.3516.4688.3516.7734v3.6563h3.375z">
                                </path>
                            </svg>
                        </span>
                        <span class="offcanvas__stikcy--toolbar__label">Home</span>
                    </a>
                </li>
                <li class="offcanvas__stikcy--toolbar__list">
                    <a class="offcanvas__stikcy--toolbar__btn" href="shop.html">
                        <span class="offcanvas__stikcy--toolbar__icon">
                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18.51"
                                height="17.443" viewBox="0 0 448 512">
                                <path
                                    d="M416 32H32A32 32 0 0 0 0 64v384a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32V64a32 32 0 0 0-32-32zm-16 48v152H248V80zm-200 0v152H48V80zM48 432V280h152v152zm200 0V280h152v152z">
                                </path>
                            </svg>
                        </span>
                        <span class="offcanvas__stikcy--toolbar__label">Shop</span>
                    </a>
                </li>
                <li class="offcanvas__stikcy--toolbar__list ">
                    <a class="offcanvas__stikcy--toolbar__btn search__open--btn" href="javascript:void(0)"
                        data-offcanvas>
                        <span class="offcanvas__stikcy--toolbar__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443"
                                viewBox="0 0 512 512">
                                <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                    fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                            </svg>
                        </span>
                        <span class="offcanvas__stikcy--toolbar__label">Search</span>
                    </a>
                </li>

                {{-- Wishlist --}}

                <livewire:app.product.wish-count />

                {{-- Cart --}}

                <li class="offcanvas__stikcy--toolbar__list">
                    <a class="offcanvas__stikcy--toolbar__btn minicart__open--btn" href="javascript:void(0)"
                        data-offcanvas>
                        <span class="offcanvas__stikcy--toolbar__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18.51" height="15.443"
                                viewBox="0 0 18.51 15.443">
                                <path
                                    d="M79.963,138.379l-13.358,0-.56-1.927a.871.871,0,0,0-.6-.592l-1.961-.529a.91.91,0,0,0-.226-.03.864.864,0,0,0-.226,1.7l1.491.4,3.026,10.919a1.277,1.277,0,1,0,1.844,1.144.358.358,0,0,0,0-.049h6.163c0,.017,0,.034,0,.049a1.277,1.277,0,1,0,1.434-1.267c-1.531-.247-7.783-.55-7.783-.55l-.205-.8h7.8a.9.9,0,0,0,.863-.651l1.688-5.943h.62a.936.936,0,1,0,0-1.872Zm-9.934,6.474H68.568c-.04,0-.1.008-.125-.085-.034-.118-.082-.283-.082-.283l-1.146-4.037a.061.061,0,0,1,.011-.057.064.064,0,0,1,.053-.025h1.777a.064.064,0,0,1,.063.051l.969,4.34,0,.013a.058.058,0,0,1,0,.019A.063.063,0,0,1,70.03,144.853Zm3.731-4.41-.789,4.359a.066.066,0,0,1-.063.051h-1.1a.064.064,0,0,1-.063-.051l-.789-4.357a.064.064,0,0,1,.013-.055.07.07,0,0,1,.051-.025H73.7a.06.06,0,0,1,.051.025A.064.064,0,0,1,73.76,140.443Zm3.737,0L76.26,144.8a.068.068,0,0,1-.063.049H74.684a.063.063,0,0,1-.051-.025.064.064,0,0,1-.013-.055l.973-4.357a.066.066,0,0,1,.063-.051h1.777a.071.071,0,0,1,.053.025A.076.076,0,0,1,77.5,140.448Z"
                                    transform="translate(-62.393 -135.3)" fill="currentColor" />
                            </svg>
                        </span>
                        <span class="offcanvas__stikcy--toolbar__label">Cart</span>
                        <span class="items__count">
                            <livewire:app.product.cart-count />
                        </span>
                    </a>
                </li>


            </ul>
        </div>
        <!-- End Offcanvas stikcy toolbar -->

        {{-- --}}
        <livewire:app.cart.basket />

    </div>
    <!-- Start serch box area -->
    <div class="predictive__search--box " tabindex="-1">
        <div class="predictive__search--box__inner">
            <h2 class="predictive__search--title">Search Products</h2>
            <form class="predictive__search--form" action="{{ route('search.home') }}" method="get">
                <label>
                    <input class="predictive__search--input" name="s" placeholder="Search Here"
                        type="text">
                </label>
                <button class="predictive__search--button" aria-label="search button"><svg
                        class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="30.51"
                        height="25.443" viewBox="0 0 512 512">
                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none"
                            stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                            stroke-width="32" d="M338.29 338.29L448 448" />
                    </svg> </button>
            </form>
        </div>
        <button class="predictive__search--close__btn" aria-label="search close btn" data-offcanvas>
            <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51"
                height="30.443" viewBox="0 0 512 512">
                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="32" d="M368 368L144 144M368 144L144 368" />
            </svg>
        </button>
    </div>
    <!-- End serch box area -->
</header>
<!-- End header area -->
