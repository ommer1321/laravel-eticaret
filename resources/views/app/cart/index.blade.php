@extends('layouts.app')

@section('title')
Cart Page
@endsection

@section('css')
	<!-- SPECIFIC CSS -->
	<link href="{{asset('assets/css/admin.css')}}" rel="stylesheet">
	
@endsection

@section('style')
@endsection


@section('content')

<section class="parallax-window" data-parallax="scroll" data-image-src="img/admin_top.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.4)">
        <div class="animated fadeInDown">
            <h1>Hello <i>{{auth()->user()->name}}</i></h1>
            <p>Cursus neque cursus curae ante scelerisque vehicula.</p>
        </div>
    </div>
</section>
<!-- End section -->

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

		<div class="margin_60 container">
			<div id="tabs" class="tabs">
				<nav>
					<ul>
						<li>
						</li>
						
					</ul>
				</nav>
				<div class="content">

					<section id="section-1">


                        {{-- Wish Start --}}
				
                        
                                
                                <livewire:app.cart.index   /> 



                        {{-- Wish End --}}
						

					</section>
					<!-- End section  -->

					</div>
					<!-- End content -->
				</div>
				<!-- End tabs -->
			</div>
			<!-- end container -->
	</main>


@endsection







@section('js')
	<!-- Specific scripts -->
	<script src="{{asset('assets/js/tabs.js')}}"></script>
@endsection


@section('script')


	<script>
		new CBPFWTabs(document.getElementById('tabs'));
	</script>
	<script>
		$('.wishlist_close_admin').on('click', function (c) {
			$(this).parent().parent().parent().fadeOut('slow', function (c) {});
		});
	</script>
@endsection