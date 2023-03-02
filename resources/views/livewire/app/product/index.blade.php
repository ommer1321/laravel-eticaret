<div class="row row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 mb--n30">

    @if ($products)
            
      
    @foreach ($products as $product)
           
    
    <div class="col custom-col-2 mb-30">
        <article class="product__card">
            <div class="product__card--thumbnail product__swiper--column1 swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                <div class="swiper-wrapper" id="swiper-wrapper-c485c883012fa510e" aria-live="polite" style="transform: translate3d(-375px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="2 / 2" style="width: 345px; margin-right: 30px;">
                        <a class="product__card--thumbnail__link display-block" href="product-details.html">
                            <img class="product__card--thumbnail__img product__primary--img display-block" src="assets/img/product/product5.webp" alt="1">
                            <img class="product__card--thumbnail__img product__secondary--img display-block" src="assets/img/product/product6.webp" alt="2">
                        </a>
                        <div class="product__badge">
                            <span class="product__badge--items sale"></span>
                        </div>
                    </div>
                 @foreach ( $product->productImages as $productImage )
                     
                 <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 2" style="width: 345px; margin-right: 30px;">
                    <a class="product__card--thumbnail__link display-block" href="#">
                        <img class="product__card--thumbnail__img product__primary--img display-block" src="{{asset($productImage->image)}}" alt="product-img">
                        <img class="product__card--thumbnail__img product__secondary--img display-block" src="{{asset($productImage->image)}}" alt="product-img">
                    </a>
                   
                   @if ($product->trend == 1)
                       
                   <div class="product__badge">
                       <span class="product__badge--items sale">Trend</span>
                    </div>
                    
                    @endif

                </div>
                @endforeach
            
                </div>
                <ul class="product__card--action d-flex align-items-center justify-content-center">
                    
                    <li class="product__card--action__list">
                       {{-- wire:click start --}}
                        <a wire:click="addWishlist({{$product->id}})" class="product__card--action__btn" title="Favori" >
                            <svg wire:loading.remove class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="22.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                            <span  class="visually-hidden" >Wishlist</span> 
                            <span wire:loading wire:target='addWishlist' class="">+</span>
                        </a>
                        {{-- wire:click End --}}
                    </li>

                </ul>
                <div class="swiper__nav--btn swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-c485c883012fa510e"></div>
                <div class="swiper__nav--btn swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-c485c883012fa510e"></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <div class="product__card--content text-center">
                <span class="product__card--meta__tag">{{$product->category->name}}</span>
                <h3 class="product__card--title"><a href="{{route('detail.product.app',[$category->slug,$product->slug])}}">{{$product->name}} </a></h3>
                <div class="product__card--price">
                    <span class="current__price">${{$product->selling_price}}</span>
                    <span class="price__divided"></span>
                    <span class="old__price"> ${{$product->original_price}}</span>
                </div>
                <a class="product__card--btn primary__btn" href="{{route('detail.product.app',[$category->slug,$product->slug])}}">İncele</a>
            </div>
        </article>
    </div>
    @endforeach
    
  
    @endif   

</div>