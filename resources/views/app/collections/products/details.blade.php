@extends('layouts.app')

@section('title')
{{$product->name}}
@endsection

@section('description')
{{$product->meta_description}}
@endsection

@section('keywords')
{{$product->meta_keywords}}
@endsection


@section('css')

	<!-- SPECIFIC CSS -->
	<link href="{{asset('assets/css/shop.css')}}" rel="stylesheet">
	


	
@endsection

@section('style')


<style>
/* Chat Gpt Code */
.counter {
  display: flex;
  align-items: center;
  justify-content: start;
}

.decrement, .increment {
  width: 30px;
  height: 30px;
  border: 1px solid gray;
  border-radius: 50%;
  text-align: center;
  line-height: 28px;
  font-size: 18px;
  cursor: pointer;
  background-color: white;
  margin: 0 10px;
}

.decrement:active, .increment:active {
  background-color: lightgray;
}

input[type="number"] {
  width: 50px;
  height: 30px;
  text-align: center;
  border: 1px solid gray;
  font-size: 18px;
  background-color: white;
  border-radius: 15px;
}

</style>
@endsection



@section('content')

<section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
        <div class="animated fadeInDown">
            <h1>{{$product->name}}</h1>
            <p>{{$product->description}}</p>
        </div>
    </div>
</section>




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
    <!-- End Position -->
    


    <div class="container margin_60">
        <div class="row">
            <div class="col-lg-9">

                <div class="product-details">

                    <div class="basic-details">
                        <div class="row">
                          @if ($product->productImages)
                        
                          <div class="image-column col-sm-6">
                            <figure class="image-box"><img src="{{asset($product->productImages[0]->image)}}" alt="">
                            </figure>
                        </div>

                        @else
                        <div class="alert alert-warning"> No İmages</div>


                          @endif
                            
               
                <div class="info-column col-sm-6">
                      
                <div class="details-header">
                    <h2>{{$product->name}}</h2>
                    <div class="item-price">
                        <span class="offer">${{$product->selling_price}}</span> ${{$product->original_price}}
                    </div>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i> (3 Customer Reviews)
                    </div>
                </div>
                <div class="text">
                    <p>
                        {{$product->small_description}}
                    </p>
                </div>


           
               {{--  --}}
               <livewire:app.product.add-to-cart  :category="$category" :product="$product" />    
               {{--  --}}

                <!--Item Meta-->
                <ul class="item-meta">
                    <li>Category: <a href="#">{{$category->name}}</a>
                    </li>
                </ul>
           
                <hr>
            <div class="alert alert-warning"> <b> <i class="  icon-pen voted"></i> Renk Seçiniz <i class=" icon-left voted"></i>  Miktar Seçiniz <i class=" icon-left voted"></i> Sepete Ekleyiniz</b></div>
            </div>
             
    
                    


                            
                        </div>
                    </div>
                    <!--End Basic Details-->

                    <div class="product-info-tabs">

                        <div class="prod-tabs" id="product-tabs">
                            <div class="tab-btns clearfix">
                                <a href="#prod-description" class="tab-btn active-btn">Ürün Açıklama</a>
                            </div>

                            <div class="tabs-container">
                                <div class="tab active-tab" id="prod-description">
                                    <h3>Ürün Açıklama</h3>
                                    <div class="content">
                                        <p>
                                            {{$product->description}}       
                                        </p>
                                    </div>
                                </div>
                                <!--End Tab-->

                            
                            </div>
                            <!--End tabs-container-->
                        </div>
                        <!--End prod-tabs-->
                    </div>
                    
                </div>
                <!--End Product-details-->
            </div>
            <!--End Col-->
            
            {{-- ---------- --}}
            
            <div class="col-lg-3">
                <aside class="sidebar">
                    <div class="widget">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" style="margin-left:0;"><i class="icon-search"></i></button>
                            </span>
                        </div>
                    </div>
                    <!-- End Search -->
                    <hr>
                    <div class="widget" id="cat_shop">
                        <h4>Categories</h4>
                        <ul>
                            <li><a href="#">Places to visit</a>
                            </li>
                            <li><a href="#">Top tours</a>
                            </li>
                            <li><a href="#">Tips for travellers</a>
                            </li>
                            <li><a href="#">Events</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End widget -->
                    <hr>
                    <div class="widget">
                        <h4>Filter</h4>
                        <input type="text" id="range" name="range" value="">
                    </div>
                    <!-- End widget -->
                    <hr>
                    <div class="widget related-products">
                        <h4>Top Related </h4>
                        <div class="post">
                            <figure class="post-thumb">
                                <a href="#"><img src="img/products/thumb-1.jpg" alt="">
                                </a>
                            </figure>
                            <h5><a href="#">Grunge Fashion</a></h5>
                            <div class="rating">
                                <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                            </div>
                            <div class="price">
                                $ 15.00
                            </div>
                        </div>
                        <div class="post">
                            <figure class="post-thumb">
                                <a href="#"><img src="img/products/thumb-2.jpg" alt="">
                                </a>
                            </figure>
                            <h5><a href="#">Office Kit</a></h5>
                            <div class="rating">
                                <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                            </div>
                            <div class="price">
                                $ 15.00
                            </div>
                        </div>
                        <div class="post">
                            <figure class="post-thumb">
                                <a href="#"><img src="img/products/thumb-3.jpg" alt="">
                                </a>
                            </figure>
                            <h5><a href="#">Crime &amp; Punishment</a></h5>
                            <div class="rating">
                                <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                            </div>
                            <div class="price">
                                $ 15.00
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <!--Sidebar-->
        </div>
    </div>
    <!-- End Container -->
</main>
<!-- End main -->





@endsection







@section('js')

@endsection


@section('script')


<script>
    if ($('.prod-tabs .tab-btn').length) {
        $('.prod-tabs .tab-btn').on('click', function (e) {
            e.preventDefault();
            var target = $($(this).attr('href'));
            $('.prod-tabs .tab-btn').removeClass('active-btn');
            $(this).addClass('active-btn');
            $('.prod-tabs .tab').fadeOut(0);
            $('.prod-tabs .tab').removeClass('active-tab');
            $(target).fadeIn(500);
            $(target).addClass('active-tab');
        });

    }


// Chat Gpt Code
// const decrementButton = document.querySelector('.decrement');
// const incrementButton = document.querySelector('.increment');
// const counterInput = document.querySelector('input[type="number"]');

// decrementButton.addEventListener('click', function() {
//   if (counterInput.value > 0) {
//     counterInput.value--;
//   }
// });

// incrementButton.addEventListener('click', function() {
//   counterInput.value++;
// });

</script>
@endsection