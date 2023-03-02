<div>
    @php
        $totalPrice = 0;
    @endphp


    {{-- 
@if (Auth::check())
    <div class="dropdown dropdown-cart">
        <a href="#" data-bs-toggle="dropdown" class="cart_bt"><i class="icon_bag_alt"></i><strong>{{$cartCount}}</strong></a>
       
            
        @if ($cartCount > 0)
            
        
        <ul class="dropdown-menu" id="cart_items">
            
            @foreach ($cart as $key => $cartItem)
                
            @php
    
      $totalPrice += $cartItem->product->selling_price * $cartItem->quantity ; 
            @endphp
                            
            <li>

                <div class="image"><img src="{{asset($cartItem->productImage->image)}} " alt="image"></div>
                <strong><a href="#">{{$cartItem->product->name }}</a> {{$cartItem->quantity }} x {{$cartItem->product->selling_price }} $</strong>
                <a href="#" wire:click="deleteCartItem({{$cartItem->id}})" class="action"><i class="icon-trash"></i></a>
            </li>

            @endforeach
            @if ($cartCount > 5)

            <li>
                <a href=""><span> More<i class="icon-down-open"></i></span></a>    
                <div>Total :  <span>${{$totalPrice}}</span></div>
                <a href="" class="button_drop">Go to cart</a>
                <a href="" class="button_drop outline">Check out</a>
            </li>            
            
            @else

            <li> 
                <div>Total: <span>${{$totalPrice}}</span></div>
                
                <a href="{{route('index.cart')}}" class="button_drop">Sepet</a>
                <a href="#" wire:click="emptyTrush()" class="button_drop">Sepeti Boşalt</a>
             
            </li>

            @endif


        </ul>

        @endif
    </div>

        @endif --}}















    @auth




        <li class="offcanvas__stikcy--toolbar__list">
            <a class="offcanvas__stikcy--toolbar__btn minicart__open--btn" href="javascript:void(0)" data-offcanvas>
                <span class="offcanvas__stikcy--toolbar__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.51" height="15.443" viewBox="0 0 18.51 15.443">
                        <path
                            d="M79.963,138.379l-13.358,0-.56-1.927a.871.871,0,0,0-.6-.592l-1.961-.529a.91.91,0,0,0-.226-.03.864.864,0,0,0-.226,1.7l1.491.4,3.026,10.919a1.277,1.277,0,1,0,1.844,1.144.358.358,0,0,0,0-.049h6.163c0,.017,0,.034,0,.049a1.277,1.277,0,1,0,1.434-1.267c-1.531-.247-7.783-.55-7.783-.55l-.205-.8h7.8a.9.9,0,0,0,.863-.651l1.688-5.943h.62a.936.936,0,1,0,0-1.872Zm-9.934,6.474H68.568c-.04,0-.1.008-.125-.085-.034-.118-.082-.283-.082-.283l-1.146-4.037a.061.061,0,0,1,.011-.057.064.064,0,0,1,.053-.025h1.777a.064.064,0,0,1,.063.051l.969,4.34,0,.013a.058.058,0,0,1,0,.019A.063.063,0,0,1,70.03,144.853Zm3.731-4.41-.789,4.359a.066.066,0,0,1-.063.051h-1.1a.064.064,0,0,1-.063-.051l-.789-4.357a.064.064,0,0,1,.013-.055.07.07,0,0,1,.051-.025H73.7a.06.06,0,0,1,.051.025A.064.064,0,0,1,73.76,140.443Zm3.737,0L76.26,144.8a.068.068,0,0,1-.063.049H74.684a.063.063,0,0,1-.051-.025.064.064,0,0,1-.013-.055l.973-4.357a.066.066,0,0,1,.063-.051h1.777a.071.071,0,0,1,.053.025A.076.076,0,0,1,77.5,140.448Z"
                            transform="translate(-62.393 -135.3)" fill="currentColor" />
                    </svg>
                </span>
                <span class="offcanvas__stikcy--toolbar__label">Cart</span>
                <span class="items__count">{{ $cartCount }}</span>
            </a>
        </li>


    @endauth

    @guest

        <li class="offcanvas__stikcy--toolbar__list">
            <a class="offcanvas__stikcy--toolbar__btn minicart__open--btn" href="javascript:void(0)" data-offcanvas>
                <span class="offcanvas__stikcy--toolbar__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.51" height="15.443" viewBox="0 0 18.51 15.443">
                        <path
                            d="M79.963,138.379l-13.358,0-.56-1.927a.871.871,0,0,0-.6-.592l-1.961-.529a.91.91,0,0,0-.226-.03.864.864,0,0,0-.226,1.7l1.491.4,3.026,10.919a1.277,1.277,0,1,0,1.844,1.144.358.358,0,0,0,0-.049h6.163c0,.017,0,.034,0,.049a1.277,1.277,0,1,0,1.434-1.267c-1.531-.247-7.783-.55-7.783-.55l-.205-.8h7.8a.9.9,0,0,0,.863-.651l1.688-5.943h.62a.936.936,0,1,0,0-1.872Zm-9.934,6.474H68.568c-.04,0-.1.008-.125-.085-.034-.118-.082-.283-.082-.283l-1.146-4.037a.061.061,0,0,1,.011-.057.064.064,0,0,1,.053-.025h1.777a.064.064,0,0,1,.063.051l.969,4.34,0,.013a.058.058,0,0,1,0,.019A.063.063,0,0,1,70.03,144.853Zm3.731-4.41-.789,4.359a.066.066,0,0,1-.063.051h-1.1a.064.064,0,0,1-.063-.051l-.789-4.357a.064.064,0,0,1,.013-.055.07.07,0,0,1,.051-.025H73.7a.06.06,0,0,1,.051.025A.064.064,0,0,1,73.76,140.443Zm3.737,0L76.26,144.8a.068.068,0,0,1-.063.049H74.684a.063.063,0,0,1-.051-.025.064.064,0,0,1-.013-.055l.973-4.357a.066.066,0,0,1,.063-.051h1.777a.071.071,0,0,1,.053.025A.076.076,0,0,1,77.5,140.448Z"
                            transform="translate(-62.393 -135.3)" fill="currentColor" />
                    </svg>
                </span>
                <span class="offcanvas__stikcy--toolbar__label">Cart</span>
                <span class="items__count">0</span>
            </a>
        </li>
    @endguest





</div>
