<div>
    @php
        $totalPrice = 0;
    @endphp


@auth


    <!-- Start offCanvas minicart -->
    <div class="offCanvas__minicart" tabindex="-1">
        <div class="minicart__header ">
            <div class="minicart__header--top d-flex justify-content-between align-items-center">
                <h3 class="minicart__title"> Sepetiniz</h3>
                <button class="minicart__close--btn" aria-label="minicart close btn" data-offcanvas>
                    <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32" d="M368 368L144 144M368 144L144 368" />
                    </svg>
                </button>
            </div>
            <p class="minicart__header--desc">Sepetinizdeki Ürünleri Burada Görebilirsiniz</p>
        </div>
        <div class="minicart__product">

            @if ($cartCount > 0)
                @foreach ($cart as $key => $cartItem)
                    @php
                        
                        $totalPrice += $cartItem->product->selling_price * $cartItem->quantity;
                    @endphp
                    {{--  --}}
                    <div class="minicart__product--items d-flex">
                        <div class="minicart__thumbnail">
                            <a href="product-details.html"><img src="{{ asset($cartItem->productImage->image) }}"
                                    alt="prduct-img"></a>
                        </div>
                        <div class="minicart__text">
                            <h4 class="minicart__subtitle"><a href="product-details.html">{{ $cartItem->product->name }}</a></h4>
                            <span class="color__variant d-block"><b>Renk: </b> {{ $cartItem->productColor->color->name }}</span>
                            <span class="color__variant d-block"><b>Miktar: </b> {{ $cartItem->quantity }} Adet</span>
                            
                            <div class="minicart__price">
                          
                            <span class="current__price"> {{$cartItem->product->selling_price}} ₺</span>
                                <span class="old__price">{{$cartItem->product->original_price}} ₺</span>
                              
                            </div>

                            <div class="minicart__text--footer d-flex align-items-center">
                                {{-- <div class="quantity__box minicart__quantity">
                                    <button type="button" class="quantity__value decrease" aria-label="quantity value"
                                        value="Decrease Value">-</button>
                                    <label>
                                        <input type="number" class="quantity__number" value="1" data-counter />
                                    </label>
                                    <button type="button" class="quantity__value increase" aria-label="quantity value"
                                        value="Increase Value">+</button>
                                </div> --}}
                                <a href="#" class="minicart__product--remove" wire:click="deleteCartItem({{ $cartItem->id }})"  aria-label="minicart remove btn">Kaldır</a>

                            </div>
                        </div>
                    </div>
                    {{--  --}}
                @endforeach


        </div>
        <div class="minicart__amount">
          
            <div class="minicart__amount_list d-flex justify-content-between">
                <span>Total:</span>
                <span><b>${{ $totalPrice }}</b></span>
            </div>
        </div>
        <div class="minicart__conditions text-center">
            <label class="minicart__conditions--label" for="accept">I agree with the <a
                    class="minicart__conditions--link" href="privacy-policy.html">Privacy And Policy</a></label>
        </div>
        <div class="minicart__button d-flex justify-content-center">

            <a class="primary__btn minicart__button--link" href="{{ route('index.cart') }}">Sepet</a>
            <a class="primary__btn minicart__button--link" href="#" wire:click="emptyTrush()">Sepeti Boşalt</a>
        </div>
    @else
        Ürün yok
        @endif
    </div>
    <!-- End offCanvas minicart -->
@endauth







@guest
    <div class="offCanvas__minicart" tabindex="-1">
        <div class="minicart__header ">
            <div class="minicart__header--top d-flex justify-content-between align-items-center">
                <h3 class="minicart__title"> Sepetiniz</h3>
                <button class="minicart__close--btn" aria-label="minicart close btn" data-offcanvas>
                    <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32" d="M368 368L144 144M368 144L144 368" />
                    </svg>
                </button>
            </div>
            <p class="minicart__header--desc">Giriş Yapınız</p>
        </div>
    </div>
@endguest



</div>
{{--  --}}

