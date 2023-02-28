<div>
    @if (Auth::check())
    @if($wishCount)
    <a href="{{route('index.wishlist')}}"  class="cart_bt"><strong>{{$wishCount}}</strong><i class=" icon-heart-empty"></i> </a>

    @else
    
    <a href="javascript:void(0);"  class="cart_bt"><strong>0</strong><i class=" icon-heart-empty"></i> </a>

    @endif
    
    @endif
</div>
