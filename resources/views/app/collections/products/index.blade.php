@extends('layouts.app')

@section('title')
{{$category->name}}
@endsection

@section('description')
{{$category->meta_description}}
@endsection

@section('keywords')
{{$category->meta_keywords}}
@endsection


@section('css')

<!-- SPECIFIC CSS -->
<link href="{{asset('assets/css/shop.css')}}" rel="stylesheet">
	
@endsection

@section('style')
@endsection



@section('content')

<section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
        <div class="animated fadeInDown">
            <h1>{{$category->name}}</h1>
            <p>{{$category->description}}</p>
        </div>
    </div>
</section>
<!-- End Section -->


<main>
    <div id="position">
        <div class="container">
            <ul>
                <li><a href="{{route('index.home')}}">Home</a>
                </li>
                <li><a href="{{route('index.category.app')}}">Category</a>
                </li>
                <li>{{$category->name}}</li>
            </ul>
        </div>
    </div>
    <!-- End Position -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-lg-9">  
                <div class="shop-section">
                   
                    <!--End Sort By-->

   
                        <livewire:app.product.index  :category="$category" />                  
                
                <!-- End row -->
     
    </aside>
</div>
<!--Sidebar-->



    </div>
    <!-- End Container -->
</main>
<!-- End main -->



                    <!-- start pagination-->

                    {{-- <nav aria-label="Page navigation">
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
                    </nav> --}}


                    <!-- end pagination-->


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