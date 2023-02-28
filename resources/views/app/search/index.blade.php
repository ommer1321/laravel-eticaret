@extends('layouts.app')

@section('title')
    Search Page
@endsection

@section('css')
@endsection

@section('style')
@endsection


<!-- Mobile menu overlay mask -->




@section('content')
    <section class="parallax-window" data-parallax="scroll" data-image-src="img/hotels_bg.jpg" data-natural-width="1400"
        data-natural-height="470">
        <div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
            <div class="animated fadeInDown">
                <h1>Trend</h1>
                <p>Cursus neque cursus curae ante scelerisque vehicula.</p>
            </div>
        </div>
    </section>
    <!-- End section -->

    <main>
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">Category</a>
                    </li>
                    <li>Page active</li>
                </ul>
            </div>
        </div>
        <!-- Position -->





        <div class="container margin_60">
            <div class="row">
                <div class="col-lg-12">

                    <div class="container margin_60">

                        <div class="row">
                            <div class="col-lg-12">

                                <div id="tools">
                                    <div class="row justify-content-between">
                                        <div class="col-md-3 col-sm-4">
                                            <div class="styled-select-filters">
                                                <select name="sort_price" id="sort_price">
                                                    <option value="" selected>Sort by price</option>
                                                    <option value="lower">Lowest price</option>
                                                    <option value="higher">Highest price</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-4 d-none d-sm-block text-end">
                                            <a href="#" class="bt_filters"><i class="icon-th"></i></a> <a
                                                href="all_hotels_list.html" class="bt_filters"><i
                                                    class=" icon-list"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--End tools -->

                                @foreach ($searchRes as $searchItem)
                                    <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 position-relative">
                                                <div class="ribbon_3 popular"><span>Popular</span>
                                                </div>
                                                <div class="wishlist">
                                                    <a class="tooltip_flip tooltip-effect-1"
                                                        href="javascript:void(0);">+<span class="tooltip-content-flip"><span
                                                                class="tooltip-back">Add to wishlist</span></span></a>
                                                </div>
                                                <div class="img_list">

                                                    <a href="single_hotel.html"><img src="{{asset($searchItem->productImages[0]->image)}}" alt="Image">

                                                        <div class="short_info"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="tour_list_desc">
                                                    <div class="score">Superb<span>9.0</span>
                                                    </div>
                                                    <div class="rating"><i class="icon-star voted"></i><i
                                                            class="icon-star  voted"></i><i class="icon-star  voted"></i><i
                                                            class="icon-star  voted"></i><i class="icon-star-empty"></i>
                                                    </div>
                                                    <h3><strong>{{$searchItem->name}}</strong> </h3>
                                                    <p>{{$searchItem->small_description}}</p>
                                                    <ul class="add_info">
                                                   
                                                        <li>
                                                            <a href="javascript:void(0);" class="tooltip-1"
                                                                data-bs-placement="top"
                                                                title="Plasma TV with cable channels"><i
                                                                    class="icon_set_2_icon-116"></i></a>
                                                        </li>
                                                      
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2">
                                                <div class="price_list">
                                                    <div><sup>$</sup>{{$searchItem->selling_price}}*<span
                                                            class="normal_price_list">${{$searchItem->original_price}}</span><small>*From/Per
                                                            night</small>
                                                        <p><a href="single_hotel.html" class="btn_1">Detaylar</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End strip -->
                                @endforeach

{{-- 

                                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 position-relative">
                                            <div class="ribbon_3"><span>Top rated</span>
                                            </div>
                                            <div class="wishlist">
                                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span
                                                        class="tooltip-content-flip"><span class="tooltip-back">Add to
                                                            wishlist</span></span></a>
                                            </div>
                                            <div class="img_list">
                                                <a href="single_hotel.html"><img src="img/hotel_3.jpg" alt="Image">
                                                    <div class="short_info"></div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="tour_list_desc">
                                                <div class="score">Superb<span>9.0</span>
                                                </div>
                                                <div class="rating"><i class="icon-star voted"></i><i
                                                        class="icon-star  voted"></i><i class="icon-star  voted"></i><i
                                                        class="icon-star  voted"></i><i class="icon-star  voted"></i>
                                                </div>
                                                <h3><strong>Lumiere</strong> Hotel</h3>
                                                <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat
                                                    sanctus detracto vis. Eos modus dolorum...</p>
                                                <ul class="add_info">
                                                    <li>
                                                        <a href="javascript:void(0);" class="tooltip-1"
                                                            data-bs-placement="top" title="Free Wifi"><i
                                                                class="icon_set_1_icon-86"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="tooltip-1"
                                                            data-bs-placement="top"
                                                            title="Plasma TV with cable channels"><i
                                                                class="icon_set_2_icon-116"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="tooltip-1"
                                                            data-bs-placement="top" title="Swimming pool"><i
                                                                class="icon_set_2_icon-110"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="tooltip-1"
                                                            data-bs-placement="top" title="Fitness Center"><i
                                                                class="icon_set_2_icon-117"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="tooltip-1"
                                                            data-bs-placement="top" title="Restaurant"><i
                                                                class="icon_set_1_icon-58"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <div class="price_list">
                                                <div><sup>$</sup>129*<span
                                                        class="normal_price_list">$99</span><small>*From/Per night</small>
                                                    <p><a href="single_hotel.html" class="btn_1">Details</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End strip --> --}}

                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><span class="page-link">1</span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- end pagination-->

                            </div>
                            <!-- End col lg-9 -->
                        </div>
                        <!-- End row -->
                    </div>


















                    {{-- 
<div class="container">
    <div class="search_bar">
        <span class="nav-facade-active" id="nav-search-in">
            <span id="nav-search-in-content" style="">All tours</span>
            <span class="nav-down-arrow nav-sprite"></span>
            <select title="Search in" class="searchSelect" id="searchDropdownBox" name="tours_category">
                <option value="All Tours" title="All Tours">All Tours</option>
                <option value="Museums" title="Museums">Museums</option>
                <option value="Tickets" title="Tickets">Tickets</option>
                <option value="Hotels" title="Hotels">Hotels</option>
                <option value="Restaurants" title="Restaurants">Restaurants</option>
            </select>
        </span>
        <div class="nav-searchfield-outer">
            <input type="text" autocomplete="off" name="field-keywords" placeholder="Type your search terms ...." id="twotabsearchtextbox">
        </div>
        <div class="nav-submit-button">
            <input type="submit" title="Cerca" class="nav-submit-input" value="Search">
        </div>
    </div>
    <!-- End search bar-->
</div> --}}




















                </div>
            </div>
        </div>


    </main>
@endsection









<!-- End main -->











@section('js')
@endsection


@section('script')
@endsection
