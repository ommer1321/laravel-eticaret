<div>

        {{-- Chat Gpt Code --}}
              
        <div class="counter mt-3 mb-3">
            <button wire:click="decrement()" class="decrement">-</button>
            <input type="number" value="{{$this->quantity_val}}" min="0" readonly />
            <button wire:click="increment()" class="increment">+</button>
         
            <button wire:click="addtocart({{$product->id}})" class="btn btn-primary btn-sm" >Add </button>
        </div>

     
   
        @if ($product->quantity > 0)
                                
        <button class="btn btn-success btn-sm mt-3" > Stokta Ürün {{$product->quantity }} var </button>

        @endif
        
        <div class="info-column col-sm-6">
            

            @if ($product->quantity > 0)
            
           
            @if ($product->productColor->count() > 0)
                
            <div class="filter_type">
                <hr>
                <div class="mt-3 mb-3">
                <span style="font-size: 1rem"><strong>Renkler</strong></span>
                
                    {{-- ommer1453 video 26  Düzeltildi--}}
                      @if($this->productQuantity_result == 'outOfStock')

                        <span class="badge bg-danger " > Renk Stokta Yok </span>
                     
                        @elseif ($this->productQuantity_result == 'inStock')
                        <span class="badge bg-success " > Stokta {{$this->selectedProduct_quantity}} Ürün Var </span>
                        @endif
            
                         {{--   Düzeltildi video 26 --}}
                        </div>
                <ul class="mb-0">
                    @foreach ( $product->productColor as $colors )                                      
                    <li>
                        <label class="container_radio">                                        
                                 {{$colors->color->name}}
                                <input type="radio" name="colors" wire:click ="selectedColor({{$colors->id}})"  value="{{$colors->color->code}}">
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    
                    @endforeach
                </ul>

            </div>
            
            @endif

            @else

            <button class="btn btn-danger btn-sm mt-3" > Stokta Ürün Yok </button>


            @endif

        </div>

</div>


