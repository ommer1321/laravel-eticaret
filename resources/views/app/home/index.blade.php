@extends('layouts.app')

@section('title')
Home Page
@endsection

@section('css')

@endsection

@section('style')
@endsection


<!-- Mobile menu overlay mask -->




 @section('content')

<!-- START SLIDER -->
        <div id="rev_slider_44_wrapper" class="rev_slider_wrapper fullscreen-container">
            <!-- Start revolution slider 5.4.8 fullscreen mode -->
            <div id="rev_slider_44" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8">
                <ul> 



             
                    <!-- start slide 01 -->
@foreach ( $sliders as $slider  )
    

                    <li data-index="rs-73" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"  data-rotate="0"  data-saveperformance="off"  data-title="01" data-param1="01" data-description="">
                        <!-- main image -->
                        <img src="{{asset('uploads/sliders/'.$slider->image)}}" alt="" data-bgcolor="#ccc" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>

                        <div class="rev-slider-mask"></div> 
                        <!-- opacity mask -->

                        <!-- main text layer -->
                        <div class="tp-caption tp-resizeme text-center"
                             id="slide-411-layer-01"
                             data-frames='[{"delay":200,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-type="text"
                             data-whitespace="nowrap"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                             data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-115','-65']" 
                             data-width="auto"
                             data-height="auto"
                             data-fontsize="['70','53','60','35']"
                             data-lineheight="['70','59','70','39']"
                             data-letterspacing="['-2','-1','-1','-1']"
                             data-responsive="off"
                             data-responsive_offset="off"
                             data-paddingtop="['0','0','0','0']"
                             data-paddingbottom="['15','8','8','8']"
                             data-paddingright="['0','0','0','0']"
                             data-paddingleft="['0','0','0','0']"
                             style="text-shadow: 0 0 20px rgba(0,0,0,0.3); font-weight: 700; color:#fff;">{{$slider->title}}</div>

                        <!-- small text layer -->
                        <div class="tp-caption tp-resizeme text-center"
                             id="slide-411-layer-02" 
                             data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-type="text"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                             data-y="['middle','middle','middle','middle']" data-voffset="['65','100','-5','15']" 
                             data-width="auto"
                             data-height="auto"
                             data-fontsize="['21','16','19','14']"
                             data-lineheight="['28','14','23','20']"
                             data-letterspacing="['0.5','0.5','0.5','0.5']"
                             data-responsive="off"
                             data-responsive_offset="on" style="color: #fff;">{{$slider->description}}
                        </div> 

                        <!-- btn layer -->
                        <div class="tp-caption tp-resizeme btn_1"
                           data-actions='[{"event":"click","action":"scrollbelow","offset":"-49px","delay":"","speed":"300","ease":"Linear.easeNone"}]'
                           id="slide-411-layer-03" 
                           data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                           data-y="['middle','middle','middle','middle']" data-voffset="['152','130','82','80']"
                           data-whitespace="nowrap"
                           data-type="button"
                           data-responsive="off"
                           data-responsive_offset="off"
                           data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                           data-textAlign="['center','center','center','center']" style="line-height: 1; padding: 15px 20px; font-size: 16px;font-weight: 600;">Get Started Now 
                        </div>         
                    </li>
@endforeach


                    <!-- end slide 01 -->
              
                </ul>
            </div>
        </div>
<!-- END REVOLUTION SLIDER -->


 
<div class="container margin_60">
    <div class="container">
       
        
           
               <div class="row">
              <form action="{{route('search.home')}}" method="get">
                  <div class="col-md-9">
                      <input type="text" name="s" class="form-control">
                    </div>    
                    <div class="col-md-3">
                        <button class="btn btn-danger">Ara</button>
                    </div>
                    
                </form>  
            
       
            
        </div>


        <!-- End search bar-->
    </div>
    
    <div class="main_title mt-5">
        <h2><span> Trendler</span></h2>
        <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
    </div>

    <div class="owl-carousel owl-theme list_carousel add_bottom_30">
       
       
