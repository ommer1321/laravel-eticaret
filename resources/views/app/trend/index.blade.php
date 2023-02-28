@extends('layouts.app')

@section('title')
Trendler Page
@endsection

@section('css')

@endsection

@section('style')
@endsection


<!-- Mobile menu overlay mask -->




@section('content')

<section class="parallax-window" data-parallax="scroll" data-image-src="img/hotels_bg.jpg" data-natural-width="1400" data-natural-height="470">
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
         
            <!--End aside -->

            <div class="col-lg-12">

           
                <!--End tools -->

            
            
            
                <div class="row">
                    @if ($trends)
                    @foreach ($trends as $trendItem )
                        
                    
                    <div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
                        <div class="hotel_container">
                          
                            <div class="img_container">
                                <a href="{{route('list.category.app',$trendItem->slug)}}">
                                    <img src="{{asset($trendItem->productImages[0]->image)}}" width="800" height="533" class="img-fluid" alt="Image">
                                   
                                 
                                </a>
                            </div>
                            <div class="hotel_title">
                                <h3><strong>{{$trendItem->name}}</strong></h3>
                                <div class="rating">
                                    <small>{{$trendItem->description}}</small>
                                </div>
                                <!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="{{route('list.category.app',$trendItem->slug)}}">+<span class="tooltip-content-flip"><span class="tooltip-back">Ürünleri Gör</span></span></a>
                                </div>
                                <!-- End wish list-->
                            </div>
                        </div>
                        <!-- End box -->
                    </div>
                    <!-- End col-md-6 -->
           
                    @endforeach
                    {{$trends->links()}}
                    @else
                   <div class="col-md-6 wow zoomIn" data-wow-delay="0.2s">
                        No Result
                        </div>
                    @endif
                    
                  
                    
                </div>
                <!-- End row -->
                
              
                <!-- end pagination-->

            </div>
            <!-- End col lg 9 -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</main>
<!-- End main -->


@endsection


 






<!-- End main -->











@section('js')
	<!-- Map -->
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="{{asset('assets/js/map_hotels.js')}}"></script>
	<script src="{{asset('assets/js/infobox.js')}}"></script>
@endsection


@section('script')
@endsection