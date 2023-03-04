<div>
    @php
        $totalPrice = 0;
    @endphp

    @auth

    {{ $cartCount }}

    @endauth

    @guest

      0
    @endguest





</div>
