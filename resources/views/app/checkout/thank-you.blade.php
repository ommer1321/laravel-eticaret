@extends('layouts.frontend')

@section('title')
    Teşekkürler
@endsection

@section('css')
@endsection

@section('style')
@endsection



@section('content')
    <main class="main__content_wrapper">


        <!-- Start checkout page area -->
        <div class="checkout__page--area section--padding">
            <div class="container">



                <div class="row">

                    <div class="col">
                        <div class="error__content text-center">

                            <h2 class="error__content--title">Tebrikler ! Alışverişiniz Tamamlandı  </h2>
                            <p class="error__content--desc"> As Yazılım'a Güvendiğiniz İçin Teşekkürler Lütfen Mailinizi Kontrol Ediniz.</p>
                            <a class="error__content--btn primary__btn" href="{{ route('index.home') }}">Alışverişe Devam Et</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- End checkout page area -->

    </main>
@endsection







@section('js')
@endsection


@section('script')
@endsection
