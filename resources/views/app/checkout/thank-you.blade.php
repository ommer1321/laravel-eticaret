@extends('layouts.app')

@section('title')
Thank You Page
@endsection

@section('css')

	
@endsection

@section('style')

@endsection



@section('content')

<section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
	<div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
		<div class="animated fadeInDown">
			<h1>Thankyo Page</h1>
	
		</div>
	</div>
</section>
<!-- End Section -->

		
	<main>
		<div id="position">
			<div class="container">
				<ul>
					<li><a href="#">Home</a>
					</li>
					<li><a href="#">Category</a>
					</li>
					<li>Page active</li>
				</ul>
			</div>
		</div>
		<!-- End Position -->

        <div class="container margin_60">
			<div class="checkout-page">

				<div class="row">
					<div class="banner colored">
                        {{-- <h4>As Stone'a Güvendiğiniz İçin Teşekkürler  <span>Alışverişe Devam Etmek İçin</span></h4> --}}
                  <h3 class="text-white block">As Stone'a Güvendiğiniz İçin  <b> Teşekkürler</b> Alışverişe Devam Etmek İçin</h3>
                        <a href="{{route('index.home')}}" class="btn_1 white">Anasayfaya Dön</a>
                    </div>  
				</div>
			</div>
		</div>
</main>

@endsection







@section('js')

@endsection


@section('script')
@endsection


