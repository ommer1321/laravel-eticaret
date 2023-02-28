<div class="row">   


{{-- session Message Start --}}
    @if (session()->has('message'))
<div class="alert alert-info">{{session('message')}} ( To Login Click <a href="{{url('/login')}}"><strong>Here</strong></a> )</div>        
    @endif
   
    @if (session()->has('existwish'))
    <div class="alert alert-warning">{{session('existwish')}} </div>        
        @endif

        @if (session()->has('addwish'))
        <div class="alert alert-success">{{session('addwish')}} </div>        
            @endif
{{-- session Message End--}}


        <div class="items-sorting">
            <div class="row">
                <div class="col-6">
                    <div class="results_shop">
                        Showing <span class="text-danger">{{$products->count()}}</span> results
                    </div>
                </div>
                
                <div class="col-6">
                    <div class="form-group">
                        <select name="sort-by">
                          
                          @if($brandInputs)

                              @foreach ($brandInputs as $itemBrand )
                                  
                              <option>{{$itemBrand}}</option>
                              @endforeach

                              @else

                              <option>No Options</option>
                            
                              @endif
                          
                        </select>
                    </div>
                </div>

            </div>
        </div>


        @if ($products)
            
      
    @foreach ($products as $product)
           
    <div class="shop-item col-lg-3 col-md-6 col-sm-6">
        <div class="inner-box">
            <div class="image-box">
                <figure class="image">
                    <a href="{{route('detail.product.app',[$category->slug,$product->slug])}}">
                     
                        {{-- ommer1453 burada konrol hatası var Undefined
                         array key 0 nekadar kontrol edersem edeyım
                          tekrar bos dızı dondurup hatra alıyor --}}

                          {{-- Düzeltidi --}}
                          
                     @if ($product->productImages->count() > 0)
                     <img src="{{asset($product->productImages[0]->image)}}" alt="">
            


                     @endif
                      
                    
                
                 


                    </figure>
                <div class="item-options clearfix">
                    <a href="" class="btn_shop"><span class="icon-basket"></span>
                
                    </a>
                   {{-- wire:click start --}}
                    <a wire:click="addWishlist({{$product->id}})" class="btn_shop" >
                        <span wire:loading.remove class="icon-heart-8 "></span>
                 
                    <span wire:loading wire:target='addWishlist' class="icon-spin5 animate-spin text-white"></span>
                </a>
                {{-- wire:click End --}}
                    <a href="" class="btn_shop"><span class="icon-eye"></span>
                
                    </a>
                </div>
            </div>
            <div class="product_description">
                <div class="rating">
                    <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                </div>
                <h3><a href="{{route('detail.product.app',[$category->slug,$product->slug])}}">{{$product->name}}</a></h3>
                <div class="price">
                    <span class="offer">${{$product->original_price}}</span> ${{$product->selling_price}}
                </div>
            </div>
          
            </a>
        </div>
        
    </div>
    <!--End Shop Item-->

    @endforeach
    
    @else
    <div class="alert alert-danger"><strong>No Products</strong></div>
    @endif                
</div>


   
                        <!--End Shop Item-->
                    </div>
                    <!-- End col -->
        
                 
                </div>
        
                 <!--Sidebar-->
           <div class="col-lg-3 col-md-6 col-sm-6">
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
              
                <div class="form-group">
                  @foreach ($category->brands as $brandItem)
                      
                  <label class="container_check">
                       {{Str::title($brandItem->name);}}
              
                       <input  wire:model="brandInputs[]" type="checkbox" value="{{$brandItem->id}}" >
                       <span class="checkmark"></span> 
                    </label>
                    @endforeach
                              
                </div> 
                
          
                <div class="filter_type">
                    <h6>Sorting By</h6>
                     <ul class="mb-0">
                        <li>
                            <label class="container_radio">
                               High To Low
                                <input type="radio" name="priceSort" wire:model="priceInputs"   value="high-to-low">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        <li>
                            <label class="container_radio">
                                Low To High
                                <input type="radio" name="priceSort"  wire:model="priceInputs" value="low-to-high" >
                                <span class="checkmark"></span>
                            </label>
                        </li>
              
                    </ul>
                </div>
                
                </div>