@foreach ($trends as $trendItem )


        <div class="item">
            <div class="tour_container">
                <div class="ribbon_3 popular"><span>Trend</span></div>
                <div class="img_container">
                    <a href="{{route('detail.product.app',[$trendItem->category->slug,$trendItem->slug])}}">
                        {{-- Ommer1453 default ürü görsel yo k --}}
                        <img src="{{asset($trendItem->productImages[0]->image)}}" width="800" height="533" class="img-fluid" alt="image">
                        <div class="short_info">
                            {{Str::title($trendItem->category->name);}}  <span class="price"><sup>$</sup>{{$trendItem->selling_price}}</span>
                        </div>
                    </a>
                </div>
                <div class="tour_title">
                    <h3><strong> {{Str::title($trendItem->name);}}   </strong> </h3>
                    {{Str::title($trendItem->small_description);}}
                   
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i>
                    </div>
           
              
                    <!-- End wish list-->
                </div>
            </div>
            <!-- End box tour -->
        </div>
        <!-- /item -->
        @endforeach

       
        

        <!-- /item -->
    </div>
    <!-- /carousel -->
    
    <p class="text-center add_bottom_30">
        <a href="{{route('index.trends')}}" class="btn_1">Tüm Trendler</a>
    </p>



{{--  --}}

<hr class="mt-5 mb-5">

<div class="main_title mb-5">
    <h2><span>En Yeniler</span></h2>
    <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
</div>

<div class="row">


    @foreach ($newArrivals as $arrivalItem )
        
    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
        <div class="hotel_container">
            <div class="ribbon_3 "><span>En Yeniler</span></div>
            <div class="img_container">
                <a href="{{route('detail.product.app',[$arrivalItem->category->slug,$arrivalItem->slug])}}">
                    <img src="{{asset($arrivalItem->productImages[0]->image)}}" width="800" height="533" class="img-fluid" alt="image">
                    <div class="score"><span>7.5</span>Good</div>
                    <div class="short_info hotel">
                        <span class="price"><sup>$</sup>{{$arrivalItem->selling_price}}</span>
                    </div>
                </a>
            </div>
            <div class="hotel_title">
                <h3><strong>{{Str::title($arrivalItem->name);}} </strong> </h3>
                <div class="rating">
                    <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                </div>
                <!-- end rating -->
                <div class="wishlist">
                    <a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                </div>
                <!-- End wish list-->
            </div>
        </div>
        <!-- End box -->
    </div>
    <!-- End col -->
    
    
    @endforeach
    
    
    <!-- End col -->


    <!-- End col -->

    <!-- End col -->
    <p class="text-center add_bottom_30 mt-5">
        <a href="{{route('index.arrivals')}}" class="btn_1">Tüm Yeniler</a>
    </p>

