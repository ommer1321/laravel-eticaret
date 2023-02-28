@extends('layouts.app')

@section('title')
Checkout Page
@endsection

@section('css')
	
<!-- SPECIFIC CSS -->
<link href="{{asset('assets/css/shop.css')}}" rel="stylesheet">
	
@endsection

@section('style')

@endsection


@section('content')

<section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
	<div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
		<div class="animated fadeInDown">
			<h1>Shop checkout</h1>
			<p>Cursus neque cursus curae ante scelerisque vehicula.</p>
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
					<livewire:app.checkout.index   />    
				</div>
			</div>
		</div>
		<!-- End Container -->
	</main>


@endsection







@section('js')

@endsection


@section('script')



<script>
	if ($('.prod-tabs .tab-btn').length) {
		$('.prod-tabs .tab-btn').on('click', function (e) {
			e.preventDefault();
			var target = $($(this).attr('href'));
			$('.prod-tabs .tab-btn').removeClass('active-btn');
			$(this).addClass('active-btn');
			$('.prod-tabs .tab').fadeOut(0);
			$('.prod-tabs .tab').removeClass('active-tab');
			$(target).fadeIn(500);
			$(target).addClass('active-tab');
		});

	}
</script>

@endsection