@extends('layouts.app')

@section('title')
My Order Page
@endsection

@section('css')

	
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

<div class="container">
    <div class="row">

        <div class="col-md-12 mx-5 my-5">

            
        <div class="table-responsive">
            <table class="table align-middle table-striped ">
              <thead>
                <tr>
                    <td>Sipariş ID</td>
                    
                    <td>Sipariş Kodu </td>
                    <td>Kullanıcı Adı</td>
                    <td>Ödeme Türü</td>
                    <td>Sipariş Tarihi</td>
                    <td>İşlemler</td>
                </tr>
           

              </thead>
              <tbody>
         @foreach ($orders as $order )
             
       
         <tr>
             <td>{{$loop->iteration}}</td>
             <td>{{$order->tracking_no}}</td>
             <td>{{$order->status_message}}</td>
             <td>{{$order->payment_mode}}</td>
             <td>{{$order->created_at}}</td>

             <td><a href="{{route('detail.order',$order->id)}}" class="btn btn-primary btn-sm">Detay</a></td>
            </tr>
            
            @endforeach
           

              </tbody>
            </table>
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