</div>
{{--  --}}













    <hr class="mt-5 mb-5">

    <div class="main_title">
        <h2>Paris <span>Top</span> Hotels</h2>
        <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
    </div>

    <div class="owl-carousel owl-theme list_carousel add_bottom_30">
        <div class="item">
            <div class="hotel_container">
                <div class="ribbon_3 popular"><span>Popular</span></div>
                <div class="img_container">
                    <a href="single_hotel.html">
                        <img src="img/hotel_1.jpg" width="800" height="533" class="img-fluid" alt="image">
                        <div class="score"><span>7.5</span>Good</div>
                        <div class="short_info hotel">
                            <span class="price"><sup>$</sup>59</span>
                        </div>
                    </a>
                </div>
                <div class="hotel_title">
                    <h3><strong>Park Hyatt</strong> Hotel</h3>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                    </div>
                    <!-- end rating -->
                    <div class="wishlist">
                        <a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                    </div>
                    <!-- End wish list-->
                </div>
            </div>
            <!-- End box -->
        </div>
        <!-- /item -->
        <div class="item">
            <div class="hotel_container">
                <div class="ribbon_3 popular"><span>Popular</span></div>
                <div class="img_container">
                    <a href="single_hotel.html">
                        <img src="img/hotel_2.jpg" width="800" height="533" class="img-fluid" alt="image">
                        <div class="score"><span>9.0</span>Superb</div>
                        <div class="short_info hotel">
                            <span class="price"><sup>$</sup>45</span>
                        </div>
                    </a>
                </div>
                <div class="hotel_title">
                    <h3><strong>Mariott</strong> Hotel</h3>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                    </div>
                    <!-- end rating -->
                    <div class="wishlist">
                        <a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                    </div>
                    <!-- End wish list-->
                </div>
            </div>
            <!-- End box -->
        </div>
        <!-- /item -->
        <div class="item">
            <div class="hotel_container">
                <div class="ribbon_3"><span>Top rated</span></div>
                <div class="img_container">
                    <a href="single_hotel.html">
                        <img src="img/hotel_3.jpg" width="800" height="533" class="img-fluid" alt="image">
                        <div class="score"><span>9.5</span>Superb</div>
                        <div class="short_info hotel">
                            <span class="price"><sup>$</sup>39</span>
                        </div>
                    </a>
                </div>
                <div class="hotel_title">
                    <h3><strong>Lumiere</strong> Hotel</h3>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                    </div>
                    <!-- end rating -->
                    <div class="wishlist">
                        <a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                    </div>
                    <!-- End wish list-->
                </div>
            </div>
            <!-- End box -->
        </div>
        <!-- /item -->
        <div class="item">
            <div class="hotel_container">
                <div class="ribbon_3"><span>Top rated</span></div>
                <div class="img_container">
                    <a href="single_hotel.html">
                        <img src="img/hotel_4.jpg" width="800" height="533" class="img-fluid" alt="image">
                        <div class="score"><span>7.5</span>Good</div>
                        <div class="short_info hotel">
                            <span class="price"><sup>$</sup>45</span>
                        </div>
                    </a>
                </div>
                <div class="hotel_title">
                    <h3><strong>Novelle</strong> Hotel</h3>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                    </div>
                    <!-- end rating -->
                    <div class="wishlist">
                        <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                    </div>
                    <!-- End wish list-->
                </div>
            </div>
            <!-- End box -->
        </div>
        <!-- /item -->
        <div class="item">
            <div class="hotel_container">
                <div class="ribbon_3"><span>Top rated</span></div>
                <div class="img_container">
                    <a href="single_hotel.html">
                        <img src="img/hotel_5.jpg" width="800" height="533" class="img-fluid" alt="image">
                        <div class="score"><span>8.0</span>Good</div>
                        <div class="short_info hotel">
                            <span class="price"><sup>$</sup>39</span>
                        </div>
                    </a>
                </div>
                <div class="hotel_title">
                    <h3><strong>Louvre</strong> Hotel</h3>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                    </div>
                    <!-- end rating -->
                    <div class="wishlist">
                        <a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                    </div>
                    <!-- End wish list-->
                </div>
            </div>
            <!-- End box -->
        </div>
        <!-- /item -->
    </div>
    <!-- /carousel -->
    
    <p class="text-center nopadding">
        <a href="all_hotels_list.html" class="btn_1">View all Hotels</a>
    </p>
    
</div>
<!-- End container -->



      @endsection


 






<!-- End main -->











@section('js')
@endsection


@section('script')
<script>
    var tpj = jQuery;

    var revapi44;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_44").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_44");
        } else {
            revapi44 = tpj("#rev_slider_44").show().revolution({
                sliderType: "standard",
                jsFileLocation: "revolution-slider/js/",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 5000,
                navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        touchOnDesktop: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        enable: true,
                        style: 'erinyen',
                        tmp: '',
                        rtl: false,
                        hide_onleave: true,
                        hide_onmobile: true,
                        hide_under: 767,
                        hide_over: 9999,
                        hide_delay: 0,
                        hide_delay_mobile: 0,

                        left: {
                            container: 'slider',
                            h_align: 'left',
                            v_align: 'center',
                            h_offset: 60,
                            v_offset: 0
                        },

                        right: {
                            container: 'slider',
                            h_align: 'right',
                            v_align: 'center',
                            h_offset: 60,
                            v_offset: 0
                        }
                    },
                    bullets: {
                        enable: true,
                        style: 'zeus',
                        direction: 'horizontal',
                        rtl: false,

                        container: 'slider',
                        h_align: 'center',
                        v_align: 'bottom',
                        h_offset: 0,
                        v_offset: 30,
                        space: 7,

                        hide_onleave: false,
                        hide_onmobile: false,
                        hide_under: 0,
                        hide_over: 767,
                        hide_delay: 200,
                        hide_delay_mobile: 1200
                    },
                },
                responsiveLevels: [1240, 1025, 778, 480],
                visibilityLevels: [1920, 1500, 1025, 768],
                gridwidth: [1200, 991, 778, 480],
                gridheight: [1025, 1366, 1025, 868],
                lazyType: "none",
                shadow: 0,
                spinner: "spinner4",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "on",
                fullScreenAutoWidth: "on",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                disableProgressBar: "on",
                hideThumbsOnMobile: "on",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLimit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });
    </script>
@endsection