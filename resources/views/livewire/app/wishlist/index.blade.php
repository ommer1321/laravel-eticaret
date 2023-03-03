<div>


    {{--  --}}

    @foreach ($wishlist as $key => $wishitem)
        <tbody class="cart__table--body">
            <tr class="cart__table--body__items">
                <td class="cart__table--body__list">
                    <div class="cart__product d-flex align-items-center">

                        <livewire:app.wishlist.remove-button :wishproduct="$wishitem" />

                        <div class="cart__thumbnail">
                            @if ($wishitem->getImage->image)
                                <a
                                    href="{{ route('detail.product.app', [$wishitem->ProductDetail->category->slug, $wishitem->ProductDetail->slug]) }}"><img
                                        class="border-radius-5" src="{{ asset($wishitem->getImage->image) }}"
                                        alt="cart-product"></a>
                            @endif
                        </div>
                        <div class="cart__content">
                            <h3 class="cart__content--title h4"><a
                                    href="{{ route('detail.product.app', [$wishitem->ProductDetail->category->slug, $wishitem->ProductDetail->slug]) }}">{{ Str::title($wishitem->productDetail->name) }}</a>
                            </h3>
                            {{-- <span class="cart__content--variant">WEIGHT: 2 Kg</span> --}}
                        </div>
                    </div>
                </td>
                <td class="cart__table--body__list">
                    <span class="cart__price">{{ Str::title($wishitem->productDetail->selling_price)}} ₺</span>
                </td>
                <td class="cart__table--body__list text-center">
                    <span class="in__stock text__secondary">
                        
                  
                                           
                        {{-- <span class="cart__content--variant">WEIGHT: 2 Kg</span> --}}

                        @if ($wishitem->productDetail->quantity > 0) <div class="text-success">Stokta</div> @else <div class="text-danger">Stokta Yok</div>  @endif</span>
                </td>
                <td class="cart__table--body__list text-right">
                    <a class="wishlist__cart--btn primary__btn" href="#">Sepete Ekle</a>
                </td>
            </tr>

        </tbody>
    @endforeach
</div>
