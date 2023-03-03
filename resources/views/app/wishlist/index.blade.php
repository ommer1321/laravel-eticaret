@extends('layouts.frontend')

@section('title')
 Favoriler
@endsection

@section('css')
@endsection

@section('style')
   
@endsection



@section('content')

<main class="main__content_wrapper">



    <!-- cart section start -->
    <section class="cart__section section--padding">
        <div class="container">
            <div class="cart__section--inner">
                <form action="#"> 
                    <h2 class="cart__title mb-40">Favoriler</h2>
                    <div class="cart__table">
                        <table class="cart__table--inner">
                            <thead class="cart__table--header">
                                <tr class="cart__table--header__items">
                                    <th class="cart__table--header__list">Ürün</th>
                                    
                                    <th class="cart__table--header__list">Fiyat</th>
                                    <th class="cart__table--header__list text-center">Stok Durumu</th>
                                    <th class="cart__table--header__list text-right">Sepete Ekle</th>
                                </tr>
                            </thead>
                          
                                <livewire:app.wishlist.index  :wishproduct="$wishlist" /> 
                         
                                
                  
                        </table> 
                        <div class="continue__shopping d-flex justify-content-between">
                            <a class="continue__shopping--link" href="{{route('index.home')}}">Alışverişe Devam Et</a>
                            <a class="continue__shopping--clear" href="#">Tüm Ürünler</a>
                        </div>
                    </div> 
                </form> 
            </div>
        </div>     
    </section>
    <!-- cart section end -->

    <!-- Start product section -->
    

</main>


@endsection







@section('js')
@endsection


@section('script')
@endsection
