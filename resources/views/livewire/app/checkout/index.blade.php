@php
    $totalPayment = 0;
@endphp
<div class="row">
    @if ($totalPrice > 0)

        @if (session('productNotSelling'))
            <div class="alert alert-info">{{ session('productNotSelling') }}</div>
        @endif

        <div class="col-lg-7 col-md-6">
            <div class="main checkout__mian">


                <div class="checkout__content--step section__shipping--address">
                    <div class="section__header mb-25">
                        <h2 class="section__header--title h3">İletişim Bilgileri</h2>
                    </div>
                    <div class="section__shipping--address__content">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 mb-20">
                                <div class="checkout__input--list ">
                                    <label class="checkout__input--label mb-5" for="input1">Ad Soyad <span
                                            class="checkout__input--label__star">*</span></label>
                                    <input wire:model.defer="fullname" name="fullname"
                                        class="checkout__input--field border-radius-5" placeholder="Ad Soyad"
                                        id="input1" type="text">
                                </div>
                                @error('fullname')
                                    ( <small class="text-danger"> {{ $message }} </small> )
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 mb-20">
                                <div class="checkout__input--list ">
                                    <label class="checkout__input--label mb-5" for="input1">Telefon <span
                                            class="checkout__input--label__star">*</span></label>
                                    <input type="tel" wire:model.defer="phone"
                                        class="checkout__input--field border-radius-5" placeholder="Telefon"
                                        id="input1" type="text">
                                </div>
                                @error('phone')
                                    ( <small class="text-danger"> {{ $message }} </small> )
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 mb-20">
                                <div class="checkout__input--list ">
                                    <label class="checkout__input--label mb-5" for="input1">E-Mail <span
                                            class="checkout__input--label__star">*</span></label>
                                    <input type="text" wire:model.defer="email"
                                        class="checkout__input--field border-radius-5" placeholder="E-Mail "
                                        id="input1">
                                </div>
                                @error('email')
                                    ( <small class="text-danger"> {{ $message }} </small> )
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 mb-20">
                                <div class="checkout__input--list ">
                                    <label class="checkout__input--label mb-5" for="input1">Posta Kodu <span
                                            class="checkout__input--label__star">*</span></label>
                                    <input type="text" wire:model.defer="pincode"
                                        class="checkout__input--field border-radius-5" placeholder="Posta Kodu"
                                        id="input1">
                                </div>
                                @error('pincode')
                                    ( <small class="text-danger"> {{ $message }} </small> )
                                @enderror
                            </div>




                        </div>
                    </div>


                </div>
                <div class="order-notes mb-20">
                    <label class="checkout__input--label mb-5" for="order">Adres <span
                            class="checkout__input--label__star">*</span></label>
                    <textarea wire:model.defer="address" class="checkout__notes--textarea__field border-radius-5" id="order"
                        placeholder="Adres" spellcheck="false"></textarea>
                    @error('address')
                        ( <small class="text-danger"> {{ $message }} </small> )
                    @enderror
                </div>
                <div class="checkout__content--step__footer d-flex align-items-center">
                    {{-- <button wire:click="codOrder" class="continue__shipping--btn primary__btn border-radius-5">Nakit
                        Ödeme</button> --}}
                    <a class="previous__link--content" href="{{ route('index.cart') }}">Ödeme Kontrol Sayfasına
                        Dön</a>
                </div>

            </div>
        </div>
        <div class="col-lg-5 col-md-6">
            <aside class="checkout__sidebar sidebar border-radius-10">
                <h2 class="checkout__order--summary__title text-center mb-15">Ürün Kontrol Alanı</h2>
                <div class="cart__table checkout__product--table">
                    <table class="cart__table--inner">
                        <tbody class="cart__table--body">
                            @if ($cart)

                                @foreach ($cart as $cartItem)
                                    <tr class="cart__table--body__items">
                                        <td class="cart__table--body__list">
                                            <div class="product__image two  d-flex align-items-center">
                                                <div class="product__thumbnail border-radius-5">
                                                    <a class="display-block" href="{{ route('detail.product.app', [$cartItem->product->category->slug, $cartItem->product->slug]) }}"><img
                                                            class="display-block border-radius-5"
                                                            src="{{ asset($cartItem->productImage->image) }}"
                                                            alt="cart-product"></a>
                                                    <span class="product__thumbnail--quantity">{{ $cartItem->quantity }}</span>
                                                </div>
                                                <div class="product__description">
                                                    <h4 class="product__description--name"><a
                                                            href="product-details.html">{{ $cartItem->product->name  }}</a>
                                                    </h4>
                                                    <span class="product__description--variant">{{ $cartItem->product->selling_price }}₺ X {{ $cartItem->quantity }} Adet</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="cart__table--body__list">
                                            <span class="cart__price">{{  $cartItem->product->selling_price * $cartItem->quantity }} ₺</span>
                                        </td>
                                     
                                    </tr>

                                    @php
                                        $totalPayment += $cartItem->product->selling_price * $cartItem->quantity
                                    @endphp
                                @endforeach
                          
                            <tr class="checkout__total--footer__items ">
                                <td class="checkout__total--footer__title  text-left">Toplam </td>
                                <td class="checkout__total--footer__amount  text-right">{{$totalPayment}}₺</td>
                            </tr> 
                            
                            @endif
                        </tbody>
                    </table>
                </div>
{{-- 
                <div class="payment__history mb-30">
                    <h3 class="payment__history--title mb-20">Payment</h3>
                    <ul class="payment__history--inner d-flex">
                        <li class="payment__history--list"><button class="payment__history--link primary__btn"
                                type="submit">Credit Card</button></li>
                        <li class="payment__history--list"><button class="payment__history--link primary__btn"
                                type="submit">Bank Transfer</button></li>
                        <li class="payment__history--list"><button class="payment__history--link primary__btn"
                                type="submit">Paypal</button></li>
                    </ul>
                </div> --}}
             
                <button wire:click="codOrder" class="checkout__now--btn primary__btn">Siparişi Tamamla</button>
            </aside>
        </div>
    @else


    <div>

        @if (session('productNotSelling'))
            <div class="alert alert-info">{{ session('productNotSelling') }}</div>
        @endif







        <div class="col">
            <div class="error__content text-center">
        
                <h2 class="error__content--title">Opps ! Henüz Sepetiniz Boş</h2>
                <p class="error__content--desc"> Alışverişi Tamamlamak İçin Sepetinize Ürün Eklemeniz Gerek.</p>
                <a class="error__content--btn primary__btn" href="{{route('index.home')}}">Alışveriş Yap</a>
            </div>
        </div>








   

    </div>
@endif

</div>
