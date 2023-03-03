@php
    $total_cart_price = 0 ;
@endphp

<div class="container-fluid">
    <div class="cart__section--inner">
        <form action="#"> 
            <h2 class="cart__title mb-40">Alışveriş Sepeti</h2>
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart__table">
                        <table class="cart__table--inner">
                            <thead class="cart__table--header">
                                <tr class="cart__table--header__items">
                                    <th class="cart__table--header__list">Ürün</th>
                                    <th class="cart__table--header__list">Fiyat</th>
                                    <th class="cart__table--header__list">Miktar</th>
                                    <th class="cart__table--header__list">Toplam</th>
                                </tr>
                            </thead>
                           
          <tbody class="cart__table--body">
                                      
            @if ($cart)   
            @foreach ($cart as $cartitem )                
            <tr class="cart__table--body__items">
                <td class="cart__table--body__list">
                    <div class="cart__product d-flex align-items-center">
                        <button class="cart__remove--btn" aria-label="search button" wire:click="deleteCartItem({{$cartitem->id}})" type="button"><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16px" height="16px"><path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"></path></svg></button>
                        <div class="cart__thumbnail">
                            @if ($cartitem->productImage->image)
                            <a
                                href="{{route('detail.product.app',[$cartitem->Product->category->slug,$cartitem->Product->slug])}}"><img
                                    class="border-radius-5" src=" {{asset($cartitem->productImage->image)}}"
                                    alt="cart-product"></a>
                        @endif
                        </div>
                        <div class="cart__content">
                            <h3 class="cart__content--title h4"><a href="product-details.html">{{ Str::title( $cartitem->product->name) }}</a></h3>
                            <span class="cart__content--variant">Renk: {{ Str::title($cartitem->productColor->color->name)  }}</span>
                            
                        </div>
                    </div>
                </td>
                <td class="cart__table--body__list">
                    <span class="cart__price">{{ $cartitem->product->selling_price}}₺</span>
                </td>
                <td class="cart__table--body__list">
                    <div class="quantity__box">
                        <button type="button" class="quantity__value quickview__value--quantity " wire:loading.remove  wire:click ="extraction({{$cartitem->id}})" aria-label="quantity value" value="Decrease Value">-</button>
                       
                        <button type="button" class="quantity__value quickview__value--quantity " wire:loading wire:target='extraction'  aria-label="quantity value" value="Increase Value"></button>
                        <label>
                            <input type="number" class="quantity__number quickview__value--number" value="{{$cartitem->quantity}}" data-counter="">
                        </label>
                        <button type="button" class="quantity__value quickview__value--quantity " wire:loading.remove  wire:click ="increment({{$cartitem->id}})" aria-label="quantity value" value="Increase Value">+</button>
                    
                        <button type="button" class="quantity__value quickview__value--quantity " wire:loading wire:target='increment'  aria-label="quantity value" value="Increase Value"></button>

                        
                    </div>
                </td>
                <td class="cart__table--body__list">
                    <span class="cart__price end">{{ $cartitem->quantity * $cartitem->product->selling_price}} ₺</span>
                </td>
            </tr>

            @php
                $total_cart_price  +=  $cartitem->quantity * $cartitem->product->selling_price
            @endphp


            @endforeach
            @endif

        </tbody>

    </table> 
    <div class="continue__shopping d-flex justify-content-between">
        <a class="continue__shopping--link" href="{{route('index.home')}}">Alışverişe Devam Et</a>
        <button class="continue__shopping--clear"  wire:click ="deleteAll()"  type="button">Tümünü Sil </button>
    </div>
</div>
</div>
<div class="col-lg-4">
<div class="cart__summary border-radius-10">
    <div class="coupon__code mb-30">
        <h3 class="coupon__code--title">Kupon</h3>
        <p class="coupon__code--desc">Kupon Kodunuz Var İse Bu Alana Giriniz.</p>
        <div class="coupon__code--field d-flex">
            <label>
                <input class="coupon__code--field__input border-radius-5" placeholder="Kupon Kodu" type="text">
            </label>
            <button class="coupon__code--field__btn primary__btn" type="submit">Onayla</button>
        </div>
    </div>
    <div class="cart__note mb-20">
        <h3 class="cart__note--title">Not</h3>
        <p class="cart__note--desc">Satıcıya Not Bırak</p>
        <textarea class="cart__note--textarea border-radius-5"></textarea>
    </div>
    <div class="cart__summary--total mb-20">
        <table class="cart__summary--total__table">
            <tbody>
                <tr class="cart__summary--total__list">
                    <td class="cart__summary--total__title text-left">İndirim</td>
                    <td class="cart__summary--amount text-right">0.00 ₺</td>
                </tr>
                <tr class="cart__summary--total__list">
                    <td class="cart__summary--total__title text-left">Fiyat Toplamı</td>
                    <td class="cart__summary--amount text-right">{{$total_cart_price }} ₺</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="cart__summary--footer">
        {{-- <p class="cart__summary--footer__desc">Shipping &amp; taxes calculated at checkout</p> --}}
        <ul class="d-flex justify-content-between">
            <li><a class="cart__summary--footer__btn primary__btn checkout" href="{{route('index.checkout')}}">Tamamla</a></li>
            

        </ul>
    </div>
</div> 
</div>
</div> 
</form> 
</div>
</div>     