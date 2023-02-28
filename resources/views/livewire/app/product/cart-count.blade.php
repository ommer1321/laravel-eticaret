<div>
@php
    $totalPrice = 0 ;
@endphp 

@if (Auth::check())
    <div class="dropdown dropdown-cart">
        <a href="#" data-bs-toggle="dropdown" class="cart_bt"><i class="icon_bag_alt"></i><strong>{{$cartCount}}</strong></a>
       
            
        @if ($cartCount > 0)
            
        
        <ul class="dropdown-menu" id="cart_items">
            
            @foreach ( $cart as $key => $cartItem )
                
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

        @endif

</div>
