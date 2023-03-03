<div class="product__variant">



    <hr>
    @if ($product->quantity > 0)
        @if ($product->productColor->count() > 0)
            <div class="product__variant--list mb-20">
                <fieldset class="variant__input--fieldset">




                    <legend class="product__variant--title mb-8"><b>Stok : <span class="badge bg-success">Ürün
                                {{ $product->quantity }} var</span></b></legend>
                @else
                    <legend class="product__variant--title mb-8"><b>Stok : <span class="badge bg-danger"> Ürün
                                Yok</span></b></legend>
        @endif

        @if($this->productQuantity_result == 'outOfStock')
        <legend class="product__variant--title mb-8"><b>Renk Adeti : <span class="badge bg-danger">  Yok</span></b></legend>

                     
        @elseif ($this->productQuantity_result == 'inStock')
        <legend class="product__variant--title mb-8"><b>Renk Adeti: <span class="badge bg-success"> {{$this->selectedProduct_quantity}}</span></b></legend>

        
        @endif
        
        <ul class="variant__size d-flex">
            
            @foreach ($product->productColor as $colorItem)
                <li class="">
                   <legend class="product__variant--title m-2">
                    <input type="radio" style="accent-color:#D72323;  width: 20px; height: 20px;"  name="colors" wire:click ="selectedColor({{$colorItem->id}})"  value="{{$colorItem->color->code}}" >
                    
                     <b> {{ $colorItem->color->name }} </b></legend>
                </li>
            @endforeach

        </ul>
        </fieldset>
</div>


<div class="product__variant--list quantity d-flex align-items-center mb-20">
    <div class="quantity__box">
        <button type="button"  wire:click="decrement()"  class="quantity__value quickview__value--quantity " aria-label="quantity value"
            value="Decrease Value">-</button>
        <label>
            <input type="number" class="quantity__number quickview__value--number" value="{{$this->quantity_val}}" data-counter="">
        </label>
        <button type="button"   wire:click="increment()" class="quantity__value quickview__value--quantity " aria-label="quantity value"
            value="Increase Value">+</button>
    
    <a  wire:click="addtocart({{$product->id}})" class="quickview__cart--btn primary__btn" >Sepete Ekle</a>
    </div><a class="variant__wishlist--icon" href="" title="Add to wishlist">
        <svg class="quickview__variant--wishlist__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path
                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32">
            </path>
        </svg>
        Add to Wishlist
    </a>
</div>

<div class="product__variant--list mb-15">
    <button class="variant__buy--now__btn primary__btn" type="submit">Buy it
        now</button>
</div>
@else

<legend class="product__variant--title mb-8"><b>Stok : <span class="badge bg-danger"> Ürün
    Yok</span></b></legend>
@endif
<div class="product__variant--list mb-15">
    <div class="product__details--info__meta">
        <p class="product__details--info__meta--list"><strong>Kategori:</strong>
            <span>   {{ $product->category->name }}</span>
        </p>
        <p class="product__details--info__meta--list"><strong>Marka:</strong>
            <span>   {{ $product->productBrand->name}}</span>
        </p>
        <p class="product__details--info__meta--list"><strong>Trend:</strong>
            <span>@if ($product->trend == 1 ) Evet @else Hayır @endif</span>
        </p>
     
    </div>
</div>
</div>
